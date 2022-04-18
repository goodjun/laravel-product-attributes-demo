<?php

namespace App\Http\Controllers\Admin;

use App\Attribute;
use App\Customer;
use App\Http\Controllers\Controller;
use App\Http\Resources\AttributeResource;
use App\Http\Resources\ProductResource;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProducts($customerId)
    {
        $customer = Customer::findOrFail($customerId);

        $products = $customer->products()->get();

        $attributes = Attribute::with('options')->get();

        return response()->json([
            'products' => ProductResource::collection($products),
            'attributes' => AttributeResource::collection($attributes),
        ]);
    }

    public function updateProduct($customerId, $productId, Request $request)
    {
        $customer = Customer::findOrFail($customerId);

        $product = $customer->products()->find($productId);

        $options = collect($request->option_ids)->mapWithKeys(function ($option) use ($customerId) {
            return [$option => ['customer_id' => $customerId]];
        });

        $product->options()->sync($options);

        return ProductResource::make($product->fresh('options'));
    }
}
