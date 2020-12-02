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

get_header();
?>


    <!-- HERO
    ================================================== -->
    <section id="hero">
            <div class="container clearfix">
                <!-- The video -->
                <video autoplay muted loop id="videoPlayer" poster="<?php bloginfo('stylesheet_directory');?>/assets/img/brand-image/image-relax.jpg">
                    <source src="<?php bloginfo('stylesheet_directory');?>/assets/img/brand-image/cargobike_hero_reel.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="overlay">
                     <?php
                        get_template_part( 'template-parts/hero', 'content' );
                        ?>
                </div>

                
            </div>
            <!-- container -->
    </section>

      <!-- quote
    ================================================== -->
    <!-- <section id="introduction" >
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-6 left">
                    <blockquote class="wp-block-quote is-style-large">
                    <span class="" style="font:bold 84px / 5px 'Noe Display'">“</span>
                        <p> <?php echo $news_content; ?></p>
                        <cite class=""><a href="https://www.tagesspiegel.de/" onclick="javascript:window.open('https://www.tagesspiegel.de/'); return false;">Tagesspiegel</a></cite>
                    </blockquote>
                </div>
            </div>
        </div>
    </section> -->

     <!-- INTRO
	================================================== -->
    <section id="introduction" class="color-dark-grey" >
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-4 left">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php echo $greetings_content; ?>
                        <div class="">
                        <?php if(!empty($twitter)): ?>
                            <a href="<?php echo $twitter; ?>" class="badge social twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                        <?php endif; ?>
                        <?php if(!empty($facebook)): ?>
                            <a href="<?php echo $facebook; ?>" class="badge social facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                        <?php endif; ?>
                        <?php if(!empty($instagram)): ?>
                            <a href="<?php echo $instagram; ?>" class="badge social instagram" target="_blank"><i class="fa fa-instagram"></i></a>
                        <?php endif; ?>
                        </div>
                        
                    </div>
                    </div>
                    <!-- row -->
                </div>
                <!-- end col -->
                <div class="col-sm-8 col-md-8 right" >
                    <div class="w3-content w3-section" style="max-width:100%; height: 500px; overflow: hidden;">
                        <?php if(!empty($greeting_slideshow_1)): ?>
                            <img class="mySlides" src="<?php  echo $greeting_slideshow_1['url']; ?>" alt="<?php echo $greeting_slideshow_1['alt']; ?>" style="width:100%">
                        <?php endif; ?>
                        <?php if(!empty($greeting_slideshow_2)): ?>
                            <img class="mySlides" src="<?php  echo $greeting_slideshow_2['url']; ?>" alt="<?php echo $greeting_slideshow_2['alt']; ?>" style="width:100%">
                        <?php endif; ?>
                        <?php if(!empty($greeting_slideshow_3)): ?>
                            <img class="mySlides" src="<?php  echo $greeting_slideshow_3['url']; ?>" alt="<?php echo $greeting_slideshow_3['alt']; ?>" style="width:100%">
                        <?php endif; ?>
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
                <!--if user uploaded an image -->
                <!-- <?php if(!empty($features_section_image)): ?>
                    <img src="<?php  echo $features_section_image['url']; ?>" alt="<?php echo $features_section_image['alt']; ?>">
                <?php endif; ?> -->
                
                <h2><?php echo $features_section_title; ?></h2>
                <?php if(!empty($features_section_body)): ?>
                        <p class="lead"><?php echo $features_section_body;?></p>
                <?php endif; ?>
            </div>
            <!-- section-header -->

            <div class="row">
                <?php $loop = new WP_Query(array('post_type'=>'course_feature','orderby'=>'post_id','order'=>'ASC'));?>
                <?php while($loop->have_posts()) : $loop->the_post(); ?>
                    <div class="col-sm-2">
                        <!-- <i class="<?php the_field('course_feature_icon');?>"></i> -->
                        <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/<?php the_field('course_feature_icon_url');?>" alt="Design" style="width:50px; height:50px" >
                        <h4><?php the_title(); ?></h4>
                    </div>
                    <!-- end col -->
                <?php endwhile; ?>
            </div>
            <!-- row -->

        </div>
        <!-- container -->
    </section>

          
    <!-- section slideshow equipments
	================================================== -->
    <section id="section-slidshow" class="" style="padding-bottom: 0;">
            <div class="container" style="width: 100%;">
                
                <h2 style="text-align: center; color: var(--brand-dark-grey);"><?php echo $equipment_slideshow_title; ?></h2>  
                <p><?php echo $equipment_slideshow_sub; ?></p>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" style="height: 600px; overflow: hidden;">
                            <div class="item active" style="height: 100%">
                                <img class="d-block w-100" src="<?php  echo $equipment_slideshow_item_image_1['url']; ?>" alt="First slide" >
                                <div class="carousel-caption d-none d-md-block">
                                    <h3><?php echo $equipment_slideshow_item_title_1 ?></h3>
                                    <p><?php echo $equipment_slideshow_item_description_1 ?></p>
                                </div>
                            </div>
                            <div class="item" style="height: 100%">
                                <img class="d-block w-100" src="<?php  echo $equipment_slideshow_item_image_2['url']; ?>" alt="Second slide" >
                                <div class="carousel-caption d-none d-md-block">
                                    <h3><?php echo $equipment_slideshow_item_title_2 ?></h3>
                                    <p><?php echo $equipment_slideshow_item_description_2 ?></p>
                                </div>
                            </div>
                            <div class="item" style="height: 100%">
                                <img class="d-block w-100" src="<?php  echo $equipment_slideshow_item_image_3['url']; ?>" alt="Third slide" >
                                <div class="carousel-caption d-none d-md-block">
                                    <h3><?php echo $equipment_slideshow_item_title_3 ?></h3>
                                    <p><?php echo $equipment_slideshow_item_description_3 ?></p>
                                </div>
                            </div>
                            <div class="item" style="height: 100%">
                                <img class="d-block w-100" src="<?php  echo $equipment_slideshow_item_image_4['url']; ?>" alt="Fourth slide" >
                                <div class="carousel-caption d-none d-md-block">
                                    <h3><?php echo $equipment_slideshow_item_title_4 ?></h3>
                                    <p><?php echo $equipment_slideshow_item_description_4 ?></p>
                                </div>
                            </div>
                            <div class="item" style="height: 100%">
                                <img class="d-block w-100" src="<?php  echo $equipment_slideshow_item_image_5['url']; ?>" alt="Fifth slide" >
                                <div class="carousel-caption d-none d-md-block">
                                    <h3><?php echo $equipment_slideshow_item_title_5 ?></h3>
                                    <p><?php echo $equipment_slideshow_item_description_5 ?></p>
                                </div>
                            </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <div class="btn">
                            <span class="glyphicon glyphicon-chevron-left" ></span>
                            <span class="sr-only">Previous</span>
                        </div>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <div class="btn">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </div>
                    </a>
                </div>
            </div>
            <style>
            </style>
    </section>


    <!-- OPT IN SECTION
	================================================== -->
    <section id="optin" >
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <p class="lead"><?php echo $optin_text; ?></p>
                </div>
                <!-- end col -->
                <div class="col-sm-4">
                    <button class="btn btn-secondary btn-lg btn-block" data-toggle="modal" data-target="#myModal">
                    <?php echo $optin_button_text; ?>
					</button>
                </div>
                <!-- end col -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>
    <!-- optin -->

    
    <!-- section slideshow equipments
	================================================== -->
    <section id="section-slidshow" class="" style="padding-bottom: 0;">
            <div class="container" style="width: 100%;">
                
                <h2 style="text-align: center; color: var(--brand-dark-grey);"><?php echo $equipment_slideshow_title; ?></h2>  
                <p><?php echo $equipment_slideshow_sub; ?></p>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" style="height: 600px; overflow: hidden;">
                            <div class="item active" style="height: 100%">
                                <img class="d-block w-100" src="<?php  echo $equipment_slideshow_item_image_1['url']; ?>" alt="First slide" >
                                <div class="carousel-caption d-none d-md-block">
                                    <h3><?php echo $equipment_slideshow_item_title_1 ?></h3>
                                    <p><?php echo $equipment_slideshow_item_description_1 ?></p>
                                </div>
                            </div>
                            <div class="item" style="height: 100%">
                                <img class="d-block w-100" src="<?php  echo $equipment_slideshow_item_image_2['url']; ?>" alt="Second slide" >
                                <div class="carousel-caption d-none d-md-block">
                                    <h3><?php echo $equipment_slideshow_item_title_2 ?></h3>
                                    <p><?php echo $equipment_slideshow_item_description_2 ?></p>
                                </div>
                            </div>
                            <div class="item" style="height: 100%">
                                <img class="d-block w-100" src="<?php  echo $equipment_slideshow_item_image_3['url']; ?>" alt="Third slide" >
                                <div class="carousel-caption d-none d-md-block">
                                    <h3><?php echo $equipment_slideshow_item_title_3 ?></h3>
                                    <p><?php echo $equipment_slideshow_item_description_3 ?></p>
                                </div>
                            </div>
                            <div class="item" style="height: 100%">
                                <img class="d-block w-100" src="<?php  echo $equipment_slideshow_item_image_4['url']; ?>" alt="Fourth slide" >
                                <div class="carousel-caption d-none d-md-block">
                                    <h3><?php echo $equipment_slideshow_item_title_4 ?></h3>
                                    <p><?php echo $equipment_slideshow_item_description_4 ?></p>
                                </div>
                            </div>
                            <div class="item" style="height: 100%">
                                <img class="d-block w-100" src="<?php  echo $equipment_slideshow_item_image_5['url']; ?>" alt="Fifth slide" >
                                <div class="carousel-caption d-none d-md-block">
                                    <h3><?php echo $equipment_slideshow_item_title_5 ?></h3>
                                    <p><?php echo $equipment_slideshow_item_description_5 ?></p>
                                </div>
                            </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <div class="btn">
                            <span class="glyphicon glyphicon-chevron-left" ></span>
                            <span class="sr-only">Previous</span>
                        </div>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <div class="btn">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </div>
                    </a>
                </div>
            </div>
            <style>
            </style>
    </section>


    <!-- OPT IN SECTION
	================================================== -->
    <section id="optin" >
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <p class="lead"><?php echo $optin_text; ?></p>
                </div>
                <!-- end col -->
                <div class="col-sm-4">
                    <button class="btn btn-secondary btn-lg btn-block" data-toggle="modal" data-target="#myModal">
                    <?php echo $optin_button_text; ?>
					</button>
                </div>
                <!-- end col -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>
    <!-- optin -->

  
     <!-- section column middle; besonders
	================================================== -->
    <section id="section-column-md" class="color-dark-grey" >
        <div class="container">
            <?php if(!empty($md_section_title)): ?>
                <h2> <?php echo $md_section_title; ?></h2>
            <?php endif; ?>
            <?php if(!empty($md_section_body)): ?>
                <p class="lead"> <?php echo $md_section_body; ?></p>
            <?php endif; ?>
            <div class="row">
                <div class="col-sm-4">
                    <?php if(!empty($col_image_1)): ?>
						<img src="<?php  echo $col_image_1['url']; ?>" alt="<?php echo $col_image_1['alt']; ?>" style="padding: 15px;">
                    <?php endif; ?>
                    <?php if(!empty($col_content_1)): ?>
                        <p><?php echo $col_content_1; ?></p>
                    <?php endif; ?>
                </div>
                <!-- col -->
                <div class="col-sm-4">
                    <?php if(!empty($col_image_2)): ?>
						<img src="<?php  echo $col_image_2['url']; ?>" alt="<?php echo $col_image_2['alt']; ?>" >
                    <?php endif; ?>
                    <?php if(!empty($col_content_2)): ?>
                        <p><?php echo $col_content_2; ?></p>
                    <?php endif; ?>
                </div>
                <!-- col -->
                <div class="col-sm-4">
                    <?php if(!empty($col_image_3)): ?>
						<img src="<?php  echo $col_image_3['url']; ?>" alt="<?php echo $col_image_3['alt']; ?>" >
                    <?php endif; ?>
                    <?php if(!empty($col_content_3)): ?>
                        <p><?php echo $col_content_3; ?></p>
                    <?php endif; ?>
                </div>
                <!-- col -->
                <div class="col-sm-4">
                    <?php if(!empty($col_image_4)): ?>
						<img src="<?php  echo $col_image_4['url']; ?>" alt="<?php echo $col_image_4['alt']; ?>" style="padding: 8px;">
                    <?php endif; ?>
                    <?php if(!empty($col_content_4)): ?>
                        <p><?php echo $col_content_4; ?></p>
                    <?php endif; ?>
                </div>
                <!-- col -->
                <div class="col-sm-4">
                    <?php if(!empty($col_image_5)): ?>
						<img src="<?php  echo $col_image_5['url']; ?>" alt="<?php echo $col_image_5['alt']; ?>" >
                    <?php endif; ?>
                    <?php if(!empty($col_content_5)): ?>
                        <p><?php echo $col_content_5; ?></p>
                    <?php endif; ?>
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
    <section id="optin" >
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <p class="lead"><?php echo $optin_text; ?></p>
                </div>
                <!-- end col -->
                <div class="col-sm-4">
                    <button class="btn btn-secondary btn-lg btn-block" data-toggle="modal" data-target="#myModal">
                    <?php echo $optin_button_text; ?>
					</button>
                </div>
                <!-- end col -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>
    <!-- optin -->


    <!-- column large; premium service
	================================================== -->
    <section id="section-column-lg" class="color-dark-grey" >
        <div class="container">

            <div class="section-header">
                <!--if user uploaded an image -->
                <?php if(!empty($premium_service_feature_image)): ?>
                    <img src="<?php  echo $premium_service_feature_image['url']; ?>" alt="<?php echo $premium_service_feature_image['alt']; ?>">
                <?php endif; ?>
                
                <h2><?php echo $premium_service_section_title; ?></h2>
            </div>
            <!-- section-header -->

            <p class="lead"><?php echo $premium_service_section_desc; ?></p>
            <div class="row">
                <div class="col-sm-6">
                    <h3><?php echo $reason_1_title; ?></h3>
                    <p><?php echo $reason_1_desc; ?></p>
                </div>
                <!-- end col -->

                <div class="col-sm-6">
                <h3><?php echo $reason_2_title; ?></h3>
                    <p><?php echo $reason_2_desc; ?></p>
                </div>
                <!-- end col -->

                <div class="col-sm-6">
                <h3><?php echo $reason_3_title; ?></h3>
                    <p><?php echo $reason_3_desc; ?></p>
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
