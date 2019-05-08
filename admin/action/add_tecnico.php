<?php
include 'check-login.php';
include '../../config/conexion.php';

$TEC_NOMBRES = $_POST['TEC_NOMBRES'];
$TEC_USUARIO = $_POST['TEC_USUARIO'];
$TEC_CARGO = $_POST['TEC_CARGO'];
$TEC_CORREO = $_POST['TEC_CORREO'];

$TEC_CONTRASENA = $TEC_USUARIO;

$sql = "SELECT * FROM tecnico WHERE TEC_USUARIO = '$TEC_USUARIO'";
$usuario = $conn->query($sql);
if ($usuario->num_rows != 0) {
   
  }else{
 $sql = "INSERT INTO tecnico (TEC_NOMBRES,TEC_USUARIO,TEC_CONTRASENA,TEC_CARGO,TEC_CORREO)
    VALUES ('$TEC_NOMBRES', '$TEC_USUARIO', '$TEC_CONTRASENA', '$TEC_CARGO', '$TEC_CORREO')";
  if ($conn->query($sql) === TRUE) { 
            header("location:../tecnicos.php");
  }

}

$sql = "SELECT * FROM tecnico WHERE TEC_CORREO = '$TEC_CORREO'";
$correo = $conn->query($sql);
if ($correo->num_rows != 0) {
   
  }else{
 $sql = "INSERT INTO tecnico (TEC_NOMBRES,TEC_USUARIO,TEC_CONTRASENA,TEC_CARGO,TEC_CORREO)
    VALUES ('$TEC_NOMBRES', '$TEC_USUARIO', '$TEC_CONTRASENA', '$TEC_CARGO', '$TEC_CORREO')";
  if ($conn->query($sql) === TRUE) { 
            header("location:../tecnicos.php");
  }

}

$conn->close();



