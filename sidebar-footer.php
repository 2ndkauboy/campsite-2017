<?php
/**
 * The sidebar widget areas in the footer
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CampSite_2017
 */

if ( is_active_sidebar( 'footer-1' )
	|| is_active_sidebar( 'footer-2' )
	|| is_active_sidebar( 'footer-3' )
	|| is_active_sidebar( 'footer-4' )
	|| is_active_sidebar( 'footer-5' )
) {
	?>
	<div id="footer-widgets">
		<?php

		foreach ( range( 1, 5 ) as $index ) {
			if ( is_active_sidebar( 'footer-' . $index ) ) {
				?>
				<div id="footer-widget-<?php echo $index; /* WPCS: xss ok. */ ?>" class="footer-widgets-block">
					<?php dynamic_sidebar( 'footer-' . $index ); ?>
				</div>
				<?php
			}
		}
		?>
	</div>
	<?php
}
