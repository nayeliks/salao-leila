<?php

namespace App\Api\Modules\Login\Repository;

use App\Database\Entity\Login as EntityLogin;
use App\Api\Modules\Login\Model\Login;
use Doctrine\ORM\EntityManagerInterface;

readonly class LoginRepository implements LoginRepositoryInterface
{
    public function __construct(private EntityManagerInterface $entityManager) {}

    public function saveLogin(Login $login): void
    {
        $loginEntity = new EntityLogin();

        $loginEntity->setDescription($login->getDescription())
            ->setLogin($login->getLogin())
            ->setEmail($login->getEmail())
            ->setPassword($login->getPassword())
            ->setType($login->getType())
            ->setDdi($login->getDdi())
            ->setNumber($login->getNumber());

        $this->entityManager->persist($loginEntity);
        $this->entityManager->flush();
    }

    public function existsLoginById(int $loginId): bool
    {
        $login = $this->findLoginById($loginId);
        return $login !== null;
    }

    public function findLoginById(int $loginId): ?array
    {
        $qb = $this->entityManager->createQueryBuilder();

        $q = $qb->select('l.id, l.description, l.login, l.email, l.language, l.type, l.ddi, l.number')
            ->from(Login::class, 'l')
            ->where(
                $qb->expr()->eq('l.id', ':id')
            )
            ->setParameter('id', $loginId)
            ->getQuery();

        try {
            $result = $q->getOneOrNullResult();
        } catch (\Exception $e) {
            $result = null;
        }

        return $result;
    }

    public function findAllLogins(): array
    {
        $qb = $this->entityManager->createQueryBuilder();

        $q = $qb->select('l.id, l.description, l.login, l.email, l.ddi, l.number')
            ->from(Login::class, 'l')
            ->getQuery();

        try {
            $result = $q->getResult();
        } catch (\Exception $e) {
            $result = [];
        }

        return $result;
    }

    public function updateLastAccess(int $loginId): void
    {
        $login = $this->entityManager->find(Login::class, $loginId);
        
        if ($login) {
            $login->setLastAccess(new \DateTime());
            $this->entityManager->persist($login);
            $this->entityManager->flush();
        }
    }

    public function deleteInactiveLogins(): int
    {
        $dateLimit = (new \DateTime())->modify('-180 days');
        
        $queryBuilder = $this->entityManager->createQueryBuilder();
        $query = $queryBuilder
            ->delete(Login::class, 'l')
            ->where('l.lastAccess < :dateLimit')
            ->setParameter('dateLimit', $dateLimit)
            ->getQuery();

        return $query->execute();
    }

    public function countInactiveLogins(): int
    {
        $dateLimit = (new \DateTime())->modify('-180 days');
        
        $queryBuilder = $this->entityManager->createQueryBuilder();
        $query = $queryBuilder
            ->select('COUNT(l.id)')
            ->from(Login::class, 'l')
            ->where('l.lastAccess < :dateLimit')
            ->setParameter('dateLimit', $dateLimit)
            ->getQuery();

        return (int) $query->getSingleScalarResult();
    }

    public function getLoginType(int $loginId): int
    {
        $queryBuilder = $this->entityManager->createQueryBuilder();
        $query = $queryBuilder
            ->select('l.type')
            ->from(EntityLogin::class, 'l')
            ->where('l.id = :loginId')
            ->setParameter('loginId', $loginId)
            ->getQuery();

        return (int) $query->getSingleScalarResult();
    }

    public function validateLogin(string $login, string $password): ?int
    {
        $repository = $this->entityManager->getRepository(EntityLogin::class);

        $user = $repository->findOneBy(['login' => $login]);

        if (!$user) {
            $user = $repository->findOneBy(['email' => $login]);
        }

        if ($user && password_verify($password, $user->getPassword())) {
            return $user->getId();
        }

        return null;
    }
}