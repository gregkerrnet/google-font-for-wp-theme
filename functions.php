// This creates the Google Fonts pull-down menu in The Customizer

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
				'description' => __('Select the font for the headings.', 'snazzy'),
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
				'description' => __( 'Select the font for the body.', 'snazzy' ),
				'section' => 'snazzy_google_fonts_section',
				'choices' => $font_choices
			)
		);
}


// This enqueues the Google Font stylesheets

function snazzy_scripts() {

	/* Google Font Stylesheet choices from Customizer */
	$headings_font = esc_html(get_theme_mod('snazzy_headings_fonts'));
	$body_font = esc_html(get_theme_mod('snazzy_body_fonts'));

	if( $headings_font ) {
		wp_enqueue_style( 'snazzy-headings-fonts', 'https://fonts.googleapis.com/css?family='. $headings_font );
	} else {
		wp_enqueue_style( 'snazzy-source-sans', 'https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic');
	}
	if( $body_font ) {
		wp_enqueue_style( 'snazzy-body-fonts', 'https://fonts.googleapis.com/css?family='. $body_font );
	} else {
		wp_enqueue_style( 'snazzy-source-body', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,400italic,700,600');
	}
}

add_action('wp_enqueue_scripts','snazzy_scripts');

// Note that this code does not include the wp_head action hook or wp_add_inline_style() function to output the CSS to the site.
