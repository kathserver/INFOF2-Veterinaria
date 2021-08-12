<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TipopagoController extends AbstractController
{
    #[Route('/tipopago', name: 'tipopago')]
    public function index(): Response
    {
        return $this->render('tipopago/index.html.twig', [
            'controller_name' => 'TipopagoController',
        ]);
    }
}
