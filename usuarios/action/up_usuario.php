<?php
include 'check-login.php';
include '../../config/conexion.php';

$PER_NOMBRES = $_POST['PER_NOMBRES'];
$PER_USUARIO = $_POST['PER_USUARIO'];
$PER_CORREO = $_POST['PER_CORREO'];

$sql = ("UPDATE persona SET PER_NOMBRES='$PER_NOMBRES', PER_USUARIO='$PER_USUARIO', PER_CORREO='$PER_CORREO' WHERE PER_CODIGO='$SEPER_CODIGO'");
if ($conn->query($sql) === TRUE) {
    header("location:../configuracion_cuenta.php");
} 
$conn->close();