<?php
include 'check-login.php';
include '../../config/conexion.php';

$SU_CONTRASENA = $_POST['inputPassword'];

$sql = "UPDATE super_usuario SET SU_CONTRASENA='$SU_CONTRASENA' WHERE SU_CODIGO='$SESU_CODIGO'";
if ($conn->query($sql) === TRUE) {
   header("location:../configuracion_cuenta.php");
}
$conn->close();

