<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RazaController extends AbstractController
{
    #[Route('/raza', name: 'raza')]
    public function index(): Response
    {
        return $this->render('raza/index.html.twig', [
            'controller_name' => 'RazaController',
        ]);
    }
}
