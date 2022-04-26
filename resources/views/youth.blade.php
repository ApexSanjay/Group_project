

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href={{ asset('css/well_youth.css') }}>
<link rel="stylesheet" href= {{ asset('css/course.css') }}>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<!-- Navbar Header-->
<header class="header">
  @extends('layouts.app')
  @section('content')
</header>

<style>
/*Title*/
h1{
  text-align:center;
}

/*subtitle*/
h4{
  font-family:verdana;
}

/*paragraph*/
p{
    font-family: georgia;
}

/*image modify*/
img {
  display: grid;
  grid-template-columns: min-content 1fr;
}

/*title for event*/
.title-col {
  font-family:verdana;
  font-size:30px;
}

/*slider*/
.carousel {
width:auto;
height:90%;
object-fit: contain;
}

/*footer*/
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
}

/*text under img*/
.img-info {
  padding: 10px;
  font-weight: 500;
  text-align: center;
}

/*flip-box of img-bread*/
.flip-box {
  background-color: transparent;
  width: 300px;
  height: 200px;
  border: 1px solid #f1f1f1;
  perspective: 1000px;
}

.flip-box-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

.flip-box:hover .flip-box-inner {
  transform: rotateY(180deg);
}

.flip-box-front, .flip-box-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.flip-box-front {
  color: black;
}


.flip-box-back {
  color: white;
  transform: rotateY(180deg);
}
</style>

</head>
<h1>Youth Service</h1>
<!--banner image-->
<img src={{ asset("img/youth-banner.jpg") }} alt="Youth Service" style="width:100%; height:500px;">
<br/>
<br/>

<!--title-->
<div class="row">
    <div class="col">
<h4 style="padding-left:30%"><b>Our latest event</b></h4>

<!--slider-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
<!--img1 and the txt to info-->
    <div class="carousel-item active">
      <img class="d-block w-100 h-100" src= {{ asset("img/foodworks.png") }}>
      <div class="img-info">
          The foodworks
      </div>
    </div>
<!--img2 and the txt to info-->
    <div class="carousel-item">
      <img class="d-block w-100" src= {{ asset("img/ManyBread.jpg") }}>
      <div class="img-info">
        Elder taking bread from event
    </div>
    </div>
<!--img3 and the txt to info-->
    <div class="carousel-item">
      <img class="d-block w-100" src= {{ asset("img/teens_with_bread.jpg") }}>
      <div class="img-info">
        teens found fresh bread
    </div>
    </div>
  </div>
<!--button for travel through slider-->
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
<!--description of event1-->
<div class="col">
<div class="title-col p-5">Sharing Bread</div>
<p>Every day, 3,600 tonnes of food waste are sent to landfills in Hong Kong,
    while one in five people live in poverty and struggle to afford nutritious meals.
    Frontline charities are seeing a significant increase in the number of people turning to NGOs for food assistance due to the COVID-crisis.<br><br>

    The Bread Donation Programme mobilizes volunteers to rescue surplus bread from bakeries around Hong Kong.
    Volunteers collect near closing and bring the donations to designated collection points every Friday.<br><br>

    These bread donations are redistributed the same night to ImpactHk, the shelter for the homeless. <br><br>

    We cooperate with HKFoodWork and ImpactHK to reward teens for helping collecting bread in daytime or help sharing it in night time.
    We are Glad that teens are having fun when the event ongoing, and decided to continue helping after the event end!
<!--img will change when mouse hover over it,a feature to not look so odd-->
    <div class="flip-box">
        <div class="flip-box-inner">
          <div class="flip-box-front">
            <img src={{ asset("img/bread.jpeg") }} style="width:250px">
          </div>
          <div class="flip-box-back">
            <img src={{ asset("img/take.jpeg") }} style="width:200px">
          </div>
        </div>
      </div>
<!--link to gallery-->
      <a href="gallery" style="padding-left:70%; font-weight:blod;">view in gallery-></a>
    </p>
    </div>
    </div>
<!--footer-->
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
          © 2021 HKFYG Developed by Hong Kong Polytechnic University. All Rights Reserved.
                        <center> Web Application Group Project</center>
          </div>
<!-- Copyright -->
        </div>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src=”https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js” integrity=”sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/” crossorigin=”anonymous”></script>
@endsection
