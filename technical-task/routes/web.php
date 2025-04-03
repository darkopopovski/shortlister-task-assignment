<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('users', [UserController::class, 'getUsers']);
Route::get('users/pageable', [UserController::class, 'getUsersPageable']);
Route::get('users/create', [UserController::class, 'createUserView']);
Route::post('users', [UserController::class, 'createUser']);

