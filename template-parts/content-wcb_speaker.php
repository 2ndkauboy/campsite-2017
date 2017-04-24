<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package CampSite_2017
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content wcb-speaker">
		<?php
			the_content();

			$sessions = new WP_Query( array(
				'post_type' => 'wcb_session',
				'orderby' => 'date',
				'order' => 'desc',
			) );

			if ( $sessions->have_posts() ) {

				echo '<h2>' . esc_html__( 'Sessions', 'wordcamporg' ) . '</h2>';

				while ( $sessions->have_posts() ) {
					$sessions->the_post();
					$links = array();

					if ( $url = get_post_meta( $post->ID, '_wcpt_session_slides', true ) ) {
						$links['slides'] = array(
							'url'   => $url,
							'label' => __( 'Slides', 'wordcamporg' ),
						);
					}

					if ( $url = get_post_meta( $post->ID, '_wcpt_session_video', true ) ) {
						$links['video'] = array(
							'url'   => $url,
							'label' => __( 'Video', 'wordcamporg' ),
						);
					}

					?>
					<div id="wcorg-session-<?php the_ID(); ?>" class="wcorg-session" >
						<h3><?php the_title(); ?></h3>
						<div class="wcorg-session-description">
							<?php the_excerpt(); ?>

							<?php if ( $links ) : ?>
								<ul class="wcorg-session-links">
									<?php foreach ( $links as $link ) : ?>
										<li>
											<a href="<?php echo esc_url( $link['url'] ); ?>">
												<?php echo esc_html( $link['label'] ); ?>
											</a>
										</li>
									<?php endforeach; ?>
								</ul>
							<?php endif; ?>
						</div>
					</div>
					<?php
				}
			}

			wp_reset_postdata();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wordcamporg' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'wordcamporg' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->
