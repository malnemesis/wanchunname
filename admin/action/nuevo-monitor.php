<?php
include 'check-login.php';
include '../../config/db_config.php';
extract($_POST);


$sql = ("INSERT INTO monitor VALUES ('','$EST_CODIGO','$MON_MARCA','$MON_MODELO','$MON_SERIE','$MON_OBSERVACION')");
if ($conn->query($sql) === TRUE) {
            header("location:../monitor.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>