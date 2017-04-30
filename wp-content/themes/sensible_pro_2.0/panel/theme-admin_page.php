<?php


function sensiblepro_admin_page_styles() {
    wp_enqueue_style( 'sensiblepro-font-awesome-admin', get_template_directory_uri() . '/fonts/font-awesome.css' ); 
	wp_enqueue_style( 'sensiblepro-style-admin', get_template_directory_uri() . '/panel/css/theme-admin-style.css' ); 
}
add_action( 'admin_enqueue_scripts', 'sensiblepro_admin_page_styles' ); 

     
add_action('admin_menu', 'sensible_setup_menu');
     
    function sensible_setup_menu(){
            add_theme_page( esc_html__('About Sensible Pro', 'sensible'), esc_html__('About Sensible Pro', 'sensible'), 'edit_theme_options', 'sensible-setup', 'sensible_init' ); 
    } 
     
 	function sensible_init(){
	 	echo '<div class="grid grid-pad"><div class="col-1-1"><h1 style="text-align: center;">'; 
		printf( esc_html__('Thank you for using ModernThemes!', 'sensible' ));
        echo "</h1></div></div>";
		  
		
		echo '<div class="grid grid-pad" style="border-bottom: 1px solid #ccc; padding-bottom: 40px; margin-bottom: 30px;" ><div class="col-1-3"><h2>'; 
		printf( esc_html__('Support', 'sensible' ));
        echo "</h2>"; 
		
		echo '<p>';
		printf( esc_html__('Visit the link below for premium support. Use the password given to you when you purchased Sensible Pro to access the support form.', 'sensible' )); 
		echo "</p>";
		
		echo '<a href="https://modernthemes.net/support-forums/" target="_blank"><button>'; 
		printf( esc_html__('Get Support', 'sensible' )); 
		echo "</button></a></div>";
		
		echo '<div class="col-1-3"><h2>'; 
		printf( esc_html__('Documentation', 'sensible' )); 
        echo "</h2>";  
		
		
		echo '<p>';
		printf( esc_html__('Check out our Sensible documentation to learn how to use Sensible and for tutorials on the necessary theme functions. Click the link below.', 'sensible' )); 
		echo "</p>"; 
		
		echo '<a href="http://modernthemes.net/documentation/sensible-pro-documentation/" target="_blank"><button>';
		printf( esc_html__('Read Docs', 'sensible' ));
		echo "</button></a></div>";
		
		echo '<div class="col-1-3"><h2>'; 
		printf( esc_html__('About ModernThemes', 'sensible' ));
        echo "</h2>";  
		
		echo '<p>';
		printf( esc_html__('Want more themes or customization? Let us help you at www.modernthemes.net. You can earn money too with our affiliate program.', 'sensible' ));
		echo '</p>';
		
		echo '<a href="http://modernthemes.net/" target="_blank"><button>';
		printf( esc_html__('About Us', 'sensible' ));
		echo '</button></a></div></div>'; 
		
		
		echo '<div class="grid grid-pad senswp"><div class="col-1-1"><h1 style="padding-bottom: 30px; text-align: center;">';
		printf( esc_html__('Premium Membership. Premium Experience.', 'sensible' )); 
		echo '</h1></div>';
		
        echo '<div class="col-1-4"><i class="fa fa-cogs"></i><h4>'; 
		printf( esc_html__('Plugin Compatibility', 'sensible' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__('Use our new free plugins with this theme to add functionality for things like projects, clients, team members and more. Compatible with all premium themes!', 'sensible' ));
		echo '</p></div>';
		
		echo '<div class="col-1-4"><i class="fa fa-desktop"></i><h4>'; 
        printf( esc_html__('Agency Designed Themes', 'sensible' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__('Look as good as can be with our new premium themes. Each one is agency designed with modern styles and professional layouts.', 'sensible' ));
		echo '</p></div>'; 
		
        echo '<div class="col-1-4"><i class="fa fa-users"></i><h4>';
        printf( esc_html__('Membership Options', 'sensible' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__('We have options to fit every budget. Choose between a single theme, or access to all current and future themes for a year, or forever!', 'sensible' ));
		echo '</p></div>'; 
		
		echo '<div class="col-1-4"><i class="fa fa-calendar"></i><h4>'; 
		printf( esc_html__( 'Access to New Themes', 'sensible' )); 
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__( 'New themes added monthly! When you purchase a premium membership you get access to all premium themes, with new themes added monthly.', 'sensible' ));   
		echo '</p></div>';
		
		
		echo '<div class="grid grid-pad" style="border-bottom: 1px solid #ccc; padding-bottom: 50px; margin-bottom: 30px;"><div class="col-1-1"><a href="https://modernthemes.net/premium-wordpress-themes/" target="_blank"><button class="pro">'; 
		printf( esc_html__( 'Get Premium Membership', 'sensible' ));   
		echo '</button></a></div></div>';
		
		
		
		echo '<div class="grid grid-pad"><div class="col-1-1"><h2 style="text-align: center;">'; 
		printf( esc_html__( 'Changelog' , 'sensible' ) );
        echo "</h2>"; 
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('2.3.2 - Fix: updated customizer language', 'sensible' )); 
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('2.3.0 - Update: updated fontawesome icons', 'sensible' )); 
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('2.2.9 - Update: Medium social icon added to social icons widget', 'sensible' )); 
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('2.2.8 - Fix: changed the color of the link on the search results page', 'sensible' )); 
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('2.2.7 - Update: added personal website option to Team Members and updated fontawesome to 4.7', 'sensible' )); 
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('2.2.6 - Update: added Tripadvisor to social icons widget', 'sensible' )); 
		echo '</p>';
		 
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('2.2.5 - Update: added an instagram option for Team Members', 'sensible' )); 
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('2.2.3 - Fix: removed http from Skype social icons', 'sensible' )); 
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('2.2.2 - Update: Tested with WordPress 4.5, Updating Font Awesome icons to 4.6, Added Snapchat and Weibo social icon options', 'sensible' )); 
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('2.2.0 - Update: adds one-click option to add Child Theme. Go to Appearance => Editor and activate child theme from notification.', 'sensible' )); 
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('2.1.9 - Update: blog will now go fullwidth if no sidebar is active', 'sensible' )); 
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('2.1.8 - Update: added many new social icon options to MT - Social Icons widget', 'sensible' )); 
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('2.1.7 - Fix: minor bug fixes and improvements', 'sensible' )); 
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('2.1.6 - Update: added option to use an external link for the Home Page Widget area in theme customizer', 'sensible' )); 
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('2.1.5 - Fix: corrected home blog image size issue', 'sensible' )); 
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('2.1.4 - Update: added option under Appearance => Footer Options => Bottom Footer Options which you can select to show the footer area on all pages', 'sensible' )); 
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('2.1.3 - Update: added Post Navigation Excluded Categories option in Blog Layout customizer section (Appearance => Customize => Blog Layout). If you create a category for post types with post formats, you now now exclude them by entering in the category number in the Post Navigation Excluded Categories section.', 'sensible' ));   
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('2.1.2 - minor bug fix with Home Page Posts', 'sensible' ));   
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('2.1.1 - added option to use Post Excerpt for Home Page Posts', 'sensible' ));   
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('2.1.0 - added new Font Awesome 4.5 icons', 'sensible' ));   
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('2.0.9 - new theme update method added', 'sensible' ));   
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('2.0.8 - bug fixes with odometer not reading very high numbers', 'sensible' ));  
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('2.0.7 - minor CSS fixes for mobile devices', 'sensible' ));  
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('2.0.6 - minor bug fixes', 'sensible' ));  
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('2.0.5 - fixed Team Member email link issue', 'sensible' ));  
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('2.0.4 - opens Social Icon links in new window. Go to widget and check the box that opens social icon links in new window.', 'sensible' ));  
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('2.0.3 - 4.3 update bug fixes', 'sensible' ));  
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('2.0.2 - 4.3 update bug fixes', 'sensible' )); 
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.1.13 - minor bug fixes', 'sensible' )); 
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.1.12 - added external link option for Static Image Background', 'sensible' )); 
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.1.11 - added Russian translation', 'sensible' )); 
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.1.10 - updated Font Awesome icons', 'sensible' )); 
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.1.9 - minor bug fixes', 'sensible' )); 
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.1.8 - fixed scroll issue with google map', 'sensible' )); 
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.1.7 - added option to add Slider sub-text. Go to your slide posts and there will be a new option in the Feature This Post? box to add sub-text.', 'sensible' )); 
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.1.5 - added option to customize header image for Shop archive. Go to Appearance -> Customize -> Shop Options to add header background image.', 'sensible' )); 
		echo '</p>'; 
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.1.4 - added Slider color options. Go to Appearance -> Customize -> Home Hero Section -> Slider to edit color options.', 'sensible' )); 
		echo '</p>'; 
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.1.3 - updated French Translation', 'sensible' ));
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.1.2 - updated styles for Search Results', 'sensible' )); 
		echo '</p>'; 
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.1.1 - added Home Page - Hero Background for static background image option. Create a page, set template to Home Page - Hero Background, go to Appearance -> Customize -> Home Hero Section -> Static Background Image to set background.', 'sensible' ));
		echo '</p>'; 
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.1.0 - added option to change blog header background. Go to Appearance -> Customize -> Blog Layout to add Blog Header background.', 'sensible' ));
		echo '</p></div></div>';
		 
    }
?>