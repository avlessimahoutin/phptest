$('.envoi').click(function () {
    $.ajax({
        type: 'POST',
        url: 'info.php',
        data: { nom: $('#nom').val(), prenom: $('#prenom').val() },
        success: function (data) {
            // Do something with the response
            $('body').append(data);
        },
        error: function (error) {
            // Do something with the error
            document.write(error.split());
        }
    });
})