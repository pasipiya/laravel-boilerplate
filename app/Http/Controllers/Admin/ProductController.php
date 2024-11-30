<?php

namespace App\Http\Controllers\Admin;

use App\DTOs\ProductDTO;
use App\Http\Controllers\Controller;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {

        $products = $this->productService->getAllProducts();
        return response()->json($products);
    }

    public function show($id)
    {
        $product = $this->productService->getProduct($id);
        return response()->json($product);
    }

    public function store(Request $request)
    {
        // $data = $request->validate([
        //     'brand' => 'required|string',
        //     'name' => 'required|string',
        //     'image' => 'nullable|string',
        //     'quantity' => 'required|integer',
        //     'cost_price' => 'required|numeric',
        //     'sell_price' => 'required|numeric',
        //     'description' => 'required|string',
        //     'rating' => 'required|integer',
        //     'status' => 'required|string',
        // ]);

        return "asDAS";

        $productDTO = new ProductDTO(...$data);
        $product = $this->productService->createProduct($productDTO);
        return response()->json($product, 201);
    }
}
