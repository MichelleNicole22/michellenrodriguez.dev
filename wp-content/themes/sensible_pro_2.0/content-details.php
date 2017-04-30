<?php
/**
 * The template part for displaying home details
 *
 * @package sensible
 */
?>


		<?php if ( is_active_sidebar('home-details-widget') ) : ?>
        
    		<div class="home-cta sensible-home-widget parallax-window" data-parallax="scroll" data-image-src="<?php echo esc_url( get_theme_mod( 'sensible_detail_background' )); ?>">  
       			<div class="grid grid-pad">
            		
            		<div class="col-1-1">
                    
    					<?php dynamic_sidebar('home-details-widget'); ?>  
                           
					</div><!-- col-1-1 --> 
                
        		</div><!-- grid -->
                
        	</div><!-- home-cta --> 
        
        <?php endif; ?> 