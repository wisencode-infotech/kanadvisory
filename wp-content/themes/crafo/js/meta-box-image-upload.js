jQuery(document).ready(function($) {
    // Reusable media uploader function
    function mediaUploader(buttonId, imageId, removeButtonId) {
        var mediaUploader;

        // Handle the click event for opening the media uploader
        $('#' + buttonId).on('click', function(e) {
            e.preventDefault();

            // If the media frame already exists, reopen it
            if (mediaUploader) {
                mediaUploader.open();
                return;
            }

            // Create a new media frame
            mediaUploader = wp.media.frames.file_frame = wp.media({
                title: 'Choose Image',
                button: {
                    text: 'Choose Image'
                },
                multiple: false  // Allow only a single image selection
            });

            // When an image is selected in the media frame...
            mediaUploader.on('select', function() {
                // Get the selected image details
                var attachment = mediaUploader.state().get('selection').first().toJSON();
                // Set the image URL in the hidden input field
                $('#' + imageId).val(attachment.url);

                // Remove any existing image preview, then display the newly selected image
                $('#' + buttonId).siblings('img').remove();
                $('#' + buttonId).before('<img src="' + attachment.url + '" style="max-width: 150px; display: block;" />');

                // Show the "Remove Image" button
                $('#' + removeButtonId).show();
            });

            // Open the media frame
            mediaUploader.open();
        });

        // Handle the remove button click event
        $('#' + removeButtonId).on('click', function(e) {
            e.preventDefault();
            // Clear the input field and remove the image preview
            $('#' + imageId).val('');
            $(this).siblings('img').remove();
            $(this).hide();  // Hide the remove button
        });
    }

    // Apply media uploader functionality for each image field (example for service images)
    for (var i = 1; i <= 3; i++) {
        mediaUploader('upload_service_image' + i + '_button', 'service_image' + i, 'remove_service_image' + i + '_button');
    }

    // Example for pages image
    mediaUploader('upload_image_button', 'banner_image_url', 'remove_image_button');

    // Example for banner image
    mediaUploader('upload_banner_image_button', 'banner_image', 'remove_banner_image_button');

    // Example for main news image
    mediaUploader('upload_main_news_image_button', 'main_news_image_url', 'remove_main_news_image_button');

    // Example for author image
    mediaUploader('upload_author_image_button', 'author_image_url', 'remove_author_image_button');
});