<?php

namespace App\Api\Modules\Login\Dto;

class RequestLogin
{
    public ?string $login;
    public ?string $password;

    public function __construct(array $data)
    {
        $this->login = $data['login'] ?? null;
        $this->password = $data['password'] ?? null;
    }
}