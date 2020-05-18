@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$post->title}} </div>

                    <div class = "card-body">
                     {{$post->text}}
                    </div>

                

            </div>

            <a href="/home" class="btn btn-dark" style="width:100%; margin-top:10px"> Home</a>
        </div>
    </div>
</div>
@endsection
