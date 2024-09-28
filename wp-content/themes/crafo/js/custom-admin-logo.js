jQuery(document).ready(function ($) {
    var file_frame;
    $('#upload_logo_button').on('click', function (event) {
        event.preventDefault();
        // If the media frame already exists, reopen it.
        if (file_frame) {
            file_frame.open();
            return;
        }
        // Create the media frame.
        file_frame = wp.media({
            title: 'Select or Upload Your Logo',
            button: {
                text: 'Use this logo'
            },
            multiple: false // Set to true to allow multiple files to be selected
        });
        // When an image is selected, run a callback.
        file_frame.on('select', function () {
            var attachment = file_frame.state().get('selection').first().toJSON();
            $('#custom_admin_logo').val(attachment.url);
            $('#upload_logo_button').after('<img src="' + attachment.url + '" style="max-width: 150px; display: block; margin-top: 10px;" />');
        });
        // Finally, open the modal on click.
        file_frame.open();
    });

    $('#remove_logo_button').on('click', function (event) {
        event.preventDefault();
        $('#custom_admin_logo').val('');
        $(this).prev('img').remove();
    });
});
