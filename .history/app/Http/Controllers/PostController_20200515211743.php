<?php

namespace App\Http\Controllers;

use App\Post as Post;
use \Input as Input;

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
            'file' => 'required',
            
           

        ]);

        //$data['user_id']= auth()->user()->id;

        //$post = \App\Post::create($data);
        
      
        $post = auth()->user()-> post() ->create($data);
        
        return redirect('/post/'.$post->id);
    
    }

    public function show(\App\Post $post)
    {   
        $post = Post::orderBy('id','desc')->get();
        return view('post.show')->with('post',$post);
    }

    public function upload(Request $request)
    {   

        // $request->file->store('/public/images');


        // if(Input::hasFile('file')){

        //     $file = Input::file('file');
        //     $file->move('uploads', $file->getClientOriginalName());
        //     echo'<img src="uploads/' . $file->getClientOriginalName();
        // }
        // $post = Post::orderBy('id','desc')->get();
        // return view('post.show')->with('post',$post);
    }
    




}
