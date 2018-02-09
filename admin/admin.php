<?php
/**
 * Admin
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Add menu item to wp-admin
 */
function va_woocommerce_disable_features_admin_menu() {

    $va_woocommerce_disable_features_options_page = add_options_page(
        __('VA WooCommerce Disable Features', 'va-woocommerce-disable-features'),
        __('VA WooCommerce Disable Features', 'va-woocommerce-disable-features'),
        'manage_options',
        'va-woocommerce-disable-features',
        'va_woocommerce_disable_features_settings_page'
        );

}
add_action( 'admin_menu', 'va_woocommerce_disable_features_admin_menu' );



function va_woocommerce_disable_features_settings_page() {
    ?>
        <div class="wrap">
            <h1>VA WooCommerce Disable Features</h1>
            <form method="post" action="options.php">
                <?php
                settings_fields("va-woocommerce-disable-features-section");
                do_settings_sections("va-woocommerce-disable-features");      
                submit_button();
                ?>          
            </form>
        </div>
    <?php
}



/**
 * Create settings page
 */
function display_va_woocommerce_disable_features_fields() {

    add_settings_section("va-woocommerce-disable-features-section", "", null, "va-woocommerce-disable-features");

    add_settings_field("va_woocommerce_disable_features_settings", "Check to Disable", "display_va_woocommerce_disable_features_element", "va-woocommerce-disable-features", "va-woocommerce-disable-features-section");
    register_setting("va-woocommerce-disable-features-section", "va_woocommerce_disable_features_settings");

}
add_action("admin_init", "display_va_woocommerce_disable_features_fields");



/**
 * Create elements
 */
function display_va_woocommerce_disable_features_element() {
    $va_woocommerce_disable_features_options = get_option('va_woocommerce_disable_features_settings');
    echo '<input type="checkbox" name="va_woocommerce_disable_features_settings[add_to_cart_buttons]" value="1" ' . checked( 1, isset( $va_woocommerce_disable_features_options['add_to_cart_buttons'] ), false ) . ' /> Add to Cart buttons<br />';
    echo '<input type="checkbox" name="va_woocommerce_disable_features_settings[prices]" value="1" ' . checked( 1, isset( $va_woocommerce_disable_features_options['prices'] ), false ) . ' /> Prices<br />';
}



