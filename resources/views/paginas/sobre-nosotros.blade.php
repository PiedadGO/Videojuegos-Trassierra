@extends('plantillas.base')

@section('titulo', 'Sobre nosotros')

@section('contenido')
    <div class="container d-flex justify-content-center">
        <div class="card shadow-lg text-center vw-50">
            <div class="card-header bg-dark text-white">
                <h2 class="mb-0">Sobre nosotros</h2>
            </div>
            <div class="card-body">
                <p class="mb-2 fs-4"><span class="fw-bold">Nombre:</span> {{ $tarea['nombre'] }}</p>
                <p class="mb-2 fs-4"><span class="fw-bold">Primer Apellido:</span> {{ $tarea['apellido1'] }}</p>
                <p class="mb-0 fs-4"><span class="fw-bold">Segundo Apellido:</span> {{ $tarea['apellido2'] }}</p>
            </div>
        </div>
    </div>

@endsection
