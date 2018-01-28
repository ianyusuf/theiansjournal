@extends('layouts.overseas')

@section('title')
    United Kingdom
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
                            <h1 class="service_modal_header_left"> &#x25C4; United Kingdom</h1>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="work_container">
                    <div class="col-lg-6 col-md-6 col-sm-6 work-pad">
                        <div class="grid-item">
                            <a data-toggle="modal" data-target="#modal-1">
                                <span class="project_background" style="background-image: url('../img/study/uk/bc.jpg')"></span>
                                <h4>Bellerby College</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 work-pad">
                        <div class="grid-item">
                            <a data-toggle="modal" data-target="#modal-2">
                                <span class="project_background" style="background-image: url('../img/study/uk/sheffield.jpg')"></span>
                                <h4>The University of Sheffield</h4>
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
                                <span class="project_background" style="background-image: url('../img/study/uk/surrey.jpg')"></span>
                                <h4>University of Surrey</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 work-pad">
                        <div class="grid-item">
                            <a data-toggle="modal" data-target="#modal-4">
                                <span class="project_background" style="background-image: url('../img/study/uk/sussex.jpg')"></span>
                                <h4>University Of Sussex</h4>
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
                                <span class="project_background" style="background-image: url('../img/study/uk/rh.jpg')"></span>
                                <h4>Royal Holloway University London</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 work-pad">
                        <div class="grid-item">
                            <a data-toggle="modal" data-target="#modal-6">
                                <span class="project_background" style="background-image: url('../img/study/uk/jm.jpg')"></span>
                                <h4>Liverpool John Moores University</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="work_container">
                    <div class="col-lg-6 col-md-6 col-sm-6 work-pad">
                        <div class="grid-item">
                            <a data-toggle="modal" data-target="#modal-7">
                                <span class="project_background" style="background-image: url('../img/study/uk/im.jpg')"></span>
                                <h4>Institute Maragoni</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 work-pad">
                        <div class="grid-item">
                            <a data-toggle="modal" data-target="#modal-8">
                                <span class="project_background" style="background-image: url('../img/study/uk/huddersfield.jpg')"></span>
                                <h4>University of Huddersfield</h4>
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
                                <span class="project_background" style="background-image: url('../img/study/uk/cats.jpg')"></span>
                                <h4>CATS College</h4>
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
                            <h4 class="uni_modal_top">uk</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <h2 class="uni_modal_header">Bellerby College</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <img src="../img/study/uk/bc.jpg" class="img-responsive" alt="ICEDU Indonesia">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1 uni_link">
                            <a href="https://www.bellerbys.com" target="_blank">www.bellerbys.com</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 service_modal_text">
                            <p>Bellerbys College is a series of three (formerly four) private international boarding schools based in the UK (Cambridge, London and Brighton, and until 2017 Oxford), owned by Study Group International who also operate language schools under the name Embassy.  Bellerbys College is coeducational, and teaches students from over 120 different countries.<br><br>
                            The college also offers a foundation program in which students choose from one of 7 subject streams: Business, Finance and Management, Law and International Relations, Engineering and Computer Science, Management Computing Systems, Science and Pharmacy, Art and Design and Humanities. The Bellerbys College foundation program is recognized by more than 50 UK universities including Bristol, Nottingham, Leeds, and Lancaster. The Bellerbys College foundation program is taught and examined to the same standards as A Levels, where applicable, and enables students to prepare for entry into a specific field of study at university while also improving their English and study skills.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.youtube.com/embed/7dmqQpDeEaE' frameborder='0' allowfullscreen></iframe></div>
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
                            <h4 class="uni_modal_top">uk</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <h2 class="uni_modal_header">The University of Sheffield</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <img src="../img/study/uk/sheffield.jpg" class="img-responsive" alt="ICEDU Indonesia">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1 uni_link">
                            <a href="https://www.sheffield.ac.uk " target="_blank">www.sheffield.ac.uk </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 service_modal_text">
                            <p>The University of Sheffield is a public research university in Sheffield, South Yorkshire, England. <br><br> Sheffield is a multi-campus university predominantly over two campus areas: the Western Bank and the St George's. The university is organized into five academic faculties composed of multiple departments.Sheffield was placed 82nd worldwide according to QS World University Rankings and 104th worldwide according to Times Higher Education World University Rankings.<br><br>
                            The University of Sheffield has produce six noble price winner in the fields of Chemistry and Medicine/Physiology.</p>
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
                            <h4 class="uni_modal_top">uk</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <h2 class="uni_modal_header">University of Surrey</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <img src="../img/study/uk/surrey.jpg" class="img-responsive" alt="ICEDU Indonesia">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1 uni_link">
                            <a href="https://www.surrey.ac.uk" target="_blank">www.surrey.ac.uk</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 service_modal_text">
                            <p>The University of Surrey is a public research university located within the county town of Guildford, Surrey, in the South East of England, United Kingdom. <br><br> The university specializes in science, engineering, medicine and business. It received its charter on 9 September 1966, and was previously situated near Battersea Park in south-west London. <br><br> The university's main campus is located on Stag Hill close to the centre of Guildford and adjacent to Guildford Cathedral. A second campus, at Manor Park, is located a short distance away and has been developed to expand upon existing accommodation, academic buildings and sporting facilities.<br><br> The University of Surrey is recognized as one of the leading universities in the United Kingdom and has climbed rapidly in national league tables as of recent years. In The Sunday Times 10-year (1998–2007) average ranking of British universities based on consistent league table performance, Surrey was ranked 35th overall in the UK.  For 2018, it now places between 10th and 19th in the three main ranking compilations of universities in the United Kingdom.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.youtube.com/embed/Gq10IYUawbo' frameborder='0' allowfullscreen></iframe></div>
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
                            <h4 class="uni_modal_top">uk</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <h2 class="uni_modal_header">University Of Sussex</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <img src="../img/study/uk/sussex.jpg" class="img-responsive" alt="ICEDU Indonesia">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1 uni_link">
                            <a href="https://www.sussex.ac.uk" target="_blank">www.sussex.ac.uk</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 service_modal_text">
                            <p>The University of Sussex is a public research university in Falmer, Sussex, England. Its campus is located within the South Downs National Park and is a short distance away from Central Brighton.<br><br>
                            Sussex is a top-20* UK university that uses research-led teaching, a unique location and a strong sense of purpose to broaden its students' perspectives. Choose from over 500 undergraduate and postgraduate courses, taught by world-leading academics, and join our thriving student community.<br><br>
                            The university offers over 350 Undergraduate programs, over 210 Master Programs and over 70 PhD programs. It is research-led, with around 1000 teaching and research staff of which around 300 are research-only staff. Additionally, there are over 1200 PhD students at the university distributed across the different Schools.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.youtube.com/embed/rVkJhxeD6Lk' frameborder='0' allowfullscreen></iframe></div>
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
                            <h4 class="uni_modal_top">uk</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <h2 class="uni_modal_header">Royal Holloway University London</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <img src="../img/study/uk/rh.jpg" class="img-responsive" alt="ICEDU Indonesia">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1 uni_link">
                            <a href="https://www.royalholloway.ac.uk" target="_blank">www.royalholloway.ac.uk</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 service_modal_text">
                            <p>Royal Holloway, University of London (RHUL) is a university and a constituent college of the federal University of London.  It has three faculties, 20 academic departments and c. 9,265 undergraduate and postgraduate students from over 100 countries.  The campus is located west of Egham, Surrey, 19 miles (31 km) from central London.<br><br>
                            Royal Holloway is ranked 31st in the UK and 197th in the world by the Times Higher Education World University Rankings for 2018. Royal Holloway was ranked in 30th place in the world (9th in the UK) for 2016 in the category of "International Outlook".</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.youtube.com/embed/RUYOFenvvjQ' frameborder='0' allowfullscreen></iframe></div>
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
                            <h4 class="uni_modal_top">uk</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <h2 class="uni_modal_header">Liverpool John Moores University</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <img src="../img/study/uk/jm.jpg" class="img-responsive" alt="ICEDU Indonesia">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1 uni_link">
                            <a href="https://www.ljmu.ac.uk" target="_blank">www.ljmu.ac.uk</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 service_modal_text">
                            <p>The Liverpool John Moors University founded as a small mechanics institution (Liverpool Mechanics' School of Arts) in 1823. This small, pioneering movement was followed by the establishment of the Liverpool Institute and School of Art and the Liverpool Nautical College, and in 1900 Irene Mabel Marsh opened the IM Marsh campus. These organizations together laid the foundations for Liverpool John Moores University, an institution that has grown and flourished and continues to provide opportunities for all.<br><br>
                            Today, with a vibrant community of 25,000 students from over 100 countries world-wide, 2,500 staff and 250 degree courses, Liverpool John Moores University is one of the largest, most dynamic and forward-thinking universities in the UK.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.youtube.com/embed/rlhT71p3JfE' frameborder='0' allowfullscreen></iframe></div>
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
                            <h4 class="uni_modal_top">uk</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <h2 class="uni_modal_header">Institute Maragoni</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <img src="../img/study/uk/im.jpg" class="img-responsive" alt="ICEDU Indonesia">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1 uni_link">
                            <a href="http://www.istitutomarangoni.com" target="_blank">www.istitutomarangoni.com</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 service_modal_text">
                            <p>The Istituto Marangoni is a private Italian school of fashion and design. It is based in Milan, in Lombardy in northern Italy, and has branches in Florence, London and Paris, in Shanghai and Shenzhen in China, and Mumbai in India.<br><br>
                            The school was founded in Milan in 1935 by the tailor Giulio Marangoni, and became a Scuola Professionale Artistica or "professional art school" in 1942. At first the school trained mainly pattern makers and seamstresses; in the 1970s and 1980s it turned towards fashion design, product development and marketing.<br><br>
                            Istituto Marangoni is the international fashion school par excellence, with four Schools in the most prestigious venues of international fashion. In Milan, the capital of Made in Italy, in Florence, where fashion, art and tradition meet, in Paris, the home of haute couture, in London, where trends are born and in Shanghai, where fashion is the future, Istituto Marangoni is able to offer different visions of the contemporary fashion system to its students.<br><br>
                            Istituto Marangoni is a school where the passion for fashion unites cultures, ideas and people from all over the world. Entering Istituto Marangoni means being part of a very special community, where fashion is the common denominator in all its most cosmopolitan aspects. The four sites of Istituto Marangoni are truly one of the most international student contexts in the world, with more than 4,000 students from 106 countries, each with infinite interests, styles, and knowledge.</p>
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
                            <h4 class="uni_modal_top">uk</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <h2 class="uni_modal_header">University of Huddersfield</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <img src="../img/study/uk/huddersfield.jpg" class="img-responsive" alt="ICEDU Indonesia">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1 uni_link">
                            <a href="https://www.hud.ac.uk" target="_blank">www.hud.ac.uk</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 service_modal_text">
                            <p>The University of Huddersfield  is a public university located in Huddersfield, West Yorkshire, England.   It has been a University since 1992, but has its origins in a series of institutions dating back to the 19th century. It has made teaching quality a particular focus of its activities, winning the inaugural Higher Education Academy Global Teaching Excellence Award, and achieving a TEF Gold Award, both in 2017.<br><br> Welcome to the University of Huddersfield be of part Successful, innovative and modern community. Whatever you aim to do in life, it pays to get a good education. And with high standards of teaching and learning and excellent facilities that's exactly what our students can expect from the University of Huddersfield.  Based right in the town center and at the heart of the local community, we help thousands of people, from school leavers to those returning to education after a gap, achieve their goals each year.</p>
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
                            <h4 class="uni_modal_top">uk</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <h2 class="uni_modal_header">CATS College</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            <img src="../img/study/uk/cats.jpg" class="img-responsive" alt="ICEDU Indonesia">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1 uni_link">
                            <a href="https://www.catseducation.com" target="_blank">www.catseducation.com</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 service_modal_text">
                            <p>Founded in 1952, CATS College is one of Britain’s most distinguished education providers. For over 60 years have helped thousands of UK and international students achieve their ambitions and progress to some of the world’s most prestigious universities.<br><br>
                            CATS is a leading international high school with three campuses based in the thriving UK academic cities of Cambridge, Canterbury and London. Each campus offers a range of academic courses and subjects for students aged 14 (or 15) to 21, with an excellent record of progressing international students on to top universities in the UK and overseas. All three campuses offer one-year IGCSE/Pre-Program and a wide range of A-level subjects (available in three-, five- and six-term program) and University Foundation program for international students. We also offer the International Baccalaureate (IB) Diploma and a two-year GCSE option in Canterbury and Cambridge. Students have individual learning plans, daily tutor sessions, weekly written assessments, and a range of additional support such as the Medics and Oxbridge program.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection