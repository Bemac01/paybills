$(document).ready(function () {
    $('#registerForm').submit(function (e) { 
        e.preventDefault();
        let formData = $(this);
        $.ajax({
            type: "POST",
            url: "url",
            data: formData.serialize(),
            dataType: "json",
            beforeSend: function () {
                // Show loading spinner or message
                
            },
            success: function (response) {
                //response if all works well
                console.log(response);
            }
        });
    });
});