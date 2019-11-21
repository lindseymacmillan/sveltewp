<?php

Kirki::add_section( 'typography_branding', array(
    'title'          => esc_html__( 'Branding', 'aspen' ),
    'description'    => esc_html__( 'My section description.', 'kirki' ),
    'panel'          => 'aspen_typography',
    'priority'       => 40,
) );

Kirki::add_field( 'aspen_theme', [
	'type'        => 'typography',
	'settings'    => 'branding_typography',
	'label'       => esc_html__( 'Branding style', 'aspen' ),
	'section'     => 'typography_branding',
	'default'     => [
		'font-family'    => 'Roboto',
        'color'          => '#333333',
        'font-size'      => '26px',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => ['.branding h2'],
		],
	],
] );

Kirki::add_field( 'aspen_theme', [
	'type'        => 'typography',
	'settings'    => 'tagline_typography',
	'label'       => esc_html__( 'Tagline style', 'aspen' ),
	'section'     => 'typography_branding',
	'default'     => [
		'font-family'    => 'Roboto',
        'color'          => '#333333',
        'font-size'      => '16px',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => ['.branding p'],
		],
	],
] );