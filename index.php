<?php get_header(); ?>

<hr/>
<p>index.php</p>
<hr/>

<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		the_content();
	} // end while
} // end if

get_footer();

?>