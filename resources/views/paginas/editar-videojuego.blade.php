@extends('plantillas.base')

@section('titulo', 'Editar')

@section('contenido')
    <div class="text-center my-4">
        <h2 class="fw-bold">Editar videojuego</h2>
    </div>

    @if ($errors->any())
        <div class="container d-flex justify-content-center align-items-start mb-0 ">
            <div class=" text-center vw-50 alert alert-danger">
                <ul class="list-unstyled mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    <div class="container d-flex justify-content-center">
        <form action='{{ route('videojuego.update', $videojuego->id) }}' method='POST'
            class="bg-light p-4 rounded-4 vw-50  mt-5">
            @csrf
            @method('put')
            <input type="hidden" name="videojuegoId" value='{{ $videojuego->id }}'>

            <div class="mb-3">
                <label for="titulo" class="form-label fs-5">Título:</label>
                <input type="text"
                    class="form-control @error('titulo') is-invalid @enderror"
                    id="titulo"
                    name="titulo"
                    value="{{ old('titulo', $videojuego->nombre) }}">
                @error('titulo')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="desarrollador" class="form-label fs-5">Desarrollador:</label>
                <input type="text" class="form-control" id="desarrollador" name="desarrollador"
                    value='{{ $videojuego->desarrollador }}' @error('desarrollador') is-invalid @enderror>
            </div>

            <div class="mb-3">
                <label for="anio_lanzamiento" class="form-label fs-5">Año de lanzamiento:</label>
                <input type="text" class="form-control" id="anio_lanzamiento" name="anio_lanzamiento"
                    value='{{ $videojuego->anio_lanzamiento }}'>
                <!-- pattern="^\d{4}$" title="Debe contener exactamente 4 dígitos" -->
            </div>
            <div class="mb-3">
                <p>Género/s:</p>
            </div>
            @foreach ($generos as $genero)
                <div class="mb-3 form-check form-check-inline">
                    <label for="genero_{{ $genero->id }}" class="form-check-label">{{ $genero->nombre }}</label>
                    <input type="checkbox" class="form-check-input" id="genero_{{ $genero->id }}"
                        name="generosSeleccionados[]" value="{{ $genero->id }}"
                        {{ in_array($genero->id, $generosSeleccionados) ? 'checked' : '' }}>
                </div>
            @endforeach
            <div class="container d-flex justify-content-center vw-50 mt-4">
                <input type='submit' class='btn btn-primary vw-50' value='Enviar'></input>
            </div>
        </form>
    </div>
@endsection
