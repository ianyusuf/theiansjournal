<!DOCTYPE html>
<html lang="en-US" >
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
<meta charset="UTF-8">
<title>ICEDU | @yield('title')</title>
<meta name="keywords" content="@yield('title'), Jadwal, Konser, Acara, Musik, Terbaru, Panggung, Kelompok, Indie, Indonesia, Jakarta, Gigs" />
<meta name="description" content="Discover Indie GIGS" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="generator" content="GIGS Jadwal Konser Musik Indie Terbaru Indonesia" />
<meta name="googlebot" content="all" />
<meta name="robots" content="index, follow" />
<meta name="author" content="GIGS, Hadyan Yusuf, Radin Raihanda, Devananda" />
<meta name="copyright" content="gigs.co.id, All Rights Reserved" />

<link rel="shortcut icon" href="{{ asset('favicon.png') }}">

<link rel='stylesheet' href="{{ asset('css/bootstrap/bootstrap.css') }}" type='text/css' media='all' />
<link rel='stylesheet' href="{{ asset('css/style.css') }}" type='text/css' media='all' />
<link rel='stylesheet' href="{{ asset('css/responsive.css') }}" type='text/css' media='all' />
<link rel='stylesheet' href="{{ asset('plugins/ionicons-2.0.1/ionicons.css') }}" type='text/css' media='all' />
<link rel='stylesheet' href="{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" type='text/css' media='all' />
<link rel='stylesheet' href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}" type='text/css' media='all' />
<link rel='stylesheet' href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}" type='text/css' media='all' />
<link rel='stylesheet' href="{{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}" type='text/css' media='all' />
<link rel='stylesheet' href="{{ asset('plugins/nivo/nivo-slider.css') }}" type='text/css' media='all' />
<link rel='stylesheet' href="{{ asset('plugins/magnific-popup/magnific-popup.css') }}" type='text/css' media='all' />
<link rel='stylesheet' href="{{ asset('plugins/parallaxslider/parallaxslider.css') }}" type='text/css' media='all' />
</head>

<body>

<div class="super_container">
	
	<!-- HEADER AND MENU -->

	<header class="header">
		<div class="header_content">
			<div class="logo_container">
				<a href="{{ url('/') }}">
					<div class="logo"><img src="img/logo.png" class="img-responsive"></div>
				</a>
			</div>
			<div class="home_nav">
				<ul>
					<li class="link-braces"><a href="{{ url('/') }}">home</a></li>
					<li class="link-braces"><a href="{{ url('about-us') }}">about us</a></li>
					<li class="link-braces"><a href="{{ url('service') }}">service</a></li>
					<li class="link-braces"><a href="{{ url('study-overseas') }}">study overseas</a></li>
					<li class="link-braces"><a href="{{ url('contact-us') }}">contact us</a></li>
				</ul>
			</div>
		</div>
	</header>
	
	<div class="hamburger_container_outer">
		<div class="hamburger_container">
			<div class="hamburger">
				<div></div>
				<div></div>
			</div>
		</div>
	</div>

	@yield('content')

	<!--<div id="footer" class="clearfix">
		<div class="footer_content">
			<div class="footer_copy">
				<div>2017</div>
				<div>Copyright 	&copy; SWIFT design agency</div>
			</div>
			<div class="footer_logo_container">
				<div class="logo_container">
					<div class="logo logo_a">swi</div>
					<div class="logo logo_b">ft.</div>
				</div>
			</div>
		</div>
		<div class="footer_social">
			<ul>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>

	<div class="fs_menu_overlay">
		<div class="fs_menu_overlay_inner">
			<div class="fs_menu_close_container">
				<div class="fs_menu_hamburger">
					<div></div>
					<div></div>
				</div>
			</div>
			<div class="fs_menu_left">
				<div class="fs_menu_left_inner">
					<ul class="fs_menu_social">
						<li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
					</ul>
					<div class="fs_menu_logo">swift</div>
				</div>
			</div>
			<div class="fs_menu_right"></div>
			<div class="fs_nav">
				<ul>
					<li><a href="#" class="fs_nav_links" data-scroll-to="#home">home</a></li>
					<li><a href="about.html">about</a></li>
					<li><a href="work.html">work</a></li>
					<li><a href="blog_index.html">blog</a></li>
					<li><a href="contact.html">contact</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<p class="footer_text">PT. Inti Cemerland Edukasi</p>
				</div>
				<div class="col-lg-6">
					<p class="footer_text_right">&copy; 2017 by S H</p>
				</div>
			</div>
		</div>	
	</div>-->

	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="footer_text_center">&copy; 2017 PT. Inti Cemerland Edukasi</p>
				</div>
			</div>
		</div>	
	</div>
	
	<div class="fs_menu_overlay">
		<div id="scene">
			<div class="layer" data-depth="0.50"><div class="about_background"></div></div>
		</div>
		<div class="fs_menu_overlay_inner">
			<div class="fs_menu_close_container">
				<div class="fs_menu_hamburger">
					<div></div>
					<div></div>
				</div>
			</div>
			<div class="fs_menu_left">
				<div class="fs_menu_left_inner">
					<ul class="fs_menu_social">
						<li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
					</ul>
					<div class="fs_menu_logo">swift</div>
				</div>
			</div>
			<div class="fs_menu_right"></div>
			<div class="fs_nav">
				<ul>
					<li><a href="#" class="fs_nav_links" data-scroll-to="#home">home</a></li>
					<li><a href="about.html">about</a></li>
					<li><a href="work.html">work</a></li>
					<li><a href="blog_index.html">blog</a></li>
					<li><a href="contact.html">contact</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<script type='text/javascript' src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/bootstrap.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/polyfill.js') }}"></script>
<script type='text/javascript' src="{{ asset('plugins/greensock/TweenMax.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('plugins/greensock/TimelineMax.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('plugins/greensock/animation.gsap.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('plugins/greensock/ScrollToPlugin.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
<script type='text/javascript' src="{{ asset('plugins/nivo/jquery.nivo.slider.js') }}"></script>

<script type='text/javascript' src="{{ asset('plugins/parallaxslider/jquery.velocity.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('plugins/charming/charming.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('plugins/parallaxslider/parallaxslider.js') }}"></script>
<script type='text/javascript' src="{{ asset('plugins/magnific-popup/jquery.magnific-popup.min.js/jquery-3.2.1.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('plugins/parallax.js-1.4.2/parallax.js') }}"></script>
<script type='text/javascript' src="{{ asset('plugins/parallax.js/parallax.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('plugins/easing/easing.js') }}"></script>
<script type='text/javascript' src="{{ asset('plugins/scrollTo/jquery.scrollTo.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/custom.js') }}"></script>

</body>
</html>