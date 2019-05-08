<?php
include 'check-login.php';
include '../../config/conexion.php';

$TI_CODIGO = $_POST['TI_CODIGO'];

$sql = "DELETE FROM tiket WHERE TI_CODIGO='$TI_CODIGO'";
if ($conn->query($sql) === TRUE) {
            header("location:../index.php");
}
$conn->close();