<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['customer_id', 'delivery_date'];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
