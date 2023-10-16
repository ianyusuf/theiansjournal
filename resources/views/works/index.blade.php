@extends('layouts.home')

@section('title')
    IAN'S | WORKS
@endsection

@section('content')
    <link rel="icon" type="image/ico" href="favicon.png" />
    <link href="style.css" rel="stylesheet" />
    <link href="css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
</head>

<body class="hidden hidden-ball hero-below-caption smooth-scroll uppercase-text">
    <main>
        <div class="cd-index cd-main-content">
            <div id="page-content" class="light-content" data-bgcolor="#222">
                <header class="classic-menu invert-header" data-menucolor="#111">
                    <div id="header-container">
                        <div id="logo" class="hide-ball">
                            <a href="{{ url('/') }}">
                            <img class="black-logo" src="img/logo.png" alt="Logo">
                            <img class="white-logo" src="img/logo-white.png" alt="Logo">
                            </a>
                        </div>
                        <nav>
                            <div class="nav-height">
                                <div class="outer">
                                    <div class="inner">
                                        <ul data-breakpoint="1025" class="flexnav">
                                            <li class="link menu-timeline">
                                                <a href="{{ url('/') }}">
                                                    <div class="before-span">
                                                        <span data-hover="Home">Home</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="link menu-timeline">
                                                <a href="{{ url('works') }}">
                                                    <div class="before-span">
                                                        <span data-hover="Works">Works</span>
                                                    </div>
                                                </a>
                                                <ul>
                                                    <li>
                                                        <a href="{{ url('works/xlaxiata') }}">XL AXIATA</a>
                                                    </li>                                            
                                                    <li>
                                                        <a href="{{ url('works/lokalewedding') }}">LOKALE WEDDING</a>
                                                    </li>                                            
                                                    <li>
                                                        <a href="{{ url('works/icedu') }}">ICEDU INDONESIA</a>
                                                    </li>                                            
                                                    <li>
                                                        <a href="{{ url('works/gigs') }}">GIGS INDIE MUSIC</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="link menu-timeline">
                                                <a href="{{ url('about') }}">
                                                    <div class="before-span">
                                                        <span data-hover="About">About</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="link menu-timeline">
                                                <a href="{{ url('contact') }}">
                                                    <div class="before-span">
                                                        <span data-hover="Contact">Contact</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </nav>
                        <div class="button-wrap right menu burger-lines">
                            <div class="icon-wrap parallax-wrap">
                                <div class="button-icon parallax-element">
                                    <div id="burger-wrapper">
                                        <div id="menu-burger">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="button-text sticky right">
                                <span data-hover="Menu">Menu</span>
                            </div>
                        </div>
                    </div>
                </header>

                <div id="content-scroll">
                    <div id="main">
                        <div id="hero" class="half-page">
                            <div id="hero-styles">
                                <div id="hero-caption" class="content-full-width parallax-scroll-caption">
                                    <div class="inner">
                                        <div class="hero-title-wrapper">
                                            <h1 class="hero-title">
                                                <span>COLLECTION</span>
                                                <span>OF DESIGN WORKS</span>
                                            </h1>
                                        </div>                                    
                                    </div>
                                </div>
                                <div id="hero-footer">
                                    <div class="hero-footer-left">
                                        <div class="button-wrap right scroll-down">
                                            <div class="icon-wrap parallax-wrap">
                                                <div class="button-icon parallax-element">
                                                    <i class="arrow-icon-down"></i>
                                                </div>
                                            </div>
                                            <div class="button-text sticky right"><span data-hover="Scroll to Explore">Scroll to Explore</span></div> 
                                        </div>
                                    </div>
                                    <div class="hero-footer-right">
                                        <div id="info-text">HADYANYUSUF@GMAIL.COM</div>
                                    </div>
                                </div>                                   
                            </div>
                        </div>

                        <div id="main-page-content" class="content-max-width">
                            <div class="snap-slider-holder">                                
                                <div class="snap-slider-container" data-parallax="1">
                    				<div class="snap-slider-images">
                                        <div class="snap-slide">
                                        	<div class="img-mask">
                                                <div class="section-image">
                                                    <img src="img/works-page/xl-axiata.jpg" alt="">
                                                </div>                              
                                            </div>
                                        </div>
                                        
                                        <div class="snap-slide">
                                        	<div class="img-mask">
                                                <div class="section-image">
                                                    <img src="img/works-page/lokale-wedding.jpg" alt="">
                                                </div>                            
                                            </div>
                                        </div>                    
                                        
                                        <div class="snap-slide">
                                        	<div class="img-mask">
                                                <div class="section-image">
                                                    <img src="img/works-page/icedu.jpg" alt="">
                                                </div>                              
                                            </div>
                                        </div>
                                        
                                        <div class="snap-slide">
                                        	<div class="img-mask">
                                                <div class="section-image">
                                                    <img src="img/works-page/gigs-music-indie.jpg" alt="">
                                                </div>                              
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="snap-slider-captions">
                                    	<div class="snap-slide-caption change-header" data-color="#de2606">
                                        	<div class="outer">
                                                <a href="{{ url('works/xlaxiata') }}">
                                                    <div class="inner">
                                                        <div class="slide-title-wrapper">
                                                            <div class="slide-title trigger-item-link">
                                                                <span>XL Axiata</span>
                                                            </div>
                                                        </div>
                                                        <div class="slide-subtitle">
                                                            <span>2018 - 2022</span>
                                                            <span>Visual Design / User Experience</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <div class="snap-slide-caption" data-color="#444">
                                            <div class="outer">
                                                <a href="{{ url('works/lokalewedding') }}">
                                                    <div class="inner">
                                                        <div class="slide-title-wrapper">
                                                            <div class="slide-title trigger-item-link">
                                                                <span>Lokale Wedding</span>
                                                            </div>
                                                        </div>
                                                        <div class="slide-subtitle">
                                                            <span>2019 - 2020</span>
                                                            <span>Visual Design / Website Developer</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <div class="snap-slide-caption change-header" data-color="#462883">
                                            <div class="outer">
                                                <a href="{{ url('works/icedu') }}">
                                                    <div class="inner">
                                                        <div class="slide-title-wrapper">
                                                            <div class="slide-title trigger-item-link">
                                                                <span>ICEDU</span>
                                                            </div>
                                                        </div>
                                                        <div class="slide-subtitle">
                                                            <span>2018</span>
                                                            <span>Visual Design / Website Developer</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <div class="snap-slide-caption change-header" data-color="#000">
                                            <div class="outer">
                                                <a href="{{ url('works/gigs') }}">
                                                    <div class="inner">
                                                        <div class="slide-title-wrapper">
                                                            <div class="slide-title trigger-item-link">
                                                                <span>GIGS Indie</span>
                                                                <span>Music</span>
                                                            </div>
                                                        </div>
                                                        <div class="slide-subtitle">
                                                            <span>2015 - 2017</span>
                                                            <span>Visual Design / Website Developer</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                        			</div>
                    			</div>