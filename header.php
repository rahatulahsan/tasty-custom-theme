<!DOCTYPE html>
<html lass="no-js" <?php language_attributes(); ?>>
   <head>
      <!-- Metas -->
      <meta <?php bloginfo( 'charset'); ?>>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Css -->
      <?php wp_head(); ?>
	   </head>
   <body>
      <!-- Preloader -->
      <div class="loader">
         <!-- Preloader inner -->
         <div class="loader-inner">
            <svg width="120" height="220" viewbox="0 0 100 100" class="loading-spinner" version="1.1" xmlns="http://www.w3.org/2000/svg">
               <circle class="spinner" cx="50" cy="50" r="21" fill="#ffffff" stroke-width="2"/>
            </svg>
         </div>
         <!-- End preloader inner -->
      </div>
      <!-- End preloader-->
      <!--Wrapper-->
      <div class="wrapper">
         <!--Hero section-->
         <section class="hero overlay">
            <!--Main slider-->
            <div class="main-slider slider flexslider">
               <ul class="slides">
                  <li>
                     <div class="background-img zoom">
                        <img src="img/2.jpg" alt="">
                     </div>
                  </li>
                  <li>
                     <div class="background-img zoom">
                        <img src="img/1.jpg" alt="">
                     </div>
                  </li>
               </ul>
            </div>
            <!--End main slider-->
            <!--Header-->
            <header class="header default">
               <div class=" left-part">
                  <a class="logo scroll" href="#hero">
                     <h2>tasty</h2>
                  </a>
               </div>
               <div class="right-part">
                  <nav class="main-nav">
                     <div class="toggle-mobile-but">
                        <a href="#" class="mobile-but" >
                           <div class="lines"></div>
                        </a>
                     </div>
                     <?php 
                     
                        $navigation = wp_nav_menu(array(
                           'theme_location' => 'primary',
                           'link_class' => 'scroll'
                        ));
                     
                     ?>
                  </nav>
               </div>
            </header>
            <!--End header-->
            <!--Inner hero-->
            <div class="inner-hero">
               <!--Container-->
               <div class="container hero-content">
                  <!--Row-->
                  <div class="row">
                     <div class="col-sm-12 text-center">
                        <h1 class="large">delicious italian food</h1>
                        <p class="lead">Making delicious italian food since 1990</p>
						
                     </div>
                  </div>
                  <!--End row-->
               </div>
               <!--End container-->
            </div>
            <!--End inner hero-->
         </section>
         <!--End hero section-->