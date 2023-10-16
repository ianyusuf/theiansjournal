@extends('layouts.home')

@section('title')
    IAN'S | ABOUT
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
                        <div id="hero" class="half-page">
                            <div id="hero-styles">
                                <div id="hero-caption" class="content-full-width parallax-scroll-caption">
                                    <div class="inner">
                                        <div class="hero-title-wrapper">
                                            <h1 class="hero-title">
                                                <span>Meet</span>
                                                <span>The Maker</span>
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

                        <div id="main-content">
                            <div id="main-page-content">
                                <div class="content-row row_padding_top row_padding_bottom light-section dark-content change-header-color" data-bgcolor="#eee">
                                    <hr><hr><hr>
                                    <div class="pinned-section">
                                        <div class="pinned-element left">
                                            <h3>Hadyan Yusuf</h3>
                                            <p style="margin-top: -20px">Bachelor of Computer Science</p>

                                            <hr>

                                            <p style="font-size: 1em">A creative developer focus on both design and development - allowing me to work on projects from concept until the very moment we hit publish. Unique layouts, interactions and great typography is what I focus on when working on websites.</p>

                                            <a class="link" href="/document/HADYAN_YUSUF_CV.pdf" download>Download CV &nbsp;
                                            <i class="fa fa-download"></i></a>
                                            
                                        </div>
                                        
                                        <div class="scrolling-element right">
                                            <figure class="has-animation">
                                                <a href="img/about.jpg" class="image-link"><img src="img/about.jpg"></a>
                                            </figure>
                                        </div>
                                        
                                    </div>
                                    
                                    <hr><hr><hr><hr>
                                    
                                    <h5 class="big-title1">WORKING EXPERIENCE</h5>
                                    
                                    <hr><hr>

                                    <div class="border-bottom"></div>
                                
                                    <article class="post">
                                        <div class="article-wrap">
                                            <div class="hover-reveal">
                                                <div class="hover-reveal__inner">
                                                    <div class="hover-reveal__img">
                                                        <img src="img/experience/xl-axiata.svg" alt="Post Image">                                      	 
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="post-title" data-color="#000">XL AXIATA</a>
                                        </div>
                                        
                                        <div class="article-content">
                                            <div class="entry-meta-wrap">    
                                                <div class="entry-meta entry-categories">
                                                    <ul class="post-categories">
                                                        <li class="link"><span data-hover="USER EXPERIENCE">USER EXPERIENCE</span></li>
                                                        <li class="link"><span data-hover="VISUAL DESIGN">VISUAL DESIGN</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                                
                                            <div class="entry-meta-wrap">
                                                <ul class="entry-meta entry-date">
                                                    <li class="link">
                                                        <span data-hover="2018-2022">2018-2022</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </article>
                                    
                                    <article class="post">
                                        <div class="article-wrap">
                                            <div class="hover-reveal">
                                                <div class="hover-reveal__inner">
                                                    <div class="hover-reveal__img">
                                                        <img src="img/experience/difinite.png" alt="Post Image">                                      	 
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="post-title" data-color="#000">Difini Teknologi</a>
                                        </div>
                                        
                                        <div class="article-content">
                                            <div class="entry-meta-wrap">    
                                                <div class="entry-meta entry-categories">
                                                    <ul class="post-categories">
                                                        <li class="link"><span data-hover="FRONT END DEVELOPER">FRONT END DEVELOPER</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                                
                                            <div class="entry-meta-wrap">
                                                <ul class="entry-meta entry-date">
                                                    <li class="link">
                                                        <span data-hover="2017-2018">2017-2018</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </article>
                                    
                                    <article class="post">
                                        <div class="article-wrap">
                                            <div class="hover-reveal">
                                                <div class="hover-reveal__inner">
                                                    <div class="hover-reveal__img">
                                                        <img src="img/experience/oppo.png" alt="Post Image">                                      	 
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="post-title" data-color="#000">OPPO INDONESIA</a>
                                        </div>
                                        
                                        <div class="article-content">
                                            <div class="entry-meta-wrap">    
                                                <div class="entry-meta entry-categories">
                                                    <ul class="post-categories">
                                                        <li class="link"><span data-hover="WEBSITE DESIGNER">WEBSITE DESIGNER</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                                
                                            <div class="entry-meta-wrap">
                                                <ul class="entry-meta entry-date">
                                                    <li class="link">
                                                        <span data-hover="2016-2017">2016-2017</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </article>
                                </div>