<?php
include 'check-login.php';
include '../../config/conexion.php';

$PER_CONTRASENA = $_POST['PER_CONTRASENA'];

$sql = "UPDATE persona SET PER_CONTRASENA='$PER_CONTRASENA' WHERE PER_CODIGO='$SEPER_CODIGO'";
if ($conn->query($sql) === TRUE) {
   header("location:../configuracion_cuenta.php");
}
$conn->close();