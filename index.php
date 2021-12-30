<?php

get_header();

wp_title();

while (have_posts()) : 
    the_post();
endwhile;

get_footer();

?>