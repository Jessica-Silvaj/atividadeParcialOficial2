<?php

use App\Http\Controllers\LivrariaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/livraria', [LivrariaController::class, 'index']);
Route::get('/livraria/{id}', [LivrariaController::class, 'show']);
Route::post('/livraria', [LivrariaController::class, 'store']);
Route::put('/livraria/{id}', [LivrariaController::class, 'update']);
Route::delete('/livraria/{id}', [LivrariaController::class, 'destroy']);
