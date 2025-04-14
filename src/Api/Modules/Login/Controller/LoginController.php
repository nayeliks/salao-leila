<?php

namespace App\Api\Modules\Login\Controller;

use App\Api\Helper\ErrorHelper;
use App\Api\Helper\ResponseHelper;
use App\Api\Helper\ResponseCodeHelper;
use App\Api\Modules\Login\Dto\RequestCreateLogin;
use App\Api\Modules\Login\Dto\RequestLogin;
use App\Api\Modules\Login\Dto\RequestUpdateLogin;
use App\Api\Modules\Login\LoginService;
use App\Api\Modules\Login\LoginServiceRegister;
use App\Api\Modules\Login\LoginServiceUpdater;
use App\Api\Modules\Login\LoginServiceGetById;
use App\Api\Modules\Login\LoginServiceList;
use App\Api\Modules\Login\LoginServiceUpdateLastAccess;
use App\Api\Modules\Login\LoginServiceDeleteInactive;
use App\Api\Modules\Login\LoginServiceGetType;
use App\Api\Modules\Login\Repository\LoginRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class LoginController extends AbstractController
{
    public function __construct(
        private readonly EntityManagerInterface $entityManager,
        private readonly TranslatorInterface $translator,
        private readonly LoggerInterface $logger,
        private readonly ErrorHelper $error
    ) {}

    #[Route('login/create', name: 'create_login', methods: ['POST'])]
    public function loginCreate(Request $request): JsonResponse
    {
        $response = new JsonResponse();
        try {
            $data = $request->request->all();
            $requestClienteCreate = new RequestCreateLogin($data);

            $loginRepository = new LoginRepository($this->entityManager);
            $registerService = new LoginServiceRegister($loginRepository, $this->error);
            $registerService->register($requestClienteCreate);
            
            ResponseHelper::setResponse($this->translator, $response, $this->error, ResponseCodeHelper::CREATED);
        } catch (\Exception $exception) {
            ResponseHelper::setResponseError($this->translator, $this->logger, $response, $exception);
        }

        return $response;
    }

    #[Route('login/edit/{login_id}', name: 'update_login', methods: ['PUT'])]
    public function loginUpdate(Request $request, int $login_id): JsonResponse
    {
        $response = new JsonResponse();
        try {
            $data = $request->request->all();
            $data['loginId'] = $login_id;
            $requestLoginEdit = new RequestUpdateLogin($data);

            $loginRepository = new LoginRepository($this->entityManager);
            $updateService = new LoginServiceUpdater($loginRepository, $this->error);
            $updateService->update($requestLoginEdit);

            ResponseHelper::setResponse($this->translator, $response, $this->error, ResponseCodeHelper::OK);
        } catch (\Exception $exception) {
            ResponseHelper::setResponseError($this->translator, $this->logger, $response, $exception);
        }

        return $response;
    }

    #[Route('login/{login_id}', name: 'get_login_by_id', methods: ['GET'])]
    public function loginGetById(int $login_id): JsonResponse
    {
        $response = new JsonResponse();
        try {
            $loginRepository = new LoginRepository($this->entityManager);
            $searchService = new LoginServiceGetById($loginRepository, $this->error);
            $login = $searchService->getById($login_id);

            ResponseHelper::setResponse($this->translator, $response, $this->error, ResponseCodeHelper::OK, $login);
        } catch (\Exception $exception) {
            ResponseHelper::setResponseError($this->translator, $this->logger, $response, $exception);
        }

        return $response;
    }

    #[Route('login/list', name: 'list_logins', methods: ['GET'])]
    public function loginList(): JsonResponse
    {
        $response = new JsonResponse();
        try {
            $loginRepository = new LoginRepository($this->entityManager);
            $service = new LoginServiceList($loginRepository);
            $logins = $service->list();

            ResponseHelper::setResponse($this->translator, $response, $this->error, ResponseCodeHelper::OK, $logins);
        } catch (\Exception $exception) {
            ResponseHelper::setResponseError($this->translator, $this->logger, $response, $exception);
        }

        return $response;
    }

    #[Route('login/update-last-access/{login_id}', name: 'update_last_access', methods: ['PUT'])]
    public function updateLastAccess(int $login_id): JsonResponse
    {
        $response = new JsonResponse();
        try {
            $loginRepository = new LoginRepository($this->entityManager);
            $service = new LoginServiceUpdateLastAccess($loginRepository, $this->error);
            $service->updateLastAccess($login_id);

            ResponseHelper::setResponse($this->translator, $response, $this->error, ResponseCodeHelper::OK);
        } catch (\Exception $exception) {
            ResponseHelper::setResponseError($this->translator, $this->logger, $response, $exception);
        }

        return $response;
    }

    #[Route('login/delete-inactive', name: 'delete_inactive_logins', methods: ['DELETE'])]
    public function deleteInactiveLogins(Request $request): JsonResponse
    {
        $response = new JsonResponse();
        try {
            $data = json_decode($request->getContent(), true);
            $loginType = $data['login_type'] ?? null;

            $loginRepository = new LoginRepository($this->entityManager);
            $service = new LoginServiceDeleteInactive($loginRepository, $this->error);
            $service->deleteInactiveLogins($loginType);

            ResponseHelper::setResponse($this->translator, $response, $this->error, ResponseCodeHelper::NO_CONTENT);
        } catch (\Exception $exception) {
            ResponseHelper::setResponseError($this->translator, $this->logger, $response, $exception);
        }

        return $response;
    }

    #[Route('login/type/{login_id}', name: 'get_login_type', methods: ['GET'])]
    public function getLoginType(int $login_id): JsonResponse
    {
        $response = new JsonResponse();
        try {
            $loginRepository = new LoginRepository($this->entityManager);
            $service = new LoginServiceGetType($loginRepository);
            $type = $service->getType($login_id);
            
            ResponseHelper::setResponse($this->translator, $response, $this->error, ResponseCodeHelper::OK, ['tipoLogin' => $type]);
        } catch (\Exception $exception) {
            ResponseHelper::setResponseError($this->translator, $this->logger, $response, $exception);
        }

        return $response;
    }

    #[Route('login/verify', name: 'verify_login', methods: ['POST'])]
    public function verifyLogin(Request $request): JsonResponse
    {
        $response = new JsonResponse();
        try {
            $data = $request->request->all();
            $requestLogin = new RequestLogin($data);

            $loginRepository = new LoginRepository($this->entityManager);
            $service = new LoginService($loginRepository, $this->error);
            $loginId = $service->validateLogin($requestLogin);

            ResponseHelper::setResponse($this->translator, $response, $this->error, ResponseCodeHelper::OK, [
                'login_exist' => $loginId !== null,
                'login_id' => $loginId
            ]);
        } catch (\Exception $exception) {
            ResponseHelper::setResponseError($this->translator, $this->logger, $response, $exception);
        }

        return $response;
    }
}