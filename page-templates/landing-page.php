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

    <?php get_template_part('/section-templates/booking'); ?>

</section>
<!--End reservation section-->

<!--Gallery section-->
<section id="gallery" class="gallery overlay">

    <?php get_template_part('/section-templates/gallery'); ?>

</section>
<!--End gallery section-->

<!--Contact section-->
<section id="contact" class="contact pt-250 pb-250">

    <?php get_template_part('/section-templates/contact'); ?>

    <?php get_footer(); ?>