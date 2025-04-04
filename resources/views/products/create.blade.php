@extends('layout.app')

@section('content')
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
@endsection
    

