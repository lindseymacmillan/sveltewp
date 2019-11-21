<?php

Kirki::add_section( 'layout_footer', array(
    'title'          => esc_html__( 'Footer', 'aspen' ),
    'description'    => esc_html__( 'My section description.', 'kirki' ),
    'panel'          => 'aspen_layout',
    'priority'       => 40,
) );

Kirki::add_field( 'aspen_theme', [
	'type'        => 'toggle',
	'settings'    => 'include_footer',
	'label'       => esc_html__( 'Include footer area', 'aspen' ),
	'section'     => 'layout_footer',
	'default'     => '1',
	'priority'    => 10,
] );

Kirki::add_field( 'aspen_theme', [
	'type'        => 'toggle',
	'settings'    => 'show_footer_divider',
	'label'       => esc_html__( 'Show footer divider', 'aspen' ),
	'section'     => 'layout_footer',
	'default'     => '1',
	'priority'    => 10,
] );

Kirki::add_field( 'aspen_theme', [
	'type'        => 'radio-buttonset',
	'settings'    => 'footer_direction',
	'label'       => esc_html__( 'Direction', 'aspen' ),
	'section'     => 'layout_footer',
	'default'     => 'horizontal',
	'priority'    => 10,
	'choices'     => [
		'horizontal'   => esc_html__( 'Horizontal', 'aspen' ),
		'vertical' => esc_html__( 'Vertical', 'aspen' ),
	],
] );

Kirki::add_field( 'aspen_theme', [
	'type'        => 'radio-buttonset',
	'settings'    => 'footer_justification',
	'label'       => esc_html__( 'Justify', 'aspen' ),
	'section'     => 'layout_footer',
	'default'     => 'apart',
	'priority'    => 10,
	'choices'     => [
		'left'   => esc_html__( 'Left', 'aspen' ),
        'center' => esc_html__( 'Center', 'aspen' ),
        'apart' => esc_html__( 'Apart', 'aspen' ),
		'right'  => esc_html__( 'Right', 'aspen' ),
	],
] );

Kirki::add_field( 'aspen_theme', [
	'type'        => 'radio-buttonset',
	'settings'    => 'footer_spacing',
	'label'       => esc_html__( 'Spacing', 'aspen' ),
	'section'     => 'layout_footer',
	'default'     => 'normal',
	'priority'    => 10,
	'choices'     => [
		'dense'   => esc_html__( 'Dense', 'aspen' ),
		'normal' => esc_html__( 'Normal', 'aspen' ),
		'extra'  => esc_html__( 'Extra', 'aspen' ),
	],
] );

Kirki::add_field( 'aspen_theme', [
	'type'        => 'sortable',
	'settings'    => 'footer_order',
	'label'       => esc_html__( 'Display Order', 'kirki' ),
	'section'     => 'layout_footer',
	'default'     => [
		'menu',
		'icons',
	],
	'choices'     => [
		'menu' => esc_html__( 'Menu', 'aspen' ),
		'icons' => esc_html__( 'Icons', 'aspen' ),
        'widgets' => esc_html__( 'Widgets', 'aspen' ),
        'search' => esc_html__( 'Search', 'aspen' )
	],
	'priority'    => 10,
] );

Kirki::add_field( 'aspen_theme', [
	'type'        => 'slider',
	'settings'    => 'footer_widgets',
	'label'       => esc_html__( 'Number of widget areas', 'aspen' ),
	'section'     => 'layout_footer',
	'default'     => 2,
	'choices'     => [
		'min'  => 1,
		'max'  => 4,
		'step' => 1,
	],
] );