<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\ProductDummyjson;

class DummyjsonService{

    public CurlService $curlService;

    public function __construct(CurlService $curl)
    {
        $this->curlService = $curl;
    }     

    public function DummyjsonProductSearch($query){

        $data = $this->curlService->sendCURL('https://dummyjson.com/products/search?q=' . $query);

        foreach($data['products'] as $product){
         
            $productDummyjson = new ProductDummyjson;
            
            $productDummyjson->title = $product['title']; 
            $productDummyjson->description = $product['description']; 
            $productDummyjson->category = $product['category']; 
            $productDummyjson->price = $product['price']; 
            $productDummyjson->discountPercentage = $product['discountPercentage'];
            $productDummyjson->rating = $product['rating'];
            $productDummyjson->stock = $product['stock']; 
            // $productDummyjson->brand = $product['brand'];
            $productDummyjson->sku = $product['sku']; 
            $productDummyjson->weight = $product['weight'];
            $productDummyjson->save();
            
        }

        return $data;
    }
}