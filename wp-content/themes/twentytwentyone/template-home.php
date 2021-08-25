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
                            <div class="blog-content position-absolute width">
                                <div class="post-meta">
                                    <div class="blog-cat">
                                        <a href="" class="category-tag white">Life Style new</a>					
                                    </div>
                                    <div class="blog-date white">
                                        <a href="https://deeptem.com/blog/2021/03/01/start-new-season-with-latest-zaras-collection/">1 March 2021</a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <h4 class="post-title white"><a class="white title" href="https://deeptem.com/blog/2021/03/01/start-new-season-with-latest-zaras-collection/"><?php the_title();?></a></h4>
                                
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
                <div class="wrapper">
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
<section class="section2">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="section-title">
                        <span class="wn-deep-title-shape elementor-repeater-item-848bb03 after"></span>
                        <h1 class="innertitle">Latest Posts</h1>
                    </div>
                    <div class="section-blogs">
                    <?php
                // the query
                $the_query = new WP_Query( array(
                    'posts_per_page' => 6,
                )); 
                ?>

                <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
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
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>

                <?php else : ?>
                <p><?php __('No News'); ?></p>
                <?php endif; ?>
                    </div>
                </div>
                <div class="col-4">
                    <div class="section-title">
                        <span class="wn-deep-title-shape elementor-repeater-item-848bb03 after"></span>
                        <h1 class="innertitle">About us</h1>
                    </div>
                    <div class="sectionAboutUs">
                        <div class="wrapper">
                            <div class="image">
                                <img src="https://weblozee.com/extraIncome/wp-content/uploads/2021/08/el-deep-img-about-p3mc3kze3q0dtd2qi0ge0bsqfxlxxqvryhhdeuja7g.png" class="img-fluid">
                            </div>
                            <div class="content">
                                
                                    <p>
                                    Over the last 10-15 years have noticed my teeth beginning to move and shift.
                                     I had braces (twice) growing stopped also something using…
                                    </p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
</section>
<?php
get_footer();
?>