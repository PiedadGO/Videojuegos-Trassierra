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
            <label for="lanzamiento" class="form-label">Año de lanzamiento:</label>
            <input type="number" class="form-control" id="lanzamiento" name="lanzamiento" required="required">
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
</div>

@endsection