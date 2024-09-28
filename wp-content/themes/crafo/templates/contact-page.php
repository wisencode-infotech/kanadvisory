<?php
/*
Template Name: Contact Page
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
        <div class="row align-items-center">
            <div class="col-lg-5 md-mb-50px" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h3 class="text-dark-gray fw-700 ls-minus-2px w-90 md-w-100"><?php echo get_theme_mod('contact_title'); ?></h3>
                <p class="w-95 md-w-100"><?php echo get_theme_mod('contact_description'); ?></p>
                <div class="row row-cols-1 justify-content-center mt-30px">                  
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-08">
                        <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                            <div class="feature-box-icon feature-box-icon-rounded bg-theme-blue w-80px h-80px rounded-circle me-20px">
                                <i class="bi bi-envelope text-white icon-very-medium"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="d-block ls-minus-05px"><?php echo get_theme_mod('contact_section1_email_text'); ?></span>
                                <span class="d-block fs-22 text-dark-gray ls-minus-05px fw-600"><a href="mailto:careers@domain.com" class="text-dark-gray text-decoration-line-bottom"><?php echo get_theme_mod('contact_section1_email'); ?></a></span>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                </div>
            </div>
            <div class="col-lg-7 ps-50px lg-ps-15px">
                <div class="row row-cols-1 row-cols-sm-2 justify-content-center">
                    <div class="col xs-mb-30px" data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="bg-very-light-gray h-100 fs-17 lh-30 p-35px lg-p-25px border-radius-5px">
                            <img src="<?php echo get_theme_mod('contact_address1_image'); ?>" alt="" class="border-radius-4px mb-30px lg-mb-20px">
                            <span class="alt-font text-dark-gray fs-19 fw-600 d-inline-block"><?php echo get_theme_mod('contact_address1_name'); ?></span> 
                            <p class="mb-15px"><?php echo get_theme_mod('contact_address1_description'); ?></p>
                            <span class="d-block"><span class="text-dark-gray fw-600">T:</span> <a href="tel:<?php echo get_theme_mod('contact_address1_telephone'); ?>"><?php echo get_theme_mod('contact_address1_telephone'); ?></a></span>
                            <span class="d-block"><span class="text-dark-gray fw-600">E:</span> <a href="mailto:<?php echo get_theme_mod('contact_address1_email'); ?>" class="text-decoration-line-bottom"><?php echo get_theme_mod('contact_address1_email'); ?></a></span>
                        </div>
                    </div>
                    <div class="col" data-anime='{ "translateY": [-50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="bg-very-light-gray h-100 fs-17 lh-30 p-35px lg-p-25px border-radius-5px">
                            <img src="<?php echo get_theme_mod('contact_address2_image'); ?>" alt="" class="border-radius-4px mb-30px lg-mb-20px">
                            <span class="alt-font text-dark-gray fs-19 fw-600 d-inline-block"><?php echo get_theme_mod('contact_address2_name'); ?></span> 
                            <p class="mb-15px"><?php echo get_theme_mod('contact_address2_description'); ?></p>
                            <span class="d-block"><span class="text-dark-gray fw-600">T:</span> <a href="tel:<?php echo get_theme_mod('contact_address2_telephone'); ?>"><?php echo get_theme_mod('contact_address2_telephone'); ?></a></a></span>
                            <span class="d-block"><span class="text-dark-gray fw-600">E:</span> <a href="mailto:<?php echo get_theme_mod('contact_address2_email'); ?>" class="text-decoration-line-bottom"><?php echo get_theme_mod('contact_address2_email'); ?></a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="p-0 h-500px sm-h-350px overlap-height" id="location">
    <div class="container-fluid h-100 overlap-gap-section">
        <div class="row justify-content-center h-100">
            <div class="col-12 p-0">
                <?php
                // Retrieve the customizer settings
                $map_lat = get_theme_mod('contact_map_lat', '-37.805688'); // Default lat if not set
                $map_lng = get_theme_mod('contact_map_long', '144.962312'); // Default lng if not set
                $map_address = get_theme_mod('contact_map_address', '16122 Collins street, Melbourne, Australia');
                $map_cid = get_theme_mod('contact_map_cid', '13153204942596594449');
                ?>

                <div id="map" class="map h-500px md-h-400px sm-h-350px"
                     data-map-options='{
                         "lat": <?php echo esc_attr($map_lat); ?>,
                         "lng": <?php echo esc_attr($map_lng); ?>,
                         "style": "Silver",
                         "marker": { "type": "HTML", "color": "#005153" },
                         "popup": {
                             "defaultOpen": true,
                             "html": "<div class=infowindow><strong class=\"mb-3 d-inline-block alt-font\">Crafto Accounting</strong><p class=\"alt-font\"><?php echo esc_js($map_address); ?></p></div><div class=\"google-maps-link alt-font\"> <a aria-label=\"View larger map\" target=\"_blank\" href=\"https://maps.google.com/maps?ll=<?php echo esc_attr($map_lat); ?>,<?php echo esc_attr($map_lng); ?>&amp;z=17&amp;t=m&amp;hl=en-US&amp;gl=IN&amp;mapclient=embed&amp;cid=<?php echo esc_attr($map_cid); ?>\">VIEW LARGER MAP</a></div>"
                         }
                     }'>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section --> 
<!-- start section -->
<section>
    <div class="container overlap-section overlap-section-three-fourth" data-anime='{"el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 800, "delay": 500, "staggervalue": 150, "easing": "easeOutQuad" }'> 
        <div class="row row-cols-md-1 justify-content-center">
            <div class="col-xl-10">
                <div class="bg-white p-8 border-radius-6px box-shadow-double-large">
                    <div class="row">
                        <div class="col-9">
                            <h3 class="alt-font text-dark-gray fw-700 ls-minus-2px mb-50px xs-mb-35px"><?php echo get_theme_mod('contact_form_title'); ?></h3>
                        </div>
                        <div class="col-3 text-end" data-anime='{ "translateY": [30, 0], "translateX": [-30, 0], "opacity": [0,1], "duration": 600, "delay": 300, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <i class="bi bi-send icon-large text-dark-gray animation-zoom"></i>
                        </div>
                    </div>
                    <!-- start contact form -->
                    <form action="<?php echo admin_url('admin-ajax.php'); ?>" method="post" class="row contact-form-style-02">
                        <input type="hidden" name="action" value="handle_contact_form">
                        <div class="col-md-6 mb-30px">
                            <input class="input-name form-control required" type="text" name="name" placeholder="Your name*" />
                        </div>
                        <div class="col-md-6 mb-30px">
                            <input class="form-control required" type="email" name="email" placeholder="Your email address*" />
                        </div>
                        <div class="col-md-6 mb-30px">
                            <input class="form-control" type="tel" name="phone" placeholder="Your phone" />
                        </div>
                        <div class="col-md-6 mb-30px">
                            <input class="form-control" type="text" name="subject" placeholder="Your subject" />
                        </div>
                        <div class="col-md-12 mb-30px">
                            <textarea class="form-control required" cols="40" rows="4" name="message" placeholder="Your message"></textarea>
                        </div>
                        <div class="col-xl-7 col-md-7 last-paragraph-no-margin">
                            <p class="text-center text-md-start fs-15 lh-26"><?php echo get_theme_mod('contact_form_description'); ?></p>
                        </div>
                        <div class="col-xl-5 col-md-5 text-center text-md-end sm-mt-20px">
                            <input type="hidden" name="redirect" value="">
                            <button class="btn btn-theme-blue btn-medium btn-rounded btn-box-shadow submit" type="submit"><?php echo get_theme_mod('contact_form_save_btn_title'); ?></button>
                        </div>
                        <div class="col-12">
                            <div class="form-results mt-20px alert d-none"></div>
                        </div>
                    </form>
                    <!-- end contact form -->
                </div>
            </div>
            <div class="row align-items-center justify-content-center mt-8">
                <div class="col-md-auto text-center text-md-end sm-mb-20px">
                    <h6 class="text-dark-gray fw-600 mb-0 ls-minus-1px"><?php echo get_theme_mod('social_media_text'); ?> </h6>
                </div>
                <div class="col-2 d-none d-lg-inline-block">
                    <span class="w-100 h-1px bg-dark-gray opacity-2 d-flex mx-auto"></span>
                </div>
                <!-- start social icon -->
                <div class="col-md-auto elements-social social-icon-style-04 text-center text-md-start ps-lg-0">
                    <ul class="large-icon dark">
                        <?php if (get_theme_mod('footer_facebook_url')) : ?>
                            <li class="m-0"><a class="facebook" href="<?php echo esc_url(get_theme_mod('footer_facebook_url')); ?>" target="_blank"><i class="fa-brands fa-facebook-f"></i><span></span></a></li>
                        <?php endif; ?>

                        <?php if (get_theme_mod('footer_twitter_url')) : ?>
                            <li class="m-0"><a class="twitter" href="<?php echo esc_url(get_theme_mod('footer_twitter_url')); ?>" target="_blank"><i class="fa-brands fa-twitter"></i><span></span></a></li>   
                        <?php endif; ?>

                        <?php if (get_theme_mod('footer_instagram_url')) : ?>
                            <li class="m-0"><a class="instagram" href="<?php echo esc_url(get_theme_mod('footer_instagram_url')); ?>" target="_blank"><i class="fa-brands fa-instagram"></i><span></span></a></li>
                        <?php endif; ?>

                        <?php if (get_theme_mod('footer_dribbble_url')) : ?>
                             <li class="m-0"><a class="dribbble" href="<?php echo esc_url(get_theme_mod('footer_dribbble_url')); ?>" target="_blank"><i class="fa-brands fa-dribbble"></i><span></span></a></li>
                        <?php endif; ?>
                    </ul>                  
                </div>
                <!-- end social icon -->
            </div>
        </div>
    </div>
</section>
<!-- end section --> 

<?php get_footer(); ?>