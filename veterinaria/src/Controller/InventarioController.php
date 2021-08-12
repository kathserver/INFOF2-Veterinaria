<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InventarioController extends AbstractController
{
    #[Route('/inventario', name: 'inventario')]
    public function index(): Response
    {
        return $this->render('inventario/index.html.twig', [
            'controller_name' => 'InventarioController',
        ]);
    }
}
