<?php
/**
 * Template Name: Product Page
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

    <!-- PRODUKTE ANZEIGEN
	================================================== -->
    <!-- CATEGORY NAVIGATION     -->
    <!-- <div class="ti_cat_wrapper" id="ti_sticky_nav">
            <ul class="ti_cat_list">
                <?php
                // $args = array(
                //     // 'number'     => $number,
                //     // 'orderby'    => 'title',
                //     // 'order'      => 'ASC',
                //     'hide_empty' => true, //$hide_empty,
                //     // 'include'    => $ids
                // );
                // $product_categories = get_terms( 'product_cat', $args );
                // $count = count($product_categories);
                // if ( $count > 0 ){
                //     foreach ( $product_categories as $product_category ) {
                //         if ($product_category->count > 0) {
                //             echo '<li class="ti_cat_item"><a href="#category' . $product_category->term_id . '">' . $product_category->name . '</a></li>';
                //         }
                //     };
                // }  
                ?>
            </ul>
        </div> -->

    <!-- TI CUSTOM - PRODUKTLISTE - START -->
    <section class="ti_products_show">                
        <?php  
        $args = array(
            // 'number'     => $number,
            // 'orderby'    => 'title',
            // 'order'      => 'ASC',
            'hide_empty' => true, //$hide_empty,
            // 'include'    => $ids
        );
        $product_categories = get_terms('product_cat', $args);
        $count = count($product_categories);
        if ( $count > 0 ){
            foreach ( $product_categories as $product_category ) {
                // $thumbnail_id = get_term_meta( $product_category->term_id, 'thumbnail_id', true );
                // $image = wp_get_attachment_url( $thumbnail_id );
                ?>
                <div class="ti_category">
                    <h3 class="ti_cat_grid_title" id="category<?php echo $product_category->term_id ?>"><?php echo $product_category->name ?></h3>
                    <?php
                    // Loop through to get products of a category
                    $args = array(
                        'posts_per_page' => -1,
                        'tax_query' => array(
                            'relation' => 'AND',
                            array(
                                'taxonomy' => 'product_cat',
                                'field' => 'slug',
                                // 'terms' => 'white-wines'
                                'terms' => $product_category->slug
                            )
                        ),
                        'post_type' => 'product',
                        'orderby' => 'ID,',
                        'order' => 'ASC'
                    );
                    $products = new WP_Query( $args );
                    echo "<ul>";
                    while ( $products->have_posts() ) {
                        $products->the_post();
                        $product_id = get_the_ID();
                        $new_product = wc_get_product($product_id);
                        $sku = $new_product->get_sku();
                        $product_name = $new_product->get_name();
                        $product_price = $new_product->get_price_html();
                        $product_type = $new_product->get_type();
                        $product_images = $new_product->get_gallery_image_ids();
                        $product_children = array();
                        $variation_ids = '';
                        $attr_values = '';
                        $variation_prices = '';
                        if ($product_type == "variable") {
                            $product_children = $new_product->get_children();
                            $formatted_price = number_format($new_product->get_variation_regular_price(), 2, ',', '.');
                            $product_price = 'ab ' . get_woocommerce_currency_symbol() . $formatted_price;
                            // $product_price = 'ab ' . $new_product->get_variation_price( 'min', true );
                        }
                        ?>
                        <div class="ti_product_container">
                            <div class="ti_grid_prod_name"><?php echo $product_name ?></div>
                            <div class="ti_product_images" >
                                <?php
                                $product_main_img = wp_get_attachment_url($product_images[0]);
                                ?>
                                <img data-toggle="collapse" href="#id_<?php echo $sku ?>" src="<?php echo $product_main_img ?>" alt="CargoBike Adventures" width="300" height="300">
                            </div>
                            <div class="ti_grid_excerpt"><?php the_excerpt() ?></div>
                            <div class="ti_prod_varianten">                          
                                <?php
                                if (count($product_children) > 0) {
                                    foreach ($product_children as $variation_id) {
                                        $variation = new WC_Product_Variation($variation_id);
                                        $variation_attributes = $variation->get_variation_attributes();
                                        $variation_price = number_format($variation->get_regular_price(), 2, ',', '.');

                                        foreach ($variation_attributes as $taxonomy => $term_slug) {
                                            $new_taxonomy = str_replace("attribute_", "", $taxonomy);
                                            $new_term = get_term_by('slug', $term_slug, $new_taxonomy);
                                            $new_name = $new_term->name;
                                            $attr_values .= $new_name . "^";
                                        ?>
                                <p class="ti_varianten_attribute"><?php echo $new_name ?></p>
                                <p class="ti_varianten_price"><?php echo  $variation_price ?></p>
                                <?php
                                        }
                                        // Save attributes values to button
                                        // $attr_values .= "|";
                                    }
                                }
                                ?>
                            </div>
                            <button class="ti_angebot_btn" data-toggle="modal" data-target="#tiModal">ZUM ANGEBOT</button>
                            <div class="ti_image_show collapse" id="id_<?php echo $sku ?>">
                                <?php
                                foreach ($product_images as $product_image) {
                                    $product_image_url = wp_get_attachment_url($product_image);
                                    ?>
                                    <img src="<?php echo $product_image_url ?>" alt="CargoBike Adventures" width="300" height="300">
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <?php
                        }
                    echo "</ul>";
                    ?>
                </div>
            <?php
            }
            ?>
        <?php
        }
        ?>
    </section>
    <!-- TI CUSTOM - PRODUKTLISTE - END -->
    <!-- The Modal -->
    <div class="modal fade" id="tiModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title"></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <p>Aufgrund der aktuell und bis auf Weiteres undurchsichtigen Pandemie Situation haben wir uns dazu entschlossen, unser Buchungstool noch nicht live zu schalten. Wir wollen euch und uns den Ärger von Umbuchungen und Stornierungen ersparen und gehen mit dem Angebot online, sobald absehbar ist wie sich die Lage im nächsten Jahr entwickelt.
Wir bieten euch dafür die Möglichkeit an bereits Gutscheine zu erwerben, die Ihr dann im Frühjahr 2021 in konkrete Abenteuer verwandeln könnt.</p>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Jetzt Gutscheine für 2021 sichern!</button>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                </div>  
            </div>
        </div>
    </div>
<?php
get_footer();
?>