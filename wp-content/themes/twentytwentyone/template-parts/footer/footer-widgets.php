<?php
/**
 * Displays the footer widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

	
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	
		

<?php endif; ?>
