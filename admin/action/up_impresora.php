<?php
include 'check-login.php';
include '../../config/conexion.php';

$IMP_CODIGO = $_POST['IMP_CODIGO'];
$EST_CODIGO = $_POST['EST_CODIGO'];
$IMP_MARCA = $_POST['IMP_MARCA'];
$IMP_MODELO = $_POST['IMP_MODELO'];
$IMP_SERIE = $_POST['IMP_SERIE'];
$IMP_CONSUMIBLES = $_POST['IMP_CONSUMIBLES'];
$IMP_CONECTIVIDAD = $_POST['IMP_CONECTIVIDAD'];
$IMP_CODACTFIJ = $_POST['IMP_CODACTFIJ'];
$IMP_OBSERVACION = $_POST['IMP_OBSERVACION'];

$sql = ("CALL PRO_UPIMPRESORA ('$EST_CODIGO','$IMP_MARCA','$IMP_MODELO','$IMP_SERIE','$IMP_CONSUMIBLES','$IMP_CONECTIVIDAD','$IMP_OBSERVACION','$IMP_CODIGO','$IMP_CODACTFIJ')");
if ($conn->query($sql) === TRUE) {
            header("location:../impresora.php");
}
$conn->close();