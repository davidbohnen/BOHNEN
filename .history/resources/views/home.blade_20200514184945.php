@extends('layouts.app')
@section('jumbotext', ' Welcome Home')
@section('content')
<body style="background-color: gainsboro"> 



<!-- {{ Auth::user()->name }} -->

 
<div class="container">
    <div class="row ">
    <div class="row justify-content-center my-auto">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align: center"><h3> Post Something New</h3>
                <hr>

                    <div class="card-body" >
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                    <a href="/post/create" class="btn btn-outline-primary my-2 my-sm-0" style=" width:50%; margin-bottom: 10px;" >Post</a>
                    <a href="/post/create" class="btn btn-outline-success my-2 my-sm-0" style=" width:50%; margin-bottom: 10px;" >Edit</a>
                    <a href="/post/create" class="btn btn-outline-danger my-2 my-sm-0" style=" width:50%; margin-bottom: 10px;" >Delete</a>
                    </div>
                 </div>
            </div>

        
        </div>


                    <div class="col-5" style="margin-top: 20px">
                            <h4>Posts</h4>
                            <hr>
                    @if(count($post) > 1)
                            @foreach($post as $post)
                                <div class="card mb-3" style = "margin-top:10px; margin-bottom:10px;">
                                        <img class="card-img-top" src="/images/cristianoVVD.jpg" alt="no image">
                                        
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
<!--  
    <div class="container"  class="row justify-content-center" >
    <div style="text-align:center;padding:10px" >
        <h2>Posts You've Interacted With:</h2>
            <hr>


        </div>
    </div> -->

    </div>
</div>

</body>
@endsection
