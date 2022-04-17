<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class ProductResource extends Resource
{
    public function toArray($request)
    {
        dd($this->options);

        return [
            'id' => $this->id,
            'name' => $this->name,
            'attributes' => '',
        ];
    }
}
