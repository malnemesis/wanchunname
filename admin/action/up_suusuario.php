<?php
include 'check-login.php';
include '../../config/conexion.php';

$SU_NOMBRES = $_POST['SU_NOMBRES'];
$SU_USUARIO = $_POST['SU_USUARIO'];
$SU_CORREO = $_POST['SU_CORREO'];

$sql = "UPDATE super_usuario SET SU_NOMBRES='$SU_NOMBRES', SU_USUARIO='$SU_USUARIO', SU_CORREO='$SU_CORREO' WHERE SU_CODIGO='$SESU_CODIGO'";
if ($conn->query($sql) === TRUE) {
    header("location:../configuracion_cuenta.php"); 
}
$conn->close();
