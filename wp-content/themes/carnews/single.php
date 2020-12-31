<?php get_header(); ?>   
    <!-- News / Blog section  
    ============================================= -->
    <div id="news-area" class="section-gray pdb-28 news-section-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 ftl">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                             <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
                                    <div class="post-box">
                                <div class="inner-post-box">
                                    <div class="image-box">
                                        <a href="<?php the_permalink(); ?>"><img class="img-responsive transition7s" src="<?php echo get_template_directory_uri(); ?>/images/resource/blog-1.jpg" alt=""></a>
                                        <div class="post-caption transition7s">
                                            <ul>
                                                <li><i class="fa fa-user"></i> <?php the_author(); ?></li>
                                                <li><i class="fa fa-calendar"></i> <?php the_time('M d, Y'); ?></li>
                                                <li><i class="fa fa-comment"></i><?php if ( comments_open() || get_comments_number() ) {
                    comments_template();
                } ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h3>
                                        <div class="text-des">
                                            <p><?php the_content(); ?></p>
                                        </div>

                                    </div>
                                    <div class="post-info clearfix">
                                        <div class="pull-left">
                                        <a class="btn btn-primary transition7s" href="<?php the_permalink(); ?>"><i class="fa fa-calendar"></i>&nbsp;&nbsp;<?php the_time('M d, Y'); ?></a>
                                        </div>
                                        <div class="pull-right">
                                        <a class="btn btn-primary transition7s" href="<?php the_permalink(); ?>">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <?php endwhile; else : ?>
                                <p><?php esc_html_e('Sorry! Not Fount!....'); ?></p>
                             <?php endif; ?>
                            
                        </div>                       
                        <div class="col-md-12">
                            <div class="pagination-area tac">
                                <nav>
                                    <ul class="pagination pagination-lg">
                                        <li class="disabled"><a aria-label="Previous" href="#"><span aria-hidden="true">«</span></a></li>
                                        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a aria-label="Next" href="#"><span aria-hidden="true">»</span></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <?php get_sidebar(); ?>                                    
            </div>
        </div>
    </div>
    <!-- /news table  -->   
    <!-- Footer
    ============================================= -->
   <?php get_footer(); ?>
    <!-- /Footer  -->

    