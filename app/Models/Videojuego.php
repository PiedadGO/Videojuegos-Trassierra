<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Videojuego extends Model
{
    /*
    Como la tabla pivote tiene un nombre diferente al de la convención (genero_videojuego), 
    hay que especificarlo explícitamente en el método belongsToMany de los modelos.
    */
    public function generos(): BelongsToMany
    {
        return $this->belongsToMany(Genero::class, 'videojuego_genero'); // Segundo param = nombre de la tabla pivote
    }
}
