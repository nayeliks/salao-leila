<?php

namespace App\Api\Modules\Login\Validation;

use App\Api\Modules\Login\Repository\LoginRepositoryInterface;
use App\Api\Helper\ErrorHelper;
use App\Api\Modules\Login\Model\Login;
class UpdateLoginValidation
{
    private LoginExistsValidation $loginExistsValidation;
    private FormLoginValidation $formLoginValidation;

    public function __construct(
        private LoginRepositoryInterface $loginRepository,
        private ErrorHelper $errorHelper
    ) {
        $this->loginExistsValidation = new LoginExistsValidation($loginRepository, $errorHelper);
        $this->formLoginValidation = new FormLoginValidation($this->errorHelper);
    }

    public function validate(Login $login): void
    {
        $this->loginExistsValidation->validate($login->getId());
        
        if (!$this->errorHelper->hasErrors()) {
            $this->formLoginValidation->validateData($login);
        }
    }
}
