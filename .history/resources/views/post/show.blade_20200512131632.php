@extends('layouts.app')

@section('content')

<!-- <body style="background-color: gainsboro"> 
<div class="jumbotron jumbotron-fluid" style= " background-image: url( ./public/images/galaback.png ) ; background-size: 1000px;">
      <div class="container" style= "text-align: center; color: white;">
        <h2> Create  {{ Auth::user()->name }}  </h2>
  
      </div>
    </div> -->

<!-- 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$post->title}}</div>
                    <div class = "card-body">
                     {{$post->text}}
                    </div>

                    <div class = "card-body">
                     {{$post->file}}
                     <small class="form-text text-muted">{{$post->created_at}} </small>
                    </div>

                
                   
            </div>

            <a href="/home" class="btn btn-dark" style="width:100%; margin-top:10px"> Home</a>
        </div>
    </div> -->
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
<div class="card mb-3" style = "margin-top:10px; margin-bottom:10px;">
               <img class="card-img-top" src="/images/real1957.jpg" alt="no image">
               
               <div class="card-body">
                 <h5 class="card-title">{{$post->title}}</h5>
                 <p class="card-text"> {{$post->text}}</p>
                 <p class="card-text"><small class="text-muted">{{$post->created_at}}</small></p>
                 <a href="#" class="btn btn-link" style="text-decoration: none;">Like</a>
               </div>
               <a href="/home" class="btn btn-dark" style="width:100%; margin-top:10px"> Home</a>
             </div>
        </div>
    </div>
 </div>
@endsection
