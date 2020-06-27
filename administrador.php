<?php
session_start();
if (isset($_SESSION['usuario'])) {
    if ($_SESSION['tipo'] == 'Administrador') {

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
    <script src="Librerias/chart.js"></script>
    <script src="JS/administrador.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administrador</title>
</head>

<body>
    <?php include 'menu.php' ?>
    <div class="container mb-5 mt-5">
            <div class="col ">
                <div class="col-sm-6 mx-auto position-static">
                    <h3 class="text-center"><i class="fas fa-address-book"></i> Volumen de contactos por mes.</h3>
                    <canvas id="ChartContactos" width="150" height="150"></canvas>
                </div>
            </div>

    </div><br>
    <?php include 'pie.php' ?>
</body>

</html>

<?php
}else{
    header("location: contactos");
}

}else {
	header("location: login");
}
?>