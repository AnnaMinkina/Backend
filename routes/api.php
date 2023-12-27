<?php

use App\Http\Controllers\PostController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/post', [PostController::class, 'index']); //Вывод всех постов
Route::get('/post/{post}', [PostController::class, 'show']); //Вывод одного определнного поста
Route::post('/post', [PostController::class, 'store']); //Создание нового поста
Route::patch('/post/{post}', [PostController::class, 'update']); //Изменение поста
Route::delete('/post/{post}', [PostController::class, 'destroy']); //Удаление поста
