<?php

namespace App\Api\Modules\Login;

use App\Api\Modules\Login\Repository\LoginRepositoryInterface;

readonly class LoginServiceGetType
{
    public function __construct(
        private LoginRepositoryInterface $loginRepository,
    ) {}

    public function getType(int $loginId): array
    {
        return ['type' => $this->loginRepository->getLoginType($loginId)];
    }
} 