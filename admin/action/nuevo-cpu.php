<?php
include 'check-login.php';
include '../../config/db_config.php';
extract($_POST);


$sql = ("INSERT INTO cpu VALUES ('','$EST_CODIGO','$C_TIPO','$C_PROCESADOR','$C_NUMPROCESADOR','$C_RAM','$C_NUMMODULO','$C_DISCODURO','$C_NUMDISCO','$C_OBSERVACION')");
if ($conn->query($sql) === TRUE) {
            header("location:../cpu.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>