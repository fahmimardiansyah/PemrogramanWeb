$(document).ready(function() {
    $('#loginForm').submit(function(event) {
        event.preventDefault(); // Prevent the form from submitting normally
        var formData = $(this).serialize(); // Serialize the form data
        $.post($(this).attr('action'), formData, function(response) {
            $('#message').html(response); // Display the response from the server
        });
    });
});
