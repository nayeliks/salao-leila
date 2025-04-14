<?php

namespace App\Api\Modules\Login;

use App\Api\Modules\Login\Repository\LoginRepositoryInterface;

class LoginServiceList
{
    public function __construct(
        private LoginRepositoryInterface $loginRepository,
    ) {}

    public function list(): array
    {
        $logins = $this->loginRepository->findAllLogins();
        return $logins ?: [];
    }
} 