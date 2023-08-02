<?php 

    $options = get_option( 'theme-options' );
    $map_location = $options['map-location'];
    $socials = $options['social-repeater'];
    $opening_hour = $options['opening-hour'];
    $additonal = $options['additional-content'];
    $address = $options['address'];
    $phone = $options['phone'];
    $fax = $options['fax'];
    $mail = $options['mail'];
    
?>
<h2 class="indent"><?php _e('Contact', 'meal'); ?></h2>
<div class="block-map ">
    <div id="map" class="map">
    <iframe width="520" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=<?php echo esc_html($map_location) ?>+()&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
        <a href='https://maps-generator.com/'>Maps Generator</a>

    </div>
</div>
<!--Container-->
<div class="container block-contact">
    <!--Row-->
    <div class="row">
        <div class="col-md-5 col-md-offset-7 col-sm-5 col-sm-offset-7">
            <ul class="block-social mb-30">
                <?php 
                
                foreach($socials as $social){?>
                    <li><a href="<?php echo esc_url($social['social-link']['url']); ?>"><i class="<?php echo $social['social-icon']; ?>"></i></a></li>
                <?php }
                
                ?>
            </ul>
            <div class="block-info mb-30">
            <p><strong><?php echo esc_html($opening_hour); ?></strong><br>
                <?php echo esc_html($additonal); ?>
                <br><br>
                
                <?php echo esc_html($address); ?><br><br>
                Phone:  <?php echo esc_html($phone); ?> <br>
                Fax:   <?php echo esc_html($fax); ?> <br>
                Email : <span><a href="mailto:<?php echo esc_html($mail); ?>"> <?php echo esc_html($mail); ?></a></span>
            </p>
            </div>
        </div>