<?php

use App\Http\Controllers\Api\MateriController;
use App\Http\Controllers\Api\UserController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('user', UserController::class);
Route::post('upload-user/{id}', [UserController::class, "uploadImage"]);

Route::resource('materi', MateriController::class);
Route::post('selesai-materi/{user_id}', [MateriController::class, "selesaiMateri"]);

Route::post('login', [UserController::class, "login"]);



