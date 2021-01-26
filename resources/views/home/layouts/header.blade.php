
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
    <!-- Preloader-->

    <!-- Navigation-->
    <nav class="navbar navbar-unibody navbar-custom navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-main-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand page-scroll" href="#page-top">
            <!-- Text or Image logo--><img class="logo" src="@yield('logo')" alt="Logo"><img class="logodark" src="@yield('logo_dark')" alt="Logo"></a>
        </div>
        <div class="collapse navbar-collapse navbar-main-collapse">
          <ul class="nav navbar-nav navbar-left">
            <li class="hidden"><a href="#page-top"></a></li>
            <li><a href="{{ url('/') }}">Anasayfa <span class="caret"></span></a></li>
            <li><a href="{{ url('/blog') }}">Blog <span class="caret"></span></a></li>
            <li><a href="#">Portfolio <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Masonry <span class="angle-right"></span><span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="portfolio-masonry-2.html">2 columns</a></li>
                    <li><a href="portfolio-masonry-3.html">3 columns</a></li>
                    <li><a href="portfolio-masonry-4.html">4 columns</a></li>
                  </ul>
                </li>
                <li><a href="#">Wide <span class="angle-right"></span><span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="portfolio-wide-2.html">2 columns</a></li>
                    <li><a href="portfolio-wide-3.html">3 columns</a></li>
                    <li><a href="portfolio-wide-4.html">4 columns</a></li>
                  </ul>
                </li>
                <li><a href="#">Boxed <span class="angle-right"></span><span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="portfolio-boxed-2.html">2 columns</a></li>
                    <li><a href="portfolio-boxed-3.html">3 columns</a></li>
                    <li><a href="portfolio-boxed-4.html">4 columns</a></li>
                  </ul>
                </li>
                <li><a href="portfolio-single.html">Single project</a></li>
              </ul>
            </li>
            <li><a href="#">News <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="news2.html">2 columns</a></li>
                <li><a href="news2-sidebar.html">2 columns sidebar</a></li>
                <li><a href="news3.html">3 columns</a></li>
                <li><a href="news4.html">4 columns</a></li>
                <li><a href="news-single.html">single fullwidth</a></li>
                <li><a href="news-single-sidebar.html">single sidebar</a></li>
              </ul>
            </li>
            <li><a href="#">Elements <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="headers.html"><i class="fa fa-server fa-lg fa-fw"></i> Headers & Page titles</a></li>
                <li><a href="buttons.html"><i class="fa fa-hand-pointer-o fa-lg fa-fw"></i> Buttons</a></li>
                <li><a href="carousels.html"><i class="fa fa-clone fa-lg fa-fw"></i> Carousels</a></li>
                <li><a href="columns.html"><i class="fa fa-th-list fa-lg fa-fw"></i> Columns <span class="label label-primary">update</span></a></li>
                <li><a href="pricing.html"><i class="fa fa-credit-card fa-lg fa-fw"></i> Pricing tables</a></li>
                <li><a href="countdown.html"><i class="fa fa-clock-o fa-lg fa-fw"></i> Countdown Timer</a></li>
                <li><a href="bars-charts.html"><i class="fa fa-pie-chart fa-lg fa-fw"></i> Bars and Charts</a></li>
                <li><a href="animate-on-scroll.html"><i class="fa fa-chevron-down fa-fw"></i> Animate On Scroll</a></li>
                <li><a href="typography.html"><i class="fa fa-text-width fa-lg fa-fw"></i> Typography</a></li>
                <li><a href="accordions.html"><i class="fa fa-plus-square-o fa-lg fa-fw"></i> Accordions</a></li>
                <li><a href="video-sound.html"><i class="fa fa-video-camera fa-lg fa-fw"></i> Video / Sound</a></li>
                <li><a href="tabs.html"><i class="fa fa-columns fa-lg fa-fw"></i> Tabs</a></li>
              </ul>
            </li>
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
            <li class="dropdown"><a class="dropdown-toggle" href="#"><i class="fa fa-search fa-lg"></i><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li>
                  <form class="search-form" method="post">
                    <button class="search-button" type="submit" title="Search"><i class="fa fa-search fa-lg"></i></button>
                    <input class="form-control search-field" type="text" placeholder="SEARCH">
                  </form>
                </li>
              </ul>
            </li>
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