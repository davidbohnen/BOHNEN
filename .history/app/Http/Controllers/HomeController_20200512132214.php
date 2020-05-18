<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Post;

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
        return view('home');
        $post = AppPost::orderby('id','desc')->first();
        return view('post.show')->with('post',$post);

    }
}
