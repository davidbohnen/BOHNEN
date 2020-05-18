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

            <a href="/public" class="btn btn-blue" style="width:100%; margin:10px"> Home</a>
        </div>
    </div>
</div>
@endsection
