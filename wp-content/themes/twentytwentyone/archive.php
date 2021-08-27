<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

$description = get_the_archive_description();
?>

<?php if ( have_posts() ) : ?>

	<header class="page-header alignwide headerStyle">
		<?php the_archive_title( '<h1 class="page-title headingClass">', '</h1>' ); ?>
		<?php if ( $description ) : ?>
			<div class="archive-description"><?php echo wp_kses_post( wpautop( $description ) ); ?></div>
		<?php endif; ?>
	</header><!-- .page-header -->

	

	
   <div class="section2">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-blogs">
						<?php while ( have_posts() ) : ?>
							<?php the_post(); ?>
							<div class="blog-wrapper">
								<div class="omega">
									
										<div class="blogImage">
											<img class="img-fluid blog-img s-blog-img" src="<? the_post_thumbnail_url(); ?>">
										</div>
									
									
									<div class="blogContent">
										<div class="postmetadata">
											<h6 class="blog-date">
												<i class="pe-7s-clock"></i><?php the_date();?>
											</h6>
										</div>
										<h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3> 
										<p>When a blog crosses over into personal stories and emotions, it’s now entered into the realm of...</p>  
									</div>

								</div>
							</div>
							<?php //the_post(); ?>
							<?php //get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) ); ?>
						<?php endwhile; ?>
						</div>
					</div>
				</div>
			</div>
   </div>


	<?php twenty_twenty_one_the_posts_navigation(); ?>

<?php else : ?>
	<?php get_template_part( 'template-parts/content/content-none' ); ?>
<?php endif; ?>

<?php get_footer(); ?>
