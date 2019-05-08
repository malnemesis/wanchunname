<?php
include 'check-login.php';
include '../../config/conexion.php';

$AT_CODIGO = $_POST['AT_CODIGO'];
$TI_CODIGO = $_POST['TI_CODIGO'];
$TEC_CODIGO = $_POST['TEC_CODIGO'];
$AT_FECHA = $_POST['AT_FECHA'];
$AT_DESCRIPCION = $_POST['AT_DESCRIPCION'];

$sql = ("UPDATE asignar_tiket SET PER_NOMBRES='$PER_NOMBRES',PER_USUARIO='$PER_USUARIO',PER_CORREO='$PER_CORREO',PER_CONTRASENA='$PER_CONTRASENA' WHERE PER_CODIGO='$PER_CODIGO'");
if ($conn->query($sql) === TRUE) {
            header("location:../asignar_ticket.php");
} 
$conn->close();

?>