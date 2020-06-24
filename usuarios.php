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
    <title>Document</title>
</head>

<body>
    <?php include 'menu.php' ?>
    <div class="container">
        <h2 class="text-center mt-5"><i class="fas fa-user-plus"></i> Usuarios</h2>
        <div class="mx-auto mt-5">
            <div class="col table-responsive">
                <table class="table table-sm table-bordered table-hover text-center ">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Editar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>Regular</td>
                            <td>Activo</td>
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
                            <td>Thornton</td>
                            <td>Regular</td>
                            <td>Inactivo</td>
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
                            <td>theBird</td>
                            <td>Regular</td>
                            <td>Activo</td>
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
                            <td>theShow</td>
                            <td>Regular</td>
                            <td>Activo</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-secondary"><i class="fas fa-pen-square"></i></button>
                                    <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Juan Francisco Tavarez Diaz</td>
                            <td>tavarezju</td>
                            <td>Administrador</td>
                            <td>Activo</td>
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
    <?php include 'pie.php' ?>
</body>

</html>