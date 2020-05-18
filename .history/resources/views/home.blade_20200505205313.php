@extends('layouts.app')
@extends('sidebars')
@extends('topbar')
@section('images')
@section('title', 'BOHNEN')
@section('jumbotext', 'Welcome')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <a href="/post/create" class="btn btn-dark">Post</a>

                </div>
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

                    

                </div>
            </div>
        </div>
    </div>

    </div>
</div>
@endsection
