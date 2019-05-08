<?php
include 'check-login.php';
include '../../config/db_config.php';
extract($_POST);


$sql = ("INSERT INTO keyboard VALUES ('','$EST_CODIGO','$KEY_MARCA','$KEY_MODELO','$KEY_SERIE','$KEY_OBSERVACION')");
if ($conn->query($sql) === TRUE) {
            header("location:../teclado.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>