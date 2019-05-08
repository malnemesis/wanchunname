<?php
include 'check-login.php';
include '../../config/conexion.php';

$C_SERIE = $_POST['C_SERIE'];

$sql = "SELECT * FROM cpu WHERE C_SERIE NOT IN ('S/N',' ') AND C_SERIE = '$C_SERIE'";
$cpu = $conn->query($sql);
if ($cpu->num_rows != 0) {
    ?>
        <div class="alert alert-danger alert-dismissible">
            Número de serie ingresado
    </div>
<?php  
    }

$MON_SERIE = $_POST['MON_SERIE'];

$sql = "SELECT * FROM monitor WHERE MON_SERIE NOT IN ('S/N',' ') AND MON_SERIE = '$MON_SERIE'";
$mon = $conn->query($sql);
if ($mon->num_rows != 0) {
    ?>
        <div class="alert alert-danger alert-dismissible">
            Número de serie ingresado
    </div>
<?php  
    }

$KEY_SERIE = $_POST['KEY_SERIE'];

$sql = "SELECT * FROM keyboard WHERE KEY_SERIE NOT IN ('S/N',' ') AND KEY_SERIE = '$KEY_SERIE'";
$key = $conn->query($sql);
if ($key->num_rows != 0) {
    ?>
        <div class="alert alert-danger alert-dismissible">
            Número de serie ingresado
    </div>
<?php  
    }

$MOU_SERIE = $_POST['MOU_SERIE'];

$sql = "SELECT * FROM mouse WHERE MOU_SERIE NOT IN ('S/N',' ') AND MOU_SERIE = '$MOU_SERIE'";
$mou = $conn->query($sql);
if ($mou->num_rows != 0) {
    ?>
        <div class="alert alert-danger alert-dismissible">
            Número de serie ingresado
    </div>
<?php  
    }

$U_SERIE = $_POST['U_SERIE'];

$sql = "SELECT * FROM ups WHERE U_SERIE NOT IN ('S/N',' ') AND U_SERIE = '$U_SERIE'";
$mou = $conn->query($sql);
if ($mou->num_rows != 0) {
    ?>
        <div class="alert alert-danger alert-dismissible">
            Número de serie ingresado
    </div>
<?php  
    }

$IMP_SERIE = $_POST['IMP_SERIE'];

$sql = "SELECT * FROM impresora WHERE IMP_SERIE NOT IN ('S/N',' ') AND IMP_SERIE = '$IMP_SERIE'";
$imp = $conn->query($sql);
if ($imp->num_rows != 0) {
    ?>
        <div class="alert alert-danger alert-dismissible">
            Número de serie ingresado
    </div>
<?php  
    }

$DR_SERIE = $_POST['DR_SERIE'];

$sql = "SELECT * FROM dispositivo_red WHERE DR_SERIE NOT IN ('S/N',' ') AND DR_SERIE = '$DR_SERIE'";
$dr = $conn->query($sql);
if ($dr->num_rows != 0) {
    ?>
        <div class="alert alert-danger alert-dismissible">
            Número de serie ingresado
    </div>
<?php  
    }