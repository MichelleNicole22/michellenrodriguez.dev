<?php
/**
Template Name: Home Page - Hero Background
 *
 * @package sensible
 */

get_header(); ?>

	<section id="hero-header" data-speed="8" data-type="background" style="background: url('<?php echo esc_url(get_theme_mod( 'sensible_main_bg' )); ?>')  50% 0 no-repeat fixed;"> 
    	<div class="hero-content-container">
        	<div class="hero-content">
                            
            	<span>
                            
                    <?php if ( get_theme_mod( 'sensible_first_heading' ) ) : ?>
                            
               			<h2 class="animated fadeInDown delay"><?php echo esc_textarea( get_theme_mod( 'sensible_first_heading')) ?></h2> 
                                
					<?php endif; ?> 
                            
                    <?php if ( get_theme_mod( 'sensible_hero_button_text' ) ) : ?> 
                            
                        <?php if ( get_theme_mod( 'hero_button_url' ) ) : ?>
                            
                    		<a href="<?php echo esc_url( get_page_link( get_theme_mod('hero_button_url'))) ?>" class="featured-link"> 
                                
						<?php endif; ?>
       
                    		
						<?php if ( get_theme_mod( 'page_url_text' ) ) : ?> 
                            
    						<a href="<?php echo esc_url( get_theme_mod ( 'page_url_text' )) ?>" class="featured-link" target="_blank"> 
                                   
						<?php endif; ?>
                            
                            
                            <button class="wow animated fadeInDown delay">
								<?php echo esc_html( get_theme_mod( 'sensible_hero_button_text')) ?>
                            </button>
                            
                        <?php if ( get_theme_mod( 'hero_button_url' ) ) : ?> 
                            
                            </a>
                                
                        <?php endif; ?>
                            
                       	<?php if ( get_theme_mod( 'page_url_text' ) ) : ?>
                            
                        	</a>
                                
                        <?php endif; ?>    
                               
                	<?php endif; ?>
                            
                               	  
            	</span>
                             
    		</div><!-- hero-content --> 
		</div><!-- hero-content-container -->
	</section><!-- hero-header -->
                    
                    
  
	<?php if( get_theme_mod( 'active_social' ) == '') : ?>
    
		<?php get_template_part( 'content', 'home-social' ); // home social area ?>
        
	<?php endif; ?>
		
        
    <?php if( get_theme_mod( 'active_intro' ) == '') : ?>  
        
   		<?php get_template_part( 'content', 'intro' ); // intro content ?>
         
	<?php endif; ?>
	
        
    <?php if( get_theme_mod( 'active_services' ) == '') : ?>  
        		
    	<?php get_template_part( 'content', 'services' ); // services content ?>
		
	<?php endif; ?>
     
        
    <?php if( get_theme_mod( 'active_details' ) == '') : ?>
    
    	<?php get_template_part( 'content', 'details' ); // details content ?> 
        
	<?php endif; ?>
		
        
    <?php if( get_theme_mod( 'active_blog' ) == '') : ?> 
    
    	<?php if ( is_active_sidebar('home-news-widget') ) : ?>
        
    		<?php dynamic_sidebar('home-news-widget'); ?>  
        
        <?php endif; ?> 
         
	<?php endif; ?>
		
        
	<?php if( get_theme_mod( 'active_team' ) == '') : ?>    
        
    	<?php get_template_part( 'content', 'team' ); // team content ?> 
        
	<?php endif; ?>
		
        
    <?php if( get_theme_mod( 'active_skill_bar' ) == '') : ?>  
        
    	<?php get_template_part( 'content', 'skills' ); // skills bars ?> 	
        
	<?php endif; ?>
		
        
    <?php if( get_theme_mod( 'active_home_widget' ) == '') : ?>  
        
        <?php get_template_part( 'content', 'home-widget' ); // home widget area ?> 	
		
	<?php endif; ?>
		
  
    <?php if( get_theme_mod( 'active_home_map' ) == '') : ?> 
        
    	<?php get_template_part( 'content', 'map' ); // map area ?> 
		
	<?php endif; ?>
       

<?php get_footer(); ?>

