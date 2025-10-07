<?php

namespace App\Tests\Controller;

use App\Entity\Proposition;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class PropositionControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private EntityManagerInterface $manager;
    private EntityRepository $propositionRepository;
    private string $path = '/proposition/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->manager = static::getContainer()->get('doctrine')->getManager();
        $this->propositionRepository = $this->manager->getRepository(Proposition::class);

        // Supprime toutes les propositions existantes
        foreach ($this->propositionRepository->findAll() as $object) {
            $this->manager->remove($object);
        }

        $userRepository = $this->manager->getRepository(User::class);
        foreach ($userRepository->findAll() as $user) {
            $this->manager->remove($user);
        }

        $this->manager->flush();
    }

    private function createUser(): User
    {
        $user = new User();
        $user->setEmail('test@example.com');
        $user->setPassword('$2y$13$hashedpassword');
        $user->setRoles(['ROLE_USER']);
        $this->manager->persist($user);
        $this->manager->flush();

        return $user;
    }

    public function testIndex(): void
    {
        $this->client->request('GET', $this->path);

        // Si redirection 301, suivre la redirection
        if ($this->client->getResponse()->isRedirect()) {
            $this->client->followRedirect();
        }

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Proposition');
    }

    public function testNew(): void
    {
        $user = $this->createUser();

        // Simuler la connexion de l'utilisateur
        $this->client->loginUser($user);

        $crawler = $this->client->request('GET', $this->path . 'new');
        self::assertResponseIsSuccessful();


        $form = $crawler->selectButton('Save')->form([
            'proposition_form[title]' => 'Test title',
            'proposition_form[description]' => 'Test description',
            'proposition_form[category]' => [0],
        ]);

        $this->client->submit($form);

        self::assertResponseRedirects();
        self::assertSame(1, $this->propositionRepository->count([]));

        $proposition = $this->propositionRepository->findOneBy(['title' => 'Test title']);
        self::assertNotNull($proposition);
        self::assertSame('Test description', $proposition->getDescription());
    }

    public function testShow(): void
    {
        $user = $this->createUser();

        $fixture = new Proposition();
        $fixture->setTitle('My Title');
        $fixture->setDescription('My description');
        $fixture->setCategory(['general']);
        $fixture->setUser($user);

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertSelectorTextContains('body', 'My Title'); // Vérifier que le titre apparaît
    }

    public function testEdit(): void
    {
        $user = $this->createUser();

        // Simuler la connexion si nécessaire
        $this->client->loginUser($user);

        $fixture = new Proposition();
        $fixture->setTitle('Old title');
        $fixture->setDescription('Old description');
        $fixture->setCategory(['general']);
        $fixture->setUser($user);

        $this->manager->persist($fixture);
        $this->manager->flush();

        $crawler = $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        // ✅ FIX : Utiliser le bon nom de formulaire
        $form = $crawler->selectButton('Update')->form([
            'proposition_form[title]' => 'New title',
            'proposition_form[description]' => 'New description',
        ]);

        $this->client->submit($form);

        self::assertResponseRedirects();

        $this->manager->clear();
        $updated = $this->propositionRepository->find($fixture->getId());

        self::assertSame('New title', $updated->getTitle());
        self::assertSame('New description', $updated->getDescription());
    }

    public function testRemove(): void
    {
        $user = $this->createUser();

        $this->client->loginUser($user);

        $fixture = new Proposition();
        $fixture->setTitle('To delete');
        $fixture->setDescription('Desc');
        $fixture->setCategory(['general']);
        $fixture->setUser($user);

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertResponseRedirects();
        self::assertSame(0, $this->propositionRepository->count([]));
    }
}
