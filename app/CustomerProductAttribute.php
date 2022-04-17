<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class CustomerProductAttribute extends Pivot
{
    protected $table = 'customer_product_attributes';
}
