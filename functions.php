function snazzy_theme_customizer( $wp_customize ) {

// Theme Customizer -- Fonts Section

	$wp_customize->add_section( 'snazzy_google_fonts_section', array(
		'title'           => __( 'Fonts', 'snazzy' ),
		'description'     => __( 'Select Google Fonts from the pull-down menu.', 'snazzy' ),
		'priority'        => 30,
	) );

		$font_choices = array(
			'Source Sans Pro:400,700,400italic,700italic' => 'Source Sans Pro',
			'Open Sans:400italic,700italic,400,700' => 'Open Sans',
			'Oswald:400,700' => 'Oswald',
			'Playfair Display:400,700,400italic' => 'Playfair Display',
			'Montserrat:400,700' => 'Montserrat',
			'Raleway:400,700' => 'Raleway',
			'Droid Sans:400,700' => 'Droid Sans',
			'Lato:400,700,400italic,700italic' => 'Lato',
			'Arvo:400,700,400italic,700italic' => 'Arvo',
			'Lora:400,700,400italic,700italic' => 'Lora',
			'Merriweather:400,300italic,300,400italic,700,700italic' => 'Merriweather',
			'Oxygen:400,300,700' => 'Oxygen',
			'PT Serif:400,700' => 'PT Serif',
			'PT Sans:400,700,400italic,700italic' => 'PT Sans',
			'PT Sans Narrow:400,700' => 'PT Sans Narrow',
			'Cabin:400,700,400italic' => 'Cabin',
			'Fjalla One:400' => 'Fjalla One',
			'Francois One:400' => 'Francois One',
			'Josefin Sans:400,300,600,700' => 'Josefin Sans',
			'Libre Baskerville:400,400italic,700' => 'Libre Baskerville',
			'Arimo:400,700,400italic,700italic' => 'Arimo',
			'Ubuntu:400,700,400italic,700italic' => 'Ubuntu',
			'Bitter:400,700,400italic' => 'Bitter',
			'Droid Serif:400,700,400italic,700italic' => 'Droid Serif',
			'Roboto:400,400italic,700,700italic' => 'Roboto',
			'Open Sans Condensed:700,300italic,300' => 'Open Sans Condensed',
			'Roboto Condensed:400italic,700italic,400,700' => 'Roboto Condensed',
			'Roboto Slab:400,700' => 'Roboto Slab',
			'Yanone Kaffeesatz:400,700' => 'Yanone Kaffeesatz',
			'Rokkitt:400' => 'Rokkitt',
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
}
