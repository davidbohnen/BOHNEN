<?php

namespace App\Http\Controllers;

use App\Post as Post;
use Illuminate\Http\Request;



class PostController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        //
    }

    public function create()
    {
        if(auth()->user()->id == 1){
        return view('post.create');
        }else{
            return redirect('/warn');
        }
    }

    public function store()
    {
        
        $data = request()->validate([
            'title' => 'required',
            'text' => 'required',
            // 'file' => '',

        ]);

        //$data['user_id']= auth()->user()->id;

        //$post = \App\Post::create($data);
        
      
        $post = auth()->user()-> post() ->create($data);
        
        return redirect('/post/'.$post->id);
    
    }

    public function show(\App\Post $post)
    {   
        //$post = Post::orderby('id','desc')->first();
        $id = auth()->user()->id;
        $post = Post::all($post);
        return view('post.show')->with('post',$post);
    }




}
