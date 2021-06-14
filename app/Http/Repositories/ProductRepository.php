<?php

namespace App\Http\Repositories;


use App\Category;
use App\Http\Interfaces\ProductRepositoryInterface;
use App\Product;

class ProductRepository implements ProductRepositoryInterface {

    public $product;
    public $category;



    public function __construct(Product $product, Category $category)
    {
        $this->product = $product;
        $this->category = $category;
    }

    public function shop()
    {
        // TODO: Implement shop() method.
        $products = $this->product::all();
        $categories = $this->category::all();
        return view('shop')->withTitle('E-COMMERCE STORE | SHOP')->with(['products' => $products,'categories' => $categories]);
    }

    public function search($request)
    {
        // TODO: Implement search() method.
        $categories = Category::all();
        $title = $request->get('title');
        $products = $this->product::where('name','LIKE',"%$title%")->get();
        return view('shop', compact('products','categories'))->withTitle('E-COMMERCE STORE | Search');


    }

    public function filterProduct($request)
    {

        // TODO: Implement filterProduct() method.

        $min = $request->get('min');
        $max = $request->get('max');

        $category_id = ($request->get('category_id'));
        if ($category_id !== null){

            $products = $this->product::where('price','>=',$min)->where('price','<=',$max)->where('category_id', $category_id)->get();

        }else{

            $products = $this->product::where('price','>=',$min)->where('price','<=',$max)->get();

        }

        return view('products.ajax',compact('products'));


    }


    public function categoryProducts($id)
    {
        // TODO: Implement categoryProducts() method.

        $categoy_id = $id;

        $categories = $this->category::all();
        $products  = $this->product::where('category_id',$categoy_id)->get();

        return view('shop',compact('products','categories'))->withTitle('E-COMMERCE STORE | Category');
    }


}