<?php
/* template name: Homepage Template */
get_header();
?>
<section class="home-banner">
    <div class="container">
        <div class="row">
            <div class="col-8">
            <?php 
                // the query
                $the_query = new WP_Query( array(
                    'posts_per_page' => 1,
                )); 
                ?>

                <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                    <?php the_title(); ?>
                    <?php the_excerpt(); ?>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>

                <?php else : ?>
                <p><?php __('No News'); ?></p>
                <?php endif; ?>
            </div>
            <div class="col-4"><?php
                // the query
                $the_query = new WP_Query( array(
                    'posts_per_page' => 2,
                )); 
                ?>

                <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                    <?php the_title(); ?>
                    <?php the_excerpt(); ?>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>

                <?php else : ?>
                <p><?php __('No News'); ?></p>
                <?php endif; ?>
            </div>
        </div>
        
    </div>
</section>
<?php
get_footer();
?>