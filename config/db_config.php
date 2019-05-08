<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "bd_soporte";

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset('UTF-8');

if ($conn->connect_error) {
    die("La Conexi�n Fall�: " . $conn->connect_error);
} 
?>