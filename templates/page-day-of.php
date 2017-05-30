<?php
/**
 * Template Name: Day Of Event
 *
 * A special template to be used at the day of the WordCamp with some extra widget areas.
 *
 * @package CampSite_2017
 */

get_header(); ?>

	<div id="primary" class="content-area<?php echo ( ! is_active_sidebar( 'sidebar-day-of-1' ) && ! is_active_sidebar( 'sidebar-day-of-2' ) ) ? ' no-sidebar' : '' ?> ">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'day-of' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar( 'day-of' );
get_footer();
