<?php

Kirki::add_section( 'typography_headers', array(
    'title'          => esc_html__( 'Headers', 'aspen' ),
    'description'    => esc_html__( 'My section description.', 'kirki' ),
    'panel'          => 'aspen_typography',
    'priority'       => 40,
) );

Kirki::add_field( 'aspen_theme', [
	'type'        => 'typography',
	'settings'    => 'headers_typography',
	'label'       => esc_html__( 'Headers style', 'aspen' ),
	'section'     => 'typography_headers',
	'default'     => [
		'font-family'    => 'Roboto',
		'color'          => '#333333',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => ['h1', 'h2', 'h3', 'h4', 'h5', 'p.has-large-font-size'],
		],
	],
] );