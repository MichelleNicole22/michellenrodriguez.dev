<?php
/**
 * Sensible Theme Customizer 
 *
 * @package sensible
 */


/**
 * Add CSS in <head> for styles handled by the theme customizer
 *
 * @since 1.5
 */
function sensible_add_customizer_css() {
	
	$color = ( get_theme_mod( 'sensible_link_color' ) );
	$hover_color = ( get_theme_mod( 'sensible_hover_color' ) );
	$theme_color = ( get_theme_mod( 'sensible_custom_color' ) );
	$theme_hover_color = ( get_theme_mod( 'sensible_custom_color_hover' ) );
	$social_color = ( get_theme_mod( 'sensible_social_color' ) );
	$social_hover_color = ( get_theme_mod( 'sensible_social_color_hover' ) );
	
	?>
	<!-- sensible customizer CSS -->
	<style>
		body { border-color: <?php echo $color; ?>; }
		
		a { color: <?php echo $color; ?>; } 
		
		<?php if ( get_theme_mod( 'sensible_hover_color' ) ) : ?>
		a:hover { color: <?php echo esc_attr( get_theme_mod( 'sensible_hover_color' )) ?>; }
		<?php endif; ?>
		
		
		<?php if ( get_theme_mod( 'sensible_social_color' ) ) : ?>
		.social-bar .social-media-icons li a .fa, .social-bar-none .social-media-icons li a .fa { 
			color: <?php echo esc_attr( get_theme_mod( 'sensible_social_color' )) ?>; 
		} 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_social_color_hover' ) ) : ?>
		.social-bar .social-media-icons li a .fa:hover, .social-bar-none .social-media-icons li a .fa:hover { 
			color: <?php echo esc_attr( get_theme_mod( 'sensible_social_color_hover' )) ?>; 
		} 
		<?php endif; ?>
	
		.flex-next:hover, .flex-prev:hover { color:transparent; }
		 
		<?php if ( get_theme_mod( 'sensible_custom_color' ) ) : ?>
		.entry-header, .blog-entry-header { background: <?php echo esc_attr( get_theme_mod( 'sensible_custom_color' )) ?>; }
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'sensible_custom_color' ) ) : ?>
		.home-entry-title:after, .member-entry-title:after, .works-entry-title:after, .client-entry-title:after { border-color: <?php echo esc_attr( get_theme_mod( 'sensible_custom_color' )) ?>; }  
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_custom_color' ) ) : ?>
		.main-navigation ul ul li { border-color: <?php echo esc_attr( get_theme_mod( 'sensible_custom_color' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_custom_color' ) ) : ?>
		button, input[type="button"], input[type="reset"], input[type="submit"] { background: <?php echo esc_attr( get_theme_mod( 'sensible_custom_color' )) ?>; }  
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_custom_color' ) ) : ?>
		button, input[type="button"], input[type="reset"], input[type="submit"] { border-color: <?php echo esc_attr( get_theme_mod( 'sensible_custom_color' )) ?>; }  
		<?php endif; ?>
	
		#site-navigation button:hover { background: none; }
		
		<?php if ( get_theme_mod( 'sensible_site_title_color' ) ) : ?>
		 h1.site-title a { color: <?php echo esc_attr( get_theme_mod( 'sensible_site_title_color' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_custom_color' ) ) : ?>
		.nav-previous, .paging-navigation .nav-previous, .post-navigation .nav-previous, .nav-next, .paging-navigation .nav-next, .post-navigation .nav-next { background: <?php echo esc_attr( get_theme_mod( 'sensible_custom_color' )) ?>; }
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'sensible_text_color' ) ) : ?>
		 body, button, input, select, textarea, p { color: <?php echo esc_attr( get_theme_mod( 'sensible_text_color' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_nav_link_color' ) ) : ?>
		.site-header .main-navigation ul li a { color: <?php echo esc_attr( get_theme_mod( 'sensible_nav_link_color' )) ?>; }
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'sensible_nav_link_hover_color' ) ) : ?>
		.site-header .main-navigation a:hover { color: <?php echo esc_attr( get_theme_mod( 'sensible_nav_link_hover_color' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_nav_drop_link_color' ) ) : ?>
		.main-navigation ul ul a { color: <?php echo esc_attr( get_theme_mod( 'sensible_nav_drop_link_color' )) ?> !important; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_blockquote' ) ) : ?>
		 blockquote { background: <?php echo esc_attr( get_theme_mod( 'sensible_blockquote' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_blockquote_border' ) ) : ?>
		 blockquote { border-color:<?php echo esc_attr( get_theme_mod( 'sensible_blockquote_border' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_entry' ) ) : ?>
		.entry-header .entry-title, .featured-img-header .entry-title { color: <?php echo esc_attr( get_theme_mod( 'sensible_entry' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_footer_color' ) ) : ?>
		.site-footer { background: <?php echo esc_attr( get_theme_mod( 'sensible_footer_color' )) ?>; }
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'sensible_footer_text_color' ) ) : ?>
		.site-footer, .site-footer p { color: <?php echo esc_attr( get_theme_mod( 'sensible_footer_text_color' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_footer_link_color' ) ) : ?>
		.site-footer a { color: <?php echo esc_attr( get_theme_mod( 'sensible_footer_link_color', '#b3b3b3' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_footer_hover_color' ) ) : ?>
		.site-footer a:hover { color: <?php echo esc_attr( get_theme_mod( 'sensible_footer_hover_color', '#b3b3b3' )) ?>; }
		<?php endif; ?>
		
		
		
		<?php if ( get_theme_mod( 'sensible_footer_social_color' ) ) : ?>
		.footer-icons .social-bar .social-media-icons li a .fa, .footer-icons .social-bar-none .social-media-icons li a .fa { 
			color: <?php echo esc_attr( get_theme_mod( 'sensible_footer_social_color', '#888888' )) ?>;  
		} 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_footer_social_color_hover' ) ) : ?>
		.footer-icons .social-bar .social-media-icons li a .fa:hover, .footer-icons .social-bar-none .social-media-icons li a .fa:hover { 
			color: <?php echo esc_attr( get_theme_mod( 'sensible_footer_social_color_hover', '#888888' )) ?>; 
		} 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_footer_social_bg' ) ) : ?>
		.footer-icons .social-bar-none, .footer-icons .social-bar { 
			background: <?php echo esc_attr( get_theme_mod( 'sensible_footer_social_bg', '#ffffff'  )) ?>;  
		} 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_footer_social_border' ) ) : ?>
		.footer-icons .social-bar-none, .footer-icons .social-bar { 
			border-color: <?php echo esc_attr( get_theme_mod( 'sensible_footer_social_border', '#dadada'  )) ?>;  
		} 
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'sensible_footer_social_text' ) ) : ?>
		.footer-icons .social-bar-none, .footer-icons .social-bar {  
			color: <?php echo esc_attr( get_theme_mod( 'sensible_footer_social_text', '#404040'  )) ?>;   
		} 
		<?php endif; ?> 
		
		 
		
		<?php if ( get_theme_mod( 'sensible_top_footer_bg' ) ) : ?>
		.footer-contact { background-color: <?php echo esc_attr( get_theme_mod( 'sensible_top_footer_bg', '#fafafa'  )) ?>; }  
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'sensible_top_footer_icon' ) ) : ?>
		.footer-contact .fa { color: <?php echo esc_attr( get_theme_mod( 'sensible_top_footer_icon', '#8c9398'  )) ?>;  } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_top_footer_title' ) ) : ?>
		.footer-contact h6 { color: <?php echo esc_attr( get_theme_mod( 'sensible_top_footer_title', '#353535'  )) ?>;  } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_top_footer_text' ) ) : ?>
		.footer-contact p, .footer-contact h5, .footer-contact { color: <?php echo esc_attr( get_theme_mod( 'sensible_top_footer_text', '#8c9398'  )) ?>;  } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_top_footer_titles' ) ) : ?>
		.footer-contact h5 { color: <?php echo esc_attr( get_theme_mod( 'sensible_top_footer_titles', '#ea474b' )) ?>; }  
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_top_footer_titles' ) ) : ?>
		.footer-contact h5:after { border-color: <?php echo esc_attr( get_theme_mod( 'sensible_top_footer_titles', '#ea474b' )) ?>; }  
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'sensible_top_footer_contact_block' ) ) : ?>
		.footer-block { background-color: <?php echo esc_attr( get_theme_mod( 'sensible_top_footer_contact_block', '#ffffff' )) ?>; }  
		<?php endif; ?> 
		
		
		
		<?php if ( get_theme_mod( 'sensible_body_size' ) ) : ?>
		body, p { font-size: <?php echo esc_attr( get_theme_mod( 'sensible_body_size' )) ?>px; } 
		<?php endif; ?>
		
		
		
		<?php if ( get_theme_mod( 'sensible_slider_text_color' ) ) : ?>
		.slide-content span h2, .slide-content span p, .hero-content span h2 { color: <?php echo esc_attr( get_theme_mod( 'sensible_slider_text_color', '#ffffff' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_slider_button_bg_color' ) ) : ?>
		.slide-content-container button, .hero-content button { background-color: <?php echo esc_attr( get_theme_mod( 'sensible_slider_button_bg_color', '#ea474b' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_slider_button_bg_color' ) ) : ?>
		.slide-content-container button, .hero-content button { border-color: <?php echo esc_attr( get_theme_mod( 'sensible_slider_button_bg_color', '#ea474b' )) ?>; } 
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'sensible_slider_button_text_color' ) ) : ?>
		.slide-content-container button, .hero-content button { color: <?php echo esc_attr( get_theme_mod( 'sensible_slider_button_text_color', '#ffffff' )) ?> !important; } 
		<?php endif; ?>
		
		
		
		<?php if ( get_theme_mod( 'sensible_secondary_header_bg' ) ) : ?>
		.secondary-header { background: <?php echo esc_attr( get_theme_mod( 'sensible_secondary_header_bg', '#242830' )) ?>; } 
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'sensible_secondary_header_text' ) ) : ?>
		.secondary-header { color: <?php echo esc_attr( get_theme_mod( 'sensible_secondary_header_text', '#ffffff' )) ?>; } 
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'sensible_secondary_social_color' ) ) : ?>
		.secondary-header .social-media-icons li a .fa {
			color: <?php echo esc_attr( get_theme_mod( 'sensible_secondary_social_color', '#ffffff'  )) ?>; 
		} 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_secondary_social_color_hover' ) ) : ?>
		.secondary-header .social-media-icons li a .fa:hover { 
			color: <?php echo esc_attr( get_theme_mod( 'sensible_secondary_social_color_hover', '#ffffff'  )) ?>;  
		} 
		<?php endif; ?>
		
		
		
		<?php if ( get_theme_mod( 'sensible_social_bg' ) ) : ?>
		.social-bar-none, .social-bar { 
			background: <?php echo esc_attr( get_theme_mod( 'sensible_social_bg', '#ffffff'  )) ?>;  
		} 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_social_border' ) ) : ?>
		.social-bar-none, .social-bar { 
			border-color: <?php echo esc_attr( get_theme_mod( 'sensible_social_border', '#dadada'  )) ?>;  
		} 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_social_text' ) ) : ?>
		.social-bar-none, .social-bar { 
			color: <?php echo esc_attr( get_theme_mod( 'sensible_social_text', '#404040'  )) ?>;   
		} 
		<?php endif; ?> 
		
		
		
		<?php if ( get_theme_mod( 'sensible_intro_bg' ) ) : ?>
		.home-content { background: <?php echo esc_attr( get_theme_mod( 'sensible_intro_bg', '#fafafa'  )) ?>;  } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_intro_title_color' ) ) : ?>
		.home-content h6 { color: <?php echo esc_attr( get_theme_mod( 'sensible_intro_title_color', '#353535'  )) ?>;  } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_intro_text_color' ) ) : ?>
		.home-content p { color: <?php echo esc_attr( get_theme_mod( 'sensible_intro_text_color', '#8c9398'  )) ?>;  } 
		<?php endif; ?>
		
		
		
		<?php if ( get_theme_mod( 'sensible_services_bg' ) ) : ?>
		.home-services { background: <?php echo esc_attr( get_theme_mod( 'sensible_services_bg', '#ffffff'  )) ?>;  } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_services_border' ) ) : ?>
		.home-services { border-color: <?php echo esc_attr( get_theme_mod( 'sensible_services_border', '#dadada'  )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_services_title_color' ) ) : ?>
		.home-services h6 { color: <?php echo esc_attr( get_theme_mod( 'sensible_services_title_color', '#353535'  )) ?>;  } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_services_text_color' ) ) : ?>
		.home-services .service p, .home-services .service h6, .home-services .service { color: <?php echo esc_attr( get_theme_mod( 'sensible_services_text_color', '#404040'  )) ?>;  } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_services_icon_bg' ) ) : ?>
		.home-services .fa, .service .fa  { background: <?php echo esc_attr( get_theme_mod( 'sensible_services_icon_bg', '#ea474b' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_services_icon' ) ) : ?>
		.home-services .fa, .service .fa  { color: <?php echo esc_attr( get_theme_mod( 'sensible_services_icon', '#ffffff' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_services_button' ) ) : ?>
		.home-services button, .home-services input[type="button"], .home-services input[type="reset"], .home-services input[type="submit"]  { background-color: <?php echo esc_attr( get_theme_mod( 'sensible_services_button', '#ea474b' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_services_button' ) ) : ?>
		.home-services button, .home-services input[type="button"], .home-services input[type="reset"], .home-services input[type="submit"] { border-color: <?php echo esc_attr( get_theme_mod( 'sensible_services_button', '#ea474b' )) ?>; } 
		<?php endif; ?>
		
		
		
		<?php if ( get_theme_mod( 'sensible_details_text_color' ) ) : ?>
		 #mt-details, #mt-details h4, #mt-details .odometer { color: <?php echo esc_attr( get_theme_mod( 'sensible_details_text_color', '#ffffff' )) ?> !important; }
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'sensible_details_icon' ) ) : ?>
		.sensible-home-widget .details .fa { color: <?php echo esc_attr( get_theme_mod( 'sensible_details_icon', '#ffffff' )) ?>; }
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'sensible_details_title' ) ) : ?>
		 #mt-details h6 { color: <?php echo esc_attr( get_theme_mod( 'sensible_details_title', '#ffffff' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_details_title_divider' ) ) : ?>
		.home-cta #mt-details h6::after { border-color: <?php echo esc_attr( get_theme_mod( 'sensible_details_title_divider', '#ea474b' )) ?>; }
		<?php endif; ?> 
		
		
		<?php if ( get_theme_mod( 'sensible_blog_bg_color' ) ) : ?>
		.home-news { background: <?php echo esc_attr( get_theme_mod( 'sensible_blog_bg_color', '#fafafa' )) ?>;  } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_blog_border' ) ) : ?>
		.home-news { border-color: <?php echo esc_attr( get_theme_mod( 'sensible_blog_border', '#dadada'  )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_blog_title_color' ) ) : ?>
		.home-news h6 { color: <?php echo esc_attr( get_theme_mod( 'sensible_blog_title_color', '#353535'  )) ?>;  } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_blog_text_color' ) ) : ?>
		.home-news p, .home-news h5, .home-news { color: <?php echo esc_attr( get_theme_mod( 'sensible_blog_text_color', '#404040'  )) ?>;  } 
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'sensible_blog_title_divider' ) ) : ?>
		.home-news h5::after { border-color: <?php echo esc_attr( get_theme_mod( 'sensible_blog_title_divider', '#ea474b' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_blog_cta' ) ) : ?>
		.home-blog-cta { background: <?php echo esc_attr( get_theme_mod( 'sensible_blog_cta', '#242830' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_blog_cta_button' ) ) : ?>
		.home-blog-cta button.white { color: <?php echo esc_attr( get_theme_mod( 'sensible_blog_cta_button', '#ffffff' )) ?> !important; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_blog_cta_button' ) ) : ?>
		 .home-blog-cta button.white { border-color: <?php echo esc_attr( get_theme_mod( 'sensible_blog_cta_button', '#ffffff' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_blog_link_color' ) ) : ?>
		 .home-news a { color: <?php echo esc_attr( get_theme_mod( 'sensible_blog_link_color', '#ea474b' )) ?>; }
		<?php endif; ?> 
		
		
		
		<?php if ( get_theme_mod( 'sensible_team_bg_color' ) ) : ?>
		.home-team { background: <?php echo esc_attr( get_theme_mod( 'sensible_team_bg_color', '#ffffff' )) ?>;  } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_team_border' ) ) : ?>
		.home-team { border-color: <?php echo esc_attr( get_theme_mod( 'sensible_team_border', '#dadada'  )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_team_title_color' ) ) : ?>
		.home-team h6 { color: <?php echo esc_attr( get_theme_mod( 'sensible_team_title_color', '#353535'  )) ?>;  } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_team_text_color' ) ) : ?>
		.home-team p, .home-team h5, .home-team { color: <?php echo esc_attr( get_theme_mod( 'sensible_team_text_color', '#404040'  )) ?>;  } 
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'sensible_team_title_divider' ) ) : ?>
		.home-team h5::after, .member h5:after { border-color: <?php echo esc_attr( get_theme_mod( 'sensible_team_title_divider', '#ea474b' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_team_button' ) ) : ?>
		.home-team button, .home-team input[type="button"], .home-team input[type="reset"], .home-team input[type="submit"]  { background-color: <?php echo esc_attr( get_theme_mod( 'sensible_team_button', '#ea474b' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_team_button' ) ) : ?>
		.home-team button, .home-team input[type="button"], .home-team input[type="reset"], .home-team input[type="submit"] { border-color: <?php echo esc_attr( get_theme_mod( 'sensible_team_button', '#ea474b' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_team_icon_color' ) ) : ?>
		.member .fa { background-color: <?php echo esc_attr( get_theme_mod( 'sensible_team_icon_color', '#222222' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_team_icon_hover_color' ) ) : ?>
		.member .fa:hover { background-color: <?php echo esc_attr( get_theme_mod( 'sensible_team_icon_hover_color', '#ea474b' )) ?>; } 
		<?php endif; ?> 
		
		
		<?php if ( get_theme_mod( 'sensible_skills_bg_color' ) ) : ?>
		.home-skills { background: <?php echo esc_attr( get_theme_mod( 'sensible_skills_bg_color', '#fafafa' )) ?>;  } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_skills_title_color' ) ) : ?>
		.home-skills h6 { color: <?php echo esc_attr( get_theme_mod( 'sensible_skills_title_color', '#353535'  )) ?>;  } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_skills_text_color' ) ) : ?>
		.home-skills p, .home-skills h5, .home-skills, #mt-skills p  { color: <?php echo esc_attr( get_theme_mod( 'sensible_skills_text_color', '#404040'  )) ?>;  } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'skill_bar_color' ) ) : ?>
		.progressBar div { background-color: <?php echo esc_attr( get_theme_mod( 'skill_bar_color', '#e9575a' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'skill_bar_bg_color' ) ) : ?>
		.progressBar { background-color: <?php echo esc_attr( get_theme_mod( 'skill_bar_bg_color', '#dddddd' )) ?>; } 
		<?php endif; ?>
		
		
		<?php if ( get_theme_mod( 'sensible_widget_cta_button' ) ) : ?>
		.sensible-home-widget button.white { color: <?php echo esc_attr( get_theme_mod( 'sensible_widget_cta_button', '#ffffff' )) ?> !important; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_widget_cta_button' ) ) : ?>
		.sensible-home-widget button.white { border-color: <?php echo esc_attr( get_theme_mod( 'sensible_widget_cta_button', '#ffffff' )) ?> !important; }
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'sensible_widget_icon_color' ) ) : ?>
		.sensible-home-widget .fa { color: <?php echo esc_attr( get_theme_mod( 'sensible_widget_icon_color', '#ffffff' )) ?>; } 
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'sensible_widget_text_color' ) ) : ?>
		.sensible-home-widget-area p, .sensible-home-widget-area h6, .sensible-home-widget-area { color: <?php echo esc_attr( get_theme_mod( 'sensible_widget_text_color', '#ffffff'  )) ?>;  }  
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'sensible_widget_title_divider' ) ) : ?>
		.home-cta .sensible-home-widget-area h6::after { border-color: <?php echo esc_attr( get_theme_mod( 'sensible_widget_title_divider', '#ea474b' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_widget_area_link' ) ) : ?>
		.sensible-home-widget-area a { color: <?php echo esc_attr( get_theme_mod( 'sensible_widget_area_link', '#ea474b' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_widget_area_link_hover' ) ) : ?>
		.sensible-home-widget-area a:hover { color: <?php echo esc_attr( get_theme_mod( 'sensible_widget_area_link_hover', '#ea474b' )) ?>; }
		<?php endif; ?> 
		
		
		<?php if ( get_theme_mod( 'sensible_mobile_menu_color' ) ) : ?>
		button.menu-toggle { color: <?php echo esc_attr( get_theme_mod( 'sensible_mobile_menu_color', '#ffffff' )) ?> !important; }
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'sensible_mobile_menu_bg' ) ) : ?>
		.cbp-spmenu { background-color: <?php echo esc_attr( get_theme_mod( 'sensible_mobile_menu_bg', '#252525' )) ?>; }
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'sensible_mobile_menu_link' ) ) : ?>
		.cbp-spmenu a { color: <?php echo esc_attr( get_theme_mod( 'sensible_mobile_menu_link', '#ffffff' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_mobile_menu_hover' ) ) : ?>
		.cbp-spmenu a:hover { color: <?php echo esc_attr( get_theme_mod( 'sensible_mobile_menu_hover', '#ffffff' )) ?>; }  
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'sensible_mobile_menu_hover_bg' ) ) : ?>
		.cbp-spmenu a:hover { background-color: <?php echo esc_attr( get_theme_mod( 'sensible_mobile_menu_hover_bg', '#333333' )) ?>; }  
		<?php endif; ?>  
		
		<?php if ( get_theme_mod( 'sensible_mobile_menu_title' ) ) : ?>
		.cbp-spmenu h3 { color: <?php echo esc_attr( get_theme_mod( 'sensible_mobile_menu_title', '#ffffff' )) ?>; }  
		<?php endif; ?>  
		
		<?php if ( get_theme_mod( 'sensible_mobile_menu_title_bg' ) ) : ?>
		.cbp-spmenu h3 { background-color: <?php echo esc_attr( get_theme_mod( 'sensible_mobile_menu_title_bg', '#111111' )) ?>; }  
		<?php endif; ?>
		
		
		  
	</style>
<?php }

add_action( 'wp_head', 'sensible_add_customizer_css' );
