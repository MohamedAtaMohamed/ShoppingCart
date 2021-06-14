<?php

namespace App\Http\Repositories\Api;


use App\Category;
use App\Http\Interfaces\Api\ProductRepositoryInterface;
use App\Http\Resources\ProductResource;
use App\Http\Resources\ProductsResource;
use App\Http\Traits\ApiResponses;
use App\Product;

class ProductRepository implements ProductRepositoryInterface {

    public $product;
    public $category;

    use ApiResponses;



    public function __construct(Product $product, Category $category)
    {
        $this->product = $product;
        $this->category = $category;
    }


    public function products()
    {
        // TODO: Implement products() method.

        $products = $this->product::orderBy('id','DESC')->paginate(20);

        $products = new ProductsResource($products);

        return $this->apiResponse($products, null,200);
    }

    public function show($id)
    {
        // TODO: Implement show() method.

        $product = $this->product::find($id);
        if ($product){
            $product = new ProductResource($product);

            return $this->apiResponse($product, null,200);
        }
        else{
            return $this->apiResponse(null,'Not found', 404);
        }



    }



}