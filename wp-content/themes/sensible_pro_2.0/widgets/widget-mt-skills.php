<?php



class sensible_skills extends WP_Widget { 
	
	

// constructor

    function sensible_skills() {

		$widget_ops = array('classname' => 'sensible_skills_widget', 'description' => __( 'Got some skills? Show them off with some neat progress bars.', 'sensible') );

        parent::__construct(false, $name = __('MT - Skills', 'sensible'), $widget_ops); 

		$this->alt_option_name = 'sensible_skills_widget'; 

		

		add_action( 'save_post', array($this, 'flush_widget_cache') );

		add_action( 'deleted_post', array($this, 'flush_widget_cache') );

		add_action( 'switch_theme', array($this, 'flush_widget_cache') );		

    }

	

	// widget form creation

	function form($instance) {



	// Check values

		$title     		= isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';

		$skills_desc 	= isset( $instance['skills_desc'] ) ? wp_kses_post( $instance['skills_desc'] ) : '';

		$skill_one   	= isset( $instance['skill_one'] ) ? esc_html( $instance['skill_one'] ) : '';

		$skill_one_max  = isset( $instance['skill_one_max'] ) ? absint( $instance['skill_one_max'] ) : '';

		$skill_two   	= isset( $instance['skill_two'] ) ? esc_html( $instance['skill_two'] ) : '';

		$skill_two_max  = isset( $instance['skill_two_max'] ) ? absint( $instance['skill_two_max'] ) : '';

		$skill_three   	= isset( $instance['skill_three'] ) ? esc_html( $instance['skill_three'] ) : '';

		$skill_three_max= isset( $instance['skill_three_max'] ) ? absint( $instance['skill_three_max'] ) : '';

		$skill_four   	= isset( $instance['skill_four'] ) ? esc_html( $instance['skill_four'] ) : '';		

		$skill_four_max = isset( $instance['skill_four_max'] ) ? absint( $instance['skill_four_max'] ) : '';

		$skill_five   	= isset( $instance['skill_five'] ) ? esc_html( $instance['skill_five'] ) : '';

		$skill_five_max = isset( $instance['skill_five_max'] ) ? absint( $instance['skill_five_max'] ) : '';
		
		$skill_style	= isset( $instance['skill_style'] ) ? (bool) $instance['skill_style'] : false;
	

	?>
 


	<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'sensible'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />

	</p>



	<p>

	<label for="<?php echo $this->get_field_id('skills_desc'); ?>"><?php _e('Enter your description for the skills area.', 'sensible'); ?></label>

	<textarea class="widefat" id="<?php echo $this->get_field_id('skills_desc'); ?>" name="<?php echo $this->get_field_name('skills_desc'); ?>"><?php echo wp_kses_post( $skills_desc ); ?></textarea>

	</p>



	<!-- Skill one -->

	<p>

	<label for="<?php echo $this->get_field_id('skill_one'); ?>"><?php _e('First Skill', 'sensible'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('skill_one'); ?>" name="<?php echo $this->get_field_name('skill_one'); ?>" type="text" value="<?php echo $skill_one; ?>" />

	</p>



	<p>

	<label for="<?php echo $this->get_field_id('skill_one_max'); ?>"><?php _e('First Skill Percentage', 'sensible'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('skill_one_max'); ?>" name="<?php echo $this->get_field_name('skill_one_max'); ?>" type="text" value="<?php echo $skill_one_max; ?>" />

	</p>



	<!-- Skill two -->

	<p>

	<label for="<?php echo $this->get_field_id('skill_two'); ?>"><?php _e('Second Skill', 'sensible'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('skill_two'); ?>" name="<?php echo $this->get_field_name('skill_two'); ?>" type="text" value="<?php echo $skill_two; ?>" />

	</p>



	<p>

	<label for="<?php echo $this->get_field_id('skill_two_max'); ?>"><?php _e('Second Skill Percentage', 'sensible'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('skill_two_max'); ?>" name="<?php echo $this->get_field_name('skill_two_max'); ?>" type="text" value="<?php echo $skill_two_max; ?>" />

	</p>



	<!-- Skill three -->

	<p>

	<label for="<?php echo $this->get_field_id('skill_three'); ?>"><?php _e('Third skill', 'sensible'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('skill_three'); ?>" name="<?php echo $this->get_field_name('skill_three'); ?>" type="text" value="<?php echo $skill_three; ?>" />

	</p>



	<p>

	<label for="<?php echo $this->get_field_id('skill_three_max'); ?>"><?php _e('Third Skill Percentage', 'sensible'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('skill_three_max'); ?>" name="<?php echo $this->get_field_name('skill_three_max'); ?>" type="text" value="<?php echo $skill_three_max; ?>" />

	</p>



	<!-- Skill four -->

	<p>

	<label for="<?php echo $this->get_field_id('skill_four'); ?>"><?php _e('Fourth Skill', 'sensible'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('skill_four'); ?>" name="<?php echo $this->get_field_name('skill_four'); ?>" type="text" value="<?php echo $skill_four; ?>" />

	</p>



	<p>

	<label for="<?php echo $this->get_field_id('skill_four_max'); ?>"><?php _e('Fourth Skill Percentage', 'sensible'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('skill_four_max'); ?>" name="<?php echo $this->get_field_name('skill_four_max'); ?>" type="text" value="<?php echo $skill_four_max; ?>" />

	</p>



	<!-- Skill five -->

	<p>

	<label for="<?php echo $this->get_field_id('skill_five'); ?>"><?php _e('Fifth Skill', 'sensible'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('skill_five'); ?>" name="<?php echo $this->get_field_name('skill_five'); ?>" type="text" value="<?php echo $skill_five; ?>" />

	</p>



	<p>

	<label for="<?php echo $this->get_field_id('skill_five_max'); ?>"><?php _e('Fifth Skill Percentage', 'sensible'); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id('skill_five_max'); ?>" name="<?php echo $this->get_field_name('skill_five_max'); ?>" type="text" value="<?php echo $skill_five_max; ?>" />

	</p>	
    
     <p>
    
    <input class="checkbox" type="checkbox" <?php checked( $skill_style ); ?> id="<?php echo $this->get_field_id( 'skill_style' ); ?>" name="<?php echo $this->get_field_name( 'skill_style' ); ?>" />

	<label for="<?php echo $this->get_field_id( 'skill_style' ); ?>"><?php _e( 'Check this box to show Skill Bars on right instead of left.', 'sensible' ); ?></label>
    
    </p> 
					

	

	<?php

	}



	// update widget

	function update($new_instance, $old_instance) {

		$instance = $old_instance;

		$instance['title'] 			= esc_attr($new_instance['title']);

		$instance['skills_desc'] 	= wp_kses_post($new_instance['skills_desc']);

		$instance['skill_one'] 		= esc_html($new_instance['skill_one']);

		$instance['skill_one_max'] 	= intval($new_instance['skill_one_max']);

		$instance['skill_two'] 		= esc_html($new_instance['skill_two']);

		$instance['skill_two_max'] 	= intval($new_instance['skill_two_max']);

		$instance['skill_three'] 	= esc_html($new_instance['skill_three']);

		$instance['skill_three_max']= intval($new_instance['skill_three_max']);

		$instance['skill_four'] 	= esc_html($new_instance['skill_four']);

		$instance['skill_four_max'] = intval($new_instance['skill_four_max']);

		$instance['skill_five'] 	= esc_html($new_instance['skill_five']);

		$instance['skill_five_max'] = intval($new_instance['skill_five_max']);
		
		$instance['skill_style'] 		= isset( $new_instance['skill_style'] ) ? (bool) $new_instance['skill_style'] : false;
		

		$this->flush_widget_cache();



		$alloptions = wp_cache_get( 'alloptions', 'options' );

		if ( isset($alloptions['sensible_skills']) )

			delete_option('sensible_skills');	  

		  

		return $instance;

	}

	

	function flush_widget_cache() {

		wp_cache_delete('sensible_skills', 'widget');

	}

	

	// display widget

	function widget($args, $instance) {
      		

		$cache = array();

		if ( ! $this->is_preview() ) {

			$cache = wp_cache_get( 'sensible_skills', 'widget' );

		}



		if ( ! is_array( $cache ) ) {

			$cache = array();

		}



		if ( ! isset( $args['widget_id'] ) ) {

			$args['widget_id'] = $this->id;

		}



		if ( isset( $cache[ $args['widget_id'] ] ) ) {

			echo $cache[ $args['widget_id'] ];

			return;

		}



		ob_start();

		extract($args);



		$title 			= ( ! empty( $instance['title'] ) ) ? $instance['title'] : '';

		$title 			= apply_filters( 'widget_title', esc_attr( $title ), $instance, $this->id_base );

		$skills_desc 	= isset( $instance['skills_desc'] ) ? wp_kses_post($instance['skills_desc']) : '';

		$skill_one   	= isset( $instance['skill_one'] ) ? esc_html( $instance['skill_one'] ) : '';

		$skill_one_max  = isset( $instance['skill_one_max'] ) ? absint( $instance['skill_one_max'] ) : '';

		$skill_two   	= isset( $instance['skill_two'] ) ? esc_attr( $instance['skill_two'] ) : '';

		$skill_two_max  = isset( $instance['skill_two_max'] ) ? absint( $instance['skill_two_max'] ) : '';

		$skill_three   	= isset( $instance['skill_three'] ) ? esc_attr( $instance['skill_three'] ) : '';

		$skill_three_max= isset( $instance['skill_three_max'] ) ? absint( $instance['skill_three_max'] ) : '';

		$skill_four   	= isset( $instance['skill_four'] ) ? esc_attr( $instance['skill_four'] ) : '';		

		$skill_four_max = isset( $instance['skill_four_max'] ) ? absint( $instance['skill_four_max'] ) : '';

		$skill_five   	= isset( $instance['skill_five'] ) ? esc_attr( $instance['skill_five'] ) : '';

		$skill_five_max = isset( $instance['skill_five_max'] ) ? absint( $instance['skill_five_max'] ) : ''; 
		
		$skill_style	= isset( $instance['skill_style'] ) ? (bool) $instance['skill_style'] : false;
		
						



?>



		<?php $skill_style 		= isset( $instance['skill_style'] ) ? (bool) $instance['skill_style'] : false; 

		if ( $skill_style ) {

			?>

			<section id="mt-skills"> 	
                    
                    <?php if ( $title ) : ?>
                    
                    <div class="grid grid-pad">
        				<div class="col-1-1"><?php echo $before_title . $title . $after_title; ?></div>
        			</div> 
                    
                    <?php endif; ?> 
					
                    <div class="grid grid-pad">
                    
                    
                    <?php if ($skills_desc !='') : ?>				

						<div class="col-1-2 skills-p">

							<?php echo wp_kses_post( $skills_desc ); ?> 

						</div>

					<?php endif; ?>
                    	
                
                		<?php if ($skills_desc !='') : ?>
                			<div class="col-1-2 skills-info">
                    	<?php else : ?>
                    		<div class="col-1-1 skills-info">
                    	<?php endif; ?>

						<?php

						if ($skill_one !='') {

							echo '<p>' . esc_html($skill_one) . '</p>';
                			echo '<div class="progressBar" id="max' . absint($skill_one_max) . '"><div></div></div>';

						}

						if ($skill_two !='') {

							echo '<p>' . esc_html($skill_two) . '</p>';
                			echo '<div class="progressBar" id="max' . absint($skill_two_max) . '"><div></div></div>';

						}

						if ($skill_three !='') {

							echo '<p>' . esc_html($skill_three) . '</p>';
                			echo '<div class="progressBar" id="max' . absint($skill_three_max) . '"><div></div></div>';

						}

						if ($skill_four !='') {

							echo '<p>' . esc_html($skill_four) . '</p>';
                			echo '<div class="progressBar" id="max' . absint($skill_four_max) . '"><div></div></div>';

						}

						if ($skill_five !='') {

							echo '<p>' . esc_html($skill_five) . '</p>';
                			echo '<div class="progressBar" id="max' . absint($skill_five_max) . '"><div></div></div>';

						}

						?>	
                    
                    	</div>
                         	
                    
					</div>										
				</section>		

		<?php } 
		
		else 
		
		{ ?>

			<section id="mt-skills"> 	
                    
                    <div class="grid grid-pad">
        				<div class="col-1-1"><?php if ( $title ) echo $before_title . $title . $after_title; ?></div>
        			</div> 
					
                    <div class="grid grid-pad">
                
                	<?php if ($skills_desc !='') : ?>
                		<div class="col-1-2 skills-info">
                    <?php else : ?>
                    	<div class="col-1-1 skills-info">
                    <?php endif; ?> 

						<?php

						if ($skill_one !='') {

							echo '<p>' . esc_html($skill_one) . '</p>';
                			echo '<div class="progressBar" id="max' . absint($skill_one_max) . '"><div></div></div>';

						}

						if ($skill_two !='') { 

							echo '<p>' . esc_html($skill_two) . '</p>';
                			echo '<div class="progressBar" id="max' . absint($skill_two_max) . '"><div></div></div>';

						}

						if ($skill_three !='') {

							echo '<p>' . esc_html($skill_three) . '</p>';
                			echo '<div class="progressBar" id="max' . absint($skill_three_max) . '"><div></div></div>';

						}

						if ($skill_four !='') {

							echo '<p>' . esc_html($skill_four) . '</p>';
                			echo '<div class="progressBar" id="max' . absint($skill_four_max) . '"><div></div></div>';

						}

						if ($skill_five !='') {

							echo '<p>' . esc_html($skill_five) . '</p>';
                			echo '<div class="progressBar" id="max' . absint($skill_five_max) . '"><div></div></div>';

						}

						?>	
                    
                    	</div>
                         	
                    
                    	<?php if ($skills_desc !='') : ?>				

						<div class="col-1-2 skills-p">

							<?php echo wp_kses_post( $skills_desc ); ?>

						</div>

					<?php endif; ?> 
            
				
			</div>										
		</section>		

		<?php }	?>

		

	<?php



		if ( ! $this->is_preview() ) {

			$cache[ $args['widget_id'] ] = ob_get_flush();

			wp_cache_set( 'sensible_skills', $cache, 'widget' );

		} else {

			ob_end_flush();

		}

	}

	

}