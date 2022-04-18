@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src={{ asset('img/adviceyouth.jpg') }} alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src= {{ asset("img/volunteer.jpg") }} alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src= {{ asset("img/hereforyou.jpg") }}  alt="Third slide">
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


<div class="hero-image">
  <div class="hero-text">
  <h1>Our Services</h1>
    
  </div>
</div>

<div class="row">
  <div class="column">
    <img src= {{ asset("img/hkyg.jpg") }} alt="Courses" style="width:100%">
    <h3>
      <a href="courses">Courses</a></h3>
  </div>
  <div class="column">
    <img src= {{ asset("img/hkyouth.jpg") }} alt="Youth" style="width:100%">
    <h3>
      <a href="youth">Youth</a></h3>
  </div>
  <div class="column">
    <img src= {{ asset("img/hkyg1.jpg") }} alt="Services" style="width:100%">
    <h3>
      <a href="services">Services</a></h3>
  </div>
</div>


<div class="row">
  <div class="column">
    <img src= {{ asset("img/elder.jpg") }} alt="Courses" style="width:100%">
    <h3>
      <a href="elder">Elder</a></h3>
  </div>
  <div class="column">
    <img src= {{ asset("img/youthser.jpg") }} alt="Youth" style="width:100%">
    <h3>
      <a href="youths">Youth Services</a></h3>
  </div>
  <div class="column">
    <img src= {{ asset("img/youtheld.jfif") }} alt="Services" style="width:100%">
    <h3>
      <a href="activities">Activities</a></h3>
  </div>

  </div>
</div>

</div>
<body>

<footer>
<div class="page-footer col-sm-12 font-small indigo">
        <div class="container">
          <div class="row text-center d-flex justify-content-center pt-5 mb-3">
            <div class="col-md-2 mb-3">
              <h6 class="text-uppercase font-weight-bold">
                <a href="home">Home</a>
              </h6>
            </div>
            <div class="col-md-2 mb-3">
              <h6 class="text-uppercase font-weight-bold">
                <a href="about">About</a>
              </h6>
            </div>
            <div class="col-md-2 mb-3">
              <h6 class="text-uppercase font-weight-bold">
                <a href="#">Courses</a>
              </h6>
            </div>
            <div class="col-md-2 mb-3">
              <h6 class="text-uppercase font-weight-bold">
                <a href="contact">Contact Us</a>
              </h6>
            </div>
          </div>
         
          <div
            class="row d-flex text-center justify-content-center mb-md-0 mb-4"
          >
            <br />
            <br />
          </div>
          <div class="row mx-auto">
            <div class="btn-group-horizontal mx-auto">
              <div class="mx-5 flex-center">
                
      <!-- Copyright -->
          <div class="footer-copyright text-center py-3">
            © 2021 HKFYG Developed by San Serino. All Rights Reserved.
          </div>
          <!-- Copyright -->
        </div>
</footer>

</head>
</body>
</html>
@endsection


