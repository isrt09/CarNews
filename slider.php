<!--Main Slider-->
    <section id="home-slider-v1" class="slider-v1">
        <div class="main-slider-v1 owl-item">
        <?php 
            $carnews_slider = new WP_Query(array(
                'post_type' => 'gallery'
            ));

            if($carnews_slider->have_posts()){
                while($carnews_slider->have_posts()){
                    $carnews_slider->the_post(); 
                    $slider_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'full'); ?>
            <div class="item" style="background-image: url(<?php echo $slider_image['0']?>);">
                <div class="overlay"></div>
                <div class="slide-description">
                    <div class="animate-item">
                        <?php the_title('<h2>','</h2>') ?>
                    </div>
                    <div class="animate-item">
                         <h3><?php the_content() ?></h3>
                    </div>
                    <div class="animate-item">
                        <a class="btn-1 btn btn-primary" href="#">Contact</a>
                        <a class="btn-2 btn btn-primary" href="#">Appoinment</a>
                    </div>
                </div>
            </div>
            <?php  }
                }
            ?>        
        </div>
    </section>
    <!-- Slider End -->