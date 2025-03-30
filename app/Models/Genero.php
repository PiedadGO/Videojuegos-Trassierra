<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Genero extends Model
{
    /*
    Como la tabla pivote tiene un nombre diferente al de la convención (genero_videojuego), 
    hay que especificarlo explícitamente en el método belongsToMany de los modelos.
    */
    public function videojuegos(): BelongsToMany
    {
        return $this->belongsToMany(Videojuego::class, 'videojuego_genero');
    }
}
