<?php
//Registrera meny
add_action('init', 'register_my_menus');

function register_my_menus() {
    register_nav_menus(array(
        'main-menu' => 'Huvudmeny',
        'sub-menu' => 'Produktmeny'
    ));
}

//Dynamisk headerbild
$args = array(
    'width'         => 3000,
    'height'        => 1240,
    'default-image' => get_template_directory_uri() . '/pictures/header.jpg',
    'uploads'       => true,
);

add_theme_support('custom-header', $args);

//Utvalda bilder
add_theme_support( 'post-thumbnails' );

//Excerpt längd
function wpdocs_custom_excerpt_length( $length ) {
    return 50;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

//Excerpt läs mer länk
function wpdocs_excerpt_more( $more ) {
    if ( ! is_single() ) {
        $more = sprintf( '... <a class="mer" href="%1$s">%2$s</a>',
            get_permalink( get_the_ID() ),
            __( 'Läs mer', 'textdomain' )
        );
    }
 
    return $more;
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

//Widgets
if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Block widget',
    'before_widget' => '<div class="block" id="w">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
  )
);
