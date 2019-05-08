<?php
include 'check-login.php';
include '../../config/conexion.php';

$DEP_DETALLE = $_POST['DEP_DETALLE'];

$sql = "SELECT * FROM departamento WHERE DEP_DETALLE NOT IN ('') AND DEP_DETALLE = '$DEP_DETALLE'"; 
$dep = $conn->query($sql);
if ($dep->num_rows != 0) {

}else{
$sql = "INSERT INTO departamento (DEP_DETALLE)
VALUES ('$DEP_DETALLE')";
if ($conn->query($sql) === TRUE) {
            header("location:../departamentos.php");
}
}
$conn->close();

