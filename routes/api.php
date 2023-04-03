<?php

use App\Http\Controllers\Api\MateriController;
use App\Http\Controllers\Api\SiswaController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\SoalController;
use App\Http\Controllers\TantanganController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('siswa', SiswaController::class);
Route::post('upload-siswa/{id}', [SiswaController::class, "uploadImage"]);

Route::resource('materi', MateriController::class);
Route::post('tambah-exp/{user_id}', [MateriController::class, "tambahExp"]);
Route::post('update-coin/{user_id}', [MateriController::class, "updateCoin"]);

Route::resource('tantangan', TantanganController::class);
Route::resource('soal', SoalController::class);

Route::post('login', [SiswaController::class, "login"]);