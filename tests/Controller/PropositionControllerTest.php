<?php

namespace App\Tests\Controller;

use App\Entity\Proposition;
use App\Repository\PropositionRepository;
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

        foreach ($this->propositionRepository->findAll() as $object) {
            $this->manager->remove($object);
        }

        $this->manager->flush();
    }

    public function testIndex(): void
    {
        $this->client->followRedirects();
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Proposition index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'proposition[title]' => 'Testing',
            'proposition[description]' => 'Testing',
            'proposition[createdAt]' => 'Testing',
            'proposition[updatedAt]' => 'Testing',
            'proposition[status]' => 'Testing',
            'proposition[category]' => 'Testing',
            'proposition[user]' => 'Testing',
        ]);

        self::assertResponseRedirects($this->path);

        self::assertSame(1, $this->propositionRepository->count([]));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Proposition();
        $fixture->setTitle('My Title');
        $fixture->setDescription('My Title');
        $fixture->setCreatedAt('My Title');
        $fixture->setUpdatedAt('My Title');
        $fixture->setStatus('My Title');
        $fixture->setCategory('My Title');
        $fixture->setUser('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Proposition');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Proposition();
        $fixture->setTitle('Value');
        $fixture->setDescription('Value');
        $fixture->setCreatedAt('Value');
        $fixture->setUpdatedAt('Value');
        $fixture->setStatus('Value');
        $fixture->setCategory('Value');
        $fixture->setUser('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'proposition[title]' => 'Something New',
            'proposition[description]' => 'Something New',
            'proposition[createdAt]' => 'Something New',
            'proposition[updatedAt]' => 'Something New',
            'proposition[status]' => 'Something New',
            'proposition[category]' => 'Something New',
            'proposition[user]' => 'Something New',
        ]);

        self::assertResponseRedirects('/proposition/');

        $fixture = $this->propositionRepository->findAll();

        self::assertSame('Something New', $fixture[0]->getTitle());
        self::assertSame('Something New', $fixture[0]->getDescription());
        self::assertSame('Something New', $fixture[0]->getCreatedAt());
        self::assertSame('Something New', $fixture[0]->getUpdatedAt());
        self::assertSame('Something New', $fixture[0]->getStatus());
        self::assertSame('Something New', $fixture[0]->getCategory());
        self::assertSame('Something New', $fixture[0]->getUser());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();
        $fixture = new Proposition();
        $fixture->setTitle('Value');
        $fixture->setDescription('Value');
        $fixture->setCreatedAt('Value');
        $fixture->setUpdatedAt('Value');
        $fixture->setStatus('Value');
        $fixture->setCategory('Value');
        $fixture->setUser('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertResponseRedirects('/proposition/');
        self::assertSame(0, $this->propositionRepository->count([]));
    }
}
