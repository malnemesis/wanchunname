<?php
include 'check-login.php';
include '../../config/conexion.php';

$TEC_NOMBRES = $_POST['TEC_NOMBRES'];
$TEC_USUARIO = $_POST['TEC_USUARIO'];
$TEC_CORREO = $_POST['TEC_CORREO'];

$sql = ("UPDATE tecnico SET TEC_NOMBRES='$TEC_NOMBRES', TEC_USUARIO='$TEC_USUARIO', TEC_CORREO='$TEC_CORREO' WHERE TEC_CODIGO='$SETEC_CODIGO'");
if ($conn->query($sql) === TRUE) {
    header("location:../configuracion_cuenta.php");
} 
$conn->close();