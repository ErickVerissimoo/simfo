<?php
namespace App\Controller;

use App\Service\SomeService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class apiController {

    private SomeService $someService;
public function __construct( SomeService $service) {
    $this->someService = $service;
}


    #[Route(path:"/hello", methods: ["GET"])]
    public function FunctionName() : JsonResponse {
        return new JsonResponse(['message' => $this->someService->someMethod()]);  
    }


}