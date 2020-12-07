<?php
 /**
 * Template Name: Hero invitation
 */
$hero_text   = get_field('hero_text');
$hero_btn   = get_field('hero_btn');

?>
<div class="cover-container d-flex mx-auto flex-column">
            <div class="cover-inner" style="width:70%;">
                <div class="cover-text">
                    <form action="/gutschein" method="post">
                        <label for="search">
                            <!-- <h1 style="margin: 20px;"><?php  echo $hero_text; ?></h1> -->
                            <h1 style="margin: 20px;"><span style="color:var(--brand-secondary);
                            text-shadow: 0 0 1px var(--brand-primary);
                            ">Cargobike Adventures</span><br> So geht Roadtrip heute!</h1>
                            <h3 style="font-weight:300;"> 
                            <p>Aktiv und nachhaltig Urlauben: Mit E-Cargobikes und hochwertigem Campingequipment denken wir Roadtrips neu. 
Paare, Singles, Familien, Hundebesitzer oder Senioren.</p>

                        </label>

                            
                        <!-- <div class="row">
                            <div class="col-sm-6">
                                <input type="text" name="daterange" id="daterange" value="27/11/2020 - 05/12/2020" />
                            </div>
                            <div class="col-sm-6"> -->
                           
                            <input type="submit" class="btn" id=”searchsubmit” value="JETZT GUTSCHEIN KAUFEN"/>
                                <!-- <input type="submit" class="btn" id=”searchsubmit” value="<?php  echo $hero_btn; ?>"/> -->
                            <!-- </div>
                        </div> -->
                        </form>
                </div>
            </div>
    </div>

