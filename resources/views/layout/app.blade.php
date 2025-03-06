<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producto</title>
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
        .form-container {
            border: 2px solid #f90;
            border-radius: 8px;
            padding: 20px;
            max-width: 500px;
            margin: 40px auto;
            background: white;
        }
        .form-title {
            color: #f90;
            text-align: center;
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 15px;
        }
        .btn-submit {
            background-color: #f90;
            color: white;
            font-weight: bold;
            border: none;
            width: 100%;
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

   @yield('content')


    <!-- Footer -->
    <div class="footer">
        © 2023 UNAB Tienda. Todos los derechos reservados.
    </div>

</body>
</html>
