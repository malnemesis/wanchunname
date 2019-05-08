<?php
include '../admin/action/check-login.php';
include '../admin/action/alerts.php';
?>

             <div class="box-body">
              <table id="dataTable" class="table table-bordered table-striped">
             <?php
                   include '../config/conexion.php';
                   $sql = "SELECT * FROM departamento WHERE DEP_DETALLE NOT IN (' ')"; 
              ?>
              <thead>
                <tr>
                  <th>Editar</th>
                  <th>Eliminar</th>
                  <th>Nombre</th>
                </tr>
              </thead>
             
              <tbody>
             <?php
                $result = $conn->query($sql);
                $result->num_rows > 0;
               while($dp=mysqli_fetch_row($result)){ 

                    $datosdepartamento = $dp[0]."||".
                             $dp[1];
             ?>
                <tr>
                  <td><a class="btn btn-info" data-toggle="modal" data-target="#modalEdicion" onclick="agregaformdepartamento('<?php echo $datosdepartamento?>')" role="button"><i class="fa fa-fw fa-pencil" aria-hidden="true" title="EDITAR"></i></a></td>
                  <td><a class="btn btn-danger" role="button"><i class="fa fa-trash" aria-hidden="true" title="ELIMINAR" onclick="preguntarSiNodepartamento('<?php echo $dp[0] ?>')"></i></a></td>
                  <td><?php echo $dp[1]?></td>
                </tr>
             <?php
                }
              ?> 
              </tbody>
            </table>

<script type="text/javascript">
    $(document).ready(function() {
        $('#dataTable').DataTable({
            "lengthMenu":		[[5, 10, 15, 20, -1], [5, 10, 15, 20, "Todos"]],
            "ordering":false,
            "iDisplayLength":	5,
            language: {
                url: '../lib/es-ecu.json' //Ubicacion del archivo con el json del idioma.
            }     
        });
    });
 </script>