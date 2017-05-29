<?php
/**
 * The sidebar widget areas after the header
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CampSite_2017
 */

namespace WordCamp\CampSite_2017;

if ( is_active_sidebar( 'header-1' )
	|| is_active_sidebar( 'header-2' )
	|| is_active_sidebar( 'header-3' )
	|| is_active_sidebar( 'header-4' )
	|| is_active_sidebar( 'header-5' )
) {
	?>
	<div id="header-widgets">
		<?php

		foreach ( range( 1, 5 ) as $index ) {
			if ( is_active_sidebar( 'header-' . $index ) ) {
				?>
				<div id="header-widget-<?php echo $index; /* WPCS: xss ok. */ ?>" class="header-widgets-block">
					<?php dynamic_sidebar( 'header-' . $index ); ?>
				</div>
				<?php
			}
		}
		?>
	</div>
	<?php
}
