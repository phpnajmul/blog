<?php
use Illuminate\Support\Facades\Route;



Route::get('/api/posts', function () {
    return response()->json([
        'name' => 'posts',
    ]);
});
