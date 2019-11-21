<?php
/*
 *  Author: Henry Holtgeerts
 *  URL: henryholtgeerts.com
 *  Custom functions, support, custom post types and more.
 */

/*------------------------------------*\
	Includes
\*------------------------------------*/

//Include Content API
require_once get_stylesheet_directory() . '/includes/api/content/class-content-api.php';

//Include APIs Class
require_once get_stylesheet_directory() . '/includes/api/class-apis.php';

/*------------------------------------*\
	Functions
\*------------------------------------*/

function theme_app() {
    get_header();
    get_footer();
}

// Load svelte scripts (header.php)
function theme_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

        wp_register_script('theme-js', get_template_directory_uri() . '/assets/dist/bundle.js', ['wp-api'], '1.0.0', true); // Svelte App scripts
        wp_enqueue_script('theme-js'); // Enqueue it!
        
    }
}

function theme_localize_scripts() {
    wp_localize_script( 'theme-js', 'theme_data', array(
        'name' => get_bloginfo('name'),
        'description' => get_bloginfo('description'),
        'url' => get_bloginfo('url'),
        'userId' => get_current_user_id(),
        'layout' => 'stacked',
        'primaryMenu' => wp_get_nav_menu_items('primary-menu'),
        'secondaryMenu' => wp_get_nav_menu_items('secondary-menu'),
        'superMenu' => wp_get_nav_menu_items('super-menu'),
    ));
}

// Load theme styles
function theme_styles()
{
    wp_register_style('theme-css', get_template_directory_uri() . '/assets/dist/bundle.css', [], '1.0', 'all');
    wp_enqueue_style('theme-css'); // Enqueue it!

    wp_register_style('theme-stylesheet', get_template_directory_uri() . '/style.css', [], '1.0', 'all');
    wp_enqueue_style('theme-stylesheet'); // Enqueue it!

}

// Register theme menus
function register_theme_menus()
{
    register_nav_menus([ // Using array to specify more menus if needed
        'primary-menu' => __('Primary Menu', 'aspen'), // Main Navigation
        'super-menu' => __('Super Menu', 'aspen'), // Main Navigation
        'secondary-menu' => __('Secondary Menu', 'aspen'), // Main Navigation
        'footer-menu' => __('Footer Menu', 'aspen') // Extra Navigation if needed (duplicate as many as you need!)
    ]);
}

// Remove Admin bar
function remove_admin_bar()
{
    return false;
}

/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('init', 'theme_scripts'); // Add Custom Scripts to wp_head
add_action('init', 'register_theme_menus'); // Add theme menus
add_action('wp_enqueue_scripts', 'theme_styles'); // Add Theme Stylesheet
add_action( 'wp', 'theme_localize_scripts' );


// Add Filters
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar

?>