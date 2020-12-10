<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BTW
 */

?>

    <!-- FOOTER
	================================================== -->
<footer id="site-footer" role="contentinfo" class="header-footer-group">

    <!-- image call to action
	================================================== -->
    <?php 
             set_query_var( 'content_text', "Planen Sie jetzt eine unvergessliche Radtour!" );
             set_query_var( 'btn_text', "los geht's" );
             set_query_var( 'background_img', "/assets/img/brand-image/epic2-lg.jpg" );
            get_template_part( 'template-parts/section', 'image-calltoaction' );?>

    <!-- optin -->
  



  
     <!-- PROJECT FEATURES
	================================================== -->
    <section id="footer-features" >
        <div class="container">
            <div class="row">

                 <!-- col -->
                    <div class="col-md-2 col-sm-12">
                        <h5>
                        Kontakt
                        </h5>

                            Cargobike Adventures @ MORE Cargobike GmbH Bouchéstr. 12 | Halle 20 12435 Berlin

                            <br><br>

                            0160.2066123 urlaub@cargobike-adventures.de

                            <br><br>


                            (Nahezu) jederzeit mit vorheriger Terminvereinbarung.
                    </div>
              
  
   <!-- col -->
                    <div class="col-md-2 col-sm-12">
                            <h5>
                            Gesetz
                            </h5>
                            <ul class="nav navbar-nav">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-155"  style="width: 100%;text-align: center;"> 
                                    <a href="<?php echo get_site_url(); ?>/impressum" style="margin:0">Impressum</a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-155"  style="width: 100%;text-align: center;">
                                    <a href="<?php echo get_site_url(); ?>/datenschutz" style="margin:0">Datenschutz</a>
                                </li>
                            </ul>
                    </div>
                <!-- col -->
                <div class="col-md-2 col-sm-12">
                        <h5>
                        Für Euch
                        </h5>
                         <ul class="nav navbar-nav">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-155" style="width: 100%;text-align: center;">
                                <a href="<?php echo get_site_url(); ?>/gut-zu-wissen" style="margin:0">Gut Zu Wissen</a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-155"  style="width: 100%;text-align: center;">
                                <a href="<?php echo get_site_url(); ?>/kontakt" style="margin:0">Kontakt</a>
                            </li>
                         </ul>
                    </div>

                <!-- col -->

                    <div class="col-md-2 col-sm-12">
                        <h5>Zahlungsmethode</h5>
                        <ul style="list-style-type:none; margin: 0; width:100%; padding: 0;">
                            <li class="col-sm-12">
                                <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/payment/paypal.svg" alt="paypal" style="height: 40px; display: block; float: left; margin: 10px">
                           </li>
                          
                           <li class="col-sm-12">
                                <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/payment/transfer2.png" alt="ueberweisung" style="    height: 70px;
    display: block;
    float: left;
    margin-left: 10px;">
                           </li>
                        </ul>
                    </div>

                <!-- col -->

                    <div class="col-md-2 col-sm-12">
                        <h5>Social Network</h5>
                    
                        
                            <a href="https://www.facebook.com/sogehtroadtripheute/photos/104079531466752" class="badge social facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                     
                            <a href="https://www.instagram.com/p/CHprhBULxeJ/"  class="badge social facebook" target="_blank"><i class="fa fa-instagram"></i></a>
                      
                    </div>

                <!-- col -->

            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>
    <!-- footer-features -->
</footer>

 


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-2.1.1.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>

    <script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

    <script type="text/javascript" src="//use.typekit.net/gla7wnd.js"></script>
    <script type="text/javascript">
        try {
            Typekit.load();
        } catch (e) {}
    </script>


<?php wp_footer(); ?>
</body>

</html>