<?php
include 'check-login.php';
include '../../config/conexion.php';

$TI_CODIGO=$_POST['TI_CODIGO'];
$PER_CODIGO=$_POST['PER_CODIGO'];
$TI_DETALLESOLUCION = $_POST['TI_DETALLESOLUCION'];
   
$sql = ("UPDATE tiket SET TI_DETALLESOLUCION='$TI_DETALLESOLUCION' WHERE TI_CODIGO='$TI_CODIGO'");
if ($conn->query($sql) === TRUE){
    include '../../config/conexion.php';
  $sql = ("UPDATE tiket SET TI_ESTADO='ATENDIDO' WHERE TI_CODIGO='$TI_CODIGO'");     
}
if ($conn->query($sql) === TRUE){
  header("location:../index.php");
}
$conn->close();
