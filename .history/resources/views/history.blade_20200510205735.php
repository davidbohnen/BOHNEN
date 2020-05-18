@extends('topbar')
@section('title', 'History')
@section('jumbotext', 'History')

@section('content')


<div class="container" style="margin-bottom: 100px">

    <h2>Real Madrid 1957</h2>
    <div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/images/madrid1957.jpg" alt="First slide">
      <!-- <div class="carousel-caption d-none d-md-block">
      <h5>Real Madrid wins their 2nd UCL title</h5>
      <p>It was a very happy day in madrid when...</p>
  </div> -->
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/images/real1957.jpg" alt="Second slide">
      <!-- <div class="carousel-caption d-none d-md-block">
      <h5>Legendary Alfredo Di Stefano with Real Madrid's 1957 team</h5>
      <p>A legendary player and a legendary team was the start</p>
  </div> -->
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/images/mad1957.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>
</div>


@endsection