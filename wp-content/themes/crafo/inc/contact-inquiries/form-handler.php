<?php

// File: /wp-content/themes/your-theme/inc/inquiries/form-handler.php

function handle_contact_form_submission() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'contact_inquiries';

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'])) {
        // Sanitize and validate input data
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $phone = sanitize_text_field($_POST['phone']);
        $subject = sanitize_text_field($_POST['subject']);
        $message = sanitize_textarea_field($_POST['message']);

        // Insert form data into database
        $wpdb->insert(
            $table_name,
            array(
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'subject' => $subject,
                'message' => $message,
                'created_at' => current_time('mysql'),
            )
        );

        // Check if the email is valid
        if (!is_email($email)) {
            // Handle invalid email error
            wp_send_json_error(['message' => 'Invalid email address.']);
            return;
        }

        // Prepare email content
        $to = get_option('receiver_emails');

        $headers = ['Content-Type: text/html; charset=UTF-8', 'From: ' . $name . ' <' . $email . '>'];
        $email_subject = !empty($subject) ? $subject : 'New Contact Inquiry';
        $email_message = "
            <h2>New contact inquiry from $name</h2>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Message:</strong><br>$message</p>
        ";

        // Send email
        if (wp_mail($to, $email_subject, $email_message, $headers)) {
            wp_send_json_success(['message' => 'Your message has been sent successfully.']);
        } else {
            wp_send_json_error(['message' => 'There was an error sending your message. Please try again later.']);
        }
    }
}
// Hook into the init action to handle form submissions
add_action('wp_ajax_nopriv_handle_contact_form', 'handle_contact_form_submission');
add_action('wp_ajax_handle_contact_form', 'handle_contact_form_submission');