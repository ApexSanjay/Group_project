
<!DOCTYPE html> 
<html>
    <head>
    <title>Courses</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href= {{ asset('css/course.css') }}>
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
			<img src={{ asset("img/laughter.jpg") }} >
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
            <img src = {{ asset("img/chef.jpg") }}>
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
            <img src = {{ asset("img/happy.jpg") }}>
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
    </body>
</html>