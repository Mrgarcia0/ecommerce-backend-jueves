@extends('layout.app')

@section('content')

    <!-- Detalles del Producto -->
    <div class="container product-container">
        <div class="product-image">
            <img src="producto.jpg" alt="Producto" width="280">
        </div>
        <div class="product-details">
            <h2 class="product-title">Nombre del Producto</h2>
            <p><strong>Categoría:</strong> Electrónica</p>
            <p>Descripción del producto. Este es un producto increíble con características únicas que lo hacen destacar en el mercado. Perfecto para cualquier ocasión.</p>
            <p class="product-price">$99.99</p>
            <button class="btn btn-cart">Agregar al Carrito</button>
        </div>
    </div>

@endsection
