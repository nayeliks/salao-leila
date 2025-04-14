<?php

namespace App\Api\Modules\Scheduling\Dto;

use DateTimeImmutable;

class RequestCreateScheduling
{
    public DateTimeImmutable $datetime;
    public string $service;

    public function __construct(array $data)
    {
        $this->datetime = $data['datetime'];
        $this->service = $data['service'];
    }
}