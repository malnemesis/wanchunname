<?php
include 'check-login.php';
include '../../config/conexion.php';

$PER_NOMBRES = $_POST['PER_NOMBRES'];
$PER_USUARIO = $_POST['PER_USUARIO'];
$PER_CORREO = $_POST['PER_CORREO'];

$PER_CONTRASENA = $PER_USUARIO;
 
$sql = "SELECT * FROM persona WHERE PER_USUARIO = '$PER_USUARIO'";
$usuario = $conn->query($sql);
if ($usuario->num_rows != 0) {
   
  }else{
 $sql = "INSERT INTO persona (PER_NOMBRES,PER_USUARIO,PER_CONTRASENA,PER_CORREO)
    VALUES ('$PER_NOMBRES', '$PER_USUARIO', '$PER_CONTRASENA', '$PER_CORREO')";
  if ($conn->query($sql) === TRUE) { 
            header("location:../usuarios.php");
  }

}

$sql = "SELECT * FROM persona WHERE PER_CORREO = '$PER_CORREO'";
$correo = $conn->query($sql);
if ($correo->num_rows != 0) {
   
  }else{
 $sql = "INSERT INTO persona (PER_NOMBRES,PER_USUARIO,PER_CONTRASENA,PER_CORREO)
    VALUES ('$PER_NOMBRES', '$PER_USUARIO', '$PER_CONTRASENA', '$PER_CORREO')";
  if ($conn->query($sql) === TRUE) { 
            header("location:../usuarios.php");
  }

}

$conn->close();
