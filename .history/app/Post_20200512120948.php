<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $gaurded = [];
    protected $fillable = ['title','text','file']; //<---- Add this line



    public function user(){
        $post = Post::orderby('time','desc')->get();
        return $this->belongsTo(User::class);
    }
}

