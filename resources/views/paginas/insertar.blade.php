@extends('plantillas.base')

@section('titulo', 'Insertar')

@section('contenido')
    <div class="container mt-3">
        <h2 class="text-center mb-4 fw-bold">Registrar videojuego</h2>

        <div class="container d-flex justify-content-center">
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
                    <input type="text" class="form-control" id="anio_lanzamiento" name="anio_lanzamiento"
                        pattern="^\d{4}$" title="Debe contener exactamente 4 dígitos" required="required">
                </div>
                <div class="mb-3">
                    <p>Género/s:</p>
                </div>
                @foreach ($generos as $genero)
                    <div class="mb-3 form-check form-check-inline">
                        <label for="genero" class="form-check-label">{{ $genero->nombre }}</label>
                        <input type="checkbox" class="form-check-input" id="genero" name="generos[]"
                            value="{{ $genero->id }}">
                    </div>
                @endforeach

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>

        </div>

    </div>

@endsection
