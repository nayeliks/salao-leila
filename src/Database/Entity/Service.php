<?php

namespace App\Database\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;

#[Entity]
class Service
{
    #[Id]
    #[Column(type: Types::INTEGER)]
    #[GeneratedValue('AUTO')]
    private int $id;

    #[Column(type: Types::STRING)]
    private string $description;

    #[Column(type: Types::FLOAT)]
    private float $value;

    public function getId(): int
    {
        return $this->id;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getValue(): float
    {
        return $this->value;
    }

    public function setValue(float $value): self
    {
        $this->value = $value;
        return $this;
    }
}