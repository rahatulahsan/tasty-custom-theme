<div class="col-md-5 col-md-offset-7 col-sm-5 col-sm-offset-7">
                     <footer class="footer-short mt-40">
                        <?php 
                           $options = get_option( 'theme-options' );
                           $copyrights = $options['copyright'];
                        ?>
                        <p><?php echo $copyrights; ?></p>
                     </footer>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
         </section>
         <!--End contact section-->
      </div>
      <!-- End wrapper-->
      <!--Javascript-->	
      <?php wp_footer(); ?>
      <!-- Google analytics -->
      <!-- End google analytics -->
   </body>
</html>

