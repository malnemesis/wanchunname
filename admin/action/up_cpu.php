<?php
include 'check-login.php';
include '../../config/conexion.php';

$C_CODIGO=$_POST['C_CODIGO'];
$EST_CODIGO=$_POST['EST_CODIGO'];
$C_TIPO=$_POST['C_TIPO'];
$C_MARCA = $_POST['C_MARCA'];
$C_MODELO = $_POST['C_MODELO'];
$C_SERIE = $_POST['C_SERIE'];
$C_PROCESADOR=$_POST['C_PROCESADOR'];
$C_NUMPROCESADOR=$_POST['C_NUMPROCESADOR'];
$C_RAM=$_POST['C_RAM'];
$C_NUMMODULO=$_POST['C_NUMMODULO'];
$C_DISCODURO=$_POST['C_DISCODURO'];
$C_NUMDISCO=$_POST['C_NUMDISCO'];
$C_CODACTFIJ=$_POST['C_CODACTFIJ'];
$C_OBSERVACION=$_POST['C_OBSERVACION'];

$sql = ("CALL PRO_UPCPU ('$C_CODIGO','$EST_CODIGO','$C_TIPO','$C_MARCA','$C_MODELO','$C_SERIE','$C_PROCESADOR','$C_NUMPROCESADOR','$C_RAM','$C_NUMMODULO','$C_DISCODURO','$C_NUMDISCO','$C_CODACTFIJ','$C_OBSERVACION')");
if ($conn->query($sql) === TRUE) {
            header("location:../cpu.php");
}
$conn->close();

?>