<?php
include 'action/check-login.php';
include 'action/alerts.php';
?>

             <div class="box-body">
              <table id="dataTable" class="table table-bordered table-striped">
             <?php
                   include '../config/conexion.php';
                   $sql = "SELECT
                            tiket.TI_CODIGO,
                            persona.PER_NOMBRES,
                            asignar_tiket.AT_FECHA,
                            tiket.TI_DETALLEPROBLEMA,
                            tiket.TI_DETALLESOLUCION,
                            tiket.TI_ESTADO
                            FROM
                            tiket
                            INNER JOIN asignar_tiket ON asignar_tiket.TI_CODIGO = tiket.TI_CODIGO
                            INNER JOIN persona ON tiket.PER_CODIGO = persona.PER_CODIGO
                            INNER JOIN tecnico ON asignar_tiket.TEC_CODIGO = tecnico.TEC_CODIGO
                            WHERE tiket.TI_ESTADO='ASIGNADO' AND asignar_tiket.TEC_CODIGO = '$SETEC_CODIGO'"; 
              ?>
              <thead>
                <tr>
                  <th>Solución Ticket Asignado</th>
                  <th>ID</th>
                  <th>Usuario</th>
                  <th>Fecha</th>
                  <th>Detalle Problema</th>
                  <th>Detalle Solución</th>
                  <th>Estado</th>
                
                </tr>
              </thead>
             
              <tbody>
             <?php
                $result = $conn->query($sql);
                $result->num_rows > 0;
               while($dt=mysqli_fetch_row($result)){ 
                    $datosticket = $dt[0]."||".
                            $dt[1]."||".
                            $dt[2]."||".
                            $dt[3]."||".
                            $dt[4]."||".
                            $dt[5];
             ?>
                <tr>
                <td><a class="btn btn-info" data-toggle="modal" data-target="#modalEdicion" onclick="agregaformticket('<?php echo $datosticket?>')" role="button"><i class="fa fa-fw fa-share-square-o" aria-hidden="true" title="EDITAR"></i></a></td>
                  <td><?php echo $dt[0]?></td>
                  <td><?php echo $dt[1]?></td>
                  <td><?php echo $dt[2]?></td>
                  <td><?php echo $dt[3]?></td>
                  <td><?php echo $dt[4]?></td>
                  <td><?php echo $dt[5]?></td>
                </tr>
             <?php
                }
              ?> 
              </tbody>
            </table>
       