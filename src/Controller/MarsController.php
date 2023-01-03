<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MarsController extends AbstractController
{
    #[Route('/mars', name: 'app_mars')]
    public function index(): Response 
    {
        
    return new Response('Hello Mars!');
        
    }

    #[Route('/curiosity', name: 'app_curiosity')]
    public function app_curiosity()
    {
        return $this->render('mars/index.html.twig');
    }
}
