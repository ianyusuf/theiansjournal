@extends('layouts.overseas')

@section('title')
    Study Overseas
@endsection

@section('content')
    <div class="preloader ball-pulse">
        <div class="loader">
            <div class="ball"></div>
        </div>
    </div>
	<section id="locations" class="locations">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-md-offset-9">
					<div class="section_title">
						<h3>study overseas</h3>
					</div>
				</div>
			</div>
			<div class="map-row">
                <div class="google-map">
                    <img src="img/map.png" alt="ICEDU" class="img-responsive">
                    <div class="hotspot-wrap">
                        <a href="{{ url('overseas/canada') }}">
                            <div class="hotspot-item" data-top="18%" data-left="15%" id="desktop-only">
                                <span class="hotspot" data-toggle="tooltip" data-placement="top" title="CANADA">
                                    <span class="hotspot-point"></span>                            
                                </span>
                            </div>
                            <div class="hotspot-item" data-top="15%" data-left="13%" id="mobile-only">
                                <span class="hotspot" data-toggle="tooltip" data-placement="top" title="CANADA">
                                    <span class="hotspot-point"></span>                            
                                </span>
                            </div>
                        </a>
                        <a href="{{ url('overseas/usa') }}">
                            <div class="hotspot-item" data-top="35%" data-left="20%" id="desktop-only">
                                <span class="hotspot" data-toggle="tooltip" data-placement="top" title="USA">
                                    <span class="hotspot-point"></span>                            
                                </span>
                            </div>
                            <div class="hotspot-item" data-top="28%" data-left="20%" id="mobile-only">
                                <span class="hotspot" data-toggle="tooltip" data-placement="top" title="USA">
                                    <span class="hotspot-point"></span>                            
                                </span>
                            </div>
                        </a>
                        <a href="{{ url('overseas/uk') }}">
                            <div class="hotspot-item" data-top="26%" data-left="44%" id="desktop-only">
                                <span class="hotspot" data-toggle="tooltip" data-placement="top" title="UNITED KINGDOM">
                                    <span class="hotspot-point"></span>                            
                                </span>
                            </div>
                            <div class="hotspot-item" data-top="18%" data-left="43%" id="mobile-only">
                                <span class="hotspot" data-toggle="tooltip" data-placement="top" title="UNITED KINGDOM">
                                    <span class="hotspot-point"></span>                            
                                </span>
                            </div>
                        </a>
                        <div class="hotspot-item" data-top="32%" data-left="52%" id="desktop-only">
                            <span class="hotspot" data-toggle="tooltip" data-placement="top" title="NETHERLANDS">
                                <span class="hotspot-point"></span>                            
                            </span>
                        </div>
                        <div class="hotspot-item" data-top="26%" data-left="50%" id="mobile-only">
                            <span class="hotspot" data-toggle="tooltip" data-placement="top" title="NETHERLANDS">
                                <span class="hotspot-point"></span>                            
                            </span>
                        </div>
                        <a href="{{ url('overseas/switzerland') }}">
                            <div class="hotspot-item" data-top="28%" data-left="62%" id="desktop-only">
                                <span class="hotspot" data-toggle="tooltip" data-placement="top" title="SWITZERLAND">
                                    <span class="hotspot-point"></span>                            
                                </span>
                            </div>
                            <div class="hotspot-item" data-top="20%" data-left="65%" id="mobile-only">
                                <span class="hotspot" data-toggle="tooltip" data-placement="top" title="SWITZERLAND">
                                    <span class="hotspot-point"></span>                            
                                </span>
                            </div>
                        </a>
                        <a href="{{ url('overseas/australia') }}">
                            <div class="hotspot-item" data-top="72%" data-left="83%" id="desktop-only">
                                <span class="hotspot" data-toggle="tooltip" data-placement="top" title="AUSTRALIA">
                                    <span class="hotspot-point"></span>                            
                                </span>
                            </div>
                            <div class="hotspot-item" data-top="64%" data-left="81%" id="mobile-only">
                                <span class="hotspot" data-toggle="tooltip" data-placement="top" title="AUSTRALIA">
                                    <span class="hotspot-point"></span>                            
                                </span>
                            </div>
                        </a>
                    </div>
                </div>  
			</div>
		</div>
	</section>
    <section id="overbottom"></section>
@endsection
