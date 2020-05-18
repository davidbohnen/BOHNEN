<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{

    
    public function index(){

        return view('index');
    }

    public function about(){

        return view('about');
    }

    public function more(){

        return view('more');
    }

    public function history(){

        return view('history');
    }

    public function record(){

        return view('record');
    }

    public function contact(){

        return view('contact');
    }

    public function live(){

        return view('live');
    }

    public function public(){

        return view('/post/public');
    }

    
    public function sidebars(){

        return view('/post/sidebars');
    }

    public function warn(){

        return view('warn');
    }

    public function news(){

        return view('news');
    }

    public function nope(){

        return view('nope');
    }
}
