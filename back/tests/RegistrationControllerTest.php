<?php

namespace App\Tests;

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
        $this->client = static::createClient(['environment' => 'test']);
        $container = static::getContainer();

        $this->em = $container->get(EntityManagerInterface::class);
        $this->userRepository = $container->get(UserRepository::class);

        // Vider tous les utilisateurs avant chaque test
        foreach ($this->userRepository->findAll() as $user) {
            $this->em->remove($user);
        }
        $this->em->flush();
    }

    public function testRegister(): void
    {
        $crawler = $this->client->request('GET', '/register');
        self::assertResponseIsSuccessful();
        self::assertPageTitleContains('Register');

        $form = $crawler->selectButton('S\'inscrire')->form([
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

    public function testRegisterWithInvalidEmailIsCurrentlyAccepted(): void
    {
        $crawler = $this->client->request('GET', '/register');

        $form = $crawler->selectButton('S\'inscrire')->form([
            'registration_form[email]' => 'invalid-email',
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

        // TODO : Une fois la validation Email ajoutée, modifier ce test pour vérifier le rejet
    }

    public function testRegisterWithMismatchedPasswords(): void
    {
        $crawler = $this->client->request('GET', '/register');

        $form = $crawler->selectButton('S\'inscrire')->form([
            'registration_form[email]' => 'test@example.com',
            'registration_form[infosUser][firstName]' => 'John',
            'registration_form[infosUser][lastName]' => 'Doe',
            'registration_form[infosUser][city]' => 'Paris',
            'registration_form[infosUser][zipCode]' => '75001',
            'registration_form[infosUser][phoneNumber]' => '0612345678',
            'registration_form[infosUser][userName]' => 'johndoe',
            'registration_form[infosUser][birthDate]' => '1990-01-01',
            'registration_form[plainPassword][first]' => 'Password123!',
            'registration_form[plainPassword][second]' => 'DifferentPassword!',
            'registration_form[agreeTerms]' => true,
        ]);

        $this->client->submit($form);

        self::assertCount(0, $this->userRepository->findAll());
    }
}
