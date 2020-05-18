@extends('topbar')

@section('title', 'About BOHNEN')
@section('jumbotext', 'About Us')

@section('content')

<div class="container" style="padding:5px;">

<div class="col-8" style="margin: auto;">

<div class="card" style="margin: 10px;">
  <h5 class="card-header">Frequently asked questions:</h5>
  <div class="card-body">
    <h5 class="card-title"> Who made B O H N E N?</h5>
    <p class="card-text"> B O H N E N was made by a young 18 year old boy named _______. It's purpose is to share the love of football/soccer with the world.
      And hopefully get a 10. </p>
    <a href="https://www.instagram.com/davidbohnen/" target="_blank" class="btn btn-primary">Follow The Creator</a>
  </div>
</div>
<div class="card" style="margin: 10px;">
  <div class="card-header">
    Quote
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>It's cool. </p>
      <footer class="blockquote-footer">Ilze Volunte<cite title="Source Title"> Latvija.lv</cite></footer>
    </blockquote>
  </div>
</div>
</div>
</div>

@endsection
