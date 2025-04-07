<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genero;
use App\Models\Videojuego;


class EloquentController extends Controller
{
    public function tipo()
    {
        
        /**
         * https://laravel.com/docs/11.x/eloquent-relationships#one-to-many
         * https://laracasts.com/discuss/channels/laravel/what-is-the-uses-of-with-and-has
         * https://stackoverflow.com/questions/37576620/laravel-eloquent-with-with
         * https://www.youtube.com/watch?v=ItCXxFZ2TTQ
         * Casar elementos interrelacionados. En la vista se recorre cada género y, dentro de 
         * cada género, se buscan coincidencias de videojuegos que contienen el valor de ese atributo 
         * género. Igual a la inversa (videojuegos-géneros)
         **/ 
        //with para casar los géneros con los videojuegos
        $generos = Genero::with('videojuegos')->get();

        // Casar los videojuegos con los géneros
        $videojuegos = Videojuego::with('generos')->get();

        return view('paginas.generos', compact('generos', 'videojuegos'));
    }
}
