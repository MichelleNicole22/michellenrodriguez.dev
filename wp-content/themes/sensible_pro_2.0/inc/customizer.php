<?php
/**
 * Sensible Theme Customizer
 *
 * @package sensible
 */
 
function sensible_theme_customizer( $wp_customize ) {
	
	
	// Set site name and description to be previewed in real-time
	$wp_customize->get_setting('blogname')->transport='postMessage';
	$wp_customize->get_setting('blogdescription')->transport='postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	
	// Move sections up 
	$wp_customize->get_section('static_front_page')->priority = 10;
	
	
//-------------------------------------------------------------------------------------------------------------------//
// Move and Replace
//-------------------------------------------------------------------------------------------------------------------// 
	
	//general
	$wp_customize->add_panel( 'sensible_colors_panel', array( 
    'priority'       => 40, 
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', 
    'title'          => esc_html__( 'General Colors', 'sensible' ),
    'description'    => esc_html__( 'Edit your general color settings.', 'sensible' ),
	)); 
	
	//navigation
	$wp_customize->add_panel( 'sensible_nav_panel', array( 
    'priority'       => 11,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => esc_html__( 'Header | Navigation', 'sensible' ),
    'description'    => esc_html__( 'Edit your theme navigation settings.', 'sensible' ), 
	));
	
	// nav 
	$wp_customize->add_section( 'nav', array(
	'title' => esc_html__( 'Navigation', 'sensible' ),
	'priority' => '10', 
	'panel' => 'sensible_nav_panel'
	) );
	
	// colors
	$wp_customize->add_section( 'colors', array(
	'title' => esc_html__( 'Theme Colors', 'sensible' ), 
	'priority' => '10', 
	'panel' => 'sensible_colors_panel'
	) );
	   
	

	// Colors
	$wp_customize->add_setting( 'sensible_text_color', array(
        'default'     => '#8c9398',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_text_color', array(
        'label'	   => esc_html__( 'Text Color', 'sensible' ),
        'section'  => 'colors',
        'settings' => 'sensible_text_color',
		'priority' => 10 
    ))); 
	
    $wp_customize->add_setting( 'sensible_link_color', array( 
        'default'     => '#ea474b',   
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_link_color', array(
        'label'	   => esc_html__( 'Link Color', 'sensible'),
        'section'  => 'colors',
        'settings' => 'sensible_link_color', 
		'priority' => 30
    )));
	
	$wp_customize->add_setting( 'sensible_hover_color', array(
        'default'     => '#ea474b',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_hover_color', array(
        'label'	   => esc_html__( 'Hover Color', 'sensible' ), 
        'section'  => 'colors',
        'settings' => 'sensible_hover_color',
		'priority' => 35 
    )));
	
	$wp_customize->add_setting( 'sensible_custom_color', array( 
        'default'     => '#ea474b', 
		'sanitize_callback' => 'sanitize_hex_color',
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_custom_color', array(
        'label'	   => esc_html__( 'Theme Color', 'sensible' ),
		'description' => esc_html__( 'This color will change various objects like Buttons and Page Header colors', 'sensible' ),
        'section'  => 'colors',
        'settings' => 'sensible_custom_color',  
		'priority' => 20
    )));
	
	$wp_customize->add_setting( 'sensible_site_title_color', array(
        'default'     => '#ea474b', 
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_site_title_color', array(
        'label'	   => esc_html__( 'Site Title Color', 'sensible' ),  
        'section'  => 'colors',
        'settings' => 'sensible_site_title_color',
		'priority' => 40
    )));
	
	$wp_customize->add_setting( 'sensible_blockquote', array(
        'default'     => '#f1f1f1',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_blockquote', array(
        'label'	   => esc_html__( 'Blockquote Background', 'sensible' ),
        'section'  => 'colors',
        'settings' => 'sensible_blockquote', 
		'priority' => 45
    )));
	
	$wp_customize->add_setting( 'sensible_blockquote_border', array(
        'default'     => '#ea474b', 
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_blockquote_border', array(
        'label'	   => esc_html__( 'Blockquote Accent Color', 'sensible' ), 
        'section'  => 'colors',
        'settings' => 'sensible_blockquote_border', 
		'priority' => 50
    ))); 
	
	$wp_customize->add_setting( 'sensible_entry', array(
        'default'     => '#ffffff', 
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_entry', array(
        'label'	   => esc_html__( 'Entry Title Color', 'sensible' ), 
        'section'  => 'colors',
        'settings' => 'sensible_entry',  
		'priority' => 55
    )));
	
	// Nav
	$wp_customize->add_setting( 'sensible_menu_name', array(
        'default'     => 'Menu',
        'sanitize_callback' => 'sensible_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sensible_menu_name', array(
        'label'	   => esc_html__( 'Mobile Menu Name', 'sensible' ),
        'section'  => 'nav',
        'settings' => 'sensible_menu_name',
		'priority' => 25 
    )));
	
	$wp_customize->add_setting( 'sensible_nav_link_color', array(
        'default'     => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_nav_link_color', array(
        'label'	   => esc_html__( 'Navigation Link Color', 'sensible' ),
        'section'  => 'nav',
        'settings' => 'sensible_nav_link_color',
		'priority' => 70, 
    )));
	
	$wp_customize->add_setting( 'sensible_nav_link_hover_color', array(
        'default'     => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_nav_link_hover_color', array(
        'label'	   => esc_html__( 'Navigation Link Hover Color', 'sensible' ),
        'section'  => 'nav',
        'settings' => 'sensible_nav_link_hover_color', 
		'priority' => 75
    )));
	
	$wp_customize->add_setting( 'sensible_nav_drop_link_color', array( 
        'default'     => '#8c9398',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_nav_drop_link_color', array(
        'label'	   => esc_html__( 'Menu Drop Down Link Color', 'sensible' ),
        'section'  => 'nav',
        'settings' => 'sensible_nav_drop_link_color',
		'priority' => 105
    )));
	
	$wp_customize->add_setting( 'sensible_mobile_menu_color', array(
        'default'     => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_mobile_menu_color', array(
        'label'	   => esc_html__( 'Mobile Menu Text Color', 'sensible' ),
        'section'  => 'nav',
        'settings' => 'sensible_mobile_menu_color',
		'priority' => 110, 
    )));
	
	$wp_customize->add_setting( 'sensible_mobile_menu_bg', array(
        'default'     => '#252525',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_mobile_menu_bg', array(
        'label'	   => esc_html__( 'Mobile Menu Background', 'sensible' ),
        'section'  => 'nav',
        'settings' => 'sensible_mobile_menu_bg',
		'priority' => 115,
    )));
	
	$wp_customize->add_setting( 'sensible_mobile_menu_link', array(
        'default'     => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_mobile_menu_link', array(
        'label'	   => esc_html__( 'Mobile Menu Link', 'sensible' ),
        'section'  => 'nav',
        'settings' => 'sensible_mobile_menu_link',
		'priority' => 120,
    )));
	
	$wp_customize->add_setting( 'sensible_mobile_menu_hover', array(
        'default'     => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_mobile_menu_hover', array(
        'label'	   => esc_html__( 'Mobile Menu Hover', 'sensible' ),
        'section'  => 'nav',
        'settings' => 'sensible_mobile_menu_hover',
		'priority' => 125,
    )));
	
	$wp_customize->add_setting( 'sensible_mobile_menu_hover_bg', array(
        'default'     => '#333333',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_mobile_menu_hover_bg', array(
        'label'	   => esc_html__( 'Mobile Menu Background Hover', 'sensible' ),
        'section'  => 'nav',
        'settings' => 'sensible_mobile_menu_hover_bg',
		'priority' => 130,
    )));
	
	$wp_customize->add_setting( 'sensible_mobile_menu_title', array(
        'default'     => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_mobile_menu_title', array(
        'label'	   => esc_html__( 'Mobile Menu Title', 'sensible' ),
        'section'  => 'nav',
        'settings' => 'sensible_mobile_menu_title',
		'priority' => 140,
    )));
	
	$wp_customize->add_setting( 'sensible_mobile_menu_title_bg', array(
        'default'     => '#111111',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_mobile_menu_title_bg', array(
        'label'	   => esc_html__( 'Mobile Menu Title Background', 'sensible' ),
        'section'  => 'nav',
        'settings' => 'sensible_mobile_menu_title_bg',
		'priority' => 145,
    )));
	
	
	 
	//Secondary Header
	$wp_customize->add_section( 'sensible_header_options' , array(  
	    'title'       => esc_html__( 'Secondary Header', 'sensible' ),
	    'priority'    => 39,
	    'description' => esc_html__( 'Edit your Secondary Header options.', 'sensible' ),
		'panel'		  => 'sensible_nav_panel',
	));
	
    $wp_customize->add_setting(
        'active_secondary',
        array(
            'sanitize_callback' => 'sensible_sanitize_checkbox',
            'default' => 0,
    ));
	
    $wp_customize->add_control( 
        'active_secondary',
        array(
            'type' => 'checkbox',
            'label' => esc_html__('Hide Secondary Header', 'sensible'),
            'section' => 'sensible_header_options',  
            'priority' => 10,           
    ));
	
	$wp_customize->add_setting( 'sensible_secondary_header_bg', array( 
        'default'     => '#242830',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_secondary_header_bg', array(
        'label'	   => esc_html__( 'Secondary Header Background', 'sensible' ), 
        'section'  => 'sensible_header_options',
        'settings' => 'sensible_secondary_header_bg',
		'priority' => 20
    )));
	
	$wp_customize->add_setting( 'sensible_secondary_header_text', array( 
        'default'     => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_secondary_header_text', array(
        'label'	   => esc_html__( 'Secondary Header Text', 'sensible' ), 
        'section'  => 'sensible_header_options',
        'settings' => 'sensible_secondary_header_text',
		'priority' => 20
    )));
	
	$wp_customize->add_setting( 'sensible_secondary_social_color', array( 
        'default'     => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_secondary_social_color', array(
        'label'	   => esc_html__( 'Secondary Header Social Icon', 'sensible' ), 
        'section'  => 'sensible_header_options',
        'settings' => 'sensible_secondary_social_color',
		'priority' => 30
    )));
	
	$wp_customize->add_setting( 'sensible_secondary_social_color_hover', array( 
        'default'     => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_secondary_social_color_hover', array(
        'label'	   => esc_html__( 'Secondary Header Social Icon Hover', 'sensible' ), 
        'section'  => 'sensible_header_options',
        'settings' => 'sensible_secondary_social_color_hover',
		'priority' => 40 
    )));
	
	
	
	//Animations
	$wp_customize->add_section( 'sensible_animations' , array(  
	    'title'       => esc_html__( 'Animations', 'sensible' ),
	    'priority'    => 39,
	    'description' => esc_html__( 'We can make things fly across the screen.', 'sensible' ),
	));
	
    $wp_customize->add_setting(
        'sensible_animate',
        array(
            'sanitize_callback' => 'sensible_sanitize_checkbox',
            'default' => 0,
    ));
	
    $wp_customize->add_control( 
        'sensible_animate',
        array(
            'type' => 'checkbox',
            'label' => esc_html__('Check this box to disable animations.', 'sensible'),
            'section' => 'sensible_animations',  
            'priority' => 1,           
    ));

    // Logo upload
    $wp_customize->add_section( 'sensible_logo_section' , array(  
	    'title'       => esc_html__( 'Logo and Icons', 'sensible' ),
	    'priority'    => 21, 
	    'description' => esc_html__( 'Upload a logo to replace the default site name and description in the header. Also, upload your site favicon and Apple Icons.', 'sensible' ),
	));

	$wp_customize->add_setting( 'sensible_logo', array(
		'sanitize_callback' => 'esc_url_raw',
	));

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'sensible_logo', array( 
		'label'    => esc_html__( 'Logo', 'sensible' ),
		'type' 			=> 'image',
		'section'  => 'sensible_logo_section', 
		'settings' => 'sensible_logo',
		'priority' => 1,
	))); 
	
	// Logo Width
	$wp_customize->add_setting( 'logo_size', array(
	    'sanitize_callback' => 'sensible_sanitize_text',
		'default'	        => '200'  
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'logo_size', array( 
		'type'        => 'number',
		'label'    => esc_html__( 'Change the width of the Logo in PX.', 'sensible' ),
		'description' => esc_html__( 'Only enter numeric value', 'sensible' ),
		'section'  => 'sensible_logo_section', 
		'settings' => 'logo_size',  
		'priority'   => 2 
	)));
	
	//Favicon Upload
	$wp_customize->add_setting(
		'site_favicon',
		array( 
			'sanitize_callback' => 'esc_url_raw', 
	));
	
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'site_favicon',
            array(
               'label'          => esc_html__( 'Upload your favicon (16x16 pixels)', 'sensible' ),
			   'type' 			=> 'image',
               'section'        => 'sensible_logo_section',
               'settings'       => 'site_favicon',
               'priority' => 2,
    )));
	
    //Apple touch icon 144
    $wp_customize->add_setting(
        'apple_touch_144',
        array(
            'default-image' => '',
			'sanitize_callback' => 'esc_url_raw',
    ));
	
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'apple_touch_144',
            array(
               'label'          => esc_html__( 'Upload your Apple Touch Icon (144x144 pixels)', 'sensible' ),
               'type'           => 'image',
               'section'        => 'sensible_logo_section', 
               'settings'       => 'apple_touch_144',
               'priority'       => 11,
    )));
	
    //Apple touch icon 114
    $wp_customize->add_setting(
        'apple_touch_114',
        array(
            'default-image' => '',
			'sanitize_callback' => 'esc_url_raw', 
    ));

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'apple_touch_114',
            array(
               'label'          => esc_html__( 'Upload your Apple Touch Icon (114x114 pixels)', 'sensible' ),
               'type'           => 'image',
               'section'        => 'sensible_logo_section',
               'settings'       => 'apple_touch_114',
               'priority'       => 12,
    )));
	
    //Apple touch icon 72
    $wp_customize->add_setting(
        'apple_touch_72',
        array(
            'default-image' => '',
			'sanitize_callback' => 'esc_url_raw',
    ));
	
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'apple_touch_72',
            array(
               'label'          => esc_html__( 'Upload your Apple Touch Icon (72x72 pixels)', 'sensible' ),
               'type'           => 'image',
               'section'        => 'sensible_logo_section',
               'settings'       => 'apple_touch_72',
               'priority'       => 13,
    )));
	
    //Apple touch icon 57
    $wp_customize->add_setting(
        'apple_touch_57',
        array(
            'default-image' => '',
			'sanitize_callback' => 'esc_url_raw',
    ));
	
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'apple_touch_57',
            array(
               'label'          => esc_html__( 'Upload your Apple Touch Icon (57x57 pixels)', 'sensible' ),
               'type'           => 'image',
               'section'        => 'sensible_logo_section',
               'settings'       => 'apple_touch_57',
               'priority'       => 14,
    )));
	
	// Home Hero Section
	$wp_customize->add_panel( 'hero_panel', array(
    'priority'       => 25,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => esc_html__( 'Home Hero Section', 'sensible' ),
    'description'    => esc_html__( 'Edit your the top of your home page.  Use Slider, Video, or Static Hero Image.', 'sensible' ),
	));
	
	// Slider Section
	$wp_customize->add_section( 'sensible_slider_section', array(
		'title'          => esc_html__( 'Slider', 'sensible' ),
		'priority'       => 24,
		'description' => __( 'Edit your Slider settings here. Add your slides under <strong>Posts -> Add New</strong> then set the post format to <strong>Image</strong>. Adding one slide will set a single background.', 'sensible' ), 
		'panel' => 'hero_panel',
	));
	
	$wp_customize->add_setting('active_slider',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_checkbox', 
	)); 
	
	$wp_customize->add_control(
    'active_slider', 
    array(
        'type' => 'checkbox',
        'label' => esc_html__( 'Hide Slider', 'sensible' ),
        'section' => 'sensible_slider_section', 
		'priority'   => 10
    ));
	
	// Slider Speed Number
	$wp_customize->add_setting( 'slider_speed' , 
	array( 
		'sanitize_callback' => 'sensible_sanitize_text', 
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'slider_speed', array(
    'label' => esc_html__( 'Slider Speed', 'sensible' ),
	'description' => esc_html__( 'Change the speed of your slider in ms (1000 = 1s)', 'sensible' ),
    'section' => 'sensible_slider_section', 
    'settings' => 'slider_speed',
	'priority'   => 20
	) ) );
	
	// Slider Height
	$wp_customize->add_setting( 'slider_height',  
	array( 
		'sanitize_callback' => 'sensible_sanitize_text', 
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'slider_height', array(
    'label' => esc_html__( 'Slider Height', 'sensible' ), 
	'description' => esc_html__( 'Adjust the height of your slider. Just enter in a numerical value, as the px is already coded in (ex. 650).', 'sensible' ),  
    'section' => 'sensible_slider_section', 
    'settings' => 'slider_height',
	'priority'   => 25
	) ) ); 
	
	
	
	// Banner Section 
	$wp_customize->add_section( 'sensible_video_section', array(
		'title'          => esc_html__( 'Video Banner Option', 'sensible' ),
		'priority'       => 24,
		'description' => __( 'Please select the <strong>Home Page - Video</strong> template file for your Home page. Then upload your video files with the WordPress Media uploader or to your root folder and type the URLs (ex: video_banner.mp4) of the video files in the following boxes. If you leave them blank then the featured image of this page will be used instead. It is advised that you convert your video to mp4, webm, and ogv for full browser support, you can find more info on that <a href="http://www.syntaxxx.com/how-to-html5-background-video/">here</a>.</br></br> Video will only play on desktop screens, as mobile devices do not support them. On mobile the featured image is displayed (so you should always set one) and it should be at least 1920x1000 in size for best appearance.', 'sensible' ),
		'panel' => 'hero_panel',
	));
	
	// MP4
	$wp_customize->add_setting( 'sensible_banner_mp4', 
	array(
		'sanitize_callback' => 'sensible_sanitize_text', 	 
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sensible_banner_mp4', array(
    'label' => esc_html__( 'Video Banner .mp4 File', 'sensible' ), 
	'description' => esc_html__( 'ex: video_banner.mp4', 'sensible' ),
    'section' => 'sensible_video_section',
    'settings' => 'sensible_banner_mp4', 
	'priority'   => 60
	))); 
	
	// WEBM
	$wp_customize->add_setting( 'sensible_banner_webm', 
	array(
		'sanitize_callback' => 'sensible_sanitize_text', 	 
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sensible_banner_webm', array(
    'label' => esc_html__( 'Video Banner .webm File', 'sensible' ),
	'description' => esc_html__( 'ex: video_banner.webm', 'sensible' ), 
    'section' => 'sensible_video_section',
    'settings' => 'sensible_banner_webm', 
	'priority'   => 70
	)));
	
	// OGV
	$wp_customize->add_setting( 'sensible_banner_ogv', 
	array(
		'sanitize_callback' => 'sensible_sanitize_text', 	 
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sensible_banner_ogv', array(
    'label' => esc_html__( 'Video Banner .ogv File', 'sensible' ),
	'description' => esc_html__( 'ex: video_banner.ogv', 'sensible' ),  
    'section' => 'sensible_video_section', 
    'settings' => 'sensible_banner_ogv', 
	'priority'   => 80
	)));
	
	// Hero Section
	$wp_customize->add_section( 'sensible_hero_section', array(
		'title'          => esc_html__( 'Static Image Background', 'sensible' ),
		'priority'       => 25, 
		'description' => esc_html__( 'Edit your Background Image. Note: must select Home Page - Hero Background to use this section.', 'sensible'),  
		'panel' => 'hero_panel',
	)); 
	
	// Main Background
	$wp_customize->add_setting( 'sensible_main_bg', array(
		'sanitize_callback' => 'esc_url_raw',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'sensible_main_bg', array( 
		'label'    => esc_html__( 'Hero Image', 'sensible' ),
		'section'  => 'sensible_hero_section',  
		'settings' => 'sensible_main_bg', 
		'priority'   => 20
	) ) );
	
	// Hero Heading
	$wp_customize->add_setting( 'sensible_first_heading' ,
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text',
	    ) 
	);
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sensible_first_heading', array( 
    'label' => esc_html__( 'Hero Heading', 'sensible' ),    
    'section' => 'sensible_hero_section',
    'settings' => 'sensible_first_heading',
	'priority'   => 30
	) ) );
	
	// Hero Button Text
	$wp_customize->add_setting( 'sensible_hero_button_text',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	    ) 
	);
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sensible_hero_button_text', array( 
    'label' => esc_html__( 'Hero Button Text', 'sensible' ),   
    'section' => 'sensible_hero_section',
    'settings' => 'sensible_hero_button_text',  
	'priority'   => 40 
	) ) );
	
	// Page Drop Downs 
	$wp_customize->add_setting('hero_button_url', array( 
		'capability' => 'edit_theme_options', 
        'sanitize_callback' => 'sensible_sanitize_int' 
	));
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hero_button_url', array( 
    	'label' => esc_html__( 'Hero Button URL', 'sensible' ), 
    	'section' => 'sensible_hero_section', 
		'type' => 'dropdown-pages',
    	'settings' => 'hero_button_url',
		'priority'   => 50 
	))); 
	
	// Page URL
	$wp_customize->add_setting( 'page_url_text',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text',
	));  

	$wp_customize->add_control( 'page_url_text', array(
		'type'     => 'url',
		'label'    => esc_html__( 'External URL Option', 'sensible' ), 
		'description' => esc_html__( 'If you use an external URL, leave the Widget Button Link above empty. Must include http:// before any URL.', 'sensible' ), 
		'section'  => 'sensible_hero_section',   
		'settings' => 'page_url_text',
		'priority'   => 60
	)); 
	
	
	// Hero Colors
	$wp_customize->add_section( 'sensible_hero_colors_section', array(
		'title'          => esc_html__( 'Home Hero Colors', 'sensible' ),
		'priority'       => 30, 
		'description' => esc_html__( 'Edit your Home Hero color options', 'sensible'),  
		'panel' => 'hero_panel',
	)); 
	
	$wp_customize->add_setting( 'sensible_slider_text_color', array( 
        'default'     => '#ffffff', 
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_slider_text_color', array(
        'label'	   => esc_html__( 'Text Color', 'sensible'),
        'section'  => 'sensible_hero_colors_section',
        'settings' => 'sensible_slider_text_color', 
		'priority' => 30
    )));
	
	$wp_customize->add_setting( 'sensible_slider_button_bg_color', array( 
        'default'     => '#ea474b', 
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_slider_button_bg_color', array(
        'label'	   => esc_html__( 'Button Color', 'sensible'),
        'section'  => 'sensible_hero_colors_section',
        'settings' => 'sensible_slider_button_bg_color', 
		'priority' => 35
    )));
	
	$wp_customize->add_setting( 'sensible_slider_button_text_color', array( 
        'default'     => '#ffffff', 
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_slider_button_text_color', array(
        'label'	   => esc_html__( 'Button Text Color', 'sensible'),
        'section'  => 'sensible_hero_colors_section',
        'settings' => 'sensible_slider_button_text_color', 
		'priority' => 40
    )));
	
	// Home Page Panel
	$wp_customize->add_panel( 'home_page_panel', array(
    'priority'       => 25,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => esc_html__( 'Home Page Options', 'sensible' ),
    'description'    => esc_html__( 'Edit your Home Page options', 'sensible' ), 
	));
	
	// Social Section 
	$wp_customize->add_section( 'sensible_settings', array(
            'title'          => esc_html__( 'Home Page Social Icons', 'sensible' ),
            'priority'       => 10,
			'panel' => 'home_page_panel',  
    ));
	
	// Home Social Section 
	$wp_customize->add_setting('active_social',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_checkbox',
	)); 
	
	$wp_customize->add_control( 
    'active_social', 
    array(
        'type' => 'checkbox',
        'label' => esc_html__( 'Hide Home Social Section', 'sensible' ),
        'section' => 'sensible_settings', 
		'priority'   => 1
    ));
	
	//Social Text
		$wp_customize->add_setting( 'social_text',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text',
	    )); 

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_text', array(
		'label'    => esc_html__( 'Social Icon Heading Text', 'sensible' ),
		'section'  => 'sensible_settings',
		'settings' => 'social_text',
		'priority'   => 1
	))); 
	
	// Social Icon Background
	$wp_customize->add_setting( 'sensible_social_bg', array( 
        'default'     => '#ffffff', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_social_bg', array(
        'label'	   => esc_html__( 'Background Color', 'sensible' ),
        'section'  => 'sensible_settings',
        'settings' => 'sensible_social_bg', 
		'priority' => 10
    )));
	
	// Social Border
	$wp_customize->add_setting( 'sensible_social_border', array( 
        'default'     => '#dadada', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_social_border', array(
        'label'	   => esc_html__( 'Border Color', 'sensible' ),
        'section'  => 'sensible_settings',
        'settings' => 'sensible_social_border', 
		'priority' => 15
    )));
	
	// Social Text
	$wp_customize->add_setting( 'sensible_social_text', array( 
        'default'     => '#404040', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_social_text', array(
        'label'	   => esc_html__( 'Text Color', 'sensible' ),
        'section'  => 'sensible_settings',
        'settings' => 'sensible_social_text', 
		'priority' => 20
    )));
	
	// Social Icon Colors
	$wp_customize->add_setting( 'sensible_social_color', array( 
        'default'     => '#888888',
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_social_color', array(
        'label'	   => esc_html__( 'Social Icon Color', 'sensible' ),
        'section'  => 'sensible_settings',
        'settings' => 'sensible_social_color', 
		'priority' => 30
    )));
	
	$wp_customize->add_setting( 'sensible_social_color_hover', array( 
        'default'     => '#888888',  
		'sanitize_callback' => 'sanitize_hex_color',  
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_social_color_hover', array(
        'label'	   => esc_html__( 'Social Icon Hover Color', 'sensible' ), 
        'section'  => 'sensible_settings',
        'settings' => 'sensible_social_color_hover', 
		'priority' => 40
    ))); 
	
	// Home Intro Section
	$wp_customize->add_section( 'sensible_intro_section', array(
		'title'          => esc_html__( 'Home Intro Section', 'sensible' ),
		'priority'       => 20,
		'description' => esc_html__( 'Edit your home page Intro section content', 'sensible' ),
		'panel' => 'home_page_panel',
	));
	
	// Home Intro Section
	$wp_customize->add_setting('active_intro',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_checkbox',
	    ) 
	); 
	
	$wp_customize->add_control( 
    'active_intro', 
    array(
        'type' => 'checkbox',
        'label' => esc_html__( 'Hide Home Intro Section', 'sensible' ),
        'section' => 'sensible_intro_section', 
		'priority'   => 1  
    ));
	
	// Intro Text
	$wp_customize->add_setting( 'intro_text' ,
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text',
	));
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'intro_text', array(
		'label'    => esc_html__( 'Intro Title Text', 'sensible' ),
		'section'  => 'sensible_intro_section', 
		'settings' => 'intro_text', 
		'priority'   => 2
	)));
	
	// Intro Text Box
	$wp_customize->add_setting( 'intro_textbox' ,
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text',
	)); 
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'intro_textbox', array( 
    'label' => esc_html__( 'Intro Text Box', 'sensible' ), 
    'section' => 'sensible_intro_section',
    'settings' => 'intro_textbox', 
	'type'     => 'textarea', 
	'priority'   => 3
	)));
	
	// Intro Background
	$wp_customize->add_setting( 'sensible_intro_bg', array( 
        'default'     => '#fafafa', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_intro_bg', array(
        'label'	   => esc_html__( 'Background Color', 'sensible' ),
        'section'  => 'sensible_intro_section',
        'settings' => 'sensible_intro_bg', 
		'priority' => 10
    )));
	
	// Intro Title
	$wp_customize->add_setting( 'sensible_intro_title_color', array( 
        'default'     => '#353535', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_intro_title_color', array(
        'label'	   => esc_html__( 'Title Color', 'sensible' ),
        'section'  => 'sensible_intro_section',
        'settings' => 'sensible_intro_title_color', 
		'priority' => 15
    )));
	
	// Intro Text
	$wp_customize->add_setting( 'sensible_intro_text_color', array( 
        'default'     => '#8c9398', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_intro_text_color', array(
        'label'	   => esc_html__( 'Text Color', 'sensible' ),
        'section'  => 'sensible_intro_section',
        'settings' => 'sensible_intro_text_color', 
		'priority' => 20
    )));
	
	
	// Home Services Section
	$wp_customize->add_section( 'sensible_services_section', array(
		'title'          => esc_html__( 'Home Services Content', 'sensible' ),
		'priority'       => 30,
		'description' => __( 'Edit your home page Services content. To create a Service go to Posts => Add New and create a Post with <strong>Service Options</strong> and set <strong>Post Format to Service</strong>.', 'sensible' ), 
		'panel' => 'home_page_panel',  
	));

	$wp_customize->add_setting('active_services', 
	    array(
	        'sanitize_callback' => 'sensible_sanitize_checkbox',
	    ) 
	);  
	
	$wp_customize->add_control( 
    'active_services', 
    array(
        'type' => 'checkbox',
        'label' => esc_html__( 'Hide Services Section', 'sensible' ), 
        'section' => 'sensible_services_section', 
		'priority'   => 10
    ));
	
	// Services Text
	$wp_customize->add_setting( 'services_text',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text',
	    ) 
	); 

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_text', array(
		'label'    => esc_html__( 'Services Title Text', 'sensible' ),
		'section'  => 'sensible_services_section', 
		'settings' => 'services_text', 
		'priority'   => 20
	) ) );
	
	//Number of Services
    $wp_customize->add_setting( 
        'services_number_display',
        array(
            'sanitize_callback' => 'absint',
            'default'           => '6',
        )
    );
	
    $wp_customize->add_control( 'services_number_display', array(
        'type'        => 'number', 
        'priority'    => 30,
        'section'     => 'sensible_services_section', 
        'label'       => esc_html__('Number of Services', 'sensible'),
		'description'       => esc_html__('Set the number of Services to display.', 'sensible'), 
        'input_attrs' => array( 
            'min'   => 1,
            'max'   => 100,  
            'step'  => 1
        ), 
  	)); 
	
	//Services Columns
    $wp_customize->add_setting( 
        'services_columns_number',
        array(
            'sanitize_callback' => 'absint',
            'default'           => '3',
        )
    );
	
    $wp_customize->add_control( 'services_columns_number', array(
        'type'        => 'number', 
        'priority'    => 40,
        'section'     => 'sensible_services_section', 
        'label'       => esc_html__('Services Columns Width', 'sensible'),
		'description'       => esc_html__('Set the width of the each Services Column. 1 = 100% of the width, 4 = 25% of the width.', 'sensible'), 
        'input_attrs' => array( 
            'min'   => 1,
            'max'   => 5,  
            'step'  => 1
        ), 
  	)); 
	
	// Services Button Area
	$wp_customize->add_setting( 'service_button_text',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text',
	    ) 
	); 

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'service_button_text', array(
		'label'    => esc_html__( 'Services Button Text', 'sensible' ),
		'section'  => 'sensible_services_section', 
		'settings' => 'service_button_text', 
		'priority'   => 50
	) ) );
	
	// Page Drop Downs 
	$wp_customize->add_setting('service_button_url', array( 
		'capability' => 'edit_theme_options', 
        'sanitize_callback' => 'sensible_sanitize_int' 
	));
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'service_button_url', array( 
    	'label' => esc_html__( 'Service Button URL', 'sensible' ), 
    	'section' => 'sensible_services_section', 
		'type' => 'dropdown-pages',
    	'settings' => 'service_button_url',
		'priority'   => 60
	)));
	
	// Services Background
	$wp_customize->add_setting( 'sensible_services_bg', array( 
        'default'     => '#ffffff', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_services_bg', array(
        'label'	   => esc_html__( 'Background Color', 'sensible' ),
        'section'  => 'sensible_services_section',
        'settings' => 'sensible_services_bg', 
		'priority' => 70
    )));
	
	// Services Border
	$wp_customize->add_setting( 'sensible_services_border', array( 
        'default'     => '#dadada', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_services_border', array(
        'label'	   => esc_html__( 'Border Color', 'sensible' ),
        'section'  => 'sensible_services_section',
        'settings' => 'sensible_services_border', 
		'priority' => 75
    )));
	
	// Services Title
	$wp_customize->add_setting( 'sensible_services_title_color', array( 
        'default'     => '#353535', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_services_title_color', array(
        'label'	   => esc_html__( 'Title Color', 'sensible' ), 
        'section'  => 'sensible_services_section',
        'settings' => 'sensible_services_title_color', 
		'priority' => 80
    )));
	
	// Services Text
	$wp_customize->add_setting( 'sensible_services_text_color', array( 
        'default'     => '#404040', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_services_text_color', array(
        'label'	   => esc_html__( 'Text Color', 'sensible' ),
        'section'  => 'sensible_services_section', 
        'settings' => 'sensible_services_text_color',  
		'priority' => 85
    )));
	
	// Services Icon
	$wp_customize->add_setting( 'sensible_services_icon', array( 
        'default'     => '#ffffff', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_services_icon', array(
        'label'	   => esc_html__( 'Icon Color', 'sensible' ),
        'section'  => 'sensible_services_section',
        'settings' => 'sensible_services_icon',  
		'priority' => 90
    )));
	
	// Services Icon Background
	$wp_customize->add_setting( 'sensible_services_icon_bg', array( 
        'default'     => '#ea474b', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_services_icon_bg', array(
        'label'	   => esc_html__( 'Icon Background', 'sensible' ),
        'section'  => 'sensible_services_section',
        'settings' => 'sensible_services_icon_bg',  
		'priority' => 95
    )));
	
	// Services Button
	$wp_customize->add_setting( 'sensible_services_button', array( 
        'default'     => '#ea474b', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_services_button', array(
        'label'	   => esc_html__( 'Button Color', 'sensible' ),
        'section'  => 'sensible_services_section',
        'settings' => 'sensible_services_button',  
		'priority' => 100
    )));
	
	
	
	// Details Section
	$wp_customize->add_section( 'sensible_details_section', array(
		'title'          => esc_html__( 'Home Details Section', 'sensible' ),
		'priority'       => 40,
		'description' => __( 'Customize the Details widget area. The <strong>MT - Details</strong> widget can be added by going to <strong>Appearance => Widgets => Home Details Area</strong>.', 'sensible' ),
		'panel' => 'home_page_panel',
	));
	
	$wp_customize->add_setting('active_details', 
	    array(
	        'sanitize_callback' => 'sensible_sanitize_checkbox',
	));  
	
	$wp_customize->add_control( 
    'active_details', 
    array(
        'type' => 'checkbox',
        'label' => esc_html__( 'Hide Details Section', 'sensible' ), 
        'section' => 'sensible_details_section', 
		'priority'   => 10
    ));
	
	//Detail Background Image
	$wp_customize->add_setting( 'sensible_detail_background',
		array(
			'sanitize_callback' => 'esc_url_raw',
	));
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'sensible_detail_background', array(
		'type'  => 'image', 
		'label'	=> esc_html__( 'Detail Image Background', 'sensible' ),
		'section'	=> 'sensible_details_section',
		'settings' => 'sensible_detail_background', 
		'priority'	=> 20
	)));
	
	// Details Text
	$wp_customize->add_setting( 'sensible_details_text_color', array( 
        'default'     => '#ffffff', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_details_text_color', array(
        'label'	   => esc_html__( 'Text Color', 'sensible' ),
        'section'  => 'sensible_details_section',  
        'settings' => 'sensible_details_text_color',  
		'priority' => 30
    )));
	
	// Details Icon
	$wp_customize->add_setting( 'sensible_details_icon', array( 
        'default'     => '#ffffff', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_details_icon', array(
        'label'	   => esc_html__( 'Icon Color', 'sensible' ),
        'section'  => 'sensible_details_section',
        'settings' => 'sensible_details_icon',   
		'priority' => 40
    )));
	
	// Details Title Color
	$wp_customize->add_setting( 'sensible_details_title', array( 
        'default'     => '#ffffff', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_details_title', array(
        'label'	   => esc_html__( 'Title Color', 'sensible' ),
        'section'  => 'sensible_details_section',
        'settings' => 'sensible_details_title',   
		'priority' => 45
    )));
	
	// Details Under Color
	$wp_customize->add_setting( 'sensible_details_title_divider', array( 
        'default'     => '#ea474b', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_details_title_divider', array(
        'label'	   => esc_html__( 'Divider Color', 'sensible' ),
        'section'  => 'sensible_details_section',
        'settings' => 'sensible_details_title_divider',   
		'priority' => 50
    )));
	
	
	
	// Home Blog Section
	$wp_customize->add_section( 'sensible_blog_section', array(
		'title'          => esc_html__( 'Home Blog Section', 'sensible' ),
		'priority'       => 50,
		'description' => __( 'Edit your home page Blog section. The <strong>MT - Home Posts</strong> widget can be added by going to <strong>Appearance => Widgets => Home Blog Area</strong>.', 'sensible' ),
		'panel' => 'home_page_panel', 
	));

	$wp_customize->add_setting('active_blog',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_checkbox',
	));
	
	$wp_customize->add_control( 
    'active_blog', 
    array(
        'type' => 'checkbox',
        'label' => esc_html__( 'Hide Blog Section', 'sensible' ),
        'section' => 'sensible_blog_section',
		'priority'   => 10
    ));
	
	// Blog Background
	$wp_customize->add_setting( 'sensible_blog_bg_color', array( 
        'default'     => '#fafafa', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_blog_bg_color', array(
        'label'	   => esc_html__( 'Background Color', 'sensible' ),
        'section'  => 'sensible_blog_section',
        'settings' => 'sensible_blog_bg_color',
		'priority' => 30
    )));
	
	// Blog Border
	$wp_customize->add_setting( 'sensible_blog_border', array( 
        'default'     => '#dadada', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_blog_border', array(
        'label'	   => esc_html__( 'Border Color', 'sensible' ),
        'section'  => 'sensible_blog_section', 
        'settings' => 'sensible_blog_border', 
		'priority' => 35
    )));
	
	// Blog Title
	$wp_customize->add_setting( 'sensible_blog_title_color', array( 
        'default'     => '#353535', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_blog_title_color', array(
        'label'	   => esc_html__( 'Title Color', 'sensible' ), 
        'section'  => 'sensible_blog_section', 
        'settings' => 'sensible_blog_title_color', 
		'priority' => 40
    )));
	
	// Blog Text
	$wp_customize->add_setting( 'sensible_blog_text_color', array( 
        'default'     => '#404040', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_blog_text_color', array(
        'label'	   => esc_html__( 'Text Color', 'sensible' ),
        'section'  => 'sensible_blog_section', 
        'settings' => 'sensible_blog_text_color',  
		'priority' => 45
    )));
	
	// Blog Link
	$wp_customize->add_setting( 'sensible_blog_link_color', array( 
        'default'     => '#ea474b', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_blog_link_color', array(
        'label'	   => esc_html__( 'Link Color', 'sensible' ),
        'section'  => 'sensible_blog_section', 
        'settings' => 'sensible_blog_link_color',  
		'priority' => 48
    ))); 
	
	
	// Blog Under Color
	$wp_customize->add_setting( 'sensible_blog_title_divider', array( 
        'default'     => '#ea474b', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_blog_title_divider', array(
        'label'	   => esc_html__( 'Divider Color', 'sensible' ),
        'section'  => 'sensible_blog_section',
        'settings' => 'sensible_blog_title_divider',   
		'priority' => 50
    )));
	
	// Blog CTA
	$wp_customize->add_setting( 'sensible_blog_cta', array( 
        'default'     => '#242830', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_blog_cta', array(
        'label'	   => esc_html__( 'Call-to-Action Background', 'sensible' ),
        'section'  => 'sensible_blog_section',
        'settings' => 'sensible_blog_cta',   
		'priority' => 50
    )));
	
	// Blog CTA Button
	$wp_customize->add_setting( 'sensible_blog_cta_button', array(  
        'default'     => '#ffffff', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_blog_cta_button', array(
        'label'	   => esc_html__( 'Call-to-Action Button', 'sensible' ),
        'section'  => 'sensible_blog_section', 
        'settings' => 'sensible_blog_cta_button',   
		'priority' => 55
    )));
	
	
	
	// Home Team Section
	$wp_customize->add_section( 'sensible_team_section', array(
		'title'          => esc_html__( 'Home Team Member Section', 'sensible' ),
		'priority'       => 60,
		'description' => __( 'Edit your home page Team Member section. To create a Service go to Posts => Add New and create a Post with <strong>Team Member Options</strong> and set <strong>Post Format to Team Member</strong>.', 'sensible' ),  
		'panel' => 'home_page_panel',   
	));

	$wp_customize->add_setting('active_team',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_checkbox',
	));
	
	$wp_customize->add_control( 
    'active_team', 
    array(
        'type' => 'checkbox',
        'label' => esc_html__( 'Hide Team Member Section', 'sensible' ),  
        'section' => 'sensible_team_section',
		'priority'   => 10 
    ));
	
	// Team Text
	$wp_customize->add_setting( 'team_text',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'team_text', array(
		'label'    => esc_html__( 'Team Title Text', 'sensible' ),
		'section'  => 'sensible_team_section', 
		'settings' => 'team_text', 
		'priority'   => 20
	))); 

	$wp_customize->add_setting('active_team',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_checkbox',
	));
	
	//Number of Team Members
    $wp_customize->add_setting( 
        'team_number_display',
        array(
            'sanitize_callback' => 'absint',
            'default'           => '6',
        )
    );
	
    $wp_customize->add_control( 'team_number_display', array(
        'type'        => 'number', 
        'priority'    => 30,
        'section' => 'sensible_team_section', 
        'label'       => esc_html__('Number of Team Members', 'sensible'),
		'description'       => esc_html__('Set the number of Team Members to display.', 'sensible'), 
        'input_attrs' => array( 
            'min'   => 1,
            'max'   => 100,  
            'step'  => 1
        ), 
  	));

	//Team Members Columns
    $wp_customize->add_setting(  
        'team_columns_number',
        array(
            'sanitize_callback' => 'absint',
            'default'           => '3',
        )
    );
	
    $wp_customize->add_control( 'team_columns_number', array(
        'type'        => 'number', 
        'priority'    => 40,
        'section'     => 'sensible_team_section', 
        'label'       => esc_html__('Team Member Columns Width', 'sensible'),
		'description'       => esc_html__('Set the width of the each Team Member Column. 1 = 100% of the width, 4 = 25% of the width.', 'sensible'), 
        'input_attrs' => array( 
            'min'   => 1,
            'max'   => 5,  
            'step'  => 1
        ), 
  	));
	
	// Team Member Button Area
	$wp_customize->add_setting( 'team_button_text',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text',
	    ) 
	); 

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'team_button_text', array(
		'label'    => esc_html__( 'Team Member Button Text', 'sensible' ),
		'section'  => 'sensible_team_section', 
		'settings' => 'team_button_text', 
		'priority'   => 50
	)));
	
	// Team Member Page Drop Downs 
	$wp_customize->add_setting('team_button_url', array( 
		'capability' => 'edit_theme_options', 
        'sanitize_callback' => 'sensible_sanitize_int' 
	));
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'team_button_url', array( 
    	'label' => esc_html__( 'Team Member Button URL', 'sensible' ), 
    	'section' => 'sensible_team_section', 
		'type' => 'dropdown-pages',
    	'settings' => 'team_button_url',
		'priority'   => 60
	)));
	
	// Team Background
	$wp_customize->add_setting( 'sensible_team_bg_color', array( 
        'default'     => '#ffffff', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_team_bg_color', array(
        'label'	   => esc_html__( 'Background Color', 'sensible' ),
        'section'     => 'sensible_team_section', 
        'settings' => 'sensible_team_bg_color',
		'priority' => 60
    )));
	
	// Team Border
	$wp_customize->add_setting( 'sensible_team_border', array( 
        'default'     => '#dadada', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_team_border', array(
        'label'	   => esc_html__( 'Border Color', 'sensible' ),
        'section'  => 'sensible_team_section', 
        'settings' => 'sensible_team_border', 
		'priority' => 65
    )));
	
	// Team Title
	$wp_customize->add_setting( 'sensible_team_title_color', array( 
        'default'     => '#353535', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_team_title_color', array(
        'label'	   => esc_html__( 'Title Color', 'sensible' ), 
        'section'  => 'sensible_team_section', 
        'settings' => 'sensible_team_title_color', 
		'priority' => 70
    )));
	
	// Team Text
	$wp_customize->add_setting( 'sensible_team_text_color', array( 
        'default'     => '#404040', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_team_text_color', array(
        'label'	   => esc_html__( 'Text Color', 'sensible' ),
        'section'  => 'sensible_team_section', 
        'settings' => 'sensible_team_text_color',  
		'priority' => 75
    )));
	
	
	// Team Under Color
	$wp_customize->add_setting( 'sensible_team_title_divider', array( 
        'default'     => '#ea474b', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_team_title_divider', array(
        'label'	   => esc_html__( 'Divider Color', 'sensible' ),
        'section'  => 'sensible_team_section', 
        'settings' => 'sensible_team_title_divider',   
		'priority' => 80 
    )));
	
	
	// Team Icon Color
	$wp_customize->add_setting( 'sensible_team_icon_color', array( 
        'default'     => '#222222', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_team_icon_color', array(
        'label'	   => esc_html__( 'Icon Color', 'sensible' ),
        'section'  => 'sensible_team_section', 
        'settings' => 'sensible_team_icon_color',   
		'priority' => 85
    )));
	
	// Team Icon Hover Color
	$wp_customize->add_setting( 'sensible_team_icon_hover_color', array( 
        'default'     => '#ea474b', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_team_icon_hover_color', array(
        'label'	   => esc_html__( 'Icon Hover Color', 'sensible' ),
        'section'  => 'sensible_team_section', 
        'settings' => 'sensible_team_icon_hover_color',   
		'priority' => 90
    )));
	
	
	// Team Button
	$wp_customize->add_setting( 'sensible_team_button', array( 
        'default'     => '#ea474b', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_team_button', array(
        'label'	   => esc_html__( 'Button Color', 'sensible' ),
        'section'  => 'sensible_team_section', 
        'settings' => 'sensible_team_button',  
		'priority' => 95
    )));
	
	
	
	
	// Front Page Skills
	$wp_customize->add_section( 'frontpage-skills' , array(
    	'title' => esc_html__( 'Home Skills Section', 'sensible' ),
    	'priority' => 70, 
    	'description' => __( 'Pick some skills and put a percentage to them. The <strong>MT - Skills</strong> widget can be added under the <strong>Appearance => Widgets => Home Skills Area</strong>.', 'sensible' ),
		'panel' => 'home_page_panel'
	)); 
	
	$wp_customize->add_setting('active_skill_bar',
	array(
	        'sanitize_callback' => 'sensible_sanitize_checkbox',
	));      
	
	$wp_customize->add_control( 
    'active_skill_bar', 
    array(
        'type' => 'checkbox',
        'label' => esc_html__( 'Hide Skills Section', 'sensible' ),
        'section' => 'frontpage-skills', 
		'priority'   => 1
    ));	
	
	// Skills Background
	$wp_customize->add_setting( 'sensible_skills_bg_color', array( 
        'default'     => '#ffffff', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_skills_bg_color', array(
        'label'	   => esc_html__( 'Background Color', 'sensible' ),
        'section' => 'frontpage-skills', 
        'settings' => 'sensible_skills_bg_color',
		'priority' => 60
    )));
	
	// Skills Title
	$wp_customize->add_setting( 'sensible_skills_title_color', array( 
        'default'     => '#353535', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_skills_title_color', array(
        'label'	   => esc_html__( 'Title Color', 'sensible' ), 
        'section' => 'frontpage-skills', 
        'settings' => 'sensible_skills_title_color', 
		'priority' => 70
    )));
	
	// Skills Text
	$wp_customize->add_setting( 'sensible_skills_text_color', array( 
        'default'     => '#404040', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_skills_text_color', array(
        'label'	   => esc_html__( 'Text Color', 'sensible' ),
        'section' => 'frontpage-skills', 
        'settings' => 'sensible_skills_text_color',  
		'priority' => 75
    )));
	
	// Skill bar color
	$wp_customize->add_setting(
    'skill_bar_color',
    array(
		'default' => '#e9575a',
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'skill_bar_color',
        array(
            'label'      => esc_html__( 'Skill Bar Color', 'sensible' ),
            'section'    => 'frontpage-skills', 
            'settings'   => 'skill_bar_color',
			'priority' => 85
    )));
	
	// Skill Bar Background
	$wp_customize->add_setting(
    'skill_bar_bg_color',
    array(
		'default' => '#dddddd', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'skill_bar_bg_color',
        array(
            'label'      => esc_html__( 'Skill Bar Background', 'sensible' ),
            'section'    => 'frontpage-skills', 
            'settings'   => 'skill_bar_bg_color',
			'priority' => 95 
    )));
	
	
	// Home Widget Section
	$wp_customize->add_section( 'sensible_widget_section', array(
		'title'          => esc_html__( 'Home Widget Section', 'sensible' ),
		'priority'       => 80,
		'description' => __( 'Customize the home widget area. The main content of the widget area can be edited under the <strong>Appearance => Widgets => Home Widget Area</strong>.', 'sensible' ), 
		'panel' => 'home_page_panel',
	));
	
	//Widget Background Image
	$wp_customize->add_setting( 'sensible_main_widget_background',
		array(
			'sanitize_callback' => 'esc_url_raw',
	));
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'sensible_main_widget_background', array(
		'type'  => 'image',
		'label'	=> esc_html__( 'Home Widget Background', 'sensible' ),
		'section'	=> 'sensible_widget_section',
		'settings' => 'sensible_main_widget_background', 
		'priority'	=> 15
	)));
	
	// Number of Widget Columns 
	$wp_customize->add_setting( 'sensible_widget_columns', array(
		'default'	        => 'option1',
		'sanitize_callback' => 'sensible_sanitize_widget_content', 
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sensible_widget_columns', array(
		'label'    => esc_html__( 'Number of Widget Columns', 'sensible' ),
		'description'    => esc_html__( 'Select the number of widget columns to use. 1 Column will take up the entire widget area, while 4 columns will give space to use 4 widgets for content.', 'sensible' ),
		'section'  => 'sensible_widget_section', 
		'settings' => 'sensible_widget_columns',  
		'type'     => 'radio',
		'priority'   => 20,  
		'choices'  => array(
			'option1' => esc_html__( '1 Column', 'sensible' ),
			'option2' => esc_html__( '2 Columns', 'sensible' ),
			'option3' => esc_html__( '3 Columns', 'sensible' ),
			'option4' => esc_html__( '4 Columns', 'sensible' ),
			),
	)));
	
	// Icon
	$wp_customize->add_setting( 'home_widget_icon' , array(
	    'sanitize_callback' => 'sensible_sanitize_text'
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_widget_icon', array( 
		'description' => __( 'Go to fortawesome.github.io/Font-Awesome/cheatsheet/ to choose an icon.<br><br>Example: "fa-arrow-right".<br>', 'sensible' ), 
    	'label' => esc_html__( 'Widget Icon', 'sensible' ),
    	'section' => 'sensible_widget_section',
    	'settings' => 'home_widget_icon',
		'priority'   => 30
	))); 

	// hide section
	$wp_customize->add_setting('active_home_widget', 
	    array(
	        'sanitize_callback' => 'sensible_sanitize_checkbox',
	));
	
	$wp_customize->add_control( 
    'active_home_widget', 
    array(
        'type' => 'checkbox',
        'label' => esc_html__( 'Hide Widget Section', 'sensible' ),  
        'section' => 'sensible_widget_section',
		'priority'   => 1
    ));
	
	// Widget Text
	$wp_customize->add_setting('sensible_widget_button_text', array(
		'sanitize_callback' => 'sensible_sanitize_text' 
	));
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sensible_widget_button_text', array(
		'label' => esc_html__( 'Widget Button Text', 'sensible' ),
		'section' => 'sensible_widget_section',
		'settings' => 'sensible_widget_button_text',
		'priority' => 40
	)));
	
	//Page Drop Downs
	$wp_customize->add_setting( 'sensible_widget_button_url', array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'absint' 
	));
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sensible_widget_button_url', array(
		'label' => esc_html__( 'Widget Button URL', 'sensible' ),
		'section' => 'sensible_widget_section',
		'type' => 'dropdown-pages',
		'settings' => 'sensible_widget_button_url',
		'priority' => 50
	))); 
	
	// Page URL
	$wp_customize->add_setting( 'sensible_page_url_text',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text',
	));  

	$wp_customize->add_control( 'sensible_page_url_text', array( 
		'type'     => 'url',
		'label'    => esc_html__( 'External Button URL Option', 'sensible' ),
		'description' => esc_html__( 'If you use an external URL, leave the Widget Button Link above empty. Must include http:// before any URL.', 'sensible' ),
		'section'  => 'sensible_widget_section',  
		'settings' => 'sensible_page_url_text',
		'priority'   => 60 
	));

	
	// Widget Text
	$wp_customize->add_setting( 'sensible_widget_text_color', array( 
        'default'     => '#ffffff', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_widget_text_color', array(
        'label'	   => esc_html__( 'Text Color', 'sensible' ),
        'section' => 'sensible_widget_section',
        'settings' => 'sensible_widget_text_color',  
		'priority' => 75
    )));
	
	// Widget link
	$wp_customize->add_setting( 'sensible_widget_area_link', array( 
        'default'     => '#ea474b',  
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_widget_area_link', array(
        'label'	   => esc_html__( 'Link Color', 'sensible' ),
        'section' => 'sensible_widget_section',
        'settings' => 'sensible_widget_area_link',  
		'priority' => 76
    )));
	
	// Widget link hover
	$wp_customize->add_setting( 'sensible_widget_area_link_hover', array( 
        'default'     => '#ea474b', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_widget_area_link_hover', array(
        'label'	   => esc_html__( 'Hover Color', 'sensible' ),
        'section' => 'sensible_widget_section',
        'settings' => 'sensible_widget_area_link_hover',  
		'priority' => 77
    )));
	
	
	// Widget Under Color
	$wp_customize->add_setting( 'sensible_widget_title_divider', array( 
        'default'     => '#ea474b', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_widget_title_divider', array(
        'label'	   => esc_html__( 'Divider Color', 'sensible' ),
        'section' => 'sensible_widget_section',
        'settings' => 'sensible_widget_title_divider',   
		'priority' => 80 
    )));
	
	
	// Widget Icon Color
	$wp_customize->add_setting( 'sensible_widget_icon_color', array( 
        'default'     => '#ffffff', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_widget_icon_color', array(
        'label'	   => esc_html__( 'Icon Color', 'sensible' ),
        'section' => 'sensible_widget_section',
        'settings' => 'sensible_widget_icon_color',   
		'priority' => 85
    )));
	
	// Widget CTA Button
	$wp_customize->add_setting( 'sensible_widget_cta_button', array(  
        'default'     => '#ffffff', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_widget_cta_button', array(
        'label'	   => esc_html__( 'Widget Button', 'sensible' ),
        'section' => 'sensible_widget_section',
        'settings' => 'sensible_widget_cta_button',   
		'priority' => 90
    )));
	
	
	
	// Add Map Section
	$wp_customize->add_section( 'sensible_map' , array(
    	'title' => esc_html__( 'Home Map Section', 'sensible' ),
    	'priority' => 90,
    	'description' => esc_html__( 'Customize your home page map', 'sensible' ),
		'panel'		=> 'home_page_panel',
	) ); 
	
	// hide section
	$wp_customize->add_setting('active_home_map', 
	    array(
	        'sanitize_callback' => 'sensible_sanitize_checkbox',
	));
	
	$wp_customize->add_control( 
    'active_home_map', 
    array(
        'type' => 'checkbox',
        'label' => esc_html__( 'Hide Map', 'sensible' ),  
        'section' => 'sensible_map',
		'priority'   => 1 
    ));
	
	// Map Box
	$wp_customize->add_setting( 'sensible_home_map' ,
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text',
	)); 
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sensible_home_map', array( 
    'label' => esc_html__( 'Map URL', 'sensible' ),
	'description' => esc_html__( 'Copy the Google Map embed URL (ex: https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3022) and paste it in the textbox below. The URL is located after the src in the embed snippet. Do not include the width, height, frameborder, or style.', 'sensible' ), 
    'section' => 'sensible_map',
    'settings' => 'sensible_home_map',
	'type'     => 'textarea', 
	'priority'   => 10
	)));
	
	
	// Footer Panel
	$wp_customize->add_panel( 'sensible_footer_panel', array(
    'priority'       => 32,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => esc_html__( 'Footer Options', 'sensible' ),
    'description'    		 => esc_html__( 'Edit your footer options', 'sensible' ),
	)); 
	
	// Add Footer Section
	$wp_customize->add_section( 'footer-social-icons' , array(
    	'title' => esc_html__( 'Footer Social Icons', 'sensible' ),
    	'priority' => 30,
    	'description' => esc_html__( 'Customize the social media icons of the footer area', 'sensible' ),
		'panel' => 'sensible_footer_panel'
	));
	 
	// Add Footer Section
	$wp_customize->add_section( 'footer-custom' , array(
    	'title' => esc_html__( 'Top Footer Option', 'sensible' ),
    	'priority' => 30,
    	'description' => esc_html__( 'Customize the top portion of your footer area', 'sensible' ),
		'panel' => 'sensible_footer_panel'
	));
	
	// Add Footer Section
	$wp_customize->add_section( 'bottom-footer-custom' , array(
    	'title' => esc_html__( 'Bottom Footer Options', 'sensible' ),
    	'priority' => 35,
    	'description' => esc_html__( 'Customize the bottom portion of you footer area', 'sensible' ),
		'panel' => 'sensible_footer_panel'
	));
	
	//Post Content
	$wp_customize->add_setting( 'sensible_footer_home', array(
		'default'	        => 'option1',
		'sanitize_callback' => 'sensible_sanitize_index_content',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sensible_footer_home', array(
		'label'    => esc_html__( 'Footer Form Area', 'sensible' ),
		'section'  => 'bottom-footer-custom', 
		'settings' => 'sensible_footer_home',
		'type'     => 'radio',
		'priority'   => 30, 
		'choices'  => array(
			'option1' => 'Only On Home Page',
			'option2' => 'On All Pages',
			), 
	)));
	
	// Footer Social Section 
	$wp_customize->add_setting('active_footer_social',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_checkbox',
	)); 
	
	$wp_customize->add_control( 
    'active_footer_social', 
    array(
        'type' => 'checkbox',
        'label' => esc_html__( 'Hide Footer Social Section', 'sensible' ),
        'section' => 'footer-social-icons', 
		'priority'   => 10 
    ));
	
	// Social Text
		$wp_customize->add_setting( 'footer_social_text',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text',
	    )); 

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_social_text', array(
		'label'    => esc_html__( 'Footer Social Heading Text', 'sensible' ),
		'section'  => 'footer-social-icons',
		'settings' => 'footer_social_text', 
		'priority'   => 20
	)));
	
	// Social Icon Background
	$wp_customize->add_setting( 'sensible_footer_social_bg', array( 
        'default'     => '#ffffff', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_footer_social_bg', array(
        'label'	   => esc_html__( 'Background Color', 'sensible' ),
       'section'  => 'footer-social-icons',
        'settings' => 'sensible_footer_social_bg', 
		'priority' => 30
    )));
	
	// Social Border
	$wp_customize->add_setting( 'sensible_footer_social_border', array( 
        'default'     => '#dadada', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_footer_social_border', array(
        'label'	   => esc_html__( 'Border Color', 'sensible' ),
        'section'  => 'footer-social-icons',
        'settings' => 'sensible_footer_social_border', 
		'priority' => 40
    )));
	
	// Social Text
	$wp_customize->add_setting( 'sensible_footer_social_text', array( 
        'default'     => '#404040', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_footer_social_text', array(
        'label'	   => esc_html__( 'Text Color', 'sensible' ),
        'section'  => 'footer-social-icons',
        'settings' => 'sensible_footer_social_text', 
		'priority' => 50
    )));
	
	// Social Icon Colors
	$wp_customize->add_setting( 'sensible_footer_social_color', array( 
        'default'     => '#888888',
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_footer_social_color', array(
        'label'	   => esc_html__( 'Social Icon Color', 'sensible' ),
        'section'  => 'footer-social-icons',
        'settings' => 'sensible_footer_social_color', 
		'priority' => 60
    )));
	
	$wp_customize->add_setting( 'sensible_footer_social_color_hover', array( 
        'default'     => '#888888',  
		'sanitize_callback' => 'sanitize_hex_color',  
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_footer_social_color_hover', array(
        'label'	   => esc_html__( 'Social Icon Hover Color', 'sensible' ), 
        'section'  => 'footer-social-icons',
        'settings' => 'sensible_footer_social_color_hover', 
		'priority' => 70
    )));
	
	
		
	// Hide Footer Section 
	$wp_customize->add_setting('active_footer_contact',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_checkbox',
	)); 
	
	$wp_customize->add_control( 
    'active_footer_contact', 
    array(
        'type' => 'checkbox',
        'label' => esc_html__( 'Hide Footer Top Section', 'sensible' ),
        'section' => 'footer-custom', 
		'priority'   => 12 
    ));
	
	// Phone Text
	$wp_customize->add_setting( 'footer_title_text',
	array(
	    'sanitize_callback' => 'sensible_sanitize_text',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_title_text', array(
		'label'    => esc_html__( 'Footer Title Text', 'sensible' ),
		'section'  => 'footer-custom', 
		'settings' => 'footer_title_text', 
		'priority'   => 20
	)));
	
	// Bottom Footer Icon 1
	$wp_customize->add_setting( 'bottom_footer_icon_1', array( 
		'default' => 'fa-map-marker',
	    'sanitize_callback' => 'sensible_sanitize_text',
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bottom_footer_icon_1', array(  
    'label' => esc_html__( 'First Icon', 'sensible' ),  
    'section' => 'footer-custom', 
    'settings' => 'bottom_footer_icon_1', 
	'priority'   => 30 
	)));
	
	// Address Text
	$wp_customize->add_setting( 'first_text',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text',
	)); 

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'first_text', array(
		'label'    => esc_html__( 'Footer First Text', 'sensible' ),
		'section'  => 'footer-custom', 
		'settings' => 'first_text', 
		'priority'   => 40
	)));
	
	// Footer Address
	$wp_customize->add_setting( 'sensible_footer_first',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text',
	));
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sensible_footer_first', array( 
    'label' => esc_html__( 'Footer First Column', 'sensible' ),
    'section' => 'footer-custom',
    'settings' => 'sensible_footer_first', 
	'type'     => 'textarea', 
	'priority'   => 50
	) ) );
	
	// Bottom Footer Icon 2
	$wp_customize->add_setting( 'bottom_footer_icon_2' , array( 
		'default' => 'fa-mobile',
	    'sanitize_callback' => 'sensible_sanitize_text'
	)); 
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bottom_footer_icon_2', array(  
    'label' => esc_html__( 'Second Icon', 'sensible' ),  
    'section' => 'footer-custom',
    'settings' => 'bottom_footer_icon_2',
	'priority'   => 60
	)));
	
	// Phone Text
	$wp_customize->add_setting( 'second_text',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text',
	));
		
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'second_text', array(
		'label'    => esc_html__( 'Footer Second Text', 'sensible' ),
		'section'  => 'footer-custom', 
		'settings' => 'second_text', 
		'priority'   => 70
	)));
	
	// Footer Phone
	$wp_customize->add_setting( 'sensible_footer_second',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sensible_footer_second', array(
    'label' => esc_html__( 'Footer Second Column', 'sensible' ),
    'section' => 'footer-custom',
    'settings' => 'sensible_footer_second',
	'type'     => 'textarea',   
	'priority'   => 80
	)));
	
	// Bottom Footer Icon 3
	$wp_customize->add_setting( 'bottom_footer_icon_3' , array( 
		'default' => 'fa-envelope-o', 
		'sanitize_callback' => 'sensible_sanitize_text' 
	));   
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bottom_footer_icon_3', array(  
    'label' => esc_html__( 'Third Icon', 'sensible' ), 
    'section' => 'footer-custom',
    'settings' => 'bottom_footer_icon_3',
	'priority'   => 90
	)));
	
	// Email Text
	$wp_customize->add_setting( 'third_text',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'third_text', array(
		'label'    => esc_html__( 'Footer Third Text', 'sensible' ),
		'section'  => 'footer-custom',   
		'settings' => 'third_text', 
		'priority'   => 100
	)));
	
	// Footer Contact
	$wp_customize->add_setting( 'sensible_footer_third',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text',
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sensible_footer_third', array(
    'label' => esc_html__( 'Footer Third Column', 'sensible' ),
    'section' => 'footer-custom',
    'settings' => 'sensible_footer_third',  
	'type'     => 'textarea',   
	'priority'   => 110
	)));
	
	$wp_customize->add_setting( 'sensible_top_footer_bg', array(  
        'default'     => '#fafafa',
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_top_footer_bg', array(
        'label'	   => esc_html__( 'Top Footer Background', 'sensible'),  
        'section'  => 'footer-custom',
        'settings' => 'sensible_top_footer_bg', 
		'priority' => 140
    )));
	
	$wp_customize->add_setting( 'sensible_top_footer_title', array(  
        'default'     => '#353535',
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_top_footer_title', array(
        'label'	   => esc_html__( 'Top Footer Title', 'sensible'),  
        'section'  => 'footer-custom',
        'settings' => 'sensible_top_footer_title', 
		'priority' => 145
    )));
	
	$wp_customize->add_setting( 'sensible_top_footer_icon', array(  
        'default'     => '#8c9398',
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_top_footer_icon', array(
        'label'	   => esc_html__( 'Top Footer Icon', 'sensible'),  
        'section'  => 'footer-custom',
        'settings' => 'sensible_top_footer_icon', 
		'priority' => 148
    )));
	
	$wp_customize->add_setting( 'sensible_top_footer_titles', array(  
        'default'     => '#ea474b',
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_top_footer_titles', array(
        'label'	   => esc_html__( 'Top Footer Contact Titles', 'sensible'),  
        'section'  => 'footer-custom',
        'settings' => 'sensible_top_footer_titles', 
		'priority' => 150
    )));
	
	$wp_customize->add_setting( 'sensible_top_footer_text', array(  
        'default'     => '#8c9398',
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_top_footer_text', array(
        'label'	   => esc_html__( 'Top Footer Text', 'sensible'),  
        'section'  => 'footer-custom',
        'settings' => 'sensible_top_footer_text', 
		'priority' => 155
    )));
	
	$wp_customize->add_setting( 'sensible_top_footer_contact_block', array(  
        'default'     => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_top_footer_contact_block', array(
        'label'	   => esc_html__( 'Top Footer Contact Block', 'sensible'),  
        'section'  => 'footer-custom',
        'settings' => 'sensible_top_footer_contact_block', 
		'priority' => 160
    )));
	
	
	
	// Footer Byline Text 
	$wp_customize->add_setting( 'sensible_footerid',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text',
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sensible_footerid', array(
    'label' => esc_html__( 'Footer Byline Text', 'sensible' ),
    'section' => 'bottom-footer-custom', 
    'settings' => 'sensible_footerid',
	'priority'   => 120
	)));
	
	$wp_customize->add_setting( 'sensible_footer_color', array( 
        'default'     => '#242830',  
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_footer_color', array(
        'label'	   => esc_html__( 'Background Color', 'sensible'),
        'section'  => 'bottom-footer-custom',
        'settings' => 'sensible_footer_color',
		'priority' => 125
    )));
	
	$wp_customize->add_setting( 'sensible_footer_text_color', array( 
        'default'     => '#ffffff', 
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_footer_text_color', array(
        'label'	   => esc_html__( 'Text Color', 'sensible'),
        'section'  => 'bottom-footer-custom',
        'settings' => 'sensible_footer_text_color', 
		'priority' => 135
    )));
	
	
	$wp_customize->add_setting( 'sensible_footer_link_color', array(  
        'default'     => '#b3b3b3',
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_footer_link_color', array(
        'label'	   => esc_html__( 'Link Color', 'sensible'),  
        'section'  => 'bottom-footer-custom',
        'settings' => 'sensible_footer_link_color', 
		'priority' => 140
    )));
	
	$wp_customize->add_setting( 'sensible_footer_hover_color', array(  
        'default'     => '#b3b3b3',
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sensible_footer_hover_color', array(
        'label'	   => esc_html__( 'Hover Color', 'sensible'),  
        'section'  => 'bottom-footer-custom',
        'settings' => 'sensible_footer_hover_color', 
		'priority' => 145
    )));
	

    // Choose excerpt or full content on blog
    $wp_customize->add_section( 'sensible_layout_section' , array( 
	    'title'       => esc_html__( 'Blog Layout', 'sensible' ), 
	    'priority'    => 35, 
	    'description' => esc_html__( 'Change blog options for Sensible', 'sensible' ),
	));
	
	// Blog Title
	$wp_customize->add_setting( 'sensible_blog_title',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text',
			'default' => 'Blog'
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sensible_blog_title', array(
		'label'    => esc_html__( 'Posts Page Title', 'sensible' ),
		'section'  => 'sensible_layout_section', 
		'settings' => 'sensible_blog_title',
		'priority'   => 10
	))); 
	
	//Blog Background
	$wp_customize->add_setting( 'sensible_blog_bg', array(
		'sanitize_callback' => 'esc_url_raw',
	));

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'sensible_blog_bg', array( 
		'label'    => esc_html__( 'Posts Page Image', 'sensible' ),
		'section'  => 'sensible_layout_section', 
		'settings' => 'sensible_blog_bg',   
		'priority'   => 20
	)));
	
	//Post Content
	$wp_customize->add_setting( 'sensible_post_content', array(
		'default'	        => 'option1',
		'sanitize_callback' => 'sensible_sanitize_index_content',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sensible_post_content', array(
		'label'    => esc_html__( 'Post content', 'sensible' ),
		'section'  => 'sensible_layout_section',
		'settings' => 'sensible_post_content',
		'type'     => 'radio',
		'priority'   => 30, 
		'choices'  => array(
			'option1' => 'Excerpts',
			'option2' => 'Full content',
			),
	)));
	 
	//Excerpt
    $wp_customize->add_setting(
        'exc_length',
        array(
            'sanitize_callback' => 'absint',
            'default'           => '30',
    ));
	
    $wp_customize->add_control( 'exc_length', array( 
        'type'        => 'number',
        'priority'    => 2, 
        'section'     => 'sensible_layout_section',
        'label'       => esc_html__('Excerpt length', 'sensible'),
		'priority'   => 40,
        'description' => esc_html__('Default: 30 words', 'sensible'), 
        'input_attrs' => array(
            'min'   => 10,
            'max'   => 200,
            'step'  => 5
        ), 
	));
	
	//Excluded Terms
	$wp_customize->add_setting( 'sensible_post_nav_terms',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text',
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sensible_post_nav_terms', array(
		'label'    => esc_html__( 'Post Navigation Excluded Categories', 'sensible' ),
		'description'    => esc_html__( 'If you would like to exclude certain categories from the navigation at the bottom of single post pages, enter in the category numbers in the field below. Separate each number with a comma. For example: 15, 17, 18', 'sensible' ),
		'section'  => 'sensible_layout_section',   
		'settings' => 'sensible_post_nav_terms',
		'priority'   => 50
	))); 
	
	//Shop Section
	$wp_customize->add_section( 'sensible_shop_archive', array(
		'title'          => esc_html__( 'Shop Options', 'sensible' ),
		'priority'       => 46,
		'description' => esc_html__( 'Use this section to edit your Shop archive.', 'sensible' ),
	));
	
	//Archive Background Image
	$wp_customize->add_setting( 'sensible_archive_bg',
		array(
			'sanitize_callback' => 'esc_url_raw',
	));
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'sensible_archive_bg', array( 
		'label'	=> esc_html__( 'Shop Archive Header Background', 'sensible' ),
		'type' 			=> 'image',
		'section'	=> 'sensible_shop_archive',
		'settings' => 'sensible_archive_bg',
		'priority'	=> 10 
	)));
	
	// Fonts  
    $wp_customize->add_section(
        'sensible_typography',
        array(
            'title' => esc_html__('Google Fonts', 'sensible' ),   
            'priority' => 39,
    ));
	
    $font_choices = 
        array(
			'',
			'Open Sans:400italic,700italic,400,700' => 'Open Sans',
			'Oswald:400,700' => 'Oswald',
			'Source Sans Pro:400,700,400italic,700italic' => 'Source Sans Pro',
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
			'Lobster:400' => 'Lobster',
            'Roboto:400,400italic,700,700italic' => 'Roboto',
            'Open Sans Condensed:700,300italic,300' => 'Open Sans Condensed',
            'Roboto Condensed:400italic,700italic,400,700' => 'Roboto Condensed',
            'Roboto Slab:400,700' => 'Roboto Slab',
            'Yanone Kaffeesatz:400,700' => 'Yanone Kaffeesatz',
            'Mandali:400' => 'Mandali',
			'Vesper Libre:400,700' => 'Vesper Libre',
			'NTR:400' => 'NTR',
			'Dhurjati:400' => 'Dhurjati',
			'Faster One:400' => 'Faster One',
			'Mallanna:400' => 'Mallanna',
			'Averia Libre:400,300,700,400italic,700italic' => 'Averia Libre',
			'Galindo:400' => 'Galindo',
			'Titan One:400' => 'Titan One',
			'Abel:400' => 'Abel',
			'Nunito:400,300,700' => 'Nunito',
			'Poiret One:400' => 'Poiret One',
			'Signika:400,300,600,700' => 'Signika',
			'Muli:400,400italic,300italic,300' => 'Muli',
			'Play:400,700' => 'Play',
			'Bree Serif:400' => 'Bree Serif',
			'Archivo Narrow:400,400italic,700,700italic' => 'Archivo Narrow',
			'Cuprum:400,400italic,700,700italic' => 'Cuprum',
			'Noto Serif:400,400italic,700,700italic' => 'Noto Serif',
			'Pacifico:400' => 'Pacifico',
			'Alegreya:400,400italic,700italic,700,900,900italic' => 'Alegreya',
			'Asap:400,400italic,700,700italic' => 'Asap',
			'Maven Pro:400,500,700' => 'Maven Pro',
			'Dancing Script:400,700' => 'Dancing Script',
			'Karla:400,700,400italic,700italic' => 'Karla',
			'Merriweather Sans:400,300,700,400italic,700italic' => 'Merriweather Sans',
			'Exo:400,300,400italic,700,700italic' => 'Exo',
			'Varela Round:400' => 'Varela Round',
			'Cabin Condensed:400,600,700' => 'Cabin Condensed',
			'PT Sans Caption:400,700' => 'PT Sans Caption',
			'Cinzel:400,700' => 'Cinzel',
			'News Cycle:400,700' => 'News Cycle',
			'Inconsolata:400,700' => 'Inconsolata',
			'Architects Daughter:400' => 'Architects Daughter',
			'Quicksand:400,700,300' => 'Quicksand',
			'Titillium Web:400,300,400italic,700,700italic' => 'Titillium Web',
			'Quicksand:400,700,300' => 'Quicksand',
			'Monda:400,700' => 'Monda',
			'Didact Gothic:400' => 'Didact Gothic',
			'Coming Soon:400' => 'Coming Soon',
			'Ropa Sans:400,400italic' => 'Ropa Sans',
			'Tinos:400,400italic,700,700italic' => 'Tinos',
			'Glegoo:400,700' => 'Glegoo',
			'Pontano Sans:400' => 'Pontano Sans',
			'Fredoka One:400' => 'Fredoka One',
			'Lobster Two:400,400italic,700,700italic' => 'Lobster Two',
			'Quattrocento Sans:400,700,400italic,700italic' => 'Quattrocento Sans',
			'Covered By Your Grace:400' => 'Covered By Your Grace',
			'Changa One:400,400italic' => 'Changa One',
			'Marvel:400,400italic,700,700italic' => 'Marvel',
			'BenchNine:400,700,300' => 'BenchNine',
			'Orbitron:400,700,500' => 'Orbitron',
			'Crimson Text:400,400italic,600,700,700italic' => 'Crimson Text',
			'Bangers:400' => 'Bangers',
			'Courgette:400' => 'Courgette',
			
    );
	
	//body 
    $wp_customize->add_setting(
        'sensible_body_size',
        array(
            'sanitize_callback' => 'absint',
            'default'           => '15', 
        )       
    );
    $wp_customize->add_control( 'sensible_body_size', array(
        'type'        => 'number', 
        'priority'    => 10,
        'section'     => 'sensible_typography',
        'label'       => esc_html__('Body font size', 'sensible'),
        'input_attrs' => array(
            'min'   => 10,
            'max'   => 28,
            'step'  => 1
        ),
  	));
    
    $wp_customize->add_setting(
        'headings_fonts',
        array(
            'sanitize_callback' => 'sensible_sanitize_fonts',
    ));
    
    $wp_customize->add_control(
        'headings_fonts',
        array(
            'type' => 'select',
			'priority'    => 20,
            'description' => esc_html__('Select your desired font for the headings. Open Sans is the default Heading font.', 'sensible'),
            'section' => 'sensible_typography',
            'choices' => $font_choices
    ));
    
    $wp_customize->add_setting(
        'body_fonts',
        array(
            'sanitize_callback' => 'sensible_sanitize_fonts',
    ));
    
    $wp_customize->add_control(
        'body_fonts',
        array(
            'type' => 'select',
			'priority'    => 30, 
            'description' => esc_html__( 'Select your desired font for the body. Open Sans is the default Body font.', 'sensible' ), 
            'section' => 'sensible_typography',  
            'choices' => $font_choices 
    )); 

	// Enqueue scripts for real-time preview
	wp_enqueue_script( 'sensible_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
 

}
add_action('customize_register', 'sensible_theme_customizer');

