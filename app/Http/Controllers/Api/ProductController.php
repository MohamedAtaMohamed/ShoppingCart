<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Api\ProductRepositoryInterface;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    /** Group of model as vars */
    protected $productRepositoryInterface;


    /** Construct to handel inject models */
    public function __construct(ProductRepositoryInterface $productRepository){
        $this->productRepositoryInterface = $productRepository;
    }


    /**
     * get all products
     * */
    public function products(){

        return $this->productRepositoryInterface->products();
    }

    /**
     * get single products details
     * */
    public function show($id){

        return $this->productRepositoryInterface->show($id);
    }
}
