<?php
// File: /wp-content/themes/your-theme/inc/inquiries/table-creation.php

function create_contact_inquiry_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'contact_inquiries'; // Table name

    // SQL query to create table
    $charset_collate = $wpdb->get_charset_collate();
    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        name varchar(255) NOT NULL,
        email varchar(255) NOT NULL,
        phone varchar(20),
        subject varchar(255),
        message text NOT NULL,
        created_at datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
        PRIMARY KEY (id)
    ) $charset_collate;";

    // Include upgrade.php file and run dbDelta function
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
add_action('after_switch_theme', 'create_contact_inquiry_table');