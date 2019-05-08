<?php
include 'check-login.php';
include '../../config/conexion.php';

$TEC_CODIGO = $_POST['TEC_CODIGO'];
$TEC_NOMBRES = $_POST['TEC_NOMBRES'];
$TEC_USUARIO = $_POST['TEC_USUARIO'];
$TEC_CORREO = $_POST['TEC_CORREO'];
$TEC_CARGO = $_POST['TEC_CARGO'];
$TEC_CONTRASENA = $_POST['TEC_CONTRASENA'];

$sql = ("UPDATE tecnico SET TEC_NOMBRES='$TEC_NOMBRES',TEC_USUARIO='$TEC_USUARIO',TEC_CORREO='$TEC_CORREO',TEC_CONTRASENA='$TEC_CONTRASENA',TEC_CARGO='$TEC_CARGO' WHERE TEC_CODIGO='$TEC_CODIGO'");
if ($conn->query($sql) === TRUE) {
            header("location:../tecnicos.php");
} 

$conn->close();

?>