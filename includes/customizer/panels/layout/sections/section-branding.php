<?php

Kirki::add_section( 'layout_branding', array(
    'title'          => esc_html__( 'Branding', 'aspen' ),
    'description'    => esc_html__( 'My section description.', 'kirki' ),
    'panel'          => 'aspen_layout',
    'priority'       => 40,
) );

Kirki::add_field( 'aspen_theme', [
	'type'        => 'toggle',
	'settings'    => 'include_branding',
	'label'       => esc_html__( 'Include branding area', 'aspen' ),
	'section'     => 'layout_branding',
	'default'     => '1',
	'priority'    => 10,
] );

Kirki::add_field( 'aspen_theme', [
	'type'        => 'toggle',
	'settings'    => 'show_tagline',
	'label'       => esc_html__( 'Show tagline', 'aspen' ),
	'section'     => 'layout_branding',
	'default'     => '1',
	'priority'    => 10,
] );

Kirki::add_field( 'aspen_theme', [
	'type'        => 'radio-buttonset',
	'settings'    => 'branding_justification',
	'label'       => esc_html__( 'Justify', 'aspen' ),
	'section'     => 'layout_branding',
	'default'     => 'left',
	'priority'    => 10,
	'choices'     => [
		'left'   => esc_html__( 'Left', 'kirki' ),
		'center' => esc_html__( 'Center', 'kirki' ),
		'right'  => esc_html__( 'Right', 'kirki' ),
	],
] );

Kirki::add_field( 'aspen_theme', [
	'type'        => 'radio-buttonset',
	'settings'    => 'branding_spacing',
	'label'       => esc_html__( 'Spacing', 'aspen' ),
	'section'     => 'layout_branding',
	'default'     => 'normal',
	'priority'    => 10,
	'choices'     => [
		'none'   => esc_html__( 'None', 'aspen' ),
		'dense'   => esc_html__( 'Dense', 'aspen' ),
		'normal' => esc_html__( 'Normal', 'aspen' ),
		'extra'  => esc_html__( 'Extra', 'aspen' ),
	],
] );

Kirki::add_field( 'aspen_theme', [
	'type'        => 'color',
	'settings'    => 'branding_background',
	'label'       => __( 'Background Color', 'aspen' ),
	'description' => esc_html__( 'This is a color control - without alpha channel.', 'aspen' ),
	'section'     => 'layout_branding',
	'default'     => '#0088CC',
	'choices'     => [
		'alpha' => true,
	],
] );

Kirki::add_field( 'aspen_theme', [
	'type'        => 'toggle',
	'settings'    => 'square_branding',
	'label'       => esc_html__( 'Make square', 'aspen' ),
	'section'     => 'layout_branding',
	'default'     => '1',
] );