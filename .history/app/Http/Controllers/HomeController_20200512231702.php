<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post as Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $post = Post::orderby('id','desc')->first();
        return view('home')->with('post',$post);
       // return view('post.show')->with('post',$post);

    }
}
