<?php echo the_archive_title()?>

<?php
if ( have_posts() ) : 
    while ( have_posts() ) : the_post();
?>
    <article>

        <span> <?php the_time();?></span>
        <h2>
            <?php the_title(); ?>
        </h2>
        <?php the_content(); ?>
    </article>

<?php
    endwhile; 
endif; 
?>