<?php

namespace App\Service;


use Symfony\Contracts\HttpClient\HttpClientInterface;

class CallApiService
{

    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }


    public function getNasaData($query): array

    {

        $response = $this->client->request(

            'GET',
            'https://images-api.nasa.gov/search?q=' . $query . '&media_type=image'

        );

        return $response->toArray();
    }
}

?>