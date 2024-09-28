<?php
/*
Template Name: News Page
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
            <div class="col-12">
                <ul class="blog-classic blog-wrapper grid-loading grid grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <li class="grid-sizer"></li>
                    <!-- start blog item -->
                    <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // Get current page number
                        $args = array(
                            'post_type'      => 'newspost',
                            'posts_per_page' => 8,  // Set posts per page to 8
                            'paged'          => $paged,  // Enable pagination
                        );
                        $query = new WP_Query($args);

                        if ($query->have_posts()) :
                            while ($query->have_posts()) : $query->the_post();
                    ?>
                        <!-- Repeated block HTML here -->
                        <li class="grid-item">
                            <div class="card bg-transparent border-0 h-100">
                                <div class="blog-image position-relative overflow-hidden border-radius-4px">
                                    <a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo esc_html(get_the_title()); ?>" /></a>
                                </div>
                                <div class="card-body px-0 pt-30px pb-30px xs-pb-15px last-paragraph-no-margin">
                                    <a href="<?php the_permalink(); ?>" class="card-title mb-5px fw-600 lh-30 text-dark-gray d-block"><?php the_title(); ?></a>
                                    <p><?php echo esc_html(wp_trim_words(get_the_content(), 20, '...')); ?></p> 
                                </div>
                            </div>
                        </li>
                    <?php
                            endwhile;
                        else :
                            echo '<p>No news found.</p>';
                        endif;
                        wp_reset_postdata();
                    ?>
                    <!-- end blog item -->
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-3 d-flex justify-content-center" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <!-- start pagination -->
                <?php
                    $pagination_args = array(
                        'total'        => $query->max_num_pages,
                        'current'      => max(1, get_query_var('paged')),
                        'format'       => '?paged=%#%',
                        'show_all'     => false,
                        'end_size'     => 1,
                        'mid_size'     => 2,
                        'prev_text'    => __('<i class="feather icon-feather-arrow-left fs-18 d-xs-none"></i>'),
                        'next_text'    => __('<i class="feather icon-feather-arrow-right fs-18 d-xs-none"></i>'),
                        'type'         => 'array', // Output links as an array so we can wrap them
                    );

                    $pagination_links = paginate_links($pagination_args);

                    if ($pagination_links) {
                        echo '<ul class="pagination pagination-style-01 fs-13 fw-500 mb-0">';

                        foreach ($pagination_links as $link) {
                            // Check if it's the active page
                            $class = strpos($link, 'current') !== false ? ' active' : '';

                            // Wrap the link in the Bootstrap classes
                            echo '<li class="page-item' . $class . '">';
                            echo str_replace('page-numbers', 'page-link', $link); // Replace page-numbers class with page-link
                            echo '</li>';
                        }

                        echo '</ul>';
                    }
                ?>


                <!-- <ul class="pagination pagination-style-01 fs-13 fw-500 mb-0">
                    <li class="page-item"><a class="page-link" href="#"><i class="feather icon-feather-arrow-left fs-18 d-xs-none"></i></a></li>
                    <li class="page-item"><a class="page-link" href="#">01</a></li>
                    <li class="page-item active"><a class="page-link" href="#">02</a></li>
                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                    <li class="page-item"><a class="page-link" href="#">04</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i class="feather icon-feather-arrow-right fs-18 d-xs-none"></i></a></li>
                </ul> -->
                <!-- end pagination -->
            </div> 
        </div>
    </div>
</section> 
<!-- end section --> 

<?php get_footer(); ?>