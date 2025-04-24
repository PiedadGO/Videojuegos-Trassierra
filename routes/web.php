<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RutaController;
use App\Http\Controllers\BBDDController;
use App\Http\Controllers\EloquentController;
use App\Http\Controllers\CRUDController;
use App\Http\Controllers\AuthController;



/*
Route::get('/', function () {
    return view('welcome');
});
*/

//Define la ruta /hola que invoque al método saludo en RutaController, mostrando el mensaje ¡Hola!.
Route::get('/hola', [RutaController::class, 'saludo']);

//Establece la ruta /juegos para llamar al método mostrarJuegos en RutaController, que visualiza todos los juegos de un array contenido en dicho controlador.
Route::get('/juegos', [RutaController::class, 'mostrarJuegos']);

//Implementa la ruta /juegos/{id} para llamar al método mostrarJuegoID en RutaController, que muestra un juego específico por su ID del array contenido en el controlador.
Route::get('/juegos/{id}' , [RutaController::class, 'mostrarJuegoID']);

//Inicio
Route::get('/', [RutaController::class, 'home'])->name('inicio');

//Sobre nosotros
Route::get('/acerca-de', [RutaController::class, 'informacion'])->name('sobre-nosotros');

//ver
Route::get('/catálogo', [BBDDController::class, 'catalogo'])->name('mostrar-videojuegos');

//Añadir
Route::get('/añadir', [BBDDController::class, 'crear']) ->name('anadir');
Route::post('/añadir', [BBDDController::class, 'almacenar']) ->name('guardar-juego');

//Géneros
Route::get('/generos', [EloquentController::class, 'tipo'])->name('generos');

//Editar
Route::get('/editar', [CRUDController::class, 'editForm']) ->name('videojuego.edit.select'); //
Route::post('/editar', [CRUDController::class, 'editElement']) ->name('videojuego.edit.select.submit');
Route::put('/editar/{videojuego}', [CRUDController::class, 'updateElement']) ->name('videojuego.update');


//Borrar
Route::get('/borrar/select', [CRUDController::class, 'destroyselect'])->name('videojuego.delete.select');
Route::post('/borrar/select', [CRUDController::class, 'destroyById'])->name('videojuego.delete.select.submit');

//Registro y sesiones
Route::get('/registro', [AuthController::class, 'registerForm'])->name('usuario.register');
Route::post('/registro', [AuthController::class, 'register2']) ->name ('usuario.register.submit');
Route::get('/accesso', [AuthController::class, 'loginForm'])->name('usuario.login');
Route::post('/acceso', [AuthController::class, 'login'])->name('usuario.login.submit');
Route::post('/cierre', [AuthController::class, 'logout'])->name('usuario.logout');