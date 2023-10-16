<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Collection of Design Works by Hadyan Yusuf" />
    <meta name="author" content="Hadyan Yusuf">
    <meta charset="UTF-8" />
    <title>@yield('title')</title>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-9G1GGV32JS"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-9G1GGV32JS');
    </script>

	@yield('content')

					

                                <div id="page-nav">
                                    <div class="page-nav-wrap">
                                        <div class="page-nav-caption content-full-width block-title marquee-title">
                                            <div class="inner">
                                                <div class="next-hero-title-wrapper">
                                                    <div class="next-hero-title">
                                                        <span>Get In Touch</span>
                                                        <span>Get In Touch</span>
                                                    </div>
                                                </div>
                                                <div class="next-hero-subtitle-wrapper">
                                                    <div class="next-hero-subtitle">
                                                        <span>WOULD LOVE TO HEAR MORE FROM YOU</span>
                                                        <span>HADYANYUSUF@GMAIL.COM</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<footer class="hidden" data-bgcolor="#111">
                        <div id="footer-container">
                            <div id="backtotop" class="button-wrap left">
                                <div class="icon-wrap parallax-wrap">
                                    <div class="button-icon parallax-element">
                                    <i class="arrow-icon-up"></i>
                                    </div>
                                </div>
                                <div class="button-text sticky left">
                                    <span data-hover="Back To Top">Back To Top</span>
                                </div>
                            </div>
                            <div class="footer-middle">
                                <div class="copyright">
                                    <span data-hover="Back Top">Ian's © 2022</span>
                                </div>
                            </div>
                            <div class="socials-wrap">
                                <div class="socials-text">Social Media</div>
                                <ul class="socials">
                                    <li>
                                        <span class="parallax-wrap">
                                            <a class="parallax-element" href="https://www.instagram.com/ianyusuf/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="parallax-wrap">
                                            <a class="parallax-element" href="https://www.linkedin.com/in/hadyan-yusuf/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="parallax-wrap">
                                            <a class="parallax-element" href="https://open.spotify.com/user/ianyusuf" target="_blank"><i class="fa-brands fa-spotify"></i></a>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
            <div id="app"></div>
            </div>
        </div>
    </main>
    <div id="clone-image">
        <div class="hero-translate"></div>
    </div>
    <div id="rotate-device"></div>

	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/ajax/libs/gsap/3.10.4/gsap.min.js') }}"></script>
	<script src="{{ asset('js/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js') }}"></script>
	<script src="{{ asset('js/ajax/libs/gsap/3.10.4/ScrollToPlugin.min.js') }}"></script>
	<script src="{{ asset('js/ajax/libs/gsap/3.10.4/Draggable.min.js') }}"></script>
	<script src="{{ asset('js/ajax/libs/gsap/3.10.4/EasePack.min.js') }}"></script>
	<script src="{{ asset('js/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js') }}"></script>
	<script src="{{ asset('js/ajax/libs/ScrollMagic/2.0.8/plugins/animation.gsap.min.js') }}"></script>
	<script src="{{ asset('js/ajax/libs/three.js/r128/three.min.js') }}"></script>
	<script src="{{ asset('js/ajax/libs/jquery.imagesloaded/5.0.0/imagesloaded.pkgd.min.js') }}"></script>
	<script src="{{ asset('js/clapatwebgl.js') }}"></script>
	<script src="{{ asset('js/plugins.js') }}"></script>
	<script src="{{ asset('js/common.js') }}"></script>
	<script src="{{ asset('js/contact.js') }}"></script>
	<script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>