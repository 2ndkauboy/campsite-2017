<?php
/**
 * The sidebar widget areas before the content
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CampSite_2017
 */

if ( is_front_page() ) {
	if ( is_active_sidebar( 'before-content-1' ) ) {
		?>
		<div id="content-widgets">
			<div id="content-widget-1" class="content-widgets-block">
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</div>
		</div>
		<?php
	}
} elseif ( is_page_template( 'templates/page-day-of.php' ) ) {
	if ( is_active_sidebar( 'before-content-day-of-1' )
	     || is_active_sidebar( 'before-content-day-of-2' )
	     || is_active_sidebar( 'before-content-day-of-3' )
	     || is_active_sidebar( 'before-content-day-of-4' )
	     || is_active_sidebar( 'before-content-day-of-5' )
	) {
		?>
		<div id="content-widgets">
			<?php

			foreach ( range( 1, 5 ) as $index ) {
				if ( is_active_sidebar( 'before-content-day-of-' . $index ) ) {
					?>
					<div id="content-widget-<?php echo $index; /* WPCS: xss ok. */ ?>" class="content-widgets-block">
						<?php dynamic_sidebar( 'before-content-day-of-' . $index ); ?>
					</div>
					<?php
				}
			}
			?>
		</div>
		<?php
	}
} else {
	if ( is_active_sidebar( 'before-content-homepage-1' )
		 || is_active_sidebar( 'before-content-homepage-2' )
		 || is_active_sidebar( 'before-content-homepage-3' )
		 || is_active_sidebar( 'before-content-homepage-4' )
		 || is_active_sidebar( 'before-content-homepage-5' )
	) {
		?>
		<div id="content-widgets">
			<?php

			foreach ( range( 1, 5 ) as $index ) {
				if ( is_active_sidebar( 'before-content-homepage-' . $index ) ) {
					?>
					<div id="content-widget-<?php echo $index; /* WPCS: xss ok. */ ?>" class="content-widgets-block">
						<?php dynamic_sidebar( 'before-content-homepage-' . $index ); ?>
					</div>
					<?php
				}
			}
			?>
		</div>
		<?php
	}
}
