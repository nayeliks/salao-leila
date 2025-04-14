<?php

namespace App\Web\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class LoginController extends AbstractController
{
    public function __construct(private HttpClientInterface $client) {}
    
    #[Route('/login', name: 'login_page', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('login/login.html.twig');
    }

    #[Route('/login/check', name: 'login_check', methods: ['POST'])]
    public function check(Request $request): JsonResponse
    {
        $login = $request->request->get('login');
        $password = $request->request->get('password');

        try {
            $apiResponse = $this->client->request('POST', 'http://localhost/login/verify', [
                'body' => [
                    'login' => $login,
                    'password' => $password,
                ],
            ]);

            $data = $apiResponse->toArray();

            if (!empty($data['login_exist']) && $data['login_exist'] === true) {
                $session = $request->getSession();
                $session->set('login_id', $data['login_id']);
                return new JsonResponse(['success' => true]);
            }
    
            return new JsonResponse(['success' => true]);
    
        } catch (\Exception $e) {
            return new JsonResponse(['success' => false], 500);
        }
    }

    #[Route('/register', name: 'register_page', methods: ['GET'])]
    public function register(): Response
    {
        return $this->render('login/cadastro.html.twig');
    }

    #[Route('/login/create', name: 'login_create', methods: ['POST'])]
    public function create(Request $request): JsonResponse
    {
        $formData = $request->request->all();

        try {
            $apiResponse = $this->client->request('POST', 'http://localhost/login/create', [
                'body' => $formData,
            ]);

            $statusCode = $apiResponse->getStatusCode();
            $data = $apiResponse->toArray();

            if (in_array($statusCode, [201])) {
                return new JsonResponse([ 'success' => true], 200);
            }

            return new JsonResponse(['success' => false], $statusCode);
        } catch (\Exception $e) {
            return new JsonResponse(['success' => false, 'message' => 'Erro ao criar conta.'], 500);
        }
    }

    #[Route('/dashboard', name: 'dashboard', methods: ['GET'])]
    public function dashboard(Request $request): Response
    {
        $session = $request->getSession();
        $loginId = $session->get('login_id');

        if (!$loginId) {
            return $this->redirectToRoute('login_page');
        }

        $response = $this->client->request('GET', "http://localhost/login/type/" . $loginId);
        $data = $response->toArray();

        return $this->render('dashboard/dashboard.html.twig', [
            'tipoLogin' => $data['tipoLogin'] ?? null,
            'loginId' => $loginId
        ]);
    }
}