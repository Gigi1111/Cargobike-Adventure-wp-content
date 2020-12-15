<section id="signup" style="background: url('<?php bloginfo('stylesheet_directory'); ?><?php echo $background_img; ?>'); background-size: cover;
    background-position: center;
    background-repeat: no-repeat;">
    <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                        <?php if(!empty($content_text)): ?>
                           <h2><?php echo $content_text; ?></h2>
                        <?php else: ?>
                            <h2>Sind Sie bereit für neue Abenteuer?</h2>
                        <?php endif ?>
                  
                   <form action="/produkt/gutscheinkarte" method="post">
                        <?php if(!empty($btn_text)): ?>
                            <input type="submit" class="btn" id=”searchsubmit” value="<?php echo $btn_text; ?>"/>
                        <?php else: ?>
                            <input type="submit" class="btn" id=”searchsubmit” value="los geht's"/>
                        <?php endif ?>
                    </form>
                    <!-- <?php echo $booking_btn ?> -->
                    <!-- </button> -->
                </div>
                <!-- end col -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
</section>

    


   