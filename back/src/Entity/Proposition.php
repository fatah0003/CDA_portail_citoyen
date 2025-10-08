<?php

namespace App\Entity;

use App\Enum\PropositionCategory;
use App\Enum\PropositionStatus;
use App\Repository\PropositionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PropositionRepository::class)]
class Proposition
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $updatedAt = null;

    #[ORM\Column(enumType: PropositionStatus::class)]
    private ?PropositionStatus $status = null;

    #[ORM\Column(type: Types::JSON)]
    private array $category = [];

    #[ORM\ManyToOne(inversedBy: 'propositions')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    /**
     * @var Collection<int, Favorite>
     */
    #[ORM\OneToMany(targetEntity: Favorite::class, mappedBy: 'proposition')]
    private Collection $favorites;

    /**
     * @var Collection<int, PropositionFile>
     */
    #[ORM\OneToMany(mappedBy: 'proposition', targetEntity: PropositionFile::class, cascade: ['persist', 'remove'])]
    private Collection $files;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
        $this->updatedAt = new \DateTimeImmutable();
        $this->status = PropositionStatus::ACTIF;
        $this->favorites = new ArrayCollection();
        $this->files = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;
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

    public function getStatus(): ?PropositionStatus
    {
        return $this->status;
    }

    public function setStatus(PropositionStatus $status): static
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return PropositionCategory[]
     */
    public function getCategory(): array
    {
        return $this->category;
    }

    public function setCategory(array $category): static
    {
        $this->category = $category;
        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @return Collection<int, Favorite>
     */
    public function getFavorites(): Collection
    {
        return $this->favorites;
    }

    public function addFavorite(Favorite $favorite): static
    {
        if (!$this->favorites->contains($favorite)) {
            $this->favorites->add($favorite);
            $favorite->setProposition($this);
        }
        return $this;
    }

    public function removeFavorite(Favorite $favorite): static
    {
        if ($this->favorites->removeElement($favorite)) {
            if ($favorite->getProposition() === $this) {
                $favorite->setProposition(null);
            }
        }
        return $this;
    }

    public function isFavoritedBy(User $user): bool
    {
        foreach ($this->favorites as $favorite) {
            if ($favorite->getUser() === $user) {
                return true;
            }
        }
        return false;
    }

    public function getFavoritesCount(): int
    {
        return $this->favorites->count();
    }

    /**
     * @return Collection<int, PropositionFile>
     */
    public function getFiles(): Collection
    {
        return $this->files;
    }

    public function addFile(PropositionFile $file): static
    {
        if (!$this->files->contains($file)) {
            $this->files->add($file);
            $file->setProposition($this);
        }
        return $this;
    }

    public function removeFile(PropositionFile $file): static
    {
        if ($this->files->removeElement($file)) {
            if ($file->getProposition() === $this) {
                $file->setProposition(null);
            }
        }
        return $this;
    }
}
