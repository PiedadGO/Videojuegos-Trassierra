@extends('plantillas.base')

@section('titulo', 'Editado')

@section('contenido')

    <div class="text-center my-4">
        <h2 class="fw-bold">Editar videojuego</h2>
    </div>

    <div class="container d-flex justify-content-center">
        <div class="alert bg-dark text-white text-center w-50 mt-5" role="alert">
            <h4 class="alert-heading ">Videojuego {{ $videojuego->nombre }} editado</h4>
        </div>
    </div>

@endsection
