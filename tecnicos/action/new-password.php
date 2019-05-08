<?php
include 'check-login2.php';
$new_pass = $_POST['pas1'];
include '../../config/db_config.php';
$sql = "UPDATE tecnico SET TEC_CONTRASENA='$new_pass' WHERE TEC_CODIGO='$SETEC_CODIGO'";

if ($conn->query($sql) === TRUE) {
   header("location:../configuracion_cuenta.php");
} else {
   header("location:../configuracion_cuenta.php");
}

$conn->close();

?>
 