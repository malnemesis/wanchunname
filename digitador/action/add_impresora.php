<?php
include 'check-login.php';
include '../../config/conexion.php';

$EST_CODIGO = $_POST['EST_CODIGO'];
$IMP_MARCA = $_POST['IMP_MARCA'];
$IMP_MODELO = $_POST['IMP_MODELO'];
$IMP_SERIE = $_POST['IMP_SERIE'];
$IMP_CONSUMIBLES = $_POST['IMP_CONSUMIBLES'];
$IMP_CONECTIVIDAD = $_POST['IMP_CONECTIVIDAD'];
$IMP_CODACTFIJ = $_POST['IMP_CODACTFIJ'];
$IMP_OBSERVACION = $_POST['IMP_OBSERVACION'];

$sql = "SELECT * FROM impresora WHERE IMP_SERIE NOT IN ('S/N',' ') AND IMP_SERIE = '$IMP_SERIE'";
$serie = $conn->query($sql);
if ($serie->num_rows != 0) {

}else{
$sql = "INSERT INTO impresora (EST_CODIGO,IMP_MARCA,IMP_MODELO,IMP_SERIE,IMP_CONSUMIBLES,IMP_CONECTIVIDAD,IMP_CODACTFIJ,IMP_OBSERVACION) 
VALUES ('$EST_CODIGO','$IMP_MARCA','$IMP_MODELO','$IMP_SERIE','$IMP_CONSUMIBLES','$IMP_CONECTIVIDAD','$IMP_CODACTFIJ','$IMP_OBSERVACION')";
if ($conn->query($sql) === TRUE){
            header("location:../impresora.php");
}

$sql = "SELECT * FROM impresora WHERE IMP_CODACTFIJ = '$IMP_CODACTFIJ'";
$serie = $conn->query($sql);
if ($serie->num_rows != 0) {

}else{
$sql = "INSERT INTO impresora (EST_CODIGO,IMP_MARCA,IMP_MODELO,IMP_SERIE,IMP_CONSUMIBLES,IMP_CONECTIVIDAD,IMP_CODACTFIJ,IMP_OBSERVACION) 
VALUES ('$EST_CODIGO','$IMP_MARCA','$IMP_MODELO','$IMP_SERIE','$IMP_CONSUMIBLES','$IMP_CONECTIVIDAD','$IMP_CODACTFIJ','$IMP_OBSERVACION')";
if ($conn->query($sql) === TRUE){
            header("location:../impresora.php");
}
}
}
$conn->close();
