<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage CampSite_2017
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-branding">
	<?php if ( is_front_page() && is_home() ) : ?>
		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
	<?php else : ?>
		<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
	<?php endif; ?>

	<?php $description = get_bloginfo( 'description', 'display' ); ?>

	<?php if ( $description || is_customize_preview() ) : ?>
		<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
	<?php endif; ?>
</div><!-- .site-branding -->
