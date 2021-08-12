<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProcedimientoController extends AbstractController
{
    #[Route('/procedimiento', name: 'procedimiento')]
    public function index(): Response
    {
        return $this->render('procedimiento/index.html.twig', [
            'controller_name' => 'ProcedimientoController',
        ]);
    }
}
