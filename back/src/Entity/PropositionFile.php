<?php

namespace App\Entity;

use App\Repository\PropositionFileRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

#[ORM\Entity(repositoryClass: PropositionFileRepository::class)]
#[Vich\Uploadable]
class PropositionFile
{
    #[ORM\Id, ORM\GeneratedValue, ORM\Column]
    private ?int $id = null;

    #[Vich\UploadableField(mapping: 'proposition_files', fileNameProperty: 'fileName')]
    private ?File $file = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $fileName = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $updatedAt = null;

    #[ORM\ManyToOne(inversedBy: 'propositionFiles')]
    private ?Proposition $proposition = null;

    public function __construct()
    {
        $this->updatedAt = new \DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }
    public function getFile(): ?File
    {
        return $this->file;
    }

    public function setFile(?File $file = null): static
    {
        $this->file = $file;
        if ($file) {
            $this->updatedAt = new \DateTimeImmutable();
        }
        return $this;
    }

    public function getFileName(): ?string
    {
        return $this->fileName;
    }
    public function setFileName(?string $fileName): static
    {
        $this->fileName = $fileName;
        return $this;
    }
    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }
    public function setUpdatedAt(\DateTimeImmutable $updatedAt): static
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
    public function getProposition(): ?Proposition
    {
        return $this->proposition;
    }
    public function setProposition(?Proposition $proposition): static
    {
        $this->proposition = $proposition;
        return $this;
    }
}
