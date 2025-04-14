<?php

namespace App\Api\Helper;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Contracts\Translation\TranslatorInterface;

class ResponseHelper
{
    public static function setResponse(TranslatorInterface $translator, JsonResponse $response, ErrorHelper $error, int $responseCode, array $responseData = []): void
    {
        if (!$error->hasErrors()) {
            $httpStatusCode = ResponseCodeHelper::getHttpStatusCode($responseCode);

            $response->setStatusCode($httpStatusCode);
            $response->setData($responseData);
        }

        if ($error->hasErrors()) {
            $errors = $error->getErrors($translator);
            $responseCode = $error->getErrorCode();
            $httpStatusCode = ResponseCodeHelper::getHttpStatusCode($responseCode);

            $response->setStatusCode($httpStatusCode);
            $response->setData(["errors" => $errors]);
        }
    }

    public static function setResponseError(TranslatorInterface $translator, LoggerInterface $logger, JsonResponse $response, \Exception $exception): void
    {
        $logger->error($exception->getMessage());

        $response->setStatusCode(ResponseCodeHelper::getHttpStatusCode(ResponseCodeHelper::INTERNAL_SERVER_ERROR));
        $response->setData(["errors" => $translator->trans('generic_error_request')]);
    }
}