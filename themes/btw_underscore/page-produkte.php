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
    <section class="ti_products_show">
        <div class="ti_cat_wrapper">
            <ul class="ti_cat_list">
                <?php
                $args = array(
                    'number'     => $number,
                    // 'orderby'    => 'title',
                    // 'order'      => 'ASC',
                    'hide_empty' => $hide_empty,
                    'include'    => $ids
                );
                $product_categories = get_terms( 'product_cat', $args );
                $count = count($product_categories);
                if ( $count > 0 ){
                    foreach ( $product_categories as $product_category ) {
                        if ($product_category->count > 0) {
                            echo '<li class="ti_cat_item"><a href="#category' . $product_category->term_id . '">' . $product_category->name . '</a></li>';
                        }
                    };
                }  
                ?>
            </ul>
        </div>
                <!-- TI CUSTOM - PRODUKTLISTE - START -->
                <div class="ti_product_display">
                    <?php  
                        $args = array(
                        'number'     => $number,
                        // 'orderby'    => 'title',
                        // 'order'      => 'ASC',
                        'hide_empty' => $hide_empty,
                        'include'    => $ids
                        );
                        $product_categories = get_terms('product_cat', $args);
                        $count = count($product_categories);
                        if ( $count > 0 ){
                        foreach ( $product_categories as $product_category ) {
                            $thumbnail_id = get_woocommerce_term_meta( $product_category->term_id, 'thumbnail_id', true );
                            $image = wp_get_attachment_url( $thumbnail_id ); ?>
                            <div class="ti_cat_grid">
                            <img src="<?php echo $image ?>" alt="Cargobike Adventures" id="category<?php echo $product_category->term_id ?>">
                            <h3 class="ti_cat_grid_title"><?php echo $product_category->name ?></h3>
                            </div>
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
                                <div class="ti_grid_container">
                                    <div class="ti_grid_prod_name"><?php echo $sku . '. ' . $product_name ?></div>                  
                                    <div class="ti_grid_prod_cart">
                                    <?php
                                        if (count($product_children) > 0) {
                                        foreach ($product_children as $variation_id) {
                                            $variation = new WC_Product_Variation($variation_id);
                                            $variation_attributes = $variation->get_variation_attributes();
                                            $variation_price = number_format($variation->get_regular_price(), 2, ',', '.');
                                            // $variation_price = $variation->get_regular_price();
                                            // echo implode(", ", $variation_attributes) . ' - ' . $variation_price . '<br>';
                                            
                                            // Save all variation ids to button
                                            $variation_ids .= $variation_id . "|";

                                            // Save all variation prices to button
                                            $variation_prices .= $variation_price . "|";

                                            foreach ($variation_attributes as $taxonomy => $term_slug) {
                                            $new_taxonomy = str_replace("attribute_", "", $taxonomy);
                                            $new_term = get_term_by('slug', $term_slug, $new_taxonomy);
                                            $new_name = $new_term->name;
                                            $attr_values .= $new_name . "^";
                                            }

                                            // Save attributes values to button
                                            $attr_values .= "|";
                                        }
                                        }
                                    ?>
                                    <button 
                                        type="button" class="btn btn-danger" data-toggle="modal" data-target="#add_to_cart_model"
                                        data-product-id="<?php echo $product_id; ?>"
                                        data-product-name="<?php echo $product_name; ?>" 
                                        data-product-sku="<?php echo $sku; ?>" 
                                        data-children="<?php echo count($product_children); ?>"
                                        data-variation-ids=<?php echo $variation_ids; ?> 
                                        data-variation-attr-values="<?php echo $attr_values; ?>"
                                        data-variation-prices="<?php echo $variation_prices; ?>" 
                                        onclick="showDetails(this)"
                                    >
                                        <?php echo $product_price; ?>&nbsp;<i class="fa fa-cart-plus ti_prod_cart"></i>
                                    </button>
                                    </div>
                                    <div class="ti_grid_prod_excerpt"><?php the_excerpt() ?></div>
                                </div>
                            <?php
                            }
                            echo "</ul>";
                        }
                        }
                    ?>
                    </div>
                    <!-- The Add-to-cart Modal -->
                    <div class="modal fade" id="add_to_cart_model">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                        
                        <!-- Modal Header -->
                        <!-- <div class="modal-header">
                        </div> -->
                        
                        <!-- Modal body -->
                        <div class="modal-body ti_single_grid">
                            <div id="prod_title"></div>
                            <div class="prod_close_btn"><i type="button" class="fa fa-times manh_btn manh_normal_btn" class="close" data-dismiss="modal"></i></div>
                            <div id="prod_info"></div>
                        </div>
                        
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <div class="ti_single_grid_item" id="ti_quantity_box">
                            <i onclick="minus()" class="fa fa-minus ti_grid_minus ti_grid_btn"></i>
                            <input id="quantity" type="number" value="1" style="text-align: center">
                            <i onclick="plus()" class="fa fa-plus ti_grid_plus ti_grid_btn"></i>
                            </div>
                            <a href="#" 
                            data-quantity="#"
                            class="btn btn-success add_to_cart_button ajax_add_to_cart"
                            data-product_id="#" 
                            rel="nofollow"
                            id="ti_cart_btn"
                            >
                            <?php echo $new_product->add_to_cart_text(); ?>
                            </a>
                            <a class="btn btn-secondary" id="ti_continue_shopping_btn" data-dismiss="modal"><?php echo pll_e('Weiter einkaufen'); ?></a>
                        </div>
                        
                        </div>
                    </div>
                    </div>
                    <!-- TI CUSTOM - PRODUKTLISTE - END -->
    </section>

<?php
get_footer();
?>
