<?php

namespace App\Service;
use App\Interface\ProductInterface;
use App\Models\Product;
class ProductService implements ProductInterface
{
    public function getProduct()
    {

        Product::with('licens')->chunk(100, function ($products) {
            foreach ($products as $product) {
                if ($product->licens->user_id === null) {
                    return $product;
                }
            }

        });
    }
}