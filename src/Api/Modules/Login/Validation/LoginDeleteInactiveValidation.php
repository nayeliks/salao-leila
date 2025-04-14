<?php

namespace App\Api\Modules\Login\Validation;

use App\Api\Helper\ErrorHelper;
use App\Api\Helper\ResponseCodeHelper;
use App\Api\Modules\Login\Repository\LoginRepositoryInterface;
use App\Api\Modules\Login\Model\Login;

readonly class LoginDeleteInactiveValidation
{
    public function __construct(
        private ErrorHelper $errorHelper,
        private LoginRepositoryInterface $loginRepository
    ) {}

    public function validate(int $loginType): void
    {
        if ($loginType !== Login::TYPE_ADMIN) {
            $this->errorHelper->addError('permission', 'not_admin_user');
            $this->errorHelper->setErrorCode(ResponseCodeHelper::UNAUTHORIZED);
        }

        $inactiveCount = $this->loginRepository->countInactiveLogins();

        if ($inactiveCount == 0) {
            $this->errorHelper->addError('login', 'no_inactive_logins_found');
            $this->errorHelper->setErrorCode(ResponseCodeHelper::NOT_FOUND);
        }
    }
} 