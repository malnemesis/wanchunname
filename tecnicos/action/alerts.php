<?php
include '../config/conexion.php';
include 'check-login.php';

include '../config/conexion.php';
$sql = "SELECT
                            tiket.TI_CODIGO,
                            persona.PER_NOMBRES,
                            asignar_tiket.AT_FECHA,
                            tiket.TI_DETALLEPROBLEMA,
                            tiket.TI_DETALLESOLUCION,
                            tiket.TI_ESTADO
                            FROM
                            tiket
                            INNER JOIN asignar_tiket ON asignar_tiket.TI_CODIGO = tiket.TI_CODIGO
                            INNER JOIN persona ON tiket.PER_CODIGO = persona.PER_CODIGO
                            INNER JOIN tecnico ON asignar_tiket.TEC_CODIGO = tecnico.TEC_CODIGO
                            WHERE tiket.TI_ESTADO='ASIGNADO' AND asignar_tiket.TEC_CODIGO = '$SETEC_CODIGO'";
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
