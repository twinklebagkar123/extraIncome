<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>

<section class="section2">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                <div class="section-title">
                        <span class="wn-deep-title-shape elementor-repeater-item-848bb03 after"></span>
                        <h1 class="innertitle">Latest Posts</h1>
                    </div>
                    <div class="section-blogs">
                            <?php
                        // the query
                        $the_query = new WP_Query( array(
                            'posts_per_page' => -1,
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
                                            <i class="pe-7s-clock"></i><?php echo get_the_date();?>
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
              <div class="col-sm-4">
                <div class="aboutside">
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
                                    I am Chintan, an employee turned entrepreneur, YouTuber and now a blogger too.
I've spent more than 15 years in the stock trading and financial markets working day and night. I decided to take a break in 2017 to spend time with my growing son.
After a few months of being at home with him, I started feeling restless and wanted to get back into the workforce.
                                    </p>
                                    <a href="#contact">READ MORE</a>
                            </div>
                        </div>

                    </div>
                    <div class="mt-4 sidebar">
                    <?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>
                    </div>
                </div>
                </div>

            </div>

        </div>
</section>
<?php
get_footer();?>
