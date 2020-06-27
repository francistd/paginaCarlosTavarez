$(document).ready(function () {

    $('#btnCerrar').click(function () {
        logout();
        console.log('You clicked me');
    });



    function logout() {
        swal({
            title: "Seguro de Salir?",
            text: "Para salir clic en ok!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    //code
                    $.ajax({
                        url: 'Procesos/Salir/salir.php',
                        success: function (data) {
                            window.location = "login";
                        }
                    })
                    //code
                }
            });
    }

});