<?php
include 'check-login.php';
$nombres = $_POST['nombres'];
$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
include '../../config/db_config.php';
$sql = "SELECT * FROM super_usuario WHERE SU_NOMBRES = '$nombres' and SU_CODIGO != '$SESU_CODIGO'";
$result = $conn->query($sql);
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        header("location:../configuracion_cuenta.php?er=Nombres $nombres ya existe, escriba otros Nombres");
    }
}else{
    include '../../config/db_config.php';
    $sql = "SELECT * FROM super_usuario WHERE SU_USUARIO = '$usuario' and SU_CODIGO != '$SESU_CODIGO'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            header("location:../configuracion_cuenta.php?er=Usuario $usuario ya existe, escriba otro Usuario");
    }
}else{
    include '../../config/db_config.php';
	$sql = "UPDATE super_usuario SET SU_NOMBRES='$nombres',SU_USUARIO='$usuario',SU_CORREO='$correo' WHERE SU_CODIGO='$SESU_CODIGO'";
    if ($conn->query($sql) === TRUE) {
        header("location:../logout.php");
} else {
     header("location:../logout.php");
}
}
}
$conn->close();