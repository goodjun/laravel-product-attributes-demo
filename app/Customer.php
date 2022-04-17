<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Customer extends Model
{
    protected $table = 'customers';

    public function products()
    {
        return $this->belongsToMany(Product::class, 'customer_products')
            ->with(['options' => function (BelongsToMany $query) {
                $query->where('customer_id', $this->id);
            }]);
    }
}
