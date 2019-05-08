<?php
include '../admin/action/check-login.php';
include '../admin/action/alerts.php';
?>

             <div class="box-body">
              <table id="dataTable" class="table table-bordered table-striped">
                         <?php
                              include '../config/conexion.php';
                              $sql = "SELECT * FROM persona WHERE PER_NOMBRES NOT IN(' ')";
                          ?>
              <thead>
                <tr>
                  <th>Editar</th>
                  <th>Eliminar</th>
                  <th>Nombres</th>
                  <th>Usuario</th>
                  <th>Correo</th>
                  <th>Contraseña</th>
                </tr>
              </thead>

              <tbody>
             <?php
$result = $conn->query($sql);
$result->num_rows > 0;
while ($u = mysqli_fetch_row($result)) {
$datos = $u[0] . "||" .
         $u[1] . "||" .
         $u[2] . "||" .
         $u[3] . "||" .
         $u[4];
    ?>
                <tr>
                  <td><a class="btn btn-info" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datos ?>')" role="button"><i class="fa fa-fw fa-pencil" aria-hidden="true" title="EDITAR"></i></a></td>
                  <td><a class="btn btn-danger" role="button"><i class="fa fa-trash" aria-hidden="true" title="Eliminar" onclick="preguntarSiNo('<?php echo $u[0] ?>')"></i></a></td>
                  <td><?php echo $u[1] ?></td>
                  <td><?php echo $u[2] ?></td>
                  <td><?php echo $u[3] ?></td>
                  <td><?php echo $u[4] ?></td>
                </tr>
             <?php
}
?>
              </tbody>
              </table>

<script type="text/javascript">
    $(document).ready(function() {
        $('#dataTable').DataTable({
            "lengthMenu":		[[5, 10, 15,20, -1], [5, 10, 15, 20, "Todos"]],
            "ordering":false,
            "iDisplayLength":	5,
            language: {
                url: '../lib/es-ecu.json' //Ubicacion del archivo con el json del idioma.
            }     
        });
    });
 </script>





