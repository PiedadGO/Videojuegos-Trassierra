<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EloquentController extends Controller
{
    public function tipo()
    {
        return view('paginas.generos');
    }
}
