<?php
include 'check-login.php';
include '../../config/conexion.php';

$EST_CODIGO = $_POST['EST_CODIGO'];
$U_MARCA = $_POST['U_MARCA'];
$U_MODELO = $_POST['U_MODELO'];
$U_SERIE = $_POST['U_SERIE'];
$U_CAPACIDADCARGA = $_POST['U_CAPACIDADCARGA'];
$U_NUMTOMAS = $_POST['U_NUMTOMAS'];
$U_CODACTFIJ = $_POST['U_CODACTFIJ'];
$U_OBSERVACION = $_POST['U_OBSERVACION'];

$sql = "SELECT * FROM ups WHERE U_SERIE NOT IN ('S/N',' ') AND U_SERIE = '$U_SERIE'";
$serie = $conn->query($sql);
if ($serie->num_rows != 0) {

}else{
$sql = "INSERT INTO ups (EST_CODIGO,U_MARCA,U_MODELO,U_SERIE,U_CAPACIDADCARGA,U_NUMTOMAS,U_CODACTFIJ,U_OBSERVACION) 
VALUES ('$EST_CODIGO','$U_MARCA','$U_MODELO','$U_SERIE','$U_CAPACIDADCARGA','$U_NUMTOMAS','$U_CODACTFIJ','$U_OBSERVACION')";
if ($conn->query($sql) === TRUE){
            header("location:../ups.php");
}

$sql = "SELECT * FROM ups WHERE U_CODACTFIJ = '$U_CODACTFIJ'";
$codaf = $conn->query($sql);
if ($codaf->num_rows != 0) {

}else{
$sql = "INSERT INTO ups (EST_CODIGO,U_MARCA,U_MODELO,U_SERIE,U_CAPACIDADCARGA,U_NUMTOMAS,U_CODACTFIJ,U_OBSERVACION) 
VALUES ('$EST_CODIGO','$U_MARCA','$U_MODELO','$U_SERIE','$U_CAPACIDADCARGA','$U_NUMTOMAS','$U_CODACTFIJ','$U_OBSERVACION')";
if ($conn->query($sql) === TRUE){
            header("location:../ups.php");
}

}
}
$conn->close();
