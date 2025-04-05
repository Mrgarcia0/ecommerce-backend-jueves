<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $listProducts=Product::paginate(12);
       // dd($listProducts);



        return view('products.index',[

            'listProducts'=> $listProducts
        ]); //retornar una lista de productos

    }
    
    public function create(){
        return view('products.create'); // retornar el formulario para crear un producto
    }

    public function show($name){
        return view('products.show');
    }
}
