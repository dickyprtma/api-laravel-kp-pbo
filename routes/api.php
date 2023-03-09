<?php

use App\Http\Controllers\Api\MateriController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\SoalController;
use App\Http\Controllers\TantanganController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('user', UserController::class);
Route::post('upload-user/{id}', [UserController::class, "uploadImage"]);

Route::resource('materi', MateriController::class);
Route::post('selesai-materi/{user_id}', [MateriController::class, "selesaiMateri"]);

Route::resource('tantangan', TantanganController::class);
Route::resource('soal', SoalController::class);

Route::post('login', [UserController::class, "login"]);