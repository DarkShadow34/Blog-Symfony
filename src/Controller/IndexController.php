<?php

namespace App\Controller;

use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;

class IndexController extends AbstractController
{
    #[Route('/index')]
    public function index(PostRepository $postRepository): JsonResponse
    {
        return $this->json($postRepository->findAll(), context: [AbstractNormalizer::GROUPS => ['post:read', 'comment:read','user:read:name']]);
    }
}