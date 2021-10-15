    <!--About section start-->
    <section class="contact-sec about-sec padding-top-half padding-bottom" id="contact-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <div class="heading-area long-area">
                        <h4 class="heading about-sec__h4 wow slideInLeft">Rólunk, tartalmi rész feltöltése</h4>
                    </div>
                </div>
                <div class="col-12 col-lg-9 position-relative">
                    <div class="contact-inner">
                        <div class="contact-form-sec about-form-sec padding-top-half">
                            <form method="POST" action="/aboutSubmit" class="row about-form wow fadeInUp" id="about-form-data">
                                <div class="col-sm-12" id="result"></div>
                                <div class="col-12">
                                    <input type="text" name="about_name" id="about_name" placeholder="Rólunk tartalmi rész megnevezése" class="form-control">
                                </div>
                                <div class="col-12">
                                    <button class="about-form__btn btn btn-main-inverse rounded-pill w-100"><i class="fa fa-spinner fa-spin mr-2 d-none about-form__btn__i" aria-hidden="true"></i>Rólunk tartalom rögzítése
                                    </button>
                                </div>
                            </form>
                            <div class="alert alert-success inserted-alert-success">
                                <p id="promotions-inserted">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact section end-->