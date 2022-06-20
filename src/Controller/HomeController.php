<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\CallApiService;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="app_home")
     */

     public function index(CallApiService $callApiService): Response
         {
             return $this->render('home/index.html.twig', [
                 'clubs' => $callApiService->getFranceData(),
                 'gens' => $callApiService->getAllData(),
             ]);
         }
}
