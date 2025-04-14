<?php

namespace App\Api\Modules\Scheduling\Repository;

interface SchedulingRepositoryInterface
{
    public function findByLoginId(int $loginId): array;
}