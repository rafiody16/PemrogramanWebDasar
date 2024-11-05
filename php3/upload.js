$(document).ready(function() {
    $("#upload-form").submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type: 'POST',
            url: 'upload_ajax.php',
            data: formData,
            success: function(response) {
                $("#status").html(response);
            },
            error: function(response) {
                $("#status").html(response);
            },
            cache: false,
            contentType: false,
            processData: false
        });
    });
});