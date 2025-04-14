<?php

namespace App\Api\Modules\Login;

use App\Api\Helper\ErrorHelper;
use App\Api\Modules\Login\Repository\LoginRepositoryInterface;
use App\Api\Modules\Login\Validation\LoginDeleteInactiveValidation;

readonly class LoginServiceDeleteInactive
{
    private LoginDeleteInactiveValidation $validation;
    public function __construct(
        private LoginRepositoryInterface $loginRepository,
        private ErrorHelper $errorHelper
    ) {
        $this->validation = new LoginDeleteInactiveValidation($this->errorHelper, $this->loginRepository);
    }

    public function deleteInactiveLogins(int $loginType): int
    {
        $this->validation->validate($loginType);
        return $this->loginRepository->deleteInactiveLogins();
    }
} 