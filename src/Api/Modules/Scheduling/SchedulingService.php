<?php

namespace App\Api\Modules\Scheduling;

use App\Api\Modules\Scheduling\Repository\SchedulingRepositoryInterface;

readonly class SchedulingService
{
    public function __construct(
        private SchedulingRepositoryInterface $schedulingRepository
    ) {}

    public function getScheduling(int $loginId): array
    {
        $servicesMarked = $this->schedulingRepository->findByLoginId($loginId);

        $marked = [];
        foreach ($servicesMarked as $service) {
            $marked[] = [
                'title' => $service->getService()->getDescription(),
                'date' => $service->getDateTime()->format('Y-m-d H:i:s'),
            ];
        }

        return $marked;
    }
}