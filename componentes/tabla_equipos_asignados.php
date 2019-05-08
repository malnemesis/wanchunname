<?php
include '../admin/action/check-login.php';
include '../admin/action/alerts.php';
?>
             <div class="box-body">
              <table id="dataTable" class="table table-bordered table-striped">
             <?php
                   include '../config/conexion.php';
                   $sql = "SELECT * FROM vis_equiposasignados"; 
              ?>
              <thead>
                <tr>
                  <th>Editar</th>
                  <th>ID</th>
                  <th>Usuario</th>
                  <th>Departamento</th>
                  <th>Equipo</th>
                  <th>Monitor</th>
                  <th>Teclado</th>
                  <th>Mouse</th>
                  <th>UPS</th>
                  <th>Impresora</th>
                  <th>Dispositivo/Red</th>
                  <th>Observacion</th>
                </tr>
              </thead>
             
              <tbody>
             <?php
                $result = $conn->query($sql);
                $result->num_rows > 0;
                while($dt=mysqli_fetch_row($result)){ 
                     $datosequipo = $dt[0]."||".
                                    $dt[1]."||".
                                    $dt[2]."||".
                                    $dt[3]."||".
                                    $dt[4]."||".
                                    $dt[5]."||".
                                    $dt[6]."||".
                                    $dt[7]."||".
                                    $dt[8]."||".
                                    $dt[9]."||".
                                    $dt[10];
             ?>
                <tr>
                <td><a class="btn btn-info" data-toggle="modal" data-target="#modalEdicion" onclick="agregaformasignados('<?php echo $datosequipo?>')" role="button"><i class="fa fa-fw fa-share-square-o" aria-hidden="true" title="Editar"></i></a></td>
                  <td><?php echo $dt[0]?></td>
                  <td><?php echo $dt[1]?></td>
                  <td><?php echo $dt[2]?></td>
                  <td><?php echo $dt[3]?></td>
                  <td><?php echo $dt[4]?></td>
                  <td><?php echo $dt[5]?></td>
                  <td><?php echo $dt[6]?></td>
                  <td><?php echo $dt[7]?></td>
                  <td><?php echo $dt[8]?></td>
                  <td><?php echo $dt[9]?></td>
                  <td><?php echo $dt[10]?></td>
                </tr>
             <?php
                }
              ?> 
              </tbody>
            </table>

<script type="text/javascript">
    $(document).ready(function() {
        $('#dataTable').DataTable({
            "ordering":false,
            language: {
                url: '../lib/es-ecu.json' //Ubicacion del archivo con el json del idioma.
            }     
        });
    });
 </script>