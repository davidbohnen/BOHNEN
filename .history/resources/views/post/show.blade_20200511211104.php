@extends('layouts.app')
@extends('sidebars')
@section('content')

<body style="background-color: gainsboro"> 
<div class="jumbotron jumbotron-fluid" style= " background-image: url( ./public/images/galaback.png ) ; background-size: 1000px;">
      <div class="container" style= "text-align: center; color: white;">
        <h2> Create  {{ Auth::user()->name }}  </h2>
  
      </div>
    </div>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$post->title}} </div>

                    <div class = "card-body">
                     {{$post->text}}
                    </div>

                    <div class = "card-body">
                     {{$post->upload}}
                    </div>

                

            </div>

            <a href="/home" class="btn btn-dark" style="width:100%; margin-top:10px"> Home</a>
        </div>
    </div>
</div>
@endsection
