@extends('layouts.overseas')

@section('title')
    Holland
@endsection

@section('content')
    <div class="preloader ball-pulse">
        <div class="loader">
            <div class="ball"></div>
        </div>
    </div>
    <section id="work">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-md-offset-9" style="padding-bottom:20px">
                    <div class="section_title">
                        <h3>study overseas</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 work-pad">
                    <div class="section_title">
                        <a href="{{ url('overseas') }}">
                            <h1 class="service_modal_header_left"> &#x25C4; Holland</h1>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="work_container">
                    <div class="col-lg-6 col-md-6 col-sm-6 work-pad">
                        <div class="grid-item">
                            <a data-toggle="modal" data-target="#modal-1">
                                <span class="project_background" style="background-image: url('../img/study/holland/isc.jpg')"></span>
                                <h4>ISC Amsterdam</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="modal-1" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <h4 class="uni_modal_top">holland</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <h2 class="uni_modal_header">ISC Amsterdam</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <img src="../img/study/holland/isc.jpg" class="img-responsive" alt="ICEDU Indonesia">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1 uni_link">
                            <a href="https://www.hollandisc.com" target="_blank">www.hollandisc.com</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 service_modal_text">
                            <p>Based in the heart of Amsterdam, The Holland International Study Centre (ISC) prepares students for bachelors’ studies at universities across The Netherlands. <br><br>With students from over 40 different countries, The Holland ISC is a truly international environment and a great stepping stone from high school to a Dutch university.<br><br>Holland International Study Centre partners with a range of top 200 world universities (Times Higher Education) and some of the best universities of applied sciences in the country.<br>
                            List of University Partner:
                                <ul style="list-style-type: square; padding:0 20px; line-height:200%; font-size: 0.9em;">
                                    <li>Erasmus University Rotterdam</li>
                                    <li>The University of Twente</li>
                                    <li>Tilburg University</li>
                                    <li>Vrije Universiteit Amsterdam (VU Amsterdam)</li>
                                    <li>The Hague University of Applied Sciences (THUAS)</li>
                                    <li>Hanze University of Applied Sciences</li>
                                    <li>Wittenborg University of Applied Sciences (WUAS)</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.youtube.com/embed/XOGzG6cWo7A' frameborder='0' allowfullscreen></iframe></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection