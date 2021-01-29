<?php 
/*
Template Name:Contact US
*/
get_header(); ?>    
    <!-- News / Blog section  
    ============================================= -->
    <div id="news-area" class="section-gray news-section-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ftl">
                     <?php 
                        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="single-page-details">
                        <h2><?php the_title(); ?></h2>
                        <?php the_post_thumbnail('large');?>
                        <?php the_content(); ?>                            
                        </p>
                    </div>
					<?php endwhile; else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'carnews' );  ?></p>
                    <?php endif; ?>                           
                    </div>                                        
                </div>               
            </div>
        </div>
    </div>
    <!-- /news table  -->
<?php get_footer(); ?>    