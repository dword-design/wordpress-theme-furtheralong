<?php

function enqueue_scripts() {
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('style', get_stylesheet_directory_uri() . '/css/style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

function customizer($wp_customize) {

	$wp_customize->add_section('logo', array(
		'title' => __('Logo', 'dusktodawn')
	));
	
	$wp_customize->add_setting('logo');
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo', array(
		'label' => 'Logo',
		'section' => 'logo',
		'settings' => 'logo',
	)));
}

add_action('customize_register', 'customizer');
