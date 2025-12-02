<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});
Route::get('/about', function () {
    return view('about', ['title' => 'About Us', 'nama' => 'Aileen']);
});
Route::get('/posts', function () {
    return view('posts', ['title' => 'Our Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'Judul-artikel-1',
            'title' => 'Judul',
            'author' => 'Aileen',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat porro officiis ea eos quibusdam ab
                laborum fuga repellendus maiores nemo tenetur, provident vitae minus ad? Beatae vitae reprehenderit
                doloremque aut!'
        ],
        [
            'id' => 2,
            'slug' => 'Judul-artikel-2',
            'title' => 'Judul',
            'author' => 'Aileen',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat porro officiis ea eos quibusdam ab
                laborum fuga repellendus maiores nemo tenetur, provident vitae minus ad? Beatae vitae reprehenderit
                doloremque aut!'
        ]
    ]]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Us']);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'Judul-artikel-1',
            'title' => 'Judul',
            'author' => 'Aileen',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat porro officiis ea eos quibusdam ab
                laborum fuga repellendus maiores nemo tenetur, provident vitae minus ad? Beatae vitae reprehenderit
                doloremque aut!'
        ],
        [
            'id' => 2,
            'slug' => 'Judul-artikel-2',
            'title' => 'Judul',
            'author' => 'Aileen',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat porro officiis ea eos quibusdam ab
                laborum fuga repellendus maiores nemo tenetur, provident vitae minus ad? Beatae vitae reprehenderit
                doloremque aut!'
        ]
    ];

    $post = Arr::first($posts, function($post) use ($slug){
        return $post['slug'] == $slug;
    }); //akan nyari array yg pertama kali ketemu berdasarkan kriteria tertentu

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});
