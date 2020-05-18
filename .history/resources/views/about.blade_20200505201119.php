@extends('topbar')

@section('title', 'About BOHNEN')
@section('jumbotext', 'About Us')

@section('content')

<div class="container" style="padding:5px;">

<div class="col-8" style="margin: auto;">

<div class="card" style="margin: 10px;">
  <h5 class="card-header">Featured</h5>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.
        With supporting text below as a natural lead-in to additional content.
        With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<div class="card" style="margin: 10px;">
  <div class="card-header">
    Quote
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
    </blockquote>
  </div>
</div>
</div>
</div>

@endsection
