<?php

Kirki::add_section( 'layout_super_nav', array(
    'title'          => esc_html__( 'Super Nav', 'aspen' ),
    'description'    => esc_html__( 'My section description.', 'kirki' ),
    'panel'          => 'aspen_layout',
    'priority'       => 40,
) );

Kirki::add_field( 'aspen_theme', [
	'type'        => 'toggle',
	'settings'    => 'include_super_nav',
	'label'       => esc_html__( 'Include super nav area', 'aspen' ),
	'section'     => 'layout_super_nav',
	'default'     => '1',
	'priority'    => 10,
] );

Kirki::add_field( 'aspen_theme', [
	'type'        => 'radio-buttonset',
	'settings'    => 'super_nav_justification',
	'label'       => esc_html__( 'Justify', 'aspen' ),
	'section'     => 'layout_super_nav',
	'default'     => 'left',
	'priority'    => 10,
	'choices'     => [
		'flex-start'   => esc_html__( 'Left', 'kirki' ),
		'center' => esc_html__( 'Center', 'kirki' ),
		'flex-end'  => esc_html__( 'Right', 'kirki' ),
		'space-between' => esc_html( 'Spread', '')
	],
] );

Kirki::add_field( 'aspen_theme', [
	'type'        => 'radio-buttonset',
	'settings'    => 'super_nav_spacing',
	'label'       => esc_html__( 'Spacing', 'aspen' ),
	'section'     => 'layout_super_nav',
	'default'     => 'normal',
	'priority'    => 10,
	'choices'     => [
		'dense'   => esc_html__( 'Dense', 'aspen' ),
		'normal' => esc_html__( 'Normal', 'aspen' ),
		'extra'  => esc_html__( 'Extra', 'aspen' ),
	],
] );

Kirki::add_field( 'aspen_theme', [
	'type'        => 'color',
	'settings'    => 'super_nav_background',
	'label'       => __( 'Background Color', 'aspen' ),
	'description' => esc_html__( 'This is a color control - without alpha channel.', 'aspen' ),
	'section'     => 'layout_super_nav',
	'default'     => '#0088CC',
] );

Kirki::add_field( 'aspen_theme', [
	'type'        => 'sortable',
	'settings'    => 'super_nav_order',
	'label'       => esc_html__( 'Display Order', 'kirki' ),
	'section'     => 'layout_super_nav',
	'default'     => [
		'menu',
		'icons',
	],
	'choices'     => [
		'menu' => esc_html__( 'Menu', 'aspen' ),
		'icons' => esc_html__( 'Icons', 'aspen' ),
        'search' => esc_html__( 'Search', 'aspen' )
	],
	'priority'    => 10,
] );