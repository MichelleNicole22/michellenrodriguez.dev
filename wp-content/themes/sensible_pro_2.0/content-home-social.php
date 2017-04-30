
								
  		<?php if ( is_active_sidebar('home-social-widget') ) : ?>
    
        	<?php if ( get_theme_mod( 'social_text' ) ) : ?>
        		<div class="social-bar">
        	<?php else : ?>
        		<div class="social-bar-none">
        	<?php endif; ?> 
        
        		<div class="grid grid-pad">
        			<div class="col-1-1">
                
                			<?php if ( get_theme_mod( 'social_text' ) ) : ?>
                    
        			  			<span class="wow animated fadeIn">
                            
									<?php echo wp_kses_post(get_theme_mod( 'social_text' )); ?>
                                
                            	</span>
					
							<?php endif; ?> 
                    
                    	<div class="wow animated fadeIn">
                            
    						<?php dynamic_sidebar('home-social-widget'); ?>  
                                
                        </div>      
    		 		
                    </div><!-- col-1-1 -->
                </div><!-- grid --> 
        		
        	<?php if ( get_theme_mod( 'social_text' ) ) : ?>
        		</div><!-- social-bar -->
        	<?php else : ?>
        		</div><!-- social-bar --> 
        	<?php endif; ?> 
        
		<?php endif; ?>