<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/index.css">
    <link rel="stylesheet" type="text/css" href="Librerias/bootstrap-4.3.1/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="Librerias/fontawesome-free/css/all.min.css">

    <script src="Librerias/jquery-3.3.1.min.js"></script>
    <script src="Librerias/bootstrap-4.3.1/js/bootstrap.bundle.js"></script>
    <script src="Librerias/bootstrap-4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="Librerias/bootstrap-4.3.1/js/bootstrap.js"></script>
    <script src="JS/index.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="menu"><br>
        <div class="text-center mb-3">
            <img src="Imagenes/arqui2.jpg" width='100' height='100' class="rounded-circle" alt="Cinque Terre">
        </div>
        <!-- <div class="container">
            <div class="row">
                <div class="col">
                <span id="subir"><p class="text-light clickable">Proyecto</p></span>
                <span id="nosotros"><i class="fas fa-chevron-circle-up fa-3x"></i></span>
                <span id="contacto"><i class="fas fa-chevron-circle-up fa-3x"></i></span>
                </div>
            </div><br>
        </div> -->
        <ul class="navigation">
            <li><a id="proyecto" href="#">Proyectos</a></li>
            <li><a id="nosotros" href="#">Nosotros</a></li>
            <li><a id="contacto" href="#">Contacto</a></li>
        </ul><br>
    </div>

    <div class="fondo1">
        <div class="container"><br>
            <h1 class="text-center mt-5">Proyectos</h1><br>

            <div class="text-center">

                <figure class="figure">
                    <img src="Imagenes/arqui2.jpg"  width='300' height='300' class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption">A caption for the above image.</figcaption>
                </figure>

                <figure class="figure">
                    <img src="Imagenes/arqui.jpg"  width='300' height='300' class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption">A caption for the above image.</figcaption>
                </figure>

                <figure class="figure">
                    <img src="Imagenes/meeting.jpg"  width='300' height='300' class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption">A caption for the above image.</figcaption>
                </figure>

                <figure class="figure">
                    <img src="Imagenes/plano.jpg"  width='300' height='300' class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption">A caption for the above image.</figcaption>
                </figure>

                <figure class="figure">
                    <img src="Imagenes/plano.jpg"  width='300' height='300' class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption">A caption for the above image.</figcaption>
                </figure>

                <figure class="figure">
                    <img src="Imagenes/plano.jpg"  width='300' height='300' class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption">A caption for the above image.</figcaption>
                </figure>

                <figure class="figure">
                    <img src="Imagenes/arqui2.jpg"  width='300' height='300' class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption">A caption for the above image.</figcaption>
                </figure>

                <figure class="figure">
                    <img src="Imagenes/arqui.jpg"  width='300' height='300' class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption">A caption for the above image.</figcaption>
                </figure>

                <figure class="figure">
                    <img src="Imagenes/meeting.jpg"  width='300' height='300' class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption">A caption for the above image.</figcaption>
                </figure>
            </div>

        </div>
    </div>

    <div class="fondo2">
        <div class="container"><br>
            <h1 class="text-center mt-5">Nosotros</h1><br>
            <div class="col-md-6 text-center mx-auto">
                <p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. I’m a great place for you to tell a story.</p>
            </div><br><br>
        </div>
    </div>

    <div class="fondo3">
        <div class="container"><br>
            <h1 class="text-center mt-5">Contacto</h1><br>
            <div class="container">
                <div class="col-md-8 mx-auto">
                    <form>
                        <div class="container">
                            <div class="col">
                                <div class="form-group">
                                    <label class="font-weight-bold" for="nombre">Introducir su Nombre <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="nombre" aria-describedby="nombrelHelp">
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold" for="exampleInputEmail1">Introducir su Correo <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold" for="telefono">Introducir su Teléfono </label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold" for="exampleFormControlTextarea1">Introducir Un Mensaje <span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                                    <small id="info" class="form-text text-muted">Los datos suministrados en este formulario seran de total confidencialidad.</small>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <i class="fab fa-facebook fa-2x"></i> <i class="fab fa-instagram fa-2x"></i>
                                        </div>
                                        <div class="col text-right">
                                            <button type="submit" class="btn btn-secondary btn-block">Enviar</button>
                                        </div>


                                    </div>

                                </div><br><br><br>
                            </div>
                        </div>

                        <div class="container">
                            <div class="text-right text-center">
                                <span id="subir"><i class="clickable fas fa-chevron-circle-up fa-3x"></i></span>
                            </div>
                        </div><br>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p class="mt-3">© 2020 by Juan Tavarez.</p><br>
    </footer>
</body>

</html>