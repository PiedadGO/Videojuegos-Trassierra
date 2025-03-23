@extends('plantillas.base')

@section('titulo', 'Insertar')

@section('contenido')
<div class="container mt-3 col-12 col-md-6">
    <h2 class="text-center mb-4 fw-bold">Registrar videojuego</h2>

    <form method="post" action="{{ route('guardar-juego') }}">
        @csrf
        
        <div class="mb-3">
            <label for="titulo" class="form-label">Título:</label>
            <input type="text" class="form-control" id="titulo" name="titulo" required="required">
        </div>

        <div class="mb-3">
            <label for="desarrollador" class="form-label">Desarrollador:</label>
            <input type="text" class="form-control" id="desarrollador" name="desarrollador" required="required">
        </div>

        <div class="mb-3">
            <label for="lanzamiento" class="form-label">Fecha de lanzamiento:</label>
            <input type="date" class="form-control" id="lanzamiento" name="lanzamiento" required="required">
        </div>

        <div class="mb-3">
            <label for="creacion" class="form-label">Fecha de creación:</label>
            <input type="date" class="form-control" id="creacion" name="creacion" required="required">
        </div>

        <div class="mb-3">
            <label for="actualizacion" class="form-label">Fecha de última actualización:</label>
            <input type="date" class="form-control" id="actualizacion" name="actualizacion" required="required">
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
</div>

@endsection