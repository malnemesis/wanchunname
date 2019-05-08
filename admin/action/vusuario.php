<?php
include 'check-login.php';
include '../../config/conexion.php';

$PER_USUARIO = $_POST['PER_USUARIO'];

$sql = "SELECT * FROM persona WHERE PER_USUARIO = '$PER_USUARIO'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    ?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            El nombre de usuario no puede repetirse
    </div>
<?php  

    }else{

$PER_CORREO = $_POST['PER_CORREO'];

$sql = "SELECT * FROM persona WHERE PER_CORREO = '$PER_CORREO'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
            ?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            El correo de usuario no puede repetirse
    </div>
    <?php 
}
    }