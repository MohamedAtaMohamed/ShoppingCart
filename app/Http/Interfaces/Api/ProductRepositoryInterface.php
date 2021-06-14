<?php
namespace App\Http\Interfaces\Api;

interface ProductRepositoryInterface{


    public function products();


    public function show($id);

}