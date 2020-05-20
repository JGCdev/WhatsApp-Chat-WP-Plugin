<?php 

if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}

// eliminar opción previamente creada en DB
delete_option('wcw_mobile_number');
// delete_site_option(string $option);