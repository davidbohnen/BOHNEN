
@extends('layouts.app')
@section('images')
@section('title', 'BOHNEN')
@section('jumbotext', 'The Best Leagues. The Best Players. The Best Goals.')

@section('content')

<style>
@media screen and (max-width:959px) {

  #middle-col{
    width:70%;
    background-color: red;
  }


  #left-col{
  width: 100% ;
  overflow: hidden;
}

#right-col{
  width: 100% ;
  overflow: hidden;
}

}

@media screen and (max-width:640px) {

#middle-col{
  width:70%;
  background-color: blue;
  
}


#left-col{
width: 100% ;
overflow: hidden;

}

#right-col{
width: 100% ;
overflow: hidden;

}

}





</style>


<div class="container" style = "padding:5px;" >

      <div class="row" >

          <div id="left-col" class="col-3" style="margin-left: 50px;">
            
            <h4>Leagues</h4>
            <hr>
                <div class="card" style="width: 240px; margin-top:10px; margin-bottom:10px;">
              
                  <ul class="list-group list-group-flush ">
                    <li class="list-group-item list-group-item-action"> <a href = "https://www.laliga.com/en-GB"  target="_blank" style="text-decoration: none;"><img src ="images/laliga.png " style = "width:10% ; height: 10%;"> La Liga </a></li>
                    <li class="list-group-item list-group-item-action"> <a href = "http://www.legaseriea.it/en"  target="_blank" style="text-decoration: none" ><img src ="images/seriea.png " style = "width:10% ; height: 10%;"> Serie A </a></li>
                    <li class="list-group-item list-group-item-action"> <a href = "https://www.bundesliga.com/en/bundesliga"  target="_blank" style="text-decoration: none;"><img src ="images/buns.png " style = "width:10% ; height: 10%;"> Bundesliga </a></li>
                    <li class="list-group-item list-group-item-action"> <a href = "https://www.premierleague.com/"  target="_blank" style="text-decoration: none;"><img src ="images/premier.png " style = "width:10% ; height: 10%;"> Primier League </a></li>
                    <li class="list-group-item list-group-item-action"> <a href = "https://www.ligue1.com/en"  target="_blank" style="text-decoration: none;"><img src ="images/liga1.png " style = "width:10% ; height: 10%;"> League 1 </a></li>
                    <li class="list-group-item list-group-item-action"> <a href = "https://www.mlssoccer.com/"  target="_blank" style="text-decoration: none;"><img src ="images/mls.png " style = "width:10% ; height: 10%;"> MLS </a></li>
                  </ul>
                </div> 
                <h4>Tournaments</h4>
                <hr>
                <div class="card" style="width: 240px; margin-top:10px; margin-bottom:10px;">

                  
                  <ul class="list-group list-group-flush ">
                    <li class="list-group-item list-group-item-action">  <a href = "https://www.uefa.com/uefachampionsleague/"  target="_blank" style="text-decoration: none;"><img src ="images/ucl.png " style = "width:10% ; height: 10%;"> UCL </a></li>
                    <li class="list-group-item list-group-item-action">  <a href = "https://www.uefa.com/uefaeuropaleague/"  target="_blank" style="text-decoration: none;"><img src ="images/europa.png " style = "width:10% ; height: 10%;"> Europa League </a></li>
                    <li class="list-group-item list-group-item-action">  <a href = "https://www.fifa.com/clubworldcup/"  target="_blank" style="text-decoration: none;"><img src ="images/fifacwc.png " style = "width:10% ; height: 10%;"> FIFA CWC </a></li>
                    <li class="list-group-item list-group-item-action">  <a href = "https://www.fifa.com/worldcup/"  target="_blank" style="text-decoration: none;"><img src ="images/fifawc.png " style = "width:10% ; height: 10%;"> FIFA WC </a></li>
                    <li class="list-group-item list-group-item-action">  <a href = "https://www.internationalchampionscup.com/"  target="_blank"style="text-decoration: none;"><img src ="images/icc.png " style = "width:10% ; height: 10%;"> ICC </a></li>
                    <li class="list-group-item list-group-item-action">  <a href = "https://copaamerica.com/"  target="_blank"style="text-decoration: none;"><img src ="images/copa.png " style = "width:10% ; height: 10%;"> COPA America </a></li>
                    <li class="list-group-item list-group-item-action">  <a href = "https://www.uefa.com/uefaeuro-2020/"  target="_blank" style="text-decoration: none;"><img src ="images/euro.png " style = "width:10% ; height: 10%;"> EURO Copa </a></li>

                  </ul>
                </div> 
                <h4>Follow BOHNEN</h4>
                <hr>
                <div class="card" style="width: 240px; margin-top:10px; margin-bottom:10px;">

             
                  <ul class="list-group list-group-flush ">
                    <li class="list-group-item list-group-item-action"><a href = "https://www.instagram.com/davidbohnen/"  target="_blank" style="text-decoration: none;"><img src="images/insta.png" style = "width: 20 px ; height: 20px;"> Instagram </a></li>
                    <li class="list-group-item list-group-item-action"><a href = "/nope"  target="_blank" style="text-decoration: none;" ><img src="images/facebook.png" style = "width: 20 px ; height: 20px;"> Facebook </a></li>
                    <li class="list-group-item list-group-item-action"><a href = "/nope"  target="_blank" style="text-decoration: none;"><img src="images/twitter.png" style = "width: 20 px ; height: 20px;"> Twitter </a></li>
                    <li class="list-group-item list-group-item-action"><a href = "/nope"  target="_blank" style="text-decoration: none;"><img src="images/youtube.png" style = "width: 20 px ; height: 20px;"> Youtube </a></li>
                    <li class="list-group-item list-group-item-action"><a href = "/nope"  target="_blank" style="text-decoration: none;"><img src="images/snap.png" style = "width: 20 px ; height: 20px;"> Snapchat </a></li>
                  
                   
      
                  </ul>
                </div> 
          </div>
  

          <div id = "middle-col" class="col-5">
            <h4>Posts</h4>
            <hr>
            @if(count($post) > 1)
              @foreach($post as $post)
                   <div class="card mb-3" style = "margin-top:10px; margin-bottom:10px;">
                          <img class="card-img-top" src="/images/real1957.jpg" alt="no image">
                          
                          <div class="card-body">
                            <h5 class="card-title">{{$post->title}}</h5>
                            <p class="card-text"> {{$post->text}}</p>
                            <p class="card-text"><small class="text-muted">{{$post->created_at}}</small></p>
                            <a href="#" class="btn btn-link" style="text-decoration: none;">Like</a>
                          </div>
                         
                        </div>
              @endforeach
            @else
              <p>No posts yet, sorry!</p>
            @endif
 

          </div>


          <div id = "right-col" class="col-3" >
            <h4>Latest News</h4>
            <hr>
                <div class="card" style="width: 288px; margin-top:10px; margin-bottom:10px; " >
              
                  <ul class="list-group list-group-flush ">
                    <li class="list-group-item list-group-item-action">Two more Europa League matches have been   <a href="/news"  style="text-decoration: none;">More</a> </li>
                    <li class="list-group-item list-group-item-action">Italian Prime Minister Guiseppe Conte announced   <a href="/news" style="text-decoration: none;" >More</a> </li>
                    <li class="list-group-item list-group-item-action">Mbappé Included in Squad to Face Dortmund   <a href="/news" style="text-decoration: none;">More</a> </li>
                    <li class="list-group-item list-group-item-action">Inter’s Alexis Sanchez To Be Quarantined   <a href="/news" style="text-decoration: none;">More</a> </li>
                    <li class="list-group-item list-group-item-action"> Kingsley Coman: “PSG will qualify tonight vs Dortmund.”   <a href="#" style="text-decoration: none;">More</a> </li>
                  </ul>

                </div> 

               
               
                
          </div>
          
      </div>

      <div class="card text-center" style="margin-top: 500px ;">
        <div class="card-header">
          THIS IS JUST THE BETA
        </div>
        <div class="card-body">
          <h5 class="card-title">More to come soon</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-link" style="text-decoration: none;">Back to top</a>
        </div>
        <div class="card-footer text-muted">
          05.05.20.
        </div>
      </div>

  </div>

  

  
 
      
    </div>
    

@endsection

