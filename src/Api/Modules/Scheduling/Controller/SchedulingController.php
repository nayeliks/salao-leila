<?php

namespace App\Api\Modules\Scheduling\Controller;

use App\Api\Helper\ErrorHelper;
use App\Api\Helper\ResponseHelper;
use App\Api\Helper\ResponseCodeHelper;
use App\Api\Modules\Scheduling\Dto\RequestCreateScheduling;
use App\Api\Modules\Scheduling\Dto\RequestUpdateScheduling;
use App\Api\Modules\Scheduling\SchedulingService;
use App\Api\Modules\Scheduling\SchedulingServiceCreate;
use App\Api\Modules\Scheduling\SchedulingServiceUpdate;
use App\Api\Modules\Scheduling\SchedulingServiceGetById;
use App\Api\Modules\Scheduling\SchedulingServiceList;
use App\Api\Modules\Scheduling\Repository\SchedulingRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class SchedulingController extends AbstractController
{
    public function __construct(
        private readonly EntityManagerInterface $entityManager,
        private readonly TranslatorInterface $translator,
        private readonly LoggerInterface $logger,
        private readonly ErrorHelper $error
    ) {}

    #[Route('scheduling/create', name: 'create_scheduling', methods: ['POST'])]
    public function createScheduling(Request $request): JsonResponse
    {
        $response = new JsonResponse();
        try {
            $data = $request->request->all();
            $requestCreateScheduling = new RequestCreateScheduling($data);

            $schedulingRepository = new SchedulingRepository($this->entityManager);
            $service = new SchedulingServiceCreate($schedulingRepository, $this->error);
            $service->create($requestCreateScheduling);
            
            ResponseHelper::setResponse($this->translator, $response, $this->error, ResponseCodeHelper::CREATED);
        } catch (\Exception $exception) {
            ResponseHelper::setResponseError($this->translator, $this->logger, $response, $exception);
        }

        return $response;
    }

    #[Route('scheduling/list/{login_id}', name: 'list_schedulings_by_user', methods: ['GET'])]
    public function listSchedulingsByUser(int $login_id): JsonResponse
    {
        $response = new JsonResponse();
        try {
            $schedulingRepository = new SchedulingRepository($this->entityManager);
            $service = new SchedulingService($schedulingRepository);
            $schedulings = $service->getScheduling($login_id);

            ResponseHelper::setResponse($this->translator, $response, $this->error, ResponseCodeHelper::OK, $schedulings);
        } catch (\Exception $exception) {
            ResponseHelper::setResponseError($this->translator, $this->logger, $response, $exception);
        }

        return $response;
    }

}