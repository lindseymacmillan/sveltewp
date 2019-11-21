<?php

$directory = get_stylesheet_directory() . '/includes/customizer/panels/layout';

Kirki::add_panel( 'aspen_layout', array(
    'priority'    => 40,
    'title'       => esc_html__( 'Layout', 'kirki' ),
    'description' => esc_html__( 'My panel description', 'kirki' ),
) );

require_once( $directory . '/sections/section-presets.php');
require_once( $directory . '/sections/section-general.php');
require_once( $directory . '/sections/section-branding.php');
require_once( $directory . '/sections/section-primary-nav.php');
require_once( $directory . '/sections/section-super-nav.php');
require_once( $directory . '/sections/section-secondary-nav.php');
require_once( $directory . '/sections/section-footer.php');