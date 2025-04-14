<?php

namespace App\Api\Modules\Login\Validation;

use App\Api\Modules\Login\Repository\LoginRepositoryInterface;
use App\Api\Helper\ErrorHelper;
use App\Api\Helper\ResponseCodeHelper;

class LoginExistsValidation
{
    public function __construct(
        private LoginRepositoryInterface $loginRepository,
        private ErrorHelper $errorHelper,
    ) {}

    public function validate(int $loginId): void
    {
        if (!$this->loginRepository->existsLoginById($loginId)) {
            $this->errorHelper->addError('login', 'login_not_found');
            $this->errorHelper->setErrorCode(ResponseCodeHelper::NOT_FOUND);
        }
    }
} 