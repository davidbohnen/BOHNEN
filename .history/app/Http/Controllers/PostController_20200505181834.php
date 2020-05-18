<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }

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

        $post = auth()->user()-> posts() ->create($data);

        return redirect('/post'.$post->id);
    }

    public function show(\App\Post $post){
        return view('post.show',compact('post'));
    }
}
