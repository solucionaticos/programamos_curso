<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Controladores de Usuarios
use App\Http\Controllers\User\ListController;
use App\Http\Controllers\User\CreateController;
use App\Http\Controllers\User\UpdateController;
use App\Http\Controllers\User\DeleteController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Ruta (Path) de Navegacion
Route::get('/user/index', [ListController::class, 'index']);
Route::get('/user/list', [ListController::class, 'list']);
// Route::post('/user/create', [CreateController::class, '__invoke']);
Route::post('/user/create', CreateController::class);
Route::put('/user/update/{id}', UpdateController::class);
Route::delete('/user/delete/{id}', DeleteController::class);


