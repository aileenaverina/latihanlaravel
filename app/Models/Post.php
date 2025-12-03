<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //kalau di luar kelas post::all(), dikls yg sama (static) static::all()
    //protected $table = 'blog_post'; ini kalau nama tablenya bukan bentuk jamak
    //protected $primaryKey = 'post_id'; ini klo primarynya bukan id
    protected $fillable = ['title', 'author', 'slug', 'body'];
}

