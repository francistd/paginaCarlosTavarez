<?php
session_start();
if (isset($_SESSION['usuario'])) {

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="CSS/galeria.css">
    <link rel="stylesheet" type="text/css" href="Librerias/bootstrap-4.3.1/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="Librerias/fontawesome-free/css/all.min.css">

    <script src="Librerias/jquery-3.3.1.min.js"></script>
    <script src="Librerias/bootstrap-4.3.1/js/bootstrap.bundle.js"></script>
    <script src="Librerias/bootstrap-4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="Librerias/bootstrap-4.3.1/js/bootstrap.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
</head>

<body>
    <?php include 'menu.php' ?>
    <div class="container mb-5">
        <h2 class="text-center mt-5"><i class="fas fa-camera-retro"></i> Galeria</h2>
        <div class="jumbotron">

            <div class="text-center mb-5">
                <button class="btn btn-secondary btn-sm text-right b" data-toggle="modal" data-target="#AgregaProyecto"><i class="fas fa-plus"></i> Proyecto</button>
            </div>

            <div class="text-center">

                <figure class="figure">
                    <a href='#ModalAdmGaleria' data-toggle='modal'>
                        <img src="Imagenes/arqui2.jpg" width='200' height='200' class="figure-img img-fluid rounded" alt="...">
                    </a>
                    <figcaption class="figure-caption">A caption for the above image.</figcaption>
                </figure>

                <figure class="figure">
                    <img src="Imagenes/arqui.jpg" width='200' height='200' class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption">A caption for the above image.</figcaption>
                </figure>

                <figure class="figure">
                    <img src="Imagenes/meeting.jpg" width='200' height='200' class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption">A caption for the above image.</figcaption>
                </figure>

                <figure class="figure">
                    <img src="Imagenes/plano.jpg" width='200' height='200' class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption">A caption for the above image.</figcaption>
                </figure>

                <figure class="figure">
                    <img src="Imagenes/plano.jpg" width='200' height='200' class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption">A caption for the above image.</figcaption>
                </figure>

                <figure class="figure">
                    <img src="Imagenes/plano.jpg" width='200' height='200' class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption">A caption for the above image.</figcaption>
                </figure>

                <figure class="figure">
                    <img src="Imagenes/arqui2.jpg" width='200' height='200' class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption">A caption for the above image.</figcaption>
                </figure>

                <figure class="figure">
                    <img src="Imagenes/arqui.jpg" width='200' height='200' class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption">A caption for the above image.</figcaption>
                </figure>

                <figure class="figure">
                    <img src="Imagenes/meeting.jpg" width='200' height='200' class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption">A caption for the above image.</figcaption>
                </figure>
                <figure class="figure">
                    <img src="Imagenes/meeting.jpg" width='200' height='200' class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption">A caption for the above image.</figcaption>
                </figure>
            </div>
        </div>
    </div><br><br><br>
    <?php include "./Modal/adminGaleria.php" ?>
    <?php include 'pie.php' ?>
</body>

</html>
<?php
}else {
	header("location: login");
}
?>