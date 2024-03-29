<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductsResource extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {


        return [
            'products'=>$this->collection->transform(function ($q){
                return [
                    'id'        =>$q->id,
                    'name'      => $q->name,
                    'slug'      => $q->slud,
                    'price'      => $q->price,
                    'details'      => $q->details,
                    'description'      => $q->description,
                    'shipping_cost'      => $q->shipping_cost,
                    'category'      => $q->category,
                    'image_path'    => asset('images') . '/' . $q->image_path,
                    ];

            }),

            'paginate'=>[
                'total' => $this->total(),
                'count' => $this->count(),
                'per_page' => $this->perPage(),
                'next_page_url'=>$this->nextPageUrl(),
                'prev_page_url'=>$this->previousPageUrl(),
                'current_page' => $this->currentPage(),
                'total_pages' => $this->lastPage()
            ]
        ];
    }
    public function withResponse($request, $response)
    {
        $originalContent = $response->getOriginalContent();
        unset($originalContent['links'],$originalContent['meta']);
        $response->setData($originalContent);
    }
}
