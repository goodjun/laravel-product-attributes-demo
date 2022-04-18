<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class ProductResource extends Resource
{
    public function toArray($request)
    {
        $options = $this->options;

        $attributes = collect();

        $this->options->each(function ($option) use (&$attributes) {
            if ($attributes->where('id', $option->attribute->id)->isEmpty()) {
                $attributes->push($option->attribute);
            }
        });

        $attributes = $attributes->map(function ($attribute) use ($options) {
            $attribute['options'] = $options
                ->where('attribute.id', $attribute->id)
                ->map(function ($option) {
                    return $option->only(['id', 'name']);
                })
                ->toArray();

            return $attribute->only(['id', 'name', 'options']);
        });

        $defaultAttributes = [
            'id' => 1,
            'name' => 'Units',
            'options' => [
                [
                    'id' => 1,
                    'name' => 'CS',
                ]
            ],
        ];

        return [
            'id' => $this->id,
            'name' => $this->name,
            'attributes' => $this->when($this->options->isNotEmpty(), $attributes, $defaultAttributes),
        ];
    }
}
