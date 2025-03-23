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
        return view('paginas.insertar');
    }

    public function almacenar(Request $request)
    {
        DB::table('videojuegos')->insert([
            'nombre' => $request->input('titulo'),
            'desarrollador' => $request->input('desarrollador'),
            'anio_lanzamiento' => $request->input('lanzamiento'),
            'created_at' => now(),
            'updated_at' =>  now(),
        ]);

        return redirect()->route('mostrar-videojuegos');
    }

    




}
