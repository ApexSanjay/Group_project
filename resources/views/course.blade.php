
<!DOCTYPE html> 
<html>
    <head>
    <title>Courses</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href= {{ asset('css/course.css') }}>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </head>
    <body>
    <!--Header-->
    <header class="header">
        @extends('layouts.app')
        @section('content')
    </header>
	<!--Intro-->
		<div class="intro">
			<h1>Free for <span class="dis"> new </span> students</h1> 
		</div>
	</header>
	<!--Section for text-->
	<div class="rows">
		<div class="col">
			<h3>Laughter Yoga</h3>
			<p>Person in Charge: Dr Chirs Chow </p> <p>Number of seats available: 30</p>
            <p>
             Laughter yoga involves a series of movement and breathing exercises to promote deliberate laughter.</br>
             It is used as a remedy for physical, psychological, and spiritual ailments, as advocates believe that intentional laughter can provide benefits equal to those of spontaneous laughter
            </p>
            <h4 align="middle"><span class="learn">What you will learn?</span></h4> 
            <p>
              <ul>
                <li>Understand how simulated laughter can suppress stress-hormones</li>
                <li>Explain social connectedness and bonding</li>
                <li>Understand how simulated lower depression and improves mood</li>
              </ul>
              </br>
              <div class="text_rows">
                <img src={{ asset("img/certificate.png") }} width="110" height="110" >
                <p class="icon_text">Earn a Certificate upon completion</p>
              </div>
            </p>
		</div>
		<div class="col_img">
      <div id="carouselControls1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src={{ asset("img/laughter.jpg") }} alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src={{ asset("img/laugh2.jpg") }} alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src={{ asset("img/laugh3.jpg") }} alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselControls1" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselControls1" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
      </a>
</div>

		</div>
	</div>
    <hr class="solid">
    <div class="rows">
        <div class="col">
            <h3>Healthy Cooking</h3>
            <p>Person in Charge: Dr Adam Kwong </p> <p>Number of seats available: 30</p>
            <p>
              Cooking is one of the most powerful ways in which we can optimize our enjoyment of great quality food while protecting our health.</br> 
              Learn the basic recipes from a home cook and two professional chefs who prioritize healthful eating.
            </p>
            <h4 align="middle"><span class="learn">What you will learn?</span></h4> 
            <p>
              <ul>
                <li>Learn how to prepare meals that will delight you and protect your health.</li>
                <li>Understand the tools of weight management</li>
                <li>How to eat well and have a balanced diet</li>
              </ul>
              </br>
              <div class="text_rows">
                <img src={{ asset("img/level.png") }} width="110" height="110" >
                <p class="icon_text">Suitable for Beginners</p>
              </div>
            </p>
        </div>
        <div class="col_img">

        <div id="carouselControls2" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src={{ asset("img/chef.jpg") }} alt="First slide">
          </div>
        <div class="carousel-item">
          <img class="d-block w-100" src={{ asset("img/chef2.jpg") }} alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src={{ asset("img/chef3.jpg") }} alt="Third slide">
        </div>
        </div>
      <a class="carousel-control-prev" href="#carouselControls2" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselControls2" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
      </a>
      </div>


      </div>
    </div>
    <hr class="solid">
    <div class="rows">
        <div class="col">
            <h3>Mental Wellness</h3>
            <p>Person in Charge: Dr Martin Yan</p> <p>Number of seats available: 30</p>
            <p>
               A wellbeing or mindfulness course can help you and your loved ones.</br> 
               By giving you the skills and knowledge related to these areas, you can work on your relationships and improve your emotional intelligence.
            </p>
            <h4 align="middle"><span class="learn">What you will learn?</span></h4> 
            <p>
              <ul>
                <li>Understand the concepts and causes of depression</li>
                <li>Learn how to buld a long-lasting relationship</li>
                <li>Learn how to stay calm in stressful situation</li>
              </ul>
              </br>
              <div class="text_rows">
              <img src={{ asset("img/certificate.png") }} width="110" height="110" >
              <p class="icon_text">Earn a Certificate upon completion</p>
              </div>
            </p>
        </div>
        <div class="col_img">

            <div id="carouselControls3" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src={{ asset("img/happy.jpg") }} alt="First slide">
          </div>
        <div class="carousel-item">
          <img class="d-block w-100" src={{ asset("img/happy2.png") }} alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src={{ asset("img/happy3.jpg") }} alt="Third slide">
        </div>
        </div>
      <a class="carousel-control-prev" href="#carouselControls3" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselControls3" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
      </a>
      </div>




        </div>
    </div>
    <hr class="solid">
<!-- Footer -->
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
    <script src=”https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js” integrity=”sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/” crossorigin=”anonymous”></script>
    </body>
</html>