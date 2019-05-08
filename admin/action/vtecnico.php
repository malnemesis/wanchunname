<?php
include 'check-login.php';
include '../../config/conexion.php';

$TEC_USUARIO = $_POST['TEC_USUARIO'];

$sql = "SELECT * FROM tecnico WHERE TEC_USUARIO = '$TEC_USUARIO'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    ?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            El nombre de técnico no puede repetirse
    </div>
<?php  

    }else{

$TEC_CORREO = $_POST['TEC_CORREO'];

$sql = "SELECT * FROM tecnico WHERE TEC_CORREO = '$TEC_CORREO'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
            ?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            El correo de técnico no puede repetirse
    </div>
    <?php 
}
    }