<?php
/*
Template Name: Process Page
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
<section class="border-bottom border-color-extra-medium-gray">
    <div class="container">
        <div class="row align-items-center justify-content-md-center"> 
            <div class="col-lg-6 col-md-10 text-end md-mb-50px" data-anime='{ "effect": "slide", "color": "#076c9a", "direction":"lr", "easing": "easeOutQuad", "delay":50}'> 
                <figure class="position-relative m-0">
                    <img class="lg-w-90 border-radius-8px" src="<?php echo get_theme_mod('process_section1_image1'); ?>" alt="">
                    <figcaption class="position-absolute bg-white box-shadow-double-large border-radius-5px overflow-hidden bottom-80px lg-bottom-25px left-0px w-230px pt-35px text-center last-paragraph-no-margin" data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)">
                        <div class="icon-with-text-style-03">
                            <div class="feature-box overflow-hidden">
                                <div class="feature-box-icon mb-20px">
                                    <img src="<?php echo get_theme_mod('process_section1_image2'); ?>" class="h-65px" alt="">
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span class="d-inline-block fw-600 lh-24 text-dark-gray ls-minus-1px mb-30px ps-20 pe-20"><?php echo get_theme_mod('process_section1_consultant_text'); ?></span>
                                    <a href="<?php echo home_url(); ?>/contact" class="btn btn-large text-white text-uppercase btn-theme-blue d-block btn-box-shadow">Get started<i class="feather icon-feather-arrow-right icon-small"></i></a>
                                </div>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div> 
            <div class="col-md-10 col-xl-5 offset-xl-1 col-lg-6" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'> 
                <h3 class="fw-700 text-dark-gray ls-minus-2px"><?php echo get_theme_mod('process_section1_title'); ?></h3> 
                <p class="w-85 lg-w-100 mb-30px"><?php echo get_theme_mod('process_section1_description'); ?></p>
                <div class="row justify-content-center mb-40px">
                    <div class="col-12 progress-bar-style-03 mt-30px">
                        <!-- start progress bar item -->
                        <div class="progress mb-13 lg-mb-15 md-mb-60px bg-extra-medium-gray text-dark-gray fs-17 fw-500">
                            <div class="fs-19 fw-600 progress-bar-title d-inline-block"><?php echo get_theme_mod('process_section1_progressbar_text1'); ?></div>
                            <div class="progress-bar bg-base-color m-0 border-radius-3px" role="progressbar" aria-valuenow="<?php echo get_theme_mod('process_section1_progressbar_value1'); ?>" aria-valuemin="0" aria-valuemax="100" aria-label="consulting">
                            </div>
                            <span class="progress-bar-percent"><?php echo get_theme_mod('process_section1_progressbar_value1'); ?>%</span>
                        </div>
                        <!-- end progress bar item -->
                        <!-- start progress bar item -->
                        <div class="progress bg-extra-medium-gray text-dark-gray fs-17 fw-500">
                            <div class="fs-19 fw-600 progress-bar-title d-inline-block"><?php echo get_theme_mod('process_section1_progressbar_text2'); ?></div>
                            <div class="progress-bar bg-base-color m-0 border-radius-3px" role="progressbar" aria-valuenow="<?php echo get_theme_mod('process_section1_progressbar_value2'); ?>" aria-valuemin="0" aria-valuemax="100" aria-label="advices">
                            </div>
                            <span class="progress-bar-percent"><?php echo get_theme_mod('process_section1_progressbar_value2'); ?>%</span>
                        </div>
                        <!-- end progress bar item -->
                    </div>
                </div>
                <div class="row row-cols-1 justify-content-center">                  
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-08">
                        <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                            <div class="feature-box-icon feature-box-icon-rounded bg-theme-blue w-70px h-70px rounded-circle me-20px">
                                <i class="bi bi-telephone-outbound text-white icon-extra-medium"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="d-block ls-minus-05px mb-5px"><?php echo get_theme_mod('process_section1_question_text'); ?></span>
                                <a href="tel:<?php echo get_theme_mod('process_section1_phone_number'); ?>" class="d-block fs-24 text-dark-gray ls-minus-05px fw-600"><?php echo get_theme_mod('process_section1_phone_number'); ?></a>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                </div>
            </div> 
        </div> 
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="p-0">
    <div class="container-fluid p-0"> 
        <div class="row row-cols-1 row-cols-xl-6 row-cols-lg-3 row-cols-md-3 row-cols-sm-2 justify-content-center text-center icon-with-style-2 g-0" data-anime='{ "el": "childs", "translateX": [-50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
            <!-- start features box item -->
            <div class="col icon-with-text-style-05 transition-inner-all">
                <div class="feature-box hover-box dark-hover border-end xs-border-end-0 border-color-extra-medium-gray border-color-transparent-on-hover lg-border-bottom last-paragraph-no-margin">
                    <div class="content-slide-up content-scale p-17 xxl-p-15 xl-p-10 xs-p-13">
                        <div class="feature-box-icon">
                            <i class="<?php echo get_theme_mod('process_section2_icon1'); ?> icon-extra-large text-blue-base-color mb-20px justify-content-center"></i>
                        </div>
                        <div class="feature-box-content">
                            <span class="d-inline-block alt-font text-dark-gray fs-20 fw-500 mb-5px"><?php echo get_theme_mod('process_section2_name1'); ?></span>
                            <p class="text-visible text-light-opacity"><?php echo get_theme_mod('process_section2_description1'); ?></p>
                        </div>
                        <div class="feature-box-overlay bg-theme-blue-base"></div>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col icon-with-text-style-05 transition-inner-all">
                <div class="feature-box hover-box dark-hover h-100 border-end sm-border-end-0 border-color-extra-medium-gray border-color-transparent-on-hover lg-border-bottom last-paragraph-no-margin">
                    <div class="content-slide-up content-scale p-17 xxl-p-15 xl-p-10 xs-p-13">
                        <div class="feature-box-icon">
                            <i class="<?php echo get_theme_mod('process_section2_icon2'); ?> icon-extra-large text-blue-base-color mb-20px justify-content-center"></i>
                        </div>
                        <div class="feature-box-content">
                            <span class="d-inline-block alt-font text-dark-gray fs-20 fw-500 mb-5px"><?php echo get_theme_mod('process_section2_name2'); ?></span>
                            <p class="text-visible text-light-opacity"><?php echo get_theme_mod('process_section2_description2'); ?></p>
                        </div>
                        <div class="feature-box-overlay bg-theme-blue-base"></div>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col icon-with-text-style-05 transition-inner-all">
                <div class="feature-box hover-box dark-hover h-100 border-end xs-border-end-0 border-color-extra-medium-gray border-color-transparent-on-hover lg-border-bottom last-paragraph-no-margin">
                    <div class="content-slide-up content-scale p-17 xxl-p-15 xl-p-10 xs-p-13">
                        <div class="feature-box-icon">
                            <i class="<?php echo get_theme_mod('process_section2_icon3'); ?> icon-extra-large text-blue-base-color mb-20px justify-content-center"></i>
                        </div>
                        <div class="feature-box-content">
                            <span class="d-inline-block alt-font text-dark-gray fs-20 fw-500 mb-5px"><?php echo get_theme_mod('process_section2_name3'); ?></span>
                            <p class="text-visible text-light-opacity"><?php echo get_theme_mod('process_section2_description3'); ?></p>
                        </div>
                        <div class="feature-box-overlay bg-theme-blue-base"></div>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col icon-with-text-style-05 transition-inner-all">
                <div class="feature-box hover-box dark-hover h-100 border-end sm-border-end-0 border-color-extra-medium-gray border-color-transparent-on-hover sm-border-bottom last-paragraph-no-margin">
                    <div class="content-slide-up content-scale p-17 xxl-p-15 xl-p-10 xs-p-13">
                        <div class="feature-box-icon">
                            <i class="<?php echo get_theme_mod('process_section2_icon4'); ?> icon-extra-large text-blue-base-color mb-20px justify-content-center"></i>
                        </div>
                        <div class="feature-box-content">
                            <span class="d-inline-block alt-font text-dark-gray fs-20 fw-500 mb-5px"><?php echo get_theme_mod('process_section2_name4'); ?></span>
                            <p class="text-visible text-light-opacity"><?php echo get_theme_mod('process_section2_description4'); ?></p>
                        </div>
                        <div class="feature-box-overlay bg-theme-blue-base"></div>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col icon-with-text-style-05 transition-inner-all">
                <div class="feature-box hover-box dark-hover h-100 border-end xs-border-end-0 border-color-extra-medium-gray border-color-transparent-on-hover xs-border-bottom last-paragraph-no-margin">
                    <div class="content-slide-up content-scale p-17 xxl-p-15 xl-p-10 xs-p-13">
                        <div class="feature-box-icon">
                            <i class="<?php echo get_theme_mod('process_section2_icon5'); ?> icon-extra-large text-blue-base-color mb-20px justify-content-center"></i>
                        </div>
                        <div class="feature-box-content">
                            <span class="d-inline-block alt-font text-dark-gray fs-20 fw-500 mb-5px"><?php echo get_theme_mod('process_section2_name5'); ?></span>
                            <p class="text-visible text-light-opacity"><?php echo get_theme_mod('process_section2_description5'); ?></p>
                        </div>
                        <div class="feature-box-overlay bg-theme-blue-base"></div>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col icon-with-text-style-05 transition-inner-all">
                <div class="feature-box hover-box dark-hover h-100 border-color-extra-medium-gray border-color-transparent-on-hover last-paragraph-no-margin">
                    <div class="content-slide-up content-scale p-17 xxl-p-15 xl-p-10 xs-p-13">
                        <div class="feature-box-icon">
                            <i class="<?php echo get_theme_mod('process_section2_icon6'); ?> icon-extra-large text-blue-base-color mb-20px justify-content-center"></i>
                        </div>
                        <div class="feature-box-content">
                            <span class="d-inline-block alt-font text-dark-gray fs-20 fw-500 mb-5px"><?php echo get_theme_mod('process_section2_name6'); ?></span>
                            <p class="text-visible text-light-opacity"><?php echo get_theme_mod('process_section2_description6'); ?></p>
                        </div>
                        <div class="feature-box-overlay bg-theme-blue-base"></div>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section --> 
<section class="bg-very-light-gray overlap-height">
    <div class="container overlap-gap-section">
        <div class="row justify-content-center mb-4">
            <div class="col-lg-7 text-center" data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <h3 class="fw-700 text-dark-gray ls-minus-2px"><?php echo get_theme_mod('process_section3_main_title'); ?></h3>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2" data-anime='{ "el": "childs", "translateX": [-50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
            <!-- start process step item -->
            <div class="col process-step-style-03 text-center last-paragraph-no-margin hover-box md-mb-50px">
                <div class="process-step-icon-box position-relative mb-25px">
                    <span class="progress-step-separator bg-base-color w-20 separator-line-1px opacity-3"></span>
                    <div class="d-inline-block position-relative overflow-hidden border-radius-100 progress-image w-180px h-180px">
                        <img src="<?php echo get_theme_mod('process_section3_image1'); ?>" alt="">
                        <div class="box-overlay bg-gradient-green-yellow-color"></div>
                        <span class="number icon-extra-large text-white absolute-middle-center"><i class="<?php echo get_theme_mod('process_section3_icon1'); ?>"></i></span>
                    </div>
                </div>
                <span class="d-inline-block fs-19 text-dark-gray mb-5px fw-600 ls-minus-05px"><?php echo get_theme_mod('process_section3_title1'); ?></span>
                <p class="w-75 lg-w-95 mx-auto"><?php echo get_theme_mod('process_section3_description1'); ?></p>
            </div>
            <!-- end process step item -->                    
            <!-- start process step item -->
            <div class="col process-step-style-03 text-center last-paragraph-no-margin hover-box md-mb-50px">
                <div class="process-step-icon-box position-relative mb-25px">
                    <span class="progress-step-separator bg-base-color w-20 separator-line-1px opacity-3"></span>
                    <div class="d-inline-block position-relative overflow-hidden border-radius-100 progress-image w-180px h-180px">
                        <img src="<?php echo get_theme_mod('process_section3_image2'); ?>" alt="">
                        <div class="box-overlay bg-gradient-green-yellow-color"></div>
                        <span class="number icon-extra-large text-white absolute-middle-center"><i class="<?php echo get_theme_mod('process_section3_icon2'); ?>"></i></span>
                    </div>
                </div>
                <span class="d-inline-block fs-19 text-dark-gray mb-5px fw-600 ls-minus-05px"><?php echo get_theme_mod('process_section3_title2'); ?></span>
                <p class="w-75 lg-w-95 mx-auto"><?php echo get_theme_mod('process_section3_description2'); ?></p>
            </div>
            <!-- end process step item -->                    
            <!-- start process step item -->
            <div class="col process-step-style-03 text-center last-paragraph-no-margin hover-box xs-mb-50px">
                <div class="process-step-icon-box position-relative mb-25px">
                    <span class="progress-step-separator bg-base-color w-20 separator-line-1px opacity-3"></span>
                    <div class="d-inline-block position-relative overflow-hidden border-radius-100 progress-image w-180px h-180px">
                        <img src="<?php echo get_theme_mod('process_section3_image3'); ?>" alt="">
                        <div class="box-overlay bg-gradient-green-yellow-color"></div>
                        <span class="number icon-extra-large text-white absolute-middle-center"><i class="<?php echo get_theme_mod('process_section3_icon3'); ?>"></i></span>
                    </div>
                </div>
                <span class="d-inline-block fs-19 text-dark-gray mb-5px fw-600 ls-minus-05px"><?php echo get_theme_mod('process_section3_title3'); ?></span>
                <p class="w-75 lg-w-95 mx-auto"><?php echo get_theme_mod('process_section3_description3'); ?></p>
            </div>
            <!-- end process step item -->                    
            <!-- start process step item -->
            <div class="col process-step-style-03 text-center last-paragraph-no-margin hover-box">
                <div class="process-step-icon-box position-relative mb-25px">
                    <div class="d-inline-block position-relative overflow-hidden border-radius-100 progress-image w-180px h-180px">
                        <img src="<?php echo get_theme_mod('process_section3_image4'); ?>" alt="">
                        <div class="box-overlay bg-gradient-green-yellow-color"></div>
                        <span class="number icon-extra-large text-white absolute-middle-center"><i class="<?php echo get_theme_mod('process_section3_icon4'); ?>"></i></span>
                    </div>
                </div>
                <span class="d-inline-block fs-19 text-dark-gray mb-5px fw-600 ls-minus-05px"><?php echo get_theme_mod('process_section3_title4'); ?></span>
                <p class="w-75 lg-w-95 mx-auto"><?php echo get_theme_mod('process_section3_description4'); ?></p>
            </div>
            <!-- end process step item -->                    
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section --> 
<section class="py-0 sm-pt-50px" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
    <div class="container overlap-section">
        <div class="row justify-content-center g-0">
            <div class="col-auto text-center last-paragraph-no-margin pt-20px pb-20px ps-60px pe-60px sm-ps-50px sm-pe-40px bg-white box-shadow-quadruple-large border-radius-100px xs-border-radius-30px">
                <div class="fs-19 ls-minus-05px"><span class="fw-600 text-dark-gray"><?php echo get_theme_mod('process_section4_title'); ?>: </span><?php echo get_theme_mod('process_section4_description'); ?></div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section --> 
<section>
    <div class="container"> 
        <div class="row align-items-center justify-content-center" data-anime='{"el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
            <div class="col-lg-5 col-md-6 col-sm-7 md-mb-30px">
                <div class="row align-items-center justify-content-center">
                    <div class="col-auto"><span class="alt-font text-dark-gray fw-700 fs-130 ls-minus-5px"><?php echo get_theme_mod('process_section5_experience_value'); ?><sup>+</sup></span></div>
                    <div class="col-5 col-xl-4 col-md-5 col-sm-6 pe-0"><h6 class="fw-500 text-dark-gray alt-font m-0"><?php echo get_theme_mod('process_section5_experience_text'); ?></h6></div>
                    <div class="col-3 col-xl-2 col-md-2 text-end d-none d-xl-inline-block"><span class="fw-300 fs-130 text-blue-base-color position-relative top-minus-5px">|</span></div>
                </div>
            </div>
            <div class="col-lg-5 col-md-10 overflow-hidden text-center text-lg-start">
                <div class="row align-items-center">
                    <div class="col-sm-6 last-paragraph-no-margin xs-mb-30px">
                        <h2 class="fw-700 text-dark-gray mb-5px alt-font"><?php echo get_theme_mod('process_section5_project_completed_value'); ?><sup>+</sup></h2>
                        <span class="ls-minus-05px fs-19 fw-600 text-dark-gray"><?php echo get_theme_mod('process_section5_project_completed_text'); ?></span>
                        <p class="lh-24"><?php echo get_theme_mod('process_section5_project_completed_description'); ?></p>
                    </div>
                    <div class="col-sm-6 last-paragraph-no-margin">
                        <h2 class="fw-700 text-dark-gray mb-5px alt-font"><?php echo get_theme_mod('process_section5_satisfied_customer_value'); ?></h2>
                        <span class="ls-minus-05px fs-19 fw-600 text-dark-gray"><?php echo get_theme_mod('process_section5_satisfied_customer_text'); ?></span>
                        <p class="lh-24"><?php echo get_theme_mod('process_section5_satisfied_customer_description'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->

<?php get_footer(); ?>