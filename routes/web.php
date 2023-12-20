<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('blog', function () {
    // Consulta a la base de datos
    $posts = [
        [
            'id' => 1,
            'title' => 'Primer post',
            'slug' => 'primer-post'
        ],
        [
            'id' => 2,
            'title' => 'Segundo post',
            'slug' => 'segundo-post'
        ],
    ];
    return view('blog', compact('posts'));
})->name('blog');

Route::get('blog/{slug}', function ($slug) {
    // Consulta a la base de datos
    $post = $slug;
    return view('post', ['post' => $post]);
})->name('blog-post');
