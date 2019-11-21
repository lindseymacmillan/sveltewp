<?php

Kirki::add_section( 'typography_paragraph', array(
    'title'          => esc_html__( 'Paragraph', 'aspen' ),
    'description'    => esc_html__( 'My section description.', 'kirki' ),
    'panel'          => 'aspen_typography',
    'priority'       => 40,
) );

Kirki::add_field( 'aspen_theme', [
	'type'        => 'typography',
	'settings'    => 'paragraph_typography',
	'label'       => esc_html__( 'Paragraph style', 'aspen' ),
	'section'     => 'typography_paragraph',
	'default'     => [
		'font-family'    => 'Roboto',
		'color'          => '#333333',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => ['p', 'a', '.footer'],
		],
	],
] );