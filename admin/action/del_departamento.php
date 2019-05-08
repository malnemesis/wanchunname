<?php
include 'check-login.php';
include '../../config/conexion.php';

$DEP_CODIGO = $_POST['DEP_CODIGO'];

$sql = "DELETE FROM departamento WHERE DEP_CODIGO='$DEP_CODIGO'";
if ($conn->query($sql) === TRUE) {
            header("location:../departamentos.php");
}
$conn->close();
?>