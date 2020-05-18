@extends('layouts.app')

@section('content')
<body style="background-color: gainsboro"> 
<div class="jumbotron jumbotron-fluid" style= " background-image: url( images/galaback.png ) ; background-size: 1000px;">
      <div class="container" style= "text-align: center; color: white;">
        <h2> Welcome  {{ Auth::user()->name }}  </h2>
  
      </div>
    </div>



    if()
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
