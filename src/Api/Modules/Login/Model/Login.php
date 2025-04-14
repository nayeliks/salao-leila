<?php

namespace App\Api\Modules\Login\Model;

class Login
{
    public const TYPE_ADMIN = 1;
    public const TYPE_CLIENT = 2;

    private ?int $id = null;
    private ?string $description = null;
    private ?string $login = null;
    private ?string $email = null;
    private ?string $password = null;
    private ?string $language = null;
    private ?int $type = null;
    private ?string $ddi = null;
    private ?string $number = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): Login
    {
        $this->id = $id;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(?string $login): self
    {
        $this->login = $login;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): self
    {
        if ($password !== null) {
            $this->password = password_hash($password, PASSWORD_BCRYPT);
        }
        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(?string $language): self
    {
        $this->language = $language;
        return $this;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(?int $type): self
    {
        $this->type = $type;
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