<?php

namespace App\Api\Modules\Scheduling;

use App\Api\Modules\Scheduling\Repository\SchedulingRepository;
use App\Api\Modules\Scheduling\Dto\RequestCreateScheduling;
use App\Api\Helper\ErrorHelper;

class SchedulingServiceCreate
{
    public function __construct(
        private readonly SchedulingRepository $repository,
        private readonly ErrorHelper $errorHelper
    ) {}

    public function create(RequestCreateScheduling $data): void
    {
        $this->repository->save($data);
    }
}