@extends('plantillas.base')

@section('titulo', 'Inicio')

@section('contenido')
<div class="text-center my-4">
    <h2 class="fw-bold">Inicio</h2>
</div>

<div class="text-center">
    <h2 class="fw-semibold">Bienvenido a La web de videojuegos Trassierra</h2>
</div>
<div class="text-center mt-5">
    <img src="{{asset('images/game_crush.jpg') }}" alt="Logo" height="200" width="auto">
</div>

@endsection