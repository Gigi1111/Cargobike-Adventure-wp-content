<?php
    if ( ! isset( $item_data->preview ) ) {
        do_action( 'woocommerce_email_header', $email_heading, $email );
    }
?>
<style type="text/css">
    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v15/CrYjSnGjrRCn0pd9VQsnFOvvDin1pK8aKteLpeZ5c0A.woff) format('woff');
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 700;
        src: local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v15/d-6IYplOFocCacKzxwXSOLO3LdcAZYWl9Si6vvxL-qU.woff) format('woff');
    }

    .pwgc-email-section {
        font-family: 'Roboto', Helvetica, Arial, sans-serif;
        margin: 24px 0;
    }

    #pwgc-email-title {
        font-size: 150%;
        font-weight: bold;
        line-height: 1.4;
        text-align: center;
    }

    #pwgc-email-message {
        margin-top: 0px;
    }

    .pwgc-email-label {
        font-size: 80%;
        line-height: 1.4;
    }

    #pwgc-email-gift-card-table {
        width: 100%;
        padding-left: 12px;
        padding-right: 12px;
        border-style: solid;
        border-width: 1px;
        border-radius: 16px;
    }

    #pwgc-email-gift-card-table td {
        padding-top: 12px;
        vertical-align: top;
    }

    #pwgc-email-gift-card-container {
        min-height: 275px;
    }

    #pwgc-email-amount {
        font-size: 250%;
        line-height: 1.0;
    }

    #pwgc-email-card-number {
        font-family: 'Courier New', Courier, monospace;
        font-weight: 600;
        font-size: 125%;
        line-height: 1.0;
    }

    #pwgc-email-expiration-date {
        font-size: 90%;
        line-height: 1.0;
    }

    #pwgc-email-expiration-date-section {
        float: right;
    }

    #pwgc-email-redeem-button {
        border: none;
        padding: 15px 32px;
        text-align: center;
        border-radius: 6px;
        display: inline-block;
    }

    #pwgc-email-redeem-button a {
        font-size: 16px;
        text-decoration: none;
        display: inline-block;
    }

    #pwgc-email-logo-image {
        max-width: <?php echo $item_data->design['logo_image_max_width']; ?>;
        max-height: <?php echo $item_data->design['logo_image_max_height']; ?>;
    }

    <?php
        do_action( 'pwgc_email_css', $item_data );
    ?>
</style>
<div id="pwgc-email-container">
    <div id="pwgc-email-top">
        <?php do_action( 'pwgc_email_top', $item_data ); ?>
    </div>
    <div id="pwgc-email-before-recipient">
        <?php do_action( 'pwgc_email_before_recipient', $item_data ); ?>
    </div>
    <div id="pwgc-email-message-container">
        <?php
            if ( !empty( $item_data->recipient_name ) ) {
                ?>
                <div id="pwgc-email-to" class="pwgc-email-section pwgc-email-to-message">
                    <?php _e( 'To', 'pw-woocommerce-gift-cards' ); ?>: <?php echo $item_data->recipient_name; ?>
                </div>
                <?php
            }

            do_action( 'pwgc_email_before_from', $item_data );

            if ( !empty( $item_data->from ) ) {
                ?>
                <div id="pwgc-email-from" class="pwgc-email-section pwgc-email-to-message">
                    <?php _e( 'From', 'pw-woocommerce-gift-cards' ); ?>: <?php echo $item_data->from; ?>
                </div>
                <?php
            }

            do_action( 'pwgc_email_before_message', $item_data );

            if ( !empty( $item_data->message ) ) {
                ?>
                <div id="pwgc-email-message" class="pwgc-email-section pwgc-email-to-message">
                    <?php echo nl2br( $item_data->message ); ?>
                </div>
                <?php
            }
        ?>
    </div>
    <div id="pwgc-email-before-gift-card">
        <?php do_action( 'pwgc_email_before_gift_card', $item_data ); ?>
    </div>
    <div id="pwgc-email-gift-card-container">
        <table id="pwgc-email-gift-card-table">
            <tr>
                <td id="pwgc-email-gift-card-top-cell"><?php
                    do_action( 'pwgc_email_inside_gift_card_top', $item_data );
                ?></td>
            </tr>
            <tr>
                <td id="pwgc-email-title">
                    <?php echo esc_html( $item_data->design['title'] ); ?>
                </td>
            </tr>
            <tr>
                <td id="pwgc-email-gift-card-after-title-cell"></td>
            </tr>
            <tr>
                <td id="pwgc-email-gift-card-amount-cell">
                    <div id="pwgc-email-amount-label" class="pwgc-email-label"><?php _e( 'Amount', 'pw-woocommerce-gift-cards' ); ?></div>
                    <div id="pwgc-email-amount"><?php echo wc_price( $item_data->amount ); ?></div>
                </td>
            </tr>
            <tr>
                <td id="pwgc-email-gift-card-number-cell">
                    <div id="pwgc-email-card-number-label" class="pwgc-email-label"><?php _e( 'Gift Card Number', 'pw-woocommerce-gift-cards' ); ?></div>
                    <div id="pwgc-email-card-number"><?php echo $item_data->gift_card_number; ?></div>
                </td>
            </tr>
            <tr>
                <td id="pwgc-email-gift-card-redeem-cell">
                    <?php
                        if ( empty( $item_data->expiration_date ) && ( isset( $item_data->preview ) || $item_data->from == __( 'Preview email system', 'pw-woocommerce-gift-cards' ) && $item_data->amount = '123.45' ) ) {
                            $item_data->expiration_date = date_i18n( wc_date_format(), strtotime( '+5 years' ) );
                        }

                        if ( !empty( $item_data->expiration_date ) ) {
                            ?>
                            <div id="pwgc-email-expiration-date-section" class="pwgc-email-section pwgc-expiration-date-element" <?php if ( 'no' !== get_option( 'pwgc_no_expiration_date', 'no' ) ) { echo 'style="display: none;"'; } ?>>
                                <div id="pwgc-email-expiration-date-label" class="pwgc-email-label"><?php _e( 'Expires', 'pw-woocommerce-gift-cards' ); ?></div>
                                <div id="pwgc-email-expiration-date"><?php echo $item_data->expiration_date; ?></div>
                            </div>
                            <?php
                        }
                    ?>
                    <div id="pwgc-email-redeem-button">
                        <a href="<?php echo pwgc_redeem_url( $item_data ); ?>"><?php _e( 'Redeem', 'pw-woocommerce-gift-cards' ); ?></a>
                    </div>
                </td>
            </tr>
            <tr>
                <td id="pwgc-email-gift-card-bottom-cell"><?php
                    do_action( 'pwgc_email_inside_gift_card_bottom', $item_data );
                ?></td>
            </tr>
        </table>
    </div>
    <div id="pwgc-email-after-gift-card">
        <?php do_action( 'pwgc_email_after_gift_card', $item_data ); ?>
    </div>
    <div id="pwgc-email-bottom">
        <?php do_action( 'pwgc_email_bottom', $item_data ); ?>
    </div>
</div>
<?php

    if ( ! isset( $item_data->preview ) ) {
        do_action( 'woocommerce_email_footer', $email );
    }
?>
