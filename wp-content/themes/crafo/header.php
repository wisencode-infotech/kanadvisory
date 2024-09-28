<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon icon -->
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    <!-- google fonts preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- style sheets and font icons  -->
    <title><?php echo !empty(get_the_title('')) ? get_the_title('') . ' - ' : '' ?>  <?php echo esc_html(get_bloginfo('name')); ?></title>
    <?php wp_head(); ?>
</head>

<?php

    $default_logo = get_custom_logo_url('custom_logo');
    $alt_logo = get_theme_mod('alt_logo');
    $mobile_logo = get_theme_mod('mobile_logo');

    $default_logo = empty($default_logo) ? get_template_directory_uri().'/images/demo-accounting-logo-black.png' : $default_logo;
    $alt_logo = empty($alt_logo) ? get_template_directory_uri().'/images/demo-accounting-logo-black.png' : $alt_logo;
    $mobile_logo = empty($mobile_logo) ? get_template_directory_uri().'/images/demo-accounting-logo-black.png' : $mobile_logo;

?>

<body data-mobile-nav-trigger-alignment="right" data-mobile-nav-style="modern" data-mobile-nav-bg-color="#076c9a">

<!-- Your header HTML -->
 <!-- start cursor -->
<div class="cursor-page-inner">
    <div class="circle-cursor circle-cursor-inner"></div>
    <div class="circle-cursor circle-cursor-outer"></div>
</div>
<!-- end cursor -->

<!-- start header --> 
<header class="header-with-topbar">
    <!-- start header top bar -->
    <div class="header-top-bar top-bar-dark bg-very-light-gray">
        <div class="container-fluid">
            <div class="row h-45px xs-h-auto align-items-center m-0 xs-pt-5px xs-pb-5px">
                <div class="col-lg-6 col-md-7 text-center text-md-start xs-px-0">
                    <div class="fs-15 text-dark-gray fw-500">Our accounting experts waiting for you! <a href="<?php echo home_url(); ?>/contact" class="text-dark-gray text-decoration-line-bottom fw-600">Contact now</a></div>
                </div>
                <div class="col-lg-6 col-md-5 text-end d-none d-md-flex">
                    <?php if (get_theme_mod('header_contact_number')) : ?>
                        <div class="widget fs-15 fw-500 me-35px lg-me-25px md-me-0 text-dark-gray"><a href="tel:<?php echo esc_attr(get_theme_mod('header_contact_number')); ?>"><i class="feather icon-feather-phone-call"></i><?php echo esc_attr(get_theme_mod('header_contact_number')); ?></a></div>
                    <?php endif; ?>

                    <?php if (get_theme_mod('header_address')) : ?>
                        <div class="widget fs-15 fw-500 text-dark-gray d-none d-lg-inline-block"><i class="feather icon-feather-map-pin"></i><?php echo esc_attr(get_theme_mod('header_address')); ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- end header top bar -->
    <!-- start navigation -->
    <nav class="navbar navbar-expand-lg header-light bg-white responsive-sticky">
        <div class="container-fluid">
            <div class="col-auto col-lg-2 me-lg-0 me-auto">
                <a class="navbar-brand" href="<?php echo home_url(); ?>">
                    <img src="<?php echo $default_logo; ?>" data-at2x="<?php echo $default_logo; ?>" alt="" class="default-logo">
                    <img src="<?php echo $alt_logo; ?>" data-at2x="<?php echo $alt_logo; ?>" alt="" class="alt-logo">
                    <img src="<?php echo $mobile_logo; ?>" data-at2x="<?php echo $mobile_logo; ?>" alt="" class="mobile-logo"> 
                </a>
            </div>
            <div class="col-auto menu-order position-static">
                <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav"> 

                   

                <div class="mobile-nav-logo text-center d-lg-none mobile-logo-top-center">
                    <a class="navbar-brand" href="<?php echo home_url(); ?>">
                        <img src="<?php echo $mobile_logo; ?>" data-at2x="<?php echo $mobile_logo; ?>" alt="Mobile Logo" >
                         <!-- <p class="mobile-slogan mt-8 mb-4"><?php echo get_theme_mod('preloader_slogan'); ?></p> -->
                    </a>
                </div>
                <div class="mobile-nav-logo text-center d-lg-none mobile-slogan-top-center">
                    <p class="mobile-slogan mt-8 mb-4"><?php echo get_theme_mod('preloader_slogan'); ?></p>
                </div>

                <?php
                    if (has_nav_menu('crafo-header-menu')) {
                        wp_nav_menu(array(
                            'theme_location' => 'crafo-header-menu',  // Registered menu name
                            'menu_class'     => 'navbar-nav fw-600',  // Add your custom class
                            'container'      => false,                // Remove the wrapping container
                            'walker'         => new Crafo_Custom_Nav_Walker(),  // Use the custom walker
                            'fallback_cb'    => false,                // No fallback
                        ));
                    }
                ?>
                </div>
            </div>
            <div class="col-auto col-lg-2 text-end d-none d-sm-flex">
                <div class="header-icon"> 
                    <div class="header-button">
                        <a href="<?php echo home_url(); ?>/contact" class="btn btn-small btn-rounded btn-theme-blue btn-box-shadow">Let's discuss</a>
                    </div>
                </div>  
            </div>
        </div>
    </nav>
    <!-- end navigation -->
</header>
