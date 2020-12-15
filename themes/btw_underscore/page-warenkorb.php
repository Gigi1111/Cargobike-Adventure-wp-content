<?php
/**
 * Template Name: Warenkorb Page
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

<?php woocommerce_content(); ?>
    <?php
        echo apply_filters('the_content',$wp_query->post->post_content);
    ?>

<?php
get_footer();
?>
