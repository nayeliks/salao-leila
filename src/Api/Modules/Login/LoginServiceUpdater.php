<?php

namespace App\Api\Modules\Login;

use App\Api\Modules\Login\Model\Login;
use App\Api\Modules\Login\Validation\UpdateLoginValidation;
use App\Api\Modules\Login\Repository\LoginRepositoryInterface;
use App\Api\Helper\ErrorHelper;
use App\Api\Modules\Login\Dto\RequestUpdateLogin;

class LoginServiceUpdater
{
    private UpdateLoginValidation $updateLoginValidation;

    public function __construct(
        private LoginRepositoryInterface $loginRepository,
        private ErrorHelper $errorHelper
    ) {
        $this->updateLoginValidation = new UpdateLoginValidation($loginRepository, $errorHelper);
    }

    public function update(RequestUpdateLogin $dto): void
    {
        $login = $this->createModel($dto);
        $this->updateLoginValidation->validate($login);

        if (!$this->errorHelper->hasErrors()) 
        {
            $this->loginRepository->saveLogin($login);
        }
    }

    private function createModel(RequestUpdateLogin $dto): Login
    {
        return (new Login())
            ->setId($dto->loginId)
            ->setDescription($dto->description)
            ->setLogin($dto->login)
            ->setEmail($dto->email)
            ->setPassword($dto->password)
            ->setLanguage($dto->language)
            ->setType($dto->type)
            ->setDdi($dto->ddi)
            ->setNumber($dto->number);
    }
} 