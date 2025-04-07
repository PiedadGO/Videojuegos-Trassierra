<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videojuego;
use Ramsey\Uuid\Type\Integer;

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
        $request-> validate([
            'vj_id' =>'required|integer|min:1'
        ]);
        $id= $request-> input('vj_id');
        $videojuego = Videojuego::findOrFail($id);
        return view('paginas.editar-videojuego', ['videojuego' => $videojuego]);

    }

    public function updateElement(Request $request, Videojuego $videojuego ){
        $request->validate([
            'titulo' => 'required|max:225',
            'desarrollador' => 'required|max:225',
            'anio_lanzamiento' => 'required|digits:4'
        ]);

        $videojuego->nombre = $request->input('titulo');
        $videojuego->desarrollador = $request->input('desarrollador');
        $videojuego->anio_lanzamiento = $request->input('anio_lanzamiento');

        $videojuego ->save();

        return view ('paginas.confirmar-edicion', ['videojuego' => $videojuego]);
        //return redirect()->route('videojuego.edit.select', $videojuego->id)->with('success', 'Videojuego actualizado correctamente');

    }



}
