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

    public function getFranceData(): array
    {
        return $this->getApi('clubs');
    }

    public function getAllData(): array
    {
        return $this->getApi('gens');
    }
    public function getDepartmentData($department): array
    {
        return $this->getApi('gens/' . $department);
    }

    public function getgensdettesData($dettes): array
    {
        return $this->getApi('gens/' . $dettes);
    }

    public function getDettesData($dettes): array
    {
        return $this->getApi('dette/' . $dettes);
    }

    private function getApi(string $var)
    {
        $response = $this->client->request(
            'GET',
            'http://localhost:8081/api/v1/' . $var
        );

        return $response->toArray();
    }

}
