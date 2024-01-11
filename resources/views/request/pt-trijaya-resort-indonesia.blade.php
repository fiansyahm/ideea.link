<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<title>{{$data->fullname}} Resume</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<meta name="description" content="Maxino is a personal portfolio HTML5 Maxino Template">
 	<meta name="keywords" content="Maxino, HTML5, portfolio, Template">
 	<meta name="author" content="CodexCoder">
	<link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre:300,400,500,700,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="{{ asset('theme/maxino/assets/css/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/maxino/assets/css/bootstrap-grid.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/maxino/assets/css/lightcase.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/maxino/assets/css/swiper.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/maxino/assets/css/icofont.min.css') }}">
	<link rel="shortcut icon" href="{{ asset('theme/maxino/assets/css/favicon.png') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/maxino/assets/css/style.css') }}">
</head>
<body>
	<div class="shape-top"></div>
	<div class="shape-bottom"></div>
	<!-- mobile-nav section start here -->
	<div class="mobile-menu">
		<nav class="mobile-header d-xl-none">
			<div class="header-logo">
				<a href="index.html" class="logo"><img src="{{ asset('theme/maxino/assets/images/logo/logo.gif')}}" alt="logo"></a>
			</div>
			<div class="header-bar" id="open-button">
	            <span></span>
	            <span></span>
	            <span></span>
	        </div>
		</nav>
		<div class="menu-wrap">
			<div class="morph-shape" id="morph-shape" data-morph-open="M-1,0h101c0,0,0-1,0,395c0,404,0,405,0,405H-1V0z">
				<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 100 800" preserveAspectRatio="none">
					<path d="M-1,0h101c0,0-97.833,153.603-97.833,396.167C2.167,627.579,100,800,100,800H-1V0z"/>
				</svg>
			</div>
			<nav class="menu">
				<div class="mobile-menu-area d-xl-none">
			        <div class="mobile-menu-area-inner" id="scrollbar">
		                <div class="header-bar m-menu-bar">
		                    <a href="index.html" class="logo"><img src="{{ asset('theme/maxino/assets/images/logo/logo.gif')}}" alt="logo"></a>
		                    <div class="close-button" id="close-button"></div>
		                </div>
			            <ul class="m-menu">
		                	<li><a href="#Banner">Home</a></li>
							<li><a href="#About">About Me</a></li>
							<li><a href="#Resume">Resume</a></li>
							<li><a href="#Services">Services</a></li>
							<li><a href="#Portfolio">Portfolio</a></li>
							<li><a href="#Pricing">Pricing</a></li>
							<li><a href="#Clients">Clients</a></li>
							<li><a href="#Blog">Blog</a></li>
							<li><a href="#Contact">Contact</a></li>
			            </ul>
		                <ul class="social-link-list d-flex flex-wrap">
		                    <li><a href="#" class="facebook"><i class="icofont-facebook"></i></a></li>
		                    <li><a href="#" class="twitter-sm"><i class="icofont-twitter"></i></a></li>
		                    <li><a href="#" class="linkedin"><i class="icofont-linkedin"></i></a></li>
		                    <li><a href="#" class="google"><i class="icofont-google-plus"></i></a></li>
		                </ul>
			        </div>
			    </div>
			</nav>
		</div>
	</div>
	<!-- mobile-nav section ending here -->

	<!-- header section start here -->
	<div class="header-section d-none d-xl-block">
		<div class="header">
			<nav class="primary-menu" id="navbar">
				<div class="container">
					<div class="menu-area">
						<div class="row no-gutters justify-content-between align-items-center">
							<div class="header-logo">
								<a href="index.html" class="logo"><img src="{{ asset('theme/maxino/assets/images/logo/logo.gif')}}" alt="logo"></a>
							</div>
							<ul class="main-menu d-flex">
								<li class="active"><a href="#Banner">Home</a></li>
								<li><a href="#About">About Me</a></li>
								<li><a href="#Resume">Resume</a></li>
								<li><a href="#Services">Services</a></li>
								<li><a href="#Portfolio">Portfolio</a></li>
								<li><a href="#Pricing">Pricing</a></li>
								<li><a href="#Clients">Clients</a></li>
								<li><a href="#Blog">Blog</a></li>
								<li><a href="#Contact">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</div>
	<!-- header section ending here -->
	<section class="banner" id="Banner">
		<div class="banner-area">
	        <div class="container">
	        	<div class="section-wrapper banner-wrapper">
		            <div class="row align-items-center">
		                <div class="col-lg-6 col-12">
		                    <div class="banner-content">
								<h1>Hello...</h1>
								<h1>I'm <span>{{$data->nickname}}</span> Grant A Professional</h1>
								<div class="dynamic-title cd-headline clip is-full-width">
									<h1 class="cd-words-wrapper" style="font-size: 30px">
										<b class="is-visible gold-title">{{$data->job}}</b>
										<b class="gold-title">{{$data->job}}</b>
										{{-- <b class="gold-title">Web Developer</b>
										<b class="gold-title">Web Designer</b> --}}
									</h1>
								</div>
								<a class="btn" href="{{$data->resume}}"><span>View My Resume</span><img src="{{ asset('theme/maxino/assets/images/icon/btn-1.png')}}" alt="icon" class="img-fluid"></a>
							</div>
		                </div>
		                <div class="col-lg-6 col-12">
		                    <div class="banner-thumb">
		                        <img src="{{$data->photo}}" alt="banner" class="img-fluid">
		                    </div>
		                </div>
		            </div>
	            </div>
	        </div>
	    </div>
    </section>

    <!-- box lay out -->
    <div class="box-shadow-style">
		<section class="banner-bottom">
			<div class="banner-bottom-pattan"></div>
			<div class="container">
				<div class="bottom-wrapper section-wrapper">
					<div class="post-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
						<div class="post-thumb">
							<img src="{{ asset('theme/maxino/assets/images/icon/01.png')}}" alt="banner">
						</div>
						<div class="post-content">
							<h5>Give me a Call</h5>
							<h5><span>{{$data->phone}}</span></h5>
						</div>
					</div>
					<div class="post-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
						<div class="post-thumb">
							<img src="{{ asset('theme/maxino/assets/images/icon/02.png')}}" alt="banner">
						</div>
						<div class="post-content">
							<h5>Send me a Message</h5>
							<h5><span>{{$data->email}}</span></h5>
						</div>
					</div>
					@if($data->address != null)
					<div class="post-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
						<div class="post-thumb">
							<img src="{{ asset('theme/maxino/assets/images/icon/03.png')}}" alt="banner">
						</div>
						<div class="post-content">
							<h5>Visit my address</h5>
							<h5><span>{{$data->address}}</span></h5>
						</div>
					</div>
					@endif
				</div>
			</div>
		</section>

		<section class="about padding-tb" id="About">
			<div class="particles" id="particles-js"></div>
			<div class="container">
				<div class="section-wrapper">
					<div class="about-left">
						<div class="title wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
							<h3>Welcome to My Portfolio</h3>
							<h2>Why <span>Many People</span> Love Us Believe My Awesome Services</h2>
						</div>
						<div class="about-thumb wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
							<img src="{{ asset('theme/maxino/assets/images/about/01.png')}}" alt="about" class="img-fluid">
						</div>
					</div>
					<div class="about-right">
						<div class="about-item">
							<div class="title">
								<span class="category wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">Hello World</span>
								<h2 class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">I am <span>{{$data->nickname}}</span> {{$data->job}}. </h2>
								<p class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">{{$data->aboutme}}</p>
							</div>
							<div class="about-content wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
								<ul>
									<li>
										<div class="name">
											<p>Name</p>
										</div>
										<div class="info">
											<p>{{$data->fullname}}</p>
										</div>
									</li>
									@if($data->birth != null)
									<li>
										<div class="name">
											<p>Date of Birth</p>
										</div>
										<div class="info">
											<p>{{$data->birth}}</p>
										</div>
									</li>
									@endif
									@if($data->email != null)
									<li>
										<div class="name">
											<p>Email</p> 
										</div>
										<div class="info">
											<p>{{$data->email}}</p>
										</div>
									</li>
									@endif
									@if($data->phone != null)
									<li>
										<div class="name">
											<p>Phone</p>
										</div>
										<div class="info">
											<p>{{$data->phone}}</p>
										</div>
									</li>
									@endif
									@if($data->nationality != null)
									<li>
										<div class="name">
											<p>Nationality</p>
										</div>
										<div class="info">
											<p>{{$data->nationality}}</p>
										</div>
									</li>
									@endif
									@if($data->address != null)
									<li>
										<div class="name">
											<p>Adress</p>
										</div>
										<div class="info">
											<p>{{$data->address}}</p>
										</div>
									</li>
									@endif
									@if($data->linkedin != null)
									<li>
										<div class="name">
											<p>Linkedin</p>
										</div>
										<div class="info">
											<p>{{$data->linkedin}}</p>
										</div>
									</li>
									@endif
								</ul>
							</div>
							<a class="btn wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s" href="{{$data->resume}}"><span>Download Resume</span><img src="{{ asset('theme/maxino/assets/images/icon/btn-1.png')}}" alt="icon" class="img-fluid"></a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div class="sponsor wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s" style="background-image: url(assets/images/sponsor/bg.png);">
			<div class="container">
				<div class="section-wrapper">
					<div class="sponsor-slider">
					    <div class="swiper-wrapper">
					      	<div class="swiper-slide">
					      		<div class="sponsor-item">
					      			<img src="{{ asset('theme/maxino/assets/images/sponsor/01.png')}}" alt="sponsor">
					      		</div>
					      	</div>
					      	<div class="swiper-slide">
					      		<div class="sponsor-item">
					      			<img src="{{ asset('theme/maxino/assets/images/sponsor/02.png')}}" alt="sponsor">
					      		</div>
					      	</div>
					      	<div class="swiper-slide">
					      		<div class="sponsor-item">
					      			<img src="{{ asset('theme/maxino/assets/images/sponsor/03.png')}}" alt="sponsor">
					      		</div>
					      	</div>
					      	<div class="swiper-slide">
					      		<div class="sponsor-item">
					      			<img src="{{ asset('theme/maxino/assets/images/sponsor/04.png')}}" alt="sponsor">
					      		</div>
					      	</div>
					      	<div class="swiper-slide">
					      		<div class="sponsor-item">
					      			<img src="{{ asset('theme/maxino/assets/images/sponsor/05.png')}}" alt="sponsor">
					      		</div>
					      	</div>
					      	<div class="swiper-slide">
					      		<div class="sponsor-item">
					      			<img src="{{ asset('theme/maxino/assets/images/sponsor/06.png')}}" alt="sponsor">
					      		</div>
					      	</div>
					    </div>
				  	</div>
				</div>
			</div>
		</div>


        <div class="container">
            <section class="history">
                <h1>Sejarah PT Trijaya Resort Indonesia</h1>
                <p>PT Trijaya Resort Indonesia didirikan pada tanggal 12 Oktober 2017 dengan tekad kuat untuk menjadi pelopor dalam industri resort dan wisata di Kota Lombok...</p>
                <h1 style="margin-top: 50px">Visi dan Misi PT Trijaya Resort Indonesia</h1>
                <p>Berawal dari visi untuk menghadirkan keindahan alam Lombok melalui layanan resort yang unik dan berkualitas, PT Trijaya Resort Indonesia lahir dengan semangat untuk menjadi destinasi terdepan bagi mereka yang mencari ketenangan, keindahan, dan kehangatan layanan.</p>
                <h1 style="margin-top: 50px">Pembangunan Resort</h1>
                <p>Seiring berjalannya waktu, kami dengan penuh dedikasi dan kerja keras telah membangun serta mengembangkan resort yang memadukan kemewahan dengan sentuhan kearifan lokal. Setiap detail diresapi oleh keindahan alam dan budaya Lombok, menciptakan ruang yang menenangkan dan pengalaman yang tak terlupakan bagi setiap tamu. </p>
                <h1 style="margin-top: 50px">Komitmennya pada Layanan Pelanggan</h1>
                <p>Komitmen kami terhadap kepuasan pelanggan tidak pernah berubah. Kami selalu berusaha untuk memberikan layanan terbaik, menjadikan setiap kunjungan sebagai pengalaman yang tak terlupakan. Dengan tim yang berdedikasi, kami berusaha menciptakan ikatan emosional antara tamu dan keindahan alam yang luar biasa di sekitar kami.</p>
                <h1 style="margin-top: 50px">Ekspansi dan Misi Masa Depan</h1>
                <p>Dengan keberhasilan yang telah kami raih, kami terus berkomitmen untuk mengembangkan dan memperluas operasi kami. Misi kami adalah untuk menjadi destinasi utama di industri resort dan wisata, tidak hanya di Lombok tetapi juga di tingkat nasional dan internasional.</p>
                <h1 style="margin-top: 50px">Terimakasih</h1>
                <p>Kami bersyukur kepada pelanggan, mitra, dan seluruh tim yang telah mendukung perjalanan PT Trijaya Resort Indonesia. Kami percaya bahwa dengan terus menerus berinovasi dan memberikan layanan terbaik, kami akan terus menjadi pilihan utama bagi mereka yang mencari pengalaman wisata yang istimewa di bawah langit biru Lombok.</p>
            </section>
        </div>

    </div>
    <!-- box lay out end -->

    

    <div class="footer">
    	<div class="container">
    		<div class="text-center">
	    		<a href="index.html" class="footer-logo wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s"><img src="{{ asset('theme/maxino/assets/images/logo/footer-logo.png')}}" alt="footer"></a>
	    		<p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
	    			&copy; 2019. Maxino Designed By <a href="https://themeforest.net/user/labartisan">LabArtisan</a>
	    		</p>
	    		<ul class="social-link-list wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
	    			<li>
	    				<a href="#"><i class="icofont-twitter"></i></a>
	    			</li>
	    			<li>
	    				<a href="#"><i class="icofont-vimeo"></i></a>
	    			</li>
	    			<li>
	    				<a href="#"><i class="icofont-rss"></i></a>
	    			</li>
	    			<li>
	    				<a href="#"><i class="icofont-dribbble"></i></a>
	    			</li>
	    			<li>
	    				<a href="#"><i class="icofont-instagram"></i></a>
	    			</li>
	    		</ul>
	    	</div>
    	</div>
    </div>

    <!-- scrollToTop start here -->
	<a href="#" class="scrollToTop"><i class="icofont-double-left"></i></a>
	<!-- scrollToTop ending here -->


  	<script src="{{ asset('theme/maxino/assets/js/jquery.js') }}"></script>
    <script src="{{ asset('theme/maxino/assets/js/snap.svg-min.js') }}"></script>
    <script src="{{ asset('theme/maxino/assets/js/classie.js') }}"></script>
    <script src="{{ asset('theme/maxino/assets/js/main3.js') }}"></script>
  	<script src="{{ asset('theme/maxino/assets/js/bootstrap.min.js') }}"></script>
  	<script src="{{ asset('theme/maxino/assets/js/particle.js') }}"></script>
  	<script src="{{ asset('theme/maxino/assets/js/swiper.min.js') }}"></script>
  	<script src="{{ asset('theme/maxino/assets/js/lightcase.js') }}"></script>
  	<script src="{{ asset('theme/maxino/assets/js/waypoints.min.js') }}"></script>
  	<script src="{{ asset('theme/maxino/assets/js/isotope.pkgd.min.js') }}"></script>
  	<script src="{{ asset('theme/maxino/assets/js/functions.js') }}"></script>
  	<script src="{{ asset('theme/maxino/assets/js/wow.min.js') }}"></script>
    <!-- Theia Post Slider -->
    <script src="{{ asset('theme/maxino/assets/js/theia-sticky-sidebar.js') }}"></script>
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyD0_px9okUgbB-KUyNvW59nfVKvU3tAmx0"></script>

    <script>
      	//Home Page map
        var styleArray = [
          {
            "featureType": "water",
            "elementType": "geometry.fill",
            "stylers": [
              {
                "color": "#f8f8f8"
              }
            ]
          }
        ];
        var mapOptions = {
          center: new google.maps.LatLng(23.739257,90.3869883),
          zoom: 15,
          styles: styleArray,
          scrollwheel: false,
          backgroundColor: 'transparent',
            mapTypeControl: false,          
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("gmap"),mapOptions);        
        var myLatlng = new google.maps.LatLng(23.739257,90.3869883);   
     	var marker = new google.maps.Marker({
		    position: myLatlng,
	      	map: map,
	      	icon: {
	        	url: "{{ asset('theme/maxino/assets/images/map/01.png')}}"
	      	}
	    });
    </script>
</body>
</html>