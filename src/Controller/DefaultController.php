<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends AbstractController
{
    #[Route('/app', name: 'app')]
    public function index(): Response
    {
        return $this->render('default/app.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    #[Route('/api/helloword/{name}', name: 'api_helloword')]
    public function apiHelloword(string $name): Response
    {
      return new JsonResponse('hello ' . $name);
    }
}
