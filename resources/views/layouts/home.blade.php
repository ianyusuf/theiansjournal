<!DOCTYPE html>

<html lang="en-US">
<meta charset="UTF-8">
  	<head>
		<title>TENNIS JOURNAL</title>
		<meta name="keywords" content="@yield('title'), ICEDU, Indonesia, International Education Service, USA, Australia, China, UK, Canada, Malaysia, New Zealand, Singapore, Switzerland" />
		<meta name="description" content="Provide international education service to: USA, Australia, China, UK, Canada, Malaysia, New Zealand, Singapore, Switzerland" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="generator" content="International Education Service" />
		<meta name="googlebot" content="all" />
		<meta name="robots" content="index, follow" />
		<meta name="author" content="PT. Inti Cemerlang Edukasi" />
		<meta name="copyright" content="PT. Inti Cemerlang Edukasi, All Rights Reserved" />

		<link rel="shortcut icon" href="{{ asset('favicon.png') }}">

		<link rel='stylesheet' href="{{ asset('css/bootstrap.min.css') }}" type='text/css' media='all' />
		<link rel='stylesheet' href="{{ asset('css/style.css') }}" type='text/css' media='all' />
		<link rel='stylesheet' href="{{ asset('css/plugin.css') }}" type='text/css' media='all' />
		<link rel='stylesheet' href="{{ asset('css/font.css') }}" type='text/css' media='all' />
		<link rel='stylesheet' href="{{ asset('css/responsive.css') }}" type='text/css' media='all' />

		<script src="https://use.fontawesome.com/468b931427.js"></script>
		<script type='text/javascript' src="{{ asset('js/jquery.js') }}" id='jquery-core-js'></script>
    	<script type='text/javascript' src="{{ asset('js/jquery-migrate.js') }}" id='jquery-migrate-js'></script>
  	</head>
	<body class="home">
		<!-- TA Start Body -->
		<div id="preloader">
			<div id="status">&nbsp;</div>
		</div>
		<!-- MAIN WRAPPER  -->
		<div id="main-wrapper" class="clearfix">
			<!-- HEADER START -->
			<header id="header" class="site-header full-header clearfix">
				<div class="header-navigation">
					<div class="header-wrapper">
						<div class="logo col-md-2">
							<div class="logo-image">
								<a href="index.html">
									<img src="img/tj-logo-horizontal.png" class="image-logo" alt="logo" />
								</a>
							</div>
						</div>
						<div class="navigation col-md-10">
							<nav id="main-menu" class="menu">
								<ul id="menu-all-pages" class="sm menus">
									<li class="menu-item current-menu-item page_item current_page_item">
										<a href="index.html" aria-current="page">Home</a>
									</li>
									<li>
										<a href="#index.html">Journal</a>
										<ul class="sub-menu">
											<li>
												<a href="#index.html">Know The Basic</a>
											</li>
											<li>
												<a href="#index.html">Pick Your Racket</a>
											</li>
											<li>
												<a href="#index.html">What To Wear</a>
											</li>
											<li>
												<a href="#index.html">Equipment</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="#index.html">Court</a>
									</li>
									<li>
										<a href="#index.html">Community</a>
									</li>
									<li>
										<a href="#index.html">Contact</a>
									</li>
								</ul>
							</nav>
							<div class="mobile-menu">
								<button id="slide-buttons" class="fa fa-bars"></button>
							</div>
						</div>
						
						<nav id="c-menu--slide-right" class="c-menu c-menu--slide-right">
							<button class="c-menu__close fa fa-close"></button>
								<ul class="menus-mobile">
									<li class="">
										<a href="#index.html" aria-current="page">Home</a>
									</li>
									<li class="menu-item-has-children">
										<a href="#index.html">Journal</a>
										<ul class="sub-menu">
											<li class="menu-item menu-item-type-post_type">
												<a href="#index.html">Know The Basic</a>
											</li>
											<li class="menu-item menu-item-type-post_type">
												<a href="#index.html">Pick Your Racket</a>
											</li>
											<li class="menu-item menu-item-type-post_type">
												<a href="#index.html">What To Wear</a>
											</li>
											<li class="menu-item menu-item-type-post_type">
												<a href="#index.html">Equipment</a>
											</li>
										</ul>
									</li>
									<li class="menu-item menu-item-type-post_type menu-item-object-page">
										<a href="#index.html">Court</a>
									</li>
									<li >
										<a href="#index.html">Community</a>
									</li>
									<li>
										<a href="#index.html">Contact</a>
									</li>
								</ul>
							</nav>
						<div id="slide-overlay" class="slide-overlay"></div>
					</div>
				</div>
			</header>
			<!-- HEADER END -->

			@yield('content')
		
		</div>

		<!-- COPYRIGHT -->
		<div id="copyright">
			<div class="copyright-text">
				<p class="copyright-font">© 2022 TENNIS JOURNAL</p>
			</div>
			<div class="footer-social">
				<ul>
					<li class="instagram soc-icon">
						<a href="https://instagram.com/tennisjournal.id" target=”_blank” class="fa fa-instagram soc-icon"></a>
					</li>
					<!-- <li class="twitter soc-icon">
						<a href="http://twitter.com/#" class="fa fa-twitter soc-icon"></a>
					</li> -->
				</ul>
			</div>
		</div>
	</div>
	<!-- MAIN WRAPPER END -->

	<script type='text/javascript' src='js/plugin.js' id='tennis-journal-plugins-js'></script>
	<script type='text/javascript' src='js/main.js' id='tennis-journal-main-js'></script>
</body>
</html>