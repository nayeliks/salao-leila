<?php

namespace App\Api\Modules\Login\Repository;

use App\Api\Modules\Login\Model\Login;

interface LoginRepositoryInterface
{
    public function saveLogin(Login $login): void;

    public function existsLoginById(int $loginId): bool;

    public function findLoginById(int $loginId): ?array;
    
    public function findAllLogins(): array;

    public function updateLastAccess(int $loginId): void;

    public function deleteInactiveLogins(): int;

    public function countInactiveLogins(): int;

    public function getLoginType(int $loginId): int;

    public function validateLogin(string $login, string $password): ?int;
}