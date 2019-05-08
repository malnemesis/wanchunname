<?php
include '../admin/action/check-login.php';
include '../admin/action/alerts.php';
?>

             <div class="box-body">
              <table id="dataTable" class="table table-bordered table-striped">
             <?php
                   include '../config/conexion.php';
                   $sql = "SELECT monitor.MON_CODIGO,estados.EST_DETALLE,monitor.MON_MARCA,monitor.MON_MODELO,monitor.MON_SERIE,monitor.MON_CODACTFIJ,monitor.MON_OBSERVACION FROM monitor INNER JOIN estados ON monitor.EST_CODIGO = estados.EST_CODIGO WHERE MON_MARCA NOT IN('NINGUNO',' ')"; 
              ?>
              <thead>
                <tr>
                  <th>Editar</th>
                  <th>ID</th>
                  <th>Estado</th>
                  <th>Marca</th>
                  <th>Modelo</th>
                  <th>Serie</th>
                  <th>Act. Fij.</th>
                  <th>Observación</th>

                </tr>
              </thead>
             
              <tbody>
             <?php
                $result = $conn->query($sql);
                $result->num_rows > 0;
               while($m=mysqli_fetch_row($result)){ 
                    $datosm = $m[0]."||".
                            $m[1]."||".
                            $m[2]."||".
                            $m[3]."||".
                            $m[4]."||".
                            $m[5]."||".
                            $m[6];
             ?>
                <tr>
                  <td><a class="btn btn-info" data-toggle="modal" data-target="#modalEdicion" onclick="agregaformmonitor('<?php echo $datosm?>')" role="button"><i class="fa fa-fw fa-pencil" aria-hidden="true" title="EDITAR"></i></a></td>
                  <td><?php echo $m[0]?></td>
                  <td><?php echo $m[1]?></td>
                  <td><?php echo $m[2]?></td>
                  <td><?php echo $m[3]?></td>
                  <td><?php echo $m[4]?></td>
                  <td><?php echo $m[5]?></td>
                  <td><?php echo $m[6]?></td>
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