<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HelloController;
use App\Http\Controllers\BandController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
/*
Route::get('hello/{name}', function($name){
    return 'hello world! '. $name;
});

Route::post('hello-post/{name}', [HelloController::class,'hello']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::get('bands', [BandController::class, 'getAll']);
Route::post('bands/store', [BandController::class, 'store']);
Route::get('bands/{id}', [BandController::class, 'getById']);
Route::get('bands/estilo/{estilo}', [BandController::class, 'getEstilo']);