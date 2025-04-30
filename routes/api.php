<?php

use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\TaskManagementController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
Route::get('/posts/show/{id}',[PostController::class,'show']);
Route::patch('/posts/update/{id}', [PostController::class, 'update']);
Route::delete('/posts/delete/{id}', [PostController::class, 'destroy']);
//Post all routes end


//Task management all routes start
Route::get('/tasks',[TaskManagementController::class,'index']);
Route::post('/tasks/store',[TaskManagementController::class,'store']);
Route::get('/tasks/show/{id}',[TaskManagementController::class,'show']);
Route::patch('/tasks/update/{id}', [TaskManagementController::class, 'update']);
Route::delete('/tasks/delete/{id}', [TaskManagementController::class, 'destroy']);
//Task management all routes end





