@extends('layouts.overseas')

@section('title')
    Australia
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
                            <h1 class="service_modal_header_left"> &#x25C4; Australia</h1>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="work_container">
                    <div class="col-lg-6 col-md-6 col-sm-6 work-pad">
                        <div class="grid-item">
                            <a data-toggle="modal" data-target="#modal-1">
                                <span class="project_background" style="background-image: url('../img/study/australia/csu.jpg')"></span>
                                <h4>Charles Sturt University</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 work-pad">
                        <div class="grid-item">
                            <a data-toggle="modal" data-target="#modal-2">
                                <span class="project_background" style="background-image: url('../img/study/australia/fu.jpg')"></span>
                                <h4>Flinders University</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="work_container">
                    <div class="col-lg-6 col-md-6 col-sm-6 work-pad">
                        <div class="grid-item">
                            <a data-toggle="modal" data-target="#modal-3">
                                <span class="project_background" style="background-image: url('../img/study/australia/tc.jpg')"></span>
                                <h4>Taylors College</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 work-pad">
                        <div class="grid-item">
                            <a data-toggle="modal" data-target="#modal-4">
                                <span class="project_background" style="background-image: url('../img/study/australia/spj.jpg')"></span>
                                <h4>SP Jain</h4>
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
                            <h4 class="uni_modal_top">australia</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <h2 class="uni_modal_header">Charles Sturt University</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <img src="../img/study/australia/csu.jpg" class="img-responsive" alt="ICEDU Indonesia">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1 uni_link">
                            <a href="https://www.csu.edu.au" target="_blank">www.csu.edu.au</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 service_modal_text">
                            <p>Charles Sturt University (CSU) is an Australian multi-campus public university located in New South Wales, Queensland, Victoria, and the Australian Capital Territory. Established in 1989, it was named in honour of Captain Charles Sturt, a British explorer who made expeditions into regional New South Wales and South Australia.<br><br>CSU has more than 350 courses on offer than can unlock student potential to create a better life for them, their family, their community and the world.</p>
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
                            <h4 class="uni_modal_top">australia</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <h2 class="uni_modal_header">Flinders University</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <img src="../img/study/australia/fu.jpg" class="img-responsive" alt="ICEDU Indonesia">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1 uni_link">
                            <a href="https://www.flinders.edu.au" target="_blank">www.flinders.edu.au</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 service_modal_text">
                            <p>Flinders University is a public university in Adelaide, South Australia. Founded in 1966, it was named in honors of navigator Matthew Flinders, who explored and surveyed the South Australian coastline in the early 19th century.<br><br> Flinders is a verdant university[citation needed] and a member of the Innovative Research Universities (IRU) Group. Academically, the university pioneered a cross-disciplinary approach to education, and its faculties of medicine and the humanities are ranked among the nation's top 10.<br><br> The university is ranked within the world's top 500 institutions in the Academic Ranking of World Universities.<br><br> Flinders University will develop creative, enterprising, career-ready graduates prepared to become lifelong contributors to society.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.youtube.com/embed/wK39U4Vatpw' frameborder='0' allowfullscreen></iframe></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-3" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <h4 class="uni_modal_top">australia</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <h2 class="uni_modal_header">Taylors College</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <img src="../img/study/australia/tc.jpg" class="img-responsive" alt="ICEDU Indonesia">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1 uni_link">
                            <a href="http://www.taylorscollege.edu.au" target="_blank">www.taylorscollege.edu.au</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 service_modal_text">
                            <p>Taylors College is a provider of university preparation programs in Australia and New Zealand. Established in Melbourne, Australia in 1920, Taylors College provides secondary school education (Year 10 - Year 12) and specialized University Foundation programs in partnership with some of the leading universities in Australia and New Zealand. The college has campuses in Sydney, Perth and Auckland. Taylors College campuses are located in the major cities in Australia and New Zealand: Sydney, Perth and Auckland.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-4" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <h4 class="uni_modal_top">australia</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <h2 class="uni_modal_header">SP Jain</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <img src="../img/study/australia/spj.jpg" class="img-responsive" alt="ICEDU Indonesia">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1 uni_link">
                            <a href="https://www.spjain.org" target="_blank">www.spjain.org</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 service_modal_text">
                            <p>SP Jain is an Australian business school with campuses in Dubai, Mumbai, Singapore and Sydney. Our education ethos is strongly influenced by our mission of crafting global business leaders for the 21st-century workplace. We pride ourselves on providing a learning experience that is modern, relevant and truly global. The school offers undergraduate, graduate and postgraduate business courses.<br><br>
                            For the last five of its 11 years history, S P Jain has been ranked among the world’s top schools. In 2015, the school was ranked No. 10 in the Best International Business School by Forbes for its one-year MBA program. In 2013–14, it was ranked in the Top 20 Best International Business Schools by Forbes. And in 2011 and 2012, UK’s Financial Times ranked the Global MBA in its Top 100 Global MBA rankings.<br><br>
                            S P Jain is accredited by the Tertiary Education Quality and Standards Agency (TEQSA), Australia that provides the School with degree conferring right. 
                        </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.youtube.com/embed/BFBe8WJjQFc' frameborder='0' allowfullscreen></iframe></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection