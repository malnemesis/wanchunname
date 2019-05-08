<?php
include 'check-login.php';
include '../../config/db_config.php';
extract($_POST);


$sql = ("INSERT INTO ups VALUES ('','$EST_CODIGO','$U_MARCA','$U_MODELO','$U_SERIE','$U_CAPACIDADCARGA','$U_NUMTOMAS','$U_OBSERVACION')");
if ($conn->query($sql) === TRUE) {
            header("location:../ups.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>