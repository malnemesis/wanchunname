<?php
include 'check-login.php';
include '../../config/conexion.php';

$PER_CODIGO = $_POST['PER_CODIGO'];
$PER_NOMBRES = $_POST['PER_NOMBRES'];
$PER_USUARIO = $_POST['PER_USUARIO'];
$PER_CORREO = $_POST['PER_CORREO'];
$PER_CONTRASENA = $_POST['PER_CONTRASENA'];

$sql = ("UPDATE persona SET PER_NOMBRES='$PER_NOMBRES',PER_USUARIO='$PER_USUARIO',PER_CORREO='$PER_CORREO',PER_CONTRASENA='$PER_CONTRASENA' WHERE PER_CODIGO='$PER_CODIGO'");
if ($conn->query($sql) === TRUE) {
            header("location:../usuarios.php");
} 
$conn->close();

