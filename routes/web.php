<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('posts.index');
});

Route::get('/post/{post}', function ($post) {
    return view('posts.show', [
        'post' => $post
    ]);
});