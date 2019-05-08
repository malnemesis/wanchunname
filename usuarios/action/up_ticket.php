<?php
include 'action/check-login.php';

include '../../config/conexion.php';

$TI_CODIGO=$_POST['TI_CODIGO'];
$TI_DETALLEPROBLEMA = $_POST['TI_DETALLEPROBLEMA'];

$sql = ("UPDATE tiket SET TI_DETALLEPROBLEMA='$TI_DETALLEPROBLEMA' WHERE TI_CODIGO='$TI_CODIGO'");
if ($conn->query($sql) === TRUE) {
            header("location:../index.php");
} 
$conn->close();