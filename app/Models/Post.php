<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post {
    public static function all() {
        return [
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
    }
    //kalau di luar kelas post::all(), dikls yg sama (static) static::all()
    public static function find($slug): array 
    {
        $post = Arr::first(static::all(),fn($post) => $post['slug'] == $slug);
        if (! $post){
            abort(404);
        } else {
            return $post;
        }
    } 
}

    // public static function find($slug){
    //     return Arr::first(static::all(), function($post) use ($slug){
    //     return $post['slug'] == $slug;
    // }); //akan nyari array yg pertama kali ketemu berdasarkan kriteria tertentu
    // }


?>
