<?php

namespace App\Api\Modules\Login;

use App\Api\Modules\Login\Repository\LoginRepositoryInterface;
use App\Api\Helper\ErrorHelper;
use App\Api\Modules\Login\Validation\LoginExistsValidation;

class LoginServiceUpdateLastAccess
{
    private LoginRepositoryInterface $loginRepository;
    private ErrorHelper $errorHelper;
    private LoginExistsValidation $loginExistsValidation;

    public function __construct(
        LoginRepositoryInterface $loginRepository,
        ErrorHelper $errorHelper
    ) {
        $this->loginExistsValidation = new LoginExistsValidation($loginRepository, $errorHelper);
    }

    public function updateLastAccess(int $loginId): void
    {
        $this->loginExistsValidation->validate($loginId);

        if (!$this->errorHelper->hasErrors()) {
            $login = $this->loginRepository->findLoginById($loginId);
            
            if ($login) {
                $this->loginRepository->updateLastAccess($loginId);
            }
        }
    }
} 