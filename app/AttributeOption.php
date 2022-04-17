<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttributeOption extends Model
{
    protected $table = 'attribute_options';

    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }
}
