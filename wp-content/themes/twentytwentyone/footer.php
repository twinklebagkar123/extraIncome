<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

<section class="footer">
<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container">
		<div class="row">
            <div class="col-sm-3">
				<div class="site-name">
					<?php if ( has_custom_logo() ) : ?>
						<div class="site-logo"><?php the_custom_logo(); ?></div>
					<?php else : ?>
						<?php if ( get_bloginfo( 'name' ) && get_theme_mod( 'display_title_and_tagline', true ) ) : ?>
							<?php if ( is_front_page() && ! is_paged() ) : ?>
								<?php bloginfo( 'name' ); ?>
							<?php else : ?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
							<?php endif; ?>
						<?php endif; ?>
					<?php endif; ?>
				</div><!-- .site-name -->
			</div>
			<div class="col-3">
				<?php if ( is_active_sidebar( 'widget-areas-57' ) ) : ?>
					<div id="widget-areas-57" class="widget-areas area1Class">
					<?php dynamic_sidebar( 'widget-areas-57' ); ?>
					</div>
				<?php endif; ?>
			</div>
			<div class="col-sm-3">
			<?php if ( is_active_sidebar( 'widget-areas-59' ) ) : ?>
				<div id="widget-areas-59" class="widget-areas tagsArea">
				<?php dynamic_sidebar( 'widget-areas-59' ); ?>
				</div>
			<?php endif; ?>
			</div>
			<div class="col-sm-3 col-xs-hidden">
			<?php if ( is_active_sidebar( 'widget-areas-58' ) ) : ?>
				<div id="widget-areas-58" class="widget-areas recentPostArea">
				<?php dynamic_sidebar( 'widget-areas-58' ); ?>
				</div>
			<?php endif; ?>
			</div>
		</div>
		<div class="row">
			<hr>
            <div class="col-sm-6">
				<div class="powered-by">
				<a href="https://weblozee.com/" target="_blank" rel="noopener">WEBLOZEE</a> <em>Creations </em>
				</div><!-- .powered-by -->
			</div>
			<div class="col-sm-6">
			<?php if ( has_nav_menu( 'footer' ) ) : ?>
				<nav aria-label="<?php esc_attr_e( 'Secondary menu', 'twentytwentyone' ); ?>" class="footer-navigation">
					<ul class="footer-navigation-wrapper">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'footer',
								'items_wrap'     => '%3$s',
								'container'      => false,
								'depth'          => 1,
								'link_before'    => '<span>',
								'link_after'     => '</span>',
								'fallback_cb'    => false,
							)
						);
						?>
					</ul><!-- .footer-navigation-wrapper -->
				</nav><!-- .footer-navigation -->
			<?php endif; ?>
			</div>
		</div>
	</div>


</footer><!-- #colophon -->
</section>


</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
