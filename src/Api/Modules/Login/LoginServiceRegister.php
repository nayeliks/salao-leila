<?php

namespace App\Api\Modules\Login;

use App\Api\Modules\Login\Model\Login;
use App\Api\Modules\Login\Validation\FormLoginValidation;
use App\Api\Modules\Login\Repository\LoginRepositoryInterface;
use App\Api\Helper\ErrorHelper;
use App\Api\Modules\Login\Dto\RequestCreateLogin;

class LoginServiceRegister
{
    private FormLoginValidation $formLoginValidation;

    public function __construct(
        private LoginRepositoryInterface $loginRepository,
        private ErrorHelper $errorHelper
    ) {
        $this->formLoginValidation = new FormLoginValidation();
        $this->formLoginValidation->setNotificationErrors($errorHelper);
    }

    public function register(RequestCreateLogin $dto): void
    {
        $login = $this->createModel($dto);

        $this->formLoginValidation->validateData($login);

        if (!$this->errorHelper->hasErrors()) 
        {
            $this->loginRepository->saveLogin($login);
        }
    }

    private function createModel(RequestCreateLogin $dto): Login
    {
        return (new Login())
            ->setDescription($dto->description)
            ->setLogin($dto->login)
            ->setEmail($dto->email)
            ->setPassword($dto->password)
            ->setType($dto->type)
            ->setDdi($dto->ddi)
            ->setNumber($dto->number);
    }
}