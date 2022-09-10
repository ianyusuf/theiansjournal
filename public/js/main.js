(function($) {

    'use strict'; 

    new WOW().init();

        $(window).load(function() { 
            $('#status').fadeOut(); 
            $('#preloader').delay(150).fadeOut('fast'); 
            $('body').delay(150).css({'overflow':'visible'});

        });

        /*-----------------------------------------------------------------------------------*/
        /*  Vertical Center
        /*-----------------------------------------------------------------------------------*/

        function verticalCenterHeight() {
            var screenHeight = $(window).height();
                $(".vertical-center").each(function() {
                $(this).css('top', ($(this).parent().height() - $(this).height()) / 2);
            });
        }

        function horizontalCenterHeight() {
            var screenHeight = $(window).width();
                $(".horizontal-center").each(function() {
                $(this).css('left', ($(this).parent().width() - $(this).width()) / 2);
            });
        }

        function musisiEqualHeight() {
            if( windowWidth > 789 ) {
            var postLeft = $('.equal-text');
            var postRight = $('.equal-image').height();

            // album
            var postLeftAlbum  = $('.equal-text-album');
            var postRightAlbum = $('.equal-image-album').height();

                postLeft.css('height', postRight );

                postLeftAlbum.css('height', postRightAlbum + 0.25);
            }
        }

        window.onload = function() {
          musisiEqualHeight();
          horizontalCenterHeight();
          verticalCenterHeight();
        };

        window.onresize = function() {
          musisiEqualHeight();
          horizontalCenterHeight();
          verticalCenterHeight();
        };

        /*-----------------------------------------------------------------------------------*/
        /*  Menu Mobile
        /*-----------------------------------------------------------------------------------*/

        var slideRight = new Menu({
            wrapper: '#main-wrapper',
            type: 'slide-right',
            menuOpenerClass: '.slide-button',
            maskId: '#slide-overlay'
        });

        var slideRightBtn = document.querySelector('#slide-buttons');
      
        slideRightBtn.addEventListener('click', function(e) {
            e.preventDefault;
            slideRight.open();
        });

        $("#c-menu--slide-right ul li.menu-item-has-children").click(function() {
          $( this ).toggleClass( "menu-selected" );
        });

        /*-----------------------------------------------------------------------------------*/
        /*  Slider
        /*-----------------------------------------------------------------------------------*/

        $(document).ready(function($){
            $('.theslide-album').sly({
                horizontal: 1,
                itemNav: 'basic',
                smart: 1,
                activateOn: 'click',
                mouseDragging: 1,
                touchDragging: 1,
                releaseSwing: 1,
                startAt: 0,
                scrollBar: '.scrollbar',
                scrollBy: false,
                speed: 300,
                elasticBounds: 1,
                dragHandle: 1,
                dynamicHandle: 1,
                keyboardNavBy: 'items',
                clickBar: 1
            });
        });

        $(document).ready(function($){
            $('.theslide-photo').sly({
                horizontal: 1,
                itemNav: 'basic',
                smart: 1,
                activateOn: 'click',
                mouseDragging: 1,
                touchDragging: 1,
                releaseSwing: 1,
                startAt: 0,
                scrollBar: '.scrollbar-gallery',
                scrollBy: false,
                speed: 300,
                elasticBounds: 1,
                dragHandle: 1,
                dynamicHandle: 1,
                keyboardNavBy: 'items',
                clickBar: 1
            });
        });
        
        /*var windowHeight;
        var windowWidth;

        windowHeight = $(window).height();
        windowWidth = $(window).width();

        $(".home-slider .boxgallery").each(function() {
            var h = $(this).height();
            var w = $(this).width();
            var ratA = w / h;
            var ratI = windowWidth / windowHeight;
            if (ratA > ratI) {
                var r = w / h;
                $(this).css('height', windowHeight);
                $(this).css('width', windowHeight * r);
                var m = ((windowHeight * r) - windowWidth) / 2;
                $(this).css('margin-left', -m);
                $(this).attr("rat", 1);
                $(this).attr("mar", m);
            } else {
                var r = h / w;
                $(this).css('width', windowWidth);
                $(this).css('height', windowWidth * r);
                var m = ((windowWidth * r) - windowHeight) / 2;
                $(this).css('margin-top', -m);
                $(this).attr("rat", 0);
                $(this).attr("mar", m);
            }
        });*/

        var windowHeight;
        var windowWidth;

        windowHeight = $(window).height();
        windowWidth = $(window).width();

        $(".fullscreen").css('height', windowHeight);

        $('.home-slider .boxgallery .panel').css('height', window.innerHeight - 0);

        var siteHeaderHeight = $('.site-header').height(),
            backgroundSlider = $('.home-slider')

        backgroundSlider.css('margin-top', -siteHeaderHeight);

        $('.endorse-wrap').owlCarousel({
            loop:true,
            margin:20,
            nav:true,
            dots:false,
            navText: [
              "<i class='fa fa-angle-left'></i>",
              "<i class='fa fa-angle-right'></i>"
              ],
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:4
                },
                1200:{
                    items:6
                }
            }
        })

        /*-----------------------------------------------------------------------------------*/
        /*  Search
        /*-----------------------------------------------------------------------------------*/

        $('.search-bar-button').on('click', function () {
            $('.search-bar').toggleClass('show');
        });
        $('.search-bar-close').on('click', function () {
            $('.search-bar').removeClass('show');
        });

        /*-----------------------------------------------------------------------------------*/
        /*  MASONRY
        /*-----------------------------------------------------------------------------------*/

        $(window).load(function() {
            $('.grid').masonry({
              itemSelector: '.blog-item'
            });
        });

        $('.venobox').venobox(); 

})(jQuery); 


/*-----------------------------------------------------------------------------------*/
/*  NOT BOT
/*-----------------------------------------------------------------------------------*/
var shield_vars_notbotjs = {
    "ajax": {
    "not_bot": {
        "action": "icwp-wpsf",
        "exec": "not_bot",
        "exec_nonce": "8d6927cceb",
        "mod_slug": "icwp-wpsf-ips",
        "ajaxurl": "https:\/\/musisitheme.themesawesome.com\/wp-admin\/admin-ajax.php"
    }
    },
    "flags": {
    "run": true
    }
};