<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $gaurded = ['title','text'];
    protected $fillable = ['title','text'];  //<---- Add this line



    public function user(){
        
        return $this->belongsTo(User::class);
    }
}

