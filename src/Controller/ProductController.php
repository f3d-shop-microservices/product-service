<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ProductController extends AbstractController
{
    #[Route('/products/all', name: 'api_products', methods: ['GET'])]
    public function getAllProducts(ProductRepository $productRepository): Response {
        $items = [];
        $products = $productRepository->findBy([], ['title' => 'ASC']);
        foreach ($products as $product) {
            $items[] = [
                'id' => $product->getId(),
                'title' => $product->getTitle(),
                'description' => $product->getDescription(),
                'price' => $product->getPrice(),
                'image' => $product->getImage(),
            ];
        }

        return new JsonResponse(['products' => $items]);
    }

    #[Route('/product/{id}', name: 'find_product', methods: ['GET'])]
    public function findProduct(string $id, ProductRepository $productRepository): Response {
        $product = $productRepository->find($id);
        if (!$product) {
            throw $this->createNotFoundException('Product not found');
        }
        $product = [
            'id' => $product->getId(),
            'title' => $product->getTitle(),
            'description' => $product->getDescription(),
            'price' => $product->getPrice(),
            'image' => $product->getImage(),
            'createdAt' => $product->getCreated(),
        ];

        return new JsonResponse(['product' => $product]);
    }
}
