<?php

namespace App\Api\Modules\Login\Validation;

use App\Api\Helper\ResponseCodeHelper;
use App\Api\Modules\Login\Model\Login;
use App\Api\Modules\AppConfig\ValidationForm\FormDataErrorAdapter;
use Respect\Validation\Validatable;
use Respect\Validation\Validator as v;

class FormLoginValidation extends FormDataErrorAdapter
{
    public function validateData(Login $login): void
    {
        $dataIsValid = parent::validate([
            'description' => $login->getDescription(),
            'login'       => $login->getLogin(),
            'email'       => $login->getEmail(),
            'password'    => $login->getPassword(),
            'type'        => $login->getType(),
            'ddi'         => $login->getDdi(),
            'number'      => $login->getNumber(),
        ]);

        if (!$dataIsValid) {
            $this->errors->setErrorCode(ResponseCodeHelper::BAD_REQUEST);
        }
    }

    protected function getErrorsMessages(array $data): array
    {
        return [
            'description' => ['login_description_required', []],
            'login'       => ['login_login_required', []],
            'email'       => ['login_email_invalid', []],
            'password'    => ['login_password_required', []],
            'type'        => ['login_type_invalid', []],
            'ddi'         => ['login_ddi_required', []],
            'number'      => ['login_number_required', []],
        ];
    }

    protected function getValidation(array $data): Validatable
    {
        return v::arrayType()
            ->key('description', v::stringType()->notEmpty()->setName('description'))
            ->key('login', v::stringType()->notEmpty()->setName('login'))
            ->key('email', v::email()->notEmpty()->setName('email'))
            ->key('password', v::stringType()->notEmpty()->length(6, null)->setName('password'))
            ->key('type', v::intType()->between(1, 2)->setName('type'))
            ->key('ddi', v::stringType()->notEmpty()->setName('ddi'))
            ->key('number', v::stringType()->notEmpty()->setName('number'));
    }
} 