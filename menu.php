<script src="Librerias/sweetalert.min.js"></script>
<script src="JS/salir.js">
</script>
<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #94c2f2;">
        <div class="container">
            <a class="navbar-brand" href="administrador"><i class="fas fa-solar-panel"></i> Panel de Administrador</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="http://192.168.0.120/carlos" target="_blank"><i class="fas fa-undo-alt"></i></a>
            <div class="collapse navbar-collapse text-light" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto ">
                <li class="nav-item active">
                        <a class="nav-link" href="contactos"><i class="fas fa-address-book"></i> Contactos</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="galeria"><i class="fas fa-camera-retro"></i> Galeria <span class="sr-only">(current)</span></a>
                    </li>
                    <?php if($_SESSION['tipo'] == 'Administrador'):?>
                    <li class="nav-item active">
                        <a class="nav-link" href="usuarios"><i class="fas fa-user-plus"></i> Usuarios</a>
                    </li>
                    <?php endif; ?>
                    <li class="nav-item active">
                        <a class="nav-link" id="btnCerrar" href="#"><i class="fas fa-power-off"></i></a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>