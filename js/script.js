 

const url = 'controller/controller.php'
 
$(document).ready(function () {
   
    $("#data-clima").hide();
    $('#form').submit(function (event) {
        event.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            url: $(this).attr('action'),
            method: $(this).attr('method'),
            data: formData,
            success: function (response) {
                $('#response').html(response);
            },
            error: function (xhr, status, error) {
                console.log(error);
            }
        });
    });
});


