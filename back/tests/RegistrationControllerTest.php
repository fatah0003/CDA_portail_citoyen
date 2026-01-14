<?php

namespace App\Tests;

use App\Entity\Proposition;
use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RegistrationControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private EntityManagerInterface $em;
    private UserRepository $userRepository;

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->client->followRedirects();

        $this->em = static::getContainer()->get('doctrine')->getManager();
        $this->userRepository = static::getContainer()->get(UserRepository::class);

        // Nettoyage (enfants -> parents) pour éviter FK
        $propRepo = $this->em->getRepository(Proposition::class);
        foreach ($propRepo->findAll() as $p) {
            $this->em->remove($p);
        }

        foreach ($this->userRepository->findAll() as $u) {
            $this->em->remove($u);
        }

        $this->em->flush();
    }

    public function testRegister(): void
    {
        $crawler = $this->client->request('GET', '/register');
        self::assertResponseIsSuccessful();

        $form = $crawler->selectButton("S'inscrire")->form([
            'registration_form[email]' => 'me@example.com',
            'registration_form[infosUser][firstName]' => 'John',
            'registration_form[infosUser][lastName]' => 'Doe',
            'registration_form[infosUser][city]' => 'Paris',
            'registration_form[infosUser][zipCode]' => '75001',
            'registration_form[infosUser][phoneNumber]' => '0612345678',
            'registration_form[infosUser][userName]' => 'johndoe',
            'registration_form[infosUser][birthDate]' => '1990-01-01',
            'registration_form[plainPassword][first]' => 'Password123!',
            'registration_form[plainPassword][second]' => 'Password123!',
            'registration_form[agreeTerms]' => true,
        ]);

        $this->client->submit($form);

        self::assertCount(1, $this->userRepository->findAll());

        $user = $this->userRepository->findOneBy(['email' => 'me@example.com']);
        self::assertInstanceOf(User::class, $user);
        self::assertNotSame('Password123!', $user->getPassword());
    }

    public function testRegisterWithInvalidEmailIsRejected(): void
    {
        $crawler = $this->client->request('GET', '/register');
        self::assertResponseIsSuccessful();

        $form = $crawler->selectButton("S'inscrire")->form([
            'registration_form[email]' => 'invalid-email',
            'registration_form[infosUser][firstName]' => 'John',
            'registration_form[infosUser][lastName]' => 'Doe',
            'registration_form[infosUser][city]' => 'Paris',
            'registration_form[infosUser][zipCode]' => '75001',
            'registration_form[infosUser][phoneNumber]' => '0612345678',
            'registration_form[infosUser][userName]' => 'johndoe2',
            'registration_form[infosUser][birthDate]' => '1990-01-01',
            'registration_form[plainPassword][first]' => 'Password123!',
            'registration_form[plainPassword][second]' => 'Password123!',
            'registration_form[agreeTerms]' => true,
        ]);

        $this->client->submit($form);

        // Attendu normal : le form reste affiché + aucun user créé
        self::assertCount(0, $this->userRepository->findAll());
    }

    public function testRegisterWithMismatchedPasswordsIsRejected(): void
    {
        $crawler = $this->client->request('GET', '/register');
        self::assertResponseIsSuccessful();

        $form = $crawler->selectButton("S'inscrire")->form([
            'registration_form[email]' => 'test@example.com',
            'registration_form[infosUser][firstName]' => 'John',
            'registration_form[infosUser][lastName]' => 'Doe',
            'registration_form[infosUser][city]' => 'Paris',
            'registration_form[infosUser][zipCode]' => '75001',
            'registration_form[infosUser][phoneNumber]' => '0612345678',
            'registration_form[infosUser][userName]' => 'johndoe3',
            'registration_form[infosUser][birthDate]' => '1990-01-01',
            'registration_form[plainPassword][first]' => 'Password123!',
            'registration_form[plainPassword][second]' => 'DifferentPassword!',
            'registration_form[agreeTerms]' => true,
        ]);

        $this->client->submit($form);

        self::assertCount(0, $this->userRepository->findAll());
    }
}
