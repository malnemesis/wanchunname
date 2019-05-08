<?php
include 'check-login.php';
include '../../config/conexion.php';

$EST_CODIGO = $_POST['EST_CODIGO'];
$MOU_MARCA = $_POST['MOU_MARCA'];
$MOU_MODELO = $_POST['MOU_MODELO'];
$MOU_SERIE = $_POST['MOU_SERIE'];
$MOU_CODACTFIJ = $_POST['MOU_CODACTFIJ'];
$MOU_OBSERVACION = $_POST['MOU_OBSERVACION'];

$sql = "SELECT * FROM mouse WHERE MOU_SERIE NOT IN ('S/N',' ') AND MOU_SERIE = '$MOU_SERIE'";
$serie = $conn->query($sql);
if ($serie->num_rows != 0) {
    
}else{
$sql = ("INSERT INTO mouse (EST_CODIGO,MOU_MARCA,MOU_MODELO,MOU_SERIE,MOU_CODACTFIJ,MOU_OBSERVACION) VALUES ('$EST_CODIGO','$MOU_MARCA','$MOU_MODELO','$MOU_SERIE','$MOU_CODACTFIJ','$MOU_OBSERVACION')");
if ($conn->query($sql) === TRUE) {
            header("location:../mouse.php");
}

$sql = "SELECT * FROM mouse WHERE MOU_CODACTFIJ = '$MOU_CODACTFIJ'";
$serie = $conn->query($sql);
if ($serie->num_rows != 0) {
    
}else{
$sql = ("INSERT INTO mouse (EST_CODIGO,MOU_MARCA,MOU_MODELO,MOU_SERIE,MOU_CODACTFIJ,MOU_OBSERVACION) VALUES ('$EST_CODIGO','$MOU_MARCA','$MOU_MODELO','$MOU_SERIE','$MOU_CODACTFIJ','$MOU_OBSERVACION')");
if ($conn->query($sql) === TRUE) {
            header("location:../mouse.php");
}
}
}
$conn->close();
