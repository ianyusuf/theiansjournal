@extends('layouts.home')

@section('title')
    Home
@endsection

@section('content')
    <div id="main" class="site-main clearfix">
        <!-- HEADER SECTION
        ============================================= -->
        <div class="home-intro clearfix">
            <div id="slider" class="home-slider fullscreen clearfix">
                <div id="overlay"></div>
                <div class="header-section" style="background-image: url(img/slider/slider1.jpg); height: 100%">
            </div>
            <header class="header-title">
                <h2>YOU ONLY LIVE ONCE, BUT YOU GET TO SERVE TWICE</h2>
                <div class="header-button">
                    <a class="button button-white" href="#index.html">Book Your Court</a>
                </div>
            </header>
        </div>
        <!-- HEADER END
        ============================================= -->

        <!-- JOURNAL START
        ============================================= -->
        <div class="section-white-padding clearfix">
            <div class="blog_post_preview">
                <article>
                    <div class="article-image">
                        <span class="article-gradient" style="background: #008566"></span>
                        <img alt="" src="img/journal/journal-home.jpg">
                    </div>
                    <div class="article-text">
                        <div class="article-text--inner">
                            <h3 class="article-title-text">Tennis Journal / About Us</h3>
                            <div class="mobile-none">
                                <span class="article-title-desc-span">Kumpulan jurnal tennis dari raket<br></span>
                                <span class="article-title-desc-span">pakaian, sampai ke equipment.<br></span>
                                <span class="article-title-desc-span">Mempertajam pukulan anda<br></span>
                                <span class="article-title-desc-span">dari servis sampai lob.</span>
                            </div>

                            <div class="desktop-none">
                                <span class="article-title-desc-span">Kumpulan jurnal tennis dari raket pakaian, sampai ke equipment. Mempertajam pukulan anda dari servis sampai lob.</span>
                            </div>

                            <div class="article-button basic-button mobile-none">
                                <a class="info-button button-normal" href="#index.html">Book Your Court</a>
                            </div>
                            <div class="basic-button desktop-none">
                                <a class="info-button button-white" href="#index.html">View All Journal</a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
        <!-- JOURNAL END -->

        <!-- COURT SECTION
        ============================================= -->
        <div class="section-padding court-section clearfix" style="background-image: url(img/court/court-bg-overlay.jpg);">
            <div class="container">
                <div class="court-desc clearfix">
                    <div class="row">
                        <div class="latest-post-header clearfix">
                            <div class="col-md-8">
                                <h2 class="court-title">Court</h2>
                                <!-- <h2 class="court-title">court</h2> -->
                                <!-- <div class="desc-text">
                                    <p>Porttitor suscipit. Quisque justo tortor, convallis id elit vitae, posuere ullamcorper ante. Sed in magna viverra, fermentum arcu sit amet, porttitor nulla. Vestibulum vestibulum sem neque. Mauris varius porttitor suscipit. Quisque justo tortor, convallis id elit vitae.</p>
                                </div> -->
                            </div>
                            <div class="court-button mobile-none">
                                <a href="#index.html" class="button button-white button-top">Book Your Court</a>
                                <!-- <a href="#index.html" class="button button-white button-top">Book Your court</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="court-wrap">
                    <div class="row">
                        <div class="the-court col-md-4">
                            <div class="court-image-wrap">
                                <a href="#index.html">
                                    <div class="court-image">
                                        <img srcset="img/court/gbk.jpg"/>
                                    </div>
                                    <div class="court-detail">
                                        <h4 class="court-name">Gelora Bung Karno</h4>
                                        <span class="court-position">Jakarta Selatan</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="the-court col-md-4">
                            <div class="court-image-wrap">
                                <a href="#index.html">
                                    <div class="court-image">
                                        <img srcset="img/court/citos.jpg"/>
                                    </div>
                                    <div class="court-detail">
                                        <h4 class="court-name">Cilandak Town Square</h4>
                                        <span class="court-position">Jakarta Selatan</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="the-court col-md-4">
                            <div class="court-image-wrap">
                                <a href="#index.html">
                                    <div class="court-image">
                                        <img srcset="img/court/tanjung-mas-raya.jpg"/>
                                    </div>
                                    <div class="court-detail">
                                        <h4 class="court-name">Tanjung Mas Raya</h4>
                                        <span class="court-position">Jakarta Selatan</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="court-desc-mobile desktop-none">
                    <a href="#index.html" class="button button-white button-top">Book Your Court</a>
                    <!-- <a href="#index.html" class="button button-white button-top">Book Your court</a> -->
                </div>
            </div>
        </div>
        <!-- COURT SECTION END
        ============================================= -->

        <!-- COMMUNITY SECTION
	    ============================================= -->
        <div class="section-white-padding clearfix">
            <div class="community_post_preview">
                <article>
                    <div class="article-image">
                        <span class="article-gradient" style="background: #000"></span>
                        <img alt="" src="img/community/community-home.jpg">
                    </div>
                    <div class="article-text">
                        <div class="article-text--inner">
                            <h3 class="article-title-text">Tennis Journal / Community</h3>
                            <div class="mobile-none">
                                <span class="article-title-desc-span">Berhubungan dengan sesama<br></span>
                                <span class="article-title-desc-span">pemain, berbagi momen dan<br></span>
                                <span class="article-title-desc-span">rayakan kemenangan bersama<br></span>
                                <span class="article-title-desc-span">dengan komunitasmu.</span>
                            </div>

                            <div class="desktop-none">
                                <span class="article-title-desc-span">Berhubungan dengan sesama pemain, berbagi momen dan rayakan kemenangan bersama dengan komunitasmu.</span>
                            </div>

                            <div class="article-button basic-button mobile-none">
                                <a class="info-button button-normal" href="#index.html">View All Community</a>
                            </div>
                            <div class="basic-button desktop-none">
                                <a class="info-button button-white" href="#index.html">View All Community</a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <!-- <div class="container">
                <div class="row">
                    <div class="endorse-section clearfix">
                        <div class="container">
                            <div class="endorse-wrap">
                                <div class="endorse-item">
                                    <a href="#index.html">
                                        <img src="img/community/tennis-troops.jpg" alt="endorse" />
                                    </a>
                                </div>
                                <div class="endorse-item">
                                    <a href="#index.html">
                                        <img src="img/community/tennis-kuy.jpg" alt="endorse" />
                                    </a>
                                </div>
                                <div class="endorse-item">
                                    <a href="#index.html">
                                        <img src="img/community/pejaten-tennis-club.jpg" alt="endorse" />
                                    </a>
                                </div>
                                <div class="endorse-item">
                                    <a href="#index.html">
                                        <img src="img/community/tennis-launcher.jpg" alt="endorse" />
                                    </a>
                                </div>
                                <div class="endorse-item">
                                    <a href="#index.html">
                                        <img src="img/community/bhm-tennis-club.jpg" alt="endorse" />
                                    </a>
                                </div>
                                <div class="endorse-item">
                                    <a href="#index.html">
                                        <img src="img/community/vamos-tennis.jpg" alt="endorse" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        
        
        <!-- COMMUNITY SECTION end
	    ============================================= -->

        <!-- COLUMN SECTION
        ============================================= -->
        <!-- <div class="blog_post_slider">
            <div class="slider-title">
                <h2>Lifestyle</h2>
            </div>
            <div class="post_slide_wrapper flickity-enabled is-draggable">
                <div class="flickity-viewport" style="touch-action: pan-y;">
                    <div class="flickity-slider" style="left: 0px; transform: translateX(-375.81%);">
                        <a href="https://www.fredperry.com/subculture/articles/fred-perry-shirt-care-guide" class="post_slide" data-url="https://www.fredperry.com/subculture/articles/fred-perry-shirt-care-guide" style="position: absolute; left: 464.71%;">
                            <div class="post_slide--image">
                                <img src="https://d30l99xc13l2t1.cloudfront.net/media/defacto_blog/cache/500/C/a/1947-Care_Guide_lead.jpg">
                            </div>
                            <div class="post_slide--text">
                                <h3 class="h4">Lifestyle <span class="h3">Fred Perry: Pionir Fashion Tennis</span></h3>
                                <p>Looking after your clothes is important. Not only does it make your favourite gear last longer, but it’s also better for the environment. Long-lasting clothes = less waste.</p>
                                <p>Take care of your Fred Perry Shirt with our handy guide and keep it looking sharp for future generations.</p>
                            </div>
                        </a>
                        <a href="https://www.fredperry.com/subculture/articles/charlie-casely-hayford" class="post_slide" style="position: absolute; left: 92.94%;">
                        <div class="post_slide--image">
                            <img src="https://d30l99xc13l2t1.cloudfront.net/media/defacto_blog/cache/500/H/E/1976-HEADERIMAGE.jpg">
                        </div>
                        <div class="post_slide--text">
                            <h3 class="h4">Lifestyle <span class="h3">Saat Tenis Menikah dengan Fashion</span></h3>
                            <p>Charlie Casely-Hayford is one of the brightest design talents around. He has been rightfully hailed as a ‘brilliant Brit’ and as one of the UK’s best dressed men by <em>GQ</em>, not to mention <em>i-D</em> endorsing him among the 100 most important people in fashion. </p>
                        </div>
                        </a>
                        <a href="https://www.fredperry.com/subculture/articles/aden-music-grant-winner" class="post_slide" style="position: absolute; left: 185.88%;">
                            <div class="post_slide--image">
                                <img src="https://d30l99xc13l2t1.cloudfront.net/media/defacto_blog/cache/500/A/d/1993-Aden_lead.jpg">
                            </div>
                            <div class="post_slide--text">
                                <h3 class="h4">Lifestyle <span class="h3">Bagaimana Serena Williams memenangkan game fashion</span>
                                </h3>
                                <p>Introducing the winner of the Fred Perry x Nicholas Daley music grant, London-based cosmic soul singer aden.</p>
                            </div>
                        </a>
                        <a href="#" class="post_slide" style="position: absolute; left: 278.83%;">
                            <div class="post_slide--image">
                                <img src="https://d30l99xc13l2t1.cloudfront.net/media/defacto_blog/cache/500/1/_/2063-1.jpg">
                            </div>
                            <div class="post_slide--text">
                                <h3 class="h4"> AMY WINEHOUSE FOUNDATION <span class="h3">Celebrating 10 Years of Fred Perry x Amy Winehouse Foundation </span>
                                </h3>
                                <p>Amy Winehouse fit Fred Perry like rhythm fit the blues. That the collaboration between Winehouse with the timeless fashion house continues to soar in popularity almost a decade since her death renders her as unforgettable an icon of British style as Fred Perry itself.</p>
                            </div>
                        </a>
                        <a href="#" class="post_slide is-selected" data-url="https://www.fredperry.com/subculture/articles/all-our-tomorrows-2020-saturday" style="position: absolute; left: 371.77%;">
                            <div class="post_slide--image">
                                <img src="https://d30l99xc13l2t1.cloudfront.net/media/defacto_blog/cache/500/a/o/2049-aot_saturday_1.jpg">
                            </div>
                            <div class="post_slide--text">
                                <h3 class="h4"> SUBCULTURE <span class="h3">All Our Tomorrows - Jockstrap</span></h3>
                                <p>For 2020 our new music weekender goes online as we transport you – virtually – to our beloved 100 Club. With performances from Bebeluna, LCYTN, Louis Culture and Jockstrap, Al Mills tells us why Britain’s still got it.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <button class="flickity-button flickity-prev-next-button previous" type="button" aria-label="Previous" tabindex="-1">
                <svg class="flickity-button-icon" viewBox="0 0 100 100">
                    <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" class="arrow"></path>
                </svg>
                </button>
                <button class="flickity-button flickity-prev-next-button next" type="button" aria-label="Next" tabindex="-1">
                <svg class="flickity-button-icon" viewBox="0 0 100 100">
                    <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" class="arrow" transform="translate(100, 100) rotate(180) "></path>
                </svg>
                </button>
                <ol class="flickity-page-dots">
                <li class="dot" aria-label="Page dot 1"></li>
                <li class="dot" aria-label="Page dot 2"></li>
                <li class="dot" aria-label="Page dot 3"></li>
                <li class="dot" aria-label="Page dot 4"></li>
                <li class="dot is-selected" aria-label="Page dot 5" aria-current="step"></li>
                </ol>
            </div>
        </div> -->
        <!-- LIFESTYLE SECTION END
        ============================================= -->

        <!-- COLUMN SECTION
        ============================================= -->
        <!-- <div class="latest-column-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="column-header clearfix">
                        <div class="col-md-8">
                            <h2 class="column-title">Column</h2>
                        </div>
                        <div class="journal-button col-md-4 text-right vertical-center">
                            <a href="#index.html" class="button button-normal button-top">View All Column</a>
                        </div>
                    </div>
                    <div class="journal-list">
                        <div class="journal-space row">
                            <div class="row col-md-12">
                                <div class="journal-item col-md-4">
                                    <a href="#index.html">
                                        <div class="journal-cover">
                                            <img srcset="img/column/lifestyle/tenniscore.jpg" />
                                        </div>
                                        <div class="journal-content-wrap">
                                            <div class="journal-content">
                                                <div class="journal-detail">
                                                    <div class ="row">
                                                        <div class ="col-md-6">
                                                            <p class="journal-column bold">Lifestyle</p>
                                                        </div>
                                                        <div class ="col-md-6">
                                                            <p class="journal-date bold">31/08/2022</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="journal-article">
                                                    <h4 class="journal-title-text">Tenniscore Membawa Era Baru Luxury Fashion Untuk Olahraga</h4>
                                                    <p class="journal-text">Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak. Maksud penggunaan lipsum adalah...</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="journal-item col-md-4">
                                    <a href="#index.html">
                                        <div class="journal-cover">
                                            <img srcset="img/column/lifestyle/tenniscore.jpg" />
                                        </div>
                                        <div class="journal-content-wrap">
                                            <div class="journal-content">
                                                <div class="journal-detail">
                                                    <div class ="row">
                                                        <div class ="col-md-6">
                                                            <p class="journal-column bold">Lifestyle</p>
                                                        </div>
                                                        <div class ="col-md-6">
                                                            <p class="journal-date bold">31/08/2022</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="journal-article">
                                                    <h4 class="journal-title-text">Tenniscore Membawa Era Baru Luxury Fashion Untuk Olahraga</h4>
                                                    <p class="journal-text">Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak. Maksud penggunaan lipsum adalah...</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="journal-item col-md-4">
                                    <a href="#index.html">
                                        <div class="journal-cover">
                                            <img srcset="img/column/lifestyle/tenniscore.jpg" />
                                        </div>
                                        <div class="journal-content-wrap">
                                            <div class="journal-content">
                                                <div class="journal-detail">
                                                    <div class ="row">
                                                        <div class ="col-md-6">
                                                            <p class="journal-column bold">Lifestyle</p>
                                                        </div>
                                                        <div class ="col-md-6">
                                                            <p class="journal-date bold">31/08/2022</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="journal-article">
                                                    <h4 class="journal-title-text">Tenniscore Membawa Era Baru Luxury Fashion Untuk Olahraga</h4>
                                                    <p class="journal-text">Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak. Maksud penggunaan lipsum adalah...</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="journal-item col-md-4">
                                    <div class="journal-space row">
                                        <a href="#index.html">
                                            <div class="journal-cover-small">
                                                <img srcset="img/column/lifestyle/kate-middleton-dress.jpg" />
                                            </div>
                                            <div class="journal-content-wrap">
                                                <div class="journal-content">
                                                    <div class="journal-detail">
                                                        <div class ="row">
                                                            <div class ="col-md-4">
                                                                <p class="journal-column-small bold">Lifestyle</p>
                                                            </div>
                                                            <div class ="col-md-8">
                                                                <p class="journal-date-small bold">31/08/2022</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="journal-article-small">
                                                        <h4 class="journal-title-text-small">Gaya Gaun Kate Middleton Untuk Menyanjung Sejarah Wimbledon</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="journal-space row">
                                        <a href="#index.html">
                                            <div class="journal-cover-small">
                                                <img srcset="img/column/news/nadal.jpg" />
                                            </div>
                                            <div class="journal-content-wrap">
                                                <div class="journal-content">
                                                    <div class="journal-detail">
                                                        <div class ="row">
                                                            <div class ="col-md-4">
                                                                <p class="journal-column-small bold">News</p>
                                                            </div>
                                                            <div class ="col-md-8">
                                                                <p class="journal-date-small bold">31/08/2022</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="journal-article-small">
                                                        <h4 class="journal-title-text-small">Rafael Nadal Hari Ini 64-2 di Ronde Pertama Grand Slams</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <aside id="primary-sidebar" class="sidebar col-md-2">
                                <div class="blog-sidebar">
                                    <div id="recent-posts-2" class="widget widget_recent_entries" style="font-family: 'tj-bold';">
                                        <ul>
                                            <li>
                                                <div class="sidebar-detail">
                                                    <div class ="row">
                                                        <div class ="col-md-6">
                                                            <p class="sidebar-column bold">Lifestyle</p>
                                                        </div>
                                                        <div class ="col-md-6">
                                                            <p class="sidebar-date bold">31/08/2022</p>
                                                        </div>
                                                    </div>
                                                    <div class ="row">
                                                        <div class ="col-md-12">
                                                            <a class="sidebar-text" href="#index.html">Saat Tenis Menikah dengan Fashion</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sidebar-detail">
                                                    <div class ="row">
                                                        <div class ="col-md-6">
                                                            <p class="sidebar-column bold">News</p>
                                                        </div>
                                                        <div class ="col-md-6">
                                                            <p class="sidebar-date bold">31/08/2022</p>
                                                        </div>
                                                    </div>
                                                    <div class ="row">
                                                        <div class ="col-md-12">
                                                            <a class="sidebar-text" href="#index.html">Alex De Minaur Tebus Kekalahan Pahit Wimbledon</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sidebar-detail">
                                                    <div class ="row">
                                                        <div class ="col-md-6">
                                                            <p class="sidebar-column bold">News</p>
                                                        </div>
                                                        <div class ="col-md-6">
                                                            <p class="sidebar-date bold">31/08/2022</p>
                                                        </div>
                                                    </div>
                                                    <div class ="row">
                                                        <div class ="col-md-12">
                                                            <a class="sidebar-text" href="#index.html">Andy Murray Hentikan Laju Emilio Nava</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sidebar-detail">
                                                    <div class ="row">
                                                        <div class ="col-md-6">
                                                            <p class="sidebar-column bold">Lifestyle</p>
                                                        </div>
                                                        <div class ="col-md-6">
                                                            <p class="sidebar-date bold">31/08/2022</p>
                                                        </div>
                                                    </div>
                                                    <div class ="row">
                                                        <div class ="col-md-12">
                                                            <a class="sidebar-text" href="#index.html">Spotlight: Emma Raducanu di US Open</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sidebar-detail">
                                                    <div class ="row">
                                                        <div class ="col-md-6">
                                                            <p class="sidebar-column bold">News</p>
                                                        </div>
                                                        <div class ="col-md-6">
                                                            <p class="sidebar-date bold">31/08/2022</p>
                                                        </div>
                                                    </div>
                                                    <div class ="row">
                                                        <div class ="col-md-12">
                                                            <a class="sidebar-text" href="#index.html">Cori Gauff Hadang Madison Keys Di Babak Ketiga</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sidebar-detail">
                                                    <div class ="row">
                                                        <div class ="col-md-6">
                                                            <p class="sidebar-column bold">News</p>
                                                        </div>
                                                        <div class ="col-md-6">
                                                            <p class="sidebar-date bold">31/08/2022</p>
                                                        </div>
                                                    </div>
                                                    <div class ="row">
                                                        <div class ="col-md-12">
                                                            <a class="sidebar-text" href="#index.html">Venus Williams Gugur Di Babak Pertama</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- COLUMN SECTION END
        ============================================= -->

        <!-- FOOTER START
        ============================================= -->
        <footer id="footer" class="site-footer wrapper clearfix">
            <div class="container">
                <div class="row">
                    <!-- WIDGET FOOTER START
                    ============================================= -->
                    <div class="footer-widget col-md-2"></div>
                    <div class="footer-widget col-md-8">
                        <div id="text-5" class="widget-footer widget_text">
                            <h2 class="footer-title" style="text-align: center">Subscribe Tennis Journal Newsletter</h2>
                            <div class="row ">
                                <div class="col-md-12 mobile-none">
                                    <input class="input left bold" type="email" name="EMAIL" placeholder="Enter your email here...">
                                    <a href="#index.html" class="button button-subscribe">Subscribe</a>
                                </div>
                                <div class="col-md-12 desktop-none">
                                    <input class="input left bold" type="email" name="EMAIL" placeholder="Enter your email here...">
                                    <div class="subscribe-button"></div>
                                        <a href="#index.html" class="button button-subscribe">Subscribe</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-widget col-md-2"></div>
                    <div class="footer-widget col-md-2"></div>
                    <!-- WIDGET FOOTER END -->
                </div>
            </div>
        </footer>
        <!-- FOOTER END
        ============================================= -->
    </div>
    
@endsection
