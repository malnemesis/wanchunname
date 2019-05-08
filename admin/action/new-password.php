<?php
include 'check-login.php';
$new_pass = $_POST['pas1'];
include '../../config/db_config.php';
$sql = "UPDATE super_usuario SET SU_CONTRASENA='$new_pass' WHERE SU_CODIGO='$SESU_CODIGO'";

if ($conn->query($sql) === TRUE) {
   header("location:../configuracion_cuenta.php");
} else {
   header("location:../configuracion_cuenta.php");
}

$conn->close();

?>
 