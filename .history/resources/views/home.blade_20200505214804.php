@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome {{ Auth::user()->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <a href="/post/create" class="btn btn-outline-primary my-2 my-sm-0">Post</a>

                </div>
            </div>
        </div>

        
    </div>
    <br>
 
    <div class="container"  class="row justify-content-center" style = "background-color:lightblue">
    <div style="text-align:center;padding:10px" >
        <h2>Posts You've Interacted With:</h2>
            <hr>
        </div>
    </div>
    </div>

   
@endsection
