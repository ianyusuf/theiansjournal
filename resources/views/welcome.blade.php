@extends('layouts.home')

@section('title')
    THE IAN'S JOURNAL
@endsection

@section('content')
    <link rel="icon" type="image/ico" href="favicon.png" />
    <link href="{{ asset('style.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
</head>

<body class="hidden hidden-ball hero-below-caption smooth-scroll uppercase-text">
    <main>
        <div class="cd-index cd-main-content">
            <div id="page-content" class="light-content" data-bgcolor="#222">
                <header class="classic-menu invert-header" data-menucolor="#222">
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
                        <div id="hero">
                            <div id="hero-styles">
                                <div id="hero-caption" class="content-full-width parallax-scroll-caption indent-title">
                                    <div class="inner">
                                    <div class="hero-title-wrapper">
                                        <h1 class="hero-title">
                                        <span class="color-white" style="opacity: 1; transform: translate(0px, 0px);">Digital</span>
                                        <span class="color-white" style="opacity: 1; transform: translate(0px, 0px);">Creative</span>
                                        <span class="color-white" style="opacity: 1; transform: translate(0px, 0px);">Portfolio</span>
                                        </h1>
                                    </div>
                                    <div class="hero-subtitle-wrapper">
                                        <h5 class="hero-subtitle">
                                        <span class="color-white" style="opacity: 1; transform: translate(0px, 0px);">Collection of Design Works by Hadyan Yusuf</span>
                                        </h5>
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
                                            <div class="button-text sticky right">
                                                <span class="color-white" data-hover="Scroll to Explore">Scroll to Explore</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hero-footer-right">
                                        <div class="color-white" id="info-text">hadyanyusuf@gmail.com</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="main-content">
                            <div id="main-page-content">
                                <div class="content-row row_padding_top row_padding_bottom_half row_padding_left row_padding_right full light-content hide-mobile">
                                    <div class="one_third">
                                        <h5 class="has-mask">SERVICE</h5>
                                    </div>
                                    
                                    <div class="two_third last">
                                        <h5 class="has-mask">ABOUT</h5>
                                    </div>
                                    
                                    <hr>
                                    
                                    <div class="one_third">
                                        <h5 class="has-mask">VISUAL DESIGN</h5>
                                        <h5 class="has-mask">USER EXPERIENCE</h5>
                                        <h5 class="has-mask">WEBSITE DEVELOPER</h5>
                                    </div>
                                    
                                    <div class="two_third last">
                                        <h4 class="has-mask">A CREATIVE DEVELOPER FOCUS ON BOTH DESIGN AND DEVELOPMENT - ALLOWING ME TO WORK ON PROJECTS FROM CONCEPT UNTIL THE VERY MOMENT WE HIT PUBLISH. UNIQUE LAYOUTS, INTERACTIONS AND GREAT TYPOGRAPHY IS WHAT I FOCUS ON WHEN WORKING ON WEBSITES.</h4>
                                    </div>
                                </div>

                                <div class="content-row row_padding_top row_padding_bottom_half row_padding_left row_padding_right full light-content hide-desktop">
                                    
                                <div class="one_third">
                                        <h5 class="has-mask">SERVICE</h5>
                                    </div>
                                    
                                    <div class="one_third">
                                        <h5 class="has-mask">VISUAL DESIGN</h5>
                                        <h5 class="has-mask">USER EXPERIENCE</h5>
                                        <h5 class="has-mask">WEBSITE DEVELOPER</h5>
                                    </div>
                                    
                                    <hr>

                                    <div class="two_third last">
                                        <h5 class="has-mask">ABOUT</h5>
                                    </div>
                                    
                                    <div class="two_third last">
                                        <h4 class="has-mask">A CREATIVE DEVELOPER FOCUS ON BOTH DESIGN AND DEVELOPMENT - ALLOWING ME TO WORK ON PROJECTS FROM CONCEPT UNTIL THE VERY MOMENT WE HIT PUBLISH. UNIQUE LAYOUTS, INTERACTIONS AND GREAT TYPOGRAPHY IS WHAT I FOCUS ON WHEN WORKING ON WEBSITES.</h4>
                                    </div>
                                </div>

                                <div class="content-row row_padding_top_half row_padding_bottom full light-content" data-bgcolor="#222">
                                    <div class="content-row row_padding_left row_padding_right full light-content">
                                        <h5 class="has-mask">WORKS</h5>
                                    </div>

                                    <div id="itemsWrapperLinks" class="hide-mobile">
                                        <div id="itemsWrapper" class="webgl-fitthumbs fx-three">
                                            <div class="portfolio-wrap flex-grid content-full-width fade-scaleout-effect">
                                                <div class="portfolio">
                                                    <div class="item wide trigger-item branding design" data-color="#de2606">     
                                                        <a href="{{ url('works/xlaxiata') }}">
                                                            <div class="item-parallax">
                                                                <div class="item-appear">                                		
                                                                    <div class="item-content"> 
                                                                        <div class="item-wrap-image">
                                                                            <img src="img/works/xl-axiata.jpg" class="item-image grid__item-img trigger-item-link" alt="">
                                                                        </div>
                                                                        <img class="grid__item-img grid__item-img--large" src="img/works/xl-axiata.jpg" alt="" />
                                                                    </div>                                             
                                                                </div>
                                                                <div class="item-caption-wrapper">
                                                                    <div class="item-caption">
                                                                        <div class="item-title"><span>XL AXIATA</span></div>
                                                                        <div class="item-cat"><span data-hover="View Case">VISUAL DESIGN / USER EXPERIENCE</span></div>                                                    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    
                                                    <div class="item trigger-item design photo" data-color="#462883">     
                                                        <a href="{{ url('works/lokalewedding') }}">
                                                            <div class="item-parallax">
                                                                <div class="item-appear">                                    
                                                                    <div class="item-content">
                                                                        <div class="item-wrap-image">
                                                                            <img src="img/works/lokale-wedding.jpg" class="item-image grid__item-img trigger-item-link" alt="">
                                                                        </div>
                                                                        <img class="grid__item-img grid__item-img--large" src="images/03hero.jpg" alt="" />
                                                                    </div>                                            
                                                                </div>
                                                                <div class="item-caption-wrapper">
                                                                    <div class="item-caption">
                                                                        <div class="item-title"><span>LOKALE WEDDING</span></div>
                                                                        <div class="item-cat"><span data-hover="View Case">VISUAL DESIGN / WEBSITE DEVELOPER</span></div>                                                    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    
                                                    <div class="item wide trigger-item video" data-color="#000">
                                                        <a href="{{ url('works/icedu') }}">
                                                            <div class="item-parallax">
                                                                <div class="item-appear">                                    	
                                                                    <div class="item-content">
                                                                        <div class="item-wrap-image">
                                                                            <img src="img/works/icedu.jpg" class="item-image grid__item-img trigger-item-link" alt="">
                                                                        </div>
                                                                        <img class="grid__item-img grid__item-img--large" src="images/04hero.jpg" alt="" />
                                                                    </div>                                            
                                                                </div>
                                                                <div class="item-caption-wrapper">
                                                                    <div class="item-caption">
                                                                        <div class="item-title"><span>ICEDU INDONESIA</span></div>
                                                                        <div class="item-cat"><span data-hover="View Case">VISUAL DESIGN / WEBSITE DEVELOPER</span></div>                                                    
                                                                    </div>
                                                                </div>
                                                            </div>                                   
                                                        </a>
                                                    </div>
                                                    
                                                    <div class="item wide trigger-item video" data-color="#000">
                                                        <a href="{{ url('works/gigs') }}">
                                                            <div class="item-parallax">
                                                                <div class="item-appear">                                    	
                                                                    <div class="item-content">
                                                                        <div class="item-wrap-image">
                                                                            <img src="img/works/gigs-indie-music.jpg" class="item-image grid__item-img trigger-item-link" alt="">
                                                                        </div>
                                                                        <img class="grid__item-img grid__item-img--large" src="images/04hero.jpg" alt="" />
                                                                    </div>                                            
                                                                </div>
                                                                <div class="item-caption-wrapper">
                                                                    <div class="item-caption">
                                                                        <div class="item-title"><span>GIGS INDIE MUSIC</span></div>
                                                                        <div class="item-cat"><span data-hover="View Case">VISUAL DESIGN / WEBSITE DEVELOPER</span></div>                                                    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>             
                                            </div>
                                        </div>                                   
                                    </div>
                                    
                                    <div id="itemsWrapperLinks" class="hide-desktop">
                                        <div id="itemsWrapper" class="webgl-fitthumbs fx-three">
                                            <div class="portfolio-wrap flex-grid content-full-width fade-scaleout-effect">
                                                <div class="portfolio">
                                                    <div class="item wide trigger-item branding design" data-color="#de2606">     
                                                        <a href="{{ url('works/xlaxiata') }}">
                                                            <div class="item-parallax">
                                                                <div class="item-appear">                                		
                                                                    <div class="item-content"> 
                                                                        <div class="item-wrap-image">
                                                                            <img src="img/works/xl-axiata.jpg" class="item-image grid__item-img trigger-item-link" alt="">
                                                                        </div>
                                                                        <img class="grid__item-img grid__item-img--large" src="img/works/xl-axiata.jpg" alt="" />
                                                                    </div>                                             
                                                                </div>
                                                                <div class="item-caption-wrapper">
                                                                    <div class="item-caption">
                                                                        <div class="item-title"><span>XL AXIATA</span></div>
                                                                        <div class="item-cat"><span data-hover="View Case">VISUAL DESIGN / USER EXPERIENCE</span></div>                                                    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    
                                                    <div class="item trigger-item design photo" data-color="#462883">     
                                                        <a href="{{ url('works/lokalewedding') }}">
                                                            <div class="item-parallax">
                                                                <div class="item-appear">                                    
                                                                    <div class="item-content">
                                                                        <div class="item-wrap-image">
                                                                            <img src="img/works/lokale-wedding.jpg" class="item-image grid__item-img trigger-item-link" alt="">
                                                                        </div>
                                                                        <img class="grid__item-img grid__item-img--large" src="images/03hero.jpg" alt="" />
                                                                    </div>                                            
                                                                </div>
                                                                <div class="item-caption-wrapper">
                                                                    <div class="item-caption">
                                                                        <div class="item-title"><span>LOKALE WEDDING</span></div>
                                                                        <div class="item-cat"><span data-hover="View Case">VISUAL DESIGN / WEBSITE DEVELOPER</span></div>                                                    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div> 
                                                <div class="portfolio">
                                                    <div class="item wide trigger-item video" data-color="#000">
                                                        <a href="{{ url('works/icedu') }}">
                                                            <div class="item-parallax">
                                                                <div class="item-appear">                                    	
                                                                    <div class="item-content">
                                                                        <div class="item-wrap-image">
                                                                            <img src="img/works/icedu.jpg" class="item-image grid__item-img trigger-item-link" alt="">
                                                                        </div>
                                                                        <img class="grid__item-img grid__item-img--large" src="images/04hero.jpg" alt="" />
                                                                    </div>                                            
                                                                </div>
                                                                <div class="item-caption-wrapper">
                                                                    <div class="item-caption">
                                                                        <div class="item-title"><span>ICEDU INDONESIA</span></div>
                                                                        <div class="item-cat"><span data-hover="View Case">VISUAL DESIGN / WEBSITE DEVELOPER</span></div>                                                    
                                                                    </div>
                                                                </div>
                                                            </div>                                   
                                                        </a>
                                                    </div>
                                                    
                                                    <div class="item wide trigger-item video" data-color="#000">
                                                        <a href="{{ url('works/gigs') }}">
                                                            <div class="item-parallax">
                                                                <div class="item-appear">                                    	
                                                                    <div class="item-content">
                                                                        <div class="item-wrap-image">
                                                                            <img src="img/works/gigs-indie-music.jpg" class="item-image grid__item-img trigger-item-link" alt="">
                                                                        </div>
                                                                        <img class="grid__item-img grid__item-img--large" src="images/04hero.jpg" alt="" />
                                                                    </div>                                            
                                                                </div>
                                                                <div class="item-caption-wrapper">
                                                                    <div class="item-caption">
                                                                        <div class="item-title"><span>GIGS INDIE MUSIC</span></div>
                                                                        <div class="item-cat"><span data-hover="View Case">VISUAL DESIGN / WEBSITE DEVELOPER</span></div>                                                    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>             
                                            </div>
                                        </div>                                   
                                    </div>

                                </div>

                                <div class="content-row full light-content" data-bgcolor="#222">
                                    <div style="background-image: url(img/square.jpg)">
                                        <ul class="clients-table has-animation no-borders" data-delay="0">
                                            <li class="link">
                                                <img src="img/tools/figma.png" alt="tools">
                                            </li>
                                            <li class="link">
                                                <img src="img/tools/photoshop.png" alt="tools">
                                            </li>
                                            <li class="link">
                                                <img src="img/tools/sketch.png" alt="tools">
                                            </li>
                                            <li class="link">
                                                <img src="img/tools/invision.png" alt="tools">
                                            </li>     
                                            <li class="link">
                                                <img src="img/tools/visual-studio.png" alt="tools">
                                            </li>       
                                            <li class="hide-desktop link">
                                                <img class="hide-desktop" src="img/tools/jira.png" alt="tools">
                                            </li>    
                                        </ul>
                                    </div>
                                </div>