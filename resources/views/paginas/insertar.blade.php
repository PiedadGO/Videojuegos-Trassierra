@extends('plantillas.base')

@section('titulo', 'Insertar')

@section('contenido')
    <div class="container mt-3 col-10 col-md-3">
        <h2 class="text-center mb-4 fw-bold">Registrar videojuego</h2>

        <form method="post" action="{{ route('guardar-juego') }}" class="bg-light p-4 rounded-4  mt-5">
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
                <label for="anio_lanzamiento" class="form-label">Año de lanzamiento:</label>
                <input type="text" class="form-control" id="anio_lanzamiento" name="anio_lanzamiento" pattern="^\d{4}$"
                    title="Debe contener exactamente 4 dígitos" required="required">

            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>

@endsection
