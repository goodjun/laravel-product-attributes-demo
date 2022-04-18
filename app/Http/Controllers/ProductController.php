<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Resources\ProductResource;
use App\Product;

class ProductController extends Controller
{
    // 获取所有商品
    public function getProducts($customerId)
    {
        $products = Product::all();

        return ProductResource::collection($products);
    }

    // 获取历史商品
    public function getHistoryProducts($customerId)
    {
        $customer = Customer::findOrFail($customerId);

        $products = $customer->products()->get();

        return ProductResource::collection($products);
    }
}
