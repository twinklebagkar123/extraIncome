<?php
/**
 * Displays the footer widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
?>
<div class="section-title">
                        <span class="wn-deep-title-shape elementor-repeater-item-848bb03 after"></span>
                        <h1 class="innertitle">Categories</h1>
</div>

<button type="button" class="collapsible">View Categories</button>
<div class="content">
<?php
$categories = get_categories( array(
    'orderby' => 'name',
    'order'   => 'ASC'
) );
?>
<ul class="wp-block-categories-list wp-block-categories">
<?php
foreach( $categories as $category ) {
 echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';   
} 
?>
</ul>
</div>
<?php

if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

	
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	
		

<?php endif; ?>
