<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JaulaController extends AbstractController
{
    #[Route('/jaula', name: 'jaula')]
    public function index(): Response
    {
        return $this->render('jaula/index.html.twig', [
            'controller_name' => 'JaulaController',
        ]);
    }
}
