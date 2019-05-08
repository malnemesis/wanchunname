<?php
include 'check-login.php';
$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
include '../../config/db_config.php';
$sql = "SELECT * FROM tecnico WHERE TEC_USUARIO = '$usuario'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      header("location:../tecnicos.php?err=El nombre de usuarios no puede repetirse");
    }
} else {
  include '../../config/db_config.php';
$sql = "SELECT * FROM tecnico WHERE TEC_CORREO = '$correo'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      header("location:../tecnicos.php?err=El Correo no puede repetirse");
    }
} else {
	$nombres = $_POST['nombres'];
    $cargo = $_POST['cargo'];
	$encpass = $usuario;
  include '../../config/db_config.php';
  $sql = "INSERT INTO tecnico (TEC_NOMBRES,TEC_USUARIO,TEC_CONTRASENA,TEC_CARGO,TEC_CORREO)
VALUES ('$nombres', '$usuario', '$encpass', '$cargo', '$correo')";
if ($conn->query($sql) === TRUE) {
            session_start();
            header("location:../tecnicos.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}


}
?>