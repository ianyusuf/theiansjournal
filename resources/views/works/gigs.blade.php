@extends('layouts.home')

@section('title')
    IAN'S | GIGS INDIE MUSIC
@endsection

@section('content')
    <title>GIGS INDIE MUSIC</title>
    <link rel="icon" type="image/ico" href="{{ asset('favicon.png') }}" />
    <link href="{{ asset('style.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet" />
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
                            <img class="black-logo" src="{{ asset('img/logo.png') }}" alt="Logo">
                            <img class="white-logo" src="{{ asset('img/logo-white.png') }}" alt="Logo">
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
                        <div id="hero" class="has-image">
                            <div id="hero-styles">
                                <div id="hero-caption" class="content-full-width parallax-scroll-caption">
                                    <div class="inner">
                                        <div class="hero-title-wrapper">
                                            <h1 class="hero-title">
                                                <span>GIGS</span>
                                                <span>INDIE MUSIC</span>
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
                                        <div class="color-white" id="info-text">hadyanyusuf@gmail.com</div>
                                    </div>
                                </div>                                    
                            </div>
                        </div>

                        <div id="hero-image-wrapper" class="">
                            <div id="hero-background-layer" class="parallax-scroll-image">
                                <div id="hero-bg-image" style="background-image:url({{ asset('img/works-detail/gigs/hero.jpg') }})"></div>
                            </div>
                        </div>

                        <div id="main-content">
                            <div id="main-page-content">
                                <div class="content-row row_padding_top row_padding_left row_padding_right row_padding_bottom full light-section change-header-color" data-bgcolor="#eee">
                                    <div class="pinned-section">
                                        <div class="pinned-element left">
                                            <h4>Overview</h4>
                                            <h5>
                                                Role
                                            </h5>
                                            <h6  style="margin-top:-20px">
                                                Visual Design<br>
                                                Website Developer<br>
                                            </h6>
                                            <h5>
                                                Timeline
                                            </h5>
                                            <h6  style="margin-top:-20px">
                                                2015-2017
                                            </h6>
                                        </div>
                                        
                                        <div class="scrolling-element right">
                                            <h4 class="has-mask">GIGS Indie Music is an online media platform for local music scene in Indonesia</h4>
                                            <p class="has-animation" data-delay="0">“They said to never judge a band's music until you see them live, and we live by that statment. We personally have experienced a bunch of great band gigs and stage play, surprisingly from our local Indonesian indie musiciansAnd we thought "Hey, all people should feel what we feel" and we brilliantly came with the idea that people (music, listeners, anwyay) should experience and feel the music that Indie bands provide.“<br>
                                            “At GIGS, we promise to provide you music listeners out there line ups of awesome band gigs, from hidden cafes to some of the big legendary stages with big indie names. Not only that, we will recommend you guys some of the greatest songs on the market we guarantee you wuld like. At GIGS, when we say it's good music, then we can assure you that it is effin' awesome. Then what are you waiting for? Start browsing now and breathe in the indie music that you know and love!” — GIGS © 2015
                                            </p>
                                        </div>
                                    </div>
                                    
                                    <hr><hr>

                                    <figure class="has-animation has-cover" data-delay="0">
                                        <a href="{{ asset('img/works-detail/gigs/picture-01.jpg') }}" class="image-link">
                                            <img src="{{ asset('img/works-detail/gigs/picture-01.jpg') }}" alt="Image Title">
                                        </a>
                                        <figcaption>GIGS Website Home Banner</figcaption>
                                    </figure>
                                    
                                    <hr><hr>

                                    <div class="one_half">
                                        <figure class="has-animation has-cover" data-delay="0">
                                            <a href="{{ asset('img/works-detail/gigs/picture-03.jpg') }}" class="image-link">
                                                <img src="{{ asset('img/works-detail/gigs/picture-03.jpg') }}" alt="Image Title"></a>
                                        </figure>
                                    </div>
                                    
                                    <div class="one_half last">
                                        <figure class="has-animation has-cover" data-delay="100">
                                            <a href="{{ asset('img/works-detail/gigs/picture-04.jpg') }}" class="image-link">
                                                <img src="{{ asset('img/works-detail/gigs/picture-04.jpg') }}" alt="Image Title"
                                                ></a>
                                        </figure>
                                    </div>

                                    <hr><hr>

                                    <div class="one_half">
                                        <figure class="has-animation has-cover" data-delay="0">
                                            <a href="{{ asset('img/works-detail/gigs/picture-05.jpg') }}" class="image-link">
                                                <img src="{{ asset('img/works-detail/gigs/picture-05.jpg') }}" alt="Image Title">
                                            </a>
                                        </figure>
                                    </div>
                                    
                                    <div class="one_half last">
                                        <figure class="has-animation has-cover" data-delay="100">
                                            <a href="{{ asset('img/works-detail/gigs/picture-06.jpg') }}" class="image-link">
                                                <img src="{{ asset('img/works-detail/gigs/picture-06.jpg') }}" alt="Image Title">
                                            </a>
                                        </figure>
                                    </div>
                                </div> 