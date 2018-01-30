@extends('layouts.home')

@section('title')
    Home
@endsection

@section('content')
    <section class="home" id="desktop-only">
        <div class="home_background">
            <img src="img/header.jpg" class="img-responsive"></div>
        </div>
        <div class="home_content" id="desktop-only">
            <h1>We Prepare & Guide International Students For Study Abroad</h1>
            <a class="button_a about_link_button scroll_to_button trans_200" href="{{ url('service') }}">Learn More</a>
        </div>
    </section>

    <div class="home-separator"></div>

    <section class="home" id="mobile-only">
        <div class="home_background">
            <img src="img/header-m.png" class="img-responsive" id="home-header-m">
        </div>
        <div class="about_text_row" style="padding-bottom: 40px">
            <div class="container">
                <div class="col-md-12">
                    <div class="about_section_title" style="text-align: right;">
                        <h3 style="font-size: 1.5em; line-height: 30px;">We Prepare & Guide International Students For Study Abroad</h3>
                        <a class="button_a about_link_button scroll_to_button trans_200" style="margin-top:20px" href="{{ url('service') }}">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-slider">
        <div class="slider_container">
            <div id="myparallaxslider" class="parallaxslider">
                <div class="slide">
                    <div class="bgoverlay slider_bg slider_bg_1" data-order="1">
                        <img src="img/slider/slider-1.jpg" class="img-responsive" id="desktop-only">
                        <img src="img/slider/slider-1m.jpg" class="img-responsive" id="mobile-only">
                    </div>
                </div>
            </div>
        </div>
        <div class="main_slider_nav">
            <div class="main_slider_nav_inner">
                <div class="main_nav_arrows">
                    <div class="main_nav_arrows_inner">
                        <div class="main_nav_left"><i class="icon ion-play arrow_left trans_200" s></i></div>
                        <div class="main_nav_right"><i class="icon ion-play trans_200"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection
