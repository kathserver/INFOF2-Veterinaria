<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EquipomedicoController extends AbstractController
{
    #[Route('/equipomedico', name: 'equipomedico')]
    public function index(): Response
    {
        return $this->render('equipomedico/index.html.twig', [
            'controller_name' => 'EquipomedicoController',
        ]);
    }
}
