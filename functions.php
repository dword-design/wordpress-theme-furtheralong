<?php

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
?>
