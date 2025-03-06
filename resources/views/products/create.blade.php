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

    <!-- Formulario de creación de producto -->
    <div class="container">
        <div class="form-container">
            <h2 class="form-title">Crear Nuevo Producto</h2>
            <form>
                <div class="mb-3">
                    <label class="form-label">Nombre del Producto</label>
                    <input type="text" class="form-control" placeholder="Ingrese el nombre del producto">
                </div>
                <div class="mb-3">
                    <label class="form-label">Descripción</label>
                    <textarea class="form-control" rows="3" placeholder="Ingrese la descripción del producto"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Categoría</label>
                    <select class="form-select">
                        <option selected>Seleccione una categoría</option>
                        <option value="1">Electrónica</option>
                        <option value="2">Libros</option>
                        <option value="3">Ropa</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Precio</label>
                    <input type="text" class="form-control" placeholder="Ingrese el precio del producto">
                </div>
                <div class="mb-3">
                    <label class="form-label">Imagen del Producto</label>
                    <input type="file" class="form-control">
                </div>
                <button type="submit" class="btn btn-submit">Crear Producto</button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        © 2023 UNAB Tienda. Todos los derechos reservados.
    </div>

</body>
</html>
