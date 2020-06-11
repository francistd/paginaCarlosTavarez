
$(document).ready(function () {

    $("#subir").click(function () {
        $('html,body').animate({ scrollTop: 0 }, 1500);
    });

    $('#proyecto').click(function () {
        $('html, body').animate({
            scrollTop: $(".fondo1").offset().top
        }, 700)
    });

    $('#nosotros').click(function () {
        $('html, body').animate({
            scrollTop: $(".fondo2").offset().top
        }, 2000)
    });

    $('#contacto').click(function () {
        $('html, body').animate({
            scrollTop: $(".fondo3").offset().top
        }, 2000)
    });

});