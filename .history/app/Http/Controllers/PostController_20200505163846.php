<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('post.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required',
            'text' => 'required',
        ]);


        $post = \App\Post::create([


        ]);


        return redirect('/post/'.$post->id);
    }

    public function show(\App\Post $post){
        return view('post.create');
    }
}
