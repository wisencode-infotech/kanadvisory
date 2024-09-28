<?php
/*
Template Name: Services Page
*/
get_header();

require_once get_template_directory() . '/templates/common-functions.php';

?>

<!-- start page title -->
<section class="top-space-margin page-title-big-typography cover-background magic-cursor round-cursor" style="background-image: url(<?php echo $banner_image_url ?>)">
    <div class="container">
        <div class="row extra-very-small-screen align-items-center">
            <div class="col-lg-5 col-sm-8 position-relative page-title-extra-small" data-anime='{ "el": "childs", "opacity": [0, 1], "translateX": [-30, 0], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h1 class="mb-20px xs-mb-20px text-white text-shadow-medium"><span class="w-30px h-2px bg-theme-blue d-inline-block align-middle position-relative top-minus-2px me-10px"></span><?php echo esc_html($banner_text_1); ?></h1>
                <h2 class="text-white text-shadow-medium fw-500 ls-minus-2px mb-0"><?php echo esc_html($banner_text_2); ?></h2>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->  
<!-- start section --> 
<section class="pb-4 sm-pb-50px">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 md-mb-35px text-center text-lg-start">
                <h3 class="fw-700 mb-0 text-dark-gray ls-minus-2px sm-ls-minus-1px" data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "delay": 0, "staggervalue": 250, "easing": "easeOutQuad" }'>In providing corporate finance and business statistics advice.</h3>
            </div>
            <div class="col-xl-6 col-lg-7 offset-xl-1 text-center text-lg-start">
                <div class="row align-items-center">
                    <!-- start counter item -->
                    <div class="col-sm-6 last-paragraph-no-margin counter-style-04 xs-mb-35px">
                        <h2 class="vertical-counter d-inline-flex alt-font text-dark-gray fw-700 ls-minus-2px xs-ls-minus-1px mb-5px" data-text="%" data-to="96"><sup class="text-emerald-green top-minus-5px"><i class="bi bi-arrow-up icon-medium"></i></sup></h2>
                        <span class="fs-19 fw-600 ls-minus-05px mb-5px d-block text-dark-gray" data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "delay": 0, "staggervalue": 250, "easing": "easeOutQuad" }'>Prefer cloud accounting</span>
                        <p class="w-90 sm-w-100 md-mx-auto" data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "delay": 100, "staggervalue": 250, "easing": "easeOutQuad" }'>Lorem ipsum simply dummy text printing type setting.</p>
                    </div>
                    <!-- end counter item -->
                    <!-- start counter item -->
                    <div class="col-sm-6 last-paragraph-no-margin counter-style-04">
                        <h2 class="vertical-counter d-inline-flex alt-font text-dark-gray fw-700 ls-minus-2px xs-ls-minus-1px mb-5px" data-text="%" data-to="98"><sup class="text-emerald-green top-minus-5px"><i class="bi bi-arrow-up icon-medium"></i></sup></h2>
                        <span class="fs-19 fw-600 ls-minus-05px mb-5px d-block text-dark-gray" data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "delay": 0, "staggervalue": 250, "easing": "easeOutQuad" }'>Most outsourced tasks</span>
                        <p class="w-90 sm-w-100 md-mx-auto" data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "delay": 100, "staggervalue": 250, "easing": "easeOutQuad" }'>Lorem ipsum simply dummy text printing type setting.</p>
                    </div>
                    <!-- end counter item -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="pt-0">
    <div class="container">
        <div class="row justify-content-center mb-6">
            <div class="col-12 sliding-box sliding-box-style-02 d-flex lg-flex-nowrap flex-wrap p-md-0" data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <!-- start sliding box item -->
                <div class="sliding-box-item md-mb-30px">
                    <div class="sliding-box-img overflow-hidden">
                        <img src="https://via.placeholder.com/600x636" alt="" class="w-100" />
                    </div>
                    <div class="d-flex flex-column align-items-start justify-content-center sliding-box-content bg-very-light-gray p-50px xl-p-35px">
                        <div class="content-hover w-100 last-paragraph-no-margin">
                            <i class="line-icon-Medal-2 align-middle icon-extra-large text-base-color mb-45px lg-mb-25px"></i>
                            <div class="fw-600 text-dark-gray ls-minus-05px fs-19 mb-5px">Targeted to growth</div>
                            <p class="lh-30">Successful account are built on financial.</p>
                        </div>
                    </div>
                </div>
                <!-- end sliding box item -->                        
                <!-- start sliding box item -->
                <div class="sliding-box-item active md-mb-30px">
                    <div class="sliding-box-img overflow-hidden">
                        <img src="https://via.placeholder.com/600x636" alt="" class="w-100" />
                    </div>
                    <div class="d-flex flex-column align-items-start justify-content-center sliding-box-content bg-very-light-gray p-50px xl-p-35px">
                        <div class="content-hover w-100 last-paragraph-no-margin">
                            <i class="line-icon-Money-Bag align-middle icon-extra-large text-base-color mb-45px lg-mb-25px"></i>
                            <div class="fw-600 text-dark-gray ls-minus-05px fs-19 mb-5px">Marketing strategy</div>
                            <p class="lh-30">Successful account are built on financial.</p>
                        </div>
                    </div>
                </div>
                <!-- end sliding box item -->                        
                <!-- start sliding box item -->
                <div class="sliding-box-item">
                    <div class="sliding-box-img overflow-hidden">
                        <img src="https://via.placeholder.com/600x636" alt="" class="w-100" />
                    </div>
                    <div class="d-flex flex-column align-items-start justify-content-center sliding-box-content bg-very-light-gray p-45px xl-p-35px">
                        <div class="content-hover w-100 last-paragraph-no-margin">
                            <i class="line-icon-Financial align-middle icon-extra-large text-base-color mb-45px lg-mb-25px"></i>
                            <div class="fw-600 text-dark-gray ls-minus-05px fs-19 mb-5px">Conversion strategy</div>
                            <p class="lh-30">Successful account are built on financial.</p>
                        </div>
                    </div>
                </div>
                <!-- end sliding box item -->                        
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center" data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="d-inline-block align-middle bg-theme-blue fw-600 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-12 me-10px lh-30 sm-m-5px">Promise</div>
                <div class="d-inline-block align-middle text-dark-gray fs-19 fw-600 ls-minus-05px">Any accounting related question? <a href="demo-accounting-contact.html" class="text-decoration-line-bottom text-dark-gray">We're ready to help!</a></div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section --> 
<section class="bg-very-light-gray"> 
    <div class="container">  
        <div class="row justify-content-center mb-3">
            <div class="col-xl-7 col-lg-8 col-md-9 text-center" data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <h3 class="fw-700 text-dark-gray ls-minus-2px sm-ls-minus-1px">We provide business account solutions and services</h3>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
            <!-- start features box item -->
            <div class="col icon-with-text-style-07 transition-inner-all mb-30px">
                <div class="bg-white h-100 justify-content-end box-shadow-quadruple-large-hover feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                    <div class="feature-box-icon"> 
                        <a href="demo-accounting-services-details.html"><img src="images/demo-accounting-company-icon01.svg" class="h-95px" alt=""></a>
                    </div>
                    <div class="feature-box-content">
                        <a href="demo-accounting-services-details.html" class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">Business process</a>
                        <p class="mb-30px">An activity or set of activities that can accomplish a specific organizational goal.</p>
                    </div>                        
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col icon-with-text-style-07 transition-inner-all mb-30px">
                <div class="bg-white h-100 justify-content-end box-shadow-quadruple-large-hover feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                    <div class="feature-box-icon"> 
                        <a href="demo-accounting-services-details.html"><img src="images/demo-accounting-company-icon02.svg" class="h-95px" alt=""></a>
                    </div>
                    <div class="feature-box-content">
                        <a href="demo-accounting-services-details.html" class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">Corporate finance</a>
                        <p class="mb-30px">We combine deep financial expertise with exclusive tools to help the maximize value.</p>
                    </div>
                    <span class="position-absolute box-shadow-large top-25px lg-top-15px right-25px lg-right-15px bg-base-color border-radius-18px text-white fs-11 fw-600 text-uppercase ps-15px pe-15px lh-26 ls-minus-05px">New</span>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col icon-with-text-style-07 transition-inner-all mb-30px">
                <div class="bg-white h-100 justify-content-end box-shadow-quadruple-large-hover feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                    <div class="feature-box-icon"> 
                        <a href="demo-accounting-services-details.html"><img src="images/demo-accounting-company-icon03.svg" class="h-95px" alt=""></a>
                    </div>
                    <div class="feature-box-content">
                        <a href="demo-accounting-services-details.html" class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">Financial services</a>
                        <p class="mb-30px">Financial services are the economic services provided by the finance industry.</p>
                    </div>                        
                </div>
            </div>
            <!-- end features box item -->           
            <!-- start features box item -->
            <div class="col icon-with-text-style-07 transition-inner-all md-mb-30px">
                <div class="bg-white h-100 justify-content-end box-shadow-quadruple-large-hover feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                    <div class="feature-box-icon"> 
                        <a href="demo-accounting-services-details.html"><img src="images/demo-accounting-company-icon-04.svg" class="h-95px" alt=""></a>
                    </div>
                    <div class="feature-box-content">
                        <a href="demo-accounting-services-details.html" class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">Online consulting</a>
                        <p class="mb-30px">An activity or set of activities that can accomplish a specific organizational goal.</p>
                    </div>                        
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col icon-with-text-style-07 transition-inner-all sm-mb-30px">
                <div class="bg-white h-100 justify-content-end box-shadow-quadruple-large-hover feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                    <div class="feature-box-icon"> 
                        <a href="demo-accounting-services-details.html"><img src="images/demo-accounting-company-icon-05.svg" class="h-95px" alt=""></a>
                    </div>
                    <div class="feature-box-content">
                        <a href="demo-accounting-services-details.html" class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">Investment consulting</a>
                        <p class="mb-30px">We combine deep financial expertise with exclusive tools to help the maximize value.</p>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col icon-with-text-style-07 transition-inner-all">
                <div class="bg-white h-100 justify-content-end box-shadow-quadruple-large-hover feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                    <div class="feature-box-icon"> 
                        <a href="demo-accounting-services-details.html"><img src="images/demo-accounting-company-icon-06.svg" class="h-95px" alt=""></a>
                    </div>
                    <div class="feature-box-content">
                        <a href="demo-accounting-services-details.html" class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">Banking & financing</a>
                        <p class="mb-30px">Financial services are the economic services provided by the finance industry.</p>
                    </div>                        
                </div>
            </div>
            <!-- end features box item --> 
        </div>
    </div>
</section>
<!-- end section --> 
<!-- start section --> 
<section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 md-mb-50px" data-anime='{ "effect": "slide", "color": "#005153", "direction":"rl", "easing": "easeOutQuad", "delay":50}'>
                <figure class="position-relative m-0 md-w-90">
                    <img src="https://via.placeholder.com/478x544" class="w-90 border-radius-6px" alt="">
                    <figcaption class="position-absolute bg-dark-gray border-radius-8px box-shadow-quadruple-large bottom-100px xs-bottom-minus-20px right-minus-30px w-230px xs-w-210px text-center last-paragraph-no-margin">
                        <div class="bg-white pt-35px pb-35px border-radius-6px mb-10px">
                            <h1 class="fw-700 ls-minus-2px text-dark-gray mb-0">4.8</h1>
                            <div class="text-golden-yellow fs-18 ls-1px mb-5px">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            </div>
                            <span class="text-dark-gray d-block fw-600 ls-minus-05px">2488 Reviews</span>
                            <div class="d-inline-block fs-11 text-uppercase bg-green ps-20px pe-20px lh-30 fw-600 text-white border-radius-100px box-shadow-large">Excellent score</div>
                        </div>
                        <img src="images/demo-real-estate-trustpilot.svg" class="h-30px mb-15px" alt="" />
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-5 offset-lg-1" data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="mb-20px md-mb-15px">
                    <div class="separator-line-1px w-50px bg-base-color d-inline-block align-middle me-10px opacity-2"></div>
                    <span class="d-inline-block text-dark-gray align-middle fw-500 fs-20">Frequently asked questions</span>
                </div>
                <h3 class="fw-700 text-dark-gray ls-minus-2px sm-ls-minus-1px w-90 lg-w-100">What we can do for you and company.</h3>
                <div class="accordion accordion-style-02 w-90 lg-w-100" id="accordion-style-02" data-active-icon="fa-chevron-up" data-inactive-icon="fa-chevron-down">
                    <!-- start accordion item -->
                    <div class="accordion-item">
                        <div class="accordion-header border-bottom border-color-transparent-dark-very-light">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-01" aria-expanded="true" data-bs-parent="#accordion-style-02">
                                <div class="accordion-title mb-0 position-relative text-dark-gray">
                                    <i class="fa-solid fa-chevron-down fs-15"></i><span class="fs-19 fw-600 ls-minus-05px">What is tax and legal advisory?</span>
                                </div>
                            </a>
                        </div>
                        <div id="accordion-style-02-01" class="accordion-collapse collapse" data-bs-parent="#accordion-style-02">
                            <div class="accordion-body last-paragraph-no-margin border-bottom border-color-transparent-dark-very-light">
                                <p>The focus of the tax and legal department is on advisory services in the tax law.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end accordion item -->
                    <!-- start accordion item -->
                    <div class="accordion-item active-accordion">
                        <div class="accordion-header border-bottom border-color-transparent-dark-very-light">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-02" aria-expanded="false" data-bs-parent="#accordion-style-02">
                                <div class="accordion-title mb-0 position-relative text-dark-gray">
                                    <i class="fa-solid fa-chevron-up fs-15"></i><span class="fs-19 fw-600 ls-minus-05px">What is company accounting?</span>
                                </div>
                            </a>
                        </div>
                        <div id="accordion-style-02-02" class="accordion-collapse collapse show" data-bs-parent="#accordion-style-02">
                            <div class="accordion-body last-paragraph-no-margin border-bottom border-color-transparent-dark-very-light">
                                <p>The focus of the tax and legal department is on advisory services in the tax law.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end accordion item -->
                    <!-- start accordion item -->
                    <div class="accordion-item">
                        <div class="accordion-header border-bottom border-color-transparent">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-03" aria-expanded="false" data-bs-parent="#accordion-style-02">
                                <div class="accordion-title mb-0 position-relative text-dark-gray">
                                    <i class="fa-solid fa-chevron-down fs-15"></i><span class="fs-19 fw-600 ls-minus-05px">What do you do for corporate clients?</span>
                                </div>
                            </a>
                        </div>
                        <div id="accordion-style-02-03" class="accordion-collapse collapse" data-bs-parent="#accordion-style-02">
                            <div class="accordion-body last-paragraph-no-margin border-bottom border-color-transparent">
                                <p>The focus of the tax and legal department is on advisory services in the tax law.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end accordion item -->
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-6 sm-mt-4">
            <!-- start features box item -->
            <div class="col-auto icon-with-text-style-08 md-mb-15px" data-anime='{ "translateX": [-50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="feature-box feature-box-left-icon-middle">
                    <div class="feature-box-icon me-10px">
                        <i class="bi bi-chat-square-text icon-extra-medium text-dark-gray"></i>
                    </div>
                    <div class="feature-box-content">
                        <span class="alt-font text-dark-gray fw-500 fs-19">Looking for help? <a href="demo-accounting-contact.html" class="text-decoration-line-bottom text-dark-gray fw-600">Contact today</a></span>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col-auto icon-with-text-style-08" data-anime='{ "translateX": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="feature-box feature-box-left-icon-middle">
                    <div class="feature-box-icon me-10px">
                        <i class="bi bi-briefcase icon-extra-medium text-dark-gray"></i>
                    </div>
                    <div class="feature-box-content">
                        <span class="alt-font text-dark-gray fw-500 fs-19">Free Consultation? <a href="demo-accounting-services.html" class="text-decoration-line-bottom text-dark-gray fw-600">Accounting services</a></span>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
        </div>
    </div>
</section>
<!-- end section --> 

<?php get_footer(); ?>