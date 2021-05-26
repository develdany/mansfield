<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MotivosController;
use App\Http\Controllers\MotivosDetalleController;
use App\Http\Controllers\DetalleController;
use App\Http\Controllers\EquiposController;
use App\Http\Controllers\ImputacionesController;
use App\Http\Controllers\TagsController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('prueba', function () {
    return 'Probando API';
});

// Route::resource([
//     'motivos' => MotivosController::class,
//     'motivos_detalle' => MotivosDetalleController::class
// ]);

Route::resource('motivos', MotivosController::class);
Route::resource('motivos_detalle', MotivosDetalleController::class);
Route::resource('detalle', DetalleController::class);

Route::resource('tags', TagsController::class);
Route::resource('equipos', EquiposController::class);
Route::resource('imputaciones', ImputacionesController::class);