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
h4{
  margin-top: 70px;
  line-height: 1.3;
  font-weight: 600;
  font-size: 20px;
  text-align: left;
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

<img src="bannner.jpeg" alt="Chicago" style="width:100%">
<br/>
<br/>
<div class="hero-image">
  <div class="hero-text">
  <h2>To Do List</h2>
    
  </div>
</div>

<p>
  <ul>
    <li>Do you have a wish to do list in your life?</li>
    <li>After landing in life, the most important thing is to live a happy life and do what you want to do. But sometimes I want to do something, but I have no one to accompany me, so I am forced to shelve or cancel the plan. Or you are looking for a fresh combination, so that ordinary things can sparkle and leave better memories.</li>
    <li>It is to make everyone's life more exciting, do what you want, and now we are happy to arrange and accompany you, and be your helper in finding the most fulfilling life!</li>
  </ul>
</p>

<u><h4>Our activities</h4></u>
<div class="row">
<div class="column">
    <img src="act1.jpg" alt="camping" style="width:100%">
    <h3>
      <a href="#camping">Camping</a></h3>
  </div>
  <div class="column">
    <img src="act2.jpg" alt="pcamp" style="width:100%">
    <h3>
      <a href="#pcamp">Positive experience camp</a></h3>
  </div>
  <div class="column">
    <img src="act3.jpg" alt="fcamp" style="width:100%">
    <h3>
      <a href="#fcamp">Family day camp</a></h3>
  </div>
</div>
<div class="row">
<div class="column">
    <img src="act4.jpg" alt="tcourse" style="width:100%">
    <h3>
      <a href="#tcourse">Training Course</a></h3>
  </div>
  <div class="column">
    <img src="act5.jpg" alt="concert" style="width:100%">
    <h3>
      <a href="#concert">Concert</a></h3>
  </div>
  <div class="column">
    <img src="act6.jpg" alt="diyclass" style="width:100%">
    <h3>
      <a href="#diyclass">DIY Class</a></h3>
  </div>
</div>

<p>
<h4><a name="camping">Camping :</h4>
    <ul>
        <li>Keeps Your Fit & Healthy</li>
        <li>Gives You New Experiences and a Change of Scene</li>
        <li>​Connect with Others</li>
    </ul>
</p>
<p>
<h4><a name="pcamp">Positive experience camp :</h4>
    <ul>
        <li>Developing a new skill</li>
        <li>Self-taught study</li>
        <li>​Learning a new sport or activity</li>
        <li>​Learning to use new technology</li>
        <li>Acquiring new knowledge</li>
    </ul>
</p>
<p>
<h4><a name="fcamp">Family day camp :</h4>
    <ul>
        <li>The bonding time is constant</li>
        <li>Create memories</li>
        <li>​Rules are a little more lenient</li>
        <li>​Options for activities are endless</li>
    </ul>
</p>
<p>
<h4><a name="tcourse">Training Course :</h4>
    <ul>
        <li>Learn something new</li>
        <li>Make better decisions</li>
        <li>Helping others</li>
        <li>​Make youself more positive</li>
    </ul>
</p>
<p>
<h4><a name="concert">Concert :</h4>
    <ul>
        <li>More exercise. Increases coordination and mobility</li>
        <li>More social interaction. Improves cognition and speech</li>
        <li>Better overall health. Reduces pain and recovery time</li>
        <li>​Improves memory. Assists in memory recall</li>
    </ul>
</p>
<p>
<h4><a name="diyclass">DIY Class :</h4>
    <ul>
        <li>Learning a New Skill</li>
        <li>Satisfaction</li>
        <li>You can make it your own</li>
        <li>Way to spend time with your family</li>
    </ul>
</p>

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


