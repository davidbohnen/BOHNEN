@extends('layouts.app')
@section('jumbotext', ' New post')
@section('content')

<div class="container">
<div class="col-5 my-auto">
@if(count($post) > 1)
              @foreach($post as $post)
                   <div class="card mb-3" style = "margin-top:10px; margin-bottom:10px;">
                          <img class="card-img-top" src="/images/real1957.jpg" alt="no image">
                          
                          <div class="card-body">
                            <h5 class="card-title">{{$post->title}}</h5>
                            <p class="card-text"> {{$post->text}}</p>
                            <p class="card-text"><small class="text-muted">{{$post->created_at}}</small></p>
                            <a href="#" class="btn btn-link" style="text-decoration: none;">Like</a>
                          </div>
                         
                        </div>
              @endforeach
            @else
              <p>No posts yet, sorry!</p>
            @endif

</div>
</div>
 
@endsection

