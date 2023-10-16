@extends('layouts.home')

@section('title')
    IAN'S | XL AXIATA
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
                                                <span>XL AXIATA</span>
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

                        <div id="hero-image-wrapper" class="change-header-color">
                            <div id="hero-background-layer" class="parallax-scroll-image">
                                <div id="hero-bg-image" style="background-image:url({{ asset('img/works-detail/xl-axiata/hero.jpg') }})"></div>
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
                                                User Experience<br>
                                            </h6>
                                            <h5>
                                                Timeline
                                            </h5>
                                            <h6  style="margin-top:-20px">
                                                2018-2022
                                            </h6>
                                        </div>
                                        
                                        <div class="scrolling-element right">
                                            <h4 class="has-mask">PT. XL AXIATA TBK</h4>
                                            <p class="has-animation" data-delay="0">PT XL Axiata Tbk, is an Indonesia-based mobile telecommunications services operator headquartered at Jakarta. It is the second largest mobile telecommunications company in Indonesia. The operator's coverage includes Java, Bali, and Lombok as well as the principal cities in and around Sumatra, Kalimantan and Sulawesi
                                            </p>
                                        </div>
                                    </div>

                                    <div class="content-row row_padding_top_half row_padding_left row_padding_right full light-section" data-bgcolor="#eee">

                                        <h5 class="has-mask">XL AXIATA WEBSITE: Website for XL Axiata Company</h5>
                                        
                                        <figure class="has-animation has-cover" data-delay="0">
                                            <a href="{{ asset('img/works-detail/xl-axiata/xlaxiata-01.png') }}" class="image-link">
                                                <img src="{{ asset('img/works-detail/xl-axiata/xlaxiata-01.png') }}" alt="Image Title"></a>
                                                <figcaption>XL Axiata Website Homepage</figcaption>
                                        </figure>
                                        
                                        <hr>
                                        <h5 class="has-mask">MYXL Apps: Apps for XL user to access their XL provider and buy package</h5>
                                        <hr>

                                        <div class="one_third">
                                            <figure class="has-animation has-cover" data-delay="0">
                                                <a href="{{ asset('img/works-detail/xl-axiata/myxl-01.png') }}" class="image-link">
                                                    <img src="{{ asset('img/works-detail/xl-axiata/myxl-01.png') }}" alt="Image Title">
                                                </a>               
                                                <figcaption>MyXL Homepage</figcaption>
                                            </figure>
                                        </div>
                                        
                                        <div class="one_third">
                                            <figure class="has-animation has-cover" data-delay="0">
                                                <a href="{{ asset('img/works-detail/xl-axiata/myxl-02.png') }}" class="image-link">
                                                    <img src="{{ asset('img/works-detail/xl-axiata/myxl-02.png') }}" alt="Image Title">
                                                </a>               
                                                <figcaption>MyXL Package</figcaption>
                                            </figure>
                                        </div>
                                        
                                        <div class="one_third last">
                                            <figure class="has-animation has-cover" data-delay="0">
                                                <a href="{{ asset('img/works-detail/xl-axiata/myxl-03.png') }}" class="image-link">
                                                    <img src="{{ asset('img/works-detail/xl-axiata/myxl-03.png') }}" alt="Image Title">
                                                </a>               
                                                <figcaption>MyXL Notification</figcaption>
                                            </figure>
                                        </div>
                                    </div>

                                    <div class="content-row row_padding_top_half row_padding_left row_padding_right full light-section" data-bgcolor="#eee">
                                        <div class="one_half">

                                            <h5 class="has-mask">New XLIFE Apps: Internal Company Absent System</h5>

                                            <figure class="has-animation has-cover" data-delay="0">
                                                <a href="{{ asset('img/works-detail/xl-axiata/xlife.png') }}" class="image-link">
                                                    <img src="{{ asset('img/works-detail/xl-axiata/xlife.png') }}" alt="Image Title">
                                                </a>
                                                <figcaption>New XLife Mobile Apps</figcaption>
                                            </figure>
                                        </div>
                                        
                                        <div class="one_half last">
                                            <h5 class="has-mask">E-Sim Apps: Apps for XL User to buy E-Sim Card</h5>

                                            <figure class="has-animation has-cover" data-delay="100">
                                                <a href="{{ asset('img/works-detail/xl-axiata/esim.png') }}" class="image-link">
                                                    <img src="{{ asset('img/works-detail/xl-axiata/esim.png') }}" alt="Image Title"
                                                    >
                                                </a>
                                                <figcaption>E-Sim Mobile Apps</figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                </div>