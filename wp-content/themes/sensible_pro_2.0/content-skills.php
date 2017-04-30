<?php
/**
 * The template part for displaying skills
 *
 * @package sensible
 */
?>


	<?php if ( is_active_sidebar('home-skills-widget') ) : ?>
        
    	<div class="home-skills"> 
       		<div class="grid grid-pad">
        		<div class="col-1-1"> 
        
    				<?php dynamic_sidebar('home-skills-widget'); ?>  
                         
                </div>   
        	</div><!-- grid -->
        </div><!-- home-content -->
            
     <?php endif; ?> 