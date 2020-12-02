<?php
 /**
 * Template Name: Hero invitation
 */
$hero_text   = get_field('hero_text');
$hero_btn   = get_field('hero_btn');

?>
<div class="cover-container d-flex mx-auto flex-column">
            <div class="cover-inner">
                <div class="cover-text">
                    <form action="/buchung" method="post">
                        <label for="search">
                            <h1 style="margin: 20px;"><?php  echo $hero_text; ?></h1></label>
                            <!-- <h3>Aktiv und nachhaltig Urlauben: Mit E-Cargobikes und (wahlweise) hochwertigem Campingequipment denken wir Roadtrips neu. 
Paare, Singles, Familien, Hundebesitzer oder Senioren: Zielgruppe ist jeder, der Fahrrad fahren kann. Genießt die Flexibilität des Radurlaubs und nehmt mit, was euch lieb ist. Dafür entwickeln wir derzeit nach ersten erfolgreichen Tests im Spätsommer 2020 einen Lastenradaufbau! 
Schlauchboot, Grill oder Angelzeug? 
Der Spontanität und Individualität sind keine Grenzen gesetzt und mit unseren Bikes "purzeln die Kilometer wie Alltagssorgen". Routenvorschläge gibt's auch. 
Darum können wir den Start der Fahrradsaison kaum erwarten. Den Duft der Natur im Fahrtwind. 
Wann startet ihr?</h3> -->
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" name="daterange" id="daterange" value="27/11/2020 - 05/12/2020" />
                            </div>
                            <div class="col-sm-6">
                                <input type="submit" class="btn" id=”searchsubmit” value="<?php  echo $hero_btn; ?>"/>
                            </div>
                        </div>
                </div>
            </div>
    </div>

