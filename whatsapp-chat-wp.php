<?php

/**
 * Plugin Name: WhatsApp Chat WP
 * Plugin URI: http://www.jesusgimenez.com/whatsapp-chat-wp
 * Description: Simple plugin to allow users chat vía whatsapp web or mobile
 * Version: 1.0
 * Author: Jesús Giménez
 * Author URI: http://www.jesusgimenez.com
 */

defined('ABSPATH') or die("Not Allowed!");

define('WCW_ROUTE', plugin_dir_path(__FILE__));

include(WCW_ROUTE . '/includes/options.php');
include(WCW_ROUTE . '/includes/functions.php');

if (get_option('wcw_mobile_number') && strlen(get_option('wcw_mobile_number')) > 0 ) {
    function hook_add_widget() {
        wp_enqueue_script( 'custom_wcw_script', plugins_url( '/assets/js/whatsappChat.js', __FILE__ ));
        
        $dataToBePassed = array(
            'number'            => get_option('wcw_mobile_number'),
            'auto_open'            => get_option('wcw_opening'),
            'delay'            => get_option('wcw_delay'),
            'text1'            => get_option('wcw_text1'),
            'text2'            => get_option('wcw_text2'),
            'text3'            => get_option('wcw_text3'),
        );
        wp_localize_script( 'custom_wcw_script', 'php_vars', $dataToBePassed );
    }
    add_action( 'wp_enqueue_scripts', 'hook_add_widget' );
}



