<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package CampSite_2017
 */

namespace WordCamp\CampSite_2017;

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header>

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wordcamporg' ),
				'after'  => '</div>',
			) );
		?>
	</div>

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'wordcamporg' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			); ?>
		</footer>
	<?php endif; ?>
</article>
