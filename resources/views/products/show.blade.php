<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Producto</title>
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
        .product-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 40px;
        }
        .product-image {
            border: 2px solid #f90;
            border-radius: 8px;
            padding: 10px;
            width: 300px;
            height: auto;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .product-details {
            margin-left: 30px;
            max-width: 500px;
        }
        .product-title {
            color: #f90;
            font-size: 26px;
            font-weight: bold;
        }
        .product-price {
            font-size: 24px;
            font-weight: bold;
        }
        .btn-cart {
            background-color: #f90;
            color: white;
            font-weight: bold;
            border: none;
            padding: 10px 20px;
        }
        .footer {
            background-color: #f90;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 40px;
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

    <!-- Footer -->
    <div class="footer">
        © 2023 UNAB Tienda. Todos los derechos reservados.
    </div>

</body>
</html>
