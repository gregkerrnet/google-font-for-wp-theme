function snazzy_theme_customizer( $wp_customize ) {

// Theme Customizer -- Fonts Section

	$wp_customize->add_section( 'snazzy_google_fonts_section', array(
		'title'           => __( 'Fonts', 'snazzy' ),
		'description'     => __( 'Select Google Fonts from the pull-down menus.', 'snazzy' ),
		'priority'        => 29,
	) );

		$font_choices = array(
			'Arvo:400,700,400italic,700italic' => 'Arvo',
			'Arimo:400,700,400italic,700italic' => 'Arimo',		
			'Bitter:400,700,400italic' => 'Bitter',	
			'Cabin:400,700,400italic' => 'Cabin',
			'Droid Sans:400,700' => 'Droid Sans',
			'Droid Serif:400,700,400italic,700italic' => 'Droid Serif',			
			'Fjalla One:400' => 'Fjalla One',
			'Francois One:400' => 'Francois One',
			'Josefin Sans:400,300,600,700' => 'Josefin Sans',
			'Lato:400,700,400italic,700italic' => 'Lato',
			'Libre Baskerville:400,400italic,700' => 'Libre Baskerville',			
			'Lora:400,700,400italic,700italic' => 'Lora',			
			'Merriweather:400,300italic,300,400italic,700,700italic' => 'Merriweather',
			'Montserrat:400,700' => 'Montserrat',
			'Open Sans:400italic,700italic,400,700' => 'Open Sans',
			'Open Sans Condensed:700,300italic,300' => 'Open Sans Condensed',			
			'Oswald:400,700' => 'Oswald',
			'Oxygen:400,300,700' => 'Oxygen',
			'Playfair Display:400,700,400italic' => 'Playfair Display',
			'PT Sans:400,700,400italic,700italic' => 'PT Sans',
			'PT Sans Narrow:400,700' => 'PT Sans Narrow',
			'PT Serif:400,700' => 'PT Serif',			
			'Raleway:400,700' => 'Raleway',		
			'Roboto:400,400italic,700,700italic' => 'Roboto',
			'Roboto Condensed:400italic,700italic,400,700' => 'Roboto Condensed',
			'Roboto Slab:400,700' => 'Roboto Slab',
			'Rokkitt:400' => 'Rokkitt',			
			'Source Sans Pro:400,700,400italic,700italic' => 'Source Sans Pro',
			'Ubuntu:400,700,400italic,700italic' => 'Ubuntu',
			'Yanone Kaffeesatz:400,700' => 'Yanone Kaffeesatz',
		);

		$wp_customize->add_setting( 'snazzy_headings_fonts', array(
				'sanitize_callback' => 'snazzy_sanitize_fonts',
			)
		);

		$wp_customize->add_control( 'snazzy_headings_fonts', array(
				'type' => 'select',
				'description' => __('Select your desired font for the headings.', 'snazzy'),
				'section' => 'snazzy_google_fonts_section',
				'choices' => $font_choices
			)
		);

		$wp_customize->add_setting( 'snazzy_body_fonts', array(
				'sanitize_callback' => 'snazzy_sanitize_fonts'
			)
		);

		$wp_customize->add_control( 'snazzy_body_fonts', array(
				'type' => 'select',
				'description' => __( 'Select your desired font for the body.', 'snazzy' ),
				'section' => 'snazzy_google_fonts_section',
				'choices' => $font_choices
			)
		);
}
