<?php

Kirki::add_section( 'layout_general', array(
    'title'          => esc_html__( 'General', 'aspen' ),
    'description'    => esc_html__( 'My section description.', 'kirki' ),
    'panel'          => 'aspen_layout',
    'priority'       => 40,
) );

Kirki::add_field( 'aspen_theme', [
	'type'        => 'radio-buttonset',
	'settings'    => 'layout_type',
	'label'       => esc_html__( 'Layout type', 'aspen' ),
	'section'     => 'layout_general',
	'default'     => 'stacked',
	'priority'    => 10,
	'choices'     => [
		'stacked'   => esc_html__( 'Stacked', 'aspen' ),
		'centered'   => esc_html__( 'Centered', 'aspen' ),
		'sidebar' => esc_html__( 'Sidebar', 'aspen' ),
	],
] );

Kirki::add_field( 'aspen_theme', [
	'type'        => 'radio-buttonset',
	'settings'    => 'layout_fit',
	'label'       => esc_html__( 'Layout fit', 'aspen' ),
	'section'     => 'layout_general',
	'default'     => 'narrow',
	'priority'    => 10,
	'choices'     => [
		'narrow'   => esc_html__( 'Narrow', 'aspen' ),
		'wide' => esc_html__( 'Wide', 'aspen' ),
		'full'  => esc_html__( 'Full', 'aspen' ),
	],
] );

Kirki::add_field( 'aspen_theme', [
	'type'        => 'slider',
	'settings'    => 'content_width',
	'label'       => esc_html__( 'Content Width', 'aspen' ),
	'section'     => 'layout_general',
	'default'     => 660,
	'choices'     => [
		'min'  => 400,
		'max'  => 1200,
		'step' => 10,
	],
] );

Kirki::add_field( 'aspen_theme', [
	'type'        => 'slider',
	'settings'    => 'sidebar_width',
	'label'       => esc_html__( 'Sidebar Width', 'aspen' ),
	'section'     => 'layout_general',
	'default'     => 260,
	'choices'     => [
		'min'  => 160,
		'max'  => 380,
		'step' => 10,
	],
] );

Kirki::add_field( 'aspen_theme', [
	'type'        => 'toggle',
	'settings'    => 'fixed_header_enabled',
	'label'       => esc_html__( 'Use fixed header', 'aspen' ),
	'section'     => 'layout_general',
	'default'     => '1',
	'priority'    => 10,
] );
