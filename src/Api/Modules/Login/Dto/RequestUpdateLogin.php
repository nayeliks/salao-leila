<?php

namespace App\Api\Modules\Login\Dto;

class RequestUpdateLogin
{
    public ?int $loginId;
    public ?string $description;
    public ?string $login;
    public ?string $email;
    public ?string $password;
    public ?string $language;
    public ?int $type;
    public ?string $ddi;
    public ?string $number;

    public function __construct(array $data)
    {
        $this->loginId = isset($data['id']) ? (int) $data['id'] : null;
        $this->description = $data['description'] ?? null;
        $this->login = $data['login'] ?? null;
        $this->email = $data['email'] ?? null;
        $this->password = $data['password'] ?? null;
        $this->language = $data['language'] ?? null;
        $this->type = isset($data['type']) ? (int) $data['type'] : null;
        $this->ddi = $data['ddi'] ?? null;
        $this->number = $data['number'] ?? null;
    }
}