
$(document).ready(function() {
    $('form').submit(function(event) {
        let postForm = {
            'name'      : $('#name').val(),
            'email'     : $('#email').val(),
            'phone'     : $('#phone').val(),
            'comment'   : $('#comment').val(),
            'budget'    : $('#budget').val(),
        };

        $('#errors').empty();
        $("#errors-container").hide();
        $("#success-container").hide();

        $.ajax({
            type      : 'POST',
            url       : 'index_post.php',
            data      : postForm,
            dataType  : 'json',
            success   : function(data) {
                handleSuccess(data);
            },
            error   : function (data) {
                handleError(data);
                $("#errors-container").show();
            }
        });
        event.preventDefault();
    });
});

function handleError(data) {
    const errorResponse = data.responseJSON;

    if (!errorResponse) {
        $('#errors').text("Some thing went wrong. Please try again later!");
        return true;
    }

    const inputErrors = errorResponse.inputErrors ?? {};

    for (let [key, value] of Object.entries(inputErrors)) {
        $("#errors").append(`<li>${value}</li>`);
    }

    return true;
}

function handleSuccess(data) {
    $("#errors-container").hide();
    const successResponse = data.message;

    if (successResponse) {
        $('#success-message').text(successResponse);
    }

    $("#success-container").show();
}
