@extends('home.layouts.master')
@section('content')
    <!-- Page Content Buraya Gelecek -->

    <header class="intro" data-background="{{asset ('home/img/main/29.jpg')}}">
        <div class="intro-body">
           <h4>Art Director & Entrepreneur</h4>
           <h1>Paul Unibody</h1>
           <a class="page-scroll" href="#about"><span class="mouse"><span><i class="icon ion-ios-arrow-down"></i></span></span></a>
        </div>
     </header>
     <!-- About Personal Section-->
     <section class="bg-dark2" id="about">
        <div class="container">
           <div class="row">
              <div class="col-lg-6">
                 <h3>About Me</h3>
                 <p class="no-pad">Hi there. I'm P. Unibody. Art Director & Entrepreneur. My interests include cognitive psychology, web coding, and graphic design. I am a qualified multimedia designer, specializing in interface and information design, concept development and brand identity.</p>
                 <h2 class="classic">- P. Unibody</h2>
              </div>
              <div class="col-lg-5 col-lg-offset-1">
                 <h3>&nbsp;</h3>
                 <div class="circle" data-thickness="4" data-value="0.93">
                    <span></span>
                    <div class="agenda">Design</div>
                 </div>
                 <div class="circle" data-thickness="10" data-value="0.82">
                    <span></span>
                    <div class="agenda">Programming</div>
                 </div>
                 <div class="circle" data-thickness="18" data-value="0.68">
                    <span></span>
                    <div class="agenda">Photography</div>
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
                 <h4><i class="icon-big icon ion-ios-game-controller-b-outline"></i> i'm creative</h4>
                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis pulvinar vestibulum. Donec eleifend, sem sed dictum</p>
              </div>
              <div class="col-lg-3 col-sm-6 wow fadeIn" data-wow-delay=".4s">
                 <h4><i class="icon-big ion-ios-nutrition-outline"></i> i'm experienced</h4>
                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis pulvinar vestibulum. Donec eleifend, sem sed dictum</p>
              </div>
              <div class="col-lg-3 col-sm-6 wow fadeIn" data-wow-delay=".6s">
                 <h4><i class="icon-big ion-ios-lightbulb-outline"></i> i have a dream</h4>
                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis pulvinar vestibulum. Donec eleifend, sem sed dictum</p>
              </div>
              <div class="col-lg-3 col-sm-6 wow fadeIn" data-wow-delay=".8s">
                 <h4><i class="icon-big ion-ios-people-outline"></i> I'm communicative</h4>
                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis pulvinar vestibulum. Donec eleifend, sem sed dictum</p>
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
                 <p>The collaborative process of web development requires close integration of technology and design - two disciplines that inform one another.</p>
                 <h2 class="no-pad classic">Jeny Elkind</h2>
              </div>
           </div>
        </div>
     </section>
     <!-- Portfolio-->
     <section class="no-pad-btm" id="portfolio">
        <div class="container text-center">
           <div class="row">
              <div class="col-sm-10 col-sm-offset-1">
                 <h3>My Works</h3>
                 <ul class="portfolio-sorting list-inline text-center">
                    <li><a class="active" href="portfolio-single.html" data-group="all">All</a></li>
                    <li><a href="portfolio-single.html" data-group="design">Design</a></li>
                    <li><a href="portfolio-single.html" data-group="photo">Photo</a></li>
                    <li><a href="portfolio-single.html" data-group="branding">Branding</a></li>
                 </ul>
              </div>
           </div>
        </div>
        <div class="container-fluid">
           <div class="row portfolio-items" id="grid">
              <div class="col-md-3 col-sm-6 no-pad" data-groups="[&quot;branding&quot;, &quot;design&quot;]">
                 <div class="portfolio-item">
                    <a href="portfolio-single.html">
                       <img src="{{asset('home/img/main/41.jpg')}}" alt="">
                       <div class="portfolio-overlay">
                          <div class="caption">
                             <h5>Form Image Creative</h5>
                             <span>Lorem ipsum dolor sit amet</span>
                          </div>
                       </div>
                    </a>
                 </div>
              </div>
              <div class="col-md-3 col-sm-6 no-pad" data-groups="[&quot;photo&quot;, &quot;branding&quot;]">
                 <div class="portfolio-item">
                    <a href="portfolio-single.html">
                       <img src="{{asset('home/img/main/42.jpg')}}" alt="">
                       <div class="portfolio-overlay">
                          <div class="caption">
                             <h5>Form Image Creative</h5>
                             <span>Lorem ipsum dolor sit amet</span>
                          </div>
                       </div>
                    </a>
                 </div>
              </div>
              <div class="col-md-3 col-sm-6 no-pad" data-groups="[&quot;&quot;]">
                 <div class="portfolio-item">
                    <a href="portfolio-single.html">
                       <img src="{{asset('home/img/main/34.jpg')}}" alt="">
                       <div class="portfolio-overlay">
                          <div class="caption">
                             <h5>Form Image Creative</h5>
                             <span>Lorem ipsum dolor sit amet</span>
                          </div>
                       </div>
                    </a>
                 </div>
              </div>
              <div class="col-md-3 col-sm-6 no-pad" data-groups="[&quot;design&quot;, &quot;photo&quot;]">
                 <div class="portfolio-item">
                    <a href="portfolio-single.html">
                       <img src="{{asset('home/img/main/38.jpg')}}" alt="">
                       <div class="portfolio-overlay">
                          <div class="caption">
                             <h5>Form Image Creative</h5>
                             <span>Lorem ipsum dolor sit amet</span>
                          </div>
                       </div>
                    </a>
                 </div>
              </div>
              <div class="col-md-3 col-sm-6 no-pad" data-groups="[&quot;branding&quot;, &quot;design&quot;]">
                 <div class="portfolio-item">
                    <a href="portfolio-single.html">
                       <img src="{{asset('home/img/main/21.jpg')}}" alt="">
                       <div class="portfolio-overlay">
                          <div class="caption">
                             <h5>Form Image Creative</h5>
                             <span>Lorem ipsum dolor sit amet</span>
                          </div>
                       </div>
                    </a>
                 </div>
              </div>
              <div class="col-md-3 col-sm-6 no-pad" data-groups="[&quot;photo&quot;, &quot;design&quot;, &quot;branding&quot;]">
                 <div class="portfolio-item">
                    <a href="portfolio-single.html">
                       <img src="{{asset('home/img/main/40.jpg')}}" alt="">
                       <div class="portfolio-overlay">
                          <div class="caption">
                             <h5>Form Image Creative</h5>
                             <span>Lorem ipsum dolor sit amet</span>
                          </div>
                       </div>
                    </a>
                 </div>
              </div>
              <div class="col-md-3 col-sm-6 no-pad" data-groups="[&quot;photo&quot;]">
                 <div class="portfolio-item">
                    <a href="portfolio-single.html">
                       <img src="{{asset('home/img/main/43.jpg')}}" alt="">
                       <div class="portfolio-overlay">
                          <div class="caption">
                             <h5>Form Image Creative</h5>
                             <span>Lorem ipsum dolor sit amet</span>
                          </div>
                       </div>
                    </a>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <div class="section-small action bg-gray text-center"><a class="btn btn-dark-border" href="portfolio-masonry-4.html">View All Portfolio</a></div>
     <!-- Facts section-->
     <section class="facts section-small bg-img">
        <div class="overlay"></div>
        <div class="container text-center">
           <div class="row">
              <div class="col-sm-3">
                 <span class="numscroller" data-min="0" data-max="29" data-delay="5" data-increment="1">0</span>
                 <h5 class="no-pad">Themes released</h5>
              </div>
              <div class="col-sm-3">
                 <span class="numscroller" data-min="0" data-max="2785" data-delay="5" data-increment="3">0</span>
                 <h5 class="no-pad">Happy Customers</h5>
              </div>
              <div class="col-sm-3">
                 <span class="numscroller" data-min="0" data-max="12" data-delay="5" data-increment="1">0</span>
                 <h5 class="no-pad">Winning awards</h5>
              </div>
              <div class="col-sm-3">
                 <span class="numscroller" data-min="0" data-max="78" data-delay="5" data-increment="1">0</span>
                 <h5 class="no-pad">Completed project</h5>
              </div>
           </div>
        </div>
     </section>
     <!-- Blog-->
     <section class="bg-gray">
        <div class="container">
           <h3 class="pull-left">MY BLOG</h3>
           <div class="pull-right">
              <h5><a href="news3.html">SEE ALL</a></h5>
           </div>
           <div class="clearfix"></div>
           <div class="row grid-pad">
              <div class="col-sm-4">
                 <a href="news-single-sidebar.html">
                    <img class="img-responsive center-block" src="{{asset('home/img/main/5.jpg')}}" alt="">
                    <h5>sem sed dictum mattis, turpis purus</h5>
                 </a>
                 <p>Lorem ipsum dolor sit amet, consectetur elit. Nulla convallis pulvinar vestibulum. Donec eleifend, sem sed dictum mattis, turpis purus.</p>
                 <a class="btn btn-dark-border btn-xs" href="news-single.html">Read more</a>
              </div>
              <div class="col-sm-4">
                 <a href="news-single-sidebar.html">
                    <img class="img-responsive center-block" src="{{asset('home/img/main/6.jpg')}}" alt="">
                    <h5>Nulla convallis pulvinar vestibulum</h5>
                 </a>
                 <p>Lorem ipsum dolor sit amet, consectetur elit. Nulla convallis pulvinar vestibulum. Donec eleifend, sem sed dictum mattis, turpis purus.</p>
                 <a class="btn btn-dark-border btn-xs" href="news-single.html">Read more</a>
              </div>
              <div class="col-sm-4">
                 <a href="news-single-sidebar.html">
                    <img class="img-responsive center-block" src="{{asset('home/img/main/21.jpg')}}" alt="">
                    <h5>o tempora, o mores. sem sed dictum</h5>
                 </a>
                 <p>Lorem ipsum dolor sit amet, consectetur elit. Nulla convallis pulvinar vestibulum. Donec eleifend, sem sed dictum mattis, turpis purus.</p>
                 <a class="btn btn-dark-border btn-xs" href="news-single.html">Read more</a>
              </div>
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
                 <form id="contactForm" name="sentMessage" novalidate="">
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