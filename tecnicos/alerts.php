<?php
session_start();
$TEC_CODIGO = $_SESSION['TEC_CODIGO'];	
include '../config/db_config.php';
$sql = "SELECT * FROM tiket,asignar_tiket WHERE tiket.TI_CODIGO=asignar_tiket.TI_CODIGO AND asignar_tiket.TEC_CODIGO='$TEC_CODIGO' AND tiket.TI_ESTADO='EMITIDO'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 $tikeyalert=mysqli_num_rows($result);
 $tiket = true;
    while($row = $result->fetch_assoc()) {
    
    }
} else {
$tiket = false;
}
$conn->close();

include '../config/db_config.php';
$sql = "SELECT * FROM tiket,asignar_tiket WHERE tiket.TI_CODIGO=asignar_tiket.TI_CODIGO AND asignar_tiket.TEC_CODIGO='$TEC_CODIGO' AND tiket.TI_ESTADO='ATENDIDO'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 $tikeyalert2=mysqli_num_rows($result);
 $tiket2 = true;
    while($row = $result->fetch_assoc()) {
    
    }
} else {
$tiket2 = false;
}
$conn->close();
?>