<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Resources\ProductResource;
use App\Order;
use App\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function createOrder(Request $request)
    {
        $order = Order::create([
            'customer_id' => 1,
            'delivery_date' => '2022-01-01',
        ]);

        $items = [
            [
                'product_id' => 1,
                'qty' => 3,
            ], [
                'product_id' => 2,
                'qty' => 1,
            ]
        ];

        $order->items()->create([
            'product_id' => 1,
            'qty' => 3,
        ]);

        $order->items()->create([
            'product_id' => 2,
            'qty' => 1,
        ]);

        return $order;
    }
}
