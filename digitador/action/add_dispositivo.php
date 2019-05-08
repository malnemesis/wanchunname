<?php
include 'check-login.php';
include '../../config/conexion.php';

$EST_CODIGO=$_POST['EST_CODIGO'];
$DR_MARCA=$_POST['DR_MARCA'];
$DR_MODELO=$_POST['DR_MODELO'];
$DR_SERIE=$_POST['DR_SERIE'];
$DR_TIPO=$_POST['DR_TIPO'];
$DR_NUMPUERTOSLAN=$_POST['DR_NUMPUERTOSLAN'];
$DR_NUMPUERTOSSFP=$_POST['DR_NUMPUERTOSSFP'];
$DR_CONECTIVIDADWIFI=$_POST['DR_CONECTIVIDADWIFI'];
$DR_CODACTFIJ=$_POST['DR_CODACTFIJ'];
$DR_OBSERVACION=$_POST['DR_OBSERVACION'];

$sql = "SELECT * FROM dispositivo_red WHERE DR_SERIE NOT IN ('S/N',' ') AND DR_SERIE = '$DR_SERIE'";
$serie = $conn->query($sql);
if ($serie->num_rows != 0) {

}else{
$sql = "INSERT INTO dispositivo_red (EST_CODIGO,DR_MARCA,DR_MODELO,DR_SERIE,DR_TIPO,DR_NUMPUERTOSLAN,DR_NUMPUERTOSSFP,DR_CONECTIVIDADWIFI,DR_CODACTFIJ,DR_OBSERVACION)
VALUES ('$EST_CODIGO','$DR_MARCA','$DR_MODELO','$DR_SERIE','$DR_TIPO','$DR_NUMPUERTOSLAN','$DR_NUMPUERTOSSFP','$DR_CONECTIVIDADWIFI','$DR_CODACTFIJ','$DR_OBSERVACION')";
if ($conn->query($sql) === TRUE) {
            header("location:../dispositivosred.php");
}

$sql = "SELECT * FROM dispositivo_red WHERE DR_CODACTFIJ = '$DR_CODACTFIJ'";
$serie = $conn->query($sql);
if ($serie->num_rows != 0) {

}else{
$sql = "INSERT INTO dispositivo_red (EST_CODIGO,DR_MARCA,DR_MODELO,DR_SERIE,DR_TIPO,DR_NUMPUERTOSLAN,DR_NUMPUERTOSSFP,DR_CONECTIVIDADWIFI,DR_CODACTFIJ,DR_OBSERVACION)
VALUES ('$EST_CODIGO','$DR_MARCA','$DR_MODELO','$DR_SERIE','$DR_TIPO','$DR_NUMPUERTOSLAN','$DR_NUMPUERTOSSFP','$DR_CONECTIVIDADWIFI','$DR_CODACTFIJ','$DR_OBSERVACION')";
if ($conn->query($sql) === TRUE) {
            header("location:../dispositivosred.php");
}
}
}

$conn->close();
