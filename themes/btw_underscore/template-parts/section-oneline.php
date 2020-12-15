<div class="container">
            <div class="row">
                <div class="col-sm-7" >
                    <?php if(!empty($content_text)): ?>
                        <p class="" style='text-align: center'><?php echo $content_text; ?></p>
                    <?php else: ?>
                        <p class="" style='text-align: center'>Planen Sie jetzt eine unvergessliche Radtour!</p>
                    <?php endif ?>
                </div>
                <!-- end col -->
                <div class="col-sm-5">
                     <form action="/gutschein" method="post">

                        <?php if(!empty($btn_text)): ?>
                            <input type="submit" class="btn" id=”searchsubmit” value="<?php echo $btn_text; ?>" style="width:100%"/>
                        <?php else: ?>
                            <input type="submit" class="btn" id=”searchsubmit” value="los geht's" style="width:100%"/>
                        <?php endif ?>
                    </form>
                </div>
                <!-- end col -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->