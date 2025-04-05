@extends('layout.app')

@section('content')
    <!-- Contenido -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-5">
                <div class="card p-3">
                    <img src="{{$product->url_image}}" class="img-fluid" alt="Producto">
                </div>
            </div>
            <div class="col-md-7">
                <h2 class="text-warning">{{$product->name}}</h2>
                <p><strong>Categoría:</strong>{{$product->category_id}}</p>
                <p>{{$product->description}}.</p>
                <h3 class="text-warning">${{$product->price}}</h3>
                <button class="btn btn-warning">Agregar al Carrito</button>
            </div>
        </div>
    </div>
@endsection