@extends('plantillas.base')

@section('titulo', 'Inicio')

@section('contenido')


    <div class="text-center mt-5">
        <h2 class="fw-semibold">Bienvenido a La web de videojuegos Trassierra</h2>
    </div>

    <div class="text-center mt-5">
        <img src="{{ asset('images/game_crush.jpg') }}" alt="Logo" height="200" width="auto">
    </div>

    <div class="d-flex justify-content-center my-4">
        @if (session('success'))
            <div class='text-center w-25 ms-2 alert alert-success'>
                {{ session('success') }}
            </div>
        @endif

        @if (session('failure'))
            <div class='text-center w-25 ms-2 alert alert-danger'>
                {{ session('failure') }}
            </div>
        @endif

    </div>

@endsection
