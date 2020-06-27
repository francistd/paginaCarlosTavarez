<?php
session_start();
if (isset($_SESSION['usuario'])) {

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <link rel="stylesheet" type="text/css" href="CSS/pie.css">
        <link rel="stylesheet" type="text/css" href="Librerias/bootstrap-4.3.1/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="Librerias/fontawesome-free/css/all.min.css">

        <script src="Librerias/jquery-3.3.1.min.js"></script>
        <script src="Librerias/bootstrap-4.3.1/js/bootstrap.bundle.js"></script>
        <script src="Librerias/bootstrap-4.3.1/js/bootstrap.bundle.min.js"></script>
        <script src="Librerias/bootstrap-4.3.1/js/bootstrap.js"></script>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contactos</title>
    </head>

    <body>
        <?php include 'menu.php' ?>
        <div class="container">
            <h2 class="text-center mt-5"><i class="fas fa-address-book"></i> Contactos</h2>
            <div class="jumbotron">
                <div class="mx-auto ">
                    <div class="col table-responsive">
                        <table class="table table-sm bg-white table-bordered table-hover text-center ">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">Teléfono</th>
                                    <th scope="col">Editar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto@gmail.com</td>
                                    <td>849-874-8736</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-secondary"><i class="fas fa-pen-square"></i></button>
                                            <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton@gmail.com</td>
                                    <td>849-854-9876</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-secondary"><i class="fas fa-pen-square"></i></button>
                                            <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>theBird@gmail.com</td>
                                    <td>849-894-3456</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-secondary"><i class="fas fa-pen-square"></i></button>
                                            <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Clark</td>
                                    <td>theShow@gmail.com</td>
                                    <td>849-894-8856</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-secondary"><i class="fas fa-pen-square"></i></button>
                                            <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Juan</td>
                                    <td>tavarezju@gmail.com</td>
                                    <td>849-894-9856</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-secondary"><i class="fas fa-pen-square"></i></button>
                                            <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'pie.php' ?>
    </body>

    </html>
<?php
} else {
    header("location: login");
}
?>