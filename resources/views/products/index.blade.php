@extends('layout.app')

@section('content')
    <!-- Productos -->
    <div class="container mt-4">
        <h2 class="text-center">Nuestros Productos</h2>
        <div class="row">

            @foreach ($listProducts as $product)
            <!-- Producto 1 -->
            <div class="col-md-4">
                <div class="product-card">
                    <img src="{{$product->url_image}}" alt="Producto 1">
                    <h3>{{$product->name}}</h3>
                    <p class="product-title">Producto 1</p>
                    <p>Categoría: {{$product->category_id}}</p>
                    <p><strong>${{$product->price}}</strong></p>
                    <button class="btn btn-cart">Agregar al Carrito</button>
                </div>
            </div>

            @endforeach

            {{$listProducts->links()}}

            
        </div>
    </div>
@endsection
    
