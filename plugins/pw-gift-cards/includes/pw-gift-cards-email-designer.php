<?php

defined( 'ABSPATH' ) or exit;

if ( ! class_exists( 'PW_Gift_Card_Emails_Designer' ) ) :

final class PW_Gift_Cards_Email_Designer {

    private $content_locations;
    private $design_colors;
    private $default_designs;

    function __construct() {
        add_action( 'pwgc_email_css', array( $this, 'pwgc_email_css' ) );
        add_action( 'pwgc_email_top', array( $this, 'pwgc_email_top' ) );
        add_action( 'pwgc_email_before_recipient', array( $this, 'pwgc_email_before_recipient' ) );
        add_action( 'pwgc_email_before_gift_card', array( $this, 'pwgc_email_before_gift_card' ) );
        add_action( 'pwgc_email_gift_card_top', array( $this, 'pwgc_email_inside_gift_card_top' ) );
        add_action( 'pwgc_email_gift_card_bottom', array( $this, 'pwgc_email_inside_gift_card_bottom' ) );
        add_action( 'pwgc_email_inside_gift_card_top', array( $this, 'pwgc_email_inside_gift_card_top' ) );
        add_action( 'pwgc_email_inside_gift_card_bottom', array( $this, 'pwgc_email_inside_gift_card_bottom' ) );
        add_action( 'pwgc_email_after_gift_card', array( $this, 'pwgc_email_after_gift_card' ) );
        add_action( 'pwgc_email_bottom', array( $this, 'pwgc_email_bottom' ) );

        $this->content_locations = array(
            'top' => __( 'Top', 'pw-woocommerce-gift-cards' ),
            'before_recipient' => __( 'Before recipient', 'pw-woocommerce-gift-cards' ),
            'before_gift_card' => __( 'Before Gift Card', 'pw-woocommerce-gift-cards' ),
            'inside_gift_card_top' => __( 'Gift Card Top', 'pw-woocommerce-gift-cards' ),
            'inside_gift_card_bottom' => __( 'Gift Card Bottom', 'pw-woocommerce-gift-cards' ),
            'after_gift_card' => __( 'After Gift Card', 'pw-woocommerce-gift-cards' ),
            'bottom' => __( 'Bottom', 'pw-woocommerce-gift-cards' ),
        );

        $this->design_colors = array(
            'amount_color' => array( '#pwgc-email-amount', 'color' ),
            'amount_label_color' => array( '#pwgc-email-amount-label', 'color' ),
            'additional_content_color' => array( '#pwgc-email-additional-content', 'color' ),
            'expiration_date_color' => array( '#pwgc-email-expiration-date', 'color' ),
            'expiration_date_label_color' => array( '#pwgc-email-expiration-date-label', 'color' ),
            'gift_card_border_color' => array( '#pwgc-email-gift-card-table', 'border-color' ),
            'gift_card_color' => array( '#pwgc-email-gift-card-table', 'background-color' ),
            'gift_card_number_color' => array( '#pwgc-email-card-number', 'color' ),
            'gift_card_number_label_color' => array( '#pwgc-email-card-number-label', 'color' ),
            'message_color' => array( '#pwgc-email-message', 'color' ),
            'recipient_color' => array( '#pwgc-email-to', 'color' ),
            'from_color' => array( '#pwgc-email-from', 'color' ),
            'redeem_button_background_color' => array( '#pwgc-email-redeem-button', 'background-color' ),
            'redeem_button_color' => array( '#pwgc-email-redeem-button a', 'color' ),
            'title_color' => array( '#pwgc-email-title', 'color' ),
        );
    }

    function get_content_locations() {
        return $this->content_locations;
    }

    function get_default_designs() {
        if ( empty( $this->default_designs ) ) {
            $this->default_designs = array();

            $default_design = apply_filters( 'pwgc_default_design', array(
                'version' => 2,
                'amount_color' => '#000000',
                'amount_label_color' => '#666666',
                'background_image' => '', // Deprecated.
                'logo_image' => '',
                'logo_image_location' => 'top',
                'logo_image_align' => 'center',
                'logo_image_max_width' => '500px',
                'logo_image_max_height' => '275px',
                'additional_content' => '',
                'additional_content_location' => 'top',
                'additional_content_align' => 'left',
                'additional_content_color' => '#000000',
                'expiration_date_color' => '#000000',
                'expiration_date_label_color' => '#666666',
                'gift_card_border_color' => '#333333',
                'gift_card_color' => '#fffee0',
                'gift_card_number_color' => '#000000',
                'gift_card_number_label_color' => '#666666',
                'name' => __( 'Default', 'pw-woocommerce-gift-cards' ),
                'redeem_button_background_color' => '#4caf50',
                'redeem_button_color' => '#ffffff',
                'redeem_button_visibility' => 'visible',
                'redeem_url' => '',
                'custom_css' => '',
                'title' => sprintf( __( '%s Gift Card', 'pw-woocommerce-gift-cards' ), get_option( 'blogname' ) ),
                'title_color' => '#000000',
                'from_color' => get_option( 'woocommerce_email_text_color', '#3c3c3c' ),
                'recipient_color' => get_option( 'woocommerce_email_text_color', '#3c3c3c' ),
                'message_color' => get_option( 'woocommerce_email_text_color', '#3c3c3c' ),
            ) );
            $this->default_designs[] = $default_design;

            $design = $default_design;
            $design['name'] = __( 'Happy Birthday', 'pw-woocommerce-gift-cards' );
            $design['title'] = __( 'Happy Birthday', 'pw-woocommerce-gift-cards' );
            $design['gift_card_color'] = '#fffc31';
            $design['redeem_button_background_color'] = '#ff0000';
            $design['redeem_button_color'] = '#ffffff';
            $design['title_color'] = '#ff0000';
            $design['amount_label_color'] = '#3ec300';
            $design['amount_color'] = '#337ca0';
            $design['gift_card_number_label_color'] = '#3ec300';
            $design['gift_card_number_color'] = '#337ca0';
            $design['expiration_date_label_color'] = '#0c0f0a';
            $design['expiration_date_color'] = '#0c0f0a';
            $this->default_designs[] = $design;

            $design = $default_design;
            $design['name'] = __( 'Happy Anniversary', 'pw-woocommerce-gift-cards' );
            $design['gift_card_color'] = '#a2a5aa';
            $design['redeem_button_background_color'] = '#3b839c';
            $design['redeem_button_color'] = '#1f1f1f';
            $design['title_color'] = '#1f1f1f';
            $design['amount_label_color'] = '#1f1f1f';
            $design['amount_color'] = '#ffffff';
            $design['gift_card_number_label_color'] = '#1f1f1f';
            $design['gift_card_number_color'] = '#ffffff';
            $design['expiration_date_label_color'] = '#1f1f1f';
            $design['expiration_date_color'] = '#1f1f1f';
            $this->default_designs[] = $design;

            $design = $default_design;
            $design['name'] = __( 'Congratulations', 'pw-woocommerce-gift-cards' );
            $design['gift_card_color'] = '#aae0d1';
            $design['redeem_button_background_color'] = '#ee4266';
            $design['redeem_button_color'] = '#ffffff';
            $design['title_color'] = '#171738';
            $design['amount_label_color'] = '#707070';
            $design['amount_color'] = '#171738';
            $design['gift_card_number_label_color'] = '#707070';
            $design['gift_card_number_color'] = '#171738';
            $design['expiration_date_label_color'] = '#666666';
            $design['expiration_date_color'] = '#666666';
            $this->default_designs[] = $design;

            $design = $default_design;
            $design['name'] = __( 'Happy Holidays', 'pw-woocommerce-gift-cards' );
            $design['gift_card_color'] = '#fff8f0';
            $design['redeem_button_background_color'] = '#690404';
            $design['redeem_button_color'] = '#fff8f0';
            $design['title_color'] = '#022d14';
            $design['amount_label_color'] = '#0f0e0e';
            $design['amount_color'] = '#022d14';
            $design['gift_card_number_label_color'] = '#0f0e0e';
            $design['gift_card_number_color'] = '#022d14';
            $design['expiration_date_label_color'] = '#0f0e0e';
            $design['expiration_date_color'] = '#000000';
            $this->default_designs[] = $design;

            $design = $default_design;
            $design['name'] = __( 'Merry Christmas', 'pw-woocommerce-gift-cards' );
            $design['gift_card_color'] = '#ba1b1d';
            $design['redeem_button_background_color'] = '#2a8200';
            $design['redeem_button_color'] = '#ffffff';
            $design['title_color'] = '#ffffff';
            $design['amount_label_color'] = '#eee5e9';
            $design['amount_color'] = '#ffffff';
            $design['gift_card_number_label_color'] = '#eee5e9';
            $design['gift_card_number_color'] = '#ffffff';
            $design['expiration_date_label_color'] = '#eee5e9';
            $design['expiration_date_color'] = '#eee5e9';
            $this->default_designs[] = $design;
        }

        return $this->default_designs;
    }

    function get_designs() {
        $designs = maybe_unserialize( get_option( 'pw_gift_card_designs', array() ) );
        if ( empty( $designs ) ) {
            $designs = $this->get_default_designs();

            // Bring over the design elements from the free version if it exists.
            $free_designs = maybe_unserialize( get_option( 'pw_gift_card_designs_free', array() ) );
            if ( !empty( $free_designs ) ) {
                $designs[0]['gift_card_color'] = $free_designs[0]['gift_card_color'];
                $designs[0]['redeem_button_background_color'] = $free_designs[0]['redeem_button_background_color'];
                $designs[0]['redeem_button_color'] = $free_designs[0]['redeem_button_color'];
            }

            return $designs;
        }

        // Ensure that all saved designs have the current keys in case we've added new things.
        $default_designs = $this->get_default_designs();
        $default_design = reset( $default_designs );
        foreach ( $designs as &$design ) {
            foreach( $default_design as $key => $value ) {
                if ( !isset( $design[ $key ] ) ) {
                    $design[ $key ] = $default_design[ $key ];
                }
            }
        }

        return $designs;
    }

    function color_picker_field( $design, $key, $label ) {
        if ( !empty( $design[ $key ] ) ) {
            $color = $design[ $key ];
        } else {
            $color = get_option( 'woocommerce_email_text_color', '#3c3c3c' );
        }
        $id = 'pwgc-designer-' . str_replace( '_', '-', $key );

        $preview_element = $this->design_colors[ $key ][0];
        $preview_element_css = $this->design_colors[ $key ][1];

        ?>
        <p class="form-field">
            <label class="pwgc-designer-label"><?php echo $label; ?></label>
            <input type="text" name="<?php echo $key; ?>" id="<?php echo $id; ?>" value="<?php echo $color; ?>" style="color: <?php echo $color; ?>; background-color: <?php echo $color; ?>; max-width: 75px;">
        </p>
        <script>
            jQuery(function() {
                pwgcAssignColorPicker('#<?php echo $id; ?>', '<?php echo $preview_element; ?>', '<?php echo $preview_element_css; ?>');
            });
        </script>
        <?php
    }

    function pwgc_email_css( $item_data ) {
        $design = $item_data->design;
        foreach ( $this->design_colors as $key => $map ) {
            $value = '';

            if ( isset( $design[ $key ] ) ) {
                $value = $design[ $key ];
            } else if ( isset( $map[2] ) ) {
                $value = $map[2];
            }

            if ( !empty( $value ) ) {
                echo "$map[0] { $map[1]: $value; }\n";
            }
        }

        if ( isset( $design['additional_content_align'] ) && !empty( $design['additional_content_align'] ) ) {
            ?>
            #pwgc-email-additional-content {
                text-align: <?php echo $design['additional_content_align']; ?>;
            }
            <?php
        }

        if ( $item_data->design['redeem_button_visibility'] != 'visible' ) {
            ?>
            #pwgc-email-redeem-button {
                display: none;
            }
            <?php
        }

        // Background images are no longer recommended due to Outlook issues. Left here for backwards compatibility.
        if ( isset( $design['background_image'] ) && !empty( $design['background_image'] ) ) {
            ?>
            #pwgc-email-gift-card-container {
                background-image: url('<?php echo $design['background_image']; ?>');
                background-position: center;
                background-repeat: no-repeat;
                background-size: auto 100%;
                padding-left: 0;
                padding-right: 0;
            }

            #pwgc-email-gift-card-table {
                padding-left: 36px;
                padding-right: 36px;
                height: 275px;
                width: 500px;
            }

            #pwgc-email-gift-card-bottom-cell, #pwgc-email-gift-card-top-cell {
                display: none;
            }

            #pwgc-email-container {
                width: 500px;
            }
            <?php
        }

        echo $design['custom_css'];
    }

    function output_by_location( $location, $item_data ) {
        if ( empty( $item_data ) || !property_exists( $item_data, 'design' ) ) { return; }

        if ( $location === $item_data->design['logo_image_location'] ) {
            wc_get_template( 'emails/email-pw-gift-card-image.php', array( 'item_data' => $item_data ), '', PWGC_PLUGIN_ROOT . 'templates/woocommerce/' );
        }

        if ( $location === $item_data->design['additional_content_location'] ) {
            echo '<div id="pwgc-email-additional-content">' . wp_kses_post( wpautop( $item_data->design['additional_content'] ) ) . '</div>';
        }
    }

    function pwgc_email_top( $item_data ) {
        $this->output_by_location( 'top', $item_data );
    }

    function pwgc_email_before_recipient( $item_data ) {
        $this->output_by_location( 'before_recipient', $item_data );
    }

    function pwgc_email_before_gift_card( $item_data ) {
        $this->output_by_location( 'before_gift_card', $item_data );
    }

    function pwgc_email_inside_gift_card_top( $item_data ) {
        $this->output_by_location( 'inside_gift_card_top', $item_data );
    }

    function pwgc_email_inside_gift_card_bottom( $item_data ) {
        $this->output_by_location( 'inside_gift_card_bottom', $item_data );
    }

    function pwgc_email_after_gift_card( $item_data ) {
        $this->output_by_location( 'after_gift_card', $item_data );
    }

    function pwgc_email_bottom( $item_data ) {
        $this->output_by_location( 'bottom', $item_data );
    }
}

global $pw_gift_cards_email_designer;
$pw_gift_cards_email_designer = new PW_Gift_Cards_Email_Designer;

endif;
