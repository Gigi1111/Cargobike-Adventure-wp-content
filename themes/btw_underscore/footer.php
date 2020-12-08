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

 /**
 * Template Name: Footer
 */
$title1    = get_post_meta(11, 'section_1_title', true);
$address    = get_post_meta(11, 'company_address', true);
$contact       = get_post_meta(11, 'company_contact', true);
$opening_hour        = get_post_meta(11, 'company_opening_hour', true);

$title2    = get_post_meta(11, 'section_2_title', true);
// $address    = get_post_meta(11, 'company_address', true);
// $contact       = get_post_meta(11, 'company_contact', true);
// $opening_hour        = get_post_meta(11, 'company_opening_hour', true);

$title3    = get_post_meta(11, 'section_3_title', true);
// $address    = get_post_meta(11, 'company_address', true);
// $contact       = get_post_meta(11, 'company_contact', true);
// $opening_hour        = get_post_meta(11, 'company_opening_hour', true);

$title4    = get_post_meta(11, 'section_4_title', true);
$paypal    = get_post_meta(11, 'paypal', true);
$visa       = get_post_meta(11, 'visa', true);
$mastercard        = get_post_meta(11, 'mastercard', true);

$title5    = get_post_meta(11, 'section_5_title', true);
$twitter    = get_post_meta(11, 'twitter', true);
$facebook       = get_post_meta(11, 'facebook', true);
$instagram        = get_post_meta(11, 'instagram', true);

$form_text    = get_post_meta(11, 'form_lead_text', true);
$form_btn    = get_post_meta(11, 'form_btn_text', true);

$booking_text    = get_post_meta(11, 'booking_lead_text', true);
$booking_btn    = get_post_meta(11, 'booking_btn_text', true);
?>

<?php wp_footer(); ?>

      <!-- image call to action
	================================================== -->
    <section id="signup" >
            <?php 
             set_query_var( 'content_text', "Gift a dream bike trip to some now" );
             set_query_var( 'btn_text', "los geht's" );
            get_template_part( 'template-parts/section', 'image-calltoaction' );?>
    </section>
    <!-- optin -->


    <!-- FOOTER
	================================================== -->
    <section id="optin" >
            <?php
            set_query_var( 'content_text', "Gift a dream bike trip to some now" );
            set_query_var( 'btn_text', "los geht's" );
             get_template_part( 'template-parts/section', 'oneline' );?>
    </section>

  
     <!-- PROJECT FEATURES
	================================================== -->
    <section id="footer-features" >
        <div class="container">
            <div class="row">
                <!-- <?php if(!empty($title1)): ?> -->
                
                    <div class="col-md-2 col-sm-12">
                        <h5>
                        <!-- <?php echo $title1; ?> -->
                        Kontakt
                        </h5>
                            <!-- <?php echo $address; ?> -->
                            Cargobike Adventures @ MORE Cargobike GmbH Bouchéstr. 12 | Halle 20 12435 Berlin

                            <br><br>
                            <!-- <?php echo $contact; ?> -->
                            0160.2066123 urlaub@cargobike-adventures.de

                            <br><br>
                            <!-- <?php echo $opening_hour; ?> -->

                            (Nahezu) jederzeit mit vorheriger Terminvereinbarung.
                    </div>
                <!-- <?php endif; ?> -->
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
                <?php if(!empty($title4)): ?>
                    <div class="col-md-2 col-sm-12">
                        <h5>Zahlungsmethode</h5>
                        <ul style="list-style-type:none; margin: 0; width:100%; padding: 0;">
                            <li class="col-sm-12">
                                <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/payment/paypal.svg" alt="paypal" style="height: 40px; display: block; float: left; margin: 10px">
                           </li>
                           <li class="col-sm-12">
                                <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/payment/visa.svg" alt="visa" style="height: 40px; display: block; float: left; margin: 10px">
                            </li>
                           <li class="col-sm-12">
                                <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/payment/mastercard.svg" alt="mastercard" style="height: 40px; display: block; float: left; margin: 10px">
                            </li>
                           <li class="col-sm-12">
                                Überweisung
                           </li>
                        </ul>
                    </div>
                <?php endif; ?>
                <!-- col -->
                <?php if(!empty($title5)): ?>
                    <div class="col-md-2 col-sm-12">
                        <h5><?php echo $title5; ?></h5>
                        <!-- <?php if(!empty($twitter)): ?>
                            <a href="<?php echo $twitter; ?>" class="badge social twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                        <?php endif; ?> -->
                        <!-- <?php if(!empty($facebook)): ?> -->
                            <a href="https://www.facebook.com/sogehtroadtripheute/photos/104079531466752" class="badge social facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                        <!-- <?php endif; ?> -->
                        <!-- <?php if(!empty($instagram)): ?> -->
                            <a href="https://www.instagram.com/p/CHprhBULxeJ/"  class="badge social facebook" target="_blank"><i class="fa fa-instagram"></i></a>
                        <!-- <?php endif; ?> -->
                    </div>
                <?php endif; ?>
                <!-- col -->

            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>
    <!-- footer-features -->


    <!-- MODAL
	================================================== -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i> Subscribe to our Mailing List</h4>
                </div>
                <!-- modal-header -->

                <div class="modal-body">
                    <p>Simply enter your name and email! As a thank you for joining us, we're going to give you one of our best-selling courses, <em>for free!</em></p>

                    <form class="form-inline" role="form">
                        <div class="form-group">
                            <label class="sr-only" for="subscribe-name">Your first name</label>
                            <input type="text" class="form-control" id="subscribe-name" placeholder="Your first name">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="subscribe-email">and your email</label>
                            <input type="text" class="form-control" id="subscribe-email" placeholder="and your email">
                        </div>
                        <input type="submit" class="btn btn-danger" value="Subscribe!">
                    </form>

                    <hr>

                    <p><small>By providing your email you consent to receiving occasional promotional emails &amp; newsletters. <br>No Spam. Just good stuff. We respect your privacy &amp; you may unsubscribe at any time.</small></p>
                </div>
                <!-- modal-body -->

            </div>
            <!-- modal-content -->
        </div>
        <!-- modal-dialog -->
    </div>
    <!-- modal -->


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

</body>

</html>