<?php

namespace App\Services;

use App\DTOs\ProductDTO;
use App\Repositories\ProductRepositoryInterface;
use App\Models\Product;

class ProductService
{
    protected $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getAllProducts()
    {
        return $this->productRepository->all();
    }

    public function getProduct(int $id)
    {
        return $this->productRepository->find($id);
    }

    public function createProduct(ProductDTO $productDTO): Product
    {
        return $this->productRepository->create([
            'brand' => $productDTO->brand,
            'name' => $productDTO->name,
            'image' => $productDTO->image,
            'quantity' => $productDTO->quantity,
            'cost_price' => $productDTO->cost_price,
            'sell_price' => $productDTO->sell_price,
            'description' => $productDTO->description,
            'rating' => $productDTO->rating,
            'status' => $productDTO->status,
        ]);
    }

    public function updateProduct(Product $product, ProductDTO $productDTO): bool
    {
        return $this->productRepository->update($product, [
            'brand' => $productDTO->brand,
            'name' => $productDTO->name,
            'image' => $productDTO->image,
            'quantity' => $productDTO->quantity,
            'cost_price' => $productDTO->cost_price,
            'sell_price' => $productDTO->sell_price,
            'description' => $productDTO->description,
            'rating' => $productDTO->rating,
            'status' => $productDTO->status,
        ]);
    }

    public function deleteProduct(Product $product): bool
    {
        return $this->productRepository->delete($product);
    }
}