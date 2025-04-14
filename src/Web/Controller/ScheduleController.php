<?php

namespace App\Web\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ScheduleController extends AbstractController
{
    #[Route('/agendar', name: 'schedule_form')]
    public function schedule(): Response
    {
        return $this->render('scheduling/schedule.html.twig');
    }

    #[Route('/agendamentos/historico', name: 'schedule_history')]
    public function history(): Response
    {
        return $this->render('scheduling/scheduling_history.html.twig');
    }
}