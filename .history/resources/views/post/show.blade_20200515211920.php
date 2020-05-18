@extends('layouts.app')
@section('jumbotext', ' New post')
@section('content')

<div class="container">
<div class="row justify-content-center my-auto">
<div class="col-5">
@if(count($post) > 1)
              @foreach($post as $post)
                   <div class="card mb-3" style = "margin-top:10px; margin-bottom:10px;">
                          <img class="card-img-top" src="{{route('file'}}" alt="no image">
                          
                          <div class="card-body">
                            <h5 class="card-title">{{$post->title}}</h5>
                            <p class="card-text"> {{$post->text}}</p>
                            <p class="card-text"><small class="text-muted">Posted By: {{$post->user->name}} //</small>
                            <small class="text-muted"> Posted At: {{$post->created_at}}</small></p>
                            <a href="#" class="btn btn-link" style="text-decoration: none;">Like</a>
                          </div>
                         
                        </div>
              @endforeach
            @else
              <p>No posts yet, sorry!</p>
            @endif

</div>
</div>
</div>
 
@endsection

