<?php

namespace App\Controller;

use dump;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SearchController extends AbstractController
{
    #[Route('/search', name: 'app_Search')]
    public function app_Search()
    {
        return $this->render('search/index.html.twig');
    }

    #[Route('/search/{query}', name: 'search', defaults: ['query' => null], methods:['GET', 'HEAD'])]
    public function searchAction($query): Response
    {
        return $this->render('search/index.html.twig');
        
    }
}
