<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/posts/create', [PostController::class, 'create']);

Route::get('/posts/read', [PostController::class, 'read']);
Route::get('/posts/find/{id}', [PostController::class, 'find']);

Route::get('/posts/update/{id}', [PostController::class, 'update']);
Route::get('/posts/updates', [PostController::class, 'updates']);

Route::get('/posts/delete_all', [PostController::class, "delete_all"]);
Route::get('/posts/delete/{id}', [PostController::class, "delete"]);



Route::get('/', function () {
    echo 'bem vindo';
});
