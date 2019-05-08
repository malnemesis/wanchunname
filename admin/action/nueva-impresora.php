<?php
include 'check-login.php';
include '../../config/db_config.php';
extract($_POST);


$sql = ("INSERT INTO impresora VALUES ('','$EST_CODIGO','$IMP_MARCA','$IMP_MODELO','$IMP_SERIE','$IMP_CONSUMIBLES','$IMP_CONECTIVIDAD','$IMP_OBSERVACION')");
if ($conn->query($sql) === TRUE) {
            header("location:../impresora.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>