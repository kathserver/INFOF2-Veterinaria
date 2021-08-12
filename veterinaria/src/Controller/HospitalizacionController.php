<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HospitalizacionController extends AbstractController
{
    #[Route('/hospitalizacion', name: 'hospitalizacion')]
    public function index(): Response
    {
        return $this->render('hospitalizacion/index.html.twig', [
            'controller_name' => 'HospitalizacionController',
        ]);
    }
}
