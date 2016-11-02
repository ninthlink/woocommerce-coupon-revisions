<?php
/**
 * Plugin Name: WooCommerce Coupon Revisions
 * Plugin URI: https://github.com/progothemes/woocommerce-coupon-revisions
 * Description: By default, WooCommerce Coupons do not support Revisions. This simply changes that.
 * Version: 0.0.1
 * Author: ProGo
 * Author URI: http://www.progo.com
 * License: GPL2
 */

//exit if accessed directly
if(!defined('ABSPATH')) exit;

// filter from class-wc-post-types.php arond line 357...
add_filter( 'woocommerce_register_post_type_shop_coupon', 'woocommerce_coupon_revisions_filter' );

function woocommerce_coupon_revisions_filter( $args ) {
  if ( is_array( $args ) ) {
    if ( isset( $args['supports'] ) ) {
      if ( is_array( $args['supports'] ) ) {
        $args['supports'][] = 'revisions';
      }
    }
  }
  return $args;
}
