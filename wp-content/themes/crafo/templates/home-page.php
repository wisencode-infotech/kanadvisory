<?php
/*
Template Name: Home Page
*/
get_header(); 

require_once get_template_directory() . '/templates/common-functions.php';

?>

<!-- start banner -->
<section class="top-space-margin p-0 full-screen md-h-600px sm-h-500px section-dark" data-parallax-background-ratio="0.8" style="background-image: url(<?php echo $banner_image_url ?>)">  
    <div class="container h-100">
        <div class="row align-items-center h-100">
            <div class="col-xl-7 col-md-9 col-sm-9 position-relative text-white" data-anime='{ "el": "childs", "opacity": [0, 1], "translateY": [30, 0], "staggervalue": 200, "easing": "easeInOutSine" }'>  
                <div class="fs-80 lh-75 sm-fs-65 fw-600 mb-20px text-shadow-large ls-minus-2px"><?php echo esc_html($banner_text_1); ?></div> 
                <div>
                    <span class="opacity-5 fs-20 w-70 md-w-85 mb-25px fw-300 d-inline-block"><?php echo esc_html($banner_text_2); ?></span> 
                </div>
                <div class="icon-with-text-style-08">
                    <div class="feature-box feature-box-left-icon-middle">
                        <div class="feature-box-icon feature-box-icon-rounded w-65px h-65px rounded-circle bg-theme-blue me-15px rounded-box">
                            <i class="feather icon-feather-arrow-right text-dark-gray icon-extra-medium"></i>
                        </div>
                        <div class="feature-box-content">
                            <a href="<?php echo home_url(); ?>/services" class="d-inline-block fs-19 text-white text-shadow-double-large">Explore services</a>
                        </div>
                    </div> 
                </div>
            </div>
        </div> 
    </div>
</section> 
<!-- end banner -->     
<!-- start section -->
<section class="pt-0">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-11 md-mb-60px sm-mb-40px">
                <div class="row mt-10 align-items-center">
                    <div class="col-xl-5 col-lg-6 col-sm-5 xs-mb-25px text-center">
                        <div class="position-relative">
                            <img src="<?php echo get_theme_mod('experience_section_image'); ?>" class="rounded-circle w-100px h-100px md-top-40px h-200px w-200px" alt="" data-no-retina="">
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 col-sm-7 ps-45px lg-ps-15px last-paragraph-no-margin text-center text-sm-start" data-anime='{  "opacity": [0,1], "delay": 100, "staggervalue": 250, "easing": "easeOutQuad" }'>
                        <h5 class="fw-600 text-dark-gray ls-minus-1px mb-15px"><?php echo get_theme_mod('experience_section_title'); ?></h5>
                        <p><?php echo get_theme_mod('experience_section_description'); ?></p>
                        <a href="<?php echo home_url(); ?>/process" class="btn btn-link btn-hover-animation-switch btn-extra-large text-base-color text-transform-none fw-600 mt-15px">
                            <span>
                                <span class="btn-text">Discover now</span>
                                <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                            </span> 
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 col-md-11 contact-form-style-01 position-relative">
                <div class="position-absolute left-minus-25px md-left-minus-5px xs-left-0 top-100px md-top-0px">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/demo-accounting-home-left-img.jpg" class="w-40px" alt="">
                </div>
                <div class="ps-14 pe-14 pt-12 pb-12 lg-p-12 bg-white box-shadow-quadruple-large border-radius-6px">
                    <h6 class="d-inline-block fw-600 text-dark-gray ls-minus-1px mb-35px sm-mb-25px" data-anime='{ "translateY": [15, 0], "translateX": [-15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>Request a free advice?</h6>
                    <!-- start contact form -->
                    <form action="email-templates/contact-form.php" method="post" data-anime='{ "el": "childs", "translateY": [15, 0], "translateX": [-15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="position-relative form-group mb-15px">
                            <span class="form-icon"><i class="bi bi-emoji-smile"></i></span>
                            <input type="text" name="name" class="form-control required" placeholder="Your name*" />
                        </div>
                        <div class="position-relative form-group mb-15px">
                            <span class="form-icon"><i class="bi bi-envelope"></i></span>
                            <input type="email" name="email" class="form-control required" placeholder="Your email address*" />
                        </div>
                        <div class="position-relative form-group mb-20px">
                            <span class="form-icon"><i class="bi bi-telephone-outbound"></i></span>
                            <input type="tel" name="phone" class="form-control" placeholder="Your phone" />
                        </div>
                        <div class="position-relative terms-condition-box text-start d-inline-block">
                            <label>
                                <input type="checkbox" name="terms_condition" id="terms_condition" value="1" class="terms-condition check-box align-middle required">
                                <span class="box fs-16">I agree to the terms of service.</span>
                            </label>
                        </div>
                        <div class="position-relative mt-20px">
                            <button class="btn btn-large btn-round-edge btn-theme-blue-base btn-box-shadow submit w-100" type="submit">Get free quote</button>
                            <div class="form-results mt-20px text-center lh-24 d-none"></div>
                        </div>
                    </form>
                    <!-- end contact form -->
                </div> 
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section --> 
<section class="bg-very-light-gray overflow-hidden">
    <div class="container">
        <div class="row align-items-center justify-content-center mb-6 text-center text-lg-start">
            <div class="col-xl-5 col-lg-5 md-mb-20px" data-anime='{ "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <h4 class="text-dark-gray fw-700 mb-0 ls-minus-1px"><?php echo get_theme_mod('service_section_title'); ?></h4>
            </div>
            <div class="col-xl-5 col-lg-5 last-paragraph-no-margin md-mb-30px" data-anime='{ "translateX": [-50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <p class="w-90 xl-w-100 md-w-80 sm-w-100 md-mx-auto"><?php echo get_theme_mod('service_section_description'); ?></p>
            </div>
            <div class="col-xl-2 col-lg-2 d-flex justify-content-center justify-content-lg-end" data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'> 
                <!-- start slider navigation -->
                <div class="slider-one-slide-prev-1 icon-small text-dark-gray swiper-button-prev slider-navigation-style-04 bg-white text-dark-gray box-shadow-large"><i class="fa-solid fa-arrow-left"></i></div>
                <div class="slider-one-slide-next-1 icon-small text-dark-gray swiper-button-next slider-navigation-style-04 bg-white text-dark-gray box-shadow-large"><i class="fa-solid fa-arrow-right"></i></div>
                <!-- end slider navigation --> 
            </div>
        </div>
        <div class="row align-items-center full-width-row">
            <div class="col-12 position-relative">
                <div data-anime='{ "translateX": [100, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="swiper magic-cursor" data-slider-options='{ "slidesPerView": 1, "spaceBetween": 28, "loop": true, "autoplay": { "delay": 2000, "disableOnInteraction": false }, "pagination": { "el": ".slider-four-slide-pagination-1", "clickable": true }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 5 }, "992": { "slidesPerView": 4 }, "768": { "slidesPerView": 3 }, "576": { "slidesPerView": 2 } }, "effect": "slide" }'>
                       
                        <div class="swiper-wrapper">
                        <?php
                        // Query to get custom post type 'accountantconsultant'
                        $args = array(
                            'post_type'      => 'accountantconsultant',
                            'posts_per_page' => -1, // Get all posts
                        );
                        $query = new WP_Query($args);

                        // Check if there are posts
                        if ($query->have_posts()) :
                            while ($query->have_posts()) : $query->the_post();
                                // Retrieve custom fields
                                $icon_name = get_post_meta(get_the_ID(), '_icon_name', true);
                                ?>
                                <!-- start content carousel item --> 
                                <div class="swiper-slide"> 
                                    <div class="interactive-banner-style-08">
                                        <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail('full', ['alt' => get_the_title()]); ?>
                                            </a>
                                            <figcaption class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-14 lg-p-12">
                                                <a href="<?php the_permalink(); ?>">
                                                    <i class="<?php echo esc_attr($icon_name); ?> text-white icon-extra-large"></i>
                                                </a>
                                                <div class="mt-auto d-flex w-100 align-items-center">
                                                    <div class="col last-paragraph-no-margin">
                                                        <a href="<?php echo home_url(); ?>/services" class="text-white fs-24 lh-28 w-65 xl-w-75 d-block"><?php the_title(); ?></a> 
                                                    </div>
                                                    <a href="<?php echo home_url(); ?>/services" class="circle-box bg-theme-blue-base w-50px h-50px rounded-circle ms-auto position-relative rounded-box">
                                                        <i class="bi bi-arrow-right-short absolute-middle-center icon-very-medium lh-0px text-white"></i>
                                                    </a>  
                                                </div>
                                                <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-gray-light-dark-transparent z-index-minus-1 opacity-9"></div> 
                                            </figcaption>
                                        </figure>
                                    </div> 
                                </div>
                                <!-- end content carousel item -->
                                <?php
                            endwhile;
                            wp_reset_postdata(); // Reset post data
                        endif;
                        ?>
                    </div>
                    </div>
                </div>
                <!-- start slider pagination -->
                <!--<div class="swiper-pagination slider-four-slide-pagination-1 swiper-pagination-style-2 swiper-pagination-clickable swiper-pagination-bullets"></div>-->
                <!-- end slider pagination --> 
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
                <!-- <img src="<?php // echo get_theme_mod('section3_image'); ?>" alt="" /> -->
                <div class="fs-19 lh-28 last-paragraph-no-margin text-white pt-15px pb-15px">
                    <p><?php echo get_theme_mod('section3_title'); ?> <a href="<?php echo home_url(); ?>/contact" class="text-decoration-line-bottom fw-500 text-white">Contact us now</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section>
    <div class="container">
        <div class="row justify-content-center mb-6">
            <div class="col-xl-6 col-md-8 col-sm-10 text-center" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <h4 class="mb-0 text-dark-gray fw-700 ls-minus-1px w-85 xl-w-100 mx-auto"><?php echo get_theme_mod('section4_title'); ?></h4>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 justify-content-center mb-7 sm-mb-45px" data-anime='{ "el": "childs", "translateY": [50, 0], "rotateX":[30, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
            <?php
                // Query to get custom post type 'trustedcompanies'
                $args = array(
                    'post_type'      => 'trustedcompanies',
                    'posts_per_page' => -1, // Get all posts
                );
                $query = new WP_Query($args);
                // Check if there are posts
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
            ?>

            <div class="col sm-mb-30px">
                <div class="bg-white h-100 border border-color-extra-medium-gray border-radius-6px text-center box-shadow-quadruple-large">
                    <div class="pt-10 pb-10">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="h-40px md-h-35px sm-h-40px" alt="<?php echo get_the_title(); ?>" data-no-retina="">
                    </div>
                    <div class="border-top border-1 border-color-extra-medium-gray p-15px last-paragraph-no-margin">
                        <p><?php echo esc_html(get_the_title()); ?> - <span class="fw-600 text-dark-gray ls-minus-05px"><?php echo esc_html(get_the_content()); ?></span></p>
                    </div>
                </div>
            </div>

            <?php
                endwhile;
                wp_reset_postdata(); // Reset post data
            endif;
            ?>
        </div>
        <div class="row position-relative clients-style-08 mb-6 sm-mb-40px" data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
            <div class="col swiper text-center feather-shadow" data-slider-options='{ "slidesPerView": 2, "spaceBetween":0, "speed": 6000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "delay":0, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 4 }, "992": { "slidesPerView": 4 }, "768": { "slidesPerView": 3 } }, "effect": "slide" }'>
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
        <div class="row justify-content-center align-items-center" data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
            <div class="col-12 text-center">
                <div class="d-inline-block align-middle bg-theme-blue fw-600 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-12 me-10px lh-30 sm-m-5px">Trust</div>
                <div class="d-inline-block align-middle text-dark-gray fs-19 fw-600 ls-minus-05px">Join the <span class="text-decoration-line-bottom text-dark-gray">10000+ companies</span> trusting crafto accounting.</div>
            </div>
        </div>
    </div>
</section>
<!-- end section --> 
<!-- start section -->
<section class="bg-very-light-gray pb-0 pt-0" id="services">
    <div class="tab-style-08 border-bottom border-color-extra-medium-gray bg-white box-shadow-quadruple-large">
        <div class="container">
            <!-- start tab navigation -->
            <ul class="nav nav-tabs border-0 fw-500 fs-19 text-center tab-navigation">
                <?php
                        // Query to get custom post type 'clientreviews'
                        $args = array(
                            'post_type'      => 'companyservices',
                            'posts_per_page' => -1, // Get all posts
                        );
                        $query = new WP_Query($args);

                        $counter = 0;

                        // Check if there are posts
                        if ($query->have_posts()) :
                            while ($query->have_posts()) : $query->the_post();

                                $key_value = get_post_meta(get_the_ID(), 'key_value', true);

                                $is_active = '';
                                if ($key_value == 1 || $counter == 0) { 
                                    $is_active = 'active';
                                }
                    ?>

                    <li class="nav-item"><a data-bs-toggle="tab" href="#tab_eight<?php echo get_the_ID() ?>" class="nav-link <?php echo esc_attr($is_active); ?>"><?php echo esc_html(get_the_title()); ?><span class="tab-border bg-theme-blue-base"></span></a></li>

                    <?php
                     $counter++;
                        endwhile;
                        wp_reset_postdata(); // Reset post data
                    endif;
                ?>
            </ul>
            <!-- end tab navigation -->
        </div>
    </div>
    <div class="container company_service_container pt-0">
        <div class="row mb-8 sm-mb-10">
            <div class="col-12 tab-style-08"> 
                <div class="tab-content">
                    <?php
                            // Query to get custom post type 'clientreviews'
                            $args = array(
                                'post_type'      => 'companyservices',
                                'posts_per_page' => -1, // Get all posts
                            );
                            $query = new WP_Query($args);

                            $counter = 0;

                            // Check if there are posts
                            if ($query->have_posts()) :
                                while ($query->have_posts()) : $query->the_post();

                                    $companyservice_description = get_post_meta(get_the_ID(), '_description2', true);
                                    $companyservice_completed_project = get_post_meta(get_the_ID(), '_completed_project', true);
                                    $companyservice_url = get_post_meta(get_the_ID(), '_compnay_service_url', true);

                                    $key_value = get_post_meta(get_the_ID(), 'key_value', true);

                                    $is_active = '';
                                    $data_anime = '';
                                    $data_child_anime_1 = '';
                                    $data_child_anime_2 = '';

                                    if ($key_value == 1 || $counter == 0) { 
                                        $is_active = 'active show';
                                        $data_anime = '{ "effect": "slide", "color": "#076c9a", "direction":"lr", "easing": "easeOutQuad", "delay":50}';
                                        $data_child_anime_2 = '{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }';
                                        $data_child_anime_1 = '{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 800, "staggervalue": 500, "easing": "easeOutQuad" }';
                                    }
                        ?>

                        <!-- start tab content -->
                        <div class="tab-pane fade in <?php echo esc_attr($is_active); ?>" id="tab_eight<?php echo get_the_ID() ?>">
                            <div class="row align-items-center justify-content-center g-lg-0">
                                <div class="col-md-6 sm-mb-30px position-relative overflow-hidden p-0" data-anime='<?php echo $data_anime; ?>'>
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="w-100 border-radius-bottom-right">
                                    <div class="bg-very-light-gray w-250px position-absolute pt-20px pb-20px ps-25px pe-25px border-radius-4px bottom-30px left-35px box-shadow-large d-flex align-items-center" data-anime='<?php echo $data_child_anime_1; ?>'>
                                        <h2 class="vertical-counter d-inline-flex text-dark-gray fw-700 ls-minus-2px md-ls-minus-1px mb-0 text-nowrap border-end border-1 border-color-transparent-dark-very-light pe-20px me-20px" data-to="<?php echo $companyservice_completed_project; ?>"></h2>
                                        <span class="text-dark-gray ls-minus-05px d-inline-block lh-22">Project completed</span>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-5 offset-lg-1 col-md-6 text-center text-md-start" data-anime='<?php echo $data_child_anime_2; ?>'>
                                    <div class="mb-20px">
                                        <div class="separator-line-1px w-50px bg-theme-blue-base d-inline-block align-middle me-10px opacity-2"></div>
                                        <span class="d-inline-block text-dark-gray align-middle fw-500 fs-20 ls-minus-05px"><?php echo esc_html(get_the_title()); ?></span>
                                    </div>
                                    <h4 class="fw-700 text-dark-gray ls-minus-1px md-mb-20px"><?php echo esc_html(get_the_content()); ?></h4>
                                    <p class="mb-35px md-mb-25px"><?php echo esc_html($companyservice_description); ?></p> 
                                    <a href="<?php echo $companyservice_url ?>" class="btn btn-large btn-rounded with-rounded btn-white btn-box-shadow fw-600">Learn more<span class="bg-theme-blue-base text-white"><i class="bi bi-arrow-right-short icon-extra-medium"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->

                        <?php
                            $counter++;
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
<!-- start section -->
<section>
    <div class="container">
        <div class="row justify-content-center mb-7 md-mb-4">
            <div class="col-xl-5 col-lg-6 col-md-12 md-mb-50px sm-mb-40px text-center text-lg-start">
                <h4 class="fw-700 mb-0 text-dark-gray ls-minus-1px" data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "delay": 0, "staggervalue": 250, "easing": "easeOutQuad" }'><?php echo get_theme_mod('section5_main_title'); ?></h4>
            </div>
            <div class="col-lg-6 offset-xl-1 text-center text-lg-start">
                <div class="row align-items-center justify-content-center justify-content-lg-start">
                    <!-- start counter item -->
                    <div class="col-sm-6 last-paragraph-no-margin counter-style-04 md-mb-35px">
                        <h2 class="vertical-counter d-inline-flex alt-font text-dark-gray fw-700 ls-minus-2px mb-5px" data-text="%" data-to="<?php echo get_theme_mod('section5_first_percentage'); ?>"><sup class="text-emerald-green top-minus-5px"><i class="bi bi-arrow-up icon-medium"></i></sup></h2>
                        <span class="fs-19 fw-600 ls-minus-05px mb-5px d-block text-dark-gray" data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "delay": 0, "staggervalue": 250, "easing": "easeOutQuad" }'><?php echo get_theme_mod('section5_first_title'); ?></span>
                        <p class="w-90 sm-w-100 md-mx-auto" data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "delay": 0, "staggervalue": 250, "easing": "easeOutQuad" }'><?php echo get_theme_mod('section5_first_description'); ?></p>
                    </div>
                    <!-- end counter item -->
                    <!-- start counter item -->
                    <div class="col-sm-6 last-paragraph-no-margin counter-style-04 md-mb-35px">
                        <h2 class="vertical-counter d-inline-flex alt-font text-dark-gray fw-700 ls-minus-2px mb-5px" data-text="%" data-to="<?php echo get_theme_mod('section5_second_percentage'); ?>"><sup class="text-emerald-green top-minus-5px"><i class="bi bi-arrow-up icon-medium"></i></sup></h2>
                        <span class="fs-19 fw-600 ls-minus-05px mb-5px d-block text-dark-gray" data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "delay": 0, "staggervalue": 250, "easing": "easeOutQuad" }'><?php echo get_theme_mod('section5_second_title'); ?></span>
                        <p class="w-90 sm-w-100 md-mx-auto" data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "delay": 0, "staggervalue": 250, "easing": "easeOutQuad" }'><?php echo get_theme_mod('section5_second_description'); ?></p>
                    </div>
                    <!-- end counter item -->
                </div>
            </div>
        </div>
        <div class="row m-0 align-items-center justify-content-center border border-color-extra-medium-gray border-radius-100px md-border-radius-6px ps-10px pe-10px box-shadow-quadruple-large" data-anime='{ "scale": [1.1, 1], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>                    
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
<section class="bg-very-light-gray pb-0">
    <div class="container">    
        <div class="row justify-content-center mb-2">
            <div class="col-xxl-5 col-lg-7 col-md-8 text-center" data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <h4 class="text-dark-gray fw-700 ls-minus-1px"><?php echo get_theme_mod('news_section_title'); ?></h4>
            </div>
        </div>            
        <div class="row g-0">
            <div class="col-12">
                <ul class="blog-classic blog-wrapper grid-loading grid grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <li class="grid-sizer"></li>
                    <?php
                        // Query to get custom post type 'news'
                        $args = array(
                            'post_type'      => 'newspost',
                            'posts_per_page' => 4, // Get all posts
                        );
                        $query = new WP_Query($args);
                        // Check if there are posts
                        if ($query->have_posts()) :
                            while ($query->have_posts()) : $query->the_post();
                    ?>

                    <!-- start blog item -->
                    <li class="grid-item">
                        <div class="card bg-transparent border-0 h-100">
                            <div class="blog-image position-relative overflow-hidden border-radius-4px">
                                <a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo esc_html(get_the_title()); ?>" /></a>
                            </div>
                            <div class="card-body px-0 pt-30px pb-30px xs-pb-15px last-paragraph-no-margin">
                                <a href="<?php the_permalink(); ?>" class="card-title mb-5px fw-600 text-dark-gray d-block"><?php echo esc_html(get_the_title()); ?></a>
                                <p><?php echo esc_html(wp_trim_words(get_the_content(), 20, '...')); ?></p> 
                            </div>
                        </div>
                    </li>
                    <!-- end blog item -->

                    <?php
                        endwhile;
                        wp_reset_postdata(); // Reset post data
                    endif;
                    ?>
                </ul>
            </div> 
        </div>
    </div>
</section>
<!-- end section -->

<?php get_footer(); ?>