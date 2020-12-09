 <!-- HERO
    ================================================== -->
    <section id="hero" style="content: ''; background: url('<?php bloginfo('stylesheet_directory');?>/assets/img/brand-image/epic1-lg.jpg'); background-size: cover;background-repeat: no-repeat;background-position: top center; padding:0; margin-bottom: 40px ">
            <div class="container clearfix" style="padding:0; margin:0; width:100%; height:100%" >
                <!-- The video -->
                <video autoplay muted loop id="videoPlayer" class="hidden-md hidden-xs hidden-sm" poster="<?php bloginfo('stylesheet_directory');?>/assets/img/brand-image/epic1-lg.jpg">
                    <source src="<?php bloginfo('stylesheet_directory');?>/assets/img/brand-image/cargobike_hero_reel.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="overlay" style="content:''; background: rgba(0,0,0,0.5) !important; width:100%; height: 100%">
                </div>
                <?php
                        get_template_part( 'template-parts/hero', 'content' );
                        ?>
            </div>
            <!-- container -->
    </section>
