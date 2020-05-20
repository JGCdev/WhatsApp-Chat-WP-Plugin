<?php

// Settings menu creation
function wcw_admin_menu() {
    add_menu_page( 'WhatsApp Chat', 'WhatsApp Chat','manage_options', WCW_ROUTE . '/admin/config.php', '', 'dashicons-admin-comments');
}
add_action( 'admin_menu', 'wcw_admin_menu' );


// Custom admin styles registration
function load_custom_wp_admin_style() {
    wp_register_style( 'custom_wp_admin_css', plugins_url( 'whatsapp-chat-wp/assets/styles/admin.css' ) );
    wp_enqueue_style( 'custom_wp_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );

// Custom chat styles registration
function load_custom_wcw_style() {
    wp_register_style( 'custom_chat_css', plugins_url( 'whatsapp-chat-wp/assets/styles/wcw.css' ) );
    wp_enqueue_style( 'custom_chat_css' );
}
add_action( 'wp_enqueue_scripts', 'load_custom_wcw_style' );

// Enable default Jquery
function add_jquery() {
    wp_enqueue_script( 'jquery' );
}    
add_action('init', 'add_jquery');


function load_admin_scripts() {
    wp_enqueue_script( 'custom_wcw_admin_script', plugins_url( 'whatsapp-chat-wp/assets/js/admin.js' ));
}
add_action( 'admin_enqueue_scripts', 'load_admin_scripts' );


