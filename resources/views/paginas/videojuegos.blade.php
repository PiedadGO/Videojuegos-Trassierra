@extends('plantillas.base')

@section('titulo', 'Repertorio de videojuegos')

@section('contenido')
    <div class="text-center my-4">
        <h2 class="fw-bold">Repertorio de videojuegos</h2>
    </div>

    <div class="container">
        @if (count($videojuegos) > 0)

            <table class="table table-striped table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Título</th>
                        <th>Desarrollador</th>
                        <th>Año de lanzamiento</th>
                        <th>Fecha de creación</th>
                        <th>Fecha de actualización</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($videojuegos as $videojuego)
                        <tr>
                            <td>{{ $videojuego->nombre }}</td>
                            <td>{{ $videojuego->desarrollador }}</td>
                            <td>{{ $videojuego->anio_lanzamiento }}</td>
                            <td>{{ $videojuego->created_at }}</td>
                            <td>{{ $videojuego->updated_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="alert alert-warning">
                ¡No hay videojuegos registrados!
            </div>
            </tbody>
            </table>
        @endif
    </div>
@endsection
