@extends('layouts.home')

@section('title')
IAN'S | CONTACT
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
                                                <span>Get</span>
                                                <span>In Touch</span>
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
                                    <div class="one_third">
                                        <h3 class="has-mask-fill no-margins">Let's Talk</h3>
                                    </div>
                                    
                                    <div class="two_third last">
                                        <div id="contact-formular">
                                            <div id="message"></div>
                                            <form method="post" action="http://rescena.com/contact.php" name="contactform" id="contactform">                             
                                                <div class="name-box has-animation" data-delay="100">        
                                                    <input name="name" type="text" id="name" size="30" value="" placeholder="What's Your Name">
                                                    <label class="input_label"></label>
                                                </div>                                                        
                                                <div class="email-box has-animation" data-delay="150">
                                                    <input name="email" type="text" id="email" size="30" value="" placeholder="Your Email">
                                                    <label class="input_label"></label>
                                                </div>                            
                                                <div class="message-box has-animation" data-delay="100">
                                                    <textarea name="comments" cols="80" rows="8" id="comments" placeholder="Message Me" ></textarea>
                                                </div>
                                                
                                                <div class="verify-box has-animation" data-delay="100">                                        
                                                    <ul class="verify-sum">
                                                        <li>1</li>
                                                        <li>+</li>
                                                        <li>3</li>
                                                        <li>=</li>
                                                    </ul>
                                                    <input name="verify" type="text" id="verify" size="4" value=""/>
                                                    <p class="required"><span>*</span> Captcha Validation</p>
                                                </div>
                                                                                
                                                <div class="button-box has-animation" data-delay="100">             
                                                    <div class="clapat-button-wrap parallax-wrap hide-ball">
                                                        <div class="clapat-button parallax-element">
                                                            <div class="button-border rounded parallax-element-second"><input type="submit" class="send_message" id="submit" value="Send Mail" /></div>
                                                        </div>
                                                    </div> 
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>