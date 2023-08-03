<!--Container-->
<div class="container">
    <?php 
    $options = get_option( 'theme-options' ); 
    $reserve_title = $options['reservation-heading'];
    $reserve_subtitle = $options['reservation-subheading'];
    $reserve_heading_content = $options['reservation-section-header-content'];
    ?>
    <!--Row-->
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2 text-center mb-100">
            <h1 class="title"><?php echo esc_html($reserve_title); ?></h1>
            <p class="beige"><?php echo esc_html($reserve_subtitle); ?></p>
            <p class="title-lead  mt-20"><?php echo esc_html($reserve_heading_content); ?>
            </p>
        </div>
    </div>
    <!--End row-->
</div>
<!--End container-->
<!--Container-->
<div class="container">
    <!--Row-->
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="block-form">
            <form class="reservation-form " method="post" action="send.php">
                <?php 
                
                wp_nonce_field('reservation', 'rn');

                ?>
                <div class="block-input ico-input">
                    <i class="icon-user-1"></i>
                    <label>Your name:</label>
                    <input  id="name" name="name" type="text" required>
                </div>
                <div class="block-input ico-input">
                    <i class="icon-phone"></i>
                    <label>Your Phone:</label>
                    <input  id="phone" name="phone" type="text">
                </div>
                <div class="block-input ico-input">
                    <i class="icon-mail-1"></i>
                    <label>Your Email:</label>
                    <input  id="email" name="email" type="text">
                </div>
                <!--Input columns-->
                <div class="input-columns block-input clearfix">
                    <div class="column-1">
                        <div class="column-inner">
                        <label>Number of person :  </label>
                        <input   id="person" min="1" name="person"  type="number" required>
                        </div>
                    </div>
                    <!--Column-->
                    <div class="column-2">
                        <div class="column-inner">
                        <label>Type of table:</label>
                        <input   id="table" min="1" name="table" type="number" required>
                        </div>
                    </div>
                    <!--End column-->
                </div>
                <!--End input columns-->
                <!--Input columns-->
                <div class="input-columns block-input clearfix">
                    <div class="column-1">
                        <div class="column-inner ico-input">
                        <i class="icon-calendar"></i>
                        <label>Date :  </label>
                        <input  class="date" id="date" name="date" type="date" required>
                        </div>
                    </div>
                    <!--Column-->
                    <div class="column-2">
                        <div class="column-inner ico-input">
                        <i class="icon-clock"></i>
                        <label>Time:</label>
                        <input   placeholder="(ex: 7:00 p.m)"  id="time" name="time" type="text" required>
                        </div>
                    </div>
                    <!--End column-->
                </div>
                <!--End input columns-->
                <button  class=" but submit" id="reservenow" type="submit">Boook a table</button>

                    <!--Contact form message-->
                    <div class="success-msg">
                        <h2>Your message has been sent. Thank you!</h2>
                    </div>
                    <div class="error-msg">
                        <h2>Sorry your message can not be sent.</h2>
                    </div>
                    <!--End contact form message-->

            
            </form>
    
            </div>
        </div>
    </div>
    <!--End row-->
</div>
<!--End container-->