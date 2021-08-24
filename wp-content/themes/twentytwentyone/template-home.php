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
                    <div class="blog-inner position-relative">
                        <a href="<?php the_permalink();?>">
                            <img class="img-fluid blog-img" src="<? the_post_thumbnail_url(); ?>">
                        </a>
                        <div class="blog-content position-absolute">
			                <div class="post-meta">
                                <div class="blog-cat">
						            <a href="" class="category-tag">Life Style new</a>					
                                </div>
								<div class="blog-date">
						            <a href="https://deeptem.com/blog/2021/03/01/start-new-season-with-latest-zaras-collection/">1 March 2021</a>
					            </div>
								<div class="clearfix"></div>
			                </div>
                            <h3 class="post-title"><a href="https://deeptem.com/blog/2021/03/01/start-new-season-with-latest-zaras-collection/"><?php the_title();?></a></h3>
                            
                        </div>
                    </div>

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

                <div class="blog-inner position-relative">
                        <a href="<?php the_permalink();?>">
                            <img class="img-fluid blog-img s-blog-img" src="<? the_post_thumbnail_url(); ?>">
                        </a>
                        <div class="blog-content position-absolute s-content">
			                <div class="post-meta">
                                <div class="blog-cat">
						            <a href="" class="category-tag">Life Style new</a>					
                                </div>
								<div class="blog-date">
						            <a href="https://deeptem.com/blog/2021/03/01/start-new-season-with-latest-zaras-collection/">1 March 2021</a>
					            </div>
								<div class="clearfix"></div>
			                </div>
                            <h3 class="post-title"><a href="https://deeptem.com/blog/2021/03/01/start-new-season-with-latest-zaras-collection/"><?php the_title();?></a></h3>
                            
                        </div>
                    </div>

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