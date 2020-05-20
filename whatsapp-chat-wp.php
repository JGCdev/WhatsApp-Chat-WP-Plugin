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




