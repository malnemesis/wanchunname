<?php
include 'check-login.php';
include '../../config/conexion.php';

$KEY_CODIGO = $_POST['KEY_CODIGO'];
$EST_CODIGO = $_POST['EST_CODIGO'];
$KEY_MARCA = $_POST['KEY_MARCA'];
$KEY_MODELO = $_POST['KEY_MODELO'];
$KEY_SERIE = $_POST['KEY_SERIE'];
$KEY_CODACTFIJ = $_POST['KEY_CODACTFIJ'];
$KEY_OBSERVACION = $_POST['KEY_OBSERVACION'];

$sql = ("CALL PRO_UPKEYBOARD ('$EST_CODIGO','$KEY_MARCA','$KEY_MODELO','$KEY_SERIE','$KEY_OBSERVACION','$KEY_CODIGO','$KEY_CODACTFIJ')");
if ($conn->query($sql) === TRUE) {
            header("location:../keyboard.php");
}
$conn->close();

?>