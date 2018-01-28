@extends('layouts.overseas')

@section('title')
    Canada
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
                            <h1 class="service_modal_header_left"> &#x25C4; Canada</h1>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="work_container">
                    <div class="col-lg-6 col-md-6 col-sm-6 work-pad">
                        <div class="grid-item">
                            <a data-toggle="modal" data-target="#modal-1">
                                <span class="project_background" style="background-image: url('../img/study/canada/sfu.jpg')"></span>
                                <h4>Simon Fraser University</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 work-pad">
                        <div class="grid-item">
                            <a data-toggle="modal" data-target="#modal-2">
                                <span class="project_background" style="background-image: url('../img/study/canada/rru.jpg')"></span>
                                <h4>Royal Roads University</h4>
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
                            <h4 class="uni_modal_top">canada</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <h2 class="uni_modal_header">Simon Fraser University</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <img src="../img/study/canada/sfu.jpg" class="img-responsive" alt="ICEDU Indonesia">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1 uni_link">
                            <a href="https://www.sfu.ca" target="_blank">www.sfu.ca</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 service_modal_text">
                            <p>Located in Canada on British Columbia's west coast and named for an early explorer, Simon Fraser University opened on September 9, 1965 with 2,500 students.<br><br>Now boasting three distinctive campuses, 30,000 students, 6,500 faculty and staff, and 130,000 alumni, SFU has matured into one of the world’s leading teaching and research universities.<br><br>Consistently ranked among Canada’s top comprehensive universities and named to the Times Higher Education list of 100 world universities under 50, SFU is also the first Canadian member of the National Collegiate Athletic Association, the world’s largest college sports association.<br><br>SFU has become Canada's leading comprehensive university with vibrant campuses in British Columbia's largest municipalities — Vancouver, Burnaby and Surrey — and deep roots in partner communities throughout the province and around the world.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-2" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <h4 class="uni_modal_top">canada</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <h2 class="uni_modal_header">Royal Roads University</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <img src="../img/study/canada/rru.jpg" class="img-responsive" alt="ICEDU Indonesia">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1 uni_link">
                            <a href="https://www.royalroads.ca" target="_blank">www.royalroads.ca</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 service_modal_text">
                            <p>Royal Roads University was established in 1995 to offer high-quality, applied and relevant programs designed to enable professionals to improve their skills and advance their careers.<br><br>
                            Located in one of Canada's most beautiful National Historic Sites, Royal Roads University has a history of excellence providing life changing experiences that enable professional and personal transformation.<br><br>
                            Royal Roads University offers applied and professional programs at the undergraduate, graduate and doctoral levels, focusing on graduate level career development.  Residencies based programs range from one to three weeks, and are often held on-campus, but select programs host their residencies in unique locations around the world. Mature students are welcome, and credits are available for prior experience in the subject area. The university also offers some full-time accelerated on-campus undergraduate programs.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.youtube.com/embed/HK_Zxzylgj8' frameborder='0' allowfullscreen></iframe></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection