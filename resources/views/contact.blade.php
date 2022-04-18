@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
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

<img src= {{ asset("img/bannner.jpeg") }} alt="banner" style="width:100%">
<hr/>

  <div class="row">
    <div class="col">
      
<h3>Location</h3>  
<iframe style="width:100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.674841998878!2d114.2058392511552!3d22.290303735256664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x340400b79f00ecbd%3A0x6b4177eed87246fe!2sHong%20Kong%20Federation%20of%20Youth%20Groups%20Building!5e0!3m2!1sen!2shk!4v1649661478399!5m2!1sen!2shk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    
    <div class="col">
    <h3>How to reach us?</h3>
    <br>
    <p>Address: 21/F, The Hong Kong Federation of Youth Groups Building,21 Pak Fuk Road, North Point, Hong Kong.</p>
    <p>Tel: (852) 2527-2448 </p>
    <p>Fax: (852) 2528-2105 </p>
    <p>Email: hq@hkfyg.org.hk </p>
    <p>Website: hkfyg.org.hk </p>
    <p>Multimedia: m21.hk</p>
    <p>Facebook: www.facebook.com/hkfyg</p> 
    <p>Youtube: www.youtube.com/user/HKFYGu21</p> 
    <p>Weibo: www.weibo.com/HKFYG</p> 
    <p>Instagram: instagram.com/hkfyg</p>
    <p>Twitter: twitter.com/HKFYG</p>
</p>
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
@endsection