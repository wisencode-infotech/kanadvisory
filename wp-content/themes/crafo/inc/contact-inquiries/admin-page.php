<?php

function add_contact_inquiry_menu_page() {
    add_menu_page(
        'Contact Inquiries',     // Page title
        'Contact Inquiries',             // Menu title
        'manage_options',        // Capability
        'contact-inquiry-list',          // Menu slug
        'display_contact_inquiry_list',  // Callback function
        'dashicons-email-alt',   // Icon
        6                        // Position
    );
}
add_action('admin_menu', 'add_contact_inquiry_menu_page');


function display_contact_inquiry_list() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'contact_inquiries';
    $inquiries = $wpdb->get_results("SELECT * FROM $table_name ORDER BY created_at DESC");
    ?>
    <div class="wrap">
        <h1>Contact Inquiries</h1>
        <table class="wp-list-table widefat fixed striped" style="margin-top: 10px;">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($inquiries as $inquiry): ?>
                    <tr>
                        <td><?php echo esc_html($inquiry->name); ?></td>
                        <td><?php echo esc_html($inquiry->email); ?></td>
                        <td><?php echo esc_html($inquiry->phone); ?></td>
                        <td><?php echo esc_html($inquiry->subject); ?></td>
                        <td><?php echo esc_html($inquiry->message); ?></td>
                        <td><?php echo esc_html($inquiry->created_at); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php
}