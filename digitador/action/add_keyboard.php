<?php
include 'check-login.php';
include '../../config/conexion.php';

$EST_CODIGO = $_POST['EST_CODIGO'];
$KEY_MARCA = $_POST['KEY_MARCA'];
$KEY_MODELO = $_POST['KEY_MODELO'];
$KEY_SERIE = $_POST['KEY_SERIE'];
$KEY_CODACTFIJ = $_POST['KEY_CODACTFIJ'];
$KEY_OBSERVACION = $_POST['KEY_OBSERVACION'];

$sql = "SELECT * FROM keyboard WHERE KEY_SERIE NOT IN ('S/N',' ') AND KEY_SERIE = '$KEY_SERIE'";
$serie = $conn->query($sql);
if ($serie->num_rows != 0) {
    
}else{
$sql = "INSERT INTO keyboard (EST_CODIGO,KEY_MARCA,KEY_MODELO,KEY_SERIE,KEY_CODACTFIJ,KEY_OBSERVACION) VALUES 
('$EST_CODIGO','$KEY_MARCA','$KEY_MODELO','$KEY_SERIE','$KEY_CODACTFIJ','$KEY_OBSERVACION')";
if ($conn->query($sql) === TRUE) {
            header("location:../keyboard.php");
}

$sql = "SELECT * FROM keyboard WHERE KEY_CODACTFIJ = '$KEY_CODACTFIJ'";
$codaf = $conn->query($sql);
if ($codaf->num_rows != 0) {
    
}else{
$sql = "INSERT INTO keyboard (EST_CODIGO,KEY_MARCA,KEY_MODELO,KEY_SERIE,KEY_CODACTFIJ,KEY_OBSERVACION) VALUES 
('$EST_CODIGO','$KEY_MARCA','$KEY_MODELO','$KEY_SERIE','$KEY_CODACTFIJ','$KEY_OBSERVACION')";
if ($conn->query($sql) === TRUE) {
            header("location:../keyboard.php");
}
}
}
$conn->close();

