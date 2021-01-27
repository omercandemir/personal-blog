
<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/misc/favicon.png">
    <meta name="description" content="Ömer Can kişisel web sitesi">
    <meta name="author" content="Ömer Can">
    <!-- Bootstrap Core CSS-->
    <link href="{{ asset('home/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom CSS-->
    <link href="{{ asset('home/css/main.css') }}" rel="stylesheet">
    <title>@yield('title', 'Ömer Can | Kişisel Blog Sitesi')</title>
  </head>
  <body class="top" id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- Navigation-->
    <nav class="navbar navbar-unibody navbar-custom navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-main-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand page-scroll" href="#page-top">
            <!-- Text or Image logo--><img class="logo" src="@yield('logo')" alt="Logo"><img class="logodark" src="@yield('logo')" alt="Logo"></a>
        </div>
        <div class="collapse navbar-collapse navbar-main-collapse">
          <ul class="nav navbar-nav navbar-left">
            <li class="hidden"><a href="#page-top"></a></li>
            <li><a href="{{ url('/') }}">Anasayfa <span class="caret"></span></a></li>
            <li><a href="{{ url('/blog') }}">Blog <span class="caret"></span></a></li>
            <li><a href="{{ url('projeler') }}">Projeler <span class="caret"></span></a></li>
            <li class="menu-divider visible-lg">&nbsp;</li>
            <li><a href="#">Shop <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="shop.html">Shop</a></li>
                <li><a href="shop2.html">Shop sidebar</a></li>
                <li><a href="shop3.html">Shop  sidebar  wide</a></li>
                <li><a href="shop-single.html">Single product</a></li>
                <li><a href="shop-cart.html">Shopping cart</a></li>
              </ul>
            </li>
            <li class="visible-lg">&nbsp;</li>
            <li class="dropdown"><a class="dropdown-toggle" href="#"><span class="lang">TR</span><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/">ENG</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header-->