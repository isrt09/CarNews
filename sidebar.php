<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    <div class="sidebar-wrap">
        <div class="siderbar-widget">
            <h4 class="sidebar-widget-title">Search</h4>
            <div class="search-form">
                <form action="<?php echo home_url('/');?>" method="get">
                    <input class="search-field" placeholder="Search" value="" type="search" name="s">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
        <div class="siderbar-widget">
            <h4 class="sidebar-widget-title">Category</h4>
            <ul>
                <?php 
                    $args = array(
                        'orderby' => 'slug',
                        'parent'  => 0
                    );
                    $categories = get_categories($ars);
                    foreach($categories as $category){
                        echo "<li><a href='".get_category_link($category->term_id)."'>".$category->name."</a></li>";
                    }
                 ?>                
            </ul>
        </div>
        <div class="siderbar-widget">
            <h4 class="sidebar-widget-title">ARCHIVES</h4>
            <ul>
               <?php wp_get_archives(array('type'=>'monthly','order'=>'ASC','limit'=>12));?>
            </ul>
        </div>
        <div class="siderbar-widget">
            <h4 class="sidebar-widget-title"><?php _e("RECENT NEWS"); ?></h4>
            <?php 
            $recent_news = new WP_Query(array(
                "post_type"     => "post",                
                'orderby'       => 'title',
                'order'         => 'ASC',
                'posts_per_page'=>  3                 
            ));
            if($recent_news->have_posts()) : while( $recent_news->have_posts() ) : $recent_news->the_post(); ?>
            <div class="widget-news">
                <a href="#"><?php the_post_thumbnail(array('class' => 'post-thumb'));?></a>
                <div class="news-text">
                    <p><?php the_title(); ?></p>
                    <a class="" href="<?php the_permalink(); ?>"><?php _e("Read More"); ?></a>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>            
        </div>
         <div class="siderbar-widget">
            <h4 class="sidebar-widget-title"><?php _e("POPULAR NEWS"); ?></h4>
            <?php 
            $recent_news = new WP_Query(array(
                "post_type"     => "post",                
                'orderby'       =>  rand,
                'order'         => 'DESC',
                'posts_per_page'=>  3                 
            ));
            if($recent_news->have_posts()) : while( $recent_news->have_posts() ) : $recent_news->the_post(); ?>
            <div class="widget-news">
                <a href="#"><?php the_post_thumbnail(array('class' => 'post-thumb'));?></a>
                <div class="news-text">
                    <p><?php the_title(); ?></p>
                    <a class="" href="<?php the_permalink(); ?>"><?php _e("Read More"); ?></a>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>            
        </div>
        <div class="siderbar-widget">
            <h4 class="sidebar-widget-title">Tags</h4>
            <ul class="tag-list">                
                <?php the_tags('<li>'," ",'</li>'); ?>               
            </ul>
        </div>
    </div>
</div>