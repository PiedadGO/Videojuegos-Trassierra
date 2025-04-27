@extends('plantillas.base')

@section('titulo', 'Editar')

@section('contenido')
    <div class="text-center my-4">
        <h2 class="fw-bold">Editar videojuego</h2>
    </div>

    <div class="container d-flex justify-content-center">
        <form action='{{ route('videojuego.update', ['videojuego' => $videojuego->id]) }}' method='POST'
            class="bg-light p-4 rounded-4 vw-50  mt-5">
            @csrf
            @method('put')
            <input type="hidden" name="videojuegoId" value='{{ $videojuego->id }}'>

            <div class="mb-3">
                <label for="titulo" class="form-label">Título:</label>
                <input type="text" class="form-control @error('titulo') is-invalid @enderror" id="titulo"
                    name="titulo" value="{{ old('titulo', $videojuego->nombre) }}">
                @error('titulo')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="desarrollador" class="form-label fs-5">Desarrollador:</label>
                <input type="text" class="form-control @error('desarrollador') is-invalid @enderror" id="desarrollador"
                    name="desarrollador" value="{{ old('desarrollador', $videojuego->desarrollador) }}">
                @error('desarrollador')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="anio_lanzamiento" class="form-label fs-5">Año de lanzamiento:</label>
                <input type="text" class="form-control @error('anio_lanzamiento') is-invalid @enderror"
                    id="anio_lanzamiento" name="anio_lanzamiento" pattern="^\d{4}$"
                    title="Debe contener exactamente 4 dígitos" required="required"
                    value="{{ old('anio_lanzamiento', $videojuego->anio_lanzamiento) }}">
                @error('anio_lanzamiento')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <p>Género/s:</p>
                @error('generosSeleccionados')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            @foreach ($generos as $genero)
                <div class="mb-3 form-check form-check-inline">
                    <label for="genero_{{ $genero->id }}" class="form-check-label">{{ $genero->nombre }}</label>
                    <input type="checkbox" class="form-check-input" id="genero_{{ $genero->id }}"
                        name="generosSeleccionados[]" value="{{ $genero->id }}"
                        {{ (is_array(old('generosSeleccionados', $generosSeleccionados)) && in_array($genero->id, old('generosSeleccionados', $generosSeleccionados))) ? 'checked' : '' }}>
                </div>
            @endforeach
            <div class="container d-flex justify-content-center vw-50 mt-4">
                <input type='submit' class='btn btn-primary vw-50' value='Enviar'>
            </div>
        </form>
    </div>
@endsection
