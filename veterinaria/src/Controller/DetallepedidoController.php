<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DetallepedidoController extends AbstractController
{
    #[Route('/detallepedido', name: 'detallepedido')]
    public function index(): Response
    {
        return $this->render('detallepedido/index.html.twig', [
            'controller_name' => 'DetallepedidoController',
        ]);
    }
}
