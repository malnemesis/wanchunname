<?php
include 'check-login.php';
include '../../config/db_config.php';

extract($_POST);

$sql = ("INSERT INTO dispositivo_red VALUES ('','$EST_CODIGO','$DR_MARCA','$DR_MODELO','$DR_SERIE','$DR_TIPO','$DR_NUMPUERTOSLAN','$DR_NUMPUERTOSSFP','$DR_CONECTIVIDADWIFI','$DR_OBSERVACION')");
if ($conn->query($sql) === TRUE) {
            header("location:../dispositivosred.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>