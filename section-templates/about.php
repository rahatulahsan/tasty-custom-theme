<!--Container-->
<div class="container">
    <!--Row-->
    <div class="row">
        <div class="col-sm-12 text-center mb-100">
            <h1 class="title">The restaurant</h1>
            <p class="beige">Welcome to tasty restaurant</p>
        </div>
    </div>
    <!--End row-->
</div>
<!--End container-->
<!--Container-->
<div class="container">
    <?php 
    
    $options = get_option( 'theme-options' );
    $about_pic1 = $options['about-photo-1'];
    $about_pic2 = $options['about-photo-2'];
    $about_heading = $options['main-heading'];
    $about_subheading = $options['sub-heading'];
    $about_content = $options['about-content'];
    $about_sig = $options['signature'];
    ?>
    <!--Row-->
    <div class="row vertical-align">
        <div class="col-md-5 col-sm-5 ">
            <div class="block-img mb-10">
            <div class="background-img">
                <img src="<?php echo esc_url($about_pic1, 'meal-about-photo'); ?>" alt="">
            </div>
            </div>
            <div class="block-img ">
            <div class="background-img">
                <img src="<?php echo esc_url($about_pic2 , 'meal-about-photo'); ?>" alt="">
            </div>
            </div>
        </div>
        <div class="col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-1  ">
            <div class="block-content">
            <h2 class="title-medium mb-10 pb-10">
                <?php echo esc_html($about_heading); ?>
                <span class="dots"></span> 
            </h2>
            <h4 class="title-small"><?php echo esc_html($about_subheading); ?></h4>
            <p class="puch-right mb-40"><?php echo esc_html($about_content); ?></p>
            <img class="sing" src="<?php echo esc_url($about_sig); ?>" alt="">
            </div>
        </div>
    </div>
    <!--End row-->
</div>
<!--End container-->