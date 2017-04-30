<?php
/**
 * @package sensible
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<div class="entry-content">
		<?php the_content(); ?>

		<?php

		// get raw date
		$date = get_field('date_completed', false, false);


		// make date object
		$date = new DateTime($date);

			if( get_field ( 'description' ) ) {
				echo '<div class="port-project">'; ?>
					<img src="<?php the_field( 'project_image' ); ?>" />
					<?php
					echo '<h1>' . get_field( 'project_title' ) . '</h1>';
					echo '<p>Launch date: ' . $date->format('F j, Y') . '</p>';
					echo '<p> Is this project responsive? ' . get_field( 'responsive' ) . '</p>';
					echo '<p>Description of this project: ' . get_field( 'description' ) . '</p>';
				echo '</div>';
			}

		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'sensible' ),
				'after'  => '</div>',
			) );
		?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php sensible_entry_footer(); ?>
		</footer><!-- .entry-footer -->  
	</article><!-- #post-## -->
