<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProveedorController extends AbstractController
{
    #[Route('/proveedor', name: 'proveedor')]
    public function index(): Response
    {
        return $this->render('proveedor/index.html.twig', [
            'controller_name' => 'ProveedorController',
        ]);
    }
}
