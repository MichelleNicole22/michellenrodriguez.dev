<?php
/**
Template Name: Home Page
 *
 * @package sensible
 */

get_header(); ?>

        
        
	<?php if ( get_theme_mod( 'slider_speed' ) ) : ?>
        
    	<div hidden id="sliderspeed"><?php echo get_theme_mod( 'slider_speed' ); ?></div> 
    
    <?php endif; ?>
    
       
 	<div class="flexslider" <?php if ( get_theme_mod( 'slider_height' ) ) : ?> style="height: <?php echo get_theme_mod( 'slider_height' ); ?>px"<?php endif; ?> >
    	<ul class="slides"> 
        
        	<?php 
			// the query
			$slider_query = new WP_Query( array ( 
				'post_type' => 'post', 
				'posts_per_page' => -1,
				'tax_query' => 				
					array(
						array(
      					'taxonomy' => 'post_format',
      					'field' => 'slug',
      					'terms' => 'post-format-image',
    		)))); ?>
          
			
			<?php while ( $slider_query->have_posts() ) : $slider_query->the_post(); ?>
                    
            	<?php if ( has_post_format( 'image' )) : ?>
                
                	<li <?php if ( get_theme_mod( 'slider_height' ) ) : ?> style="height: <?php echo get_theme_mod( 'slider_height' ); ?>px"<?php endif; ?> >
                    
                    	<section id="hero-header" data-speed="8" data-type="background" style="background: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) , 'full' ); ?>')  50% 0 no-repeat fixed;">
                			<div class="slide-content-container">  
                				<div class="slide-content">
                             
                            	<span>
                            
                            		<?php if (get_post_meta( $post->ID, '_sn_primary_title_checkbox', true ) == '' ): ?> 
               							<h2 class="animated fadeInDown"><?php the_title(); ?></h2>
                            		<?php endif; ?>
                            
                             
                            		<?php if (get_post_meta( $post->ID, '_sn_primary_sub_text', true ) ): ?>
               							<p class="animated fadeInDown">
											<?php global $post; $text = get_post_meta( $post->ID, '_sn_primary_sub_text', true ); echo $text; ?>
                                		</p>
                            		<?php endif; ?> 
                            
                            
                            		<?php if (get_post_meta( $post->ID, '_sn_primary_button_text', true ) ): ?> 
                        	
                            			<a href="<?php if (get_post_meta( $post->ID, '_sn_primary_url', true ) ): global $post; $text = get_post_meta( $post->ID, '_sn_primary_url', true ); echo $text;  else : the_permalink(); endif; ?>" class="featured-link">
                            				<button class="animated fadeInDown">
												<?php global $post; $text = get_post_meta( $post->ID, '_sn_primary_button_text', true ); echo $text; ?>
                                			</button>
                            			</a> 
                            
                            		<?php endif; ?>
                               	  
                				</span> 
                            
                				</div><!-- slide-content --> 
                			</div><!-- slide-content-container -->
                		</section><!-- hero-header --> 
                        
  					</li>
                    
                    
                <?php endif; ?>
        
			<?php endwhile; // end of the loop. ?>
                
               
    	</ul><!-- slides -->
	</div><!-- flexslider -->
        
        
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
