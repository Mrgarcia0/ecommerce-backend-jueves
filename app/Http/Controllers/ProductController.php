<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('products.index'); //retornar una lista de productos

    }
    
    public function create(){
        return view('products.create'); //
    }

    public function show($name){
        echo "PRODUCTO: $name";
    }
}
