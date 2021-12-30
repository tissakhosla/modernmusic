<?php get_header(); ?>

<?php
if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>
		
		<a href="<?php the_permalink();?>">
			<div>
				<h3><?php the_title(); ?></h3>
				<?php the_post_thumbnail('medium'); ?>
			</div>
		</a>		
	
	<?php
	
	endwhile;
endif;

get_footer();

?>