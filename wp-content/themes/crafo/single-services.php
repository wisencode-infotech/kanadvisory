<?php 

get_header(); ?>

<!-- start page title -->
<section class="top-space-margin page-title-big-typography cover-background magic-cursor round-cursor" style="background-image: url(<?php echo get_post_meta(get_the_ID(), '_banner_image', true); ?>)">
    <div class="container">
        <div class="row extra-very-small-screen align-items-center">
            <div class="col-lg-5 col-sm-8 position-relative page-title-extra-small" data-anime='{ "el": "childs", "opacity": [0, 1], "translateX": [-30, 0], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h1 class="mb-20px xs-mb-20px text-white text-shadow-medium"><span class="w-30px h-2px bg-theme-blue d-inline-block align-middle position-relative top-minus-2px me-10px"></span><?php echo get_post_meta(get_the_ID(), '_banner_text_1', true); ?></h1>
                <h2 class="text-white text-shadow-medium fw-500 ls-minus-2px mb-0"><?php echo get_post_meta(get_the_ID(), '_banner_text_2', true); ?></h2>
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
                <div class="bg-theme-blue border-radius-6px ps-35px pb-25px pt-25px lg-ps-25px mb-25px">
                    <div class="feature-box feature-box-left-icon-middle">
                        <div class="bg-green feature-box-icon feature-box-icon-rounded w-65px h-65px me-20px lg-me-15px rounded-circle rounded-box">
                            <i class="bg-green bi bi-whatsapp icon-extra-medium text-white"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="fs-19 lh-22 mb-5px d-block text-white opacity-6 fw-300">Customer care?</span>
                            <a href="tel:<?php echo esc_attr(get_theme_mod('customer_care_number')); ?>" class="text-white fs-20 fw-500 lh-22"><?php echo esc_attr(get_theme_mod('customer_care_number')); ?></a>
                        </div>
                    </div>
                </div>
                <div class="bg-very-light-gray border-radius-6px p-40px lg-p-25px mb-25px">
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
                <div class="bg-theme-blue border-radius-top-left-6px border-radius-top-right-6px pb-25px pt-25px">
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="fs-19 d-block text-white fw-600 text-center">More Services</span>
                    </div>
                </div>
                <div class="bg-very-light-gray border-radius-bottom-left-6px border-radius-bottom-right-6px p-45px lg-p-25px mb-25px">
                    <span class="fs-20 ls-minus-05px alt-font text-dark-gray fw-600 mb-20px d-inline-block">Accounting services</span>
                    <ul class="p-0 m-0 list-style-02">
                    	<?php
	                        // Query to get custom post type 'services'
	                        $args = array(
	                            'post_type'      => 'services',
	                            'posts_per_page' => -1, // Get all posts
	                        );
	                        $query = new WP_Query($args);
	                        // Check if there are services
	                        if ($query->have_posts()) :
	                            while ($query->have_posts()) : $query->the_post();
	                    ?>

	                    <li class="pb-10px mb-10px border-bottom border-color-transparent-dark"><a href="<?php the_permalink(); ?>"><?php echo esc_html(get_the_title()); ?></a><i class="feather icon-feather-arrow-right ms-auto"></i></li>

	                    <?php
	                        endwhile;
	                        wp_reset_postdata(); // Reset post data
	                    endif;
	                    ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 order-1 order-lg-2 md-mb-50px" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <h4 class="text-dark-gray fw-700 ls-minus-1px alt-font mb-20px d-block"><?php echo get_post_meta(get_the_ID(), '_service_title1', true); ?></h4>
                <p><?php echo get_post_meta(get_the_ID(), '_service_description1', true); ?></p>
                <img src="<?php echo get_post_meta(get_the_ID(), '_service_image1', true); ?>" class="mt-30px md-mt-15px mb-60px md-mb-40px border-radius-6px" alt="">
                <div class="row row-cols-1 row-cols-md-2 mb-30px md-mb-15px">
                    <div class="col">
                        <span class="fs-24 alt-font text-dark-gray ls-minus-05px fw-700 mb-10px d-block"><?php echo get_post_meta(get_the_ID(), '_service_title2', true); ?></span>
                        <p class="w-90 sm-w-100"><?php echo get_post_meta(get_the_ID(), '_service_description2', true); ?></p>
                    </div>
                    <div class="col">
                        <span class="fs-24 alt-font text-dark-gray ls-minus-05px fw-700 mb-10px d-block"><?php echo get_post_meta(get_the_ID(), '_service_title3', true); ?></span>
                        <p class="w-90 sm-w-100"><?php echo get_post_meta(get_the_ID(), '_service_description3', true); ?></p>
                    </div>
                </div>
                <div class="cover-background p-7 border-radius-6px mb-60px md-mb-40px d-flex justify-content-end align-items-end sm-h-500px" style="background-image: url(<?php echo get_post_meta(get_the_ID(), '_service_image2', true); ?>)">
                    <div class="bg-white box-shadow-quadruple-large border-radius-4px w-50 lg-w-55 sm-w-100 overflow-hidden">
                        <div class="p-40px lg-p-25px last-paragraph-no-margin">
                            <span class="fs-24 alt-font text-dark-gray ls-minus-05px fw-700 mb-10px d-block"><?php echo get_post_meta(get_the_ID(), '_service_title4', true); ?></span>
                            <p class="w-95 lg-w-100"><?php echo get_post_meta(get_the_ID(), '_service_description4', true); ?></p>
                        </div>
                        <div class="bg-theme-blue p-15px text-center">
                            <a href="<?php echo home_url(); ?>/contact" class="text-white text-dark-gray-hover fw-600"><i class="feather icon-feather-mail me-10px"></i>Talk with our team</a>
                        </div>
                    </div>
                </div>
                <h4 class="text-dark-gray fw-700 ls-minus-1px alt-font mb-40px lg-mb-30px d-block"><?php echo get_post_meta(get_the_ID(), '_benifits_section_text', true); ?></h4>
                <div class="border border-color-extra-medium-gray border-radius-6px mb-40px xs-mb-30px overflow-hidden">

                	<?php 
						$benefits = get_post_meta(get_the_ID(), '_benefits', true);

						if (!empty($benefits) && is_array($benefits)) {
						   
						    foreach ($benefits as $key => $benefit) {
						        $benefit_title = isset($benefit['title']) ? esc_html($benefit['title']) : '';
						        $benefit_description = isset($benefit['description']) ? esc_html($benefit['description']) : '';
						        $solitude_blue_class = ($key % 2 !== 0) ? 'bg-solitude-blue' : '';
					?>
						    <p class="ps-30px pe-30px pt-25px pb-25px border-bottom border-1 border-color-extra-medium-gray mb-0 <?php echo $solitude_blue_class; ?>"><span class="fw-600 text-dark-gray"><?php echo $benefit_title ?>: </span><?php echo $benefit_description ?></p>
					<?php
						    }
						}
                	?>
                </div>
                <div class="row align-items-center justify-content-center g-0">
                    <div class="col-auto d-block d-sm-flex align-items-center text-center text-sm-start">
                        <img src="<?php echo get_post_meta(get_the_ID(), '_service_image3', true); ?>" alt="" />
                        <div class="lh-28 last-paragraph-no-margin text-dark-gray ps-15px xs-ps-0 xs-mt-15px">
                            <p>Save your time and effort spent for finding a solution. <a href="<?php echo home_url(); ?>/contact" class="text-decoration-line-bottom fw-500 text-dark-gray">Contact us now</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->

<?php get_footer(); ?>