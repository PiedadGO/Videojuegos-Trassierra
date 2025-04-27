<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use Illuminate\Http\Request;
use App\Models\Videojuego;
use Ramsey\Uuid\Type\Integer;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    ////////////////////////////////////////
    ////////////////////////////////////////

    /**
     * 
     */
    public function editForm()
    {
        $videojuegos = Videojuego::all();
        return view('paginas.seleccionar-videojuego', ['videojuegos' => $videojuegos]);
    }

    /**
     * 
     */
    public function editElement(Request $request)
    {
        $request->validate([
            'vj_id' => 'required|integer|min:1'
        ]);
        $id = $request->input('vj_id');

        /*
        Obtener datos a pasar al formulario del videojuego a editar
         */
        $videojuego = Videojuego::findOrFail($id);
        $generos = Genero::all();
        $generosSeleccionados = $videojuego->generos->pluck('id')->toArray();

        return view(
            'paginas.editar-videojuego',
            [
                'videojuego' => $videojuego,
                'generos' => $generos,
                'generosSeleccionados' => $generosSeleccionados //The pluck method retrieves all of the values for a given key
            ]
        );
    }

    public function updateElement(Request $request, Videojuego $videojuego)
    {
        //$anioActual = Carbon::now()->year;

        $request->validate(
            [
                'titulo' => 'required|max:100', // 100 caracteres
                'desarrollador' => 'required|max:50', // 50 caracteres
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
        $videojuego->nombre = 'titulo';
        $videojuego->desarrollador = 'desarrollador';
        $videojuego->anio_lanzamiento = 'anio_lanzamiento';

        //return view('paginas.confirmar-edicion', ['videojuego' => $videojuego]);
        //return redirect()->route('inicio', $videojuego->id)->with('success', "Videojuego $videojuego->nombre actualizado correctamente");

        $slug = Str::of($videojuego->nombre)->slug('-');

        $videojuego->save();
        $videojuego->generos()->sync($request->input('generosSeleccionados', [])); // generos() es la relación definida en el Modelo Videojuego
        return redirect()
            ->route('inicio', $slug)
            ->with('success', "Videojuego $videojuego->nombre actualizado correctamente.");
    }


    /**
     * 
     */
    public function destroyselect()
    {
        try {
            if (Auth::check()) {
                if (Auth::user()->rol === 'administrador') {
                    $videojuegos = Videojuego::all();
                    return view('paginas.seleccionar-borrar', ['videojuegos' => $videojuegos]);
                } else {
                    return redirect()->route('inicio')->with('failure', 'Acceso denegado. Solo los administradores pueden acceder a esta función.');
                }
            } else {
                return redirect()->route('inicio')->with('failure', 'Acceso denegado. No has iniciado sesión.');
            }
        } catch (\Exception $e) {
            return redirect()->route('inicio')->with('failure', 'Acceso denegado. Has de iniciar sesión y tener rol de administrador para poder acceder a esta función.');
        }
    }
    /**
     * 
     */

    public function destroyById(Request $request)
    {
        if (Auth::check()) {
            if (Auth::user()->rol === 'administrador') {
                $request->validate([
                    'vj_id' => 'required|integer|min:1'
                ]);

                $id = $request->input('vj_id');

                try {
                    $videojuego = Videojuego::findOrFail($id);
                    $videojuego->delete();
                    return redirect()->route('inicio')
                        ->with('success', "Videojuego $videojuego->nombre eliminado correctamente.");
                } catch (\Exception $e) {
                    return redirect()->route('inicio')
                        ->with('failure', "⚠ Falló el proceso. Inténtalo de nuevo.");
                }
            }
        } else {
            return redirect()->route('inicio')->with('failure', 'Inicia sesión como administrador para borrar.');
        }
    }
}
