
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href={{ asset('css/well_youth.css') }}>
<link rel="stylesheet" href= {{ asset('css/course.css') }}>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!--expand clicked image-->
    <script>
      function Expand(imgs) {
        var expandImg = document.getElementById("expandedImg");
        expandImg.src = imgs.src;
        expandImg.parentElement.style.display = "block";
      }
      </script>
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
img {
  display: grid;
  grid-template-columns: min-content 1fr;
}

/*title of gallery*/
.title-col {
  font-family:verdana;
  font-size:30px;
  text-align: center;
  font-weight: bold;
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
 /* background-blend-mode: overlay;*/
}

/*all border box*/
* {
  box-sizing: border-box;
}

/*place for storing image*/
.column {
  float: left;
  width: 25%;
  padding: 10px;
}

/*when hover change opacity*/
.column img:hover {
  opacity: 0.8;
}

</style>
</head>
<!--Title and banner-->
<h1>Youth Service</h1>
<img src={{ asset("img/youth-banner.jpg") }} alt="Youth Service" style="width:100%; height:500px;">
<br/>
<br/>
<div class="col">
<div class="title-col p-5">Gallery</div>
</p>
</div>
</div>
<!--image for first event, added 1 in to show it can contain 4 photo, can be cahnge in css-->
<h4 style="text-align: center;">Sharing Bread</h4>
<div class="row">
    <div class="column">
      <img src={{ asset("img/ManyBread.jpg") }} style="width:100%;border:6px ridge #ff6200;" onclick="Expand(this);">
    </div>
    <div class="column">
      <img src={{ asset("img/teens_with_bread.jpg") }} style="width:100%;border:6px ridge #ff6200;" onclick="Expand(this);">
    </div>
    <div class="column">
      <img src={{ asset("img/break_bread.jpg") }} style="width:100%;border:6px ridge #ff6200;" onclick="Expand(this);">
    </div>
    <div class="column">
        <img src={{ asset("img/bakery.jpg") }} style="width:100%;border:6px ridge #ff6200;" onclick="Expand(this);">
      </div>
  </div>

<!--second event-->
  <h4 style="text-align: center;">Playing with stray dogs</h4>
  <div class="row">
    <div class="column">
      <img src={{ asset("img/doogs.jpg") }} style="width:100%;border:6px dashed #d9ff00;" onclick="Expand(this);">
    </div>
    <div class="column">
      <img src={{ asset("img/organizer.jpeg") }} style="width:100%;border:6px dashed #d9ff00;" onclick="Expand(this);">
    </div>
    <div class="column">
      <img src={{ asset("img/dogs_walk.jpg") }} style="width:100%;border:6px dashed #d9ff00;" onclick="Expand(this);">
    </div>
    <div class="column">
      <img src={{ asset("img/eating.jpeg") }} style="width:100%;border:6px dashed #d9ff00;" onclick="Expand(this);">
    </div>
  </div>

<!--general image-->
  <h4 style="text-align: center;">Past group picture</h4>
  <div class="row">
    <div class="column">
      <img src={{ asset("img/hkyg123.jpg") }} style="width:100%;;border:2px dotted #0011ff;" onclick="Expand(this);">
    </div>
    <div class="column">
      <img src={{ asset("img/hkyouth.jpg") }} style="width:100%;;border:2px dotted #0011ff;" onclick="Expand(this);">
    </div>
    <div class="column">
      <img src={{ asset("img/elder.jpg") }} style="width:100%;border:2px dotted #0011ff;" onclick="Expand(this);">
    </div>
    <div class="column">
        <img src={{ asset("img/adviceyouth.jpg") }} style="width:100%;border:2px dotted #0011ff;" onclick="Expand(this);">
      </div>
  </div>
<!--expanded image on click-->
    <img id="expandedImg" style="width:90%; border:6px double #9c1c94;">

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
