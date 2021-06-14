<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'        =>$this->id,
            'name'      => $this->name,
            'slug'      => $this->slud,
            'price'      => $this->price,
            'details'      => $this->details,
            'description'      => $this->description,
            'shipping_cost'      => $this->shipping_cost,
            'category'      => $this->category,
            'image_path'    => asset('images') . '/' . $this->image_path,

        ];
    }
}
