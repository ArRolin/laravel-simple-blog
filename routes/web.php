<?php

use Illuminate\Support\Facades\Route;
use Spatie\Sheets\Facades\Sheets;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function() {
    $posts = Sheets::collection('posts')->all();

    // dd($posts);

    return view('posts.index', [
        'posts' => $posts
    ]);
});

Route::get('/post/{slug}', function($slug) {
    $post = Sheets::collection('posts')->all()->where('slug', $slug)->first();
    // dd($post);

    // abord_if(is_null($post), 404);
    return view('posts.show', ['post' => $post]);
});