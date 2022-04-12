



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-dropdownhover.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/font/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/simple-line-icon/css/simple-line-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/baguetteBox.css')}}">
    <link href="{{asset('assets/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('assets/owl-carousel/owl.theme.css')}}" rel="stylesheet">
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@3/dark.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="@sweetalert2/themes/dark/dark.css">
    <script src="sweetalert2/dist/sweetalert2.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Oxygen|Roboto:300&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/ea41737762.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/base.css">

    <title>Speak Geek</title>
</head>

<body class="image">

<header>
  
    <nav id="mainNav" class="navbar navbar-inverse navbar-default navbar-fixed-top">
        <div class="container ">
            <div class="navbar-header ">
                <button type="button" class="navbar-toggle collapsed " data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="{{route('index')}}" >
                    <h1 class="mroboto mt-3">Products</h1>
                </a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" data-hover="dropdown" data-animations="fadeIn fadeInLeft fadeInUp fadeInRight">
                <ul class="nav navbar-nav">

                </ul>
                <ul class="nav navbar-nav navbar-right">

                    <li class="dropdown">

                        <?php
                            $number = count(Cart::getContent());
                            $items = Cart::getContent()->take(2);
                            $total = Cart::getTotal();
                        ?>
                        <a href="#" class="dropbtn">  <i class="fas fa-shopping-cart"></i>
                            <span>Cart ({{ $number }})</span> </a>
                        <div class="dropdown-content">
                            @foreach($items as $item)
                                <div class="cart-content">
                                    <div class="col-sm-4 col-md-4"><img src="{{$item->attributes->img}}" alt="13"></div>
                                    <div class="col-sm-8 col-md-8">
                                        <div class="pro-text"> <a href="{{ route('cart.index') }}">{{$item->name}}</a>
                                            <div class="close">Price: </div> <strong>$ {{$item->price}}</strong> </div>
                                    </div>
                                </div>
                            @endforeach

                            <div class="total">
                                <div class="col-sm-6 col-md-6 text-left"> <span></span>
                                    <br> <strong>Total :</strong> </div>
                                <div class="col-sm-6 col-md-6 text-right"> <strong></strong>
                                    <br> <strong>${{$total}}</strong> </div>
                            </div> <a href="{{ route('cart.index') }}" class="cart-btn">VIEW CART </a>
                                <a href="{{route('checkout.index')}}" class="cart-btn">CHECKOUT</a> </div>
                    </li>

                </ul>

            </div>
        </div>
    </nav>

    <div class="modal fade bs-example-modal-lg search-bg menu-popup" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content search-popup">
                <nav class="navbar navbar-inverse openmenu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown"> <a href="{{route('index')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span>Home</span></a>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
    </div>
    {{ csrf_field() }}


</header>
@include('home-page.message')

@yield('content')


<footer class="footer">
    <div class="container" >
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 ">

                <div >
                    <h3>Speak Geek</h3>
                    <ul>
                        <li><i aria-hidden="true"></i> <strong>Address:</strong> 1810 N Greene Street
Spokane, WA 99217-5399.</li>
                        <li><i ></i> <strong>Email:</strong> contact@example.com</li>
                        <li><i ></i> <strong>Phone Number:</strong> (509) 123 456 789</li>
                        <li><i ></i> <strong>This site was made using: </strong><i class="fab fa-php"></i><i class="fab fa-laravel"></i><i class="fas fa-database"></i> | <i class="fab fa-js"></i><i class="fab fa-css3"></i><i class="fab fa-html5"></i></li>
                    </ul>
                </div>

            </div>

        </div>
    </div>
    <div class="copyright cwhite">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    Copyright &copy; <a href="#">Speak Geek</a> all rights reserved.
                </div>
                <div class="text-right col-xs-12 col-sm-6 col-md-6">
                    <div class="f-sicon2">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>

@include('home-page.short-polo-men')
@include('home-page.long-sleeve')
@include('home-page.coffee-mug')
@include('home-page.travel-mug')
@include('home-page.short-polo-womens')
@include('home-page.long-sleeveW')



<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap-dropdownhover.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.easing.min.js')}}"></script>
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{asset('assets/owl-carousel/owl.carousel.js')}}"></script>




</body>


</html>
