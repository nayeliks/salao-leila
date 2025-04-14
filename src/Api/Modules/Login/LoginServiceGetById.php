<?php

namespace App\Api\Modules\Login;

use App\Api\Modules\Login\Repository\LoginRepositoryInterface;
use App\Api\Helper\ErrorHelper;
use App\Api\Modules\Login\Validation\LoginExistsValidation;

class LoginServiceGetById
{
    private LoginExistsValidation $loginExistsValidation;

    public function __construct(
        private LoginRepositoryInterface $loginRepository,
        private ErrorHelper $errorHelper
    ) {
        $this->loginExistsValidation = new LoginExistsValidation($loginRepository, $errorHelper);
    }

    public function getById(int $loginId): ?array
    {
        $this->loginExistsValidation->validate($loginId);

        if (!$this->errorHelper->hasErrors()) {
            return $this->loginRepository->findLoginById($loginId);
        }

        return null;
    }
} 