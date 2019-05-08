<?php
include 'check-login.php';
$detalle = $_POST['detalle'];

include '../../config/db_config.php';
$sql = "SELECT * FROM departamento WHERE DEP_DETALLE = '$detalle'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      header("location:../departamentos.php?err=El detalle de departamento no puede repetirse");
    }

} else {
	$detalle = $_POST['detalle'];
  include '../../config/db_config.php';
$sql = ("INSERT INTO departamento VALUES ('','$detalle')");
if ($conn->query($sql) === TRUE) {
            header("location:../departamentos.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}

?>