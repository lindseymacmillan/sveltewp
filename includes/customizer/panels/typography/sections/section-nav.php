<?php

Kirki::add_section( 'typography_nav', array(
    'title'          => esc_html__( 'Navigation', 'aspen' ),
    'description'    => esc_html__( 'My section description.', 'kirki' ),
    'panel'          => 'aspen_typography',
    'priority'       => 40,
) );

Kirki::add_field( 'aspen_theme', [
	'type'        => 'typography',
	'settings'    => 'primary_nav_typography',
	'label'       => esc_html__( 'Primary Nav Typography', 'aspen' ),
	'section'     => 'typography_nav',
	'default'     => [
		'font-family'    => 'Roboto',
		'color'          => '#333333',
		'font-size'		 => '16px',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => ['.primary a'],
		],
	],
] );

Kirki::add_field( 'aspen_theme', [
	'type'        => 'typography',
	'settings'    => 'secondary_nav_typography',
	'label'       => esc_html__( 'Secondary Nav Typography', 'aspen' ),
	'section'     => 'typography_nav',
	'default'     => [
		'font-family'    => 'Roboto',
		'color'          => '#333333',
		'font-size'		 => '16px',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => ['.secondary a'],
		],
	],
] );


Kirki::add_field( 'aspen_theme', [
	'type'        => 'typography',
	'settings'    => 'super_nav_typography',
	'label'       => esc_html__( 'Super Nav Typography', 'aspen' ),
	'section'     => 'typography_nav',
	'default'     => [
		'font-family'    => 'Roboto',
		'color'          => '#aaa',
		'font-size'		 => '16px',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => ['.super a'],
		],
	],
] );