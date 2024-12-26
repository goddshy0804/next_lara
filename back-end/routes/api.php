<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SanPhamController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('sp', [SanPhamController::class, 'index']);
Route::get('sp/{id}', [SanPhamController::class, 'showDetail']);
Route::post('sp', [SanPhamController::class, 'store']);
