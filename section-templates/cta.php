<?php 
    
    $options = get_option( 'theme-options' );
    $cta_bg = $options['cta-bg'];
    $cta_title = $options['cta-title'];
    $cta_subtitle = $options['cta-subtitle'];
    $cta_btn_name = $options['cta-btn-name'];
    $cta_btn_link = $options['cta-btn-link'];
    
    ?>

<div class="background-img zoom" >
    <img src="<?php echo esc_url($cta_bg); ?>" alt="">
</div>
<!--Container-->
<div class="container">
    <!--Row-->
    <div class="row">
        <div class="col-sm-12 text-center front-p">
            <h1 class="large"><?php echo esc_html($cta_title); ?></h1>

            <p class="lead white top"><?php echo esc_html($cta_subtitle); ?></p>
            <a href="<?php echo esc_url($cta_btn_link['url']); ?>" class="but scroll"><?php echo esc_html($cta_btn_name); ?></a>
        </div>
    </div>
    <!--End row-->
</div>
<!--End container-->