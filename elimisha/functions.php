<?php 

add_action( 'wp_enqueue_scripts', 'my_enqueue_assets' ); 

function my_enqueue_assets() { 

    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' ); 

} 

function emp_customize_register($wp_customize) {
	$wp_customize->add_setting( 'et_divi[footer_copr_text]', array(
		'default'       => 'Kristi Whitman  <a href="http://elimishachildrensproject.org/">Elimisha </a>',
		'type'			=> 'option',
		'capability'	=> 'edit_theme_options',
		'transport'		=> 'postMessage',
		//'sanitize_callback' => 'wp_validate_boolean',
	) );

	$wp_customize->add_control( 'et_divi[footer_copr_text]', array(
		'label'		=> __( 'Enter Copyright Text', 'Divi' ),
		'section'	=> 'et_divi_footer_elements',
		'type'      => 'text',
	) );
}
add_action( 'customize_register', 'emp_customize_register', 11 );


// CUSTOM FUNCTIONALITIES

	// ACF Options Page
		if ( function_exists('acf_add_options_page') ) {
			acf_add_options_page();
		}