<?php
include 'check-login.php';
include '../../config/conexion.php';

$TEC_CONTRASENA = $_POST['TEC_CONTRASENA'];

$sql = "UPDATE tecnico SET TEC_CONTRASENA='$TEC_CONTRASENA' WHERE TEC_CODIGO='$SETEC_CODIGO'";
if ($conn->query($sql) === TRUE) {
   header("location:../configuracion_cuenta.php");
}
$conn->close();