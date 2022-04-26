<!-- section start -->

<!DOCTYPE html>
<html>
<head>
<title>Instructor Training Course</title> <!-- title of the webpage -->
<h1>The Hong Kong Federation Of Youth Group</h1> <!-- heading of the website -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href={{ asset('css/well_youth.css') }}>
<link rel="stylesheet" href= {{ asset('css/course.css') }}>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
+</head>

<!-- Navbar Header-->
<header class="header">
  @extends('layouts.app')
  @section('content')
</header>

<body>

<img src={{ asset("img/wellbanner.jpg") }} alt="wellbanner" style="width:100%"> <!-- banner of the webpage -->
<br/>
<br/>
<div class="hero-image">
  <div class="hero-text">
  <h2>Instructor Training Course</h2> <!-- heading of the webpage  -->
    
  </div>
</div>
<br><br>
<div class="row">
<div class="col">
<p> <!-- text of introduction of Instructor Training Course -->
  <ul>
    <li>The course is designed to enable course members to learn the skills needed to structure lesson plans, design handouts, present course material and assess elderly needs and abilities.</li>
    <li>Activities and courses are designed to meet the needs of LOHAS youth today</li>
    <li>Enhance the self-confidence of the participants and set the direction for the future through different activities and demonstrations</li>
    <li>How to become a instructor?</li>
         <ol>
            <li>Complete and submit the Instructor Application</li>
            <li>Attend and complete the instructor-led course you intend to deliver</li>
            <li>​Meet the course-specific prerequisites.</li>
            <li>Pass the certification exam at the mastery level</li>
            <li>Demonstrate instructional presentation skills</li>
        </ol>
    <li>Existing courses</li>
        <ol>
            <li>Reminiscence Therapy Course</li>
            <li>Positive Psychology Course</li>
            <li>​Happy Coaching Course</li>
            <li>Yoga Leader Training Course</li>
        </ol>
  </ul>
</p>
<br>
<br>
</div>
  
<div class="col"> <!-- sample sliding pictures of courses -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 h-100" src="img/course1.jpg"  alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/course2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/course3.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/course4.jpg" alt="Forth slide">
    </div>
  </div>
</div>
</div>
</div>


<footer> <!-- footer contain button of Home/About/Courses/Contact Us -->
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


