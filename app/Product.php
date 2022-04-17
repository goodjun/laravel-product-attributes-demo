<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function options()
    {
        return $this->belongsToMany(AttributeOption::class, 'customer_product_attributes')
            ->with('attribute');
    }
}
