<?php

namespace App\Database\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

#[Entity]
class Scheduling
{
    #[Id]
    #[Column(type: Types::INTEGER)]
    #[GeneratedValue('AUTO')]
    private int $id;

    #[ManyToOne(targetEntity: Login::class)]
    #[JoinColumn(name: "login_id", referencedColumnName: "id", nullable: false)]
    private Login $login;

    // #[ManyToOne(targetEntity: Service::class)]
    // #[JoinColumn(name: "service_id", referencedColumnName: "id", nullable: false)]
    // private Service $service;

    #[Column(name: "date_time", type: Types::DATETIME_IMMUTABLE)]
    private \DateTimeImmutable $dateTime;

    #[Column(name: "service", type: Types::STRING)]
    private string $service;

    #[Column(type: Types::INTEGER)]
    private int $status;

    public function getId(): int
    {
        return $this->id;
    }

    public function getLogin(): Login
    {
        return $this->login;
    }

    public function setLogin(Login $login): self
    {
        $this->login = $login;
        return $this;
    }

    public function getService(): ?string
    {
        return $this->service;
    }

    public function setService(string $service): self
    {
        $this->service = $service;
        return $this;
    }

    public function getDateTime(): \DateTimeImmutable
    {
        return $this->dateTime;
    }

    public function setDateTime(\DateTimeImmutable $dateTime): self
    {
        $this->dateTime = $dateTime;
        return $this;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;
        return $this;
    }
}