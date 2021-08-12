<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RecetamedicaController extends AbstractController
{
    #[Route('/recetamedica', name: 'recetamedica')]
    public function index(): Response
    {
        return $this->render('recetamedica/index.html.twig', [
            'controller_name' => 'RecetamedicaController',
        ]);
    }
}
