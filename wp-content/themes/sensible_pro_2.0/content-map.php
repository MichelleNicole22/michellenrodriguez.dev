<?php
/**
 * The template part for displaying map
 *
 * @package sensible
 */
?>


			<?php if ( get_theme_mod( 'sensible_home_map' ) ) : ?>  
         
        		<div class="home-map">
           
           			<div class="sensible-map-overlay" onClick="style.pointerEvents='none'"></div> 
        			<iframe src="<?php echo esc_url( get_theme_mod( 'sensible_home_map' )); ?>" width="100%" height="400" frameborder="0" style="border:0"></iframe>
            
        		</div> 
            
        	<?php endif; ?> 