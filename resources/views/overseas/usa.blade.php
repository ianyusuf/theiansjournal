@extends('layouts.overseas')

@section('title')
    United States of America
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
                            <h1 class="service_modal_header_left"> &#x25C4; United States of America</h1>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="work_container">
                    <div class="col-lg-6 col-md-6 col-sm-6 work-pad">
                        <div class="grid-item">
                            <a data-toggle="modal" data-target="#modal-1">
                                <span class="project_background" style="background-image: url('../img/study/usa/jwu.jpg')"></span>
                                <h4>Johnson & Wales University</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 work-pad">
                        <div class="grid-item">
                            <a data-toggle="modal" data-target="#modal-2">
                                <span class="project_background" style="background-image: url('../img/study/usa/jmu.jpg')"></span>
                                <h4>James Madison University </h4>
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
                                <span class="project_background" style="background-image: url('../img/study/usa/uvm.jpg')"></span>
                                <h4>University of Vermont</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 work-pad">
                        <div class="grid-item">
                            <a data-toggle="modal" data-target="#modal-4">
                                <span class="project_background" style="background-image: url('../img/study/usa/texas.jpg')"></span>
                                <h4>Texas A & M Corpus Christi</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="work_container">
                    <div class="col-lg-6 col-md-6 col-sm-6 work-pad">
                        <div class="grid-item">
                            <a data-toggle="modal" data-target="#modal-5">
                                <span class="project_background" style="background-image: url('../img/study/usa/ru.jpg')"></span>
                                <h4>Roosevelt University</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 work-pad">
                        <div class="grid-item">
                            <a data-toggle="modal" data-target="#modal-6">
                                <span class="project_background" style="background-image: url('../img/study/usa/bu.jpg')"></span>
                                <h4>Baylor University</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="work_container">
                    <div class="col-lg-6 col-md-6 work-pad">
                        <div class="grid-item">
                            <a data-toggle="modal" data-target="#modal-7">
                                <span class="project_background" style="background-image: url('../img/study/usa/kapiolani.jpg')"></span>
                                <h4>Kapiolani Community College University of Hawaii</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 work-pad">
                        <div class="grid-item">
                            <a data-toggle="modal" data-target="#modal-8">
                                <span class="project_background" style="background-image: url('../img/study/usa/unt.jpg')"></span>
                                <h4>University North Texas</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="work_container">
                    <div class="col-lg-6 col-md-6 work-pad">
                        <div class="grid-item">
                            <a data-toggle="modal" data-target="#modal-9">
                                <span class="project_background" style="background-image: url('../img/study/usa/csumb.jpg')"></span>
                                <h4>California State University Monterey Bay</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 work-pad">
                        <div class="grid-item">
                            <a data-toggle="modal" data-target="#modal-10">
                                <span class="project_background" style="background-image: url('../img/study/usa/cu.jpg')"></span>
                                <h4>Clark University</h4>
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
                            <h4 class="uni_modal_top">usa</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <h2 class="uni_modal_header">Johnson & Wales University</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <img src="../img/study/usa/jwu.jpg" class="img-responsive" alt="ICEDU Indonesia">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1 uni_link">
                            <a href="https://www.jwu.edu" target="_blank">www.jwu.edu</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 service_modal_text">
                            <p>Founded in 1914, Johnson & Wales University is a private, nonprofit, accredited institution with approximately 16,000 graduate, undergraduate and online students at its 4 campuses in Providence, RI; North Miami, Fla.; Denver, Colo.; and Charlotte, NC. JWU currently has 15,063 students enrolled in business, arts & sciences, culinary arts, education, engineering, equine management, hospitality, and engineering technology programs across its campuses.<br><br>
                            Its unique model integrates arts and sciences and industry-focused education with work experience and leadership opportunities, inspiring students to achieve professional success and lifelong personal growth.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.youtube.com/embed/Xrc_4JqDmzw' frameborder='0' allowfullscreen></iframe></div>
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
                            <h4 class="uni_modal_top">usa</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <h2 class="uni_modal_header">James Madison University</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <img src="../img/study/usa/jmu.jpg" class="img-responsive" alt="ICEDU Indonesia">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1 uni_link">
                            <a href="https://www.jmu.edu " target="_blank">www.jmu.edu</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 service_modal_text">
                            <p>James Madison University (also known as JMU, is a public coeducational research university located in Harrisonburg, Virginia, United States. Founded in 1908 as the State Normal and Industrial School for Women at Harrisonburg, the institution was renamed Madison College in 1938 in honor of President James Madison and then James Madison University in 1977. The university is situated in the Shenandoah Valley, with the campus quadrangle located on South Main Street.<br><br>
                            Currently, James Madison University offers 115 degree programs on the bachelor's, master's, educational specialist, and doctoral levels. The university comprises seven colleges and 78 academic programs. The university includes the College of Arts and Letters; the College of Business; the College of Education; the College of Health and Behavioral Studies; the College of Integrated Science and Engineering; the College of Science and Mathematics; the College of Visual and Performing Arts; and The Graduate School. Total enrollment beginning the Fall 2017 academic year was 22,667; 20,779 undergraduates and 1,888 graduate students. </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.youtube.com/embed/HMirFrEaZKs' frameborder='0' allowfullscreen></iframe></div>
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
                            <h4 class="uni_modal_top">usa</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <h2 class="uni_modal_header">University of Vermont</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <img src="../img/study/usa/uvm.jpg" class="img-responsive" alt="ICEDU Indonesia">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1 uni_link">
                            <a href="https://www.uvm.edu" target="_blank">www.uvm.edu</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 service_modal_text">
                            <p>UVM stands for the Latin words Universitas Viridis Montis -- University of the Green Mountains. Founded in 1791, UVM is among the oldest universities in the United States and is the fifth institution of higher education established in the New England region of the U.S. northeast. It is also listed as one of the original eight "Public Ivy" institutions in the United States.  The University of Vermont comprises seven undergraduate schools, an honors college, a graduate college, and a college of medicine.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.youtube.com/embed/MVPPLo6YRpA' frameborder='0' allowfullscreen></iframe></div>
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
                            <h4 class="uni_modal_top">usa</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <h2 class="uni_modal_header">Texas A & M Corpus Christi</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <img src="../img/study/usa/texas.jpg" class="img-responsive" alt="ICEDU Indonesia">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1 uni_link">
                            <a href="https://www.tamucc.edu" target="_blank">www.tamucc.edu</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 service_modal_text">
                            <p>Discover the Island University, the only university in the nation located on its own island, at the heart of the Texas Gulf Coast. With palm tree-lined pathways throughout the campus, nearby natural wetlands, a scenic hike-and-bike trail and a pristine view of the beach and bays, Texas A&M University-Corpus Christi is a first-choice institution.<br><br>
                            Offering more than 80 of the most popular degree programs in the state, Texas A&M University-Corpus Christi has been proudly providing a solid academic reputation, renowned faculty and highly-rated degree programs since 1947.<br><br>
                            The prestige of a Texas A&M-Corpus Christi degree is known worldwide. They’re one of only seven federal test sites for unmanned aircraft systems (UAS) in the nation. Their College of Nursing and Health Sciences has been recognized by the White House on several occasions. Texas A&M-Corpus Christi offers 33 undergraduate majors, 25 graduate programs, and five doctoral programs through five colleges.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-5" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <h4 class="uni_modal_top">usa</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <h2 class="uni_modal_header">Roosevelt University</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <img src="../img/study/usa/ru.jpg" class="img-responsive" alt="ICEDU Indonesia">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1 uni_link">
                            <a href="https://www.roosevelt.edu " target="_blank">www.roosevelt.edu </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 service_modal_text">
                            <p>Roosevelt University is private university with campuses in Chicago, Illinois and Schaumburg, Illinois. Founded in 1945, the university is named in honor of both former President Franklin Delano Roosevelt and First Lady Eleanor Roosevelt.<br><br>
                            The university enrolls around 7,000 students between its undergraduate and graduate programs and is ranked #81 in U.S. News & World Report's "Midwest Universities -2012". Roosevelt is also home to the Chicago College of Performing Arts. The University's newest academic building, Wabash, is located in The Loop of Downtown Chicago. It is the tallest educational building in Chicago, the second tallest educational building in the United States, and the fourth -largest academic complex in the world.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.youtube.com/embed/D3PkmLC2Kdw' frameborder='0' allowfullscreen></iframe></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-6" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <h4 class="uni_modal_top">usa</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <h2 class="uni_modal_header">Baylor University</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <img src="../img/study/usa/bu.jpg" class="img-responsive" alt="ICEDU Indonesia">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1 uni_link">
                            <a href="https://www.baylor.edu" target="_blank">www.baylor.edu</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 service_modal_text">
                            <p>Baylor University is a private Christian university and a nationally ranked research institution. The University provides a vibrant campus community for more than 16,000 students by blending interdisciplinary research with an international reputation for educational excellence and a faculty commitment to teaching and scholarship. Chartered in 1845 through the efforts of Baptist pioneers, Baylor is the oldest continually operating university in Texas and welcomes students from all 50 states and more than 80 countries.<br><br>
                            As reported in the 2017 "Best Colleges" rankings by U.S. News & World Report, Baylor is ranked tied for 71st in the national universities category. On the graduate level, the report also ranks the graduate level, ranks the law school tied for 56th best in the nation and the business school tied for 58th.<br><br>
                            The Princeton Review named Baylor a "Best Western College" and ranks the university's marketing programs as No. 2 in the nation.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.youtube.com/embed/4ZGIzrcCI2g' frameborder='0' allowfullscreen></iframe></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-7" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <h4 class="uni_modal_top">usa</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <h2 class="uni_modal_header">Kapiolani Community College University of Hawaii</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <img src="../img/study/usa/kapiolani.jpg" class="img-responsive" alt="ICEDU Indonesia">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1 uni_link">
                            <a href="https://www.kapiolani.hawaii.edu" target="_blank">www.kapiolani.hawaii.edu </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 service_modal_text">
                            <p>Kapiʻolani Community College is a public, co-educational commuter college in Honolulu, Hawaiʻi situated on the slopes of Diamond Head in Waikīkī. It is one of ten branches of the University of Hawaiʻi system anchored by the University of Hawaiʻi at Mānoa.<br><br>
                            Kapi‘olani Community College, one of 10 colleges within the University of Hawai‘i System, has a long, colorful history. Its solid reputation in culinary arts, hospitality, health services, liberal arts and business education, is sprinkled with delightful stories of campus moves, student and faculty successes, and classroom innovations.<br><br>
                            The College provides comprehensive educational opportunities for transfer to four-year universities and workforce development for our community.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-8" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <h4 class="uni_modal_top">usa</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <h2 class="uni_modal_header">University North Texas </h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <img src="../img/study/usa/unt.jpg" class="img-responsive" alt="ICEDU Indonesia">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1 uni_link">
                            <a href="https://www.unt.edu" target="_blank">www.unt.edu</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 service_modal_text">
                            <p>The University of North Texas (UNT)  university based in Denton, Texas with programs in natural, formal, and social sciences, engineering, liberal arts, fine arts, performing arts, humanities, public policy, graduate professional education, and post-doc research.<br><br> 
                            Ten colleges, two schools, an early admissions math and science academy for exceptional high-school-age students from across the state, and a library system comprise the university core.<br><br>With 103 bachelor's, 86 master's and 38 doctoral degrees, it's no wonder UNT is the leading university in the North Texas region.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.youtube.com/embed/evEV2sshJos' frameborder='0' allowfullscreen></iframe></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-9" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <h4 class="uni_modal_top">usa</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <h2 class="uni_modal_header">California State University Monterey Bay</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <img src="../img/study/usa/csumb.jpg" class="img-responsive" alt="ICEDU Indonesia">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1 uni_link">
                            <a href="https://www.csumb.edu" target="_blank">www.csumb.edu</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 service_modal_text">
                            <p>California State University, Monterey Bay (CSUMB) is a public university in the 23-campus California State University system, located in Marina and Seaside, in Monterey County, California. It is on the site of the former U.S. Army base Fort Ord in the northern Central Coast of California region.<br><br>
                            Cal State Monterey Bay provides over 8,000 students an extraordinary opportunity to learn on a residential campus just one mile from the shores of the beautiful Monterey Bay. Our diverse student body receives personal attention in small classes while pursuing degrees in 25 undergraduate and seven graduate majors.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.youtube.com/embed/sB2T0sQBUdw' frameborder='0' allowfullscreen></iframe></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-10" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <h4 class="uni_modal_top">usa</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <h2 class="uni_modal_header">Clark University</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <img src="../img/study/usa/cu.jpg" class="img-responsive" alt="ICEDU Indonesia">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1 uni_link">
                            <a href="https://www.clarku.edu" target="_blank">www.clarku.edu</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 service_modal_text">
                            <p>Clark University is an American private university located in Worcester, Massachusetts, the second largest city in New England.  It is about 50 miles west of Boston.Founded in 1887, from its namesake Jonas Gilman Clark, a prominent businessman, Clark was one of the first modern research universities in the United States. The university now offers 46 majors, minors, and concentrations in the humanities, social sciences, natural sciences, and engineering.<br><br>
                            Graduate and professional programs are offered through the Graduate School, the Graduate School of Management, the Graduate School of Geography, the Frances L. Hiatt School of Psychology, the Gustaf H. Carlson School of Chemistry, the Adam Institute for Urban Teaching and School Practice, the International Development, Community and Environment (IDCE), and the School of Professional Studies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection