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

    <script>
      function Expand(imgs) {
        var expandImg = document.getElementById("expandedImg");
        expandImg.src = imgs.src;
        expandImg.parentElement.style.display = "block";
      }
      </script>

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
  text-align: center;
  font-weight: bold;

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

* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
}

.column {
  float: left;
  width: 24%;
  padding: 10px;
}

.column img {
  opacity: 1;
  cursor: pointer;
}

.column img:hover {
  opacity: 0.8;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.thecon {
  position:;
  display: none;
}
</style>

</head>
<h1>Youth Service</h1>
<img src={{ asset("img/youth-banner.jpg") }} alt="Youth Service" style="width:100%; height:500px;">
<br/>
<br/>
<div class="col">
<div class="title-col p-5">Gallery</div>
</p>
</div>
</div>
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

  <h4 style="text-align: center;">Playing with stray dogs</h4>
  <div class="row">
    <div class="column">
      <img src={{ asset("img/doogs.jpg") }} style="width:100%;border:6px dashed #d9ff00;" onclick="Expand(this);">
    </div>
    <div class="column">
      <img src={{ asset("img/dogs_event.jpg") }} style="width:100%;border:6px dashed #d9ff00;" onclick="Expand(this);">
    </div>
    <div class="column">
      <img src={{ asset("img/dogs_walk.jpg") }} style="width:100%;border:6px dashed #d9ff00;" onclick="Expand(this);">
    </div>
  </div>

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

  <div class="thecon">
    <img id="expandedImg" style="width:90%;border:6px double #9c1c94;">
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

