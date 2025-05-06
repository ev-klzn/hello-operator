<?php

add_action('wp_enqueue_scripts', 'operator_scripts');

function operator_scripts()
{
    wp_enqueue_style('operator-style', get_template_directory_uri() . '/css/style.min.css');
    wp_enqueue_script('operator_scripts', get_template_directory_uri() . '/js/app.min.js', array(), null, true);
};

// add_theme_support('custom-logo');
// add_theme_support('post-thumbnails');
add_theme_support('menus');

add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);
function filter_nav_menu_link_attributes($atts, $item, $args)
{
    if ($args->menu === 'Main') {
        $atts['class'] = 'menu__link';

        // if ($item->current) {
        //     $atts['class'] .= ' menu__link-active';
        // }
    } elseif ($args->menu === 'MainNl') {
        $atts['class'] = 'menu__link';
        // if ($item->current) {
        //     $atts['class'] .= ' menu__link-active';
        // }
    }
    ;

    return $atts;
}
