<?php
 /**
 * Template Name: Hero invitation
 */
$hero_text   = get_field('hero_text');
$hero_btn   = get_field('hero_btn');

?>
<div class="cover-container d-flex mx-auto flex-column" style="height:100%;">
            <div class="cover-inner" style="width: ;z-index: 99;    margin: auto;
    padding-bottom: 50px;">
                <div class="cover-text">
                    <form action="/gutschein" method="post">
                        <label for="search">
                            <!-- <h1 style="margin: 20px;"><?php  echo $hero_text; ?></h1> -->
                            <h1 style="margin: 20px;" ><span style="color:var(--brand-secondary);
                            text-shadow: 0 0 1px var(--brand-primary);
                            " >Cargobike Adventures</span><br> So geht Roadtrip heute!</h1>
                            <h3 style="font-weight:300;"> 
                            <p class="hidden-xs">Aktiv und nachhaltig Urlauben: Mit E-Cargobikes und hochwertigem Campingequipment denken wir Roadtrips neu. 
Paare, Singles, Familien, Hundebesitzer oder Senioren.</p>

                        </label>

                            
                        <!-- <div class="row">
                            <div class="col-sm-6">
                                <input type="text" name="daterange" id="daterange" value="27/11/2020 - 05/12/2020" />
                            </div>
                            <div class="col-sm-6"> -->
                           
                            <input type="submit" class="btn  custom-btn" id=”searchsubmit” value="GUTSCHEIN KAUFEN"/>
                                <!-- <input type="submit" class="btn  custom-btn" id=”searchsubmit” value="<?php  echo $hero_btn; ?>"/> -->
                            <!-- </div>
                        </div> -->
                        </form>
                </div>
            </div>
    </div>

