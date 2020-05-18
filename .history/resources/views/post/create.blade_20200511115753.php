@extends('layouts.app')

@section('content')
<body style="background-color: gainsboro"> 
<div class="jumbotron jumbotron-fluid" style= " background-image: url( ./images/galaback.png ) ; background-size: 1000px;">
      <div class="container" style= "text-align: center; color: white;">
        <h2> Create  {{ Auth::user()->name }}  </h2>
  
      </div>
    </div>

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
                        <input name = "title" type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Enter Title">
                        <small id="titleHelp" class="form-text text-muted">Give your post a Title!</small>
                            
                            @error('title')
                                <small class = "text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                        <label for="text">Text</label>
                        <input name = "text" type="text" class="form-control" id="text" aria-describedby="textHelp" placeholder="Enter text">
                        <small id="textHelp" class="form-text text-muted">Caption your Post!</small>
                        
                        @error('text')
                                <small class = "text-danger">{{$message}}</small>
                            @enderror

                        </div>

                        <form class="md-form" action="#">
                        <div class="file-field medium">
                          <div class="btn btn-outline-primary waves-effect float-left">
                            <span>Choose files<i class="fas fa-cloud-upload-alt ml-3" aria-hidden="true"></i></span>
                            <input type="file" multiple>
                          </div>
                          <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Upload one or more files">
                          </div>
                        </div>
                      </form>                        

                       





                        <br>
                        <button type="submit" class="btn btn-outline-primary my-2 my-sm-0">Post</button>
                    </form>
                
                </div>

            </div>
        </div>
    </div>
</div>
<body>
@endsection

<!-- <div class="card mb-3" style = "margin-top:10px; margin-bottom:10px;">
              <img class="card-img-top" src="images/liver.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">LIVERPOOL OUT!</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">3 mins ago</small></p>
                <a href="#" class="btn btn-link" style="text-decoration: none;">Read</a>
              </div>
            </div>

            <div class="card mb-3" style = "margin-top:10px; margin-bottom:10px;">
              
              <div class="embed-responsive embed-responsive-16by9">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/oqiKmC0qhZw?start=14" frameborder="0" 
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              
                <div class="card-body">
                  <h5 class="card-title">GOAL!</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">3 mins ago</small></p>
                  <a href="#" class="btn btn-link" style="text-decoration: none;">Watch</a>
                </div>
              </div> -->