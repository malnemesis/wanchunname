<?php
include 'check-login.php';
include '../../config/conexion.php';

$TI_FECHA = $_POST['TI_FECHA'];
$TI_DETALLEPROBLEMA = $_POST['TI_DETALLEPROBLEMA'];
$PER_CODIGO = $_SESSION['PER_CODIGO'];

  
  $sql = "INSERT INTO tiket (PER_CODIGO, TI_FECHA,TI_DETALLEPROBLEMA)
VALUES ('$PER_CODIGO','$TI_FECHA','$DEP_DETALLE')";
if ($conn->query($sql) === TRUE) {
            header("location:../usuario/index.php");
} 
$conn->close();
?>