<?php


function load_stylesheets()
{

    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', '', 1,'all');
    wp_enqueue_style('stylesheet');

    wp_register_style('custom', get_template_directory_uri() . '/app.css', '', 1,'all');
    wp_enqueue_style('custom');


}
add_action('wp_enqueue_scripts', 'load_stylesheets');



function load_javascript()
{

        wp_register_script('custom', get_template_directory_uri() . '/app.js', 'jquery', 1, true);
        wp_enqueue_Script('custom');

}
add_action('wp_enqueue_scripts', 'load_javascript');


//add support
add_theme_support('menus');
add_theme_support('post-thumbnails');

//Register some menus
register_nav_menus(

    array(
        'top-menu' => 'Top Menu',
    )
    );

register_nav_menus(

    array(
        'categorias' => 'Categorias',
    )
    );

    register_nav_menus(

        array(
            'bottom_footer' => 'Footer',
        )
        );

//add image sizes
add_image_size('post_image', 1100, 550, false);


//add a widget
register_sidebar(

    array(

        'name' => 'Page Sidebar',
        'id' => 'page-sidebar',
        'class' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>'

    )
    );

register_sidebar(

    array(
    
        'name' => 'Blog Sidebar',
        'id' => 'blog-sidebar',
        'class' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    
    )
    );

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
    
    add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

    add_filter( 'woocommerce_show_page_title', 'bbloomer_hide_shop_page_title' );

    function bbloomer_hide_shop_page_title( $title ) {
        if ( is_shop() ) $title = false;
        return $title;
    }

remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );