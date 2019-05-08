<?php
include 'check-login2.php';
$nombres = $_POST['nombres'];
$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
include '../../config/db_config.php';
$sql = "SELECT * FROM tecnico WHERE TEC_NOMBRES = '$nombres' and TEC_CODIGO != '$SETEC_CODIGO'";
$result = $conn->query($sql);
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        header("location:../configuracion_cuenta.php?er=Nombres $nombres ya existe, escriba otros Nombres");
    }
}else{
    include '../../config/db_config.php';
    $sql = "SELECT * FROM tecnico WHERE TEC_USUARIO = '$usuario' and TEC_CODIGO != '$SETEC_CODIGO'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            header("location:../configuracion_cuenta.php?er=Usuario $usuario ya existe, escriba otro Usuario");
    }
}else{
    include '../../config/db_config.php';
	$sql = "UPDATE tecnico SET TEC_NOMBRES='$nombres',TEC_USUARIO='$usuario',TEC_CORREO='$correo' WHERE TEC_CODIGO='$SETEC_CODIGO'";
    if ($conn->query($sql) === TRUE) {
        header("location:../logout.php");
} else {
     header("location:../logout.php");
}
}
}
$conn->close();