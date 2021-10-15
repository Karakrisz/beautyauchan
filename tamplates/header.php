    <!-- Preloader -->
    <div class="preloader">
        <div class="dot-container">
            <div class="dot dot-1"></div>
            <div class="dot dot-2"></div>
            <div class="dot dot-3"></div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
            <defs>
                <filter id="goo">
                    <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                    <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 21 -7" />
                </filter>
            </defs>
        </svg>
    </div>
    <!-- Preloader End -->


    <header>
        <div class="inner-header">
            <div class="">
                <div class="row no-gutters">
                    <div class="col-4 col-lg-4 d-flex align-items-center">
                        <a href="javascript:void(0)" class="sidemenu_btn link" id="sidemenu_toggle">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                    <div class="col-4 col-lg-4 d-flex justify-content-center">
                        <a class="navbar-brand link" href="/">
                            <img src="portfolio-agency/img/logo.png" alt="logo">
                        </a>
                    </div>
                    <div class="col-4 col-lg-4 d-flex justify-content-end align-items-center">
                        <a href="#contact-sec" class="btn btn-main rounded-pill">Hívás most</a>
                    </div>
                </div>
            </div>
        </div>
        <!--Side Nav-->
        <div class="side-menu hidden side-menu-opacity">
            <div class="bg-overlay"></div>
            <div class="inner-wrapper">
                <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
                <div class="container">
                    <div class="row w-100 side-menu-inner-content">
                        <div class="col-12 col-lg-8 offset-lg-2 nav-icon">
                            <nav class="navbar navbar-nav">
                                <div class="side-nav-menu">
                                    <a class="side-nav-menu__link nav-link home active anim-text-white" href="#">Kezdőlap</a>
                                    <a class="side-nav-menu__link nav-link scroll anim-text-white" href="#services-sec">Rólunk</a>
                                    <a class="side-nav-menu__link nav-link scroll anim-text-white" href="#portfolio-sec">Galéria</a>
                                    <a class="side-nav-menu__link nav-link scroll anim-text-white" href="#testimonial-sec">Akciók</a>
                                    <a class="side-nav-menu__link nav-link scroll anim-text-white" href="#contact-sec">Kapcsolat
                                        <span></span><span></span><span></span></a>
                                    <span class="menu-line link"><i aria-hidden="true">/</i></span>
                                </div>
                            </nav>
                        </div>
                        <div class="side-menu-footer">
                            <div class="social-icons">
                                <span><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></span>
                                <!-- <span><a href="#" class="twit"><i class="fab fa-twitter"></i></a></span>
                                <span><a href="#" class="in"><i class="fab fa-linkedin-in"></i></a></span>
                                <span><a href="#" class="insta"><i class="fab fa-instagram"></i></a></span> -->
                            </div>
                            <p class="copywrite text-right">&#169; 2020 karaKrisz</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a id="close_side_menu" href="javascript:void(0);"></a>
    </header>