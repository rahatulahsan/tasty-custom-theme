<!--Container-->
<div class="container">
    <!--Row-->
    <div class="row">
        <div class="col-sm-12 text-center mb-100">
            <h1 class="title">Today's special</h1>
            <p class="beige">Special plate by the chef</p>
        </div>
    </div>
    <!--End row-->
</div>
<!--End container-->
<!--Container-->
<div class=" container">
    <!--Row-->
    <div class="row">
        <?php 
        
        $args = array(
            'post_type' => 'special',
            'posts_per_page' => -1
        );
        $specials = new WP_Query($args);
        while($specials->have_posts()){
            $specials->the_post();
            $posts_count = $specials->found_posts; 

            $items_included = get_field('items_included');
            $items_counter = count($items_included);
            $is_active = get_field('active');
     
            ?>

                <div class="col-md-4  pd-0 block-special <?php if($is_active){echo 'active';} ?>">
                     <div class="block-img special">
                        <div class="background-img">
                           <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        </div>
                     </div>
                     <div class="block-content special sp-2">
                        <h2 class="mb-5  h2-s-1"><?php esc_html(the_title()); ?>  </h2>
                        <?php 
                        for($i=0; $i<$items_counter; $i++){?>
                            <p><?php echo $items_included[$i]['special_items']; ?></p>
                        <?php }
                        
                        ?>
                        <span class="block-price special"><?php echo esc_html(get_field('price')); ?></span>
                     </div>
                  
                 </div>
            
        <?php }
            wp_reset_postdata(  );
        ?>
        

    </div>
    <!--End row-->
</div>
<!--End container-->