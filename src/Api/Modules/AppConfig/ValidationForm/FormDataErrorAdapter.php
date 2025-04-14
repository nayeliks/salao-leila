<?php

namespace App\Api\Modules\AppConfig\ValidationForm;

use App\Api\Helper\ErrorHelper;
use Respect\Validation\Exceptions\NestedValidationException;
use Respect\Validation\Validatable;

abstract class FormDataErrorAdapter
{
    protected ErrorHelper $errors;

    public function setNotificationErrors(ErrorHelper $error): void
    {
        $this->errors = $error;
    }

    public function validate(array $data): bool
    {
        try {
            $this->getValidation($data)->assert($data);
            $isValid = true;
        } catch (NestedValidationException $ex) {
            $isValid = false;
            $this->setErrors($ex, $data);
        }

        return $isValid;
    }

    protected function setErrors(NestedValidationException $ex, array $data): void
    {
        $errorMessages = $this->getErrorsMessages($data);
        $allErrors = $ex->getMessages(array_keys($errorMessages));

        foreach ($allErrors as $idx => $msg) {
            if(strlen($msg) > 0){
                $valor  = $errorMessages[$idx][0];
                $params = $errorMessages[$idx][1];

                $this->errors->addError($idx, $valor, $params);
            }
        }
    }

    abstract protected function getValidation(array $data): Validatable;

    abstract protected function getErrorsMessages(array $data): array;
}