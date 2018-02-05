<!DOCTYPE html>
<html lang="en-US" >
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<meta charset="UTF-8">
	<title>ICEDU | @yield('title')</title>
	<meta name="keywords" content="@yield('title'), ICEDU, Indonesia, International Education Service, USA, AUSTRALIA, CHINA, ENGLAND, CANADA, MALAYSIA, NEW ZEALAND, SINGAPORE, SWITZERLAND" />
	<meta name="description" content="Provide international education service to: USA, AUSTRALIA, CHINA, ENGLAND, CANADA, MALAYSIA, NEW ZEALAND, SINGAPORE, SWITZERLAND" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="generator" content="International Education Service" />
	<meta name="googlebot" content="all" />
	<meta name="robots" content="index, follow" />
	<meta name="author" content="PT. Inti Cemerlang Edukasi" />
	<meta name="copyright" content="PT. Inti Cemerlang Edukasi, All Rights Reserved" />

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

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113350712-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-113350712-1');
	</script>
</head>

<body>
	<div class="super_container">
		<header class="header">
			<div class="header_content">
				<div class="logo_container">
					<a href="{{ url('/') }}">
						<div class="logo">
							<img src="../img/logo.png" class="img-responsive" id="logo">
						</div>
					</a>
				</div>
				<div class="home_nav">
					<ul>
						<li class="link-braces"><a href="{{ url('/') }}">home</a></li>
						<li class="link-braces"><a href="{{ url('about') }}">about us</a></li>
						<li class="link-braces"><a href="{{ url('service') }}">service</a></li>
						<li class="link-braces"><a href="{{ url('overseas') }}">study overseas</a></li>
						<li class="link-braces"><a href="{{ url('contact') }}">contact us</a></li>
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

		<div id="footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="footer_text_center">&copy; 2017 PT. Inti Cemerlang Edukasi</p>
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
							<li><a href="https://www.instagram.com/iceduindo/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="https://www.facebook.com/IC-Education-131216864249341/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
						</ul>
						<div class="fs_menu_logo">ICEDU</div>
					</div>
				</div>
				<div class="fs_menu_right"></div>
				<div class="fs_nav">
					<ul>
						<li><a href="{{ url('/') }}">home</a></li>
						<li><a href="{{ url('about') }}">about us</a></li>
						<li><a href="{{ url('service') }}">service</a></li>
						<li><a href="{{ url('overseas') }}">study overseas</a></li>
						<li><a href="{{ url('contact') }}">contact us</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

<script type='text/javascript' src="{{ asset('plugins/overseas/jquery-2.2.4.js') }}"></script>
<script type='text/javascript' src="{{ asset('plugins/overseas/bootstrap.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('plugins/overseas/plugins.js') }}"></script>
<script type='text/javascript' src="{{ asset('plugins/overseas/functions.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('plugins/greensock/TweenMax.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('plugins/greensock/animation.gsap.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('plugins/parallaxslider/parallaxslider.js') }}"></script>
<script type='text/javascript' src="{{ asset('plugins/parallax.js-1.4.2/parallax.js') }}"></script>
<script type='text/javascript' src="{{ asset('plugins/parallax.js/parallax.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('js/custom.js') }}"></script>

</body>
</html>