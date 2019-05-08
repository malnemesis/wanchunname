<?php
include 'check-login.php';
include '../../config/conexion.php';

$EST_CODIGO = $_POST['EST_CODIGO'];
$MON_MARCA = $_POST['MON_MARCA'];
$MON_MODELO = $_POST['MON_MODELO'];
$MON_SERIE = $_POST['MON_SERIE'];
$MON_CODACTFIJ = $_POST['MON_CODACTFIJ']; 
$MON_OBSERVACION = $_POST['MON_OBSERVACION'];

$sql = "SELECT * FROM monitor WHERE MON_SERIE NOT IN ('S/N',' ') AND MON_SERIE = '$MON_SERIE'";
$serie = $conn->query($sql);
if ($serie->num_rows != 0) {
    
}else{
$sql = "INSERT INTO monitor (EST_CODIGO,MON_MARCA,MON_MODELO,MON_SERIE,MON_CODACTFIJ,MON_OBSERVACION) VALUES 
('$EST_CODIGO','$MON_MARCA','$MON_MODELO','$MON_SERIE','$MON_CODACTFIJ','$MON_OBSERVACION')";
if ($conn->query($sql) === TRUE) {
            header("location:../monitor.php");
}

$sql = "SELECT * FROM monitor WHERE MON_CODACTFIJ = '$MON_CODACTFIJ'";
$codaf = $conn->query($sql);
if ($codaf->num_rows != 0) {

}else{
$sql = "INSERT INTO monitor (EST_CODIGO,MON_MARCA,MON_MODELO,MON_SERIE,MON_CODACTFIJ,MON_OBSERVACION) VALUES 
('$EST_CODIGO','$MON_MARCA','$MON_MODELO','$MON_SERIE','$MON_CODACTFIJ','$MON_OBSERVACION')";
if ($conn->query($sql) === TRUE) {
            header("location:../monitor.php");
    }
}
}
$conn->close();

