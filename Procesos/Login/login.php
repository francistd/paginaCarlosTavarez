<?php
include "../Conexion/conexion.php";
$con = conexion();

session_start();

$userName = $_POST['usuari'];
$password = hash('sha256',$_POST['pwd']);
$idUsu = "";
$nombre="";
$tipoUsuario = "";
$estado="Activo";

$stm = $con->prepare("SELECT id_usu,nombre,tipo FROM tbl_usuarios WHERE usuario = ? AND pass = ? AND estado = ? ");

$stm->bind_param("sss", $userName,$password,$estado);
$stm->execute();
$stm->bind_result($idUsu,$nombre,$tipoUsuario);
$stm->store_result();

if ($stm->fetch()) {
    $_SESSION['id_usu'] = $idUsu;
    $_SESSION['nombre'] = $nombre;
    $_SESSION['tipo'] = $tipoUsuario;
    $_SESSION['usuario'] = $userName;
    echo '1';
}else {
    echo '0';
}
$stm->close();
$con->close();


?>