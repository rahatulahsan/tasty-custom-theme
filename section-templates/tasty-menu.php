<!--Container-->
<div class="container">
    <?php 
    
    $options = get_option( 'theme-options' );
    $tasty_menu_heading = $options['tasty-menu-heading'];
    $tasty_menu_subheading = $options['tasty-subheading'];
    ?>
    <!--Row-->
    <div class="row">
        <div class="col-sm-12  mb-100 text-center">
            <h1 class="title"> <?php echo esc_html($tasty_menu_heading); ?></h1>
            <p class="beige"> <?php echo esc_html($tasty_menu_subheading); ?></p>
        </div>
    </div>
    <!--End row-->
</div>
<!--End container-->
<!--Container-->
<!--Container-->
<div class="container">
        <!--Row-->
        <div class="row">
            <div class="col-sm-12 ">
                <!--Tabs-->
                <ul class="block-tabs text-center">
                    <?php 
                        $menu_cats = get_terms('type');
                        $menu_counter = 0;
                        foreach($menu_cats as $category){ $menu_counter++;?>
                            <li class="<?php if($menu_counter == 1) echo 'active'; ?>"><?php echo $category->name; ?></li>
                        <?php }
                    ?>
                </ul>
            </div>
        </div>
        <!--End row-->
</div>
<!--End container-->
<!--Container-->
<div class="container">
        <!--Row-->
        <div class="row">
            <ul class="block-tab mt-40">

                <?php 
                    $menu_cats = get_terms('type');
                    $menu_counter = 0;
                    foreach($menu_cats as $category){ $menu_counter++;?>
                        <!--Menu list-->
                        <li class="<?php if($menu_counter == 1) echo 'active'; ?>" block-list">
                        <?php 
                        
                            $args = array(
                                'posts_per_page' => -1,
                                'post_type' => 'menu',
                                'order' => 'ASC',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'type',
                                        'field' => 'slug',
                                        'terms' => $category->name
                                        
                                    )
                                )
                            );

                            $menu_queries = new WP_Query($args);
                            while($menu_queries->have_posts()){
                                $menu_queries->the_post(); ?>

                            <div class="col-sm-5  col-sm-offset-1 text-center">
                                <div class="block-cat">
                                    <h2 class="mb-30"><?php esc_html(the_title()); ?> </h2>
                                </div>
                                <?php 
                                
                                    $menu_lists = get_field('menu_lists');
                                    foreach($menu_lists as $list){?>
                                        <div class="block-content pb-25 mb-25">
                                            <h2 class="mb-5 "><?php echo esc_html($list['type_of_menu']); ?> </h2>
                                            <p><?php echo esc_html($list['menu_details']); ?></p>
                                            <span class="block-price"><?php echo esc_html($list['menu_price']); ?></span> 
                                            <span class="dots"></span>
                                        </div>
                                    <?php }
                                ?>
                                
 
                            </div>
                            <?php }
                            wp_reset_postdata(  );
                        ?>

                        </li>
                    <?php }
                ?>
                
                <!--Menu list-->
            </ul>
            <!--End tabs-->
        </div>
               <!--End row-->
</div>
<!--End container-->