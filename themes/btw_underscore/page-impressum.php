<?php
/**
 * Template Name: Impressum Page
 */
$prelaunch_price    = get_post_meta(11, 'prelaunch_price', true);
$launch_price       = get_post_meta(11, 'launch_price', true);
$final_price        = get_post_meta(11, 'final_price', true);
$course_url         = get_post_meta(11, 'course_url', true);
$button_text        = get_post_meta(11, 'button_text', true);
$optin_text         = get_post_meta(11, 'optin_text', true);
$optin_button_text    = get_post_meta(11, 'optin_button_text', true);
//post, key, true means single false set

//greetings
$greetings_content  = get_field('greetings_content');
$greeting_slideshow_1  = get_field('greeting_slideshow_1');
$greeting_slideshow_2  = get_field('greeting_slideshow_2');
$greeting_slideshow_3  = get_field('greeting_slideshow_3');

$news_content  = get_field('news_content');

// advanced Custom Fields
$premium_service_feature_image   = get_field('premium_service_feature_image');
$premium_service_section_title   = get_field('premium_service_section_title');
$premium_service_section_desc    = get_field('premium_service_section_description');
$reason_1_title         = get_field('reason_1_title');
$reason_1_desc          = get_field('reason_1_description');
$reason_2_title         = get_field('reason_2_title');
$reason_2_desc          = get_field('reason_2_description');
$reason_3_title         = get_field('reason_3_title');
$reason_3_desc          = get_field('reason_3_description');


$who_feature_image      = get_field('who_feature_image');
$who_section_title      = get_field('who_section_title');
$who_section_body      = get_field('who_section_body');


$features_section_image      = get_field('features_section_image');
$features_section_title      = get_field('features_section_title');
$features_section_body      = get_field('features_section_body');

$twitter    = get_post_meta(11, 'twitter', true);
$facebook       = get_post_meta(11, 'facebook', true);
$instagram        = get_post_meta(11, 'instagram', true);

$brand_logo    			= get_field('header_logo');
$brand_name       = get_field('header_brand_name');

// column mid ; besonders
$md_section_title      = get_field('md_section_title');
$md_section_body      = get_field('md_section_body');
$col_image_1      = get_field('col_image_1');
$col_content_1      = get_field('col_content_1');
$col_image_2      = get_field('col_image_2');
$col_content_2      = get_field('col_content_2');
$col_image_3      = get_field('col_image_3');
$col_content_3      = get_field('col_content_3');
$col_image_4      = get_field('col_image_4');
$col_content_4      = get_field('col_content_4');
$col_image_5      = get_field('col_image_5');
$col_content_5      = get_field('col_content_5');

// slideshow; camping equipments
$equipment_slideshow_title      = get_field('equipment_slideshow_title');
$equipment_slideshow_sub      = get_field('equipment_slideshow_sub');
// item
$equipment_slideshow_item_title_1      = get_field('equipment_slideshow_item_title_1');
$equipment_slideshow_item_description_1      = get_field('equipment_slideshow_item_description_1');
$equipment_slideshow_item_image_1      = get_field('equipment_slideshow_item_image_1');
// item
$equipment_slideshow_item_title_2      = get_field('equipment_slideshow_item_title_2');
$equipment_slideshow_item_description_2      = get_field('equipment_slideshow_item_description_2');
$equipment_slideshow_item_image_2      = get_field('equipment_slideshow_item_image_2');
// item
$equipment_slideshow_item_title_3      = get_field('equipment_slideshow_item_title_3');
$equipment_slideshow_item_description_3      = get_field('equipment_slideshow_item_description_3');
$equipment_slideshow_item_image_3      = get_field('equipment_slideshow_item_image_3');
// item
$equipment_slideshow_item_title_4      = get_field('equipment_slideshow_item_title_4');
$equipment_slideshow_item_description_4      = get_field('equipment_slideshow_item_description_4');
$equipment_slideshow_item_image_4      = get_field('equipment_slideshow_item_image_4');
// item
$equipment_slideshow_item_title_5      = get_field('equipment_slideshow_item_title_5');
$equipment_slideshow_item_description_5      = get_field('equipment_slideshow_item_description_5');
$equipment_slideshow_item_image_5      = get_field('equipment_slideshow_item_image_5');

// slideshow; bikes
$bike_slideshow_title      = get_field('bike_slideshow_title');
$bike_slideshow_sub      = get_field('bike_slideshow_sub');
// item
$bike_slideshow_item_title_1      = get_field('bike_slideshow_item_title_1');
$bike_slideshow_item_description_1      = get_field('bike_slideshow_item_description_1');
$bike_slideshow_item_image_1      = get_field('bike_slideshow_item_image_1');
// item
$bike_slideshow_item_title_2      = get_field('bike_slideshow_item_title_2');
$bike_slideshow_item_description_2      = get_field('bike_slideshow_item_description_2');
$bike_slideshow_item_image_2      = get_field('bike_slideshow_item_image_2');
get_header();
?>




     <!-- INTRO
	================================================== -->
    <section id="introduction" class="color-dark-grey" >
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4 left">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- <?php echo $greetings_content; ?> -->
                            <h2>Impressum</h2>
                            <p class="lead">
                                <span>
                                <img  src="<?php bloginfo('stylesheet_directory');?>/assets/img/icons/location.svg" alt="cargobike brand image" style="width:30px">
                                Bouchéstr. 12 | Halle 20<br>
                                12430 Berlin<br>
                                Deutschland<br>
                                </span>
                                <br>
                                <img  src="<?php bloginfo('stylesheet_directory');?>/assets/img/icons/phone.svg" alt="cargobike brand image" style="width:30px">
                                Telefon: 01602066123
                                <br>
                                <img  src="<?php bloginfo('stylesheet_directory');?>/assets/img/icons/mail.svg" alt="cargobike brand image" style="width:30px">
                                Mail: info@more-cargobike.de
                                <br>
                                <br>
                                Geschäftsführer: Johannes Weyers
                                <br>
                                Handelsregister: Amstgericht Berlin-Charlottenburg, 212921 B
                                <br>
                                Umsatzsteuer-Identifikationsnummer: DE327329722
                                <br>
                                <br>
                                Die Europäische Kommission stellt eine Plattform zur Online-Streitbeilegung (OS) bereit, die Sie hier finden <a href="https://ec.europa.eu/consumers/odr/">https://ec.europa.eu/<wbr>consumers/odr/</a>. Zur Teilnahme an einem Streitbeilegungsverfahren vor einer Verbraucherschlichtungsstelle sind wir nicht verpflichtet und nicht bereit.
                            </p>
                        
                    </div>
                    </div>
                    <!-- row -->
                </div>
                <!-- end col -->
                <div class="hidden-xs col-sm-12 col-md-8 right" >
                    <div class="w3-content w3-section" style="width:100%; height: 730px; overflow: hidden;">
                        <div class="mySlides" style="height:100%; background: url('<?php bloginfo('stylesheet_directory');?>/assets/img/brand-image/square-1.jpg'); background-size: cover;background-repeat: no-repeat;background-position: top center; float: unset; margin: 0 auto;"></div>
                        <div class="mySlides" style="height:100%; background: url('<?php bloginfo('stylesheet_directory');?>/assets/img/brand-image/square-2.jpg'); background-size: cover;background-repeat: no-repeat;background-position: top center; float: unset; margin: 0 auto;"></div>
                        <div class="mySlides" style="height:100%; background: url('<?php bloginfo('stylesheet_directory');?>/assets/img/brand-image/square-3.jpg'); background-size: cover;background-repeat: no-repeat;background-position: top center; float: unset; margin: 0 auto;"></div>
                        <div class="mySlides" style="height:100%; background: url('<?php bloginfo('stylesheet_directory');?>/assets/img/brand-image/square-4.jpg'); background-size: cover;background-repeat: no-repeat;background-position: top center; float: unset; margin: 0 auto;"></div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
        <script>
            var myIndex = 0;
            carousel();

            function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
            }
            myIndex++;
            if (myIndex > x.length) {myIndex = 1}    
            x[myIndex-1].style.display = "block";  
            setTimeout(carousel, 2300); // Change image every 2 seconds
            }
        </script>
    </section>
    <!-- introduction -->

 
<?php
get_footer();
?>
