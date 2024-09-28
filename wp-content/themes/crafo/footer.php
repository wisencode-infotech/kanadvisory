<?php 

    $footer_logo = get_theme_mod('footer_logo');
    $footer_logo = empty($footer_logo) ? get_template_directory_uri().'/images/demo-accounting-logo-white.png' : $footer_logo;
    
?>

<?php if (!is_page('home')) { ?>
<section class="bg-extra-medium-gray pt-0 pb-0 footer-blank-section"></section>
<?php } ?>
<footer class="footer-light bg-white pt-0 pb-2 lg-pb-35px">
    <!-- start footer -->
    <div class="footer-top pt-50px pb-50px sm-pt-35px sm-pb-35px border-bottom border-1 border-color-transparent-white-light">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <!-- start footer column -->
                <div class="col-xl-6 text-center text-xl-start lg-mb-30px sm-mb-20px">
                    <h3 class="text-dark-gray mb-5px fw-500 ls-minus-1px"><?php echo get_theme_mod('footer_text1'); ?></h3>
                    <span class="fs-20 text-dark-gray fw-300"><?php echo get_theme_mod('footer_text2'); ?></span>
                </div>
                <!-- end footer column -->
                <!-- start footer column -->
                <div class="col-xl-6 text-center text-xl-end">
                    <a href="<?php echo home_url(); ?>/contact" class="btn btn-extra-large btn-green left-icon btn-box-shadow btn-rounded text-transform-none d-inline-block align-middle me-15px xs-m-10px"><i class="feather icon-feather-mail"></i>Free consultation</a>

                     <?php if (get_theme_mod('contact_number')) : ?>
                         <a href="tel:<?php echo esc_attr(get_theme_mod('contact_number')); ?>" class="btn btn-extra-large btn-theme-blue left-icon btn-box-shadow btn-rounded d-inline-block align-middle xs-m-10px"><i class="feather icon-feather-phone-call"></i><?php echo esc_attr(get_theme_mod('contact_number')); ?></a>
                    <?php endif; ?>
                   
                </div>
                <!-- end footer column -->
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center fs-17 fw-300 mt-5 mb-4 md-mt-45px md-mb-45px xs-mt-35px xs-mb-35px">
            <!-- start footer column -->
            <div class="col-6 col-lg-4 col-sm-6 order-sm-1 md-mb-40px xs-mb-30px last-paragraph-no-margin">
                <a href="demo-accounting.html" class="footer-logo mb-15px d-inline-block"><img src="<?php echo $footer_logo; ?>" data-at2x="<?php echo $footer_logo; ?>" alt=""></a>
                <p class="w-85 xl-w-95 sm-w-100">
                    <?php if (get_theme_mod('footer_description')) : ?>
                        <?php echo esc_attr(get_theme_mod('footer_description')); ?>
                    <?php endif; ?>
                </p>
                <div class="elements-social social-icon-style-02 mt-20px lg-mt-20px">
                    <ul class="small-icon dark">
                        <?php if (get_theme_mod('footer_facebook_url')) : ?>
                            <li><a class="facebook" href="<?php echo esc_url(get_theme_mod('footer_facebook_url')); ?>" target="_blank">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a></li>
                        <?php endif; ?>

                        <?php if (get_theme_mod('footer_twitter_url')) : ?>
                            <li><a class="twitter" href="<?php echo esc_url(get_theme_mod('footer_twitter_url')); ?>" target="_blank">
                                <i class="fa-brands fa-twitter"></i>
                            </a></li>
                        <?php endif; ?>

                        <?php if (get_theme_mod('footer_instagram_url')) : ?>
                            <li><a class="instagram" href="<?php echo esc_url(get_theme_mod('footer_instagram_url')); ?>" target="_blank">
                                <i class="fa-brands fa-instagram"></i>
                            </a></li>
                        <?php endif; ?>

                        <?php if (get_theme_mod('footer_dribbble_url')) : ?>
                            <li><a class="dribbble" href="<?php echo esc_url(get_theme_mod('footer_dribbble_url')); ?>" target="_blank">
                                <i class="fa-brands fa-dribbble"></i>
                            </a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <!-- end footer column -->
            <!-- start footer column -->
            <div class="col-6 col-lg-2 col-sm-6 xs-mb-30px order-sm-3 order-lg-2">
                <span class="fs-18 fw-400 d-block text-dark-gray mb-5px">About</span>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer-menu-about',  // Registered footer menu for About
                    'menu_class'     => '',                    // No specific class for <ul>
                    'container'      => 'ul',                  // Wrap menu in <ul>
                    'fallback_cb'    => false,                 // No fallback
                ));
                ?>
            </div>
            <!-- end footer column -->

            <!-- start footer column -->
            <div class="col-6 col-lg-3 col-sm-6 xs-mb-30px order-sm-4 order-lg-3">
                <span class="fs-18 fw-400 d-block text-dark-gray mb-5px">Services</span>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer-menu-services', // Registered footer menu for Services
                    'menu_class'     => '',                      // No specific class for <ul>
                    'container'      => 'ul',                    // Wrap menu in <ul>
                    'fallback_cb'    => false,                   // No fallback
                ));
                ?>
            </div>
            <!-- end footer column -->
            <!-- start footer column -->
            <div class="col-6 col-lg-3 col-sm-6 xs-mb-30px order-sm-5 order-lg-4">
                <span class="fs-18 fw-400 d-block text-dark-gray mb-5px">Get in touch</span>
                <?php if (get_theme_mod('support_email')) : ?>
                    <p class="mb-5px">Ndeed support?</p>
                    <a href="mailto:<?php echo get_theme_mod('support_email'); ?>" class="text-dark-gray lh-16 d-block mb-15px"><?php echo get_theme_mod('support_email'); ?></a>
                <?php endif; ?>
                
                <?php if (get_theme_mod('customer_care_number')) : ?>
                    <p class="mb-5px">Customer care?</p>
                    <a href="tel:<?php echo esc_attr(get_theme_mod('customer_care_number')); ?>" class="text-dark-gray lh-16 d-block"><?php echo esc_attr(get_theme_mod('customer_care_number')); ?></a>
                <?php endif; ?>

                
            </div>
            <!-- end footer column -->                
        </div> 
        <div class="row align-items-center fs-16 fw-300">
            <!-- start copyright -->
            <div class="col-md-4 last-paragraph-no-margin order-2 order-md-1 text-center text-md-start"><p>&COPY; Copyright <?php date('Y') ?> <a href="index.html" target="_blank" class="text-decoration-line-bottom text-dark-gray"><?php echo esc_html(get_bloginfo('name')); ?></a></p></div>
            <!-- end copyright -->
            <!-- start footer menu -->
            <div class="col-md-8 text-md-end order-1 order-md-2 text-center text-md-end sm-mb-10px">
                <ul class="footer-navbar sm-lh-normal"> 
                    <?php

                        $footer_links_menu = wp_get_nav_menus(array('name' => 'footer-bottom-links'));

                        if (!empty($footer_links_menu)) {
                            $bottom_menu_items = wp_get_nav_menu_items($footer_links_menu[0]->term_id);

                            foreach ($bottom_menu_items as $key => $bottom_menu_item) {
                                echo '<li><a href="'. $bottom_menu_item->url .'" class="nav-link">'. $bottom_menu_item->title .'</a></li>';
                            }
                        }
                    
                    ?>
                </ul>
            </div>
            <!-- end footer menu -->
        </div>
    </div>
    <!-- end footer -->
    <!-- start sticky -->
    <div class="sticky-wrap d-none d-lg-inline-block" data-animation-delay="100" data-shadow-animation="true">
        <span class="fs-16"><i class="bi bi-envelope icon-small me-10px"></i>Get our service — <a href="mailto:info@domain.com" class="text-decoration-line-bottom fw-500">Send a message</a></span>
    </div>
    <!-- end sticky -->
        <!-- start scroll progress -->
    <div class="scroll-progress d-none d-xxl-block">
        <a href="#" class="scroll-top" aria-label="scroll">
        <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
        </a>
    </div>
    <!-- end scroll progress -->
    <?php wp_footer(); ?>
</footer>
</body>
</html>
