@extends('plantillas.base')

@section('titulo', 'Géneros')

@section('contenido')
    <div class="container">
        <!-- Tabla de Videojuegos por Género -->
        <h2 class="my-4">Videojuegos por Género</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center fs-5">Género</th>
                        <th class="text-center fs-5">Videojuegos</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($generos as $genero)
                        <tr>
                            <td><strong>{{ $genero->nombre }}</strong></td>
                            <td>
                                <ul>
                                    @foreach ($genero->videojuegos as $videojuego)
                                        <li>{{ $videojuego->nombre }}</li><br>
                                    @endforeach
                                </ul>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Tabla de Géneros por Videojuego (Estilada igual que la anterior) -->
        <h2 class="my-4">Géneros por Videojuego</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center fs-5">Videojuego</th>
                        <th class="text-center fs-5">Géneros</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($videojuegos as $videojuego)
                        <tr>
                            <td><strong>{{ $videojuego->nombre }}</strong></td>
                            <td>
                                <ul>
                                    @foreach ($videojuego->generos as $genero)
                                        <li>{{ $genero->nombre }}</li><br>
                                    @endforeach
                                </ul>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
