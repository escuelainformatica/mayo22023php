<?php

use App\Http\Controllers\EjemploController;
use App\Http\Middleware\EjemploMiddleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::middleware("ejemplo:hola")->get("/ejemplo",[EjemploController::class,'ejemplo']);
Route::middleware("ejemplo:hola")->any("/listar",[EjemploController::class,'listar']);
