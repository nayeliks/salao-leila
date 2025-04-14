<?php

namespace App\Api\Modules\Login;

use App\Api\Helper\ErrorHelper;
use App\Api\Helper\ResponseCodeHelper;
use App\Api\Modules\Login\Dto\RequestLogin;
use App\Api\Modules\Login\Repository\LoginRepositoryInterface;

readonly class LoginService
{
    public function __construct(
        private LoginRepositoryInterface $loginRepository,
        private ErrorHelper $errorHelper
    ) {}

    public function validateLogin(RequestLogin $requestLogin): ?int
    {
        $loginId = $this->loginRepository->validateLogin($requestLogin->login, $requestLogin->password) != false;

        if(!$loginId)
        {
            $this->errorHelper->addError('login', 'invalid_login');
            $this->errorHelper->setErrorCode(ResponseCodeHelper::BAD_REQUEST);
        }
        return $loginId;
    }
} 