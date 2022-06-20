<?php

namespace App\Controller;


use App\Service\CallApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DettesController extends AbstractController
{
    /**
     * @Route("/dettes/{dettes}", name="app_dettes")
     */
    public function index(string $dettes, CallApiService $callApiService): Response
    {
        return $this->render('dettes/index.html.twig', [
            'data' => $callApiService->getDettesData($dettes),
            'gens' => $callApiService->getgensdettesData($dettes),
        ]);
    }
}
