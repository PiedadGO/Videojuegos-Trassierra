<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genero;
use App\Models\Videojuego;


class EloquentController extends Controller
{
    public function tipo()
    {
        // Obtener todos los géneros con sus videojuegos asociados
        $generos = Genero::with('videojuegos')->get();

        // Obtener todos los videojuegos con sus géneros asociados
        $videojuegos = Videojuego::with('generos')->get();

        return view('paginas.generos', compact('generos', 'videojuegos'));
    }
}
