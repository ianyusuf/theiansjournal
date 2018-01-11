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
                    <img src="img/map.png" alt="">
                    <div class="hotspot-wrap">
                        <div class="hotspot-item" data-top="15%" data-left="15%">
                            <span class="hotspot" data-toggle="tooltip" data-placement="top" title="CANADA">
                                <span class="hotspot-point"></span>                            
                            </span>
                        </div>
                        <div class="hotspot-item" data-top="35%" data-left="20%">
                            <span class="hotspot" data-toggle="tooltip" data-placement="top" title="USA">
                                <span class="hotspot-point"></span>                            
                            </span>
                        </div>
                        <div class="hotspot-item" data-top="28%" data-left="45%">
                            <span class="hotspot" data-toggle="tooltip" data-placement="top" title="UK">
                                <span class="hotspot-point"></span>                            
                            </span>
                        </div>
                        <a href="#" class="nav_links" data-scroll-to="#switzerland">
                            <div class="hotspot-item" data-top="30%" data-left="60%">
                                <span class="hotspot" data-toggle="tooltip" data-placement="top" title="SWITZERLAND">
                                    <span class="hotspot-point"></span>                            
                                </span>
                            </div>
                        </a>
                        <div class="hotspot-item" data-top="75%" data-left="85%">
                            <span class="hotspot" data-toggle="tooltip" data-placement="top" title="AUSTRALIA">
                                <span class="hotspot-point"></span>                            
                            </span>
                        </div>
                    </div>
                </div>  
			</div>
		</div>
	</section>
    <section id="service">
        <div class="container">
            <div class="row">
                <div class="col-md-6" id="australia">
                    <div class="row">
                        <h1 class="service_modal_header_left">Australia</h1>
                    </div>
                    <div class="row">
                        <ul class="university-list">
                            <a data-toggle="modal" data-target="#modal-1">
                                <li>Charles Sturt University</li>
                            </a>
                            <div id="modal-1" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-xs-10 col-xs-offset-1">
                                                    <h4 class="uni_modal_top">Switzerland</h4>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-10 col-xs-offset-1">
                                                    <h2 class="uni_modal_header">Swiss Hotel Management School</h2>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-10 col-xs-offset-1">
                                                    <img src="img/university_1.jpg" class="img-responsive">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-10 col-xs-offset-1" style="text-align:center">
                                                    <a class="button_uni about_link_button scroll_to_button trans_200" href="https://www.shms.com" target="_blank">Website</a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 service_modal_text">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a data-toggle="modal" data-target="#modal-1">
                                <li>Taylors High School</li>
                            </a>
                            <a data-toggle="modal" data-target="#modal-1">
                                <li>Flinders University</li>
                            </a>
                            <a data-toggle="modal" data-target="#modal-1">
                                <li>SP Jain</li>
                            </a>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6" id="canada">
                    <div class="row">
                        <h1 class="service_modal_header_left">CANADA</h1>
                    </div>
                    <div class="row">
                        <ul class="university-list">
                            <a data-toggle="modal" data-target="#modal-1">
                                <li>Simon Fraser University</li>
                            </a>
                            <div id="modal-1" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-xs-10 col-xs-offset-1">
                                                    <h4 class="uni_modal_top">Switzerland</h4>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-10 col-xs-offset-1">
                                                    <h2 class="uni_modal_header">Swiss Hotel Management School</h2>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-10 col-xs-offset-1">
                                                    <img src="img/university_1.jpg" class="img-responsive">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-10 col-xs-offset-1" style="text-align:center">
                                                    <a class="button_uni about_link_button scroll_to_button trans_200" href="https://www.shms.com" target="_blank">Website</a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 service_modal_text">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a data-toggle="modal" data-target="#modal-1">
                                <li>Royal Roads University</li>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6" id="switzerland">
                    <div class="row">
                        <h1 class="service_modal_header_left">SWITZERLAND</h1>
                    </div>
                    <div class="row">
                        <ul class="university-list">
                            <a data-toggle="modal" data-target="#modal-1">
                                <li>Swiss Hotel Management School</li>
                            </a>
                            <div id="modal-1" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-xs-10 col-xs-offset-1">
                                                    <h4 class="uni_modal_top">Switzerland</h4>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-10 col-xs-offset-1">
                                                    <h2 class="uni_modal_header">Swiss Hotel Management School</h2>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-10 col-xs-offset-1">
                                                    <img src="img/university_1.jpg" class="img-responsive">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-10 col-xs-offset-1" style="text-align:center">
                                                    <a class="button_uni about_link_button scroll_to_button trans_200" href="https://www.shms.com" target="_blank">Website</a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 service_modal_text">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a data-toggle="modal" data-target="#modal-1">
                                <li>Hotel Institute Montreux</li>
                            </a>
                            <a data-toggle="modal" data-target="#modal-1">
                                <li>Cesar Ritz Colleges Switzerland</li>
                            </a>
                            <a data-toggle="modal" data-target="#modal-1">
                                <li>School Of Hotel Management Switzerland</li>
                            </a>
                            <a data-toggle="modal" data-target="#modal-1">
                                <li>Culinary Arts Academy Switzerland</li>
                            </a>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6" id="uk">
                    <div class="row">
                        <h1 class="service_modal_header_left">UK</h1>
                    </div>
                    <div class="row">
                        <ul class="university-list">
                            <a data-toggle="modal" data-target="#modal-1">
                                <li>Bellerby College</li>
                            </a>
                            <div id="modal-1" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-xs-10 col-xs-offset-1">
                                                    <h4 class="uni_modal_top">Switzerland</h4>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-10 col-xs-offset-1">
                                                    <h2 class="uni_modal_header">Swiss Hotel Management School</h2>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-10 col-xs-offset-1">
                                                    <img src="img/university_1.jpg" class="img-responsive">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-10 col-xs-offset-1" style="text-align:center">
                                                    <a class="button_uni about_link_button scroll_to_button trans_200" href="https://www.shms.com" target="_blank">Website</a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 service_modal_text">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a data-toggle="modal" data-target="#modal-1">
                                <li>The University of Sheffield</li>
                            </a>
                            <a data-toggle="modal" data-target="#modal-1">
                                <li>University of Surrey</li>
                            </a>
                            <a data-toggle="modal" data-target="#modal-1">
                                <li>University Of Sussex</li>
                            </a>
                            <a data-toggle="modal" data-target="#modal-1">
                                <li>Royal Holloway University London</li>
                            </a>
                            <a data-toggle="modal" data-target="#modal-1">
                                <li>Liverpool John Moores University</li>
                            </a>
                            <a data-toggle="modal" data-target="#modal-1">
                                <li>Institute Maragoni</li>
                            </a>
                            <a data-toggle="modal" data-target="#modal-1">
                                <li>University of Huddersfield</li>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6" id="usa">
                    <div class="row">
                        <h1 class="service_modal_header_left">USA</h1>
                    </div>
                    <div class="row">
                        <ul class="university-list">
                            <a data-toggle="modal" data-target="#modal-1">
                                <li>Johnson & Wales University</li>
                            </a>
                            <div id="modal-1" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-xs-10 col-xs-offset-1">
                                                    <h4 class="uni_modal_top">Switzerland</h4>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-10 col-xs-offset-1">
                                                    <h2 class="uni_modal_header">Swiss Hotel Management School</h2>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-10 col-xs-offset-1">
                                                    <img src="img/university_1.jpg" class="img-responsive">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-10 col-xs-offset-1" style="text-align:center">
                                                    <a class="button_uni about_link_button scroll_to_button trans_200" href="https://www.shms.com" target="_blank">Website</a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 service_modal_text">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a data-toggle="modal" data-target="#modal-1">
                                <li>James Madison University</li>
                            </a>
                            <a data-toggle="modal" data-target="#modal-1">
                                <li>University of Vermon</li>
                            </a>
                            <a data-toggle="modal" data-target="#modal-1">
                                <li>Texas A & M Corpus Christi</li>
                            </a>
                            <a data-toggle="modal" data-target="#modal-1">
                                <li>Roosevelt University</li>
                            </a>
                            <a data-toggle="modal" data-target="#modal-1">
                                <li>Baylor University</li>
                            </a>
                            <a data-toggle="modal" data-target="#modal-1">
                                <li>Kapiolani Community College University of Hawaii</li>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
