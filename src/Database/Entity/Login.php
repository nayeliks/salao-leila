<?php

namespace App\Database\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;

#[Entity]
class Login
{
    #[Id]
    #[Column(type: Types::INTEGER)]
    #[GeneratedValue('AUTO')]
    private int $id;

    #[Column(name: "description", type: Types::STRING)]
    private string $description;

    #[Column(name:'login', type: Types::STRING)]
    private string $login;

    #[Column(name: "email", type: Types::STRING)]
    private string $email;

    #[Column(name: "password", type: Types::STRING)]
    private string $password;

    #[Column(name: "type", type: Types::INTEGER)]
    private int $type;

    #[Column(name: "ddi", type: Types::STRING)]
    private string $ddi;

    #[Column(name: "number", type: Types::STRING)]
    private string $number;

    #[Column(name: "last_access", type: Types::DATETIME_IMMUTABLE, nullable: true)]
    private ?\DateTime $lastAccess = null;

    public function getId(): int
    {
        return $this->id;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function getType(): int
    {
        return $this->type;
    }

    public function getLastAccess(): ?\DateTime
    {
        return $this->lastAccess;
    }

    public function setLastAccess(?\DateTime $lastAccess): self
    {
        $this->lastAccess = $lastAccess;
        return $this;
    }

    public function setType(int $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function setLogin(string $login): self
    {
        $this->login = $login;
        return $this;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;
        return $this;
    }

    public function getDdi(): ?string
    {
        return $this->ddi;
    }

    public function setDdi(?string $ddi): self
    {
        $this->ddi = $ddi;
        return $this;
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(?string $number): self
    {
        $this->number = $number;
        return $this;
    }
}