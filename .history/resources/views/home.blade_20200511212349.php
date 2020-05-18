@extends('layouts.app')
<!-- @section('jumbotext', ' Welcome  {{ Auth::user()->name }}.') -->
@section('content')
<body style="background-color: gainsboro"> 


@section('jumbotext', ' Welcome  {{ Auth::user()->name }}.')


 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align: center"><h3> Post Something New</h3></div>

                <div class="card-body" style="padding:5px">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <a href="/post/create" class="btn btn-outline-primary my-2 my-sm-0" style=" width:100%" >Post</a>

                </div>
            </div>
        </div>

        
    </div>
    <br>
 
    <div class="container"  class="row justify-content-center" >
    <div style="text-align:center;padding:10px" >
        <h2>Posts You've Interacted With:</h2>
            <hr>


        </div>
    </div>
    </div>

</body>
@endsection
