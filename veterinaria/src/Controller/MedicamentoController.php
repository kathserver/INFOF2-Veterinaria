<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MedicamentoController extends AbstractController
{
    #[Route('/medicamento', name: 'medicamento')]
    public function index(): Response
    {
        return $this->render('medicamento/index.html.twig', [
            'controller_name' => 'MedicamentoController',
        ]);
    }
}
