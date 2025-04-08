@extends('plantillas.base')

@section('titulo', 'Géneros')

@section('contenido')
    <div class="container">
        <!-- Tabla de Videojuegos por Género -->
        <h2 class="my-4">Videojuegos por Género</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="thead-dark">
                    <tr class="w-50">
                        <th class="text-center fs-5 w-50">Género</th>
                        <th class="text-center fs-5 w-50">Videojuegos</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($generos as $genero)
                        <tr><!--fila-->
                            <td class="fw-bold ps-5 pt-3 w-50">{{ $genero->nombre }}</td> <!-- columna nombre género-->
                            <td class="w-50"> <!-- Columna todos los videojuegos que pertenecen a ese género-->
                                <ul>
                                    @foreach ($genero->videojuegos as $videojuego)
                                        <li class="mt-2">{{ $videojuego->nombre }}</li>
                                    @endforeach
                                </ul>
                            </td>
                        </tr><!-- -->
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
                        <th class="text-center fs-5 w-50">Videojuego</th>
                        <th class="text-center fs-5 w-50">Géneros</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($videojuegos as $videojuego)
                        <tr>
                            <td class="fw-bold ps-5 pt-3 w-50">{{ $videojuego->nombre }}</td>
                            <td class="w-50">
                                <ul>
                                    @foreach ($videojuego->generos as $genero)
                                        <li class="mt-2">{{ $genero->nombre }}</li>
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
