<?php

namespace App\Api\Modules\Scheduling\Repository;

use App\Api\Modules\Scheduling\Dto\RequestCreateScheduling;
use App\Database\Entity\Scheduling;
use Doctrine\ORM\EntityManagerInterface;

class SchedulingRepository implements SchedulingRepositoryInterface
{
    public function __construct(private EntityManagerInterface $entityManager) {}

    public function findByLoginId(int $loginId): array
    {
        $repository = $this->entityManager->getRepository(Scheduling::class);
        return $repository->findBy(['login' => $loginId]);
    }

    public function save(RequestCreateScheduling $data): void
    {
        $scheduling = new Scheduling();
        $scheduling->setDateTime($data->datetime);
        $scheduling->setService($data->service);

        $this->entityManager->persist($scheduling);
        $this->entityManager->flush();
    }

    public function remove(Scheduling $scheduling): void
    {
        $this->entityManager->remove($scheduling);
        $this->entityManager->flush();
    }

    public function find(int $id): ?Scheduling
    {
        return $this->entityManager->getRepository(Scheduling::class)->find($id);
    }

    public function findAll(): array
    {
        return $this->entityManager->getRepository(Scheduling::class)->findAll();
    }
}