@extends('layouts.home')

@section('title')
    IAN'S | ICEDU INDONESIA
@endsection

@section('content')
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
                                                <span>ICEDU</span>
                                                <span>INDONESIA</span>
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
                                <div id="hero-bg-image" style="background-image:url({{ asset('img/works-detail/icedu/hero.jpg') }})"></div>
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
                                                2018
                                            </h6>
                                        </div>
                                        
                                        <div class="scrolling-element right">
                                            <h4 class="has-mask">ICEDU is an overseas education consultant</h4>
                                            <p class="has-animation" data-delay="0">ICedu is an overseas education consultant based in Jakarta Indonesia. We focus to provide professional consultations to students wishing to study overseas and our overseas partner institutions reaching potential local institutions partnerships.<br>
                                            We offer guidance to students to choose appropriate major, high school or university based on their profiles. Armed with trained education and career advisors, we offer each student personalized attention and services. We ensure that students’ applications for admissions are well prepared and well presented. Our role is to connect students with high schools and university worldwide. We connect our overseas partner institutions with the local institutions through partnerships or enrichment programs as well as recruitments for future students.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="content-row row_padding_left row_padding_right row_padding_bottom full light-section change-header-color" data-bgcolor="#eee">
                                    <figure class="has-animation has-cover" data-delay="0">
                                        <a href="{{ asset('img/works-detail/icedu/picture-02.png') }}" class="image-link">
                                            <img src="{{ asset('img/works-detail/icedu/picture-02.png') }}" alt="Image Title">
                                        </a>
                                        <figcaption>ICEDU Website Home Banner</figcaption>
                                    </figure>
                                </div> 

                                <div class="content-row row_padding_left row_padding_right row_padding_bottom full light-section change-header-color" data-bgcolor="#eee">
                                    <div class="one_half">
                                        <figure class="has-animation has-cover" data-delay="0">
                                            <a href="{{ asset('img/works-detail/icedu/picture-03.png') }}" class="image-link">
                                                <img src="{{ asset('img/works-detail/icedu/picture-03.png') }}" alt="Image Title"
                                                >
                                            </a>
                                        </figure>
                                    </div>
                                    
                                    <div class="one_half last">
                                        <figure class="has-animation has-cover" data-delay="100">
                                            <a href="{{ asset('img/works-detail/icedu/picture-05.png') }}" class="image-link">
                                                <img src="{{ asset('img/works-detail/icedu/picture-05.png') }}" alt="Image Title">
                                            </a>
                                        </figure>
                                    </div>

                                    <hr><hr>

                                    <div class="one_half">
                                        <figure class="has-animation has-cover" data-delay="100">
                                            <a href="{{ asset('img/works-detail/icedu/picture-10.png') }}" class="image-link">
                                                <img src="{{ asset('img/works-detail/icedu/picture-10.png') }}" alt="Image Title">
                                            </a>
                                        </figure>
                                        
                                        <hr>

                                        <figure class="has-animation has-cover" data-delay="100">
                                            <a href="{{ asset('img/works-detail/icedu/picture-07.png') }}" class="image-link">
                                                <img src="{{ asset('img/works-detail/icedu/picture-07.png') }}" alt="Image Title">
                                            </a>
                                        </figure>
                                    </div>

                                    <div class="one_half last">
                                        <figure class="has-animation has-cover" data-delay="0">
                                            <a href="{{ asset('img/works-detail/icedu/picture-06.png') }}" class="image-link">
                                                <img src="{{ asset('img/works-detail/icedu/picture-06.png') }}" alt="Image Title">
                                            </a>
                                        </figure>

                                        <hr>

                                        <figure class="has-animation has-cover" data-delay="100">
                                            <a href="{{ asset('img/works-detail/icedu/picture-08.png') }}" class="image-link">
                                                <img src="{{ asset('img/works-detail/icedu/picture-08.png') }}" alt="Image Title">
                                            </a>
                                        </figure>
                                    </div>
                                </div> 