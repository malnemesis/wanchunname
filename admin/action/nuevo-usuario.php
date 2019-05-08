<?php
include 'check-login.php';
$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
include '../../config/db_config.php';
$sql = "SELECT * FROM persona WHERE PER_USUARIO = '$usuario'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      header("location:../usuarios.php?err=El nombre de usuarios no puede repetirse");
    }
} else {
  include '../../config/db_config.php';
$sql = "SELECT * FROM persona WHERE PER_CORREO = '$correo'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      header("location:../usuarios.php?err=El Correo no puede repetirse");
    }
} else {
	$nombres = $_POST['nombres'];
	$encpass = $usuario;
  include '../../config/db_config.php';
  $sql = "INSERT INTO persona (PER_NOMBRES,PER_USUARIO,PER_CORREO,PER_CONTRASENA)
VALUES ('$nombres', '$usuario', '$correo', '$encpass')";
if ($conn->query($sql) === TRUE) {
            header("location:../usuarios.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}


}
?>