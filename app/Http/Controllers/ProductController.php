<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    public function getProducts($customerId)
    {
        $customer = Customer::findOrFail($customerId);

        $products = $customer->products()->get();

        return ProductResource::collection($products);
    }
}
