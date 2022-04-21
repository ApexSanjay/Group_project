@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
  <!-- Bootstrap LINKS -->
  <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
      integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
      crossorigin="anonymous"
    ></script>
    <!--angular js-->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <!-- Font Awesome -->
    <script
      src="https://kit.fontawesome.com/2ddbad06a5.js"
      crossorigin="anonymous"
    ></script>

<style>
h1{
  text-align:center;
  background: #999999;

}

h4{
  font-family:verdana;
}

a{
  color:black;
}

p{
    font-family: georgia;
}

img {
  display: grid;
  grid-template-columns: min-content 1fr;
}

.title-col {
  font-family:verdana;
  font-size:30px;

}
.carousel {
width:auto;
height:90%;
object-fit: contain;
}

.page-footer{
  width:100%;
  height: auto;
  overflow: hidden;
  position: relative;
  z-index: 0;
  background-color: lightgray;
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-size: 50% 50%;
 /* background-blend-mode: overlay;*/
}
</style>
</head>
<h1>Youth Service</h1>
<img src={{ asset("img/youth-banner.jpg") }} alt="Youth Service" style="width:100%; height:500px;">
<br/>
<br/>
<div class="row">
    <div class="col">

<h4 style="padding-left:30%"><b>Our latest event</b></h4>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 h-100" src= {{ asset("img/foodworks.png") }}>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src= {{ asset("img/ManyBread.jpg") }}>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src= {{ asset("img/teens_with_bread.jpg") }}>
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
<div class="col">
<div class="title-col p-5">Sharing Bread</div>
<p>Every day, 3,600 tonnes of food waste are sent to landfills in Hong Kong,
    while one in five people live in poverty and struggle to afford nutritious meals.
    Frontline charities are seeing a significant increase in the number of people turning to NGOs for food assistance due to the COVID-crisis.<br><br>

    The Bread Donation Programme mobilizes volunteers to rescue surplus bread from bakeries around Hong Kong.
    Volunteers collect near closing and bring the donations to designated collection points every Friday.<br><br>

    These bread donations are redistributed the same night to ImpactHk, the shelter for the homeless. <br><br>

    We cooperate with HKFoodWork and ImpactHK to reward teens for helping collecting bread in daytime or help sharing it in night time.
    We are Glad that teens are having fun when the event ongoing, and decided to continue helping after the event end!<br><br>
    <a href="Gallery.blade.php">view in gallery-></a>
    </p></p>
    </div>
    </div>
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
      </div>
    </footer>
@endsection
