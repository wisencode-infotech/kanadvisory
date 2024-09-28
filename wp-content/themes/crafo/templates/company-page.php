<?php
/*
Template Name: Company Page
*/
get_header(); 

require_once get_template_directory() . '/templates/common-functions.php';

?>

<!-- start page title -->
<section class="top-space-margin page-title-big-typography cover-background magic-cursor round-cursor" style="background-image: url(<?php echo $banner_image_url ?>)">
    <div class="container">
        <div class="row extra-very-small-screen align-items-center">
            <div class="col-lg-5 col-sm-8 position-relative page-title-extra-small" data-anime='{ "el": "childs", "opacity": [0, 1], "translateX": [-30, 0], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h1 class="mb-20px text-white text-shadow-medium"><span class="w-30px h-2px bg-theme-blue d-inline-block align-middle position-relative top-minus-2px me-10px"></span><?php echo esc_html($banner_text_1); ?></h1>
                <h2 class="text-white text-shadow-medium fw-500 ls-minus-2px mb-0"><?php echo esc_html($banner_text_2); ?></h2>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->
<!-- start section -->
<section> 
    <div class="container">  
        <div class="row justify-content-center mb-3">
            <div class="col-lg-7 col-md-8 col-sm-9 text-center" data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <h3 class="text-dark-gray fw-700 ls-minus-2px"><?php echo get_theme_mod('_company_accountant_consultant_title'); ?></h3>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center mb-5" data-anime='{ "el": "childs", "translateX": [-30, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <!-- start features box item -->
            <div class="col icon-with-text-style-07 transition-inner-all md-mb-30px">
                <div class="bg-very-light-gray h-100 justify-content-end feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                    <div class="feature-box-icon"> 
                        <a href="#"><img src="<?php echo get_theme_mod('_company_section1_image1'); ?>" class="h-95px" alt=""></a>
                    </div>
                    <div class="feature-box-content">
                        <a href="#" class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px"><?php echo get_theme_mod('_company_section1_title1'); ?></a>
                        <p class="mb-30px"><?php echo get_theme_mod('_company_section1_description1'); ?></p>
                    </div>                        
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col icon-with-text-style-07 transition-inner-all md-mb-30px">
                <div class="bg-very-light-gray h-100 justify-content-end feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                    <div class="feature-box-icon"> 
                        <a href="#"><img src="<?php echo get_theme_mod('_company_section1_image2'); ?>" class="h-95px" alt=""></a>
                    </div>
                    <div class="feature-box-content">
                        <a href="#" class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px"><?php echo get_theme_mod('_company_section1_title2'); ?></a>
                        <p class="mb-30px"><?php echo get_theme_mod('_company_section1_description2'); ?></p>
                    </div>
                    <span class="position-absolute box-shadow-large top-25px lg-top-15px right-25px lg-right-15px bg-white border-radius-18px text-dark-gray fs-11 fw-700 text-uppercase ps-15px pe-15px lh-26 ls-minus-05px">New</span>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col icon-with-text-style-07 transition-inner-all">
                <div class="bg-very-light-gray h-100 justify-content-end feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                    <div class="feature-box-icon"> 
                        <a href="#"><img src="<?php echo get_theme_mod('_company_section1_image3'); ?>" class="h-95px" alt=""></a>
                    </div>
                    <div class="feature-box-content">
                        <a href="#" class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px"><?php echo get_theme_mod('_company_section1_title3'); ?></a>
                        <p class="mb-30px"><?php echo get_theme_mod('_company_section1_description3'); ?></p>
                    </div>                        
                </div>
            </div>
            <!-- end features box item -->
        </div>
        <div class="row" data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
            <div class="col-12 text-center">
                <div class="d-inline-block align-middle bg-theme-blue fw-600 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-12 me-10px lh-30 sm-m-5px">Trust</div>
                <div class="d-inline-block align-middle text-dark-gray fs-19 fw-600 ls-minus-05px">Join the <span class="text-decoration-line-bottom text-dark-gray">10000+ companies</span> trusting crafto accounting.</div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="pt-0 big-section">
    <div class="container">
        <div class="row align-items-center" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'> 
            <div class="col-lg-6 position-relative md-mb-14 sm-mb-17 xs-mb-23"> 
                <div class="w-70 md-w-75 xs-w-90" data-animation-delay="50" data-shadow-animation="true">
                    <img src="<?php echo get_theme_mod('_company_section2_image1'); ?>" alt="" class="border-radius-8px w-100">
                </div>
                <div class="w-55 overflow-hidden position-absolute right-15px xs-w-60 bottom-minus-20px" data-shadow-animation="true" data-animation-delay="250" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
                    <img src="<?php echo get_theme_mod('_company_section2_image2'); ?>" alt="" class="border-radius-8px w-100 box-shadow-quadruple-large" />
                </div>
            </div> 
            <div class="col-xl-5 offset-xl-1 col-lg-6 text-center text-lg-start">
                <h3 class="fw-700 text-dark-gray ls-minus-2px"><?php echo get_theme_mod('_company_section2_title'); ?></h3> 
                <p class="mb-40px xs-mb-30px w-90 lg-w-95 md-w-100"><?php echo get_theme_mod('_company_section2_description'); ?></p> 
                <div class="row align-items-center mb-30px xs-mb-25px justify-content-center justify-content-lg-start">
                    <!-- start counter item -->
                    <div class="col-lg-5 col-md-4 col-sm-5 last-paragraph-no-margin counter-style-04 xs-mb-25px">
                        <h3 class="vertical-counter d-inline-flex fw-700 text-dark-gray mb-0 ls-minus-2px xl-ls-minus-1px" data-text="+" data-to="<?php echo get_theme_mod('_company_section2_account_team_value'); ?>"><sup class="text-yellow top-0px me-5px"><i class="feather icon-feather-users icon-very-medium"></i></sup></h3>
                        <span class="fw-500 text-dark-gray mb-10px d-block ls-minus-05px"><?php echo get_theme_mod('_company_section2_account_team_text'); ?></span>
                    </div>
                    <!-- end counter item -->
                    <!-- start counter item -->
                    <div class="col-lg-6 col-md-4 col-sm-5 last-paragraph-no-margin counter-style-04">
                        <h3 class="vertical-counter d-inline-flex fw-700 text-dark-gray mb-0 ls-minus-2px xl-ls-minus-1px" data-text="+" data-to="<?php echo get_theme_mod('_company_section2_project_completed_value'); ?>"><sup class="text-yellow top-0px me-5px"><i class="feather icon-feather-briefcase icon-very-medium"></i></sup></h3>
                        <span class="fw-500 text-dark-gray mb-10px d-block ls-minus-05px"><?php echo get_theme_mod('_company_section2_project_completed_text'); ?></span>
                    </div>
                    <!-- end counter item -->
                </div>
                <a href="<?php echo home_url(); ?>/contact" class="btn btn-large btn-rounded with-rounded btn-white btn-round-edge btn-box-shadow">Let's discuss<span class="bg-theme-blue-base text-white"><i class="feather icon-feather-arrow-right icon-small"></i></span></a>
            </div> 
        </div> 
    </div>
</section>  
<!-- end section -->
<!-- start section --> 
<section class="p-0 bg-theme-blue-base">
    <div class="container">
        <div class="row align-items-center justify-content-center g-0">
            <div class="col-auto d-flex align-items-center" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <!-- <img src="<?php //echo get_theme_mod('_company_section3_image'); ?>" alt="" /> -->
                <div class="fs-19 lh-28 last-paragraph-no-margin text-white pt-15px pb-15px">
                    <p><?php echo get_theme_mod('_company_section3_title'); ?> <a href="<?php echo home_url(); ?>/contact" class="text-decoration-line-bottom fw-500 text-white">Contact us now</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section --> 
<section class="bg-very-light-gray overflow-hidden cover-background position-relative overlap-height" style="background-image: url(<?php echo get_theme_mod('_company_section4_image1'); ?>)">
    <div class="container overlap-gap-section">
        <div class="row align-items-center">
            <div class="col-lg-6 md-mb-50px" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <h3 class="fw-700 text-dark-gray ls-minus-2px"><?php echo get_theme_mod('_company_section4_title'); ?></h3>
                <p class="w-90 lg-w-100"><?php echo get_theme_mod('_company_section4_description'); ?></p>
                <div class="accordion accordion-style-02 w-90 lg-w-100" id="accordion-style-02" data-active-icon="fa-chevron-up" data-inactive-icon="fa-chevron-down">
                    <!-- start accordion item -->

                    <?php

                    // Get FAQ Items
                    $faq_items_json = get_theme_mod('_company_faq_items', json_encode([]));
                    $faq_items = json_decode($faq_items_json, true); // Decode JSON to array

                    foreach ($faq_items as $faq_key => $faq_item){ ?>

                    <div class="accordion-item active-accordion">
                        <div class="accordion-header border-bottom border-color-transparent-dark-very-light">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-<?php echo $faq_key ?>" aria-expanded="true" data-bs-parent="#accordion-style-02">
                                <div class="accordion-title mb-0 position-relative text-dark-gray">
                                    <i class="fa-solid fa-chevron-up fs-15"></i><span class="fs-19 fw-600 ls-minus-05px"><?php echo esc_html($faq_item['question']); ?></span>
                                </div>
                            </a>
                        </div>
                        <div id="accordion-style-02-<?php echo $faq_key ?>" class="accordion-collapse collapse show" data-bs-parent="#accordion-style-02">
                            <div class="accordion-body last-paragraph-no-margin border-bottom border-color-transparent-dark-very-light">
                                <p><?php echo esc_html($faq_item['answer']); ?></p>
                            </div>
                        </div>
                    </div>

                    <?php } ?>
                    <!-- end accordion item -->
                </div>
            </div>
            <div class="col-xl-5 offset-xl-1 col-lg-6" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <!-- start map -->
                <div class="outside-box-right-30 position-relative">
                    <img src="<?php echo get_theme_mod('_company_section4_image2'); ?>" alt="" />
                    <div class="bg-theme-blue-base video-icon-box video-icon-medium feature-box-icon-rounded position-absolute top-100px left-100px mt-10 ms-15 w-40px h-40px rounded-circle d-flex align-items-center justify-content-center" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" title="<span class=tooltip-title>Crafto - New York</span><p class=m-0>401 Broadway, 24th Floor, Orchard View,  New York</p>">
                        <span>
                            <span class="video-icon"> 
                                <span class="bg-theme-blue-base w-100 h-100 border-radius-100 text-center d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-location-dot m-0 text-white icon-small"></i>
                                </span>
                                <span class="video-icon-sonar"> 
                                    <span class="video-icon-sonar-bfr bg-red"></span> 
                                    <span class="video-icon-sonar-bfr bg-theme-blue"></span> 
                                </span>
                            </span> 
                        </span>
                    </div>
                    <div class="bg-theme-blue-base video-icon-box video-icon-medium feature-box-icon-rounded position-absolute bottom-100px start-50 mb-10 ms-7 w-40px h-40px rounded-circle d-flex align-items-center justify-content-center" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" title="<span class=tooltip-title>Crafto - Canada</span><p class=m-0>2839 lalemant view road, Niagara falls, Canada</p>">
                        <span>
                            <span class="video-icon">
                                <span class="w-100 h-100 bg-theme-blue-base border-radius-100 d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-location-dot m-0 text-white icon-small"></i>
                                </span>
                                <span class="video-icon-sonar"> 
                                    <span class="video-icon-sonar-bfr bg-red"></span> 
                                    <span class="video-icon-sonar-bfr bg-theme-blue"></span> 
                                </span>
                            </span> 
                        </span>
                    </div>
                </div>
                <!-- end map -->
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section --> 
<section class="pt-md-0">
    <div class="container overlap-section">
        <div class="row m-0 align-items-center justify-content-center bg-white border-radius-100px md-border-radius-6px ps-10px pe-10px box-shadow-quadruple-large appear anime-complete" data-anime='{ "scale": [1.1, 1], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>                    
            <div class="col-lg-10">
                <div class="swiper slider-one-slide testimonials-style-09" data-slider-options='{ "slidesPerView": 1, "loop": true, "autoplay": { "delay": 4000, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
                    <div class="swiper-wrapper">
                        <?php
                            // Query to get custom post type 'clientreviews'
                            $args = array(
                                'post_type'      => 'clientreviews',
                                'posts_per_page' => -1, // Get all posts
                            );
                            $query = new WP_Query($args);
                            // Check if there are posts
                            if ($query->have_posts()) :
                                while ($query->have_posts()) : $query->the_post();
                                $client_position = get_post_meta(get_the_ID(), '_client_position', true);
                        ?>

                        <!-- start text slider item -->
                        <div class="swiper-slide">
                            <div class="row align-items-center pt-25px pb-25px"> 
                                <div class="col-lg-8 d-lg-flex align-items-center text-center text-lg-start">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="rounded-circle w-100px h-100px md-mb-35px" alt="">  
                                    <span class="d-block ps-40px md-ps-0 md-mx-auto position-relative"><img src="<?php echo get_template_directory_uri(); ?>/images/demo-accounting-home-quote-img.png" class="position-absolute left-minus-25px top-minus-15px lg-top-minus-5px md-top-minus-50px w-40px md-left-0px md-right-0px md-mx-auto" alt=""><?php echo esc_html(get_the_content()); ?></span>
                                </div>
                                <div class="col-lg-1 d-none d-lg-inline-block">
                                    <div class="separator-line w-1px md-w-100 h-60px md-h-1px bg-extra-medium-gray mx-auto"></div>
                                </div>
                                <div class="col-lg-3 text-center text-lg-start md-mt-15px">
                                    <span class="fs-19 ls-minus-05px fw-600 text-dark-gray d-block lh-28"><?php echo esc_html(get_the_title()); ?></span>
                                    <div><?php echo $client_position; ?></div>
                                </div>
                            </div>
                        </div>
                        <!-- end text slider item -->

                        <?php
                            endwhile;
                            wp_reset_postdata(); // Reset post data
                        endif;
                        ?>
                    </div> 
                </div>
            </div> 
            <div class="col-lg-2 md-mb-25px">
                <div class="d-flex justify-content-center">
                    <!-- start slider navigation -->
                    <div class="slider-one-slide-prev-1 swiper-button-prev slider-navigation-style-04 bg-very-light-gray"><i class="fa-solid fa-arrow-left icon-small text-dark-gray"></i></div>
                    <div class="slider-one-slide-next-1 swiper-button-next slider-navigation-style-04 bg-very-light-gray"><i class="fa-solid fa-arrow-right icon-small text-dark-gray"></i></div>
                    <!-- end slider navigation -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="py-0">
    <div class="container">        
        <div class="row justify-content-center mb-3">
            <div class="col-lg-6 col-md-7 col-sm-8 text-center" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <h3 class="fw-700 text-dark-gray ls-minus-2px"><?php echo get_theme_mod('_company_section5_title'); ?></h3>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2" data-anime='{ "el": "childs", "translateX": [-50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
            <?php
                // Query to get custom post type 'teams'
                $args = array(
                    'post_type'      => 'teams',
                    'posts_per_page' => -1, // Get all teams
                );
                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                    $position_name = get_post_meta(get_the_ID(), '_position_name', true);
                    $facebook_url = get_post_meta(get_the_ID(), '_facebook_url', true);
                    $instagram_url = get_post_meta(get_the_ID(), '_instagram_url', true);
                    $twitter_url = get_post_meta(get_the_ID(), '_twitter_url', true);
                    $dribble_url = get_post_meta(get_the_ID(), '_dribble_url', true);
            ?>

            <!-- start team member item --> 
            <div class="col text-center team-style-01 md-mb-30px">
                <figure class="mb-0 hover-box box-hover position-relative">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="border-radius-6px" />
                    <figcaption class="w-100 p-30px lg-p-25px bg-white">
                        <div class="position-relative z-index-1 overflow-hidden lg-pb-5px">
                            <span class="fs-19 d-block fw-600 text-dark-gray lh-26 ls-minus-05px"><?php echo esc_html(get_the_title()); ?></span>
                            <p class="m-0"><?php echo $position_name ?></p>
                            <div class="social-icon hover-text mt-20px lg-mt-10px social-icon-style-05">
                                <?php if(!empty($facebook_url)){ ?>
                                    <a href="<?php echo $facebook_url ?>" target="_blank" class="fw-600 text-dark-gray">Fb.</a>
                                <?php }  ?>

                                <?php if(!empty($instagram_url)){ ?>
                                    <a href="<?php echo $instagram_url ?>" target="_blank" class="fw-600 text-dark-gray">In.</a>
                                <?php }  ?>

                                <?php if(!empty($twitter_url)){ ?>
                                    <a href="<?php echo $twitter_url ?>" target="_blank" class="fw-600 text-dark-gray">Tw.</a>
                                <?php }  ?>

                                <?php if(!empty($dribble_url)){ ?>
                                    <a href="<?php echo $dribble_url ?>" target="_blank" class="fw-600 text-dark-gray">Dr.</a>
                                <?php }  ?>
                            </div>
                        </div>
                        <div class="box-overlay bg-white box-shadow-quadruple-large border-radius-6px"></div>
                    </figcaption>
                </figure>
            </div>
            <!-- end team member item -->  

            <?php
                endwhile;
                wp_reset_postdata(); // Reset post data
            endif;
            ?> 
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="half-section">
    <div class="container">
        <div class="row justify-content-center mb-30px" data-anime='{ "translateX": [-50, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
            <div class="col-lg-5 text-center mb-15px">
                <span class="text-dark-gray fw-600 fs-16 ls-minus-05px text-uppercase border-1 pb-5px border-bottom border-color-extra-medium-gray text-dark-gray">Join the 10,000+ companies using crafto</span>
            </div>
        </div>
        <div class="row position-relative clients-style-08 mb-35px" data-anime='{"translateY": [0, 0], "opacity": [0,1], "duration": 800, "delay": 50, "staggervalue": 150, "easing": "easeOutQuad" }'>
            <div class="col swiper text-center feather-shadow" data-slider-options='{ "slidesPerView": 2, "spaceBetween":0, "speed": 6000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "delay":0, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 5 }, "992": { "slidesPerView": 4 }, "768": { "slidesPerView": 3 } }, "effect": "slide" }'>
                <div class="swiper-wrapper marquee-slide">
                    <?php
                        // Query to get custom post type 'companysliders'
                        $args = array(
                            'post_type'      => 'companysliders',
                            'posts_per_page' => -1, // Get all posts
                        );
                        $query = new WP_Query($args);
                        // Check if there are posts
                        if ($query->have_posts()) :
                            while ($query->have_posts()) : $query->the_post();
                            $slider_url = get_post_meta(get_the_ID(), '_url', true);
                    ?>

                    <!-- start client item -->
                    <div class="swiper-slide">
                        <a href="<?php echo $slider_url; ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>" class="h-40px xs-h-30px" alt="<?php echo esc_html(get_the_title()); ?>" /></a>
                    </div>
                    <!-- end client item -->

                    <?php
                        endwhile;
                        wp_reset_postdata(); // Reset post data
                    endif;
                    ?>
                </div> 
            </div>  
        </div>
    </div>
</section>
<!-- end section -->

<?php get_footer(); ?>