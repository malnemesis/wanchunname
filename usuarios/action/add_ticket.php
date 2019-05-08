<?php
include 'action/check-login.php';

include '../../config/conexion.php';

$TI_FECHA = $_POST['TI_FECHA'];
$TI_DETALLEPROBLEMA = $_POST['TI_DETALLEPROBLEMA'];
$TI_DETALLESOLUCION = $_POST['TI_DETALLESOLUCION'];
$PER_CODIGO = $_POST['PER_CODIGO'];

$sql = "INSERT INTO tiket (PER_CODIGO, SU_CODIGO, TI_FECHA, TI_DETALLEPROBLEMA, TI_DETALLESOLUCION, TI_ESTADO)
VALUES ('$PER_CODIGO','1','$TI_FECHA','$TI_DETALLEPROBLEMA', '', 'EMITIDO')";

if ($conn->query($sql) === TRUE) {
            header("location:../index.php");
} 
$conn->close();


