<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{$resume->name}} Resume</title>


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i%7CPoppins:300,400,500,600,700" rel="stylesheet">

    <!-- Flaticon -->
    <link href="{{ asset('theme/gentleman/assets/flat_icon/flaticon.css') }}" rel="stylesheet">

    <!-- Font-awesome -->
    <link href="{{ asset('theme/gentleman/assets/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="{{ asset('theme/gentleman/assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Lightcase -->
    <link href="{{ asset('theme/gentleman/assets/css/lightcase.css') }}" rel="stylesheet">

    <!-- Slick -->
    <link href="{{ asset('theme/gentleman/assets/css/slick.css') }}" rel="stylesheet">

    <!-- Slick theme -->
    <link href="{{ asset('theme/gentleman/assets/css/slick-theme.css') }}" rel="stylesheet">

    <!-- Style -->
    <link href="{{ asset('theme/gentleman/assets/css/style.css') }}" rel="stylesheet">

    <!-- Responsive -->
    <link href="{{ asset('theme/gentleman/assets/css/responsive.css') }}" rel="stylesheet">


  </head>
  <body data-spy="scroll">
    <!-- Preloader start here -->
    <div class="preloader">
      <div class="loader">
        <div class="ld-child"></div>
        <div class="ld-child ld-child2"></div>
      </div>
    </div>
    <!-- Preloader end here -->

    <div id="header" class="left_side_content">
      <div class="header_two">
        <button type="button" class="menu-toggle">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar first_icon"></span>
          <span class="icon-bar second_icon"></span>
          <span class="icon-bar third_icon"></span>
        </button>
        <div class="header_image">
          <a href="index.html"><img src="{{$resume->photo}}" alt="Logo" class="img-responsive"></a>
        </div>

        <ul class="left_menu nav">
          <li>
            <a class="page-scroll" href="#header">
              <div class="menu_item">
                <div class="menu_icon flaticon-web"></div>
                <div class="menu_content">
                  <h4>Home</h4>
                  <p>Start to know me</p>
                </div>
              </div>
            </a>
          </li>
          <li>
            <a class="page-scroll" href="#about">
              <div class="menu_item">
                <div class="menu_icon flaticon-people"></div>
                <div class="menu_content">
                  <h4>About Me</h4>
                  <p>Who i am</p>
                </div>
              </div>
            </a>
          </li>
          <li>
            <a class="page-scroll" href="#resume">
              <div class="menu_item">
                <div class="menu_icon flaticon-curriculum-vitae"></div>
                <div class="menu_content">
                  <h4>Resume</h4>
                  <p>My Previous Story</p>
                </div>
              </div>
            </a>
          </li>
          <li>
            <a class="page-scroll" href="#portfolio">
              <div class="menu_item">
                <div class="menu_icon flaticon-suitcase"></div>
                <div class="menu_content">
                  <h4>Portfolio</h4>
                  <p>My Latest Works</p>
                </div>
              </div>
            </a>
          </li>
          <li>
            <a class="page-scroll" href="#services">
              <div class="menu_item">
                <div class="menu_icon flaticon-24-hours-service"></div>
                <div class="menu_content">
                  <h4>Services</h4>
                  <p>What We Offer for You</p>
                </div>
              </div>
            </a>
          </li>
          <li>
            <a class="page-scroll" href="#blog">
              <div class="menu_item">
                <div class="menu_icon flaticon-blog-comment-speech-bubble-symbol"></div>
                <div class="menu_content">
                  <h4>Blog</h4>
                  <p>Great Pricing Plan</p>
                </div>
              </div>
            </a>
          </li>
          <li>
            <a class="page-scroll" href="#pricing">
              <div class="menu_item">
                <div class="menu_icon flaticon-symbol"></div>
                <div class="menu_content">
                  <h4>Pricing</h4>
                  <p>Great Pricing Plan</p>
                </div>
              </div>
            </a>
          </li>
          <li>
            <a class="page-scroll" href="#client">
              <div class="menu_item">
                <div class="menu_icon flaticon-blogger"></div>
                <div class="menu_content">
                  <h4>Clients</h4>
                  <p>Get in Touch</p>
                </div>
              </div>
            </a>
          </li>
          <li>
            <a class="page-scroll" href="#contact">
              <div class="menu_item">
                <div class="menu_icon flaticon-technology"></div>
                <div class="menu_content">
                  <h4>Contact</h4>
                  <p>Get in Touch</p>
                </div>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div><!-- left side content -->

    <div class="main_content">
      <!-- banner section start here -->
      <section id="banner" class="banner banner-02">
        <div class="body_container">
          <div class="banner_content">
            <h4>Hi There! I am</h4>
            <h2>{{$resume->name}}</h2>
            <p>{{$resume->job}}</p>
            <ul class="banner_social">
              @if($resume->linkedin != null)
              <li><a href="{{$resume->linkedin}}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              @endif
              @if($resume->instagram != null)
              <li><a href="{{$resume->instagram}}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              @endif
              @if($resume->facebook != null)
              <li><a href="{{$resume->facebook}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              @endif
              @if($resume->twitter != null)
              <li><a href="{{$resume->twitter}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              @endif
              @if($resume->github != null)
              <li><a href="{{$resume->github}}"><i class="fa fa-github" aria-hidden="true"></i></a></li>
              @endif
              {{-- <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li> --}}
            </ul>
          </div><!--banner content-->
        </div><!--body_container-->
      </section>
      <!-- banner section end here -->



      <!-- About section start here -->
      <section id="about" class="about about_two padding_140">
        <div class="body_container">
          <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="section_header">
                <h2>About Me</h2>
                <p><em>You can know who i am and what is my Hobbies. I hope it will
  help you for our Friendshiop. </em></p>
              </div><!-- section header -->
              <div class="about_details">
                <p>{{$resume->aboutme}}</p>
                {{-- <p>Progressively myocardinate state of the art ROI. Monotonectally disseminate unique methods of empowerment.</p> --}}
                <ul>
                  <li><p>Name<span>:</span></p> <span>{{$resume->name}}</span></li>
                  @if($resume->phone != null)
                  <li><p>Phone<span>:</span></p> <span>{{$resume->phone}}</span></li>
                  @endif
                  @if($resume->email != null)
                  <li><p>E-mail<span>:</span></p> <span> {{$resume->email}}</span></li>
                  @endif
                  @if($resume->address != null)
                  <li><p>Address<span>:</span></p> <span>{{$resume->address}}</span></li>
                  @endif
                  @if($resume->birth != null)
                  <li><p>Date of Birth<span>:</span></p> <span>{{$resume->birth}}</span></li>
                  @endif
                  @if($resume->website != null)
                  <li><p>Website<span>:</span></p> <span>{{$resume->website}}</span></li>
                  @endif
                  @if($resume->freelance != null)
                  <li><p>Freelance<span>:</span></p> <span>{{$resume->freelance}}</span></li>
                  @endif
                </ul>
              </div><!-- about details -->
            </div><!-- column -->
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="about_job">
                <h3>What can i Do</h3>
                <?php
                  // Konversi string JSON ke dalam bentuk array menggunakan json_decode
                  $canido = json_decode($resume->canido, true);
                ?>
                <ul>
                  @foreach ($canido['data'] as $item)
                    <li>
                      <span class="{{ $item['icon'] }}"></span>
                      <p>{{ $item['name'] }}</p>
                    </li>
                  @endforeach
                </ul>
              </div><!-- about job -->

              <div class="about_skills">
                <h3>My Skills</h3>
                <div class="skills_progress">
                  <?php
                    // Konversi string JSON ke dalam bentuk array menggunakan json_decode
                    $skill = json_decode($resume->skill, true);
                  ?>
                  @foreach ($skill['data'] as $item)
                  <div class="progress_item">
                    <p class="progress_title">{{ $item['name'] }}</p>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" data-transitiongoal="{{ $item['percentage'] }}"><span class="pg_indicator"></span>
                      </div>
                    </div>
                    <p class="progress_percent">{{ $item['percentage'] }}</p>
                  </div>
                  @endforeach

                </div><!-- skills progress -->
              </div><!-- about skills -->
            </div><!-- column -->
          </div><!--   -->
        </div><!-- body_container -->
      </section>
      <!-- About section end here -->



      <!-- Resume section start here -->
      <section id="resume" class="resume padding_140 bg_border">
        <div class="body_container">
          <div class="section_header">
            <h2>Resume</h2>
            <p><em>You can know who i am and what is my Hobbies. I hope it will
  help you for our Friendshiop. </em></p>
          </div><!-- section header -->

          <div class="resume_items">
            <div class="row">
              <div class="col-md-6 col-sm-12 col-xs-12">
                <h3>Educational Experience</h3>
                <div class="experiences left">

                  

                <?php
                    // Konversi string JSON ke dalam bentuk array menggunakan json_decode
                    $educational = json_decode($resume->educational, true);
                ?>
                  @foreach ($educational['data'] as $item)
                  <div class="experience">
                    <h4>{{ $item['degree'] }}</h4>
                    <p>{{ $item['university'] }} / <span>{{ $item['year'] }}</span></p>
                    <p class="ex_details">{{ $item['description'] }}.</p>
                  </div><!-- experience -->
                  @endforeach

                </div><!-- experience -->
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                <h3>Working Experience</h3>
                <div class="experiences right">

                  <?php
                      // Konversi string JSON ke dalam bentuk array menggunakan json_decode
                      $working = json_decode($resume->working, true);
                  ?>

                  @foreach ($working['data'] as $item)
                  <div class="experience">
                    <h4>{{ $item['position'] }}</h4>
                    <p>{{ $item['company'] }} / <span>{{ $item['year'] }}</span></p>
                    <p class="ex_details">{{ $item['description'] }}.</p>
                  </div><!-- experience -->
                  @endforeach

                </div><!-- experience -->
              </div>
            </div><!--   -->
          </div><!-- resume items -->
        </div><!-- body_container -->
      </section>
      <!-- Resume section end here -->



      <!-- Portfolio section start here -->
      <section id="portfolio" class="portfolio portfolio_two padding_140">
        <div class="body_container">
          <div class="section_header">
            <h2>Portfolio</h2>
          </div><!-- section header -->

          <ul class="portfolio_menu">
              <li class="active" data-filter="*">All Items</li>
              <li data-filter=".design">Design</li>
              <li data-filter=".photography">Photography</li>
              <li data-filter=".illustration">Illustration</li>
              <li data-filter=".vector">Vector</li>
          </ul>

          <div class="portfolio_items">
            <div class="portfolio_item design illustration">
              <div class="pos_rel">
                <img src="{{ asset('theme/gentleman/assets/images/portfolio_01.jpg')}}" alt="portfolio Image" class="img-responsive"/>
                <div class="overlay"></div>
                <div class="port_caption">
                  <a href="{{ asset('theme/gentleman/assets/images/portfolio_big_06.jpg')}}" class="image-icon" data-rel="lightcase:myCollection"  title="Project Title"><i class="fa fa-search" aria-hidden="true"></i></a>
                  <a href="{{ asset('theme/gentleman/assets/images/portfolio_big_01.jpg')}}"><i class="fa fa-link" aria-hidden="true"></i></a>
                  <h4>Project Title Goes Here</h4>
                  <p>Logo Design</p>
                </div>
              </div>
            </div><!-- portfolio item -->
            <div class="portfolio_item photography vector">
              <div class="pos_rel">
                <img src="{{ asset('theme/gentleman/assets/images/portfolio_02.jpg')}}" alt="portfolio Image" class="img-responsive"/>
                <div class="overlay"></div>
                <div class="port_caption">
                  <a href="{{ asset('theme/gentleman/assets/images/portfolio_big_02.jpg')}}" class="image-icon" data-rel="lightcase:myCollection"  title="Project Title"><i class="fa fa-search" aria-hidden="true"></i></a>
                  <a href="{{ asset('theme/gentleman/assets/images/portfolio_big_02.jpg')}}"><i class="fa fa-link" aria-hidden="true"></i></a>
                  <h4>Project Title Goes Here</h4>
                  <p>Photography</p>
                </div>
              </div>
            </div><!-- portfolio item -->
            <div class="portfolio_item design illustration">
              <div class="pos_rel">
                <img src="{{ asset('theme/gentleman/assets/images/portfolio_03.jpg')}}" alt="portfolio Image" class="img-responsive"/>
                <div class="overlay"></div>
                <div class="port_caption">
                  <a href="{{ asset('theme/gentleman/assets/images/portfolio_big_03.jpg')}}" class="image-icon" data-rel="lightcase:myCollection"  title="Project Title"><i class="fa fa-search" aria-hidden="true"></i></a>
                  <a href="{{ asset('theme/gentleman/assets/images/portfolio_big_03.jpg')}}"><i class="fa fa-link" aria-hidden="true"></i></a>
                  <h4>Project Title Goes Here</h4>
                  <p>Illustration</p>
                </div>
              </div>
            </div><!-- portfolio item -->
            <div class="portfolio_item  vector">
              <div class="pos_rel">
                <img src="{{ asset('theme/gentleman/assets/images/portfolio_04.jpg')}}" alt="portfolio Image" class="img-responsive"/>
                <div class="overlay"></div>
                <div class="port_caption">
                  <a href="{{ asset('theme/gentleman/assets/images/portfolio_big_04.jpg')}}" class="image-icon" data-rel="lightcase:myCollection"  title="Project Title"><i class="fa fa-search" aria-hidden="true"></i></a>
                  <a href="{{ asset('theme/gentleman/assets/images/portfolio_big_04.jpg')}}"><i class="fa fa-link" aria-hidden="true"></i></a>
                  <h4>Project Title Goes Here</h4>
                  <p>Vector</p>
                </div>
              </div>
            </div><!-- portfolio item -->
            <div class="portfolio_item design illustration">
              <div class="pos_rel">
                <img src="{{ asset('theme/gentleman/assets/images/portfolio_05.jpg')}}" alt="portfolio Image" class="img-responsive"/>
                <div class="overlay"></div>
                <div class="port_caption">
                  <a href="{{ asset('theme/gentleman/assets/images/portfolio_big_05.jpg')}}" class="image-icon" data-rel="lightcase:myCollection"  title="Project Title"><i class="fa fa-search" aria-hidden="true"></i></a>
                  <a href="{{ asset('theme/gentleman/assets/images/portfolio_big_05.jpg')}}"><i class="fa fa-link" aria-hidden="true"></i></a>
                  <h4>Project Title Goes Here</h4>
                  <p>Illustration</p>
                </div>
              </div>            
            </div><!-- portfolio item -->
            <div class="portfolio_item photography">
              <div class="pos_rel">
                <img src="{{ asset('theme/gentleman/assets/images/portfolio_06.jpg')}}" alt="portfolio Image" class="img-responsive"/>
                <div class="overlay"></div>
                <div class="port_caption">
                  <a href="{{ asset('theme/gentleman/assets/images/portfolio_big_06.jpg')}}" class="image-icon" data-rel="lightcase:myCollection"  title="Project Title"><i class="fa fa-search" aria-hidden="true"></i></a>
                  <a href="{{ asset('theme/gentleman/assets/images/portfolio_big_06.jpg')}}"><i class="fa fa-link" aria-hidden="true"></i></a>
                  <h4>Project Title Goes Here</h4>
                  <p>Photography</p>
                </div>
              </div>
            </div><!-- portfolio item -->
          </div><!-- portfolio items -->
          
        </div><!-- container -->
      </section>
      <!-- Portfolio section end here -->



      <!-- Services section start here -->
      <section id="services" class="services padding_140 bg_border">
        <div class="body_container">
          <div class="section_header">
            <h2>Services</h2>
            <p><em>You can know who i am and what is my Hobbies. I hope it will
  help you for our Friendshiop. </em></p>
          </div><!-- section header -->

          <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="service_item">
                <div class="service_icon flaticon-responsive-design-symbol"></div><!-- service icon -->
                <div class="service_details">
                  <h4>Web Design</h4>
                  <p>Globall morph 24/365 commerce whereas granular technologies. Completely impact.</p>
                </div><!-- service details -->
              </div><!-- service item -->
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="service_item">
                <div class="service_icon flaticon-technology-2"></div><!-- service icon -->
                <div class="service_details">
                  <h4>Web Development</h4>
                  <p>Globall morph 24/365 commerce whereas granular technologies. Completely impact.</p>
                </div><!-- service details -->
              </div><!-- service item -->
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="service_item">
                <div class="service_icon flaticon-layers-icon"></div><!-- service icon -->
                <div class="service_details">
                  <h4>Graphic Design</h4>
                  <p>Globall morph 24/365 commerce whereas granular technologies. Completely impact.</p>
                </div><!-- service details -->
              </div><!-- service item -->
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="service_item">
                <div class="service_icon flaticon-increasing-stocks-graphic"></div><!-- service icon -->
                <div class="service_details">
                  <h4>Internet Marketing</h4>
                  <p>Globall morph 24/365 commerce whereas granular technologies. Completely impact.</p>
                </div><!-- service details -->
              </div><!-- service item -->
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="service_item">
                <div class="service_icon flaticon-photo-camera-with-a-flash"></div><!-- service icon -->
                <div class="service_details">
                  <h4>Digital Photography</h4>
                  <p>Globall morph 24/365 commerce whereas granular technologies. Completely impact.</p>
                </div><!-- service details -->
              </div><!-- service item -->
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="service_item">
                <div class="service_icon flaticon-business-affiliate-network"></div><!-- service icon -->
                <div class="service_details">
                  <h4>Amazone Affiliate</h4>
                  <p>Globall morph 24/365 commerce whereas granular technologies. Completely impact.</p>
                </div><!-- service details -->
              </div><!-- service item -->
            </div>

          </div><!-- row -->
        </div><!-- body_container -->
      </section>
      <!-- Services section end here -->



      <!-- Blog section start here -->
      <section id="blog" class="blog padding_140">
        <div class="body_container">
          <div class="section_header">
            <h2>Recent Blog</h2>
            <p><em>You can know who i am and what is my Hobbies. I hope it will
  help you for our Friendshiop. </em></p>
          </div><!-- section header -->

          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="blog_item">
                <div class=" post-thumb">
                  <a href="single.html"><img src="{{ asset('theme/gentleman/assets/images/blog_01.jpg')}}" alt="Blog image" class="img-responsive"></a>
                </div><!-- blog image -->
                <div class=" content">
                  <h4><a href="single.html">Holisticly Incubate Enabled Value.</a></h4>
                  <p>Uniquely conceptualize visionary process improvements with tactical communities. Dramatically empower e-business action items without effective scenarios. Conveniently repurpose principle-centered quality vectors with out-of-the-box scenarios.</p>
                  <ul class="post-meta">
                    <li>Published on</li>
                    <li><a href="#">11 June 2016</a><span>|</span></li>
                    <li><a href="#">03 Comments</a></li>
                  </ul>
                </div><!-- blog details -->
              </div><!-- blog item -->
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="blog_item">
                <div class=" post-thumb">
                  <a href="single.html"><img src="{{ asset('theme/gentleman/assets/images/blog_02.jpg')}}" alt="Blog image" class="img-responsive"></a>
                </div><!-- blog image -->
                <div class=" content">
                  <h4><a href="single.html">Compellingly Foster Premium Benefits.</a></h4>
                  <p>Uniquely conceptualize visionary process improvements with tactical communities. Dramatically empower e-business action items without effective scenarios. Conveniently repurpose principle-centered quality vectors with out-of-the-box scenarios.</p>
                  <ul class="post-meta">
                    <li>Published on</li>
                    <li><a href="#">11 June 2016</a><span>|</span></li>
                    <li><a href="#">03 Comments</a></li>
                  </ul>
                </div><!-- blog details -->
              </div><!-- blog item -->

            </div>
          </div><!--   -->

        </div><!-- body_container -->
      </section>
      <!-- Blog section end here -->



      <!-- Pricing section start here -->
      <section id="pricing" class="pricing pricing_two padding_140 bg_border">
        <div class="body_container">
          <div class="section_header">
            <h2>Pricing Table</h2>
            <p><em>You can know who i am and what is my Hobbies. I hope it will
  help you for our Friendshiop. </em></p>
          </div><!-- section header -->

          <div class="pricing_item">
            <div class="pricing_title">
              <h3>Basic Plan</h3>
              <div class="pricing_icon flaticon-transport"></div>
            </div><!-- pricing title -->
            <div class="pricing_des">
            <span class="corner-style"></span>
            <span class="corner-style2"></span>
              <div>
                <p><span>Design Structure : </span>We must provide you the idea or  sketch files for design structure. You can design this as you like best.</p>
                <p><span>Images File : </span>We also provide you all the Image files.</p>
                <p><span>PSD Files : </span>You can’t access any PSD files</p>
                <p><span>HTML & CSS File : </span>No HTML & CSS files you can acces</p>
              </div>
            </div><!-- pricing description -->
            <div class="pricing_price">
              <h2><span>$</span>199</h2>
              <p>Per Month</p>
            </div><!-- pricing price -->
          </div><!-- pricing item -->

          <div class="pricing_item">
            <div class="pricing_title">
              <h3>Standard Plan</h3>
              <div class="pricing_icon flaticon-transport-1"></div>
            </div><!-- pricing title -->
            <div class="pricing_des">
            <span class="corner-style"></span>
            <span class="corner-style2"></span>
              <div>
                <p><span>Design Structure : </span>We must provide you the idea or  sketch files for design structure. You can design this as you like best.</p>
                <p><span>Images File : </span>We also provide you all the Image files.</p>
                <p><span>PSD Files : </span>You can’t access any PSD files</p>
                <p><span>HTML & CSS File : </span>No HTML & CSS files you can acces</p>
              </div>
            </div><!-- pricing description -->
            <div class="pricing_price">
              <h2><span>$</span>273</h2>
              <p>Per Month</p>
            </div><!-- pricing price -->
          </div><!-- pricing item -->

          <div class="pricing_item">
            <div class="pricing_title">
              <h3>Advance Plan</h3>
              <div class="pricing_icon flaticon-transport-2"></div>
            </div><!-- pricing title -->
            <div class="pricing_des">
            <span class="corner-style"></span>
            <span class="corner-style2"></span>
              <div>
                <p><span>Design Structure : </span>We must provide you the idea or  sketch files for design structure. You can design this as you like best.</p>
                <p><span>Images File : </span>We also provide you all the Image files.</p>
                <p><span>PSD Files : </span>You can’t access any PSD files</p>
                <p><span>HTML & CSS File : </span>No HTML & CSS files you can acces</p>
              </div>
            </div><!-- pricing description -->
            <div class="pricing_price">
              <h2><span>$</span>399</h2>
              <p>Per Month</p>
            </div><!-- pricing price -->
          </div><!-- pricing item -->

        </div><!-- body_container -->
      </section>
      <!-- Pricing section end here -->



      <!-- Client section start here -->
      <section id="client" class="client padding_140">
        <div class="body_container">
          <div class="section_header">
            <h2>My Clents</h2>
            <p><em>You can know who i am and what is my Hobbies. I hope it will
  help you for our Friendshiop. </em></p>
          </div><!-- section header -->

          <div class="client_items wow fadeInUp" data-wow-duration="2s">
            <div><img src="{{ asset('theme/gentleman/assets/images/client_01.jpg')}}" alt="client image" class="img-responsive"></div>
            <div><img src="{{ asset('theme/gentleman/assets/images/client_02.jpg')}}" alt="client image" class="img-responsive"></div>
            <div><img src="{{ asset('theme/gentleman/assets/images/client_03.jpg')}}" alt="client image" class="img-responsive"></div>
            <div><img src="{{ asset('theme/gentleman/assets/images/client_04.jpg')}}" alt="client image" class="img-responsive"></div>
            <div><img src="{{ asset('theme/gentleman/assets/images/client_01.jpg')}}" alt="client image" class="img-responsive"></div>
            <div><img src="{{ asset('theme/gentleman/assets/images/client_02.jpg')}}" alt="client image" class="img-responsive"></div>
            <div><img src="{{ asset('theme/gentleman/assets/images/client_03.jpg')}}" alt="client image" class="img-responsive"></div>
            <div><img src="{{ asset('theme/gentleman/assets/images/client_04.jpg')}}" alt="client image" class="img-responsive"></div>
          </div>
        </div><!-- body_container -->
      </section>
      <!-- Client section end here -->


      <!-- Contact section start here -->
      <section id="contact" class="contact padding_140 bg_border">
        <div class="body_container">
          <div class="section_header">
            <h2>Get in Touch</h2>
            <p><em>You can know who i am and what is my Hobbies. I hope it will
    help you for our Friendshiop. </em></p>
          </div><!-- section header -->
            
          <div class="contact_me">
            <div id="map_canvas"></div>

            <div class="contact_info">
              <div class="contact_item">
                <div class="contact_icon flaticon-telephone-of-old-design"></div>
                <div class="contact_details">
                  <p>+880 1234 567890</p>
                  <p>+880 9876 543210</p>
                </div>
              </div><!-- contact item -->
              <div class="contact_item">
                <div class="contact_icon flaticon-multimedia"></div>
                <div class="contact_details">
                  <p>contact@mymail.com</p>
                  <p>info@mymail.com</p>
                </div>
              </div><!-- contact item -->
              <div class="contact_item">
                <div class="contact_icon flaticon-home"></div>
                <div class="contact_details">
                  <p>Streop Rd, Peosur, phodux </p>
                  <p>Inner Road, USA.</p>
                </div>
              </div><!-- contact item -->
            </div><!-- contact info -->

            <form>
              <input type="text" name="name" placeholder="Name:" class="contact_input width_h">
              <input type="email" name="email" placeholder="Email:" class="contact_input width_h">
              <input type="text" name="subject" placeholder="Subject:" class="contact_input">
              <textarea rows="5" class="contact_input">Messege</textarea>
              <input type="submit" name="subit" value="Submit" class="contact_submit">
            </form>

          </div><!-- contact me -->
        </div>
      </section>
      <!-- Contact section end here -->



      <!-- Footer section start here -->
      <footer>
        <p>&#169; copyright <a href="#">Gantleman</a> 2016. All Right Reserved by <a href="#">Labartisan.</a></p>
      </footer>
      <!-- Footer section end here -->

    </div><!-- main content -->




    <!-- jQuery -->
    <script src="{{ asset('theme/gentleman/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('theme/gentleman/assets/js/bootstrap.min.js') }}" type="text/javascript"></script>

    
    <!-- Bootstrap Progressbar -->
    <script src="{{ asset('theme/gentleman/assets/js/bootstrap-progressbar.js') }}"></script>

    <!-- Isotop -->
    <script src="{{ asset('theme/gentleman/assets/js/isotope.pkgd.min.js') }}"></script>

    <!-- Lightcase -->
    <script src="{{ asset('theme/gentleman/assets/js/lightcase.js') }}"></script>

    <!-- Easing -->
    <script src="{{ asset('theme/gentleman/assets/js/jquery.easing.min.js') }}"></script>

    <!-- Slick -->
    <script src="{{ asset('theme/gentleman/assets/js/slick.js') }}"></script>

    <!-- Google Map -->
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAQlXnmyNPAeN3c3HNyWoUMqDk6bDF31Cg') }}"></script>

    <!-- Custom -->
    <script src="{{ asset('theme/gentleman/assets/js/custom.js') }}"></script>


  </body>
</html>