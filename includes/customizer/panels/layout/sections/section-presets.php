<?php

Kirki::add_section( 'layout_presets', array(
    'title'          => esc_html__( 'Presets', 'aspen' ),
    'description'    => esc_html__( 'My section description.', 'kirki' ),
    'panel'          => 'aspen_layout',
    'priority'       => 40,
) );

Kirki::add_field( 'aspen_theme', [
	'type'        => 'radio-image',
	'settings'    => 'layout_preset',
	'label'       => esc_html__( 'Presets', 'aspen' ),
	'section'     => 'layout_presets',
	'default'     => 'stacked',
	'priority'    => 10,
	'choices'     => [
		'stacked'   => get_template_directory_uri() . '/assets/images/layouts/stacked.png',
		'sidebar' => get_template_directory_uri() . '/assets/images/layouts/sidebar.png',
	],
] );
