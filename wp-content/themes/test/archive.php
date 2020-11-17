<?php echo the_archive_title()?>

<?php
if ( have_posts() ) : 
    while ( have_posts() ) : the_post();
?>
    <article style="border: 1px; border-style:solid">
        <span> <?php the_time();?> <?php echo get_the_date() ?></span>
        <h2>
            <?php the_title(); ?>
        </h2>
        <?php the_content(); ?>
    </article>

<?php
    endwhile; 
endif; 
?>