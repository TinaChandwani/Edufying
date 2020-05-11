@extends('layout') 
@section('content') {{-- navbar --}}
<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
  <a class="navbar-brand" href="#">EDUFYING</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"
    aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/front">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/about">About</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/register">Register</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Solutions</a>
        <li class="nav-item active">
          <a class="nav-link" href="/sign_in">Sign in</a>
        </li>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline mt-2 mt-md-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
{{-- image carosel --}}
<style>
  /* Make the image fully responsive */

  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
</style>

{{--
<link rel="stylesheet" href="/pages"> --}}
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/images/mala.png" alt="Malala Yousaf" width="80%" height="500">
    </div>
    <div class="carousel-item">
      <img src="/images/banner1.jpg" alt="Right To Education" width="80%" height="500">
    </div>
    <div class="carousel-item">
      <img src="/images/rte.jpg" alt="Right To Education" width="80%" height="500">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
</div>
@endsection