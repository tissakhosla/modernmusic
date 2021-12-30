<?php get_header(); ?>

<hr/>
<p>index.php</p>
<hr/>

<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		?><a href="<?php the_permalink();?>"><h3> <?php the_title(); ?></h3></a><?php
	} // end while
} // end if

get_footer();

?>