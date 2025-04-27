<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class BBDDController extends Controller
{
    public function catalogo()
    {
        $datos = DB::table('videojuegos')->get();

        return view('paginas.videojuegos', ['videojuegos' => $datos]);
    }

    public function crear(Request $request)
    {
        $generos = DB::table('generos')->get();
        //return view('paginas.insertar', ['generos' => $generos]);
        return view('paginas.insertar', compact('generos'));
    }

    public function almacenar(Request $request)
    {
        $request->validate(
            [
                'titulo' => 'required|max:100',
                'desarrollador' => 'required|max:50',
                'anio_lanzamiento' => 'required|integer|digits:4|before_or_equal:' . date('Y'),
            ],
            [
                'titulo.required' => 'El título es obligatorio.',
                'titulo.max' => 'El título no puede tener más de 100 caracteres.',
                'desarrollador.required' => 'El nombre del desarrollador es obligatorio.',
                'desarrollador.max' => 'El nombre del desarrollador no puede tener más de 50 caracteres.',
                'anio_lanzamiento.required' => 'El año de lanzamiento es obligatorio.',
                'anio_lanzamiento.integer' => 'El año de lanzamiento debe ser un número entero.',
                'anio_lanzamiento.digits' => 'El año de lanzamiento debe tener 4 dígitos.',
                'anio_lanzamiento.before_or_equal' => 'El año de lanzamiento no puede ser posterior al año actual.',
            ]
        );

        DB::table('videojuegos')->insert([
            'nombre' => $request->input('titulo'),
            'desarrollador' => $request->input('desarrollador'),
            'anio_lanzamiento' => $request->input('anio_lanzamiento'),
            //'created_at' => $request->input('creacion'),
            //'updated_at' =>  $request->input('actualizacion'),
            'created_at' => now(),
            'updated_at' =>  now(),
        ]);

        //Consulta para acceder al último videojuego insertado
        $ultimoVideojuego = DB::table('videojuegos')->orderBy('id', 'desc')->first();
        //variable para almacenar la id del último videojuego insertado
        $videojuegoId = $ultimoVideojuego->id;

        $generos = $request->input('generos', []);

        foreach ($generos as $genero) {
            DB::table('videojuego_genero')->insert([
                'videojuego_id' => $videojuegoId,
                'genero_id' => $genero,
                'created_at' => now(),
                'updated_at' =>  now(),
            ]);
        }
        return redirect()->route('mostrar-videojuegos');
    }
}
