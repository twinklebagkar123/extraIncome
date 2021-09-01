<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="title">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		
	</div>
	<?php twenty_twenty_one_entry_meta_footer(); ?>
	<div class="thumbnail">
		<?php twenty_twenty_one_post_thumbnail(); ?>
	</div>
	<div class="content">
		<?php the_content(); ?>
		
</div>


	<header class="entry-header alignwide">
		
		
	</header><!-- .entry-header -->

	<div class="entry-content">
	<?php
						wp_link_pages(
							array(
								'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
								'after'    => '</nav>',
								/* translators: %: Page number. */
								'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
							)
						);
					?>
	</div><!-- .entry-content -->

	

	<?php if ( ! is_singular( 'attachment' ) ) : ?>
		<?php get_template_part( 'template-parts/post/author-bio' ); ?>
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
