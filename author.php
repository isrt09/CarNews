<?php get_header(); ?>            
    
    <!-- News / Blog section  
    ============================================= -->
        
        <div id="news-area" class="section-gray pdb-28 news-section-single">                    
            <div class="container">
             <div class="profile-information-area">
                 <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                       <div class="profile-information-area-left">
                          <h4><?php the_author(); ?></h4>
                          <?php echo get_avatar(get_the_author_meta('ID')); ?><br>   
                          <?php the_author_meta('description'); ?>                                                      
                          <div class="profile-basic-info">
                             <ul>
                                <li><?php _e('Total post :') ?><span><?php echo get_the_author_posts(); ?></span></li>
                                <li><?php _e('Total Comments') ?> : <span><?php wp_list_comments(); ?></span> </li>
                                <li><a href="<?php the_author_meta("facebook"); ?>"><?php _e('Facebook') ?></a> </li>
                                <li><a href="<?php the_author_meta("twitter"); ?>"><?php _e('Twitter') ?></a> </li>
                                <li><a href="<?php the_author_meta("youtube"); ?>"><?php _e('YouTube') ?></a> </li> 
                                <li><?php _e('Email: ') ?><?php the_author_meta("user_email"); ?></li>
                             </ul>
                          </div>
                       </div>
                    </div>                        
                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">                            
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                          <div class="author-recent-post">
                             <div class="author-recent-post-item">
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <?php the_post_thumbnail(array('class' => 'post-thumb')); ?>      
                                <?php the_excerpt(); ?>                                                                                 
                                <div class="author-post-info">
                                   <ul>
                                      <li><?php _e('By : '); ?><?php get_the_author_meta("display_name"); ?></li>
                                      <li><?php _e('Date: ') ?><?php the_time('d F, Y'); ?></li>
                                      <li>Comments:<a href="http://localhost/mywordpress/blog/2018/05/05/test-custom-filed/#respond">No Comments »</a>  </li>
                                   </ul>
                                </div>
                             </div>
                          </div>                              
                       <div class="profile-information-area-right">                            
                       </div>
                       <?php endwhile ?>
                       <?php endif; ?>                               
                    </div>                           
                 </div>
              </div>                  
            </div>    
        </div>
    
    <!-- /news table  -->
<?php get_footer(); ?>       