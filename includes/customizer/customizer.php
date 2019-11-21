<?php 

if ( class_exists( 'Kirki' ) ) {

    Kirki::add_config( 'aspen_theme', array(
        'capability'    => 'edit_theme_options',
        'option_type'   => 'theme_mod',
    ) );

    require_once( get_stylesheet_directory() . '/includes/customizer/panels/layout/panel-layout.php');
    require_once( get_stylesheet_directory() . '/includes/customizer/panels/typography/panel-typography.php');

}