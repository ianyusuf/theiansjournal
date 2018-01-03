@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
    <section id="home">
        <div class="slider_container">
            <div id="myparallaxslider" class="parallaxslider">
                <div class="slide">
                    <div class="bgoverlay slider_bg slider_bg_1" data-order="1"></div>
                </div>

                <div class="slide">
                    <div class="bgoverlay slider_bg slider_bg_2" data-order="2"></div>
                </div>

                <div class="slide">
                    <div class="bgoverlay slider_bg slider_bg_3" data-order="3"></div>
                </div>

                <div class="slide">
                    <div class="bgoverlay slider_bg slider_bg_4" data-order="4"></div>
                </div>
            </div>
        </div>
        <div class="slider_overlay" id="asd">
            <div class="slider_overlay_inner">
            </div>
        </div>
        <div class="home_content">
            <h1>We Prepare & Guide International Students For Study Abroad</h1>
            <a class="button_a about_link_button scroll_to_button trans_200" href="{{ url('service') }}">Learn More</a>
        </div>
        <!--<div class="home_social">
            <ul>
                <li class="hvr" data-color-enter="#717a85" data-color-leave="#717a85"><a href="#">Facebook</a></li>
                <li class="hvr" data-color-enter="#717a85" data-color-leave="#717a85"><a href="#">Instagram</a></li>
                <li class="hvr" data-color-enter="#717a85" data-color-leave="#717a85"><a href="#">Twitter</a></li>
            </ul>
        </div>-->
    </section>
@endsection
