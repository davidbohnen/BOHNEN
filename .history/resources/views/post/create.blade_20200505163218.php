@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create a Post</div>

                <div class="card-body">
                    <form action = "/post" method="post">
                        @csrf 
                        <div class="form-group">
                        <label for="title">Title</label>
                        <input name = "title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
                        <small id="titleHelp" class="form-text text-muted">Give your post a Title!</small>
                            
                            @error('title')
                                <small class = "text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                        <label for="text">Text</label>
                        <input name = "text" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter text">
                        <small id="textHelp" class="form-text text-muted">Caption your Post!</small>
                        
                        @error('text')
                                <small class = "text-danger">{{$message}}</small>
                            @enderror

                        </div>

                        <button type="submit" class="btn btn-primary">Post</button>
                    </form>
                
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
