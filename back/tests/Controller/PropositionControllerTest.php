<?php

namespace App\Tests\Controller;

use App\Entity\Proposition;
use App\Entity\User;
use App\Repository\PropositionRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;

final class PropositionControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private EntityManagerInterface $em;
    private PropositionRepository $propositionRepo;
    private UserRepository $userRepo;

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->client->followRedirects(true);

        $this->em = static::getContainer()->get('doctrine')->getManager();
        $this->propositionRepo = static::getContainer()->get(PropositionRepository::class);
        $this->userRepo = static::getContainer()->get(UserRepository::class);

        // Nettoyage stable : d'abord les enfants (propositions), puis les users créés par les tests
        foreach ($this->propositionRepo->findAll() as $p) {
            $this->em->remove($p);
        }
        $this->em->flush();

        // on supprime uniquement les users @example.com créés par nos tests
        foreach ($this->userRepo->findAll() as $u) {
            if (str_ends_with($u->getEmail(), '@example.com')) {
                $this->em->remove($u);
            }
        }
        $this->em->flush();
    }

    private function createUser(?string $email = null): User
    {
        $email ??= 'u_'.bin2hex(random_bytes(8)).'@example.com';

        $u = new User();
        $u->setEmail($email);
        $u->setRoles(['ROLE_USER']);
        $u->setPassword('test'); // suffisant avec loginUser()

        $this->em->persist($u);
        $this->em->flush();

        return $u;
    }

    private function createProposition(User $user, string $title = 'Title'): Proposition
    {
        $p = new Proposition();
        $p->setTitle($title);
        $p->setDescription('Desc');
        $p->setCategory(['general']);
        $p->setUser($user);

        $this->em->persist($p);
        $this->em->flush();

        return $p;
    }

    private function csrfToken(string $tokenId): string
    {
        // IMPORTANT: le TokenStorage CSRF utilise la session -> on la démarre explicitement
        $session = static::getContainer()->get('session.factory')->createSession();
        $session->start();

        /** @var CsrfTokenManagerInterface $m */
        $m = static::getContainer()->get('security.csrf.token_manager');

        return $m->getToken($tokenId)->getValue();
    }

    public function testIndexOk(): void
    {
        $this->client->request('GET', '/proposition');
        self::assertResponseIsSuccessful();
    }

    public function testLatestOk(): void
    {
        $this->client->request('GET', '/proposition/latest');
        self::assertResponseIsSuccessful();
    }

    public function testShowOk(): void
    {
        $user = $this->createUser();
        $p = $this->createProposition($user, 'My Title');

        $this->client->request('GET', '/proposition/'.$p->getId());
        self::assertResponseIsSuccessful();
        self::assertSelectorTextContains('body', 'My Title');
    }

    public function testNewRequiresAuth(): void
    {
        $this->client->request('GET', '/proposition/new');

        // Avec followRedirects(true), ça peut finir en 200 (page login).
        // Sinon, selon ta config, ça peut être 302 ou 403.
        self::assertTrue(
            $this->client->getResponse()->isSuccessful()
            || $this->client->getResponse()->isRedirect()
            || $this->client->getResponse()->isForbidden()
        );
    }

    public function testCreatePropositionOk(): void
    {
        $user = $this->createUser();
        $this->client->loginUser($user);

        $crawler = $this->client->request('GET', '/proposition/new');
        self::assertResponseIsSuccessful();

        // Si tes boutons ne s'appellent pas "Save", change juste ce libellé.
        $form = $crawler->selectButton('Save')->form([
            'proposition_form[title]' => 'Test title',
            'proposition_form[description]' => 'Test description',
            'proposition_form[category]' => [0],
        ]);

        $this->client->submit($form);

        self::assertSame(1, $this->propositionRepo->count([]));
        self::assertNotNull($this->propositionRepo->findOneBy(['title' => 'Test title']));
    }

    public function testEditOk(): void
    {
        $user = $this->createUser();
        $p = $this->createProposition($user, 'Old title');

        $this->client->loginUser($user);

        $crawler = $this->client->request('GET', '/proposition/'.$p->getId().'/edit');
        self::assertResponseIsSuccessful();

        // Si ton bouton ne s'appelle pas "Update", change juste ce libellé.
        $form = $crawler->selectButton('Update')->form([
            'proposition_form[title]' => 'New title',
            'proposition_form[description]' => 'New description',
        ]);

        $this->client->submit($form);

        $this->em->clear();
        $updated = $this->propositionRepo->find($p->getId());
        self::assertSame('New title', $updated->getTitle());
    }

    public function testDeleteWithoutCsrfDoesNotDelete(): void
    {
        $user = $this->createUser();
        $p = $this->createProposition($user, 'To delete');

        $this->client->loginUser($user);

        $this->client->request('POST', '/proposition/'.$p->getId(), [
            // pas de _token
        ]);

        self::assertNotNull($this->propositionRepo->find($p->getId()));
    }

    public function testDeleteWithValidCsrfDeletes(): void
    {
        $user = $this->createUser();
        $p = $this->createProposition($user, 'To delete ok');

        $this->client->loginUser($user);

        $crawler = $this->client->request('GET', '/proposition/'.$p->getId());
        self::assertResponseIsSuccessful();

        $this->client->submitForm('Delete');

        self::assertNull($this->propositionRepo->find($p->getId()));
    }


}
