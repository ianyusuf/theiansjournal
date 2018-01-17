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

    <section class="home" id="mobile-only">
        <div class="home_background">
            <img src="img/header-m.jpg" class="img-responsive"></div>
        </div>
        <div class="home_content" id="mobile-only">
            <h1>We Prepare & Guide International Students For Study Abroad</h1>
            <a class="button_a about_link_button scroll_to_button trans_200" href="{{ url('service') }}">Learn More</a>
        </div>
    </section>

    <div class="home-separator"></div>

    <section class="home-slider">
        <div class="slider_container">
            <div id="myparallaxslider" class="parallaxslider">
                <div class="slide">
                    <div class="bgoverlay slider_bg slider_bg_1" data-order="1">
                        <img src="img/slider/slider-1.jpg" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
        <div class="main_slider_nav">
            <div class="main_slider_nav_inner">
                <div class="main_nav_position">
                    <div id="asd" class="main_nav_position_inner trans_200">
                        1 &nbsp;of &nbsp;1
                    </div>
                </div>
                <div class="main_nav_arrows">
                    <div class="main_nav_arrows_inner">
                        <div class="main_nav_left"><i class="icon ion-play arrow_left trans_200"></i></div>
                        <div class="main_nav_right"><i class="icon ion-play trans_200"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
