<?php
include 'check-login.php';
include '../../config/conexion.php';

$TI_CODIGO=$_POST['TI_CODIGO'];
$TEC_CODIGO=$_POST['TEC_CODIGO'];
$AT_FECHA = $_POST['AT_FECHA'];
$AT_DESCRIPCION = $_POST['AT_DESCRIPCION'];
  
$sql = "INSERT INTO asignar_tiket (TI_CODIGO, TEC_CODIGO, AT_FECHA, AT_DESCRIPCION)
VALUES ('$TI_CODIGO','$TEC_CODIGO','$AT_FECHA','$AT_DESCRIPCION')"; 
if ($conn->query($sql) === TRUE) {
  include '../../config/conexion.php';
  $sql = ("UPDATE tiket SET TI_ESTADO='ASIGNADO' WHERE TI_CODIGO='$TI_CODIGO'");
}
if ($conn->query($sql) === TRUE){
            header("location:../tickets.php");
}
$conn->close();
