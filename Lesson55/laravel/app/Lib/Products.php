<?php

namespace App\Lib;

class Products {

    public function all() {
        $products = App\Products::all();
        return $products;
    }
}