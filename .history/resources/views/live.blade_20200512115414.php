@extends('layouts.app')
@section('title', 'BOHNEN Live')
@section('jumbotext', 'Live')

@section('content')

<div class="container" style="padding:5px; margin:auto; margin-bottom:100px">

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

                    
          <div class="form-group" style="margin-top: 10px; width:200px" >
            <label for="notes">Notes:</label>
            <textarea class="form-control" rows="9" id="notes" placeholder="Type your notes here!">
            

            </textarea>
          </div>
            </div>
            
            <div class="col-8" style="margin-top: 20px;margin-right: 20px;">
            <div>
            <!-- 16:9 aspect ratio -->
            <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/BHZQIYp_z30?autoplay=1"
               frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            </div>
          </div>
        
  
  
    </div>
  

</div>
@endsection