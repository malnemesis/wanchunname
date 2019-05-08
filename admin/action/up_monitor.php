<?php
include 'check-login.php';
include '../../config/conexion.php';

$MON_CODIGO = $_POST['MON_CODIGO'];
$EST_CODIGO = $_POST['EST_CODIGO'];
$MON_MARCA = $_POST['MON_MARCA'];
$MON_MODELO = $_POST['MON_MODELO'];
$MON_SERIE = $_POST['MON_SERIE'];
$MON_CODACTFIJ = $_POST['MON_CODACTFIJ'];
$MON_OBSERVACION = $_POST['MON_OBSERVACION'];

$sql = ("CALL PRO_UPMONITOR('$EST_CODIGO','$MON_MARCA','$MON_MODELO','$MON_SERIE','$MON_OBSERVACION','$MON_CODIGO','$MON_CODACTFIJ')");
if ($conn->query($sql) === TRUE) {
            header("location:../monitor.php");
}
$conn->close();

?>