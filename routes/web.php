<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('contacto', function () {
    return "Hola desde la pagina de contacto";
});

Route::get('saludo/{id}', function ($nombre="invitado") {
    return "Saludos ".$nombre;
});
*/
Route::get('/',HomeController::class);

Route::get('cursos',[CursoController::class,'index']);

Route::get('cursos/create',[CursoController::class,'create']);

Route::get('cursos/{curso}/{detalles?}',[CursoController::class,'show']);
