@extends('home.layouts.master')
@section('title')
   Ömer Can | Anasayfa    
@endsection
@section('content')
    <!-- Page Content Buraya Gelecek -->

    @section('logo')
         {{ $ayar[0]->logo }}
    @endsection
    @section('logo_dark')
         {{$ayar[0]->logo_dark}}
    @endsection
    @section('siteadi')
        {{$ayar[0]->site_adi}}
    @endsection

    <header class="intro" data-background="{{asset ('home/img/main/29.jpg')}}">
        <div class="intro-body">
           <h4> Jr. Web Developer</h4>
           <h1>{{ $ayar[0]->site_adi }}</h1>
           <a class="page-scroll" href="#about"><span class="mouse"><span><i class="icon ion-ios-arrow-down"></i></span></span></a>
        </div>
     </header>
     <!-- About Personal Section-->
     <section class="bg-dark2" id="about">
        <div class="container">
           <div class="row">
              <div class="col-lg-6">
                 <h3>Hakkımda</h3>
                 <p class="no-pad">{{ $ayar[0]->hakkimizda }}</p>
                 <h2 class="classic">- {{ $ayar[0]->site_adi }} </h2>
              </div>
              <div class="col-lg-5 col-lg-offset-1">
                 <h3>&nbsp;</h3>
                 <div class="circle" data-thickness="8" data-value="0.85">
                    <span></span>
                    <div class="agenda">PHP</div>
                 </div>
                 <div class="circle" data-thickness="8" data-value="0.75">
                    <span></span>
                    <div class="agenda">CodeIgniter</div>
                 </div>
                 <div class="circle" data-thickness="8" data-value="0.85">
                    <span></span>
                    <div class="agenda">Laravel</div>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!-- Services Section-->
     <section>
        <div class="container text-center">
           <div class="row">
              <div class="col-lg-3 col-sm-6 wow fadeIn" data-wow-delay=".2s">
                 <h4><i class="icon-big icon ion-ios-person-outline"></i> Kişisel Web Sitesi</h4>
                 <p>Artık hayalinizdeki kişisel web sitesi sadece 1 adım uzağınızda, size özel blog / portofolio web sitesine kısa sürede sahip olabilirsiniz!</p>
              </div>
              <div class="col-lg-3 col-sm-6 wow fadeIn" data-wow-delay=".4s">
                 <h4><i class="icon-big icon ion-ios-briefcase-outline"></i> Kurumsal Web Sitesi</h4>
                 <p>Firmanızı tüm dünyaya tanıtma zamanı geldi! Firmanızı, ürünlerinizi tanıtabileceğiniz ve müşterilerinize bilgi verebileceğiniz web sitesi artık sadece bir adım uzağınızda</p>
              </div>
              <div class="col-lg-3 col-sm-6 wow fadeIn" data-wow-delay=".6s">
                 <h4><i class="icon-big icon ion-ios-color-wand-outline"></i> Proje Düzenleme / Ekleme</h4>
                 <p>Mevcut Laravel projeleriniz üzerinde hata düzeltme, ekleme, düzenleme gibi işlemler ve daha fazlası için iletişim butonunu kullanabilirsiniz.</p>
              </div>
              <div class="col-lg-3 col-sm-6 wow fadeIn" data-wow-delay=".8s">
                 <h4><i class="icon-big icon ion-ios-chatboxes-outline"></i> Ücretsiz Proje Danışmanlığı</h4>
                 <p>Aklınızdaki web projesini canlandırmanın vakti geldi! Hemen iletişime geçin ve proje çizelgesini / fiyatını oluşturalım ve hızlıca hayata geçirelim!</p>
              </div>
           </div>
        </div>
     </section>
     <!-- Quotes-->
     <section class="quote section-small bg-img3 text-center">
        <div class="overlay"></div>
        <div class="container">
           <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                 <p><i class="icon fa fa-quote-left fa-lg"></i></p>
                 <p> {{ $ayar[0]->ozel_soz }} </p>
                 <h2 class="no-pad classic">M.Kemal Atatürk</h2>
              </div>
           </div>
        </div>
     </section>
     <!-- Portfolio-->
     <section class="no-pad-btm" id="portfolio">
        <div class="container text-center">
           <div class="row">
              <div class="col-sm-10 col-sm-offset-1">
                 <h3>Projeler</h3>
              </div>
           </div>
        </div>
        <div class="container-fluid">
           <div class="row portfolio-items" id="grid">
            @foreach ($projeler as $proje)
              <div class="col-md-3 col-sm-6 no-pad" data-groups="[&quot;photo&quot;, &quot;branding&quot;]">
                 <div class="portfolio-item">
                    <a href="portfolio-single.html">
                       <img src="{{ $proje->proje_resim }}" alt="">
                       <div class="portfolio-overlay">
                          <div class="caption">
                             <h5>{{ $proje->proje_adi }}</h5>
                             <span>{{ $proje->proje_aciklama }}</span>
                          </div>
                       </div>
                    </a>
                 </div>
              </div>
            @endforeach
           </div>
        </div>
     </section>
     <div class="section-small action bg-gray text-center"><a class="btn btn-dark-border" href="#">Tüm Projelere Göz At</a></div>
     <!-- Facts section-->
     <section class="facts section-small bg-img">
        <div class="overlay"></div>
        <div class="container text-center">
           <div class="row">
              <div class="col-sm-4">
                 <span class="numscroller" data-min="0" data-max="18" data-delay="4" data-increment="1">0</span>
                 <h5 class="no-pad">Tamamlanan Proje</h5>
              </div>
              <div class="col-sm-4">
                 <span class="numscroller" data-min="0" data-max="50" data-delay="5" data-increment="2">0</span>
                 <h5 class="no-pad">'den fazla müşteri</h5>
              </div>
              <div class="col-sm-4">
                 <span class="numscroller" data-min="0" data-max="2" data-delay="3" data-increment="1">0</span>
                 <h5 class="no-pad">+ yıllık deneyim</h5>
              </div>
           </div>
        </div>
     </section>
     <!-- Blog-->
     <section class="bg-gray">
        <div class="container">
           <h3 class="pull-left">BLOG</h3>
           <div class="pull-right">
              <h5><a href="news3.html">Tümüne Göz At</a></h5>
           </div>
           <div class="clearfix"></div>
           <div class="row grid-pad">
              @foreach ($bloglar as $blog)
              <div class="col-sm-4">
                 <a href="news-single-sidebar.html">
                    <img class="img-responsive center-block" src="{{ $blog->resim }}" alt="">
                    <h5>{{ $blog->baslik }}</h5>
                 </a>
                 <p>Lorem ipsum dolor sit amet, consectetur elit. Nulla convallis pulvinar vestibulum. Donec eleifend, sem sed dictum mattis, turpis purus.</p>
                 <a class="btn btn-dark-border btn-xs" href="{{ url('blog/'.$blog->id.'') }}">Devamını Oku</a>
              </div>
              @endforeach
           </div>
        </div>
     </section>
     <!-- Contact Section-->
     <section id="contact">
        <div class="container text-center">
           <div class="row">
              <div class="col-md-6 col-md-offset-3">
                 <h3>Say hello</h3>
                 <p>Feel free to contact me to provide some feedback on my templates, give me suggestions for new templates and themes, or to just say hello!</p>
                 <!-- Contact Form - Enter your email address on line 17 of the mail/contact_me.php file to make this form work. For more information on how to do this please visit the Docs!-->
                 <form action="#" method="post">
                    <div class="control-group">
                       <div class="form-group floating-label-form-group controls">
                          <label class="sr-only control-label" for="name">You Name</label>
                          <input class="form-control input-lg" id="name" type="text" placeholder="You Name" required="" data-validation-required-message="Please enter name"><span class="help-block text-danger"></span>
                       </div>
                    </div>
                    <div class="control-group">
                       <div class="form-group floating-label-form-group controls">
                          <label class="sr-only control-label" for="email">You Email</label>
                          <input class="form-control input-lg" id="email" type="email" placeholder="You Email" required="" data-validation-required-message="Please enter email"><span class="help-block text-danger"></span>
                       </div>
                    </div>
                    <div class="control-group">
                       <div class="form-group floating-label-form-group controls">
                          <label class="sr-only control-label" for="phone">You Phone</label>
                          <input class="form-control input-lg" id="phone" type="tel" placeholder="You Phone" required="" data-validation-required-message="Please enter phone number"><span class="help-block text-danger"></span>
                       </div>
                    </div>
                    <div class="control-group">
                       <div class="form-group floating-label-form-group controls">
                          <label class="sr-only control-label" for="message">Message</label>
                          <textarea class="form-control input-lg" id="message" rows="2" placeholder="Message" required="" data-validation-required-message="Please enter a message." aria-invalid="false"></textarea><span class="help-block text-danger"></span>
                       </div>
                    </div>
                    <div id="success"></div>
                    <button class="btn btn-dark" type="submit">Send</button>
                 </form>
              </div>
           </div>
        </div>
     </section>
    
@endsection