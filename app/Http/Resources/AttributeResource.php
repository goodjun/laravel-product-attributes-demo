<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class AttributeResource extends Resource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'options' => $this->when($this->options->isNotEmpty(), AttributeOptionResource::collection($this->options), []),
        ];
    }
}
