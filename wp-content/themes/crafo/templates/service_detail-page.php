<?php
/*
Template Name: Service Detail Page
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
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 pe-5 order-2 order-lg-1 lg-pe-3 md-pe-15px" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="bg-very-light-gray border-radius-6px p-45px lg-p-25px mb-25px">
                    <span class="fs-20 ls-minus-05px alt-font text-dark-gray fw-600 mb-20px d-inline-block">Accounting services</span>
                    <ul class="p-0 m-0 list-style-02">
                        <li class="pb-10px mb-10px border-bottom border-color-transparent-dark"><a href="demo-accounting-services-details.html">Corporate finance</a><i class="feather icon-feather-arrow-right ms-auto"></i></li>
                        <li class="pb-10px mb-10px border-bottom border-color-transparent-dark text-dark-gray"><a href="demo-accounting-services-details.html" class="text-dark-gray text-dark-gray-hover">Financial services</a><i class="feather icon-feather-arrow-right ms-auto"></i></li>
                        <li class="pb-10px mb-10px border-bottom border-color-transparent-dark"><a href="demo-accounting-services-details.html">Online consulting</a><i class="feather icon-feather-arrow-right ms-auto"></i></li>
                        <li class="pb-10px mb-10px border-bottom border-color-transparent-dark"><a href="demo-accounting-services-details.html">Investment consulting</a><i class="feather icon-feather-arrow-right ms-auto"></i></li>
                        <li><a href="demo-accounting-services-details.html">Banking and financing</a><i class="feather icon-feather-arrow-right lh-32 ms-auto"></i></li>
                    </ul>
                </div>
                <div class="bg-dark-gray border-radius-6px ps-35px pb-25px pt-25px lg-ps-25px mb-25px">
                    <div class="feature-box feature-box-left-icon-middle">
                        <div class="feature-box-icon feature-box-icon-rounded w-65px h-65px me-20px lg-me-15px rounded-circle bg-theme-blue rounded-box">
                            <i class="bi bi-telephone-outbound icon-extra-medium text-white"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="fs-19 lh-22 mb-5px d-block text-white opacity-6 fw-300">Customer care?</span>
                            <a href="tel:12345678910" class="text-white fs-20 fw-500 lh-22">+1 234 567 8910</a>
                        </div>
                    </div>
                </div>
                <div class="bg-very-light-gray border-radius-6px p-40px lg-p-25px md-p-35px">
                    <span class="fs-20 ls-minus-05px alt-font text-dark-gray fw-600 mb-25px d-inline-block">Get a free consultation?</span>
                    <div class="contact-form-style-01 mt-0">
                        <!-- start contact form -->
                        <form action="email-templates/contact-form.php" method="post">
                            <div class="position-relative form-group mb-20px">
                                <span class="form-icon"><i class="bi bi-emoji-smile"></i></span>
                                <input type="text" name="name" class="form-control border-white box-shadow-large required" placeholder="Your name*" />
                            </div>
                            <div class="position-relative form-group mb-20px">
                                <span class="form-icon"><i class="bi bi-envelope"></i></span>
                                <input type="email" name="email" class="form-control border-white box-shadow-large required" placeholder="Your email address*" />
                            </div> 
                            <div class="position-relative form-group form-textarea">
                                <span class="form-icon"><i class="bi bi-chat-square-dots"></i></span>
                                <textarea placeholder="Your message" name="comment" class="form-control border-white box-shadow-large" rows="3"></textarea>
                                <input type="hidden" name="redirect" value="">
                                <button class="btn btn-medium btn-round-edge btn-theme-blue btn-box-shadow mt-20px submit w-100" type="submit">Send message</button>
                                <div class="mt-20px form-results d-none"></div>
                            </div>
                        </form>
                        <!-- end contact form -->  
                    </div>
                </div>
            </div>
            <div class="col-lg-8 order-1 order-lg-2 md-mb-50px" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <h4 class="text-dark-gray fw-700 ls-minus-1px alt-font mb-20px d-block">Investment consulting services</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <img src="https://via.placeholder.com/987x550" class="mt-30px md-mt-15px mb-60px md-mb-40px border-radius-6px" alt="">
                <div class="row row-cols-1 row-cols-md-2 mb-30px md-mb-15px">
                    <div class="col">
                        <span class="fs-24 alt-font text-dark-gray ls-minus-05px fw-700 mb-10px d-block">Return assumptions</span>
                        <p class="w-90 sm-w-100">Lorem ipsum dolor sit amet conseetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                    <div class="col">
                        <span class="fs-24 alt-font text-dark-gray ls-minus-05px fw-700 mb-10px d-block">Volatility expectations</span>
                        <p class="w-90 sm-w-100">Lorem ipsum dolor sit amet conseetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                </div>
                <div class="cover-background p-7 border-radius-6px mb-60px md-mb-40px d-flex justify-content-end align-items-end sm-h-500px" style="background-image: url(https://via.placeholder.com/987x600)">
                    <div class="bg-white box-shadow-quadruple-large border-radius-4px w-50 lg-w-55 sm-w-100 overflow-hidden">
                        <div class="p-40px lg-p-25px last-paragraph-no-margin">
                            <span class="fs-24 alt-font text-dark-gray ls-minus-05px fw-700 mb-10px d-block">Investment advice</span>
                            <p class="w-95 lg-w-100">Lorem ipsum dolor sit amet conseetur adipiscing elit sed do eiusmod tempor incididunt ut labore magna aliqua.</p>
                        </div>
                        <div class="bg-theme-blue p-15px text-center">
                            <a href="demo-accounting-contact.html" class="text-dark-gray text-dark-gray-hover fw-600"><i class="feather icon-feather-mail me-10px"></i>Talk with our team</a>
                        </div>
                    </div>
                </div>
                <h4 class="text-dark-gray fw-700 ls-minus-1px alt-font mb-40px lg-mb-30px d-block">Benefits of working with us</h4>
                <div class="border border-color-extra-medium-gray border-radius-6px mb-40px xs-mb-30px overflow-hidden">
                    <p class="ps-30px pe-30px pt-25px pb-25px border-bottom border-1 border-color-extra-medium-gray mb-0"><span class="fw-600 text-dark-gray">Great client service: </span>We genuinely care about our customers lives and the experience we give them. That's why we put your best interests first.</p>
                    <p class="ps-30px pe-30px pt-25px pb-25px border-bottom border-1 border-color-extra-medium-gray mb-0 bg-solitude-blue"><span class="fw-600 text-dark-gray">Investment strategy: </span>You can expect our advisors to keep your needs in the forefront and focus on your overall experience before creating a plan.</p>
                    <p class="ps-30px pe-30px pt-25px pb-25px mb-0"><span class="fw-600 text-dark-gray">Internal expertise: </span>Our team of investment advisors has advanced knowledge of the most current markets and the ability to navigate them effortlessly.</p>
                </div>
                <div class="row align-items-center justify-content-center g-0">
                    <div class="col-auto d-block d-sm-flex align-items-center text-center text-sm-start">
                        <img src="https://via.placeholder.com/152x68" alt="" />
                        <div class="lh-28 last-paragraph-no-margin text-dark-gray ps-15px xs-ps-0 xs-mt-15px">
                            <p>Save your time and effort spent for finding a solution. <a href="demo-accounting-contact.html" class="text-decoration-line-bottom fw-500 text-dark-gray">Contact us now</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->

<?php get_footer(); ?>