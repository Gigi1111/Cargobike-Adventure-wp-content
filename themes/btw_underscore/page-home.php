<?php
/**
 * Template Name: Home Page
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
                        
                            <h2>Hallo Abenteurer*innen, herzlich willkommen!</h2>
                            <p class="lead">Wir von Cargobike Adventures haben es uns zum Ziel gesetzt, euch mit unseren Premium Lastenrädern und allerfeinstem Camping Equipment auf die Reise zu schicken. Wir sorgen dafür, dass rund um eure Reise alles glatt läuft, ihr tretet in die Pedale und beschert euch und euren Liebsten eine unvergessliche Zeit in der Natur.</p>
                        <div class="">
                        <a href="https://www.facebook.com/sogehtroadtripheute/photos/104079531466752" class="badge social facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/p/CHprhBULxeJ/"  class="badge social facebook" target="_blank"><i class="fa fa-instagram"></i></a>
                      
                        </div>
                        
                    </div>
                    </div>
                    <!-- row -->
                </div>
                <!-- end col -->
                <div class="hidden-xs col-sm-12 col-md-8 right" >
                    <div class="w3-content w3-section" style="width:100%; height: 550px; overflow: hidden;">
                        <div class="mySlides" style="height:100%; background: url('<?php bloginfo('stylesheet_directory');?>/assets/img/brand-image/two-bikes.jpg'); background-size: cover;background-repeat: no-repeat;background-position: bottom center; float: unset; margin: 0 auto;"></div>
                        <div class="mySlides" style="height:100%; background: url('<?php bloginfo('stylesheet_directory');?>/assets/img/brand-image/sleep-side-sm.jpg'); background-size: cover;background-repeat: no-repeat;background-position: bottom center; float: unset; margin: 0 auto;"></div>
                        <div class="mySlides" style="height:100%; background: url('<?php bloginfo('stylesheet_directory');?>/assets/img/brand-image/two-riding-sm.jpg'); background-size: cover;background-repeat: no-repeat;background-position: bottom center; float: unset; margin: 0 auto;"></div>
                        <div class="mySlides" style="height:100%; background: url('<?php bloginfo('stylesheet_directory');?>/assets/img/brand-image/square-4.jpg'); background-size: cover;background-repeat: no-repeat;background-position: bottom center; float: unset; margin: 0 auto;"></div>
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

  

     <!-- Column small ; was wir bieten
	================================================== -->
    <section id="section-column-sm" class="color-black" >
        <div class="container">

            <div class="section-header">
                
                <h2>Was Wir Euch Bieten</h2>
               
            </div>
            <!-- section-header -->

            <div class="row">
                    <div class="col-sm-2">
                        <!-- <i class="<?php the_field('course_feature_icon');?>"></i> -->
                        <div ></div>
                        <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/icons/offer-bike.png" alt="bike icon" style="width:50px; height:50px" >
                        <h4>Premium Lastenräder in verschiedenen Konfigurationen mit ausführlicher Einführung bei Anmietung</h4>
                    </div>
                    <div class="col-sm-2">
                        <!-- <i class="<?php the_field('course_feature_icon');?>"></i> -->
                        <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/icons/offer-tent.png" alt="tent icon" style="width:50px; height:50px" >
                        <h4>Bestes Camping Equipment, für unsere Kunden frei zusammen<wbr>stellbar</h4>
                    </div>
                    <div class="col-sm-2">
                        <!-- <i class="<?php the_field('course_feature_icon');?>"></i> -->
                        <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/icons/offer-time.png" alt="clock icon" style="width:50px; height:50px" >
                        <h4>Viele Extras, die euch die Zeit unterwegs versüßen</h4>
                    </div>
                    <div class="col-sm-2">
                        <!-- <i class="<?php the_field('course_feature_icon');?>"></i> -->
                        <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/icons/offer-vacation.png" alt="camping icon" style="width:50px; height:50px" >
                        <h4>Versicherungs<wbr>pakete für ein rundum sorglos Gefühl im Urlaub</h4>
                    </div>
                    <div class="col-sm-2">
                        <!-- <i class="<?php the_field('course_feature_icon');?>"></i> -->
                        <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/icons/offer-direction.png" alt="direction icon" style="width:50px; height:50px" >
                        <h4>Routen<wbr>planung, Tipps und Tricks rund ums Cargobike</h4>
                    </div>  
            </div>
            <!-- row -->

        </div>
        <!-- container -->
    </section>
     <!-- end section -->


  <!-- Column small ; accordion/collapse
    ================================================== -->
    <!-- <section id="section-image-akordion" class="section-image-akordion" style="">
        <div class="container" style="">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                        Collapsible Group 1</a>
                    </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse in">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                    minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo consequat.</div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                        Collapsible Group 2</a>
                    </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                    minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo consequat.</div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                        Collapsible Group 3</a>
                    </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                    minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo consequat.</div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
   <!-- end section -->


      <!-- section slideshow bikes
	================================================== -->
    <section id="section-slidshow" class="" style="padding-bottom: 0;">
        <div class="container" style="text-align: center; color: var(--brand-dark-grey);">
             <h2>Unsere E-Bike</h2>

            <div id="bikeCarousel" class="carousel slide" data-ride="carousel" style="height: auto !important; overflow: visible !important; margin-bottom: 40px;">
            
                <!-- Indicators -->
                <ol class="carousel-indicators" style="position: relative; left:unset; width: unset;  width: 100%; margin: 0 auto; top: 0; height: auto!important; ">
                    <li data-target="#bikeCarousel" data-slide-to="0" class="active" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/brand-image/bike1.jpg') !important;background-size: cover !important; background-position: center !important; background-repeat: no-repeat !important;"></li>
                    <li data-target="#bikeCarousel" data-slide-to="1" class="active" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/brand-image/epic0-lg.jpg') !important;background-size: cover !important; background-position: center !important; background-repeat: no-repeat !important;"></li>
                    <li data-target="#bikeCarousel" data-slide-to="2" class="active" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/bikes/correct-bike.jpg') !important;background-size: contain !important; background-position: center !important; background-repeat: no-repeat !important;"></li>
                 </ol>
            
                 <!-- Wrapper for slides -->
                <div class="carousel-inner"  style="height: auto !important; overflow-y: visible !important">
                               <!-- individual item -->
                            <div class="item active"  style="overflow-y: visible !important">
                                <div class="image-container col-md-5 col-sm-12" style="width: 100%; height:460px; background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/brand-image/bike1.jpg'); background-size: contain; background-repeat: no-repeat;background-position: bottom center; float: unset; margin: 0 auto;"></div>

                                <div class="carousel-caption col-sm-12" id="bottom-info" style="height:auto !important; position: relative; width: auto; margin: 0 auto">
                                    <h3>Riese & Müller Load75 Bike</h3>
                                    <p>Das Load 75 aus dem Hause Riese & Müller ist ein Lastenrad der absoluten Oberklasse. Der leistungsstarke Bosch Motor bietet euch 4 verschiedene Unterstützungen, eine stufenlose Enviolo Schaltung, einen nahezu unverwüstbaren Carbonriemen und ist für maximalen Komfort voll gefedert. Ein rundum angenehmes, sicheres und gleichzeitig sehr spaßiges Fahrgefühl. Die Dual-Battery Bauart mit 1.000 KWh ermöglicht lange Touren auch in entlegene Gegenden mit bis zu 200km Reichweite.</p>
                                    <br>
                                    <p>
                                        <strong>Pricelist bike Riese&Müller Load75:</strong><br>
                                        3 days: 	149,- <br>
                                        4 days: 	199,-<br>
                                        7 days: 	299,-<br>
                                        14 days:	499,-<br>
                                    </p>
                                    <p>
                                            <strong>Insurance ENRA Premiumschutz Europaweit inkl. 24/7 Hotline und Pick-Up Service</strong><br>
                                        3 days:    15,-<br>
                                        4 days:    20,-<br>
                                        7 days:    35,-<br>
                                        14 days:  70,-<br>
                                    </p>
                                </div>
                            </div>
                               <!-- individual item -->
                            <div class="item"  style="overflow-y: visible !important">
                                <div class="image-container col-md-5 col-sm-12" style="width: 100%; height:460px; background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/brand-image/epic0-lg.jpg'); background-size: cover; background-repeat: no-repeat;background-position: bottom center; float: unset; margin: 0 auto;"></div>

                                <div class="carousel-caption col-sm-12" id="bottom-info" style="height:auto !important; position: relative; width: auto; margin: 0 auto">
                                    <h3>Riese & Müller Load75 Bike</h3>
                                    <p>Das Load 75 aus dem Hause Riese & Müller ist ein Lastenrad der absoluten Oberklasse. Der leistungsstarke Bosch Motor bietet euch 4 verschiedene Unterstützungen, eine stufenlose Enviolo Schaltung, einen nahezu unverwüstbaren Carbonriemen und ist für maximalen Komfort voll gefedert. Ein rundum angenehmes, sicheres und gleichzeitig sehr spaßiges Fahrgefühl. Die Dual-Battery Bauart mit 1.000 KWh ermöglicht lange Touren auch in entlegene Gegenden mit bis zu 200km Reichweite.</p>
                                    <br>
                                    <p>
                                        <strong>Pricelist bike Riese&Müller Load75:</strong><br>
                                        3 days: 	149,- <br>
                                        4 days: 	199,-<br>
                                        7 days: 	299,-<br>
                                        14 days:	499,-<br>
                                    </p>
                                    <p>
                                            <strong>Insurance ENRA Premiumschutz Europaweit inkl. 24/7 Hotline und Pick-Up Service</strong><br>
                                        3 days:    15,-<br>
                                        4 days:    20,-<br>
                                        7 days:    35,-<br>
                                        14 days:  70,-<br>
                                    </p>
                                </div>
                            </div>
                               <!-- individual item -->
                            <div class="item"  style="overflow-y: visible !important">
                                <div class="image-container col-md-5 col-sm-12" style="width: 100%; height:460px; background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/bikes/correct-bike.jpg'); background-size: contain; background-repeat: no-repeat;background-position: center center; float: unset; margin: 0 auto;"></div>

                                <div class="carousel-caption col-sm-12" id="bottom-info" style="height:auto !important; position: relative; width: auto; margin: 0 auto">
                                    <h3>Riese & Müller Load75 Bike</h3>
                                    <p>Das Load 75 aus dem Hause Riese & Müller ist ein Lastenrad der absoluten Oberklasse. Der leistungsstarke Bosch Motor bietet euch 4 verschiedene Unterstützungen, eine stufenlose Enviolo Schaltung, einen nahezu unverwüstbaren Carbonriemen und ist für maximalen Komfort voll gefedert. Ein rundum angenehmes, sicheres und gleichzeitig sehr spaßiges Fahrgefühl. Die Dual-Battery Bauart mit 1.000 KWh ermöglicht lange Touren auch in entlegene Gegenden mit bis zu 200km Reichweite.</p>
                                    <br>
                                    <p>
                                        <strong>Pricelist bike Riese&Müller Load75:</strong><br>
                                        3 days: 	149,- <br>
                                        4 days: 	199,-<br>
                                        7 days: 	299,-<br>
                                        14 days:	499,-<br>
                                    </p>
                                    <p>
                                            <strong>Insurance ENRA Premiumschutz Europaweit inkl. 24/7 Hotline und Pick-Up Service</strong><br>
                                        3 days:    15,-<br>
                                        4 days:    20,-<br>
                                        7 days:    35,-<br>
                                        14 days:  70,-<br>
                                    </p>
                                </div>
                            </div>
                           
                    </div>

               

                <!-- Left and right controls -->
                <a class="left carousel-control  hidden-xs" href="#bikeCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control  hidden-xs" href="#bikeCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

    <!-- OPT IN SECTION
	================================================== -->
 
    <!-- optin -->
    
    <!-- section slideshow equipments
	================================================== -->
    <section id="section-slidshow" class="" style="padding-bottom: 0;">
        <div class="container" style="text-align: center; color: var(--brand-dark-grey);">
            <h2>Campingausrüstung und Campingzubehör</h2>

            <div id="equipmentCarousel" class="carousel slide" data-ride="carousel" style="height: auto !important; overflow: visible !important; margin-bottom: 40px;">
                      <!-- Indicators -->
                    <ol class="carousel-indicators" style="position: relative; left:unset; width: unset;  width: 100%; margin: 0 auto; top: 0; height: auto!important; ">
                      
                        <li data-target="#equipmentCarousel" data-slide-to="0" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/equipments_for_rent/tent.jpg') !important;background-size: cover !important; background-position: center !important; background-repeat: no-repeat !important;"></li>
                        <li data-target="#equipmentCarousel" data-slide-to="1" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/equipments_for_rent/tent-cave.png') !important;background-size: contain !important; background-position: center !important; background-repeat: no-repeat !important;"></li>
                        <li data-target="#equipmentCarousel" data-slide-to="2" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/equipments_for_rent/chairs.jpg') !important;background-size: cover !important; background-position: center !important; background-repeat: no-repeat !important;"></li>
                       <li data-target="#equipmentCarousel" data-slide-to="3" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/equipments_for_rent/sm-stove2.png') !important;background-size: contain !important; background-position: center !important; background-repeat: no-repeat !important;"></li>
                       <li data-target="#equipmentCarousel" data-slide-to="4" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/equipments_for_rent/sm-gasM.png') !important;background-size: contain !important; background-position: center !important; background-repeat: no-repeat !important;"></li>
                       <li data-target="#equipmentCarousel" data-slide-to="5" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/equipments_for_rent/sm-cookingset.png') !important;background-size: contain !important; background-position: center !important; background-repeat: no-repeat !important;"></li>
                        <li data-target="#equipmentCarousel" data-slide-to="6" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/equipments_for_rent/sm-servingkit.png') !important;background-size: contain !important; background-position: center !important; background-repeat: no-repeat !important;"></li>
                        <li data-target="#equipmentCarousel" data-slide-to="7" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/equipments_for_rent/md-mug.png') !important;background-size: contain !important; background-position: center !important; background-repeat: no-repeat !important;"></li>
                        <li data-target="#equipmentCarousel" data-slide-to="8" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/equipments_for_rent/boat.png') !important;background-size: contain !important; background-position: center !important; background-repeat: no-repeat !important;"></li>
                        <li data-target="#equipmentCarousel" data-slide-to="9" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/equipments_for_rent/espressomaker.png') !important;background-size: contain !important; background-position: center !important; background-repeat: no-repeat !important;"></li>
                        <li data-target="#equipmentCarousel" data-slide-to="10" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/equipments_for_rent/slackline.png') !important;background-size: contain !important; background-position: center !important; background-repeat: no-repeat !important;"></li>
                        <li data-target="#equipmentCarousel" data-slide-to="11" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/equipments_for_rent/hammock.png') !important;background-size: contain !important; background-position: center !important; background-repeat: no-repeat !important;"></li>
                        <li data-target="#equipmentCarousel" data-slide-to="12" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/equipments_for_rent/badminton.png') !important;background-size: contain !important; background-position: center !important; background-repeat: no-repeat !important;"></li>
                        <li data-target="#equipmentCarousel" data-slide-to="13" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/equipments_for_rent/firstaid.png') !important;background-size: contain !important; background-position: center !important; background-repeat: no-repeat !important;"></li>
                        <li data-target="#equipmentCarousel" data-slide-to="14" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/equipments_for_rent/SUP2.png') !important;background-size: contain !important; background-position: center !important; background-repeat: no-repeat !important;"></li>
              
                    </ol>
            
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner"  style="height: auto !important; overflow-y: visible !important">
    
            
            
                   
                            <!-- individual item -->
                            <div class="item active"  style="overflow-y: visible !important">
                                    <div class="image-container col-md-5 col-sm-12" style="height:460px; background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/equipments_for_rent/tent.jpg'); background-size: cover;background-repeat: no-repeat;background-position: top center; float: unset; margin: 0 auto;"></div>
                                    <!-- right info -->
                                    <!-- <div class="carousel-caption col-sm-12" id="right-info" style="height: 460px !important; position: relative; width: auto; margin: 0; overflow: scroll;">
                                      
                                    </div> -->
                                    <!-- bottom info -->
                                     <div class="carousel-caption col-sm-12" id="bottom-info" style="height:auto !important; position: relative; width: auto; margin: 0 auto">
                                        <h3>Backdoor 3-Season</h3>
                                        <p>Das Backdoor ist unser größtes Zelt des Hamburger Herstellers Heimplanet und ein echter Hingucker auf jedem Campingplatz. Es wird anders als herkömmliche Zelt in kürzester Zeit per Doppelhubpumpe aufgepumpt und mit den beiliegenden Heringen im Boden verankert. Hier können bis zu 4 Personen schlafen und finden in den Zelt Vorräumen, den sogenannten Apsiden, genug Platz für jegliche Ausrüstungsgegenstände. 2 Eingänge erleichtern den Ein- und Ausstieg und das speziell entwickelte Advanced Ventilation System sorgt für eine angenehme Luftzirkulation im Innenzelt. Absolut wasserdicht und mit doppeltem Boden hält es auch widrigsten Wetterbedingungen stand.</p>      
                                        <p>
                                            <span style="font-weight:700">
                                            Schlafplatz für 4 Personen und Platz für Equipment.</span><br>
                                            <br>
                                            Grundfläche:  9 &#x33a1;<br>
                                            Liegefläche: 240cm x 240cm (Breite Fußende 180cm)<br>
                                            Gesamthöhe:  153 cm<br>
                                            Innenzelthöhe:   125 cm<br> </p>

                                        <p>
                                            <strong>Pricelist tent BACKDOOR:</strong><br>
                                            3 days: 	45,-<br>
                                            4 days: 	60,-<br>
                                            7 days: 	99,-<br>
                                            14 days:	169,-<br>
                                        </p>
                                    </div>
                            </div>
                             <!-- individual item -->
                             <div class="item"  style="overflow-y: visible !important">
                                    <div class="image-container col-md-5 col-sm-12" style="height:460px; background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/equipments_for_rent/tent-cave.png'); background-size: contain;background-repeat: no-repeat;background-position: center; float: unset; margin: 0 auto;"></div>
                                    <!-- right info -->
                                    <!-- <div class="carousel-caption col-sm-12" id="right-info" style="height: 460px !important; position: relative; width: auto; margin: 0; overflow: scroll;">
                                        
                                    </div> -->
                                    <!-- bottom info -->
                                     <div class="carousel-caption col-sm-12" id="bottom-info" style="height:auto !important; position: relative; width: auto; margin: 0 auto">
                                        <h3>The Cave</h3>
                                        <p>Das Zelt The Cave mutet nicht nur wie eine kuschelige Höhle an, es schläft sich auch wie in einer. Hier finden 2-3 Personen Platz, wir empfehlen es für 2 Abenteurer, gegebenenfalls plus Kind. Es bietet einen Eingang und dementsprechend auch eine Apsis als Verstaumöglichkeit für Ausrüstungsgegenstände. Das Zelt ist absolut wasserfest, mit dem doppelten Boden und den extra festen und widerstandsfähigen Luftstreben extrem robust und hält auch dem nächtlichen Platzregen entspannt stand.</p>     
                                        <p>
                                            <span style="font-weight:700">
                                            Schlafplatz für 2 Personen+ und Platz für Equipment.</span><br>
                                            <br>
                                            Grundfläche: 5 &#x33a1;<br>
                                            Liegefläche: 200cm x 146cm   <br>   
                                            Gesamthöhe: 127 cm<br>
                                            Innenzelthöhe: 102 cm<br>
                                            
                                        </p>

                                        <p>
                                            <strong> Pricelist tent CAVE:</strong><br>

                                            3 days: 	39,-<br>
                                            4 days: 	52,-<br>
                                            7 days: 	89,-<br>
                                            14 days:	159,-<br>

                                        </p>
                                       
                                    </div>
                            </div>
                              <!-- individual item -->
                              <div class="item"  style="overflow-y: visible !important">
                                    <div class="image-container col-md-5 col-sm-12" style="height:460px; background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/equipments_for_rent/chairs.jpg'); background-size: cover;background-repeat: no-repeat;background-position: center; float: unset; margin: 0 auto;"></div>
                                    <!-- right info -->
                                    <!-- <div class="carousel-caption col-sm-12" id="right-info" style="height: 460px !important; position: relative; width: auto; margin: 0; overflow: scroll;"> </div>  -->
                                    <!-- bottom info -->
                                     <div class="carousel-caption col-sm-12" id="bottom-info" style="height:auto !important; position: relative; width: auto; margin: 0 auto">
                                        <h3>Chair TWO</h3>
                                        <p>Der Chair TWO aus dem Hause der Innovationsschmiede Helinox ist eine perfekte Kombination aus Packmaß und Komfort. Der Stuhl bietet die ideale Möglichkeit, nach einem Tag auf den Fahrrädern in angenehmer Sitzposition zu entspannen. In Handumdrehen lässt sich der Packsack für noch mehr Komfort beispielsweise mit einem Pullover füllen und an der Ken moflehne befestigen. Und schon hat man eine Stütze für den Kopf montiert - das nennen wir zu Ende gedacht! Die maximale Belastung liegt bei 145kg.</p>    
                                        <br>

                                        <p>
                                            <strong>Helinox Chair TWO (Price for 2 chairs!):</strong><br>
                                            3 days: 	15,-
                                            4 days: 	19,-
                                            7 days: 	30,-
                                            14 days:	49,-
                                        </p>
                                        
                                    
                                    </div>
                            </div>
                            <!-- individual item -->
                            <div class="item"  style="overflow-y: visible !important">
                                    <div class="image-container col-md-5 col-sm-12" style="height:460px; background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/equipments_for_rent/sm-stove2.png'); background-size: contain;background-repeat: no-repeat;background-position: center; float: unset; margin: 0 auto;"></div>
                                    
                                     <div class="carousel-caption col-sm-12" id="bottom-info" style="height:auto !important; position: relative; width: auto; margin: 0 auto">
                                        <h3>Primus Kinja Cooker</h3>
                                        <p>Der Primus Kocher 'Kinjia' ist ein leichter, kleiner und kompakter Kocher mit zwei Brennern, der echten Spaß beim Kochen unter freiem Himmel ermöglicht. Ob der Kaffee am Morgen oder das Abendessen für die ganze Familie, wie ihr den Kinjia nutzt bleibt ganz alleine euch überlassen. Im Adapter für Gasflaschen befindet sich zugleich ein Druckregulator der dafür sorgt, dass beide Brenner immer mit gleichem Druck versorgt werden. Wir geben euch eine Gaskartusche (100g) mit dazu.</p>       
                                    </div>
                            </div>
                          
                            <!-- individual item -->
                            <div class="item"  style="overflow-y: visible !important">
                                    <div class="image-container col-md-5 col-sm-12" style="height:460px; background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/equipments_for_rent/sm-gasM.png'); background-size: contain;background-repeat: no-repeat;background-position: center; float: unset; margin: 0 auto;"></div>
                                    
                                     <div class="carousel-caption col-sm-12" id="bottom-info" style="height:auto !important; position: relative; width: auto; margin: 0 auto">
                                     <h3>Primus Power Gas Size M (230g)</h3>
                                       <p>Wenn ihr euer Abenteuer startet geben wir euch gern noch den passenden Brennstoff für den Kocher mit. Um ein Gefühl zu bekommen, wie viel Gas ihr benötigen werdet habt ihr hier eine kleine Beispielrechnung:<br>
Eine Primus Gaskartusche in Größe L mit 230 Gramm Gasinhalt hält rund 19 bis 20 Brennvorgänge à 3:48 Minuten. Umgerechnet sind das ca. 71 bis 76 Minuten Brenndauer. Grundlage hierfür ist jeweils, 1 Liter Wasser bis zum Sieden zu erhitzen. Bringt ihr also beispielsweise jeweils 2L Wasser zum Kochen, halbiert sich die Brenndauer entsprechend. Ihr könnt selbstverständlich nicht angebrochene Gaskartuschen bei uns wieder abgeben.</p>
                                   
                                    </div>
                            </div>
                            
                              <!-- individual item -->
                              <div class="item"  style="overflow-y: visible !important">
                                    <div class="image-container col-md-5 col-sm-12" style="height:460px; background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/equipments_for_rent/sm-cookingset.png'); background-size: contain;background-repeat: no-repeat;background-position: center; float: unset; margin: 0 auto;"></div>
                                    
                                     <div class="carousel-caption col-sm-12" id="bottom-info" style="height:auto !important; position: relative; width: auto; margin: 0 auto">
                                        <h3>Primus CampFire Cookset S.S. Large</h3>
                                        <p>Kochset von Primus aus robustem 18/8-Edelstahl. Das Set besteht aus 2 Töpfen mit je 1,8L bzw. 3L Volumen, zwei Deckeln mit integriertem Abtropfsieb und einer Bratpfanne mit integriertem Griff. Besonders praktisch sind die Töpfe, da sie sich ineinander stapeln und so extrem platzsparend verstauen lassen. So wird es beim Kochen auf dem Campingplatz fast so komfortabel, wohl aber noch schöner als in der Küche zu Hause.</p>     
                                    </div>
                            </div>

                            <!-- individual item -->
                            <div class="item"  style="overflow-y: visible !important">
                                    <div class="image-container col-md-5 col-sm-12" style="height:460px; background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/equipments_for_rent/sm-servingkit.png'); background-size: contain;background-repeat: no-repeat;background-position: center; float: unset; margin: 0 auto;"></div>
                                    
                                     <div class="carousel-caption col-sm-12" id="bottom-info" style="height:auto !important; position: relative; width: auto; margin: 0 auto">
                                        <h3>Primus CampFire Serving Kit</h3>
                                        <p>Set zum Servieren der gezauberten Mahlzeiten, bestehend aus 4 Edelstahl-Tellern und einer Schüssel. Alle 4 Teller lassen sich ineinander stapeln und in der Schüssel verstauen. Der Silikondeckel verschließt das Set und sorgt dafür, dass nichts hin und her fliegt während des Tages.</p>      
                                     </div>
                            </div>
                            <!-- individual item -->
                            <div class="item"  style="overflow-y: visible !important">
                                    <div class="image-container col-md-5 col-sm-12" style="height:460px; background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/equipments_for_rent/md-mug.png'); background-size: contain;background-repeat: no-repeat;background-position: center; float: unset; margin: 0 auto;"></div>
                                    
                                     <div class="carousel-caption col-sm-12" id="bottom-info" style="height:auto !important; position: relative; width: auto; margin: 0 auto">
                                        <h3>Primus 4-Season Mug 0.2L</h3>
                                        <p>Doppelwandiger, robuster Becher aus poliertem, hochwertigem rostfreiem Edelstahl (18/8). Er sorgt dafür, dass euer Tee oder die heiße Schokolade am Abend auch warm
 bleibt und zeigt sich dabei elegant und unempfindlich.</p>    
                                    </div>
                            </div>
                            <!-- individual item -->
                            <div class="item"  style="overflow-y: visible !important">
                                    <div class="image-container col-md-5 col-sm-12" style="height:460px; background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/equipments_for_rent/boat.png'); background-size: contain;background-repeat: no-repeat;background-position: center; float: unset; margin: 0 auto;"></div>
                                    
                                     <div class="carousel-caption col-sm-12" id="bottom-info" style="height:auto !important; position: relative; width:100%; margin: 0 auto;">
                                        <h3>Boat</h3>

                                    </div>
                            </div>
                          
                            <!-- individual item -->
                            <div class="item"  style="overflow-y: visible !important">
                                    <div class="image-container col-md-5 col-sm-12" style="height:460px; background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/equipments_for_rent/espressomaker.png'); background-size: contain;background-repeat: no-repeat;background-position: center; float: unset; margin: 0 auto;"></div>
                                    
                                     <div class="carousel-caption col-sm-12" id="bottom-info" style="height:auto !important; position: relative; width:100%; margin: 0 auto">
                                        <h3>Espresso Cooker</h3>
                                       
                                    </div>
                            </div>
                            <!-- individual item -->
                            <div class="item"  style="overflow-y: visible !important">
                                    <div class="image-container col-md-5 col-sm-12" style="height:460px; background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/equipments_for_rent/slackline.png'); background-size: contain;background-repeat: no-repeat;background-position: center; float: unset; margin: 0 auto;"></div>
                                    
                                     <div class="carousel-caption col-sm-12" id="bottom-info" style="height:auto !important; position: relative; width:100%; margin: 0 auto">
                                            <h3>Slackline</h3>     
                                    </div>
                            </div>
                            <!-- individual item -->
                            <div class="item"  style="overflow-y: visible !important">
                                    <div class="image-container col-md-5 col-sm-12" style="height:460px; background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/equipments_for_rent/hammock.png'); background-size: contain;background-repeat: no-repeat;background-position: center; float: unset; margin: 0 auto;"></div>
                                    
                                     <div class="carousel-caption col-sm-12" id="bottom-info" style="height:auto !important; position: relative; width:100%; margin: 0 auto">
                                        <h3>Hammock</h3>
                                    </div>
                            </div>
                            <!-- individual item -->
                            <div class="item"  style="overflow-y: visible !important">
                                    <div class="image-container col-md-5 col-sm-12" style="height:460px; background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/equipments_for_rent/badminton.png'); background-size: contain;background-repeat: no-repeat;background-position: center; float: unset; margin: 0 auto;"></div>
                                    
                                     <div class="carousel-caption col-sm-12" id="bottom-info" style="height:auto !important; position: relative; width:100%; margin: 0 auto">
                                        <h3>Badminton Set</h3>
                                    </div>
                            </div>
                            <!-- individual item -->
                            <div class="item"  style="overflow-y: visible !important">
                                    <div class="image-container col-md-5 col-sm-12" style="height:460px; background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/equipments_for_rent/firstaid.png'); background-size: contain;background-repeat: no-repeat;background-position: center; float: unset; margin: 0 auto;"></div>
                                    
                                     <div class="carousel-caption col-sm-12" id="bottom-info" style="height:auto !important; position: relative; width:100%; margin: 0 auto">
                                        <h3>First aid Kit</h3>   
                                    </div>
                            </div>
                            <!-- individual item -->
                            <div class="item"  style="overflow-y: visible !important">
                                    <div class="image-container col-md-5 col-sm-12" style="height:460px; background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/equipments_for_rent/SUP2.png'); background-size: contain;background-repeat: no-repeat;background-position: center; float: unset; margin: 0 auto;"></div>
                                    
                                     <div class="carousel-caption col-sm-12" id="bottom-info" style="height:auto !important; position: relative; width:100%; margin: 0 auto">
                                        <h3>SUP</h3>      
                                    </div>
                            </div>

                            
                    </div>

                  
                <!-- Left and right controls -->
                <a class="left carousel-control  hidden-xs" href="#equipmentCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control  hidden-xs" href="#equipmentCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>


    

    <!-- OPT IN SECTION
	================================================== -->

    <!-- optin -->


  
     <!-- section column middle; besonders
	================================================== -->
    <section id="section-column-md" class="color-dark-grey" >
        <div class="container">
            
            <h2>Was macht Cargobike Adventures so besonders?</h2>
            <p class="lead">Gemeinsam entlasten wir Städte, Straßen und den Himmel. Wir bieten euch ein nie dagewesenes Konzept von</p>

            <div class="row">
                <div class="col-sm-4">
                    <?php if(!empty($col_image_1)): ?>
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/specialty-berlin2.png" alt="icon" style="padding: 15px;">
                    <?php endif; ?>

                    <p>Zentraler Pick-Up und Drop-Off im MotionLab Berlin-Treptow</p>
                </div>
                <!-- col -->
                <div class="col-sm-4">
                    <?php if(!empty($col_image_2)): ?>
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/specialty-chair.png" alt="icon" >
                    <?php endif; ?>

                   <p>Ausführliche Einführung in Bike und Equipment bei Anmietung</p>
                </div>
                <!-- col -->
                <div class="col-sm-4">
                    <?php if(!empty($col_image_3)): ?>
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/specialty-wheel.png" alt="icon" >
                    <?php endif; ?>

                    <p>Neueste Modelle an Bikes und Zubehör, garantiert frisch gewartet und desinfiziert</p>
                </div>
                <!-- col -->
                <div class="col-sm-4">
                    <?php if(!empty($col_image_4)): ?>
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/specialty-leaf.png" alt="icon" style="padding: 8px;">
                    <?php endif; ?>

                    <p>CO2 neutrales und somit emissionsfreies Reisen - so schont ihr die Umwelt</p>
                </div>
                <!-- col -->
                <div class="col-sm-4">
                    <?php if(!empty($col_image_5)): ?>
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/specialty-cycle2.png" alt="icon" >
                    <?php endif; ?>

                    <p>Alle unsere Partner verschreiben sich in höchstem Maße Nachhaltigkeit und Transparenz im Wirtschaftskreislauf</p>
                </div>
                <!-- col -->
            </div>
            <!-- row -->

        </div>
        <!-- container -->
    </section>
    <!-- section-column-md -->

    
      <!-- OPT IN SECTION
	================================================== -->

    <!-- optin -->

    <!-- column large; premium service
	================================================== -->
    <section id="section-column-lg" class="color-dark-grey" >
        <div class="container">

            <div class="section-header">
                <!--if user uploaded an image -->
                <!-- <?php if(!empty($premium_service_feature_image)): ?>
                    <img src="<?php  echo $premium_service_feature_image['url']; ?>" alt="<?php echo $premium_service_feature_image['alt']; ?>">
                <?php endif; ?> -->
                

                <h2>Wie Definieren Wir Premium Service?</h2>
            </div>
            <!-- section-header -->

            <!-- <p class="lead"><?php echo $premium_service_section_desc; ?></p> -->
            <div class="row">
                <div class="col-sm-6" style="text-align: center;">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/group.svg" alt="icon" style="width: 90px" >
                    <p>Wir sind Radreisende wie Ihr und für euch da, telefonisch oder per Mail</p>
                </div>
                <!-- end col -->

                <div class="col-sm-6"  style="text-align: center;">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/clean.svg" alt="icon" style="width: 90px"  >
                    <p>Von der persönlichen Übergabe eures gebuchten Bikes+Equipment bis zur Rückgabe - hier trefft ihr die Gründer noch mit Putzlappen und Staubwedel</p>
                </div>
                <!-- end col -->

                <div class="col-sm-6"  style="text-align: center;">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/door.svg" alt="icon"  style="width: 90px" >
                    <p>Nach voriger Terminvereinbarung könnt Ihr uns im MotionLab besuchen kommen und euch ein Bild von unserem Angebot machen. Wir haben Gesichter und die zeigen wir gern. Persönlicher Kontakt ist uns wichtig</p>
                </div>
                <!-- end col -->
            </div>
            <!-- row -->

        </div>
        <!-- container -->
    </section>
    <!-- section-column-lg -->


<?php
get_footer();
?>
