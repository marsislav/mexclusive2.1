<?php
/**
 * Theme customizer
 *
 * @package mexclusive21
 */

function mexclusive21_customizer($wp_customize) {

	// Slider section
	$wp_customize->add_section(
		'sec_slider',
		array(
			'title'       => __('Slider Settings', 'mexclusive21'),
			'description' => __('Home page slider settings', 'mexclusive21'),
		)
	);

	// Slider fields
	for ($i = 1; $i <= 3; $i++) {
		// Slider page
		$wp_customize->add_setting(
			'set_slider_page' . $i,
			array(
				'type'              => 'theme_mod',
				'default'           => '',
				'sanitize_callback' => 'absint',
			)
		);

		$wp_customize->add_control(
			'set_slider_page' . $i,
			array(
				'label'       => __('Set slider page', 'mexclusive21') . ' ' . $i,
				'description' => __('Select page for slider', 'mexclusive21') . ' ' . $i,
				'section'     => 'sec_slider',
				'type'        => 'dropdown-pages',
			)
		);

		// Slider button text
		$wp_customize->add_setting(
			'set_slider_button_text' . $i,
			array(
				'type'              => 'theme_mod',
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control(
			'set_slider_button_text' . $i,
			array(
				'label'       => __('Button text for slider page', 'mexclusive21') . ' ' . $i,
				'description' => __('Enter button text for slider page', 'mexclusive21') . ' ' . $i,
				'section'     => 'sec_slider',
				'type'        => 'text',
			)
		);

		// Slider button URL
		$wp_customize->add_setting(
			'set_slider_url' . $i,
			array(
				'type'              => 'theme_mod',
				'default'           => '',
				'sanitize_callback' => 'esc_url_raw',
			)
		);

		$wp_customize->add_control(
			'set_slider_url' . $i,
			array(
				'label'       => __('URL for slider page', 'mexclusive21') . ' ' . $i,
				'description' => __('Enter URL for button on slider page', 'mexclusive21') . ' ' . $i,
				'section'     => 'sec_slider',
				'type'        => 'url',
			)
		);
	}

	// Home and blog settings section
	$wp_customize->add_section(
		'sec_home_page',
		array(
			'title'       => __('Home page products and blog settings', 'mexclusive21'),
			'description' => __('Settings for homepage and blog', 'mexclusive21'),
		)
	);

	//Description for Our product section in home page

	$wp_customize->add_setting(
		'set_shop_descripton',

		array(
			'type'              => 'theme_mod',
			'default'           => '',
			'sanitize_callback' => 'wp_kses_post',
		)
	);

	$wp_customize->add_control(
		'set_shop_descripton',
		array(
			'label'       => __('Shop description', 'mexclusive21'),
			'description' => __('Enter your description for products in home-page', 'mexclusive21'),
			'section'     => 'sec_home_page',
			'type'        => 'text',
		)
	);

	//end description for Our product section in home page


	
	$wp_customize->add_control(
		'set_slider_button_text' . $i,
		array(
			'label'       => __('Button text for slider page', 'mexclusive21') . ' ' . $i,
			'description' => __('Enter button text for slider page', 'mexclusive21') . ' ' . $i,
			'section'     => 'sec_slider',
			'type'        => 'text',
		)
	);


	// Popular products max number
	$wp_customize->add_setting(
		'set_popular_max_num',
		array(
			'type'              => 'theme_mod',
			'default'           => '',
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'set_popular_max_num',
		array(
			'label'       => __('Popular products max number', 'mexclusive21'),
			'description' => __('Set maximum number of popular products', 'mexclusive21'),
			'section'     => 'sec_home_page',
			'type'        => 'number',
		)
	);

	// Popular products max columns
	$wp_customize->add_setting(
		'set_popular_max_col',
		array(
			'type'              => 'theme_mod',
			'default'           => '',
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'set_popular_max_col',
		array(
			'label'       => __('Popular products max columns', 'mexclusive21'),
			'description' => __('Set maximum columns of popular products', 'mexclusive21'),
			'section'     => 'sec_home_page',
			'type'        => 'number',
		)
	);

	// New products max number
	$wp_customize->add_setting(
		'set_new_arrivals_max_num',
		array(
			'type'              => 'theme_mod',
			'default'           => '',
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'set_new_arrivals_max_num',
		array(
			'label'       => __('New products max number', 'mexclusive21'),
			'description' => __('Set maximum number of new products', 'mexclusive21'),
			'section'     => 'sec_home_page',
			'type'        => 'number',
		)
	);

	// New products max columns
	$wp_customize->add_setting(
		'set_new_arrivals_max_col',
		array(
			'type'              => 'theme_mod',
			'default'           => '',
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'set_new_arrivals_max_col',
		array(
			'label'       => __('New products max columns', 'mexclusive21'),
			'description' => __('Set maximum columns of new products', 'mexclusive21'),
			'section'     => 'sec_home_page',
			'type'        => 'number',
		)
	);

	// Deal of the week - is it active?
	$wp_customize->add_setting(
		'set_deal_show',
		array(
			'type'              => 'theme_mod',
			'default'           => '',
			'sanitize_callback' => 'mexclusive21_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'set_deal_show',
		array(
			'label'   => __('Show deal of the week?', 'mexclusive21'),
			'section' => 'sec_home_page',
			'type'    => 'checkbox',
		)
	);

	// Deal of the week product - if active
	$wp_customize->add_setting(
		'set_deal',
		array(
			'type'              => 'theme_mod',
			'default'           => '',
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'set_deal',
		array(
			'label'       => __('Deal of the week product ID', 'mexclusive21'),
			'description' => __('Set product ID for the deal of the week', 'mexclusive21'),
			'section'     => 'sec_home_page',
			'type'        => 'number',
		)
	);

	// Footer settings
	$wp_customize->add_section(
		'mexclusive21_footer_options',
		array(
			'title'       => __('Footer Options', 'mexclusive21'),
			'description' => __('You can change footer options from here.', 'mexclusive21'),
		)
	);

	// Copyright info
	$wp_customize->add_setting(
		'set_copyright',

		array(
			'type'              => 'theme_mod',
			'default'           => '',
			'sanitize_callback' => 'wp_kses_post',
		)
	);

	$wp_customize->add_control(
		'set_copyright',
		array(
			'label'       => __('Copyright info', 'mexclusive21'),
			'description' => __('Enter your copyright information here', 'mexclusive21'),
			'section'     => 'mexclusive21_footer_options',
			'type'        => 'text',
		)
	);

	// Footer background color
	$wp_customize->add_setting(
		'footer_background_color',
		array(
			'default'           => '#f0f0f0',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'footer_background_color',
			array(
				'label'    => __('Footer Background Color', 'mexclusive21'),
				'section'  => 'mexclusive21_footer_options',
				'settings' => 'footer_background_color',
			)
		)
	);

	// Footer text color
	$wp_customize->add_setting(
		'footer_text_color',
		array(
			'default'           => '#000000',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'footer_text_color',
			array(
				'label'    => __('Footer Text Color', 'mexclusive21'),
				'section'  => 'mexclusive21_footer_options',
				'settings' => 'footer_text_color',
			)
		)
	);

	// Footer link color
	$wp_customize->add_setting(
		'footer_link_color',
		array(
			'default'           => '#3366cc',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'footer_link_color',
			array(
				'label'    => __('Footer Link Color', 'mexclusive21'),
				'section'  => 'mexclusive21_footer_options',
				'settings' => 'footer_link_color',
			)
		)
	);

	// Footer layout
	$wp_customize->add_setting(
		'mexclusive21_footer_layout',
		array(
			'default'           => '3,3,3,3',
			'transport'         => 'postMessage',
			'sanitize_callback' => 'sanitize_text_field',
			'validate_callback' => 'mexclusive21_validate_footer_layout',
		)
	);

	$wp_customize->add_control(
		'mexclusive21_footer_layout',
		array(
			'type'     => 'text',
			'label'    => __('Footer Layout', 'mexclusive21'),
			'section'  => 'mexclusive21_footer_options',
		)
	);

	// Footer Menu - is active?
	$wp_customize->add_setting(
		'set_footer_menu_show',
		array(
			'type'              => 'theme_mod',
			'default'           => '',
			'sanitize_callback' => 'mexclusive21_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'set_footer_menu_show',
		array(
			'label'   => __('Show footer menu?', 'mexclusive21'),
			'section' => 'mexclusive21_footer_options',
			'type'    => 'checkbox',
		)
	);
}

add_action('customize_register', 'mexclusive21_customizer');

function mexclusive21_validate_footer_layout($validity, $value) {
	if (!preg_match('/^([1-9]|1[012])(,([1-9]|1[012]))*$/', $value)) {
		$validity->add('invalid_footer_layout', esc_html__('Footer layout is invalid', 'mexclusive21'));
	}
	return $validity;
}

function mexclusive21_sanitize_checkbox($checked) {
	return ((isset($checked) && true == $checked) ? true : false);
}

function mexclusive21_customize_register($wp_customize) {
	// Add section for background settings
	$wp_customize->add_section(
		'background_settings',
		array(
			'title'    => __('Background Settings', 'mexclusive21'),
			'priority' => 30,
		)
	);

	// Add setting for linear gradient background start color
	$wp_customize->add_setting(
		'background_gradient_start_color',
		array(
			'default'           => '#1b7dff', // Default color
			'sanitize_callback' => 'sanitize_hex_color', // Sanitization function
		)
	);

	// Add control for linear gradient background start color
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'background_gradient_start_color',
			array(
				'label'    => __('Gradient Start Color', 'mexclusive21'),
				'section'  => 'background_settings',
			)
		)
	);

	// Add setting for linear gradient background end color
	$wp_customize->add_setting(
		'background_gradient_end_color',
		array(
			'default'           => '#ffffff', // Default color
			'sanitize_callback' => 'sanitize_hex_color', // Sanitization function
		)
	);

	// Add control for linear gradient background end color
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'background_gradient_end_color',
			array(
				'label'    => __('Gradient End Color', 'mexclusive21'),
				'section'  => 'background_settings',
			)
		)
	);
}

add_action('customize_register', 'mexclusive21_customize_register');

function mexclusive21_customizer_styles() {
	$start_color = get_theme_mod('background_gradient_start_color', '#1b7dff');
	$end_color   = get_theme_mod('background_gradient_end_color', 'rgba(255, 255, 255, 0)'); // Set the default end color to transparent
	?>
    <style type="text/css">
        .features {
            background-image: linear-gradient(to bottom, <?php echo esc_attr($start_color); ?>, <?php echo esc_attr($end_color); ?>);
        }
    </style>
	<?php
}

add_action('wp_head', 'mexclusive21_customizer_styles');

function mexclusive21_customizer_settings($wp_customize) {
    $wp_customize->add_section('social_networks_section', array(
        'title' => __('Social Networks & Contacts', 'mexcusive2.1'),
        'priority' => 30,
    ));

    // Facebook
    $wp_customize->add_setting('facebook_url', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('facebook_url', array(
        'label' => __('Facebook URL', 'theme'),
        'section' => 'social_networks_section',
        'type' => 'text',
    ));

    // Twitter
    $wp_customize->add_setting('twitter_url', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('twitter_url', array(
        'label' => __('Twitter URL', 'theme'),
        'section' => 'social_networks_section',
        'type' => 'text',
    ));

    // Instagram
    $wp_customize->add_setting('instagram_url', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('instagram_url', array(
        'label' => __('Instagram URL', 'theme'),
        'section' => 'social_networks_section',
        'type' => 'text',
    ));
}
add_action('customize_register', 'mexclusive21_customizer_settings');
