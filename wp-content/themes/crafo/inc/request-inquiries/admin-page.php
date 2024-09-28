<?php

// File: /wp-content/themes/your-theme/inc/inquiries/admin-page.php

function add_request_inquiry_menu_page() {
    add_menu_page(
        'Request Inquiries',      // Page title
        'Request Inquiries',      // Menu title
        'manage_options',         // Capability
        'request-inquiry-list',   // Menu slug
        'display_request_inquiry_list',  // Callback function
        'dashicons-format-chat',  // Dashicon for the menu
        6                         // Position
    );
}
add_action('admin_menu', 'add_request_inquiry_menu_page');

function display_request_inquiry_list() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'request_inquiries';
    $inquiries = $wpdb->get_results("SELECT * FROM $table_name ORDER BY created_at DESC");
    ?>
    <div class="wrap">
        <h1>Requests</h1>
        <table class="wp-list-table widefat fixed striped" style="margin-top: 10px;">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($inquiries as $inquiry): ?>
                    <tr>
                        <td><?php echo esc_html($inquiry->name); ?></td>
                        <td><?php echo esc_html($inquiry->email); ?></td>
                        <td><?php echo esc_html($inquiry->phone); ?></td>
                        <td><?php echo esc_html($inquiry->created_at); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php
}
