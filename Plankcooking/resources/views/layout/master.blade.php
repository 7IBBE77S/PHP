<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Plankcooking </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/global.css" />
</head>
<body data-spy="scroll" data-offset-top="151" data-target="#nav">



    <header class="l-g-i ">
      <div class="cent-h">
        <a href="{{ route('home') }}">
          <img src="/images/header.png" class="header-img  " alt="">
        </a>
        <a href="{{ route('cart') }}">
          <img src="/images/cartbtn.png" alt="" class="lrg-header-cart-button"> </a></div>
    </header>


    <nav class="navbar sticky-top navbar-dark navbar-expand-lg ">
      <div class="container">
        <div class="brand-cart hide" id="brand-cart" data-spy="hide" data-offset-top="151">
          <a class="navbar-brand" href="/">
            <img src="/images/header.png" width="138" height="53" alt="header image" loading="lazy" />
          </a>
          <a class="cart-btn " href="/Cart">
            <img src="/images/cartbtn.png" width="90" height="45" alt="header image" loading="lazy" />
          </a></div>
        <button class="navbar-toggler m-r-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav m-r-auto ">

            <li class="nav-item">
              <a class="nav-link" href="{{ route('about') }}">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('shop') }}">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('reviews') }}">Reviews</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('recipes') }}">Recipes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('contact') }}">Contact</a>
            </li>
          
        </div>
      </div>
    </nav>
 
    <main class="container-fluid">
        @yield('content')
    </main>
    
  <footer class="my-5 pt-5 justify-content-center  text-center">


    <div class="container"    >

  <a href="/About">ABOUT</a> | <a href="/Shop#/Products">SHOP</a> | <a href="/Reviews">REVIEWS</a>
  | <a href="/Recipes">RECIPES</a> | <a href="/Contact">CONTACT</a> |
      <a href="/Policies">POLICIES</a>


<div id="copyright">
  ©Copyright 2020 Plankcooking.com. All Rights Reserved
</div>
</div>

</footer>
<script
src="https://kit.fontawesome.com/ea41737762.js"
crossorigin="anonymous"
></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>