<?php
namespace App\Repositories;

// use RedBeanPHP\Models\Product;

class ProductRepository 
{
 
    public function getById($id) {

        $products  = collect($this->testData());


        return  $products->find($id);
    }

    public function getAll() {

        // return Product::all();
        // return Product::findAll();
        return $this->testData();
    }

    private function testData() {
 
        $product = (object) [];
        $product->id = 1;
        $product->name = "chair";
        $product->category = "Furniture";
        $product->created_at = date("Y-m-d H:i:s", time());

        $product2 = (object) [];
        $product2->id = 2;
        $product2->name = "table";
        $product2->category = "Furniture";
        $product2->created_at = date("Y-m-d H:i:s", time());

        return [$product, $product2];
    }
}