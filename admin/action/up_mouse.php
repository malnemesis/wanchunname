<?php
include 'check-login.php';
include '../../config/conexion.php';

$MOU_CODIGO = $_POST['MOU_CODIGO'];
$EST_CODIGO = $_POST['EST_CODIGO'];
$MOU_MARCA = $_POST['MOU_MARCA'];
$MOU_MODELO = $_POST['MOU_MODELO'];
$MOU_SERIE = $_POST['MOU_SERIE'];
$MOU_CODACTFIJ = $_POST['MOU_CODACTFIJ'];
$MOU_OBSERVACION = $_POST['MOU_OBSERVACION'];

$sql = ("CALL PRO_UPMOUSE ('$EST_CODIGO','$MOU_MARCA','$MOU_MODELO','$MOU_SERIE','$MOU_OBSERVACION','$MOU_CODIGO','$MOU_CODACTFIJ')");
if ($conn->query($sql) === TRUE) {
            header("location:../mouse.php");
}
$conn->close();

?>