<?php get_header(); ?>

<h1>Strona główna</h1>

<div class="main-container">
    <section class="aktualnosci">
        <h2>Aktualności</h2>
        <div class="aktualnosci-container">
            <?php
                $akt = new WP_Query( array('category_name'=>'aktualnosci', 'posts_per_page' => 5 ));
                if ( $akt -> have_posts() ) : 
                    while ( $akt -> have_posts() ) : $akt -> the_post();
            ?>
                <div class="aktualnosci-item">
                    <img src="<?php echo get_the_post_thumbnail_url() ?>"/>
                    <h3><?php echo get_the_title(); ?></h3>
                    <div><?php echo the_category(' > ','multiple')?></div>
                    <br>
                    <a class="archive-link" href="<?php echo get_permalink(); ?>"><?php echo wp_trim_words(get_the_content(''),20,'...'); ?></a>
                    <div style="align-self: flex-end;"><?php echo get_the_date()?> o <?php echo the_time()?></div>
                </div>
            <?php
                    endwhile; 
                else:
                    echo "Na razie nic tu nie ma";
                endif;
                wp_reset_postdata();
            ?>

        </div>
    </section>

    <section class="ogloszenia">
        <a href="ogloszenia"><h2>Ogłoszenia</h2><a>
        <div class="ogloszenia-container">
            <?php
                $ogl = new WP_Query( array('post_type'=>'ogloszenia', 'posts_per_page' => 5) );
                if ( $ogl -> have_posts() ) : 
                    while ( $ogl -> have_posts() ) : $ogl -> the_post();
            ?>
                    <a class="ogloszenia-item archive-link" href="<?php echo get_permalink()?>">
                        <h3><?php the_title(); ?></h3>
                        <p><?php get_extended(the_content('Wyświetl ogłoszenie')); ?></p>
                        <div style="text-align:right"><?php echo get_the_date()?> o <?php echo the_time()?></div>
                    </a>
                
            <?php
                    endwhile; 
                else:
                    echo "Brak ogłoszeń";
            endif;
            wp_reset_postdata();
            ?>

        </div>
    </section>
<div>

<?php get_footer(); ?>
