    <!--Contact section start-->
    <section class="contact-sec padding-top-half padding-bottom" id="contact-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <div class="heading-area long-area">
                        <h4 class="heading wow slideInLeft">Akció rögzítése</h4>
                    </div>
                </div>
                <div class="col-12 col-lg-9 position-relative">
                    <div class="contact-inner">
                        <div class="contact-form-sec promotions-form-sec padding-top-half">
                            <form method="POST" action="/promotionsSubmit" class="row promotions-form wow fadeInUp" id="promotions-form-data">
                                <div class="col-sm-12" id="result"></div>
                                <div class="col-12">
                                    <input type="text" name="promotions_name" id="promotions_name" placeholder="Akció megnevezése" class="form-control">
                                    <textarea class="form-control" name="promotions_comment" id="promotions_comment" rows="6" placeholder="Akció jellemzése"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="promotions-form__btn btn btn-main-inverse rounded-pill w-100"><i class="fa fa-spinner fa-spin mr-2 d-none promotions-form__btn__i" aria-hidden="true"></i>Akció rögzítése
                                    </button>
                                </div>
                            </form>
                            <div class="promotions-form-sec__link-box">
                                <a href="/aboutAdding" class="promotions-form-sec__link-box__btn">
                                    Rólunk, tartalmi rész feltöltés
                                </a>
                            </div>
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