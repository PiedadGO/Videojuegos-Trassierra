@extends('plantillas.base')

@section('titulo', 'Insertar')

@section('contenido')

    <div class="container mt-3">
        <h2 class="text-center mb-4 fw-bold">Registrar videojuego</h2>

        <div class="container d-flex justify-content-center">
            <form method="POST" action="{{ route('guardar-juego') }}" class="bg-light p-4 rounded-4 mt-5">
                @csrf

                <div class="mb-3">
                    <label for="titulo" class="form-label">Título:</label>
                    <input type="text" class="form-control @error('titulo') is-invalid @enderror" id="titulo"
                        name="titulo" value="{{ old('titulo') }}">
                    @error('titulo')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="desarrollador" class="form-label">Desarrollador:</label>
                    <input type="text" class="form-control @error('desarrollador') is-invalid @enderror"
                        id="desarrollador" name="desarrollador" value="{{ old('desarrollador') }}">
                    @error('desarrollador')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="anio_lanzamiento" class="form-label">Año de lanzamiento:</label>
                    <input type="text" class="form-control @error('anio_lanzamiento') is-invalid @enderror"
                        id="anio_lanzamiento" name="anio_lanzamiento" pattern="^\d{4}$"
                        title="Debe contener exactamente 4 dígitos" required="required"
                        value="{{ old('anio_lanzamiento') }}">
                    @error('anio_lanzamiento')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
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
