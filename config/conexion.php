<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_soporte";

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset('UTF-8');

if ($conn->connect_error) {
    die("Fail conexion: " . $conn->connect_error);
}
?>
