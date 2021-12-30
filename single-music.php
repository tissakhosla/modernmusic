<?php get_header(); ?>

<?php 
    if( have_posts() ) :
        while( have_posts() ) :
            the_post(); ?>
            
            <h2><?php the_title();?></h2>
            <?php the_post_thumbnail('full') ?>
            <p> <?php echo get_the_date(); ?></p>
            <div>
                <?php the_content();?>
            </div>
    <?php endwhile;
    endif;
?>

<pre><?php var_dump(get_fields()); ?></pre>

<?php get_footer(); ?>
