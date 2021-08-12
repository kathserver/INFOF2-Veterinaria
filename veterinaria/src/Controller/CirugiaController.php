<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CirugiaController extends AbstractController
{
    #[Route('/cirugia', name: 'cirugia')]
    public function index(): Response
    {
        return $this->render('cirugia/index.html.twig', [
            'controller_name' => 'CirugiaController',
        ]);
    }
}
