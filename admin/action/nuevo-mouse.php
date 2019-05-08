<?php
include 'check-login.php';
include '../../config/db_config.php';
extract($_POST);


$sql = ("INSERT INTO mouse VALUES ('','$EST_CODIGO','$MOU_MARCA','$MOU_MODELO','$MOU_SERIE','$MOU_OBSERVACION')");
if ($conn->query($sql) === TRUE) {
            header("location:../mouse.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>