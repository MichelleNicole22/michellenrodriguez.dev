<?php
/**
 * sensible functions and definitions
 *
 * @package sensible
 */


/**
 * register the theme update
 */ 
require 'theme-updates/theme-update-checker.php';
$MyThemeUpdateChecker = new ThemeUpdateChecker(
'sensible_pro_2.0', //Theme slug. Usually the same as the name of its directory.
'http://modernthemes.net/updates/?action=get_metadata&slug=sensible_pro_2.0' //Metadata URL.
);


/**
 * Set the content width based on the theme's design and stylesheet. 
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'sensible_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function sensible_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on sensible, use a find and replace
	 * to change 'sensible' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'sensible', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'sensible-home-blog', 400, 250, true ); 

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'sensible' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'sensible_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
	
	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'image', 'status', 'chat' ) ); 
	
}
endif; // sensible_setup
add_action( 'after_setup_theme', 'sensible_setup' );


/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function sensible_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'sensible' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Header Widget Area', 'sensible' ),
		'id'            => 'header-widget-area',
		'description'   => 'Populate some simple text content for your secondary header here.',  
		'before_widget' => '',
		'after_widget'  => '',  
		'before_title'  => '',
		'after_title'   => '', 
	) );
	register_sidebar( array(
		'name'          => __( 'Header Social Widget', 'sensible' ),
		'id'            => 'header-social-area',
		'description'   => 'Drag the MT - Social Media Icons widget here.', 
		'before_widget' => '',
		'after_widget'  => '',  
		'before_title'  => '',
		'after_title'   => '', 
	) );
	register_sidebar( array(
		'name'          => __( 'Home Social Widget', 'sensible' ),
		'id'            => 'home-social-widget',
		'description'   => 'Drag the MT - Social Media Icons widget here.', 
		'before_widget' => '',
		'after_widget'  => '',  
		'before_title'  => '',
		'after_title'   => '', 
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Social Widget', 'sensible' ),
		'id'            => 'footer-social-widget',
		'description'   => __( 'The widget area for your footer social icons.', 'sensible' ), 
		'before_widget' => '',
		'after_widget'  => '',  
		'before_title'  => '',
		'after_title'   => '', 
	) );
	register_sidebar( array(
		'name'          => __( 'Home Details Area', 'sensible' ),
		'id'            => 'home-details-widget',
		'description'   => __( 'Drag the MT - Details widget here.', 'sensible' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',  
		'before_title'  => '<h6 class="wow animated fadeIn">',
		'after_title'   => '</h6>', 
	) );
	register_sidebar( array(
		'name'          => __( 'Home Blog Area', 'sensible' ), 
		'id'            => 'home-news-widget',
		'description'   => __( 'Drag the MT - Home Posts widget here.', 'sensible' ), 
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h6 class="wow animated fadeIn">',
		'after_title'   => '</h6>',
	) );
	register_sidebar( array(
		'name'          => __( 'Home Skills Area', 'sensible' ),
		'id'            => 'home-skills-widget',
		'description'   => __( 'Drag the MT - Skills widget here.', 'sensible' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',  
		'before_title'  => '<h6 class="wow animated fadeIn">',
		'after_title'   => '</h6>', 
	) );
	register_sidebar( array(
		'name'          => __( 'Home Widget Area', 'sensible' ),
		'id'            => 'home-widget',
		'description'   => __( 'This is your home widget area.', 'sensible' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',  
		'before_title'  => '<h6>',
		'after_title'   => '</h6>', 
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Contact Form', 'sensible' ),
		'id'            => 'contact-form',
		'description'   => 'Use Contact Form 7 to create a form and place it in the footer.', 
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',  
		'before_title'  => '<h6>',
		'after_title'   => '</h6>', 
	) );
	register_sidebar( array(
		'name'          => __( 'Addtional Sidebar 1', 'sensible' ),
		'id'            => 'add-sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Addtional Sidebar 2', 'sensible' ),
		'id'            => 'add-sidebar-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Addtional Sidebar 3', 'sensible' ),
		'id'            => 'add-sidebar-3',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Addtional Sidebar 4', 'sensible' ),
		'id'            => 'add-sidebar-4',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Addtional Sidebar 5', 'sensible' ),
		'id'            => 'add-sidebar-5',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
	//Register the sidebar widgets   
	register_widget( 'sensible_Video_Widget' ); 
	register_widget( 'sensible_Contact_Info' );
	register_widget( 'sensible_social' );
	register_widget( 'sensible_details' );
	register_widget( 'sensible_skills' );
	register_widget( 'sensible_home_news' );
	
}
add_action( 'widgets_init', 'sensible_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function sensible_scripts() {
	wp_enqueue_style( 'sensible-style', get_stylesheet_uri() );
	
	$headings_font = esc_html(get_theme_mod('headings_fonts'));
	$body_font = esc_html(get_theme_mod('body_fonts')); 
	
	if( $headings_font ) {
		wp_enqueue_style( 'sensible-headings-fonts', '//fonts.googleapis.com/css?family='. $headings_font );	
	} else {
		wp_enqueue_style( 'sensible-open-sans', '//fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700');   
	}	
	if( $body_font ) {
		wp_enqueue_style( 'sensible-body-fonts', '//fonts.googleapis.com/css?family='. $body_font );	
	} else {
		wp_enqueue_style( 'sensible-open-body', '//fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700');  
	}
	
	wp_enqueue_style( 'sensible-font-awesome', get_template_directory_uri() . '/fonts/font-awesome.css' ); 
	wp_enqueue_style( 'sensible-flexslider-css', get_template_directory_uri() . '/css/flexslider.css' );
	wp_enqueue_style( 'sensible-menu-css', get_template_directory_uri() . '/css/jPushMenu.css' );
	
	if ( get_theme_mod('sensible_animate') != 1 ) {
		
	wp_enqueue_script( 'sensible-wow', get_template_directory_uri() . '/js/wow.js', array('jquery'), true );
	wp_enqueue_style( 'sensible-animate-css', get_template_directory_uri() . '/css/animate.css', array() );
	wp_enqueue_script( 'sensible-wow-init', get_template_directory_uri() .  '/js/wow-init.js', array( 'jquery' ), true );
	
	}

	wp_enqueue_script( 'sensible-waypoint', get_template_directory_uri() . '/js/waypoints.min.js', array('jquery'), false, true );
	
	wp_enqueue_script( 'sensible-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script( 'sensible-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true ); 
	wp_enqueue_script( 'sensible-parallax', get_template_directory_uri() . '/js/parallax.js', array('jquery'), false, false );
	wp_enqueue_script( 'sensible-flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js', array('jquery'), false, true );
	wp_enqueue_script( 'sensible-menu', get_template_directory_uri() . '/js/jPushMenu.js', array('jquery'), false, true );
	
	if ( is_page_template( 'page-home.php' ) || is_page_template( 'page-home-fullscreen.php' ) || is_page_template( 'page-home-image-bg.php' ) || is_page_template( 'page-home-video.php' ) ) {  
	wp_enqueue_style( 'sensible-odometerstyle', get_template_directory_uri() . '/css/odometer-theme-default.css', array(), '' );
	wp_enqueue_script( 'sensible-inview', get_template_directory_uri() . '/js/inview.js', array('jquery'), false, true );  
    wp_enqueue_script( 'sensible-skillbars', get_template_directory_uri() . '/js/skillbars.js', array('jquery'), false, true);
	wp_enqueue_script( 'sensible-details', get_template_directory_uri() . '/js/details.js', array('jquery'), false, true );
    wp_enqueue_script( 'sensible-odometer', get_template_directory_uri() . '/js/odometer.js', array('jquery'), false, true ); 
	wp_enqueue_script( 'sensible-parallax-home', get_template_directory_uri() . '/js/parallax.min.js', array('jquery'), false, true );
	} 
	
	if ( get_theme_mod('slider_speed') && is_page_template( 'page-home.php' ) || get_theme_mod('slider_speed') && is_page_template( 'page-home-fullscreen.php' )) {
	wp_enqueue_script( 'sensible-slider-speed', get_template_directory_uri() . '/js/slide-speed.js', array('jquery'), false, true);  
	}
	
	wp_enqueue_script( 'sensible-scripts', get_template_directory_uri() . '/js/sensible.scripts.js', array(), false, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sensible_scripts' );

/**
 * Load html5shiv
 */
function sensible_html5shiv() {
    echo '<!--[if lt IE 9]>' . "\n";
    echo '<script src="' . esc_url( get_template_directory_uri() . '/js/html5shiv.js' ) . '"></script>' . "\n";
    echo '<![endif]-->' . "\n";
}
add_action( 'wp_head', 'sensible_html5shiv' );

/**
 * Change the excerpt length
 */
function sensible_excerpt_length( $length ) {
	
	$excerpt = get_theme_mod('exc_length', '30');
	return $excerpt; 

}

add_filter( 'excerpt_length', 'sensible_excerpt_length', 999 ); 

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/sensible-sidebar-columns.php';
require get_template_directory() . '/inc/sensible-sanitize.php';
require get_template_directory() . '/inc/sensible-styles.php';

/**
 * Include additional custom admin panel features. 
 */
require get_template_directory() . '/panel/functions-admin.php';
require get_template_directory() . '/panel/theme-admin_page.php'; 
 
/**
 * Google Fonts  
 */
require get_template_directory() . '/inc/gfonts.php'; 

/**
* Favicon
*/
require get_template_directory() . '/inc/sensible-favicon.php'; 

/**
 * register your custom widgets
 */ 
require get_template_directory() . "/widgets/contact-info.php";
require get_template_directory() . "/widgets/video-widget.php";
require get_template_directory() . "/widgets/widget-mt-social.php";
require get_template_directory() . "/widgets/widget-mt-details.php"; 
require get_template_directory() . "/widgets/widget-mt-skills.php";
require get_template_directory() . "/widgets/widget-mt-home-news.php"; 

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Activate for a child theme.  Always use a child theme to make edits.
 */
require_once( trailingslashit( get_template_directory() ) . '/inc/use-child-theme.php' );

/**
 * Let WooCommerce know we support it.
 */
add_action( 'after_setup_theme', 'sensible_woocommerce_support' );
function sensible_woocommerce_support() { 
add_theme_support( 'woocommerce' );
}

/**
 * Add checkboxes to posts 
 */
 
function sensible_featured_metaboxes( $meta_boxes ) {
    $prefix = '_sn_'; // Prefix for all fields 
    $meta_boxes['featured'] = 
	array(
        'id' => 'featured',
        'title' => 'Slider Options',
        'pages' => array('post'), // post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'fields' => array(
			array(
    			'name' => __( 'Slide Sub-text', 'sensible' ), 
    			'desc' => __( 'Enter some text that will appear under the slide title.', 'sensible' ),
    			'id' => $prefix . 'primary_sub_text',
    			'type' => 'text', 
				),
			array(
    			'name' => __( 'Button URL', 'sensible' ),
    			'desc' => __( 'Enter the URL you want this slide to link to.', 'sensible' ),
    			'id' => $prefix . 'primary_url', 
    			'type' => 'text_url',
				),
			array(
    			'name' => __( 'Button Text', 'sensible' ), 
    			'desc' => __( 'Enter the text for your slide button.', 'sensible' ),
    			'id' => $prefix . 'primary_button_text',
    			'type' => 'text',
				),
			array(
    			'name' => __( 'Display Title?', 'sensible' ), 
    			'desc' => __( 'Check this box if you do not want to display the slide title.', 'sensible' ),
    			'id' => $prefix . 'primary_title_checkbox',
    			'type' => 'checkbox',
				),
        ),
		
    );
	$meta_boxes['service'] = 
	array(
        'id' => 'service',
        'title' => 'Service Options',
        'pages' => array('post'), // post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'fields' => array(
			array(
    			'name' => __( 'Icon', 'sensible' ),
    			'desc' => __( 'Visit fortawesome.github.io/Font-Awesome/cheatsheet/ to select icon. ex: fa-automobile', 'sensible' ),
    			'id' => $prefix . 'primary_icon',
    			'type' => 'text',
				),
			array(
    			'name' => __( 'Icon URL', 'sensible' ),
    			'desc' => __( 'Enter the URL that the icon will link to.', 'sensible' ),
    			'id' => $prefix . 'primary_icon_url', 
    			'type' => 'text_url', 
				),
        ),
		
    );
	$meta_boxes['team'] = 
	array(
        'id' => 'team',
        'title' => 'Team Member Options',
        'pages' => array('post'), // post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'fields' => array(
			array(
    			'name' => __( 'Facebook URL', 'sensible' ),
    			'desc' => __( 'Enter the Facebook URL for the team member.', 'sensible' ),
    			'id' => $prefix . 'primary_facebook', 
    			'type' => 'text_url', 
				),
			array(
    			'name' => __( 'Twitter URL', 'sensible' ),
    			'desc' => __( 'Enter the Twitter URL for the team member.', 'sensible' ),
    			'id' => $prefix . 'primary_twitter', 
    			'type' => 'text_url', 
				),
			array(
    			'name' => __( 'Instagram URL', 'sensible' ),
    			'desc' => __( 'Enter the Instagram URL for the team member.', 'sensible' ),
    			'id' => $prefix . 'primary_instagram',
    			'type' => 'text_url', 
				),
			array(
    			'name' => __( 'LinkedIn URL', 'sensible' ),
    			'desc' => __( 'Enter the LinkedIn URL for the team member.', 'sensible' ),
    			'id' => $prefix . 'primary_linkedin', 
    			'type' => 'text_url', 
				),
			array(
    			'name' => __( 'Google Plus URL', 'sensible' ),
    			'desc' => __( 'Enter the Google Plus URL for the team member.', 'sensible' ),
    			'id' => $prefix . 'primary_google',  
    			'type' => 'text_url',
				),
			array(
    			'name' => __( 'Personal Website URL', 'sensible' ),
    			'desc' => __( 'Enter the website URL for the team member.', 'sensible' ),
    			'id' => $prefix . 'primary_website',  
    			'type' => 'text_url',
				),
			array(
    			'name' => __( 'Email URL', 'sensible' ),
    			'desc' => __( 'Enter the email address for the team member.', 'sensible' ),
    			'id' => $prefix . 'primary_email', 
    			'type' => 'text_email',
				),
        ),
		
    );

    return $meta_boxes;
}
add_filter( 'cmb_meta_boxes', 'sensible_featured_metaboxes' ); 

/**
 * Initialize custom meta 
 */
add_action( 'init', 'sensible_be_initialize_cmb_meta_boxes', 9999 );
function sensible_be_initialize_cmb_meta_boxes() {
    if ( !class_exists( 'cmb_Meta_Box' ) ) {
        require_once( 'meta/init.php' );
    }
}


//rename some post formats for our good sake
function sensible_rename_post_formats( $safe_text ) {
    if ( $safe_text == 'Status' )
        return 'Service';
		
	if ( $safe_text == 'Chat' )
        return 'Team Member';

    return $safe_text;
}
add_filter( 'esc_html', 'sensible_rename_post_formats' );

//rename in posts list table
function sensible_live_rename_formats() { 
    global $current_screen;

    if ( $current_screen->id == 'edit-post' ) { ?>
        <script type="text/javascript">
        jQuery('document').ready(function() {

            jQuery("span.post-state-format").each(function() { 
                if ( jQuery(this).text() == "Status" ) 
                    jQuery(this).text("Service");
					
				if ( jQuery(this).text() == "Chat" ) 
                    jQuery(this).text("Team Member");           
            });

        });      
        </script>
<?php }  
} 


/**
 * get out of that loop
 */
function sensible_exclude_post_formats_from_blog( $query ) {

	if( $query->is_main_query() && $query->is_home() ) {
		$tax_query = array( array(
			'taxonomy' => 'post_format',
			'field' => 'slug',
			'terms' => array( 'post-format-image', 'post-format-chat', 'post-format-status' ),
			'operator' => 'NOT IN',
		) );
		$query->set( 'tax_query', $tax_query );  
	}

}
add_action( 'pre_get_posts', 'sensible_exclude_post_formats_from_blog' );


/**
 * get out of that loop
 */
function sensible_admin_menu_icons_css() {
    ?>
    <style>
        .post-format-icon.post-format-chat::before, .post-state-format.post-format-chat::before, a.post-state-format.format-chat::before {
  			content: "\f328";
		}
		.home .format-chat .entry-title h2:before {
   			content: "\f328"; 
		}
		.post-format-icon.post-format-status::before, .post-state-format.post-format-status::before, a.post-state-format.format-status::before {
  			content: "\f110";
		}
		.home .format-status .entry-title h2:before {
   			content: "\f110";
		}
    </style>
    <?php
}

add_action( 'admin_head', 'sensible_admin_menu_icons_css' );
