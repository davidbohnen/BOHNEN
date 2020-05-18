@extends('layouts.app')
@section('title', 'BOHNEN Live')
@section('jumbotext', 'Live')

@section('content')

<div class="container" style="padding:5px; margin:auto">

        <div class="row" >
  
            <div class="col-3" style="margin-top: 20px">
                <div class="card" style="width: 12rem;">
                    <div class="card-header">
                      Scores 
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item"> RMA 2 - 0 BAR <span class="badge badge-pill badge-warning">Live</span></li> 
                      <li class="list-group-item"> LIV 2 - 3 ATM <span class="badge badge-pill badge-warning">Live</span></li>
                      <li class="list-group-item"> BAY 1 - 2 DOR<span class="badge badge-pill badge-warning">Live</span></li>
                    </ul>
                  </div>
            </div>
            
            <div class="col-5" style="margin-top: 20px;margin-right: 80px;">
            <div>
            <!-- 16:9 aspect ratio -->
            <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/bxL89LNPmJM" frameborder="0" 
              allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            </div>
          </div>


       
          <div class="form-group">
            <label for="comment">Notes:</label>
            <textarea class="form-control" rows="10" id="comment"></textarea>
          </div>
        
  
  
    </div>
  

</div>
@endsection