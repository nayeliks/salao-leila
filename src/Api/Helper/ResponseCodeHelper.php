<?php

namespace App\Api\Helper;

use Symfony\Component\HttpFoundation\Response;

class ResponseCodeHelper
{
    const OK = 1;
    const INTERNAL_SERVER_ERROR = 2;
    const BAD_REQUEST = 3;
    const CONFLICT = 4;
    const CREATED = 5;
    const NO_CONTENT = 6;
    const NOT_FOUND = 7;
    const TOO_MANY_REQUESTS = 8;
    const UNAUTHORIZED = 9;

    protected static array $genericToHttpCode = [
        self::OK => Response::HTTP_OK,
        self::INTERNAL_SERVER_ERROR => Response::HTTP_INTERNAL_SERVER_ERROR,
        self::BAD_REQUEST => Response::HTTP_BAD_REQUEST,
        self::CONFLICT => Response::HTTP_CONFLICT,
        self::CREATED => Response::HTTP_CREATED,
        self::NO_CONTENT => Response::HTTP_NO_CONTENT,
        self::NOT_FOUND => Response::HTTP_NOT_FOUND,
        self::TOO_MANY_REQUESTS => Response::HTTP_TOO_MANY_REQUESTS,
        self::UNAUTHORIZED => Response::HTTP_UNAUTHORIZED
    ];

    public static function getHttpStatusCode(int $genericCode): int
    {
        return self::$genericToHttpCode[$genericCode] ?? Response::HTTP_INTERNAL_SERVER_ERROR;
    }
}