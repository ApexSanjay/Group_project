 <!-- section start -->

<!DOCTYPE html>
<html>
<head>
<title>Life Goal</title> <!-- title of the webpage -->
<h1>The Hong Kong Federation Of Youth Group</h1> <!-- heading of the website -->
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

<body>

<img src= {{ asset("img/wellbanner.jpg") }} alt="wellbanner" style="width:100%"> <!-- banner of the webpage -->

<br/>
<br/>
<div class="hero-image">
  <div class="hero-text">
  <h2>Life Goal</h2> <!-- heading of the webpage  -->
    
  </div>
</div>

<p> <!-- text of introduction of Life Goal -->
  <ul>
    <li>Do you have a wish to do list in your life?</li>
    <li>After landing in life, the most important thing is to live a happy life and do what you want to do. But sometimes I want to do something, but I have no one to accompany me, so I am forced to shelve or cancel the plan. Or you are looking for a fresh combination, so that ordinary things can sparkle and leave better memories.</li>
    <li>It is to make everyone's life more exciting, do what you want, and now we are happy to arrange and accompany you, and be your helper in finding the most fulfilling life!</li>
  </ul>
</p>

<u><h2>Our Activities</h2></u> 
<div class="row">  <!-- pictures of courses, the text can link to the activities benefit introduction -->
<div class="column">
    <img src= {{ asset("img/act1.jpg") }} alt="camping" style="width:100%">
    <h3>
      <a href="#camping">Camping</a></h3>
  </div>
  <div class="column">
    <img src= {{ asset("img/act2.jpg") }} alt="pcamp" style="width:100%">
    <h3>
      <a href="#pcamp">Positive experience camp</a></h3>
  </div>
  <div class="column">
    <img src= {{ asset("img/act3.jpg") }} alt="fcamp" style="width:100%">
    <h3>
      <a href="#fcamp">Family day camp</a></h3>
  </div>
</div>
<div class="row">
  <div class="column">
    <img src= {{ asset("img/act4.jpg") }} alt="tcourse" style="width:100%">
    <h3>
      <a href="#tcourse">Training Course</a></h3>
  </div>
  <div class="column">
    <img src={{ asset("img/act5.jpg") }} alt="concert" style="width:100%">
    <h3>
      <a href="#concert">Concert</a></h3>
  </div>
  <div class="column">
    <img src= {{ asset("img/act6.jpg") }} alt="diyclass" style="width:100%">
    <h3>
      <a href="#diyclass">DIY Class</a></h3>
  </div>
</div>

 <!-- activities benefit introduction -->
<h4><a name="camping">Camping :</h4>
<p>
    <ol>
        <li>Keeps Your Fit & Healthy</li>
        <li>Gives You New Experiences and a Change of Scene</li>
        <li>​Connect with Others</li>
    </ol>
</p>
<hr>
<h4><a name="pcamp">Positive experience camp :</h4>
<p>
    <ol>
        <li>Developing a new skill</li>
        <li>Self-taught study</li>
        <li>​Learning a new sport or activity</li>
        <li>​Learning to use new technology</li>
        <li>Acquiring new knowledge</li>
    </ol>
</p>
<hr>
<h4><a name="fcamp">Family day camp :</h4>
<p>
    <ol>
        <li>The bonding time is constant</li>
        <li>Create memories</li>
        <li>​Rules are a little more lenient</li>
        <li>​Options for activities are endless</li>
    </ol>
</p>
<hr>
<h4><a name="tcourse">Training Course :</h4>
<p>
    <ol>
        <li>Learn something new</li>
        <li>Make better decisions</li>
        <li>Helping others</li>
        <li>​Make youself more positive</li>
    </ol>
</p>
<hr>
<h4><a name="concert">Concert :</h4>
<p>
    <ol>
        <li>More exercise. Increases coordination and mobility</li>
        <li>More social interaction. Improves cognition and speech</li>
        <li>Better overall health. Reduces pain and recovery time</li>
        <li>​Improves memory. Assists in memory recall</li>
    </ol>
</p>
<hr>
<h4><a name="diyclass">DIY Class :</h4>
<p>
    <ol>
        <li>Learning a New Skill</li>
        <li>Satisfaction</li>
        <li>You can make it your own</li>
        <li>Way to spend time with your family</li>
    </ol>
</p>


<footer>  <!-- footer contain button of Home/About/Courses/Contact Us -->
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
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src=”https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js” integrity=”sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/” crossorigin=”anonymous”></script>

</body>
</html>
@endsection <!-- section end -->


