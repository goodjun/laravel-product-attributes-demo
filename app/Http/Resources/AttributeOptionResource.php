<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class AttributeOptionResource extends Resource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
        ];
    }
}
