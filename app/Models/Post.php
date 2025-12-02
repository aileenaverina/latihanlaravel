<?php

namespace App\Models;
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
}

?>
