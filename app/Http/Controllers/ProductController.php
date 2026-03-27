<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interface\ProductInterface;
use App\Models\Product;

class ProductController extends Controller
{

    protected $productService;

    public function __construct(ProductInterface $productService)
    {
        $this->productService = $productService;
    }
    public function index()
    {
        $product = $this->productService->getProduct();
        if (!$product) {
            return response()->json([
                'stattus' => 'failed',
                'message' => 'products not found'
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $product
        ], 200);

    }
}
