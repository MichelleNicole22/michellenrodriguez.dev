<?php
/**
 * The template part for displaying home widget area
 *
 * @package sensible-wp
 */
?>


			<?php if ( is_active_sidebar('home-widget') ) : ?> 
        
        		<div class="home-cta sensible-home-widget parallax-window" data-parallax="scroll" data-image-src="<?php echo esc_url( get_theme_mod( 'sensible_main_widget_background' )); ?>">
        
        			<div class="grid grid-pad">
                   	
						<div class="sensible-home-widget-area"> 
                    
                    		<div class="col-1-1">
                
                				<?php if ( get_theme_mod( 'home_widget_icon' ) ) : ?>
                            
                					<i class="fa <?php echo esc_html( get_theme_mod( 'home_widget_icon' )); ?>"></i>
                		
								<?php endif; ?> 
                    
                    		</div><!-- col-1-1 --> 
                    
                    		<div class="col-1-1">
                        
                    			<?php dynamic_sidebar('home-widget'); ?>   
                               
    		 				</div><!-- col-1-1 -->
    
                    		<div class="col-1-1">
                 
                                
                                	<?php 	$sensible_int_url = esc_url( get_page_link( get_theme_mod( 'sensible_widget_button_url' ))); 
											$sensible_ext_url = esc_url( get_theme_mod( 'sensible_page_url_text' )); 
                
                					if ( get_theme_mod( 'sensible_widget_button_url' ) ) : ?>
                     
                        				<a href="<?php echo $sensible_int_url ?>"> 
                        					<?php if ( get_theme_mod( 'sensible_widget_button_text' ) ) : ?> 
                            					<button class="outline white">
													<?php echo esc_html( get_theme_mod( 'sensible_widget_button_text' )); ?>
                                        		</button>
											<?php endif; ?>
                        				</a>
                            
                   					<?php elseif ( get_theme_mod( 'sensible_page_url_text' ) ) : ?>
                         
                        				<a href="<?php echo $sensible_ext_url ?>" target="_blank"> 
                        					<?php if ( get_theme_mod( 'sensible_widget_button_text' ) ) : ?> 
                            					<button class="outline white">
													<?php echo esc_html( get_theme_mod( 'sensible_widget_button_text' )); ?>
                                        		</button>
											<?php endif; ?>
                        				</a>
                          
                					<?php endif; ?> 
                                    
                    
                    		</div><!-- col-1-1 --> 
                    
            			</div><!-- sensible-home-widget-area --> 
					
					</div><!-- grid -->
        		
     			</div><!-- home-cta --> 
        
     		<?php endif; ?>