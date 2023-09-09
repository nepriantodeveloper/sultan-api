<?php

use App\Http\Controllers\ArtikelController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(RegisterController::class)->group(function(){
    Route::post('register', 'register');
    Route::post('login', 'login');
});

Route::middleware('auth:sanctum')->group(function () {

    Route::get('artikel', [ArtikelController::class, 'index']);
    Route::post('artikel/store', [ArtikelController::class, 'store']);
    Route::get('artikel/detail/{id}', [ArtikelController::class, 'detail']);
    Route::post('artikel/update/{id}', [ArtikelController::class, 'update']);
    Route::get('artikel/hapus/{id}', [ArtikelController::class, 'hapus']);
    
});
