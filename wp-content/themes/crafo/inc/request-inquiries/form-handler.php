<?php

// File: /wp-content/themes/your-theme/inc/inquiries/form-handler.php

function handle_request_form_submission() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'request_inquiries';

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'])) {
        // Sanitize and validate input data
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $phone = sanitize_text_field($_POST['phone']);

        // Insert form data into database
        $wpdb->insert(
            $table_name,
            array(
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'created_at' => current_time('mysql'),
            )
        );

        if (!is_email($email)) {
            wp_send_json_error(['message' => 'Invalid email address.']);
            return;
        }

        // Prepare email content
        $to = get_option('receiver_emails');
        $headers = ['Content-Type: text/html; charset=UTF-8', 'From: ' . $name . ' <' . $email . '>'];
        $email_subject = 'New Request';
        $email_message = "
            <h2>New Message from $name</h2>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
        ";

        if (wp_mail($to, $email_subject, $email_message, $headers)) {
            wp_send_json_success(['message' => 'Your message has been sent successfully.']);
        } else {
            wp_send_json_error(['message' => 'There was an error sending your message. Please try again later.']);
        }
    }
}
add_action('wp_ajax_nopriv_handle_request_form', 'handle_request_form_submission');
add_action('wp_ajax_handle_request_form', 'handle_request_form_submission');
