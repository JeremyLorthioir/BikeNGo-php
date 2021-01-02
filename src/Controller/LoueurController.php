<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoueurController extends AbstractController
{
    /**
     * @Route("/loueur", name="loueur")
     */
    public function index(): Response
    {
        return $this->render('loueur/index.html.twig', [
            'controller_name' => 'LoueurController',
        ]);
    }
}
