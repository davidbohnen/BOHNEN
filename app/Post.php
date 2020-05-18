<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $gaurded = ['title','text','file'];
    protected $fillable = ['title','text','file'];  //<---- Add this line



    public function user(){
        
        return $this->belongsTo(User::class);
    }
}

