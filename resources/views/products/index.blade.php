<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda UNAB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #fff;
        }
        .navbar {
            background-color: #f90;
        }
        .navbar a {
            color: white;
            font-weight: bold;
        }
        .product-card {
            border: 2px solid #f90;
            border-radius: 8px;
            padding: 15px;
            text-align: center;
            margin-bottom: 20px;
        }
        .product-title {
            color: #f90;
            font-size: 20px;
            font-weight: bold;
        }
        .btn-cart {
            background-color: #f90;
            color: white;
            font-weight: bold;
            border: none;
        }
        .footer {
            background-color: #f90;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">UNAB Tienda</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Promociones</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Categorías</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

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

    <!-- Footer -->
    <div class="footer">
        © 2023 UNAB Tienda. Todos los derechos reservados.
    </div>

</body>
</html>
