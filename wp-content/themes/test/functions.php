<?php
    function get_css_files()
    {
        wp_enqueue_style('main-css',get_template_directory_uri().'/css/style.css');
    }

    function register_ogloszenia()
    {
        register_post_type(
            'ogloszenia',
            array(
                'public' => true,
                'menu_icon' => 'dashicons-megaphone',
                'menu_position' => 5,
                'labels' => array(
                    'name'=>'Moje ogłoszenia',
                    'add_new_item'=>'Dodaj nowe ogłoszenie',
                    'add_new'=>'Dodaj nowe ogłoszenie',
                    'edit_item'=>'Edytuj ogłoszenie',
                    'all_items'=>'Wszystkie ogłoszenia',
                ),
                'has_archive' => 'ogloszenia'
            )
        );

    }

    add_theme_support( 'post-thumbnails' ); 
    add_action('init','register_ogloszenia');
    add_action('wp_enqueue_scripts','get_css_files');
?>