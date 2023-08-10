<?php

function register_nav() {
    register_nav_menus ( 
        array(
            'header' => 'Header'
        )
    );

    register_nav_menus ( 
        array(
            'footer' => 'Footer'
        )
    );

    register_nav_menus ( 
        array(
            '404' => '404'
        )
    );
}

function wiki_register_styles(){

    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('wiki-style', get_template_directory_uri() . "/style.css", array('wiki-tailwind'), '1.0', 'all');
    wp_enqueue_style('wiki-tailwind', "https://cdn.tailwindcss.com", array(), '3.3.3', 'all');
    wp_enqueue_style('wiki-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');

}

add_action ( 'wp_enqueue_scripts', 'wiki_register_styles' );

function wiki_register_scripts(){

    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_script('wiki-jquery',"https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1', true);
    wp_enqueue_script('wiki-popper',"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '1.16.0', true);
    wp_enqueue_script('wiki-bootstrap',"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '3.4.1', true);
    wp_enqueue_script('wiki-main', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true);

}

add_action ( 'wp_enqueue_scripts', 'wiki_register_scripts' );

function wiki_widget_areas(){

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
            'after_widget' => '</ul>',
            'name' => 'Sidebar Area',
            'id' => 'sidebar-1',
            'description' => 'Sidebar Widget Area'
        )
    );

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Footer Area',
            'id' => 'footer-1',
            'description' => 'Footer Widget Area'
        )
    );
}

add_action( 'widgets_init', 'wiki_widget_areas');

if (! function_exists('setup')):
    function setup(){
        register_nav();
        add_theme_support('post-thumbnails', 'custom-logo', 'title-tag');
        add_image_size('team', 475, 475, array('center','center'));
        wp_enqueue_style( 'style', get_stylesheet_uri() );
        wiki_register_styles();
        wiki_register_scripts();
    }
endif;

?>