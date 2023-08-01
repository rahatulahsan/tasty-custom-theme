<!-- As a general rule, include a heading (h1-h6) as a child of each section and article element for screen readers purposes-->
<h2 class="indent"><?php _e('Gallery','meal'); ?></h2>
<!--Gallery slider-->
<div class="gallery-slider slider flexslider">
    <ul class="slides">
    <?php 
        $options = get_option( 'theme-options' );
        $gallery_opt = $options['meal-gallery']; // for eg. 15,50,70,125
        $gallery_ids = explode( ',', $gallery_opt );
        if ( ! empty( $gallery_ids ) ) {
            foreach ( $gallery_ids as $gallery_item_id ) {?>
                
                <li>
                    <div class="background-img zoom">
                    <img src="<?php echo esc_url(wp_get_attachment_url( $gallery_item_id )); ?>" alt="">
                    </div>
                </li>

            <?php }
          }
    ?>
        
    </ul>
</div>
<!--End gallery slider-->