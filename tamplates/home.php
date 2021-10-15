    <!--main slider section start-->
    <section class="main">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-12 col-lg-3 align-items-center justify-content-end nav-icon d-none d-lg-flex">
                    <nav class="navbar navbar-nav">
                        <div class="side-nav-menu ml-auto wow slideInLeft" data-wow-delay=".5s">
                            <a class="nav-link home active anim-text" href="#">Kezdőlap</a>
                            <a class="nav-link scroll anim-text" href="#services-sec">Rólunk</a>
                            <a class="nav-link scroll anim-text" href="#portfolio-sec">Galéria</a>
                            <a class="nav-link scroll anim-text" href="#testimonial-sec">Akciók</a>
                            <a class="nav-link scroll anim-text" href="#contact-sec">Kapcsolat
                                <span></span><span></span><span></span></a>
                            <span class="menu-line link"><i aria-hidden="true">/</i></span>
                        </div>
                    </nav>
                    <div class="sidenav-bottom">
                        <div class="social-icons">
                            <span><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></span>
                            <!-- <span><a href="#" class="twit"><i class="fab fa-twitter"></i></a></span>
                            <span><a href="#" class="in"><i class="fab fa-linkedin-in"></i></a></span>
                            <span><a href="#" class="insta"><i class="fab fa-instagram"></i></a></span> -->
                        </div>
                        <p class="copywrite text-right">&#169; 2020 karaKrisz</p>
                    </div>
                </div>
                <div class="col-12 col-lg-9 img-area">
                    <div class="slider-img position-relative wow slideInRight" data-wow-delay=".5s">
                        <img src="/karaKrisz/img/fashion-woman-with-beautiful-multicolored-nails.jpg" alt="Beauty Auchan" />
                        <div class="white-overlay"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--main slider section end-->

    <!--Services section start-->
    <section class="services-sec padding-top padding-bottom-half" id="services-sec">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="heading-area">
                        <h4 class="heading wow slideInLeft">Rólunk</h4>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="image-holder wow slideInRight">
                        <img src="/karaKrisz/img/nail-hygiene-care-flat-lay.jpg" alt="Beauty Auchan">
                    </div>
                </div>
                <div class="col-12 padding-top-half">
                    <ul class="services-boxes">
                        <?php foreach ($about_us as $about) : ?>
                            <li class="service-card left wow slideInLeft">
                                <div class="icon-holder"><i class="lni lni-bulb"></i></div>
                                <p class="text"><?php esc($about['about_name'])  ?></p>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Services section end-->

    <!--Portfolio section start-->
    <section class="portfolio-sec padding-top-half" id="portfolio-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <div class="heading-area long-area">
                        <h4 class="heading wow slideInLeft">Galéria</h4>
                    </div>
                </div>
                <div class="col-12 col-lg-9 position-relative">
                    <div class="portfolio-carousel owl-carousel owl-theme wow slideInRight">
                        <div class="item">
                            <div class="image-holder">
                                <img src="/karaKrisz/img/shop/0-02-0a-244c38327dda2525cf1b7e200bf9537c06ce97c102651c3b2a851c3e9256e4e3_1c6da4999a0000.jpg" alt="Beauty Auchan">
                            </div>
                            <div class="work-detail row no-gutters">
                                <div class="col-12 col-md-6 col-lg-8 text-center text-md-left mb-3 mb-lg-0">
                                    <h4 class="work-heading">Lorem Ispum</h4>
                                    <p class="text">Lorem ipsum is simply dummy text of the printing</p>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 d-flex align-items-center justify-content-center justify-content-md-end">
                                    <a href="#" class="work-btn btn-main rounded-pill">Hívás most</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image-holder">
                                <img class="portfolio-sec__slider-img" src="/karaKrisz/img/shop/0-02-0a-4859c98cd35aed3cf2f3e3dad108346a3cc16e69bd21cac91239081af5d88c1b_1c6da4999a74f3.jpg" alt="Beauty Auchan">
                            </div>
                            <div class="work-detail row no-gutters">
                                <div class="col-12 col-md-6 col-lg-8 text-center text-md-left mb-3 mb-lg-0">
                                    <h4 class="work-heading">Lorem Ispum</h4>
                                    <p class="text">Lorem ipsum is simply dummy text of the printing</p>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 d-flex align-items-center justify-content-center justify-content-md-end">
                                    <a href="#" class="work-btn btn-main rounded-pill">Hívás most</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image-holder">
                                <img class="portfolio-sec__slider-img" src="/karaKrisz/img/shop/0-02-0a-9d0fe5ae98186dd041b650b152471cdceb9991bc7bc5f2a2f1945ae57b8fe5a8_1c6da4999a10dc.jpg" alt="Beauty Auchan">
                            </div>
                            <div class="work-detail row no-gutters">
                                <div class="col-12 col-md-6 col-lg-8 text-center text-md-left mb-3 mb-lg-0">
                                    <h4 class="work-heading">Lorem Ispum</h4>
                                    <p class="text">Lorem ipsum is simply dummy text of the printing</p>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 d-flex align-items-center justify-content-center justify-content-md-end">
                                    <a href="#" class="work-btn btn-main rounded-pill">Hívás most</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image-holder">
                                <img class="portfolio-sec__slider-img" src="/karaKrisz/img/shop/0-02-0a-e21dff5b2885678a9135a414b34434b7e369e66f9c89be9b4ab219d183d7779e_1c6da4999a543f.jpg" alt="Beauty Auchan">
                            </div>
                            <div class="work-detail row no-gutters">
                                <div class="col-12 col-md-6 col-lg-8 text-center text-md-left mb-3 mb-lg-0">
                                    <h4 class="work-heading">Lorem Ispum</h4>
                                    <p class="text">Lorem ipsum is simply dummy text of the printing</p>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 d-flex align-items-center justify-content-center justify-content-md-end">
                                    <a href="#" class="work-btn btn-main rounded-pill">Hívás most</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image-holder">
                                <img class="portfolio-sec__slider-img" src="/karaKrisz/img/shop/0-02-0a-e2af71d70d0cca6d6bb6f559e7dc55cab4f122bffd79814bc4fde7e724023cd0_1c6da4999a64e8.jpg" alt="Beauty Auchan">
                            </div>
                            <div class="work-detail row no-gutters">
                                <div class="col-12 col-md-6 col-lg-8 text-center text-md-left mb-3 mb-lg-0">
                                    <h4 class="work-heading">Lorem Ispum</h4>
                                    <p class="text">Lorem ipsum is simply dummy text of the printing</p>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 d-flex align-items-center justify-content-center justify-content-md-end">
                                    <a href="#" class="work-btn btn-main rounded-pill">Hívás most</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image-holder">
                                <img class="portfolio-sec__slider-img" src="/karaKrisz/img/shop/0-02-0a-e93e8b734f14cadfc41e20fb1acc4944bae24a835e323f503726846e37465804_1c6da499994d4a.jpg" alt="Beauty Auchan">
                            </div>
                            <div class="work-detail row no-gutters">
                                <div class="col-12 col-md-6 col-lg-8 text-center text-md-left mb-3 mb-lg-0">
                                    <h4 class="work-heading">Lorem Ispum</h4>
                                    <p class="text">Lorem ipsum is simply dummy text of the printing</p>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 d-flex align-items-center justify-content-center justify-content-md-end">
                                    <a href="#" class="work-btn btn-main rounded-pill">Hívás most</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="work-navigation">
                        <a href="javascript:void(0);" class="portfolio-left-arr"><i class="lni lni-chevron-left"></i></a>
                        <a href="javascript:void(0);" class="portfolio-right-arr"><i class="lni lni-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Portfolio section end-->

    <!--testimonial section start-->
    <section class="testimonial-sec padding-top-half padding-bottom-half" id="testimonial-sec">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-0">
                    <div class="heading-area">
                        <h4 class="heading wow slideInLeft">Havi <br> akciók</h4>
                    </div>
                </div>
                <div class="col-12 col-lg-12 position-relative">
                    <div class="review-carousel owl-carousel owl-theme wow slideInRight">
                        <div class="item">
                            <div class="image-holder">
                                <img src="/karaKrisz/img/beautiful-woman-hands-salon.jpg" alt="Beauty Auchan">
                            </div>
                            <?php foreach ($promotions as $promotion) : ?>
                                <div class="review-detail position-relative">
                                    <p class="text"><?php esc($promotion['promotions_comment'])  ?> </p>
                                    <i class="fas fa-quote-right quote-icon"></i>
                                </div>
                                <div class="user-detail">
                                    <h4 class="user-name"><?php esc($promotion['promotions_name'])  ?></h4>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--testimonial section end-->

    <!--Contact section start-->
    <section class="contact-sec padding-top-half padding-bottom" id="contact-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <div class="heading-area long-area">
                        <h4 class="contact-sec__h4 heading wow slideInLeft">Vegye fel velünk a kapcsolatot</h4>
                    </div>
                </div>
                <div class="col-12 col-lg-9 position-relative">
                    <div class="contact-inner">
                        <div class="contact-details wow fadeInUp">
                            <ul>
                                <li><i class="far fa-paper-plane opacity-5"></i>email@website.com</li>
                                <li><i class="lni lni-phone opacity-7"></i>+1 631 1234 5678</li>
                                <li><i class="lni lni-map-marker opacity-7"></i>123 Park Avenue, New York</li>
                            </ul>
                        </div>
                        <div class="contact-form-sec padding-top-half">
                            <form class="row contact-form wow fadeInUp" id="contact-form-data">
                                <div class="col-sm-12" id="result"></div>
                                <div class="col-12">
                                    <input type="text" name="userName" placeholder="Name" class="form-control">
                                    <input type="text" name="userSubject" placeholder="Contact No" class="form-control">
                                    <input type="email" name="userEmail" placeholder="Email" class="form-control">
                                    <textarea class="form-control" name="userMessage" rows="6" placeholder="Type Your Message Here"></textarea>
                                </div>
                                <div class="col-12">
                                    <a href="javascript:void(0);" class="btn btn-main-inverse rounded-pill w-100 contact_btn"><i class="fa fa-spinner fa-spin mr-2 d-none" aria-hidden="true"></i>Küldés most
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact section end-->