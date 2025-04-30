<?php

use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\UserController;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


//User Registration all routes start
Route::get('/users',[UserController::class,'index']);
Route::post('/users/store',[UserController::class,'store']);
Route::get('/users/edit/{id}',[UserController::class,'edit']);
Route::patch('/users/update/{id}', [UserController::class, 'update']);
Route::delete('/users/delete/{id}', [UserController::class, 'destroy']);
//User Registration all routes end


//Post all routes start
Route::get('/posts',[PostController::class,'index']);
Route::post('/posts/store',[PostController::class,'store']);
Route::get('/posts/edit/{id}',[PostController::class,'edit']);
Route::patch('/posts/update/{id}', [PostController::class, 'update']);
Route::delete('/posts/delete/{id}', [PostController::class, 'destroy']);
//Post all routes end





