<?php get_header(); ?>
    <!--Main Slider-->
    <section id="home-slider-v1" class="slider-v1">
        <div class="main-slider-v1 owl-item">
            <div class="item" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/resource/home-slide-1.jpg);">
                <div class="overlay"></div>
                <div class="slide-description">
                    <div class="animate-item">
                        <h2>Welcome to Our Car Care House!!!</h2>
                    </div>
                    <div class="animate-item">
                        <h3>Top One Car Care in your city with very good quality Engr.</h3>
                    </div>
                    <div class="animate-item">
                        <a class="btn-1 btn btn-primary" href="#">Contact</a>
                        <a class="btn-2 btn btn-primary" href="#">Appoinment</a>
                    </div>
                </div>
            </div>
            <div class="item" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/resource/home-slide-2.jpg);">
                <div class="overlay"></div>
                <div class="slide-description">
                    <div class="animate-item">
                        <h2>Welcome to Our Car Care House!!!</h2>
                    </div>
                    <div class="animate-item">
                        <h3>Top One Car Care in your city with very good quality Engr.</h3>
                    </div>
                    <div class="animate-item">
                        <a class="btn-1 btn btn-primary" href="#">Contact</a>
                        <a class="btn-2 btn btn-primary" href="#">Appoinment</a>
                    </div>
                </div>
            </div>
            <div class="item" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/resource/home-slide-3.jpg);">
                <div class="overlay"></div>
                <div class="slide-description">
                    <div class="animate-item">
                        <h2>Welcome to Our Car Care House!!!</h2>
                    </div>
                    <div class="animate-item">
                        <h3>Top One Car Care in your city with very good quality Engr.</h3>
                    </div>
                    <div class="animate-item">
                        <a class="btn-1 btn btn-primary" href="#">Contact</a>
                        <a class="btn-2 btn btn-primary" href="#">Appoinment</a>
                    </div>
                </div>
            </div>
            <div class="item" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/resource/home-slide-4.jpg);">
                <div class="overlay"></div>
                <div class="slide-description">
                    <div class="animate-item">
                        <h2>Welcome to Our Car Care House!!!</h2>
                    </div>
                    <div class="animate-item">
                        <h3>Top One Car Care in your city with very good quality Engr.</h3>
                    </div>
                    <div class="animate-item">
                        <a class="btn-1 btn btn-primary" href="#">Contact</a>
                        <a class="btn-2 btn btn-primary" href="#">Appoinment</a>
                    </div>
                </div>
            </div>
            <div class="item" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/resource/home-slide-5.jpg);">
                <div class="overlay"></div>
                <div class="slide-description">
                    <div class="animate-item">
                        <h2>Welcome to Our Car Care House!!!</h2>
                    </div>
                    <div class="animate-item">
                        <h3>Top One Car Care in your city with very good quality Engr.</h3>
                    </div>
                    <div class="animate-item">
                        <a class="btn-1 btn btn-primary" href="#">Contact</a>
                        <a class="btn-2 btn btn-primary" href="#">Appoinment</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Slider End -->`
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
                                            <p><?php the_excerpt(); ?></p>
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
                                <h1><?php esc_html_e('Sorry! Not Found!....'); ?></h1><br>
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

    