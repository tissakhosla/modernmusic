<?php get_header(); ?>

<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		the_content();
		the_post_thumbnail('medium');
		?><a href="<?php the_permalink();?>"><h3> <?php echo the_title(); ?></h3></a><?php
	} // end while
} // end if

get_footer();

?>