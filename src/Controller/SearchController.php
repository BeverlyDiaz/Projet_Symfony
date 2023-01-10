<?php

namespace App\Controller;


use App\Service\CallApiService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SearchController extends AbstractController
{
    #[Route('/search', name: 'app_Search')]
        public function app_Search()
    {
             return $this->render('search/search.html.twig');
    }

    #[Route('/search/{query}', name: 'search', defaults: ['query' => null], methods: ['GET', 'HEAD'])]

        public function searchAction($query): Response
    {
            return $this->render('search/search_query.html.twig');
    }

    #[Route('/searchback/{query}', name: 'searchback',)]

         public function searchback($query, callApiService $callApiService): Response

    {

            return $this->render('searchback/searchback.html.twig', [

                'data' => $callApiService->getNasaData($query)

            ]);
    }
}
