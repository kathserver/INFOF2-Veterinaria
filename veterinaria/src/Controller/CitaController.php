<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CitaController extends AbstractController
{
    #[Route('/cita', name: 'cita')]
    public function index(): Response
    {
        return $this->render('cita/index.html.twig', [
            'controller_name' => 'CitaController',
        ]);
    }
}
