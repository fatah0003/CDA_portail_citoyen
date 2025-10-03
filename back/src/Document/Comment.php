<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

#[MongoDB\Document]
class Comment
{
    #[MongoDB\Id]
    private ?string $id = null;

    #[MongoDB\Field(type: 'string')]
    private string $content;

    #[MongoDB\Field(type: 'string')]
    private string $userId;

    #[MongoDB\Field(type: 'string')]
    private string $proposalId;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;
        return $this;
    }

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function setUserId(string $userId): self
    {
        $this->userId = $userId;
        return $this;
    }

    public function getProposalId(): string
    {
        return $this->proposalId;
    }

    public function setProposalId(string $proposalId): self
    {
        $this->proposalId = $proposalId;
        return $this;
    }
}
