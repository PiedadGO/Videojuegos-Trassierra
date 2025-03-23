<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RutaController extends Controller
{
    public function saludo()
    {
        return '<h1 style="text-align: center; padding-top: 2em;">¡Hola!</h1>';
    }

    ////Establece la ruta /juegos para llamar al método mostrarJuegos en RutaController, que visualiza todos los juegos de un array contenido en dicho controlador.
    private $juegos = [
        1 => ['nombre' => 'The Legend of Zelda: Breath of the Wild', 'descripcion' => 'Aventura en mundo abierto con exploración y combates.'],
        2 => ['nombre' => 'Elden Ring', 'descripcion' => 'RPG de acción con un vasto mundo y jefes desafiantes.'],
        3 => ['nombre' => 'Minecraft', 'descripcion' => 'Juego de construcción y supervivencia en un mundo de bloques.']
    ];

    public function mostrarJuegos()
    {
        $resultado = '';
        foreach ($this->juegos as $juego) {
            $resultado .= '<p style="text-align: center; padding-top: 2em;"><strong>' . $juego['nombre'] . '</strong>: ' . $juego['descripcion'] . '</p>';
        }
        return "<h1 style='text-align: center; padding-top: 2em;'>Lista de Juegos</h1>" . $resultado;
    }

    // Mostrar juego{id}
    public function mostrarJuegoID(string $id)
    {
        if (isset($this->juegos[$id])) {
            return '<p style="padding: 2em;">
                        <strong>Juego:</strong> ' . $this->juegos[$id]['nombre'] . '. 
                        <strong>Descripción:</strong> ' . $this->juegos[$id]['descripcion'] . '
                    </p>';
        } else {
            return '<p style="padding: 2em;">
                        El juego con ID ' . $id . ' no existe.
                    </p>';
        }
    }

    public function home()
    {
        return view('paginas.inicio');
    }
    public function informacion()
    {
        $tarea = [
            'nombre' => 'Piedad',
            'apellido1' => 'García',
            'apellido2' => 'Ortega'
        ];

        /**
         * compact --> Creates an array containing variables and their values. Returns the output array with all the variables added to it.
         */

        return view('paginas.sobre-nosotros', compact('tarea')); 
    }
}



