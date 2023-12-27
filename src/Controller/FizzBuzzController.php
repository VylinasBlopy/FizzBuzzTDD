<?php

namespace App\Controller;

use App\Services\FizzBuzzService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class FizzBuzzController extends AbstractController
{
    #[Route('/{number}', name: 'index')]
    public function index(int $number, FizzBuzzService $fizzBuzzService): JsonResponse
    {
        $fizzBuzz = $fizzBuzzService->executeFizzBuzz($number);

        return new JsonResponse($fizzBuzz);
    }
}