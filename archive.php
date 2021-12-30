<?php get_header(); ?>

<hr/>
<p>archive.php</p>
<hr/>

<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		var_dump(the_post());
        the_post_thumbnail();
		var_dump(the_content());
        var_dump(the_title());
        var_dump(the_permalink());
	} // end while
} // end if

get_footer();

?>