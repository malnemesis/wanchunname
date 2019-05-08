<?php
include 'check-login.php';
include '../../config/conexion.php';

$AT_CODIGO=$_POST['AT_CODIGO'];
$TI_CODIGO = $_POST['TI_CODIGO'];
$TEC_CODIGO=$_POST['TEC_CODIGO'];
$AT_FECHA=$_POST['AT_FECHA'];
$AT_DESCRIPCION=$_POST['AT_DESCRIPCION'];
  
$sql = ("CALL PRO_UPASIGNAR('$TEC_CODIGO','$AT_FECHA','$AT_DESCRIPCION','$AT_CODIGO')");
if ($conn->query($sql) === TRUE){
            header("location:../tickets_asignados.php");
}
$conn->close();