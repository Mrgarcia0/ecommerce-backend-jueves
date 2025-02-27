<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function ($name) {
    echo "LISTADO DE TODOS LOS PRODUCTOS";
});

Route::get('/products/create', function () {
    echo "FORMULARIO PARA CREAR UN PRODUCTO";
});

Route::get('/products/{name}', function ($name) {
    echo "PRODUCTO: $name";
});

Route::get('/products/{name}/{category}', function ($name, $category) {
    echo "PRODUCTO: $name, y tiene una categoria $category";
});