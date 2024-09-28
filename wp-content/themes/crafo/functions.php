<?php
require_once get_template_directory() . '/classes/Crafo_Custom_Nav_Walker.php';

add_filter('show_admin_bar', '__return_false');

function crafto_theme_setup() {
    add_theme_support('custom-logo');

    add_theme_support( 'post-thumbnails' );

    register_nav_menus(array(
        'crafo-header-menu' => __('Header Menu'),
        'footer-menu-about' => __('Footer Menu About'),
        'footer-menu-services' => __('Footer Menu Services'),
        'footer-bottom-links' => __('Footer Bottom Links'),
        'mobile-header-menu' => __('Mobile Header Menu'),
    ));
}
add_action('after_setup_theme', 'crafto_theme_setup');

function crafto_customize_register( $wp_customize ) {
    // Add section for the alt logo
    $wp_customize->add_section('alt_logo_section', array(
        'title'       => __('Alt Logo', 'crafto'),
        'priority'    => 30,
        'description' => __('Upload a alt logo for the site', 'crafto'),
    ));

    // Add setting for the alt logo
    $wp_customize->add_setting('alt_logo');

    // Add control for the alt logo (image uploader)
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'alt_logo', array(
        'label'    => __('Alt Logo', 'crafto'),
        'section'  => 'alt_logo_section',
        'settings' => 'alt_logo',
    )));

    // Add section for the mobile logo
    $wp_customize->add_section('mobile_logo_section', array(
        'title'       => __('Mobile Logo', 'crafto'),
        'priority'    => 30,
        'description' => __('Upload a mobile logo for the site', 'crafto'),
    ));

    // Add setting for the mobile logo
    $wp_customize->add_setting('mobile_logo');

    // Add control for the mobile logo (image uploader)
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mobile_logo', array(
        'label'    => __('Mobile Logo', 'crafto'),
        'section'  => 'mobile_logo_section',
        'settings' => 'mobile_logo',
    )));

    // Add section for the Header Settings
    $wp_customize->add_section('header_settings_section', array(
        'title'       => __('Header Settings', 'crafto'),
        'priority'    => 20, // Adjust the priority to fit in the customizer order
        'description' => __('Manage header content settings.', 'crafto'),
    ));

    // Add setting and control for Contact Number
    $wp_customize->add_setting('header_contact_number', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('header_contact_number', array(
        'label'    => __('Contact Number', 'crafto'),
        'section'  => 'header_settings_section',
        'settings' => 'header_contact_number',
        'type'     => 'text',
    ));

    // Add setting and control for Address
    $wp_customize->add_setting('header_address', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('header_address', array(
        'label'    => __('Address', 'crafto'),
        'section'  => 'header_settings_section',
        'settings' => 'header_address',
        'type'     => 'text',
    ));

    // Add section for the footer logo
    $wp_customize->add_section('footer_logo_section', array(
        'title'       => __('Footer Logo', 'crafto'),
        'priority'    => 30,
        'description' => __('Upload a footer logo for the site', 'crafto'),
    ));

    // Add setting for the footer logo
    $wp_customize->add_setting('footer_logo');

    // Add control for the footer logo (image uploader)
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_logo', array(
        'label'    => __('Footer Logo', 'crafto'),
        'section'  => 'footer_logo_section',
        'settings' => 'footer_logo',
    )));

     // Add section for the Footer Settings
    $wp_customize->add_section('footer_settings_section', array(
        'title'       => __('Footer Settings', 'crafto'),
        'priority'    => 40,
        'description' => __('Manage footer content settings.', 'crafto'),
    ));

    // Add setting and control for Text1
    $wp_customize->add_setting('footer_text1', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('footer_text1', array(
        'label'    => __('Text1', 'crafto'),
        'section'  => 'footer_settings_section',
        'settings' => 'footer_text1',
        'type'     => 'text',
    ));

    // Add setting and control for Text2
    $wp_customize->add_setting('footer_text2', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('footer_text2', array(
        'label'    => __('Text2', 'crafto'),
        'section'  => 'footer_settings_section',
        'settings' => 'footer_text2',
        'type'     => 'text',
    ));

    // Add setting and control for Footer Description
    $wp_customize->add_setting('footer_description', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('footer_description', array(
        'label'    => __('Footer Description', 'crafto'),
        'section'  => 'footer_settings_section',
        'settings' => 'footer_description',
        'type'     => 'textarea',
    ));

    // Add setting and control for Support Email
    $wp_customize->add_setting('support_email', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('support_email', array(
        'label'    => __('Support Email', 'crafto'),
        'section'  => 'footer_settings_section',
        'settings' => 'support_email',
        'type'     => 'email',
    ));

    // Add setting and control for Customer Care Number
    $wp_customize->add_setting('customer_care_number', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('customer_care_number', array(
        'label'    => __('Customer Care Number', 'crafto'),
        'section'  => 'footer_settings_section',
        'settings' => 'customer_care_number',
        'type'     => 'text',
    ));

    // Add setting and control for Contact Number
    $wp_customize->add_setting('contact_number', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('contact_number', array(
        'label'    => __('Contact Number', 'crafto'),
        'section'  => 'footer_settings_section',
        'settings' => 'contact_number',
        'type'     => 'text',
    ));

     // Add section for the Footer Social Links
    $wp_customize->add_section('footer_social_links_section', array(
        'title'       => __('Footer Social Links', 'crafto'),
        'priority'    => 50,
        'description' => __('Add social media links to be displayed in the footer.', 'crafto'),
    ));

    // Add setting and control for Facebook URL
    $wp_customize->add_setting('footer_facebook_url', array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('footer_facebook_url', array(
        'label'    => __('Facebook URL', 'crafto'),
        'section'  => 'footer_social_links_section',
        'settings' => 'footer_facebook_url',
        'type'     => 'url',
    ));

    // Add setting and control for Twitter URL
    $wp_customize->add_setting('footer_twitter_url', array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('footer_twitter_url', array(
        'label'    => __('Twitter URL', 'crafto'),
        'section'  => 'footer_social_links_section',
        'settings' => 'footer_twitter_url',
        'type'     => 'url',
    ));

    // Add setting and control for Instagram URL
    $wp_customize->add_setting('footer_instagram_url', array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('footer_instagram_url', array(
        'label'    => __('Instagram URL', 'crafto'),
        'section'  => 'footer_social_links_section',
        'settings' => 'footer_instagram_url',
        'type'     => 'url',
    ));

    // Add setting and control for Dribbble URL
    $wp_customize->add_setting('footer_dribbble_url', array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('footer_dribbble_url', array(
        'label'    => __('Dribbble URL', 'crafto'),
        'section'  => 'footer_social_links_section',
        'settings' => 'footer_dribbble_url',
        'type'     => 'url',
    ));
}
add_action('customize_register', 'crafto_customize_register');

function crafto_home_page_settings( $wp_customize ) {

    // Add section for Home Page Settings
    $wp_customize->add_section('home_page_settings_section', array(
        'title'       => __('Home Page Settings', 'crafto'),
        'priority'    => 10, // Adjust priority to display it in a specific order
        'description' => __('Manage home page content settings.', 'crafto'),
    ));

    // Experience Section Title
    $wp_customize->add_setting('experience_section_title', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('experience_section_title', array(
        'label'    => __('Experience Section Title', 'crafto'),
        'section'  => 'home_page_settings_section',
        'settings' => 'experience_section_title',
        'type'     => 'text',
    ));

    // Experience Section Description
    $wp_customize->add_setting('experience_section_description', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('experience_section_description', array(
        'label'    => __('Experience Section Description', 'crafto'),
        'section'  => 'home_page_settings_section',
        'settings' => 'experience_section_description',
        'type'     => 'textarea',
    ));

     // Experience Section Image
    $wp_customize->add_setting('experience_section_image', array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'experience_section_image', array(
        'label'    => __('Experience Section Image', 'crafto'),
        'section'  => 'home_page_settings_section',
        'settings' => 'experience_section_image',
    )));

    // Service Section Title
    $wp_customize->add_setting('service_section_title', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('service_section_title', array(
        'label'    => __('Service Section Title', 'crafto'),
        'section'  => 'home_page_settings_section',
        'settings' => 'service_section_title',
        'type'     => 'text',
    ));

    // Service Section Description
    $wp_customize->add_setting('service_section_description', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('service_section_description', array(
        'label'    => __('Service Section Description', 'crafto'),
        'section'  => 'home_page_settings_section',
        'settings' => 'service_section_description',
        'type'     => 'textarea',
    ));

    // Section 3 Title
    $wp_customize->add_setting('section3_title', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('section3_title', array(
        'label'    => __('Section 3 Title', 'crafto'),
        'section'  => 'home_page_settings_section',
        'settings' => 'section3_title',
        'type'     => 'text',
    ));

    // Section 3 Image
    // $wp_customize->add_setting('section3_image', array(
    //     'default'   => '',
    //     'sanitize_callback' => 'esc_url_raw',
    // ));
    // $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'section3_image', array(
    //     'label'    => __('Section 3 Image', 'crafto'),
    //     'section'  => 'home_page_settings_section',
    //     'settings' => 'section3_image',
    // )));

    // Section 4 Title
    $wp_customize->add_setting('section4_title', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('section4_title', array(
        'label'    => __('Section 4 Title', 'crafto'),
        'section'  => 'home_page_settings_section',
        'settings' => 'section4_title',
        'type'     => 'text',
    ));

    // Section 5 Main Title
    $wp_customize->add_setting('section5_main_title', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('section5_main_title', array(
        'label'    => __('Section 5 Main Title', 'crafto'),
        'section'  => 'home_page_settings_section',
        'settings' => 'section5_main_title',
        'type'     => 'text',
    ));

    // Section 5 First Title
    $wp_customize->add_setting('section5_first_title', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('section5_first_title', array(
        'label'    => __('Section 5 First Title', 'crafto'),
        'section'  => 'home_page_settings_section',
        'settings' => 'section5_first_title',
        'type'     => 'text',
    ));

    // Section 5 First Description
    $wp_customize->add_setting('section5_first_description', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('section5_first_description', array(
        'label'    => __('Section 5 First Description', 'crafto'),
        'section'  => 'home_page_settings_section',
        'settings' => 'section5_first_description',
        'type'     => 'textarea',
    ));

    // Section 5 First Percentage
    $wp_customize->add_setting('section5_first_percentage', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('section5_first_percentage', array(
        'label'    => __('Section 5 First Percentage', 'crafto'),
        'section'  => 'home_page_settings_section',
        'settings' => 'section5_first_percentage',
        'type'     => 'number',
    ));

    // Section 5 Second Title
    $wp_customize->add_setting('section5_second_title', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('section5_second_title', array(
        'label'    => __('Section 5 Second Title', 'crafto'),
        'section'  => 'home_page_settings_section',
        'settings' => 'section5_second_title',
        'type'     => 'text',
    ));

    // Section 5 Second Description
    $wp_customize->add_setting('section5_second_description', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('section5_second_description', array(
        'label'    => __('Section 5 Second Description', 'crafto'),
        'section'  => 'home_page_settings_section',
        'settings' => 'section5_second_description',
        'type'     => 'textarea',
    ));

    // Section 5 Second Percentage
    $wp_customize->add_setting('section5_second_percentage', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('section5_second_percentage', array(
        'label'    => __('Section 5 Second Percentage', 'crafto'),
        'section'  => 'home_page_settings_section',
        'settings' => 'section5_second_percentage',
        'type'     => 'number',
    ));

    // News Section Title
    $wp_customize->add_setting('news_section_title', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('news_section_title', array(
        'label'    => __('News Section Title', 'crafto'),
        'section'  => 'home_page_settings_section',
        'settings' => 'news_section_title',
        'type'     => 'text',
    ));
}

add_action('customize_register', 'crafto_home_page_settings');

function crafto_company_page_settings( $wp_customize ) {

    require_once get_template_directory() . '/classes/WP_Customize_FAQ_Control.php';

    // Add section for Company Page Settings
    $wp_customize->add_section('company_page_settings_section', array(
        'title'       => __('Company Page Settings', 'crafto'),
        'priority'    => 20, // Adjust priority as needed
        'description' => __('Manage company page content settings.', 'crafto'),
    ));

    // Accountant Consultant Title
    $wp_customize->add_setting('_company_accountant_consultant_title', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('_company_accountant_consultant_title', array(
        'label'    => __('Accountant Consultant Title', 'crafto'),
        'section'  => 'company_page_settings_section',
        'settings' => '_company_accountant_consultant_title',
        'type'     => 'text',
    ));

    // Section 1 Title 1
    $wp_customize->add_setting('_company_section1_title1', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('_company_section1_title1', array(
        'label'    => __('Section 1 Title 1', 'crafto'),
        'section'  => 'company_page_settings_section',
        'settings' => '_company_section1_title1',
        'type'     => 'text',
    ));

    // Section 1 Description 1
    $wp_customize->add_setting('_company_section1_description1', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('_company_section1_description1', array(
        'label'    => __('Section 1 Description 1', 'crafto'),
        'section'  => 'company_page_settings_section',
        'settings' => '_company_section1_description1',
        'type'     => 'textarea',
    ));

    // Section 1 Image 1
    $wp_customize->add_setting('_company_section1_image1', array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, '_company_section1_image1', array(
        'label'    => __('Section 1 Image 1', 'crafto'),
        'section'  => 'company_page_settings_section',
        'settings' => '_company_section1_image1',
    )));

    // Section 1 Title 2
    $wp_customize->add_setting('_company_section1_title2', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('_company_section1_title2', array(
        'label'    => __('Section 1 Title 2', 'crafto'),
        'section'  => 'company_page_settings_section',
        'settings' => '_company_section1_title2',
        'type'     => 'text',
    ));

    // Section 1 Description 2
    $wp_customize->add_setting('_company_section1_description2', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('_company_section1_description2', array(
        'label'    => __('Section 1 Description 2', 'crafto'),
        'section'  => 'company_page_settings_section',
        'settings' => '_company_section1_description2',
        'type'     => 'textarea',
    ));

    // Section 1 Image 2
    $wp_customize->add_setting('_company_section1_image2', array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, '_company_section1_image2', array(
        'label'    => __('Section 1 Image 2', 'crafto'),
        'section'  => 'company_page_settings_section',
        'settings' => '_company_section1_image2',
    )));

    // Section 1 Title 3
    $wp_customize->add_setting('_company_section1_title3', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('_company_section1_title3', array(
        'label'    => __('Section 1 Title 3', 'crafto'),
        'section'  => 'company_page_settings_section',
        'settings' => '_company_section1_title3',
        'type'     => 'text',
    ));

    // Section 1 Description 3
    $wp_customize->add_setting('_company_section1_description3', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('_company_section1_description3', array(
        'label'    => __('Section 1 Description 3', 'crafto'),
        'section'  => 'company_page_settings_section',
        'settings' => '_company_section1_description3',
        'type'     => 'textarea',
    ));

    // Section 1 Image 3
    $wp_customize->add_setting('_company_section1_image3', array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, '_company_section1_image3', array(
        'label'    => __('Section 1 Image 3', 'crafto'),
        'section'  => 'company_page_settings_section',
        'settings' => '_company_section1_image3',
    )));

    // Section 2 Image 1
    $wp_customize->add_setting('_company_section2_image1', array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, '_company_section2_image1', array(
        'label'    => __('Section 2 Image 1', 'crafto'),
        'section'  => 'company_page_settings_section',
        'settings' => '_company_section2_image1',
    )));

    // Section 2 Image 2
    $wp_customize->add_setting('_company_section2_image2', array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, '_company_section2_image2', array(
        'label'    => __('Section 2 Image 2', 'crafto'),
        'section'  => 'company_page_settings_section',
        'settings' => '_company_section2_image2',
    )));

    // Section 2 Title
    $wp_customize->add_setting('_company_section2_title', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('_company_section2_title', array(
        'label'    => __('Section 2 Title', 'crafto'),
        'section'  => 'company_page_settings_section',
        'settings' => '_company_section2_title',
        'type'     => 'text',
    ));

    // Section 2 Description
    $wp_customize->add_setting('_company_section2_description', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('_company_section2_description', array(
        'label'    => __('Section 2 Description', 'crafto'),
        'section'  => 'company_page_settings_section',
        'settings' => '_company_section2_description',
        'type'     => 'textarea',
    ));

    // Section 2 Account Team Text and Value
    $wp_customize->add_setting('_company_section2_account_team_text', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('_company_section2_account_team_text', array(
        'label'    => __('Account Team Text', 'crafto'),
        'section'  => 'company_page_settings_section',
        'settings' => '_company_section2_account_team_text',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('_company_section2_account_team_value', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('_company_section2_account_team_value', array(
        'label'    => __('Account Team Value', 'crafto'),
        'section'  => 'company_page_settings_section',
        'settings' => '_company_section2_account_team_value',
        'type'     => 'number',
    ));

    // Section 2 Project Completed Text and Value
    $wp_customize->add_setting('_company_section2_project_completed_text', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('_company_section2_project_completed_text', array(
        'label'    => __('Project Completed Text', 'crafto'),
        'section'  => 'company_page_settings_section',
        'settings' => '_company_section2_project_completed_text',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('_company_section2_project_completed_value', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('_company_section2_project_completed_value', array(
        'label'    => __('Project Completed Value', 'crafto'),
        'section'  => 'company_page_settings_section',
        'settings' => '_company_section2_project_completed_value',
        'type'     => 'number',
    ));

    // Section 3 Image and Title
    // $wp_customize->add_setting('_company_section3_image', array(
    //     'default'   => '',
    //     'sanitize_callback' => 'esc_url_raw',
    // ));
    // $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, '_company_section3_image', array(
    //     'label'    => __('Section 3 Image', 'crafto'),
    //     'section'  => 'company_page_settings_section',
    //     'settings' => '_company_section3_image',
    // )));

    $wp_customize->add_setting('_company_section3_title', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('_company_section3_title', array(
        'label'    => __('Section 3 Title', 'crafto'),
        'section'  => 'company_page_settings_section',
        'settings' => '_company_section3_title',
        'type'     => 'text',
    ));

    // Section 4 Title, Description, and Image
    $wp_customize->add_setting('_company_section4_title', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('_company_section4_title', array(
        'label'    => __('Section 4 Title', 'crafto'),
        'section'  => 'company_page_settings_section',
        'settings' => '_company_section4_title',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('_company_section4_description', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('_company_section4_description', array(
        'label'    => __('Section 4 Description', 'crafto'),
        'section'  => 'company_page_settings_section',
        'settings' => '_company_section4_description',
        'type'     => 'textarea',
    ));

    $wp_customize->add_setting('_company_section4_image1', array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, '_company_section4_image1', array(
        'label'    => __('Section 4 Image 1', 'crafto'),
        'section'  => 'company_page_settings_section',
        'settings' => '_company_section4_image1',
    )));

    $wp_customize->add_setting('_company_section4_image2', array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, '_company_section4_image2', array(
        'label'    => __('Section 4 Image 2', 'crafto'),
        'section'  => 'company_page_settings_section',
        'settings' => '_company_section4_image2',
    )));

    // Section 4 Title, Description, and Image
    $wp_customize->add_setting('_company_section5_title', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('_company_section5_title', array(
        'label'    => __('Section 5 Title', 'crafto'),
        'section'  => 'company_page_settings_section',
        'settings' => '_company_section5_title',
        'type'     => 'text',
    ));

    //Add a Divider (just for spacing)
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'divider_control', array(
        'label'    => __('FAQs', 'crafto'),
        'section'  => 'company_page_settings_section',
        'settings' => array(),
        'type'     => 'hidden', // This creates a space
    )));


    // FAQ Control
    $wp_customize->add_setting('_company_faq_items', array(
        'default'   => json_encode([]), // Store as JSON
        'sanitize_callback' => function($value) {
            return wp_json_encode(json_decode($value)); // Sanitize as JSON
        },
    ));
    
    $wp_customize->add_control(new WP_Customize_FAQ_Control($wp_customize, '_company_faq_items', array(
        'label'    => __('FAQs', 'crafto'),
        'section'  => 'company_page_settings_section',
        'settings' => '_company_faq_items',
    )));
}
add_action('customize_register', 'crafto_company_page_settings');

function crafto_service_page_settings( $wp_customize ) {

    // Add section for Service Page Settings
    $wp_customize->add_section('service_page_settings_section', array(
        'title'       => __('Service Page Settings', 'crafto'),
        'priority'    => 20, // Adjust priority to display it in a specific order
        'description' => __('Manage service page content settings.', 'crafto'),
    ));

    // Service Section 1 Main Title
    $wp_customize->add_setting('service_section1_main_title', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('service_section1_main_title', array(
        'label'    => __('Service Section 1 Main Title', 'crafto'),
        'section'  => 'service_page_settings_section',
        'settings' => 'service_section1_main_title',
        'type'     => 'text',
    ));

    // Service Section 1 First Title
    $wp_customize->add_setting('service_section1_first_title', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('service_section1_first_title', array(
        'label'    => __('Service Section 1 First Title', 'crafto'),
        'section'  => 'service_page_settings_section',
        'settings' => 'service_section1_first_title',
        'type'     => 'text',
    ));

    // Service Section 1 First Description
    $wp_customize->add_setting('service_section1_first_description', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('service_section1_first_description', array(
        'label'    => __('Service Section 1 First Description', 'crafto'),
        'section'  => 'service_page_settings_section',
        'settings' => 'service_section1_first_description',
        'type'     => 'textarea',
    ));

    // Service Section 1 First Percentage
    $wp_customize->add_setting('service_section1_first_percentage', array(
        'default'   => '',
        'sanitize_callback' => 'absint', // Use absint for percentage
    ));
    $wp_customize->add_control('service_section1_first_percentage', array(
        'label'    => __('Service Section 1 First Percentage', 'crafto'),
        'section'  => 'service_page_settings_section',
        'settings' => 'service_section1_first_percentage',
        'type'     => 'number',
    ));

    // Service Section 1 Second Title
    $wp_customize->add_setting('service_section1_second_title', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('service_section1_second_title', array(
        'label'    => __('Service Section 1 Second Title', 'crafto'),
        'section'  => 'service_page_settings_section',
        'settings' => 'service_section1_second_title',
        'type'     => 'text',
    ));

    // Service Section 1 Second Description
    $wp_customize->add_setting('service_section1_second_description', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('service_section1_second_description', array(
        'label'    => __('Service Section 1 Second Description', 'crafto'),
        'section'  => 'service_page_settings_section',
        'settings' => 'service_section1_second_description',
        'type'     => 'textarea',
    ));

    // Service Section 1 Second Percentage
    $wp_customize->add_setting('service_section1_second_percentage', array(
        'default'   => '',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('service_section1_second_percentage', array(
        'label'    => __('Service Section 1 Second Percentage', 'crafto'),
        'section'  => 'service_page_settings_section',
        'settings' => 'service_section1_second_percentage',
        'type'     => 'number',
    ));

    // Service Section 2 Title
    $wp_customize->add_setting('service_section2_title', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('service_section2_title', array(
        'label'    => __('Service Section 2 Title', 'crafto'),
        'section'  => 'service_page_settings_section',
        'settings' => 'service_section2_title',
        'type'     => 'text',
    ));

    // Service Section 3 Title 1
    $wp_customize->add_setting('service_section3_title1', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('service_section3_title1', array(
        'label'    => __('Service Section 3 Title 1', 'crafto'),
        'section'  => 'service_page_settings_section',
        'settings' => 'service_section3_title1',
        'type'     => 'text',
    ));

    // Service Section 3 Title 2
    $wp_customize->add_setting('service_section3_title2', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('service_section3_title2', array(
        'label'    => __('Service Section 3 Title 2', 'crafto'),
        'section'  => 'service_page_settings_section',
        'settings' => 'service_section3_title2',
        'type'     => 'text',
    ));

    // Service Section 3 Image
    $wp_customize->add_setting('service_section3_image', array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'service_section3_image', array(
        'label'    => __('Service Section 3 Image', 'crafto'),
        'section'  => 'service_page_settings_section',
        'settings' => 'service_section3_image',
    )));
}

//add_action('customize_register', 'crafto_service_page_settings');


function crafto_theme_scripts() {
    wp_enqueue_style('vendors-styles', get_template_directory_uri() . '/css/vendors.css');
    wp_enqueue_style('icon-styles', get_template_directory_uri() . '/css/icon.min.css');
    wp_enqueue_style('main-styles', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('responsive-styles', get_template_directory_uri() . '/css/responsive.css');
    wp_enqueue_style('accounting-styles', get_template_directory_uri() . '/css/accounting/accounting.css');
    wp_enqueue_script('jquery-scripts', get_template_directory_uri() . '/js/jquery.js', array(), false, true);
    wp_enqueue_script('vendors-scripts', get_template_directory_uri() . '/js/vendors.min.js', array(), false, true);
    wp_enqueue_script('main-scripts', get_template_directory_uri() . '/js/main.js', array(), false, true);


    if (is_page('contact')) {
        wp_enqueue_script('contact-page-scripts', 'https://maps.googleapis.com/maps/api/js?key='.get_theme_mod('map_api_key').'&callback=initMap', array(), false, true);
    }
}
add_action('wp_enqueue_scripts', 'crafto_theme_scripts');

function get_custom_logo_url($custom_logo_type) {
    // Retrieve the custom logo ID from the customizer settings
    $custom_logo_id = get_theme_mod($custom_logo_type);
    if ($custom_logo_id) {
        // Get the image URL
        $image = wp_get_attachment_image_src($custom_logo_id, 'full');
        return !empty($image[0]) ? $image[0] : '';
    }
    return '';
}

// Register meta boxes for custom fields
function custom_page_meta_boxes() {
    add_meta_box(
        'custom_page_meta',           // Meta box ID
        'Custom Page Fields',         // Meta box title
        'custom_page_meta_box_callback', // Callback function
        'page',                       // Post type (for pages)
        'normal',                     // Context
        'high'                        // Priority
    );
}
add_action('add_meta_boxes', 'custom_page_meta_boxes');

// Meta box callback to display the fields
function custom_page_meta_box_callback($post) {
    // Add nonce for security
    wp_nonce_field('save_custom_page_meta', 'custom_page_meta_nonce');

    // Retrieve existing field values (if any)
    $banner_text_1 = get_post_meta($post->ID, '_banner_text_1', true);
    $banner_text_2 = get_post_meta($post->ID, '_banner_text_2', true);
    $banner_image_url = get_post_meta($post->ID, '_banner_image_url', true);

    // Custom Textbox 1
    echo '<p><label for="banner_text_1">Custom Text 1:</label></p>';
    echo '<input type="text" id="banner_text_1" name="banner_text_1" value="' . esc_attr($banner_text_1) . '" size="50" />';

    // Custom Textbox 2
    echo '<p><label for="banner_text_2">Custom Text 2:</label></p>';
    echo '<input type="text" id="banner_text_2" name="banner_text_2" value="' . esc_attr($banner_text_2) . '" size="50" />';

    // Custom Image Field
    echo '<p><label for="banner_image_url">Custom Image:</label></p>';
    echo '<div>';
    if ($banner_image_url) {
        echo '<img src="' . esc_url($banner_image_url) . '" style="max-width: 150px; display: block;" />';
    }
    echo '<input type="hidden" id="banner_image_url" name="banner_image_url" value="' . esc_url($banner_image_url) . '" />';
    echo '<button type="button" class="button" id="upload_image_button">Upload Image</button>';
    echo '<button type="button" class="button" id="remove_image_button" style="' . ($banner_image_url ? '' : 'display:none;') . '">Remove Image</button>';
    echo '</div>';
}

// Save the custom fields data
function save_custom_page_meta($post_id) {
    // Verify nonce for security
    if (!isset($_POST['custom_page_meta_nonce']) || !wp_verify_nonce($_POST['custom_page_meta_nonce'], 'save_custom_page_meta')) {
        return;
    }

    // Check if the user has permission to save the data
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Save custom text 1
    if (isset($_POST['banner_text_1'])) {
        update_post_meta($post_id, '_banner_text_1', sanitize_text_field($_POST['banner_text_1']));
    }

    // Save custom text 2
    if (isset($_POST['banner_text_2'])) {
        update_post_meta($post_id, '_banner_text_2', sanitize_text_field($_POST['banner_text_2']));
    }

    // Save custom image URL
    if (isset($_POST['banner_image_url'])) {
        update_post_meta($post_id, '_banner_image_url', esc_url_raw($_POST['banner_image_url']));
    }
}
add_action('save_post', 'save_custom_page_meta');

// Enqueue the media uploader and custom script
function custom_meta_box_scripts() {
    wp_enqueue_media();
    wp_enqueue_script('meta-box-image-upload', get_template_directory_uri() . '/js/meta-box-image-upload.js', array('jquery'), null, true);
}
add_action('admin_enqueue_scripts', 'custom_meta_box_scripts');



// Function to create a custom post type 'Accountant consultants'
function create_accountantconsultant_post_type() {
    $labels = array(
        'name'                  => _x( 'Accountant consultants', 'Post Type General Name', 'textdomain' ),
        'singular_name'         => _x( 'Accountant consultant', 'Post Type Singular Name', 'textdomain' ),
        'menu_name'             => __( 'Accountant consultants', 'textdomain' ),
        'name_admin_bar'        => __( 'Accountant consultant', 'textdomain' ),
        'archives'              => __( 'Accountant consultant Archives', 'textdomain' ),
        'attributes'            => __( 'Accountant consultant Attributes', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent accountant consultant:', 'textdomain' ),
        'all_items'             => __( 'All accountant consultants', 'textdomain' ),
        'add_new_item'          => __( 'Add New accountant consultant', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'new_item'              => __( 'New accountant consultant', 'textdomain' ),
        'edit_item'             => __( 'Edit accountant consultant', 'textdomain' ),
        'update_item'           => __( 'Update accountant consultant', 'textdomain' ),
        'view_item'             => __( 'View accountant consultant', 'textdomain' ),
        'view_items'            => __( 'View accountant consultants', 'textdomain' ),
        'search_items'          => __( 'Search accountant consultant', 'textdomain' ),
        'not_found'             => __( 'Not found', 'textdomain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'textdomain' ),
        'featured_image'        => __( 'Featured Image', 'textdomain' ),
        'set_featured_image'    => __( 'Set featured image', 'textdomain' ),
        'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
        'use_featured_image'    => __( 'Use as featured image', 'textdomain' ),
        'insert_into_item'      => __( 'Insert into accountant consultant', 'textdomain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this accountant consultant', 'textdomain' ),
        'items_list'            => __( 'Accountant consultants list', 'textdomain' ),
        'items_list_navigation' => __( 'Accountant consultants list navigation', 'textdomain' ),
        'filter_items_list'     => __( 'Filter accountant consultants list', 'textdomain' ),
    );
    $args = array(
        'label'                 => __( 'Accountant consultant', 'textdomain' ),
        'description'           => __( 'Post type for accountant consultants', 'textdomain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
        'taxonomies'            => array(),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => false,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-welcome-learn-more',  // Dashicon for the menu
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,  
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type('accountantconsultant', $args );
}

// Hook into the 'init' action
add_action( 'init', 'create_accountantconsultant_post_type', 0 );

// Register meta boxes for custom fields
function custom_accountant_consultant_page_meta_boxes() {
    add_meta_box(
        'custom_accountant_consultant_page_meta',           // Meta box ID
        'Custom Accountant Consultant Page Fields',         // Meta box title
        'custom_accountant_consultant_page_meta_box_callback', // Callback function
        'accountantconsultant',         // Post type (for pages)
        'normal',                     // Context
        'high'                        // Priority
    );
}
add_action('add_meta_boxes', 'custom_accountant_consultant_page_meta_boxes');

// Meta box callback to display the fields
function custom_accountant_consultant_page_meta_box_callback($post) {
    // Add nonce for security
    wp_nonce_field('save_custom_accountant_consultant_page_meta', 'custom_accountant_consultant_page_meta_nonce');

    // Retrieve existing field values (if any)
    $icon_name = get_post_meta($post->ID, '_icon_name', true);

    // Custom Textbox 1
    echo '<p><label for="icon_name">Icon Name:</label></p>';
    echo '<input type="text" id="icon_name" name="icon_name" value="' . esc_attr($icon_name) . '" size="50" />';

    echo '</div>';
}

// Save the custom fields data
function save_custom_accountant_consultant_page_meta($post_id) {
    // Verify nonce for security
    if (!isset($_POST['custom_accountant_consultant_page_meta_nonce']) || !wp_verify_nonce($_POST['custom_accountant_consultant_page_meta_nonce'], 'save_custom_accountant_consultant_page_meta')) {
        return;
    }

    // Check if the user has permission to save the data
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Save custom text 1
    if (isset($_POST['icon_name'])) {
        update_post_meta($post_id, '_icon_name', sanitize_text_field($_POST['icon_name']));
    }
}
add_action('save_post', 'save_custom_accountant_consultant_page_meta');

// Function to create a custom post type 'Trusted companies'
function create_trustedcompanies_post_type() {
    $labels = array(
        'name'                  => _x( 'Trusted companies', 'Post Type General Name', 'textdomain' ),
        'singular_name'         => _x( 'Trusted company', 'Post Type Singular Name', 'textdomain' ),
        'menu_name'             => __( 'Trusted companies', 'textdomain' ),
        'name_admin_bar'        => __( 'Trusted company', 'textdomain' ),
        'archives'              => __( 'Trusted company Archives', 'textdomain' ),
        'attributes'            => __( 'Trusted company Attributes', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent trusted company:', 'textdomain' ),
        'all_items'             => __( 'All trusted companies', 'textdomain' ),
        'add_new_item'          => __( 'Add New trusted company', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'new_item'              => __( 'New trusted company', 'textdomain' ),
        'edit_item'             => __( 'Edit trusted company', 'textdomain' ),
        'update_item'           => __( 'Update trusted company', 'textdomain' ),
        'view_item'             => __( 'View trusted company', 'textdomain' ),
        'view_items'            => __( 'View trusted companies', 'textdomain' ),
        'search_items'          => __( 'Search trusted company', 'textdomain' ),
        'not_found'             => __( 'Not found', 'textdomain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'textdomain' ),
        'featured_image'        => __( 'Featured Image', 'textdomain' ),
        'set_featured_image'    => __( 'Set featured image', 'textdomain' ),
        'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
        'use_featured_image'    => __( 'Use as featured image', 'textdomain' ),
        'insert_into_item'      => __( 'Insert into trusted company', 'textdomain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this trusted company', 'textdomain' ),
        'items_list'            => __( 'Trusted companies list', 'textdomain' ),
        'items_list_navigation' => __( 'Trusted companies list navigation', 'textdomain' ),
        'filter_items_list'     => __( 'Filter trusted companies list', 'textdomain' ),
    );
    $args = array(
        'label'                 => __( 'Trusted company', 'textdomain' ),
        'description'           => __( 'Post type for trusted companies', 'textdomain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
        'taxonomies'            => array(),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => false,
        'menu_position'         => 4,
        'menu_icon'             => 'dashicons-admin-site',  // Dashicon for the menu
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,  
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type('trustedcompanies', $args );
}

// Hook into the 'init' action
add_action( 'init', 'create_trustedcompanies_post_type', 0 );

// Function to create a custom post type 'Company sliders'
function create_companysliders_post_type() {
    $labels = array(
        'name'                  => _x( 'Company sliders', 'Post Type General Name', 'textdomain' ),
        'singular_name'         => _x( 'Company slider', 'Post Type Singular Name', 'textdomain' ),
        'menu_name'             => __( 'Company sliders', 'textdomain' ),
        'name_admin_bar'        => __( 'Company slider', 'textdomain' ),
        'archives'              => __( 'Company slider Archives', 'textdomain' ),
        'attributes'            => __( 'Company slider Attributes', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent company slider:', 'textdomain' ),
        'all_items'             => __( 'All Company sliders', 'textdomain' ),
        'add_new_item'          => __( 'Add New company slider', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'new_item'              => __( 'New company slider', 'textdomain' ),
        'edit_item'             => __( 'Edit company slider', 'textdomain' ),
        'update_item'           => __( 'Update company slider', 'textdomain' ),
        'view_item'             => __( 'View company slider', 'textdomain' ),
        'view_items'            => __( 'View Company sliders', 'textdomain' ),
        'search_items'          => __( 'Search company slider', 'textdomain' ),
        'not_found'             => __( 'Not found', 'textdomain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'textdomain' ),
        'featured_image'        => __( 'Featured Image', 'textdomain' ),
        'set_featured_image'    => __( 'Set featured image', 'textdomain' ),
        'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
        'use_featured_image'    => __( 'Use as featured image', 'textdomain' ),
        'insert_into_item'      => __( 'Insert into company slider', 'textdomain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this company slider', 'textdomain' ),
        'items_list'            => __( 'Company sliders list', 'textdomain' ),
        'items_list_navigation' => __( 'Company sliders list navigation', 'textdomain' ),
        'filter_items_list'     => __( 'Filter Company sliders list', 'textdomain' ),
    );
    $args = array(
        'label'                 => __( 'Company sliders', 'textdomain' ),
        'description'           => __( 'Post type for Company sliders', 'textdomain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
        'taxonomies'            => array(),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => false,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-admin-site-alt',  // Dashicon for the menu
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,  
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type('companysliders', $args );
}

// Hook into the 'init' action
add_action( 'init', 'create_companysliders_post_type', 0 );

// Register meta boxes for companysliders fields
function custom_company_slider_page_meta_boxes() {
    add_meta_box(
        'custom_company_slider_page_meta',           // Meta box ID
        'Custom Company Slider Page Fields',         // Meta box title
        'custom_company_slider_page_meta_box_callback', // Callback function
        'companysliders',         // Post type (for pages)
        'normal',                     // Context
        'high'                        // Priority
    );
}
add_action('add_meta_boxes', 'custom_company_slider_page_meta_boxes');

// Meta box callback to display the fields
function custom_company_slider_page_meta_box_callback($post) {
    // Add nonce for security
    wp_nonce_field('save_custom_company_slider_page_meta', 'custom_company_slider_page_meta_nonce');

    // Retrieve existing field values (if any)
    $url = get_post_meta($post->ID, '_url', true);

    // Custom Textbox 1
    echo '<p><label for="url">URL:</label></p>';
    echo '<input type="text" id="url" name="url" value="' . esc_attr($url) . '" size="50" />';

    echo '</div>';
}

// Save the custom companysliders fields data
function save_custom_company_slider_page_meta($post_id) {
    // Verify nonce for security
    if (!isset($_POST['custom_company_slider_page_meta_nonce']) || !wp_verify_nonce($_POST['custom_company_slider_page_meta_nonce'], 'save_custom_company_slider_page_meta')) {
        return;
    }

    // Check if the user has permission to save the data
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Save custom text 1
    if (isset($_POST['url'])) {
        update_post_meta($post_id, '_url', sanitize_text_field($_POST['url']));
    }
}
add_action('save_post', 'save_custom_company_slider_page_meta');

// Function to create a custom post type 'Client reviews'
function create_clientreviews_post_type() {
    $labels = array(
        'name'                  => _x( 'Client reviews', 'Post Type General Name', 'textdomain' ),
        'singular_name'         => _x( 'Client review', 'Post Type Singular Name', 'textdomain' ),
        'menu_name'             => __( 'Client reviews', 'textdomain' ),
        'name_admin_bar'        => __( 'Client review', 'textdomain' ),
        'archives'              => __( 'Client review Archives', 'textdomain' ),
        'attributes'            => __( 'Client review Attributes', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent client review:', 'textdomain' ),
        'all_items'             => __( 'All Client reviews', 'textdomain' ),
        'add_new_item'          => __( 'Add New client review', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'new_item'              => __( 'New client review', 'textdomain' ),
        'edit_item'             => __( 'Edit client review', 'textdomain' ),
        'update_item'           => __( 'Update client review', 'textdomain' ),
        'view_item'             => __( 'View client review', 'textdomain' ),
        'view_items'            => __( 'View Client reviews', 'textdomain' ),
        'search_items'          => __( 'Search client review', 'textdomain' ),
        'not_found'             => __( 'Not found', 'textdomain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'textdomain' ),
        'featured_image'        => __( 'Featured Image', 'textdomain' ),
        'set_featured_image'    => __( 'Set featured image', 'textdomain' ),
        'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
        'use_featured_image'    => __( 'Use as featured image', 'textdomain' ),
        'insert_into_item'      => __( 'Insert into client review', 'textdomain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this client review', 'textdomain' ),
        'items_list'            => __( 'Client reviews list', 'textdomain' ),
        'items_list_navigation' => __( 'Client reviews list navigation', 'textdomain' ),
        'filter_items_list'     => __( 'Filter Client reviews list', 'textdomain' ),
    );
    $args = array(
        'label'                 => __( 'Client reviews', 'textdomain' ),
        'description'           => __( 'Post type for Client reviews', 'textdomain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
        'taxonomies'            => array(),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => false,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-star-filled',  // Dashicon for the menu
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,  
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type('clientreviews', $args );
}

// Hook into the 'init' action
add_action( 'init', 'create_clientreviews_post_type', 0 );

// Register meta boxes for Client reviews fields
function custom_client_review_page_meta_boxes() {
    add_meta_box(
        'custom_client_review_page_meta',           // Meta box ID
        'Custom Client Review Page Fields',         // Meta box title
        'custom_client_review_page_meta_box_callback', // Callback function
        'clientreviews',         // Post type (for pages)
        'normal',                     // Context
        'high'                        // Priority
    );
}
add_action('add_meta_boxes', 'custom_client_review_page_meta_boxes');

// Meta box callback to display the fields
function custom_client_review_page_meta_box_callback($post) {
    // Add nonce for security
    wp_nonce_field('save_custom_client_review_page_meta', 'custom_client_review_page_meta_nonce');

    // Retrieve existing field values (if any)
    $client_position = get_post_meta($post->ID, '_client_position', true);

    // Custom Textbox 1
    echo '<p><label for="client_position">Client Position:</label></p>';
    echo '<input type="text" id="client_position" name="client_position" value="' . esc_attr($client_position) . '" size="50" />';

    echo '</div>';
}

// Save the custom fields data
function save_custom_client_review_page_meta($post_id) {
    // Verify nonce for security
    if (!isset($_POST['custom_client_review_page_meta_nonce']) || !wp_verify_nonce($_POST['custom_client_review_page_meta_nonce'], 'save_custom_client_review_page_meta')) {
        return;
    }

    // Check if the user has permission to save the data
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Save custom text 1
    if (isset($_POST['client_position'])) {
        update_post_meta($post_id, '_client_position', sanitize_text_field($_POST['client_position']));
    }
}
add_action('save_post', 'save_custom_client_review_page_meta');

// Function to create a custom post type 'Company services'
function create_companyservices_post_type() {
    $labels = array(
        'name'                  => _x( 'Company services', 'Post Type General Name', 'textdomain' ),
        'singular_name'         => _x( 'Company service', 'Post Type Singular Name', 'textdomain' ),
        'menu_name'             => __( 'Company services', 'textdomain' ),
        'name_admin_bar'        => __( 'Company service', 'textdomain' ),
        'archives'              => __( 'Compnay service Archives', 'textdomain' ),
        'attributes'            => __( 'Compnay service Attributes', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent company service:', 'textdomain' ),
        'all_items'             => __( 'All compnay services', 'textdomain' ),
        'add_new_item'          => __( 'Add New compnay service', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'new_item'              => __( 'New compnay service', 'textdomain' ),
        'edit_item'             => __( 'Edit compnay service', 'textdomain' ),
        'update_item'           => __( 'Update compnay service', 'textdomain' ),
        'view_item'             => __( 'View compnay service', 'textdomain' ),
        'view_items'            => __( 'View compnay services', 'textdomain' ),
        'search_items'          => __( 'Search compnay service', 'textdomain' ),
        'not_found'             => __( 'Not found', 'textdomain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'textdomain' ),
        'featured_image'        => __( 'Featured Image', 'textdomain' ),
        'set_featured_image'    => __( 'Set featured image', 'textdomain' ),
        'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
        'use_featured_image'    => __( 'Use as featured image', 'textdomain' ),
        'insert_into_item'      => __( 'Insert into compnay service', 'textdomain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this compnay service', 'textdomain' ),
        'items_list'            => __( 'compnay services list', 'textdomain' ),
        'items_list_navigation' => __( 'compnay services list navigation', 'textdomain' ),
        'filter_items_list'     => __( 'Filter compnay services list', 'textdomain' ),
    );
    $args = array(
        'label'                 => __( 'Company services', 'textdomain' ),
        'description'           => __( 'Post type for compnay services', 'textdomain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
        'taxonomies'            => array(),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => false,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-networking',  // Dashicon for the menu
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,  
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type('companyservices', $args );
}

// Hook into the 'init' action
add_action( 'init', 'create_companyservices_post_type', 0 );

// Register meta boxes for Client reviews fields
function custom_compnay_service_page_meta_boxes() {
    add_meta_box(
        'custom_compnay_service_page_meta',           // Meta box ID
        'Custom Company Service Page Fields',         // Meta box title
        'custom_compnay_service_page_meta_box_callback', // Callback function
        'companyservices',         // Post type (for pages)
        'normal',                     // Context
        'high'                        // Priority
    );
}
add_action('add_meta_boxes', 'custom_compnay_service_page_meta_boxes');

// Meta box callback to display the fields
function custom_compnay_service_page_meta_box_callback($post) {
    // Add nonce for security
    wp_nonce_field('save_custom_compnay_service_page_meta', 'custom_compnay_service_page_meta_nonce');

    // Retrieve existing field values (if any)
    $description2 = get_post_meta($post->ID, '_description2', true);
    $completed_project = get_post_meta($post->ID, '_completed_project', true);
    $compnay_service_url = get_post_meta($post->ID, '_compnay_service_url', true);

    // Custom Textbox 1
    echo '<p><label for="description2">Description 2:</label></p>';
    echo '<input type="text" id="description2" name="description2" value="' . esc_attr($description2) . '" size="50" />';

    // Custom Textbox 2
    echo '<p><label for="completed_project">How many project completed?:</label></p>';
    echo '<input type="text" id="completed_project" name="completed_project" value="' . esc_attr($completed_project) . '" size="50" />';

    // Custom Textbox 2
    echo '<p><label for="compnay_service_url">URL:</label></p>';
    echo '<input type="text" id="compnay_service_url" name="compnay_service_url" value="' . esc_attr($compnay_service_url) . '" size="50" />';

    echo '</div>';
}

// Save the custom fields data
function save_custom_compnay_service_page_meta($post_id) {
    // Verify nonce for security
    if (!isset($_POST['custom_compnay_service_page_meta_nonce']) || !wp_verify_nonce($_POST['custom_compnay_service_page_meta_nonce'], 'save_custom_compnay_service_page_meta')) {
        return;
    }

    // Check if the user has permission to save the data
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Save custom text 1
    if (isset($_POST['description2'])) {
        update_post_meta($post_id, '_description2', sanitize_text_field($_POST['description2']));
    }

     // Save custom text 2
    if (isset($_POST['completed_project'])) {
        update_post_meta($post_id, '_completed_project', sanitize_text_field($_POST['completed_project']));
    }

     // Save custom text 2
    if (isset($_POST['compnay_service_url'])) {
        update_post_meta($post_id, '_compnay_service_url', sanitize_text_field($_POST['compnay_service_url']));
    }
}
add_action('save_post', 'save_custom_compnay_service_page_meta');

// Function to create a custom post type 'news'
function create_newspost_post_type() {
    $labels = array(
        'name'                  => _x( 'News', 'Post Type General Name', 'textdomain' ),
        'singular_name'         => _x( 'News', 'Post Type Singular Name', 'textdomain' ),
        'menu_name'             => __( 'News', 'textdomain' ),
        'name_admin_bar'        => __( 'News', 'textdomain' ),
        'archives'              => __( 'News Archives', 'textdomain' ),
        'attributes'            => __( 'News Attributes', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent news:', 'textdomain' ),
        'all_items'             => __( 'All news', 'textdomain' ),
        'add_new_item'          => __( 'Add New news', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'new_item'              => __( 'New news', 'textdomain' ),
        'edit_item'             => __( 'Edit news', 'textdomain' ),
        'update_item'           => __( 'Update news', 'textdomain' ),
        'view_item'             => __( 'View news', 'textdomain' ),
        'view_items'            => __( 'View news', 'textdomain' ),
        'search_items'          => __( 'Search news', 'textdomain' ),
        'not_found'             => __( 'Not found', 'textdomain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'textdomain' ),
        'featured_image'        => __( 'Featured Image', 'textdomain' ),
        'set_featured_image'    => __( 'Set featured image', 'textdomain' ),
        'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
        'use_featured_image'    => __( 'Use as featured image', 'textdomain' ),
        'insert_into_item'      => __( 'Insert into news', 'textdomain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this news', 'textdomain' ),
        'items_list'            => __( 'News list', 'textdomain' ),
        'items_list_navigation' => __( 'News list navigation', 'textdomain' ),
        'filter_items_list'     => __( 'Filter news list', 'textdomain' ),
    );
    $args = array(
        'label'                 => __( 'News', 'textdomain' ),
        'description'           => __( 'Post type for news', 'textdomain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments', 'revisions'),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-admin-page',  // Dashicon for the menu
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,  
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type('newspost', $args );
}

// Hook into the 'init' action
add_action( 'init', 'create_newspost_post_type', 0 );

// Register meta boxes for News fields
function custom_news_page_meta_boxes() {
    add_meta_box(
        'custom_news_page_meta',           // Meta box ID
        'Custom News Page Fields',         // Meta box title
        'custom_news_page_meta_box_callback', // Callback function
        'newspost',                             // Post type
        'normal',                           // Context
        'high'                              // Priority
    );
}
add_action('add_meta_boxes', 'custom_news_page_meta_boxes');

// Meta box callback to display the fields
function custom_news_page_meta_box_callback($post) {
    // Add nonce for security
    wp_nonce_field('save_custom_news_page_meta', 'custom_news_page_meta_nonce');

    // Retrieve existing field values (if any)
    $description_text = get_post_meta($post->ID, '_description_text', true);
    // $news_main_image = get_post_meta($post->ID, '_news_main_image', true);
    $author_name = get_post_meta($post->ID, '_author_name', true);
    // $author_image = get_post_meta($post->ID, '_author_image', true);
    $author_title = get_post_meta($post->ID, '_author_title', true);
    $author_description = get_post_meta($post->ID, '_author_description', true);

    $main_news_image_url = get_post_meta($post->ID, '_main_news_image_url', true);
    $author_image_url = get_post_meta($post->ID, '_author_image_url', true);

    // Description Text
    echo '<p><label for="description_text">Description:</label></p>';
    echo '<textarea id="description_text" name="description_text" rows="4" cols="50">' . esc_textarea($description_text) . '</textarea>';

     // Main News Image Field
    echo '<p><label for="main_news_image_url">Main News Image:</label></p>';
    echo '<div>';
    if ($main_news_image_url) {
        echo '<img src="' . esc_url($main_news_image_url) . '" style="max-width: 150px; display: block;" />';
    }
    echo '<input type="hidden" id="main_news_image_url" name="main_news_image_url" value="' . esc_url($main_news_image_url) . '" />';
    echo '<button type="button" class="button" id="upload_main_news_image_button">Upload Image</button>';
    echo '<button type="button" class="button" id="remove_main_news_image_button" style="' . ($main_news_image_url ? '' : 'display:none;') . '">Remove Image</button>';
    echo '</div>';

    // Author Image Field
    echo '<p><label for="author_image_url">Author Image:</label></p>';
    echo '<div>';
    if ($author_image_url) {
        echo '<img src="' . esc_url($author_image_url) . '" style="max-width: 150px; display: block;" />';
    }
    echo '<input type="hidden" id="author_image_url" name="author_image_url" value="' . esc_url($author_image_url) . '" />';
    echo '<button type="button" class="button" id="upload_author_image_button">Upload Image</button>';
    echo '<button type="button" class="button" id="remove_author_image_button" style="' . ($author_image_url ? '' : 'display:none;') . '">Remove Image</button>';
    echo '</div>';

    // Author Name
    echo '<p><label for="author_name">Author Name:</label></p>';
    echo '<input type="text" id="author_name" name="author_name" value="' . esc_attr($author_name) . '" size="50" />';

    // Author Title
    echo '<p><label for="author_title">Author Title:</label></p>';
    echo '<input type="text" id="author_title" name="author_title" value="' . esc_attr($author_title) . '" size="50" />';

    // Author Description
    echo '<p><label for="author_description">Author Description:</label></p>';
    echo '<textarea id="author_description" name="author_description" rows="4" cols="50">' . esc_attr($author_description) . '</textarea>';


    echo '</div>';

}

// Save the custom fields data
function save_custom_news_page_meta($post_id) {
    // Verify nonce for security
    if (!isset($_POST['custom_news_page_meta_nonce']) || !wp_verify_nonce($_POST['custom_news_page_meta_nonce'], 'save_custom_news_page_meta')) {
        return;
    }

    // Check if the user has permission to save the data
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Save custom fields
    if (isset($_POST['description_text'])) {
        update_post_meta($post_id, '_description_text', sanitize_textarea_field($_POST['description_text']));
    }

    // Save main news image URL
    if (isset($_POST['main_news_image_url'])) {
        update_post_meta($post_id, '_main_news_image_url', esc_url_raw($_POST['main_news_image_url']));
    }

    // Save author image URL
    if (isset($_POST['author_image_url'])) {
        update_post_meta($post_id, '_author_image_url', esc_url_raw($_POST['author_image_url']));
    }

    if (isset($_POST['author_name'])) {
        update_post_meta($post_id, '_author_name', sanitize_text_field($_POST['author_name']));
    }

    if (isset($_POST['author_title'])) {
        update_post_meta($post_id, '_author_title', sanitize_text_field($_POST['author_title']));
    }
    if (isset($_POST['author_description'])) {
        update_post_meta($post_id, '_author_description', sanitize_textarea_field($_POST['author_description']));
    }
}
add_action('save_post', 'save_custom_news_page_meta');

// Function to create a custom post type 'Services'
function create_services_post_type() {
    $labels = array(
        'name'                  => _x( 'Services', 'Post Type General Name', 'textdomain' ),
        'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'textdomain' ),
        'menu_name'             => __( 'Services', 'textdomain' ),
        'name_admin_bar'        => __( 'Service', 'textdomain' ),
        'archives'              => __( 'Compnay service Archives', 'textdomain' ),
        'attributes'            => __( 'Compnay service Attributes', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent service:', 'textdomain' ),
        'all_items'             => __( 'All services', 'textdomain' ),
        'add_new_item'          => __( 'Add New service', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'new_item'              => __( 'New service', 'textdomain' ),
        'edit_item'             => __( 'Edit service', 'textdomain' ),
        'update_item'           => __( 'Update service', 'textdomain' ),
        'view_item'             => __( 'View service', 'textdomain' ),
        'view_items'            => __( 'View services', 'textdomain' ),
        'search_items'          => __( 'Search service', 'textdomain' ),
        'not_found'             => __( 'Not found', 'textdomain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'textdomain' ),
        'featured_image'        => __( 'Featured Image', 'textdomain' ),
        'set_featured_image'    => __( 'Set featured image', 'textdomain' ),
        'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
        'use_featured_image'    => __( 'Use as featured image', 'textdomain' ),
        'insert_into_item'      => __( 'Insert into service', 'textdomain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this service', 'textdomain' ),
        'items_list'            => __( 'services list', 'textdomain' ),
        'items_list_navigation' => __( 'services list navigation', 'textdomain' ),
        'filter_items_list'     => __( 'Filter services list', 'textdomain' ),
    );
    $args = array(
        'label'                 => __( 'Services', 'textdomain' ),
        'description'           => __( 'Post type for services', 'textdomain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
        'taxonomies'            => array(),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-admin-multisite',  // Dashicon for the menu
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,  
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type('services', $args );
}

// Hook into the 'init' action
add_action( 'init', 'create_services_post_type', 0 );

// Register meta boxes for Services fields
function custom_services_page_meta_boxes() {
    add_meta_box(
        'custom_services_page_meta',           // Meta box ID
        'Custom Services Fields',              // Meta box title
        'custom_services_page_meta_box_callback', // Callback function
        'services',                             // Post type
        'normal',                               // Context
        'high'                                  // Priority
    );
}
add_action('add_meta_boxes', 'custom_services_page_meta_boxes');

// Meta box callback to display the fields
function custom_services_page_meta_box_callback($post) {
    // Add nonce for security
    wp_nonce_field('save_custom_services_page_meta', 'custom_services_page_meta_nonce');

    // Retrieve existing field values (if any)
    $banner_text_1 = get_post_meta($post->ID, '_banner_text_1', true);
    $banner_text_2 = get_post_meta($post->ID, '_banner_text_2', true);
    $banner_image = get_post_meta($post->ID, '_banner_image', true);
    
    $service_image1 = get_post_meta($post->ID, '_service_image1', true);
    $service_image2 = get_post_meta($post->ID, '_service_image2', true);
    $service_image3 = get_post_meta($post->ID, '_service_image3', true);

    $benifits_section_text = get_post_meta($post->ID, '_benifits_section_text', true);

    $benefits = get_post_meta($post->ID, '_benefits', true) ?: [];

    if (!is_array($benefits)) {
        $benefits = [];
    }

    // Display existing benefits
    echo '<div id="benefit-fields">';
    foreach ($benefits as $index => $benefit) {
        $title = isset($benefit['title']) ? esc_attr($benefit['title']) : '';
        $description = isset($benefit['description']) ? esc_textarea($benefit['description']) : '';
        echo '<div class="benefit-field">';
        echo '<h4>Benefit ' . ($index + 1) . '</h4>';
        echo '<p><label for="benefit_title_' . $index . '">Benefit Title:</label></p>';
        echo '<input type="text" id="benefit_title_' . $index . '" name="benefits[' . $index . '][title]" value="' . $title . '" size="50" />';

        echo '<p><label for="benefit_description_' . $index . '">Benefit Description:</label></p>';
        echo '<textarea id="benefit_description_' . $index . '" name="benefits[' . $index . '][description]" rows="4" cols="50">' . $description . '</textarea>';
        echo '<button type="button" class="button remove-benefit">Remove Benefit</button>';
        echo '</div>';
    }
    echo '</div>';

    // Add Benefit button
    echo '<button type="button" class="button" id="add-benefit">Add Benefit</button>';

    // Service Title and Description fields
    for ($i = 1; $i <= 4; $i++) {
        $title = get_post_meta($post->ID, '_service_title' . $i, true);
        $description = get_post_meta($post->ID, '_service_description' . $i, true);
        echo '<p><label for="service_title' . $i . '">Service Title ' . $i . ':</label></p>';
        echo '<input type="text" id="service_title' . $i . '" name="service_title' . $i . '" value="' . esc_attr($title) . '" size="50" />';

        echo '<p><label for="service_description' . $i . '">Service Description ' . $i . ':</label></p>';
        echo '<textarea id="service_description' . $i . '" name="service_description' . $i . '" rows="4" cols="50">' . esc_textarea($description) . '</textarea>';
    }

    // Benifits section Text
    echo '<p><label for="benifits_section_text">Benefits Section Title Text:</label></p>';
    echo '<input type="text" id="benifits_section_text" name="benifits_section_text" value="' . esc_attr($benifits_section_text) . '" size="50" />';

    // Service Images (with media uploader)
    for ($i = 1; $i <= 3; $i++) {
        $image_url = get_post_meta($post->ID, '_service_image' . $i, true);
        echo '<p><label for="service_image' . $i . '">Service Image ' . $i . ':</label></p>';
        echo '<div>';
        if ($image_url) {
            echo '<img src="' . esc_url($image_url) . '" style="max-width: 150px; display: block;" />';
        }
        echo '<input type="hidden" id="service_image' . $i . '" name="service_image' . $i . '" value="' . esc_url($image_url) . '" />';
        echo '<button type="button" class="button" id="upload_service_image' . $i . '_button">Upload Image</button>';
        echo '<button type="button" class="button" id="remove_service_image' . $i . '_button" style="' . ($image_url ? '' : 'display:none;') . '">Remove Image</button>';
        echo '</div>';
    }

    // Banner Text and Banner Image fields
    echo '<h3>Banner Settings</h3>';
    
    // Banner Text 1
    echo '<p><label for="banner_text_1">Banner Text 1:</label></p>';
    echo '<input type="text" id="banner_text_1" name="banner_text_1" value="' . esc_attr($banner_text_1) . '" size="50" />';
    
    // Banner Text 2
    echo '<p><label for="banner_text_2">Banner Text 2:</label></p>';
    echo '<input type="text" id="banner_text_2" name="banner_text_2" value="' . esc_attr($banner_text_2) . '" size="50" />';

    // Banner Image (with media uploader)
    echo '<p><label for="banner_image">Banner Image:</label></p>';
    echo '<div>';
    if ($banner_image) {
        echo '<img src="' . esc_url($banner_image) . '" style="max-width: 150px; display: block;" />';
    }
    echo '<input type="hidden" id="banner_image" name="banner_image" value="' . esc_url($banner_image) . '" />';
    echo '<button type="button" class="button" id="upload_banner_image_button">Upload Image</button>';
    echo '<button type="button" class="button" id="remove_banner_image_button" style="' . ($banner_image ? '' : 'display:none;') . '">Remove Image</button>';
    echo '</div>';
}

// Save the custom fields data for services and banner
function save_custom_services_page_meta($post_id) {
    // Verify nonce for security
    if (!isset($_POST['custom_services_page_meta_nonce']) || !wp_verify_nonce($_POST['custom_services_page_meta_nonce'], 'save_custom_services_page_meta')) {
        return;
    }

    // Check if the user has permission to save the data
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Save title, description, and images for services
    for ($i = 1; $i <= 4; $i++) {
        if (isset($_POST['service_title' . $i])) {
            update_post_meta($post_id, '_service_title' . $i, sanitize_text_field($_POST['service_title' . $i]));
        }
        if (isset($_POST['service_description' . $i])) {
            update_post_meta($post_id, '_service_description' . $i, sanitize_textarea_field($_POST['service_description' . $i]));
        }
    }

    for ($i = 1; $i <= 3; $i++) {
        if (isset($_POST['service_image' . $i])) {
            update_post_meta($post_id, '_service_image' . $i, esc_url_raw($_POST['service_image' . $i]));
        }
    }

    // Save benifits_section_text

    if (isset($_POST['benifits_section_text'])) {
        update_post_meta($post_id, '_benifits_section_text', sanitize_text_field($_POST['benifits_section_text']));
    }
    

    // Save banner text and image
    if (isset($_POST['banner_text_1'])) {
        update_post_meta($post_id, '_banner_text_1', sanitize_text_field($_POST['banner_text_1']));
    }
    
    if (isset($_POST['banner_text_2'])) {
        update_post_meta($post_id, '_banner_text_2', sanitize_text_field($_POST['banner_text_2']));
    }

    if (isset($_POST['banner_image'])) {
        update_post_meta($post_id, '_banner_image', esc_url_raw($_POST['banner_image']));
    }

    // Sanitize and save the benefits
    if (isset($_POST['benefits']) && is_array($_POST['benefits'])) {
        update_post_meta($post_id, '_benefits', $_POST['benefits']);
    } else {
        // If no benefits are set, delete the meta
        delete_post_meta($post_id, '_benefits');
    }
}
add_action('save_post', 'save_custom_services_page_meta');

// Enqueue custom script for benefits
function enqueue_custom_benefits_script() {

     wp_enqueue_script('custom-benefits', get_template_directory_uri() . '/js/custom-benefits.js', array('jquery'), null, true);
}
add_action('admin_enqueue_scripts', 'enqueue_custom_benefits_script');



function create_home_page_data_menu() {
    // Add the main menu item
    add_menu_page(
        'Home Page', // Page title
        'Home Page', // Menu title
        'manage_options', // Capability
        'edit.php?post_type=accountantconsultant', // Menu slug
        '', // Function
        'dashicons-art', // Icon
        6 // Position
    );

    add_submenu_page(
        'edit.php?post_type=accountantconsultant', // Parent slug
        'Accountant Consultants', // Page title
        'Accountant Consultants', // Menu title
        'manage_options', // Capability
        'edit.php?post_type=accountantconsultant' // Menu slug
    );
    
    add_submenu_page(
        'edit.php?post_type=accountantconsultant', // Parent slug
        'Trusted companies', // Page title
        'Trusted companies', // Menu title
        'manage_options', // Capability
        'edit.php?post_type=trustedcompanies' // Menu slug
    );

    add_submenu_page(
        'edit.php?post_type=accountantconsultant', // Parent slug
        'Company Sliders', // Page title
        'Company Sliders', // Menu title
        'manage_options', // Capability
        'edit.php?post_type=companysliders' // Menu slug
    );

    add_submenu_page(
        'edit.php?post_type=accountantconsultant', // Parent slug
        'Client reviews', // Page title
        'Client reviews', // Menu title
        'manage_options', // Capability
        'edit.php?post_type=clientreviews' // Menu slug
    );

    add_submenu_page(
        'edit.php?post_type=accountantconsultant', // Parent slug
        'Company services', // Page title
        'Company services', // Menu title
        'manage_options', // Capability
        'edit.php?post_type=companyservices' // Menu slug
    );
    
}
add_action('admin_menu', 'create_home_page_data_menu');

// Function to create a custom post type 'Teams'
function create_teams_post_type() {
    $labels = array(
        'name'                  => _x( 'Teams', 'Post Type General Name', 'textdomain' ),
        'singular_name'         => _x( 'Team', 'Post Type Singular Name', 'textdomain' ),
        'menu_name'             => __( 'Teams', 'textdomain' ),
        'name_admin_bar'        => __( 'Team', 'textdomain' ),
        'archives'              => __( 'Team Archives', 'textdomain' ),
        'attributes'            => __( 'Team Attributes', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Team:', 'textdomain' ),
        'all_items'             => __( 'All Teams', 'textdomain' ),
        'add_new_item'          => __( 'Add New Team', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'new_item'              => __( 'New Team', 'textdomain' ),
        'edit_item'             => __( 'Edit Team', 'textdomain' ),
        'update_item'           => __( 'Update Team', 'textdomain' ),
        'view_item'             => __( 'View Team', 'textdomain' ),
        'view_items'            => __( 'View Teams', 'textdomain' ),
        'search_items'          => __( 'Search Team', 'textdomain' ),
        'not_found'             => __( 'Not found', 'textdomain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'textdomain' ),
        'featured_image'        => __( 'Featured Image', 'textdomain' ),
        'set_featured_image'    => __( 'Set featured image', 'textdomain' ),
        'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
        'use_featured_image'    => __( 'Use as featured image', 'textdomain' ),
        'insert_into_item'      => __( 'Insert into Team', 'textdomain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Team', 'textdomain' ),
        'items_list'            => __( 'Teams list', 'textdomain' ),
        'items_list_navigation' => __( 'Teams list navigation', 'textdomain' ),
        'filter_items_list'     => __( 'Filter Teams list', 'textdomain' ),
    );
    $args = array(
        'label'                 => __( 'Teams', 'textdomain' ),
        'description'           => __( 'Post type for Teams', 'textdomain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'            => array(),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-groups',  // Dashicon for the menu
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,  
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type('teams', $args );
}

// Hook into the 'init' action
add_action( 'init', 'create_teams_post_type', 0 );

// Register meta boxes for Team fields
function custom_team_meta_boxes() {
    add_meta_box(
        'custom_team_meta',                       // Meta box ID
        'Custom Team Fields',                     // Meta box title
        'custom_team_meta_box_callback',         // Callback function
        'teams',                                  // Post type (for teams)
        'normal',                                 // Context
        'high'                                    // Priority
    );
}
add_action('add_meta_boxes', 'custom_team_meta_boxes');

// Meta box callback to display the fields
function custom_team_meta_box_callback($post) {
    // Add nonce for security
    wp_nonce_field('save_custom_team_meta', 'custom_team_meta_nonce');

    // Retrieve existing field values (if any)
    $position_name = get_post_meta($post->ID, '_position_name', true);
    $facebook_url = get_post_meta($post->ID, '_facebook_url', true);
    $instagram_url = get_post_meta($post->ID, '_instagram_url', true);
    $twitter_url = get_post_meta($post->ID, '_twitter_url', true);
    $dribble_url = get_post_meta($post->ID, '_dribble_url', true);

    // Custom Textbox for Position Name
    echo '<p><label for="position_name">Position Name:</label></p>';
    echo '<input type="text" id="position_name" name="position_name" value="' . esc_attr($position_name) . '" size="50" />';

    // Custom Textbox for Facebook URL
    echo '<p><label for="facebook_url">Facebook URL:</label></p>';
    echo '<input type="text" id="facebook_url" name="facebook_url" value="' . esc_attr($facebook_url) . '" size="50" />';

    // Custom Textbox for Instagram URL
    echo '<p><label for="instagram_url">Instagram URL:</label></p>';
    echo '<input type="text" id="instagram_url" name="instagram_url" value="' . esc_attr($instagram_url) . '" size="50" />';

    // Custom Textbox for Twitter URL
    echo '<p><label for="twitter_url">Twitter URL:</label></p>';
    echo '<input type="text" id="twitter_url" name="twitter_url" value="' . esc_attr($twitter_url) . '" size="50" />';

    // Custom Textbox for Dribble URL
    echo '<p><label for="dribble_url">Dribble URL:</label></p>';
    echo '<input type="text" id="dribble_url" name="dribble_url" value="' . esc_attr($dribble_url) . '" size="50" />';
}

// Save the custom fields data
function save_custom_team_meta($post_id) {
    // Verify nonce for security
    if (!isset($_POST['custom_team_meta_nonce']) || !wp_verify_nonce($_POST['custom_team_meta_nonce'], 'save_custom_team_meta')) {
        return;
    }

    // Check if the user has permission to save the data
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Save custom fields
    if (isset($_POST['position_name'])) {
        update_post_meta($post_id, '_position_name', sanitize_text_field($_POST['position_name']));
    }
    if (isset($_POST['facebook_url'])) {
        update_post_meta($post_id, '_facebook_url', esc_url_raw($_POST['facebook_url']));
    }
    if (isset($_POST['instagram_url'])) {
        update_post_meta($post_id, '_instagram_url', esc_url_raw($_POST['instagram_url']));
    }
    if (isset($_POST['twitter_url'])) {
        update_post_meta($post_id, '_twitter_url', esc_url_raw($_POST['twitter_url']));
    }
    if (isset($_POST['dribble_url'])) {
        update_post_meta($post_id, '_dribble_url', esc_url_raw($_POST['dribble_url']));
    }
}
add_action('save_post', 'save_custom_team_meta');

function crafto_contact_page_settings( $wp_customize ) {

    // Add section for Contact Page Settings
    $wp_customize->add_section('contact_page_settings_section', array(
        'title'       => __('Contact Page Settings', 'crafto'),
        'priority'    => 20, // Adjust priority to display it in a specific order
        'description' => __('Manage contact page content settings.', 'crafto'),
    ));

    // Map Api Key
    $wp_customize->add_setting('map_api_key', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('map_api_key', array(
        'label'    => __('Map Api Key', 'crafto'),
        'section'  => 'contact_page_settings_section',
        'settings' => 'map_api_key',
        'type'     => 'text',
    ));

    // Latittude
    $wp_customize->add_setting('contact_map_lat', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('contact_map_lat', array(
        'label'    => __('Latittude', 'crafto'),
        'section'  => 'contact_page_settings_section',
        'settings' => 'contact_map_lat',
        'type'     => 'text',
    ));

    // Longitude
    $wp_customize->add_setting('contact_map_long', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('contact_map_long', array(
        'label'    => __('Longitude', 'crafto'),
        'section'  => 'contact_page_settings_section',
        'settings' => 'contact_map_long',
        'type'     => 'text',
    ));

    // Map Address
    $wp_customize->add_setting('contact_map_address', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('contact_map_address', array(
        'label'    => __('Map Address', 'crafto'),
        'section'  => 'contact_page_settings_section',
        'settings' => 'contact_map_address',
        'type'     => 'text',
    ));

    // Google Maps CID
    $wp_customize->add_setting('contact_map_cid', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('contact_map_cid', array(
        'label'    => __('Google Maps CID', 'crafto'),
        'section'  => 'contact_page_settings_section',
        'settings' => 'contact_map_cid',
        'type'     => 'text',
    ));

     // Contact Title
    $wp_customize->add_setting('contact_title', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('contact_title', array(
        'label'    => __('Contact Title', 'crafto'),
        'section'  => 'contact_page_settings_section',
        'settings' => 'contact_title',
        'type'     => 'text',
    ));

    // Contact Description
    $wp_customize->add_setting('contact_description', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('contact_description', array(
        'label'    => __('Contact Description', 'crafto'),
        'section'  => 'contact_page_settings_section',
        'settings' => 'contact_description',
        'type'     => 'textarea',
    ));

    // Section 1 Email Text
    $wp_customize->add_setting('contact_section1_email_text', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('contact_section1_email_text', array(
        'label'    => __('Section 1 Email Text', 'crafto'),
        'section'  => 'contact_page_settings_section',
        'settings' => 'contact_section1_email_text',
        'type'     => 'text',
    ));

    // Section 1 Email
    $wp_customize->add_setting('contact_section1_email', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('contact_section1_email', array(
        'label'    => __('Section 1 Email', 'crafto'),
        'section'  => 'contact_page_settings_section',
        'settings' => 'contact_section1_email',
        'type'     => 'email',
    ));

    // Address 1 Name
    $wp_customize->add_setting('contact_address1_name', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('contact_address1_name', array(
        'label'    => __('Address 1 Name', 'crafto'),
        'section'  => 'contact_page_settings_section',
        'settings' => 'contact_address1_name',
        'type'     => 'text',
    ));

    // Address 1 Description
    $wp_customize->add_setting('contact_address1_description', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('contact_address1_description', array(
        'label'    => __('Address 1 Description', 'crafto'),
        'section'  => 'contact_page_settings_section',
        'settings' => 'contact_address1_description',
        'type'     => 'textarea',
    ));

    // Address 1 Telephone
    $wp_customize->add_setting('contact_address1_telephone', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('contact_address1_telephone', array(
        'label'    => __('Address 1 Telephone', 'crafto'),
        'section'  => 'contact_page_settings_section',
        'settings' => 'contact_address1_telephone',
        'type'     => 'text',
    ));

    // Address 1 Email
    $wp_customize->add_setting('contact_address1_email', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('contact_address1_email', array(
        'label'    => __('Address 1 Email', 'crafto'),
        'section'  => 'contact_page_settings_section',
        'settings' => 'contact_address1_email',
        'type'     => 'email',
    ));

    // Address 1 Image
    $wp_customize->add_setting('contact_address1_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'contact_address1_image', array(
        'label'    => __('Address 1 Image', 'crafto'),
        'section'  => 'contact_page_settings_section',
        'settings' => 'contact_address1_image',
    )));

    // Address 2 Name
    $wp_customize->add_setting('contact_address2_name', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('contact_address2_name', array(
        'label'    => __('Address 2 Name', 'crafto'),
        'section'  => 'contact_page_settings_section',
        'settings' => 'contact_address2_name',
        'type'     => 'text',
    ));

    // Address 2 Description
    $wp_customize->add_setting('contact_address2_description', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('contact_address2_description', array(
        'label'    => __('Address 2 Description', 'crafto'),
        'section'  => 'contact_page_settings_section',
        'settings' => 'contact_address2_description',
        'type'     => 'textarea',
    ));

    // Address 2 Telephone
    $wp_customize->add_setting('contact_address2_telephone', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('contact_address2_telephone', array(
        'label'    => __('Address 2 Telephone', 'crafto'),
        'section'  => 'contact_page_settings_section',
        'settings' => 'contact_address2_telephone',
        'type'     => 'text',
    ));

    // Address 2 Email
    $wp_customize->add_setting('contact_address2_email', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('contact_address2_email', array(
        'label'    => __('Address 2 Email', 'crafto'),
        'section'  => 'contact_page_settings_section',
        'settings' => 'contact_address2_email',
        'type'     => 'email',
    ));

    // Address 2 Image
    $wp_customize->add_setting('contact_address2_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'contact_address2_image', array(
        'label'    => __('Address 2 Image', 'crafto'),
        'section'  => 'contact_page_settings_section',
        'settings' => 'contact_address2_image',
    )));

    // Contact Form Text
    $wp_customize->add_setting('contact_form_title', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('contact_form_title', array(
        'label'    => __('Contact Form Title', 'crafto'),
        'section'  => 'contact_page_settings_section',
        'settings' => 'contact_form_title',
        'type'     => 'text',
    ));

    // Contact Form Description
    $wp_customize->add_setting('contact_form_description', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('contact_form_description', array(
        'label'    => __('Contact Form Description', 'crafto'),
        'section'  => 'contact_page_settings_section',
        'settings' => 'contact_form_description',
        'type'     => 'textarea',
    ));

    // Contact Form Button Text
    $wp_customize->add_setting('contact_form_save_btn_title', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('contact_form_save_btn_title', array(
        'label'    => __('Contact Form Button Title', 'crafto'),
        'section'  => 'contact_page_settings_section',
        'settings' => 'contact_form_save_btn_title',
        'type'     => 'text',
    ));

    // Social Media Text
    $wp_customize->add_setting('social_media_text', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('social_media_text', array(
        'label'    => __('Social Media Text', 'crafto'),
        'section'  => 'contact_page_settings_section',
        'settings' => 'social_media_text',
        'type'     => 'text',
    ));
}

add_action('customize_register', 'crafto_contact_page_settings');

function crafto_process_page_settings($wp_customize) {

    // Add section for Process Page Settings
    $wp_customize->add_section('process_page_settings_section', array(
        'title'       => __('Process Page Settings', 'crafto'),
        'priority'    => 20, // Adjust priority to display it in a specific order
        'description' => __('Manage process page content settings.', 'crafto'),
    ));

    // Process Section 1 Title
    $wp_customize->add_setting('process_section1_title', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('process_section1_title', array(
        'label'    => __('Process Section 1 Title', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section1_title',
        'type'     => 'text',
    ));

    // Process Section 1 Description
    $wp_customize->add_setting('process_section1_description', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('process_section1_description', array(
        'label'    => __('Process Section 1 Description', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section1_description',
        'type'     => 'textarea',
    ));

    // Process Section 1 Image 1
    $wp_customize->add_setting('process_section1_image1', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'process_section1_image1', array(
        'label'    => __('Process Section 1 Image 1', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section1_image1',
    )));

    // Process Section 1 Help Consultant Text
    $wp_customize->add_setting('process_section1_consultant_text', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('process_section1_consultant_text', array(
        'label'    => __('Process Section 1 Help Consultant Text', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section1_consultant_text',
        'type'     => 'text',
    ));

    // Process Section 1 Image 2
    $wp_customize->add_setting('process_section1_image2', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'process_section1_image2', array(
        'label'    => __('Process Section 1 Image 2', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section1_image2',
    )));

    // Process Section 1 Progress Bar Text 1
    $wp_customize->add_setting('process_section1_progressbar_text1', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('process_section1_progressbar_text1', array(
        'label'    => __('Process Section 1 Progress Bar Text 1', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section1_progressbar_text1',
        'type'     => 'text',
    ));

    // Process Section 1 Progress Bar Value 1
    $wp_customize->add_setting('process_section1_progressbar_value1', array(
        'default'           => '',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('process_section1_progressbar_value1', array(
        'label'    => __('Process Section 1 Progress Bar Value 1', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section1_progressbar_value1',
        'type'     => 'number',
    ));

    // Process Section 1 Progress Bar Text 2
    $wp_customize->add_setting('process_section1_progressbar_text2', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('process_section1_progressbar_text2', array(
        'label'    => __('Process Section 1 Progress Bar Text 2', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section1_progressbar_text2',
        'type'     => 'text',
    ));

    // Process Section 1 Progress Bar Value 2
    $wp_customize->add_setting('process_section1_progressbar_value2', array(
        'default'           => '',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('process_section1_progressbar_value2', array(
        'label'    => __('Process Section 1 Progress Bar Value 2', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section1_progressbar_value2',
        'type'     => 'number',
    ));

    // Process Section 1 Question Text
    $wp_customize->add_setting('process_section1_question_text', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('process_section1_question_text', array(
        'label'    => __('Process Section 1 Question Text', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section1_question_text',
        'type'     => 'text',
    ));

    // Process Section 1 Phone Number
    $wp_customize->add_setting('process_section1_phone_number', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('process_section1_phone_number', array(
        'label'    => __('Process Section 1 Phone Number', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section1_phone_number',
        'type'     => 'text',
    ));

    // Process Section 2 Name 1
    $wp_customize->add_setting('process_section2_name1', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('process_section2_name1', array(
        'label'    => __('Process Section 2 Name 1', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section2_name1',
        'type'     => 'text',
    ));

    // Process Section 2 Description 1
    $wp_customize->add_setting('process_section2_description1', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('process_section2_description1', array(
        'label'    => __('Process Section 2 Description 1', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section2_description1',
        'type'     => 'textarea',
    ));

    // Process Section 2 Icon 1
    $wp_customize->add_setting('process_section2_icon1', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('process_section2_icon1', array(
        'label'    => __('Process Section 2 Icon 1', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section2_icon1',
        'type'     => 'text',
    ));

    // Process Section 2 Name 2
    $wp_customize->add_setting('process_section2_name2', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('process_section2_name2', array(
        'label'    => __('Process Section 2 Name 2', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section2_name2',
        'type'     => 'text',
    ));

    // Process Section 2 Description 2
    $wp_customize->add_setting('process_section2_description2', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('process_section2_description2', array(
        'label'    => __('Process Section 2 Description 2', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section2_description2',
        'type'     => 'textarea',
    ));

    // Process Section 2 Icon 2
    $wp_customize->add_setting('process_section2_icon2', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('process_section2_icon2', array(
        'label'    => __('Process Section 2 Icon 2', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section2_icon2',
        'type'     => 'text',
    ));


    // Process Section 2 Name 3
    $wp_customize->add_setting('process_section2_name3', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('process_section2_name3', array(
        'label'    => __('Process Section 2 Name 3', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section2_name3',
        'type'     => 'text',
    ));

    // Process Section 2 Description 3
    $wp_customize->add_setting('process_section2_description3', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('process_section2_description3', array(
        'label'    => __('Process Section 2 Description 3', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section2_description3',
        'type'     => 'textarea',
    ));

    // Process Section 2 Icon 3
    $wp_customize->add_setting('process_section2_icon3', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('process_section2_icon3', array(
        'label'    => __('Process Section 2 Icon 3', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section2_icon3',
        'type'     => 'text',
    ));

    // Process Section 2 Name 4
    $wp_customize->add_setting('process_section2_name4', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('process_section2_name4', array(
        'label'    => __('Process Section 2 Name 4', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section2_name4',
        'type'     => 'text',
    ));

    // Process Section 2 Description 4
    $wp_customize->add_setting('process_section2_description4', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('process_section2_description4', array(
        'label'    => __('Process Section 2 Description 4', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section2_description4',
        'type'     => 'textarea',
    ));

    // Process Section 2 Icon 4
    $wp_customize->add_setting('process_section2_icon4', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('process_section2_icon4', array(
        'label'    => __('Process Section 2 Icon 4', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section2_icon4',
        'type'     => 'text',
    ));

    // Process Section 2 Name 5
    $wp_customize->add_setting('process_section2_name5', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('process_section2_name5', array(
        'label'    => __('Process Section 2 Name 5', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section2_name5',
        'type'     => 'text',
    ));

    // Process Section 2 Description 5
    $wp_customize->add_setting('process_section2_description5', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('process_section2_description5', array(
        'label'    => __('Process Section 2 Description 5', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section2_description5',
        'type'     => 'textarea',
    ));

    // Process Section 2 Icon 5
    $wp_customize->add_setting('process_section2_icon5', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('process_section2_icon5', array(
        'label'    => __('Process Section 2 Icon 5', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section2_icon5',
        'type'     => 'text',
    ));

    // Process Section 2 Name 6
    $wp_customize->add_setting('process_section2_name6', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('process_section2_name6', array(
        'label'    => __('Process Section 2 Name 6', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section2_name6',
        'type'     => 'text',
    ));

    // Process Section 2 Description 6
    $wp_customize->add_setting('process_section2_description6', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('process_section2_description6', array(
        'label'    => __('Process Section 2 Description 6', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section2_description6',
        'type'     => 'textarea',
    ));

    // Process Section 2 Icon 6
    $wp_customize->add_setting('process_section2_icon6', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('process_section2_icon6', array(
        'label'    => __('Process Section 2 Icon 6', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section2_icon6',
        'type'     => 'text',
    ));

    // Process Section 3 Main Title
    $wp_customize->add_setting('process_section3_main_title', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('process_section3_main_title', array(
        'label'    => __('Process Section 3 Main Title', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section3_main_title',
        'type'     => 'text',
    ));

    // Process Section 3 Title 1
    $wp_customize->add_setting('process_section3_title1', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('process_section3_title1', array(
        'label'    => __('Process Section 3 Title 1', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section3_title1',
        'type'     => 'text',
    ));

    // Process Section 3 Description 1
    $wp_customize->add_setting('process_section3_description1', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('process_section3_description1', array(
        'label'    => __('Process Section 3 Description 1', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section3_description1',
        'type'     => 'textarea',
    ));

    // Process Section 3 Icon 1
    $wp_customize->add_setting('process_section3_icon1', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('process_section3_icon1', array(
        'label'    => __('Process Section 3 Icon 1', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section3_icon1',
        'type'     => 'text',
    ));

    // Process Section 3 Image 1
    $wp_customize->add_setting('process_section3_image1', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'process_section3_image1', array(
        'label'    => __('Process Section 3 Image 1', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section3_image1',
    )));

    // Process Section 3 Title 2
    $wp_customize->add_setting('process_section3_title2', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('process_section3_title2', array(
        'label'    => __('Process Section 3 Title 2', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section3_title2',
        'type'     => 'text',
    ));

    // Process Section 3 Description 2
    $wp_customize->add_setting('process_section3_description2', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('process_section3_description2', array(
        'label'    => __('Process Section 3 Description 2', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section3_description2',
        'type'     => 'textarea',
    ));

    // Process Section 3 Icon 2
    $wp_customize->add_setting('process_section3_icon2', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('process_section3_icon2', array(
        'label'    => __('Process Section 3 Icon 2', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section3_icon2',
        'type'     => 'text',
    ));

    // Process Section 3 Image 2
    $wp_customize->add_setting('process_section3_image2', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'process_section3_image2', array(
        'label'    => __('Process Section 3 Image 2', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section3_image2',
    )));

    // Process Section 3 Title 3
    $wp_customize->add_setting('process_section3_title3', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('process_section3_title3', array(
        'label'    => __('Process Section 3 Title 3', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section3_title3',
        'type'     => 'text',
    ));

    // Process Section 3 Description 3
    $wp_customize->add_setting('process_section3_description3', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('process_section3_description3', array(
        'label'    => __('Process Section 3 Description 3', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section3_description3',
        'type'     => 'textarea',
    ));

    // Process Section 3 Icon 3
    $wp_customize->add_setting('process_section3_icon3', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('process_section3_icon3', array(
        'label'    => __('Process Section 3 Icon 3', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section3_icon3',
        'type'     => 'text',
    ));

    // Process Section 3 Image 3
    $wp_customize->add_setting('process_section3_image3', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'process_section3_image3', array(
        'label'    => __('Process Section 3 Image 3', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section3_image3',
    )));

    // Process Section 3 Title 4
    $wp_customize->add_setting('process_section3_title4', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('process_section3_title4', array(
        'label'    => __('Process Section 3 Title 4', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section3_title4',
        'type'     => 'text',
    ));

    // Process Section 3 Description 4
    $wp_customize->add_setting('process_section3_description4', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('process_section3_description4', array(
        'label'    => __('Process Section 3 Description 4', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section3_description4',
        'type'     => 'textarea',
    ));

    // Process Section 3 Icon 4
    $wp_customize->add_setting('process_section3_icon4', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('process_section3_icon4', array(
        'label'    => __('Process Section 3 Icon 4', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section3_icon4',
        'type'     => 'text',
    ));

    // Process Section 3 Image 4
    $wp_customize->add_setting('process_section3_image4', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'process_section3_image4', array(
        'label'    => __('Process Section 3 Image 4', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section3_image4',
    )));

    // Process Section 4 Title
    $wp_customize->add_setting('process_section4_title', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('process_section4_title', array(
        'label'    => __('Process Section 4 Title', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section4_title',
        'type'     => 'text',
    ));

    // Process Section 4 Description
    $wp_customize->add_setting('process_section4_description', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('process_section4_description', array(
        'label'    => __('Process Section 4 Description', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section4_description',
        'type'     => 'textarea',
    ));


    // Process Section 5 Experience Text
    $wp_customize->add_setting('process_section5_experience_text', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('process_section5_experience_text', array(
        'label'    => __('Process Section 5 Experience Text', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section5_experience_text',
        'type'     => 'text',
    ));

    // Process Section 5 Experience Value
    $wp_customize->add_setting('process_section5_experience_value', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('process_section5_experience_value', array(
        'label'    => __('Process Section 5 Experience Value', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section5_experience_value',
        'type'     => 'text',
    ));

    // Process Section 5 Project Completed Text
    $wp_customize->add_setting('process_section5_project_completed_text', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('process_section5_project_completed_text', array(
        'label'    => __('Process Section 5 Project Completed Text', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section5_project_completed_text',
        'type'     => 'text',
    ));

    // Process Section 5 Project Completed Value
    $wp_customize->add_setting('process_section5_project_completed_value', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('process_section5_project_completed_value', array(
        'label'    => __('Process Section 5 Project Completed Value', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section5_project_completed_value',
        'type'     => 'text',
    ));

    // Process Section 5 Project Completed Description
    $wp_customize->add_setting('process_section5_project_completed_description', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('process_section5_project_completed_description', array(
        'label'    => __('Process Section 5 Project Completed Description', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section5_project_completed_description',
        'type'     => 'textarea',
    ));

    // Process Section 5 Satisfied Customer Text
    $wp_customize->add_setting('process_section5_satisfied_customer_text', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('process_section5_satisfied_customer_text', array(
        'label'    => __('Process Section 5 Satisfied Customer Text', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section5_satisfied_customer_text',
        'type'     => 'text',
    ));

    // Process Section 5 Satisfied Customer Value
    $wp_customize->add_setting('process_section5_satisfied_customer_value', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('process_section5_satisfied_customer_value', array(
        'label'    => __('Process Section 5 Satisfied Customer Value', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section5_satisfied_customer_value',
        'type'     => 'text',
    ));

    // Process Section 5 Satisfied Customer Description
    $wp_customize->add_setting('process_section5_satisfied_customer_description', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('process_section5_satisfied_customer_description', array(
        'label'    => __('Process Section 5 Satisfied Customer Description', 'crafto'),
        'section'  => 'process_page_settings_section',
        'settings' => 'process_section5_satisfied_customer_description',
        'type'     => 'textarea',
    ));

}

add_action('customize_register', 'crafto_process_page_settings');


function theme_preloader_scripts() {
    wp_enqueue_script( 'theme-preloader', get_template_directory_uri() . '/js/preloader.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'theme_preloader_scripts' );

function theme_customizer_settings( $wp_customize ) {
    // Add Preloader Section
    $wp_customize->add_section( 'preloader_section', array(
        'title'    => __( 'Preloader Settings', 'your-textdomain' ),
        'priority' => 30,
    ));

    // Preloader Logo
    $wp_customize->add_setting( 'preloader_logo', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'preloader_logo', array(
        'label'    => __( 'Preloader Logo', 'your-textdomain' ),
        'section'  => 'preloader_section',
        'settings' => 'preloader_logo',
    )));

    // Preloader Slogan
    $wp_customize->add_setting( 'preloader_slogan', array(
        'default'   => __( 'Loading...', 'your-textdomain' ),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( 'preloader_slogan', array(
        'label'    => __( 'Preloader Slogan', 'your-textdomain' ),
        'section'  => 'preloader_section',
        'type'     => 'text',
    ));

    // Enable/Disable Preloader
    $wp_customize->add_setting( 'preloader_enable', array(
        'default'   => true,
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( 'preloader_enable', array(
        'label'    => __( 'Enable Preloader', 'your-textdomain' ),
        'section'  => 'preloader_section',
        'type'     => 'checkbox',
    ));
}
add_action( 'customize_register', 'theme_customizer_settings' );

// Add a settings menu item
function custom_admin_logo_menu() {
    add_menu_page(
        'Admin Logo Settings',         // Page title
        'Admin Settings',                  // Menu title
        'manage_options',              // Capability
        'custom-admin-logo',           // Menu slug
        'custom_admin_logo_page'       // Callback function
    );
}
add_action('admin_menu', 'custom_admin_logo_menu');

// Create the settings page
function custom_admin_logo_page() {
    ?>
    <div class="wrap">
        <h1>Admin Settings</h1>
        <form method="post" action="options.php" enctype="multipart/form-data">
            <?php
            settings_fields('custom_logo_options'); // Security field
            do_settings_sections('custom_admin_logo'); // Output settings sections
            submit_button(); // Submit button
            ?>
        </form>
    </div>
    <?php
}

// Register settings
function custom_admin_logo_settings() {
    // Register settings for admin logo
    register_setting('custom_logo_options', 'custom_admin_logo');

    // Register settings for receiver emails
    register_setting('custom_logo_options', 'receiver_emails');

    add_settings_section(
        'custom_logo_section',        // ID
        'Upload Your Admin Logo',    // Title
        null,                         // Callback
        'custom_admin_logo'          // Page
    );

    add_settings_field(
        'custom_admin_logo',          // ID
        'Admin Logo',                 // Title
        'custom_admin_logo_callback', // Callback function
        'custom_admin_logo',          // Page
        'custom_logo_section'         // Section
    );

     // Add field for the receiver emails
    add_settings_field(
        'receiver_emails',            // ID
        'Receiver Emails',            // Title
        'receiver_emails_callback',   // Callback function
        'custom_admin_logo',          // Page
        'custom_logo_section'         // Section
    );
}
add_action('admin_init', 'custom_admin_logo_settings');

// Callback function for the logo upload field
function custom_admin_logo_callback() {
    $logo_url = get_option('custom_admin_logo');
    echo '<input type="hidden" id="custom_admin_logo" name="custom_admin_logo" value="' . esc_attr($logo_url) . '" />';
    echo '<button type="button" class="button" id="upload_logo_button">Upload Logo</button>';
    if ($logo_url) {
        echo '<img src="' . esc_url($logo_url) . '" style="max-width: 150px; display: block; margin-top: 10px;" />';
        echo '<button type="button" class="button" id="remove_logo_button">Remove Logo</button>';
    }
}

// Callback function for the receiver emails textarea
function receiver_emails_callback() {
    $emails = get_option('receiver_emails');
    echo '<textarea id="receiver_emails" name="receiver_emails" rows="5" cols="50">' . esc_textarea($emails) . '</textarea>';
    echo '<p class="description">Enter the receiver emails, separated by commas.</p>';
}

// Enqueue the media uploader script
function custom_admin_logo_scripts() {
    wp_enqueue_media();
    wp_enqueue_script('custom-admin-logo-script', get_template_directory_uri() . '/js/custom-admin-logo.js', array('jquery'), null, true);
}
add_action('admin_enqueue_scripts', 'custom_admin_logo_scripts');

// Change the login logo
function custom_login_logo() {
    $logo_url = get_option('custom_admin_logo');
    if ($logo_url) {
        echo '<style type="text/css">
            h1 a {
                background-image: url(' . esc_url($logo_url) . ') !important;
                background-size: contain !important;
                width: auto !important;
                height: 80px !important; /* Set the desired height */
            }
        </style>';
    }
}
add_action('login_enqueue_scripts', 'custom_login_logo');



// Contact Load inquiry table creation
require_once get_template_directory() . '/inc/contact-inquiries/table-creation.php';

// Contact Load admin menu and display functionality
require_once get_template_directory() . '/inc/contact-inquiries/admin-page.php';

// Contact Load form handler for AJAX
require_once get_template_directory() . '/inc/contact-inquiries/form-handler.php';


// Requests Load inquiry table creation
require_once get_template_directory() . '/inc/request-inquiries/table-creation.php';

// Request Load admin menu and display functionality
require_once get_template_directory() . '/inc/request-inquiries/admin-page.php';

// Requests Load form handler for AJAX
require_once get_template_directory() . '/inc/request-inquiries/form-handler.php';