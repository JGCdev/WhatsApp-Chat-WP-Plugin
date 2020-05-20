<?php 

if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}

// eliminar opción previamente creada en DB
delete_option('wcw_mobile_number');
delete_option('wcw_opening');
delete_option('wcw_delay');
delete_option('wcw_text1');
delete_option('wcw_text2');
delete_option('wcw_text3');
// delete_site_option(string $option);