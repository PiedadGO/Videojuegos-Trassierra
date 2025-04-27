@extends('plantillas.base')

@section('titulo', 'Borrar')

@section('contenido')
    <div class="text-center my-4">
        <h2 class="fw-bold">Borrar videojuego</h2>
    </div>

    <div class="container d-flex justify-content-center">
        @if (count($videojuegos) > 0)
            <form action='{{ route('videojuego.delete.select.submit') }}' method='POST'
                class="bg-light p-4 rounded-4 vw-50 mt-5">
                @csrf
                @method('DELETE')
                <div class="row">
                        <label for='vj_id' class='form-label mb-3 fs-5'>Videojuego a borrar:</label>
                        <select id='vj_id' name='vj_id' class='form-select' required>
                            @foreach ($videojuegos as $videojuego)
                                <option value="{{ $videojuego->id }}">{{ $videojuego->id }} - {{ $videojuego->nombre }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="container d-flex justify-content-center vw-50 mt-4">
                        <input type='submit' class='btn btn-primary ' value='Enviar'></input>
                    </div>
                </div>
            </form>
        @else
            <div class="alert alert-warning text-center">
                ¡No hay videojuegos registrados!
            </div>
        @endif
    </div>

@endsection
