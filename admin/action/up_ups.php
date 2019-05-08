<?php
include 'check-login.php';
include '../../config/conexion.php';

$U_CODIGO = $_POST['U_CODIGO'];
$EST_CODIGO = $_POST['EST_CODIGO'];
$U_MARCA = $_POST['U_MARCA'];
$U_MODELO = $_POST['U_MODELO'];
$U_SERIE = $_POST['U_SERIE'];
$U_CAPACIDADCARGA = $_POST['U_CAPACIDADCARGA'];
$U_NUMTOMAS = $_POST['U_NUMTOMAS'];
$U_CODACTFIJ = $_POST['U_CODACTFIJ'];
$U_OBSERVACION = $_POST['U_OBSERVACION'];

$sql = ("CALL PRO_UPUPS ('$EST_CODIGO','$U_MARCA','$U_MODELO','$U_SERIE','$U_CAPACIDADCARGA','$U_NUMTOMAS','$U_OBSERVACION','$U_CODIGO','$U_CODACTFIJ')");
if ($conn->query($sql) === TRUE) {
            header("location:../ups.php");
}
$conn->close();

