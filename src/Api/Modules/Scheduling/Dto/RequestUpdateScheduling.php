<?php

namespace App\Api\Modules\Scheduling\Dto;

class RequestUpdateScheduling
{
    private int $schedulingId;
    private string $date;
    private string $time;
    private string $service;

    public function __construct(array $data)
    {
        $this->schedulingId = $data['schedulingId'];
        $this->date = $data['date'];
        $this->time = $data['time'];
        $this->service = $data['service'];
    }
}