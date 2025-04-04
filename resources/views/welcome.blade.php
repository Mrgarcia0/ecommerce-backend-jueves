<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNAB - Tienda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar {
            background-color: #ff9800;
        }
        .carousel-item {
            text-align: center;
            background-color: #8bc34a;
            padding: 50px 0;
            color: white;
        }
        .category-card {
            border: 1px solid #ff9800;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand text-white" href="#">UNAB LIKE TOMA TOMA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link text-white" href="#">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">Promociones</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">Categorías</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <h2>Nuestra gente UNAB</h2>
                <p>Bienvenido a nuestra comunidad</p>
            </div>
            <div class="carousel-item">
                <h2>Explora nuestros productos</h2>
                <p>Descubre lo mejor en tecnología, libros y más</p>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Categorías de Productos</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="category-card">
                    <h4>Electrónica</h4>
                    <p>Descubre los últimos dispositivos electrónicos.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="category-card">
                    <h4>Libros</h4>
                    <p>Explora nuestra colección de libros.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="category-card">
                    <h4>Ropa</h4>
                    <p>Encuentra la mejor ropa y accesorios.</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
