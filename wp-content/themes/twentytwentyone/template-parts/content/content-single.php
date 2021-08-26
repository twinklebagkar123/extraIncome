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
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="breadcrumbs">

				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8">
				<div class="title">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					
				</div>
				<div class="thumbnail">
					<?php twenty_twenty_one_post_thumbnail(); ?>
					<?php twenty_twenty_one_entry_meta_footer(); ?>
				</div>
				<div class="content">
					<?php the_content(); ?>
					
				</div>
			</div>
			<div class="col-sm-4 navigation">
			
			</div>
		</div>
	</div>

	<header class="entry-header alignwide">
		
		
	</header><!-- .entry-header -->

	<div class="entry-content">
		
	</div><!-- .entry-content -->

	

	<?php //if ( ! is_singular( 'attachment' ) ) : ?>
		<?php //get_template_part( 'template-parts/post/author-bio' ); ?>
	<?php //endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
