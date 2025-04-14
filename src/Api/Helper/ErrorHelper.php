<?php

namespace App\Api\Helper;

use Symfony\Contracts\Translation\TranslatorInterface;

class ErrorHelper
{
    protected int $errorCode = 0;
    protected array $errors = [];
    protected bool $hasErrors = false;

    public function setErrorCode(int $errorCode): void
    {
        $this->errorCode = $errorCode;
    }

    public function getErrorCode(): int
    {
        return $this->errorCode;
    }

    public function hasErrors(): bool
    {
        return $this->hasErrors;
    }

    public function addError(string $index, string $value, array $params = []): void
    {
        $this->errors[$index]['value'] = $value;
        $this->errors[$index]['params'] = $params;
        $this->hasErrors = true;
    }

    public function getErrors(TranslatorInterface $translator): array
    {
        $errors = [];

        foreach ($this->errors as $index => $error) {
            $errors[$index] = $translator->trans($error['value'], $error['params']);
        }

        return $errors;
    }
}