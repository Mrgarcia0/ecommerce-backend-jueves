@extends('layout.app')

@section('content')
    <!-- Productos -->
    <div class="container mt-4">
        <h2 class="text-center">Nuestros Productos</h2>
        <div class="row">
            <!-- Producto 1 -->
            <div class="col-md-4">
                <div class="product-card">
                    <img src="https://via.placeholder.com/100" alt="Producto 1">
                    <p class="product-title">Producto 1</p>
                    <p>Categoría: Electrónica</p>
                    <p><strong>$99.99</strong></p>
                    <button class="btn btn-cart">Agregar al Carrito</button>
                </div>
            </div>

            <!-- Producto 2 -->
            <div class="col-md-4">
                <div class="product-card">
                    <img src="https://via.placeholder.com/100" alt="Producto 2">
                    <p class="product-title">Producto 2</p>
                    <p>Categoría: Libros</p>
                    <p><strong>$49.99</strong></p>
                    <button class="btn btn-cart">Agregar al Carrito</button>
                </div>
            </div>

            <!-- Producto 3 -->
            <div class="col-md-4">
                <div class="product-card">
                    <img src="https://via.placeholder.com/100" alt="Producto 3">
                    <p class="product-title">Producto 3</p>
                    <p>Categoría: Ropa</p>
                    <p><strong>$29.99</strong></p>
                    <button class="btn btn-cart">Agregar al Carrito</button>
                </div>
            </div>

            <!-- Producto 4 -->
            <div class="col-md-4">
                <div class="product-card">
                    <img src="https://via.placeholder.com/100" alt="Producto 4">
                    <p class="product-title">Producto 4</p>
                    <p>Categoría: Electrónica</p>
                    <p><strong>$199.99</strong></p>
                    <button class="btn btn-cart">Agregar al Carrito</button>
                </div>
            </div>

            <!-- Producto 5 -->
            <div class="col-md-4">
                <div class="product-card">
                    <img src="https://via.placeholder.com/100" alt="Producto 5">
                    <p class="product-title">Producto 5</p>
                    <p>Categoría: Libros</p>
                    <p><strong>$59.99</strong></p>
                    <button class="btn btn-cart">Agregar al Carrito</button>
                </div>
            </div>

            <!-- Producto 6 -->
            <div class="col-md-4">
                <div class="product-card">
                    <img src="https://via.placeholder.com/100" alt="Producto 6">
                    <p class="product-title">Producto 6</p>
                    <p>Categoría: Ropa</p>
                    <p><strong>$39.99</strong></p>
                    <button class="btn btn-cart">Agregar al Carrito</button>
                </div>
            </div>
        </div>
    </div>
@endsection
    
