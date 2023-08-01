<?php 

/**
 * Template Name: Landing Page
 */
get_header(); 

?>
<!--Resto section-->
<section id="resto" class="resto pt-120 pb-120">

    <?php get_template_part('/section-templates/about'); ?>

</section>
<!--End resto section-->

<!--Short reservation section-->
<section class="short-reservation pt-200 pb-250 overlay">
    <?php get_template_part('/section-templates/cta'); ?>
</section>
<!--End short reservation section-->

<!--Menu section-->
<section id="menu" class="menu pt-120 pb-120 ">

    <?php get_template_part('/section-templates/tasty-menu'); ?>

</section>
<!--End menu section-->

<!--Review section-->
<section class="review pt-120 pb-120 overlay">

    <?php get_template_part('/section-templates/review'); ?>

</section>
<!--End reviews section-->

<!--Special section-->
<section  id="special" class="special pt-120 pb-120">

    <?php get_template_part('/section-templates/special'); ?>

</section>
<!--End special section-->

<!--Reservation section-->
<section id="reservation" class="reservation pt-140 pb-140 bg-grey">
<!--Container-->
<div class="container">
    <!--Row-->
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2 text-center mb-100">
            <h1 class="title">reservation</h1>
            <p class="beige">Book a table</p>
            <p class="title-lead  mt-20">Please choose your reservation date with specific time and number<br> 
            of people to book a table
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
                <button  class=" but submit" type="submit">Boook a table</button>

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
</section>
<!--End reservation section-->

<!--Gallery section-->
<section id="gallery" class="gallery overlay">
    <?php get_template_part('/section-templates/gallery'); ?>
</section>
<!--End gallery section-->
<!--Contact section-->
<section id="contact" class="contact pt-250 pb-250">
<!-- As a general rule, include a heading (h1-h6) as a child of each section and article element for screen readers purposes-->
<h2 class="indent">Contact</h2>
<div class="block-map ">
    <div id="map" class="map"></div>
</div>
<!--Container-->
<div class="container block-contact">
    <!--Row-->
    <div class="row">
        <div class="col-md-5 col-md-offset-7 col-sm-5 col-sm-offset-7">
            <ul class="block-social mb-30">
            <li><a href="#"><i class="icon-facebook"></i></a></li>
            <li><a href="#"><i class="icon-twitter"></i></a></li>
            <li><a href="#"><i class="icon-vimeo"></i></a></li>
            </ul>
            <div class="block-info mb-30">
            <p><strong>Opens daily 8:00 AM - 10:00 PM</strong><br>
                Dear guests, you are welcomed to dine with us at Tasty  restaurant.
                Have a pleasant dining experience.	
                <br><br>
                3805 Edwards Rd <br>
                Cincinnati, OH 45209 USA<br><br>
                Phone: (513) 352-3209 <br>
                Fax:  (513) 352-6220 <br>
                Email : <span><a href="mailto:customers@tasty.net">customers@tasty.net</a></span>
            </p>
            </div>
        </div>

        <?php get_footer(); ?>