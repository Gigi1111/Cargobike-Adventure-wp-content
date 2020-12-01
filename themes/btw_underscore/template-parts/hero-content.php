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

