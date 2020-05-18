<?php

namespace App\Http\Controllers;

use App\Post as Post;
use \Input as Input;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;




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

    public function store(Request $request)
    {
        
        $data = request()->validate([
            'title' => 'required',
            'text' => 'required',
            //  'file' => 'required',
            
           

        ]);

        //$data['user_id']= auth()->user()->id;

        //$post = \App\Post::create($data);
        $post = auth()->user()-> post() ->create($request->all());

        if ($request->hasFile('file')){

            $post->update(['file' => $request->file('file')->store('files', 'public')]);
            return Storage::putFile('public',$request->file('file'));
        }else{
            echo 'no file';
        }
        

        
        
        return redirect('/post/'.$post->id)->with('file');
    
    }

    public function show(\App\Post $post)
    {   
        
        $post = Post::orderBy('id','desc')->get();
        return view('post.show')->with('post',$post);
    }

    
    




}
