<?php

use App\Http\Controllers\Backend\PostController;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/posts',[PostController::class,'index']);
Route::post('/posts/store',[PostController::class,'store']);
Route::get('/posts/edit/{id}',[PostController::class,'edit']);
Route::patch('/posts/update/{id}', [PostController::class, 'update']);
Route::delete('/posts/delete/{id}', [PostController::class, 'destroy']);
