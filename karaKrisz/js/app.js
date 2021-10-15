/******************** jQuery ajax start **********************/

$("#promotions-form-data").submit(function (event) {

    event.preventDefault();

    var promotions_name = $("#promotions_name").val();
    var promotions_comment = $("#promotions_comment").val();

    $.ajax({

        type: "POST",
        url: "/promotionsSubmit",
        data: "promotions_name=" + promotions_name + "&promotions_comment=" + promotions_comment,

        success: function () {

            console.log('oké');
            $(".promotions-form__btn").addClass('d-none');
             $('.inserted-alert-success').fadeIn();
             $('#promotions-inserted').text('Sikeres akció rögzítés!');
        }

    });

});