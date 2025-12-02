<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});
Route::get('/about', function () {
    return view('about', ['title' => 'About Us', 'nama' => 'Aileen']);
});
Route::get('/posts', function () {
    return view('posts', ['title' => 'Our Blog', 'posts' => Post::all()]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Us']);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = Post::all();

    $post = Post::find($slug);

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});
