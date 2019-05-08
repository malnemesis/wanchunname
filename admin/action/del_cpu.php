<?php
include 'check-login.php';
include '../../config/conexion.php';

$C_CODIGO = $_POST['C_CODIGO'];
$C_ESTADO = $_POST['C_ESTADO'];
if ($C_ESTADO=='ASIGNADO'){
    
}else{
    $sql = "DELETE FROM cpu WHERE C_CODIGO='$C_CODIGO'";
    if ($conn->query($sql) === TRUE) {
            header("location:../cpu.php");
}
$conn->close();
    
}

?>