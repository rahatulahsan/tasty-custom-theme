<div class="background-img zoom" >
    <img src="img/6.jpg" alt="">
</div>
<!--Container-->
<div class="container">
    <!--Row-->
    <div class="row">
        <div class="col-sm-12 text-center front-p">
            <div class="review-slider flexslider">
            <ul class="slides">
                <?php 
                
                $args = array(
                    'post_type' => 'review',
                    'posts_per_page' => -1
                );
                $queries = new WP_Query($args);

                while($queries->have_posts()){
                    $queries->the_post(); ?>
                    <li>
                        <div class="block-review">
                            <h2 class="white h2-s-1 mb-5"><?php esc_html(the_title()); ?></h2>
                            <p><?php esc_html(the_content()); ?></p>
                            <ul class="block-star mt-10">
                                <?php $ratings = get_field('ratings'); 
                                    for($i=0; $i<$ratings; $i++){?>
                                        <li><i class="icon-star"></i></li>
                                    <?php }
                                ?>
                            </ul>
                        </div>
                    </li>
                <?php }
                    wp_reset_postdata(  );
                ?>

            </ul>
            </div>
        </div>
    </div>
    <!--End row-->
</div>
<!--End container-->