<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EspecieController extends AbstractController
{
    #[Route('/especie', name: 'especie')]
    public function index(): Response
    {
        return $this->render('especie/index.html.twig', [
            'controller_name' => 'EspecieController',
        ]);
    }
}
