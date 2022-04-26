
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
/*title*/
h1{
  text-align:center;
}

/*subtitle*/
h4{
  font-family:verdana;
}

/*image modify*/
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

/*shake feature*/
.shake {
  -webkit-animation-name: shaking;
  -webkit-animation-duration: 0.8s;
  -webkit-transform-origin: 50% 50%;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-timing-function: linear;
}

/*shake animation*/
@-webkit-keyframes shaking {
    0% { transform: translate(1px, 1px) rotate(0deg); }
  10% { transform: translate(-1px, -2px) rotate(-1deg); }
  20% { transform: translate(-3px, 0px) rotate(1deg); }
  30% { transform: translate(3px, 2px) rotate(0deg); }
  40% { transform: translate(1px, -1px) rotate(1deg); }
  50% { transform: translate(-1px, 2px) rotate(-1deg); }
  60% { transform: translate(-3px, 1px) rotate(0deg); }
  70% { transform: translate(3px, 1px) rotate(-1deg); }
  80% { transform: translate(-1px, -1px) rotate(1deg); }
  90% { transform: translate(1px, 2px) rotate(0deg); }
  100% { transform: translate(1px, -2px) rotate(-1deg); }
}
</style>
</head>
<h1>Youth Service</h1>
<!--banner-->
<img src={{ asset("img/youth-banner.jpg") }} alt="Youth Service" style="width:100%; height:500px;">
<br/>
<br/>
<!--title-->
<div class="row">
    <div class="col">
<h4 style="padding-left:30%"><b>Previous Event</b></h4>

<!--slider-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
<!--img1 and the txt inside-->
    <div class="carousel-item active">
      <img class="d-block w-100 h-100" src= {{ asset("img/sai_kung_stray_friends.jpeg") }}>
      <div class="img-info">
        Sai kung stray friend
    </div>
    </div>
<!--img2 and the txt inside-->
    <div class="carousel-item">
      <img class="d-block w-100" src= {{ asset("img/doogs.jpg") }}>
      <div class="img-info">
        dogs ready to meet us
    </div>
    </div>
<!--img3 and the txt inside-->
    <div class="carousel-item">
      <img class="d-block w-100" src= {{ asset("img/dogs_event.jpg") }}>
      <div class="img-info">
        chilling with dogs
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
<!--description of event2-->
<div class="col">
<div class="title-col p-5">Playing with stray dogs</div>
<p>With many dogs awaiting adoption at the Sai Kung Stray Friends at any given time,
    volunteers are needed to help out in several ways,
    including feeding, playing toys, bathing, brushing and socialising.<br><br>

    We are happy to contact Sai Kung Stray Friends to introduce the right way to treat stray dogs and give our volunteers a chance to interact with stray dog
  <br><br>
    Our volunteers claim this is a unique experience to take care of animal outside from home and surprise of the dog are friendly at first glance</p>
<!--dog image always shake, a feature to not look so odd-->
    <img src= {{ asset("img/dog.jpeg") }} class="shake" style="width:500px; padding-left:30%">
<!--link to gallery-->
    <a href="gallery" style="padding-left:70%; font-weight:blod;">view in gallery-></a>
    </p></p>
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
