<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DetallefacturaController extends AbstractController
{
    #[Route('/detallefactura', name: 'detallefactura')]
    public function index(): Response
    {
        return $this->render('detallefactura/index.html.twig', [
            'controller_name' => 'DetallefacturaController',
        ]);
    }
}
