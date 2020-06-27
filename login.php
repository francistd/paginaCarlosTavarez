<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="CSS/pie.css">
    <link rel="stylesheet" type="text/css" href="CSS/login.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="Librerias/bootstrap-4.3.1/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="Librerias/fontawesome-free/css/all.min.css">

    <script src="Librerias/jquery-3.3.1.min.js"></script>
    <script src="Librerias/bootstrap-4.3.1/js/bootstrap.bundle.js"></script>
    <script src="Librerias/bootstrap-4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="Librerias/bootstrap-4.3.1/js/bootstrap.js"></script>
    <script src="Librerias/sweetalert.min.js"></script>
    <script src="JS/login.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>

<body>
    <div class="container">
        <div class="col-md-4 mx-auto mt-5">
            <div id="cajalogin" class="card mx-auto mt-5">
                <div class="text-center">
                    <img id="logo" src="Imagenes/logo4.png" class="card-img-top" alt="...">
                </div>
                <div class="text-center mt-2">
                    <h4>Panel Administrador</h4>
                </div>
                <div class="card-body">
                    <!-- Login -->
                    <form class="form" role="form" id="formLogin">
                        <div class="form-group">
                            <i class="fas fa-user icono"></i>
                            <input type="text" placeholder="Usuario" class="form-control form-control-lg rounded" name="usuari" id="usuari" required="" autocomplete="user-name">
                        </div>
                        <div class="form-group">
                            <i class="fas fa-lock icono"></i>
                            <input type="password" placeholder="Contraseña" class="form-control form-control-lg rounded" id="pwd" name="pwd" required="" autocomplete="new-password">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-secondary btn-sm btn-block" id="btnLoginn"><i class="fas fa-sign-in-alt fa-2x"></i></button>
                        </div>
                    </form>
                    <!-- Login -->
                </div>
            </div>
        </div>
    </div>
</body>

</html>