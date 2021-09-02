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
            <div class="col-sm-6">
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
			<div class="col-sm-6">
				<?php if ( is_active_sidebar( 'widget-areas-57' ) ) : ?>
					<div id="widget-areas-57" class="widget-areas area1Class">
					<?php dynamic_sidebar( 'widget-areas-57' ); ?>
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
<!-- Back to top button -->
<button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
  <i class="fas fa-arrow-up"></i>
</button>

</div><!-- #page -->

<?php wp_footer(); ?>
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
//Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
</body>
</html>


