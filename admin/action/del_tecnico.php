<?php
include 'check-login.php';
include '../../config/conexion.php';

$TEC_CODIGO = $_POST['TEC_CODIGO'];

$sql = "DELETE FROM tecnico WHERE TEC_CODIGO='$TEC_CODIGO'";
if ($conn->query($sql) === TRUE) {
            header("location:../tecnicos.php");
}
$conn->close();

?>