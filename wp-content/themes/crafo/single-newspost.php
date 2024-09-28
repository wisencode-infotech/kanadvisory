<?php get_header(); ?>


<?php
if (have_posts()) :
    while (have_posts()) : the_post(); ?>
<!-- start section -->
<section class="top-space-margin">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <span class="fs-18 mb-30px sm-mb-20px d-inline-block">By <a href="#" class="text-dark-gray text-decoration-line-bottom fw-500"><?php echo get_post_meta(get_the_ID(), '_author_name', true); ?></a>
                 on <?php echo  the_date(); ?></span>
                <h1 class="alt-font fw-600 text-dark-gray ls-minus-2px mb-0"><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="py-0 ps-13 pe-13 lg-ps-4 lg-pe-4 sm-px-0">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12"><img src="<?php echo get_post_meta(get_the_ID(), '_main_news_image_url', true); ?>" class="w-100" alt=""></div>
        </div>
    </div>
</section>
<!-- end section -->

<!-- start section -->
<section class="py-0 ps-13 pe-13 lg-ps-4 lg-pe-4 sm-px-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>
<!-- end section -->

<!-- start section -->
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-3 col-md-4 text-center sm-mb-30px">
                        <div class="pb-20px">
                            <img src="<?php echo get_post_meta(get_the_ID(), '_author_image_url', true); ?>" class="rounded-circle w-130px mb-20px" alt="">
                            <span class="d-block lh-26">Words by</span>
                            <a href="demo-accounting-news.html" class="text-dark-gray alt-font fw-500 text-uppercase"><?php echo get_post_meta(get_the_ID(), '_author_name', true); ?></a>
                        </div>
                        <div class="h-3px w-100 bg-base-color mb-20px"></div>
                        <!-- <ul class="d-flex list-unstyled justify-content-center">
                            <li class="me-25px"><a href="#" class="text-uppercase alt-font fs-13"><i class="feather icon-feather-message-circle me-5px icon-small align-middle"></i>Comment</a></li>
                            <li><a href="#" class="text-uppercase alt-font fs-13"><i class="feather icon-feather-heart me-5px icon-small align-middle"></i>Like</a></li>
                        </ul> -->
                    </div>  
                    <div class="offset-lg-1 col-md-8 last-paragraph-no-margin text-center text-md-start">
                        <h3 class="alt-font fw-600 text-dark-gray"><?php echo get_post_meta(get_the_ID(), '_author_title', true); ?></h3>
                        <p><?php echo get_post_meta(get_the_ID(), '_author_description', true); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->

<!-- start section -->
<?php

// Get the current post ID
$current_post_id = get_the_ID();

// Get the categories for the current newspost
$categories = wp_get_post_terms($current_post_id, 'category', array('fields' => 'ids'));

if (!empty($categories)) :
// Set up a new query for related posts
$args = array(
    'post_type'      => 'newspost',        // Custom post type
    'posts_per_page' => 4,                 // Number of related posts to show
    'post__not_in'   => array($current_post_id),  // Exclude the current post
    'tax_query' => array(                  // Taxonomy query to get posts from the same category
        array(
            'taxonomy' => 'category',
            'field'    => 'id',
            'terms'    => $categories,     // Get posts from the current post's categories
        ),
    ),
);
$query = new WP_Query($args);

if ($query->have_posts()) : ?>
<section class="bg-very-light-gray"> 
    <div class="container">
        <div class="row justify-content-center mb-1">
            <div class="col-lg-7 text-center">
                <span class="d-inline-block text-dark-gray align-middle fw-500 fs-20 ls-minus-05px">You may also like</span>
                <h4 class="text-dark-gray fw-700 ls-minus-1px">Related news</h4>
            </div>
        </div>
        <div class="row g-0">
            <div class="col-12">
                <ul class="blog-classic blog-wrapper grid grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large">
                    <li class="grid-sizer"></li>
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
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
                    <?php endwhile; ?>
                </ul>
            </div> 
        </div>
    </div>
</section>
<?php
endif;
endif;
wp_reset_postdata();
?>
<!-- end section -->
<!-- start section -->
<?php
global $post;
$comments = get_comments(array(
    'post_id' => $post->ID,
    'status' => 'approve' // Ensure you are getting only approved comments
));
?>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 text-center mb-2"> 
                <h4 class="alt-font text-dark-gray fw-500"><?php echo count($comments); ?> Comments</h4>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <ul class="blog-comment">
                    <?php
                    // Check if comments exist
                    if (!empty($comments)) {
                        foreach ($comments as $comment) {
                            // Prepare the comment HTML
                            ?>
                            <li>
                                <div class="d-block d-md-flex w-100 align-items-center align-items-md-start">
                                    <div class="w-90px sm-w-65px sm-mb-10px">
                                        <?php echo get_avatar($comment, 130, '', '', array('class' => 'rounded-circle')); ?>
                                    </div>
                                    <div class="w-100 ps-30px last-paragraph-no-margin sm-ps-0">
                                        <a href="#" class="text-dark-gray fw-500"><?php echo esc_html($comment->comment_author); ?></a>
                                        <div class="fs-14 lh-24 mb-10px"><?php echo esc_html(date('d F Y, H:i', strtotime($comment->comment_date))); ?></div>
                                        <p class="w-85 sm-w-100"><?php echo esc_html($comment->comment_content); ?></p>
                                    </div>
                                </div>
                            </li>
                            <?php
                        }
                    } else {
                        echo '<li>No comments yet.</li>';
                    }
                    ?>
                </ul> 
            </div>
        </div>
    </div>
</section>

<!-- end section -->
<!-- start section -->
<!-- <section id="comments" class="pt-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 mb-3 sm-mb-6">
                <h6 class="alt-font text-dark-gray fw-500 mb-5px">Write a comment</h6>
                <div class="mb-5px">Your email address will not be published. Required fields are marked *</div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <form action="email-templates/contact-form.php" method="post" class="row contact-form-style-02">
                    <div class="col-md-6 mb-30px">
                        <input class="input-name border-radius-4px form-control required" type="text" name="name" placeholder="Enter your name*">
                    </div> 
                    <div class="col-md-6 mb-30px">
                        <input class="border-radius-4px form-control required" type="email" name="email" placeholder="Enter your email address*">
                    </div> 
                    <div class="col-md-12 mb-30px">
                        <textarea class="border-radius-4px form-control" cols="40" rows="4" name="comment" placeholder="Your message"></textarea>
                    </div> 
                    <div class="col-12">
                        <input type="hidden" name="redirect" value="">
                        <button class="btn btn-dark-gray btn-small btn-round-edge submit" type="submit">Post Comment</button>
                        <div class="form-results mt-20px d-none"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section> -->



<section id="comments" class="pt-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 mb-3 sm-mb-6">
                <h6 class="alt-font text-dark-gray fw-500 mb-5px">Write a comment</h6>
                <div class="mb-5px">Your email address will not be published. Required fields are marked *</div>
                <?php 
                    // Customize the comment form
                    $comment_form_args = array(
                        'class_form'         => 'row contact-form-style-02', // Custom class for form
                        'class_submit'       => 'btn btn-dark-gray btn-small btn-round-edge submit', // Custom class for submit button
                        'title_reply'        => '', // Remove the default "Leave a Reply" title
                        'fields'             => array(
                            'author' => '<div class="col-md-6 mb-30px"><input class="input-name border-radius-4px form-control required" type="text" name="author" placeholder="Enter your name*" required></div>',
                            'email'  => '<div class="col-md-6 mb-30px"><input class="border-radius-4px form-control required" type="email" name="email" placeholder="Enter your email address*" required></div>',
                        ),
                        'comment_field'      => '<div class="col-md-12 mb-30px"><textarea class="border-radius-4px form-control required" cols="40" rows="4" name="comment" placeholder="Your message*" required></textarea><input type="hidden" name="redirect" value="'.get_permalink().'"></div>',
                        'submit_button'      => '<div class="col-12"><button type="submit" class="btn btn-dark-gray btn-small btn-round-edge submit" value="1">%4$s</button><div class="form-results mt-20px d-none"></div></div>',
                        'comment_notes_after'=> '', // Remove the "You may use these HTML tags" note
                    );

                    comment_form($comment_form_args);
                ?>
            </div>
        </div>
    </div>
</section>

<!-- end section --> 
<?php endwhile;
    endif;
    ?>

<?php get_footer(); ?>