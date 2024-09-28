<?php

    $banner_text_1 = get_post_meta(get_the_ID(), '_banner_text_1', true);
    $banner_text_2 = get_post_meta(get_the_ID(), '_banner_text_2', true);
    $banner_image_url = get_post_meta(get_the_ID(), '_banner_image_url', true);

    if (!$banner_image_url) {
       $banner_image_url = 'https://via.placeholder.com/1920x1100';
    }

?>