<?php
include 'check-login.php';
include '../../config/conexion.php';

$DEP_CODIGO = $_POST['DEP_CODIGO'];
$DEP_DETALLE = $_POST['DEP_DETALLE'];

$sql = ("UPDATE departamento SET DEP_DETALLE='$DEP_DETALLE' WHERE DEP_CODIGO='$DEP_CODIGO'");
if ($conn->query($sql) === TRUE) {
            header("location:../departamentos.php");
} 
$conn->close();

