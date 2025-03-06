<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        echo "LISTADO DE TODOS LOS PRODUCTOS";

    }
    
    public function create(){
        echo "FORMULARIO PARA CREAR UN PRODUCTO";
    }

    public function show($name){
        echo "PRODUCTO: $name";
    }
}
