@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
<h1>The Hong Kong Federation Of Youth Group</h1>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
h1{
  margin-top: 70px;
  line-height: 1.3;
  font-weight: 600;
  font-size: 40px;
  text-align: center;
}
h2{
  margin-top: 70px;
  line-height: 1.3;
  font-weight: 600;
  font-size: 40px;
  text-align: center;
}
a{
  color:black;
}
h3{
  text-align:center;
  background-color:grey;
  color:black;
}
* {
  box-sizing: border-box;
}
p{
  color:black;
}
.column {
  float: left;
  width: 33.33%;
  padding: 2px;
  height:auto;
  border:10px outset silver;
  background-color:grey;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
  border: 5px ;
}
.carousel {
  width:100%;
  height:auto;
}


/*                            */
.hero-image{
  width:100%;
  height: 200px;
  overflow: hidden;
  position: relative;
  z-index: 0;
  background-color: lightgray;
  background-repeat: no-repeat;
  background-attachment: scroll; 
  background-size: 50% 50%;
 /* background-blend-mode: overlay;*/
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
<body>

<img src="wellbanner.jpg" alt="wellbanner" style="width:100%">
<br/>
<br/>
<div class="hero-image">
  <div class="hero-text">
  <h2>Welling Of Youth</h2>
    
  </div>
</div>

<p>
  <ul>
    <li>After landing in life, the most important thing is to <mark>live a happy life</mark> and <mark>do what you want to do</mark>. But sometimes I want to do something, but I have no one to accompany me, so I am forced to shelve or cancel the plan. It is also possible or want to find fresh combinations, so that ordinary things can sparkle and leave better memories.</li>
    <li>It is to make everyone's life more <mark>exciting</mark>. Do what you want. Now we are happy to arrange and accompany you and be a good helper for you to find the most fulfilling life.</li>
    <li>As landers, there are different codes. Some people say it is the third age, and some people say it is "Senior" Ying. We believe that today's landers are also young people, and they can also use their strengths to make their lives happy and happy to become <mark>LOHAS youths</mark>.</li>
  </ul>
</p>


<div class="row">
  <div class="column">
    <img src="elAct1.jpg" alt="EA1" style="width:100%">
  </div>
  <div class="column">
    <img src="elAct2.jpg" alt="EA2" style="width:100%">
  </div>
  <div class="column">
    <img src="elAct3.jpg" alt="EA3" style="width:100%">
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
</footer>

</head>
</body>
</html>
@endsection


