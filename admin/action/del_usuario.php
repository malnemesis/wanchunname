<?php
include 'check-login.php';
include '../../config/conexion.php';

$PER_CODIGO = $_POST['PER_CODIGO'];

$sql = "DELETE FROM persona WHERE PER_CODIGO='$PER_CODIGO'";
if ($conn->query($sql) === TRUE) {
            header("location:../usuarios.php");
}
$conn->close();

?>