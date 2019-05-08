<?php
include 'check-login.php';
include '../../config/conexion.php';

$C_CODACTFIJ = $_POST['C_CODACTFIJ'];

$sql = "SELECT * FROM cpu WHERE C_CODACTFIJ NOT IN ('S/N',' ') AND C_CODACTFIJ = '$C_CODACTFIJ'";
$cpu = $conn->query($sql);
if ($cpu->num_rows != 0) {
    ?>
        <div class="alert alert-danger alert-dismissible">
            Número de activo fijo ingresado
        </div>
<?php  
    }

$MON_CODACTFIJ = $_POST['MON_CODACTFIJ'];

$sql = "SELECT * FROM monitor WHERE MON_CODACTFIJ NOT IN ('S/N',' ') AND MON_CODACTFIJ = '$MON_CODACTFIJ'";
$mon = $conn->query($sql);
if ($mon->num_rows != 0) {
    ?>
        <div class="alert alert-danger alert-dismissible">
            Número de activo fijo ingresado
        </div>
<?php  
    }

$KEY_CODACTFIJ = $_POST['KEY_CODACTFIJ'];

$sql = "SELECT * FROM keyboard WHERE KEY_CODACTFIJ NOT IN ('S/N',' ') AND KEY_CODACTFIJ = '$KEY_CODACTFIJ'";
$key = $conn->query($sql);
if ($key->num_rows != 0) {
    ?>
        <div class="alert alert-danger alert-dismissible">
            Número de activo fijo ingresado
        </div>
<?php  
    }

$MOU_CODACTFIJ = $_POST['MOU_CODACTFIJ'];

$sql = "SELECT * FROM mouse WHERE MOU_CODACTFIJ NOT IN ('S/N',' ') AND MOU_CODACTFIJ = '$MOU_CODACTFIJ'";
$key = $conn->query($sql);
if ($key->num_rows != 0) {
    ?>
        <div class="alert alert-danger alert-dismissible">
            Número de activo fijo ingresado
        </div>
<?php  
    }

$U_CODACTFIJ = $_POST['U_CODACTFIJ'];

$sql = "SELECT * FROM ups WHERE U_CODACTFIJ NOT IN ('S/N',' ') AND U_CODACTFIJ = '$U_CODACTFIJ'";
$key = $conn->query($sql);
if ($key->num_rows != 0) {
    ?>
        <div class="alert alert-danger alert-dismissible">
            Número de activo fijo ingresado
        </div>
<?php  
    }

$IMP_CODACTFIJ = $_POST['IMP_CODACTFIJ'];

$sql = "SELECT * FROM impresora WHERE IMP_CODACTFIJ NOT IN ('S/N',' ') AND IMP_CODACTFIJ = '$IMP_CODACTFIJ'";
$key = $conn->query($sql);
if ($key->num_rows != 0) {
    ?>
        <div class="alert alert-danger alert-dismissible">
            Número de activo fijo ingresado
        </div>
<?php  
    }

$DR_CODACTFIJ = $_POST['DR_CODACTFIJ'];

$sql = "SELECT * FROM dispositivo_red WHERE DR_CODACTFIJ NOT IN ('S/N',' ') AND DR_CODACTFIJ = '$DR_CODACTFIJ'";
$key = $conn->query($sql);
if ($key->num_rows != 0) {
    ?>
        <div class="alert alert-danger alert-dismissible">
            Número de activo fijo ingresado
        </div>
<?php  
    }