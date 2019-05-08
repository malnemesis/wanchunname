<?php
include 'check-login.php';
include '../../config/conexion.php';

$DEP_DETALLE = $_POST['DEP_DETALLE'];

$sql = "SELECT * FROM departamento  WHERE DEP_DETALLE NOT IN ('') AND DEP_DETALLE = '$DEP_DETALLE'";
$dep = $conn->query($sql);
if ($dep->num_rows != 0) {
    ?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            El nombre de departamento no puede repetirse
        </div>
<?php  
}