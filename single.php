<?php get_header(); ?>
    <?php get_template_part('slider'); ?>

    <!-- News / Blog section  
    ============================================= -->
    <div id="news-area" class="section-gray news-section-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 ftl">
                     <?php 
                        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="single-page-details">
                        <h2><?php the_title(); ?></h2>
                        <p><img class="img-responsive" title="Tooltip on left" src="<?php echo get_template_directory_uri(); ?>/images/resource/blog-2.jpg" alt="">
                            <?php the_content(); ?>
                        </p>
                    </div>
					<?php endwhile ?>
                    <?php endif; ?>        
                    <div class="col-md-12">
                        <div class="comment-area">
                            <h2 class="page-header">Comments</h2>
                            <div class="comment-list">
                                <!-- First Comment -->
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 hidden-xs">
                                        <figure class="thumbnail">
                                            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/avatar.png" />
                                            <figcaption class="text-center">username</figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-md-10 col-sm-10">
                                        <div class="panel panel-default arrow left">
                                            <div class="panel-body">
                                                <header class="text-left">
                                                    <div class="comment-user"><i class="fa fa-user"></i> That Guy</div>
                                                    <div class="comment-date"><i class="fa fa-clock-o"></i> Dec 16, 2014</div>
                                                </header>
                                                <div class="comment-post">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                    </p>
                                                </div>
                                                <p class="text-right"><a href="#" class="btn btn-primary btn-sm"><i class="fa fa-reply"></i> reply</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Second Comment Reply -->
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-0 hidden-xs">
                                        <figure class="thumbnail">
                                            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/avatar.png" />
                                            <figcaption class="text-center">username</figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-md-9 col-sm-9">
                                        <div class="panel panel-default arrow left">
                                            <div class="panel-body">
                                                <header class="text-left">
                                                    <div class="comment-user"><i class="fa fa-user"></i> That Guy</div>
                                                    <div class="comment-date"><i class="fa fa-clock-o"></i> Dec 16, 2014</div>
                                                </header>
                                                <div class="comment-post">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                    </p>
                                                </div>
                                                <p class="text-right"><a href="#" class="btn btn-primary btn-sm"><i class="fa fa-reply"></i> reply</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-comment">
                                <h4>Leave a reply</h4>
                                <form action="#" method="post">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" name="name" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-item" name="email" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control form-item" rows="3" name="content" placeholder="Message"></textarea>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Post comment</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>
                    <?php get_sidebar(); ?>
                </div>               
            </div>
        </div>
    </div>
    <!-- /news table  -->
<?php get_footer(); ?>    