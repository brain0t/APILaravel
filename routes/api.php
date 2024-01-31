<?php

use App\Http\Controllers\helloWorldController;
use App\Http\Controllers\jogosController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('hello', [helloWorldController::class, 'hello']);
Route::post('hello_post/{name}', [helloWorldController::class, 'hello_post']);

Route::get('jogos',[jogosController::class, 'jogos']);
Route::get('jogos_id/{id}',[jogosController::class, 'jogos_id']);
Route::get('jogos_genero/{id}',[jogosController::class, 'jogos_genero']);
Route::post('jogos/store',[jogosController::class, 'store']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
