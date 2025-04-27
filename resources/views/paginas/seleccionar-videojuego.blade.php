@extends('plantillas.base')

@section('titulo', 'Editar')

@section('contenido')
    <div class="text-center my-4">
        <h2 class="fw-bold">Editar videojuego</h2>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container d-flex justify-content-center">
        @if (count($videojuegos) > 0)
            <div
                class="bg-light p-4 rounded-4 vw-50 mt-5">
                @csrf
                <div class="row">
                    @foreach ($videojuegos as $videojuego)
                        <a href="{{ route('videojuego.edit.form', ['videojuego' => $videojuego->id]) }}">
                            {{ $videojuego->id }} - {{ $videojuego->nombre }}
                        </a>
                    @endforeach
                </div>
            </div>
        @else
            <div class="alert alert-warning text-center">
                ¡No hay videojuegos registrados!
            </div>
        @endif
    </div>

@endsection
