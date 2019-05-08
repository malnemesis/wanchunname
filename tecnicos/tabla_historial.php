<?php
include 'action/check-login.php';

?>
             <div class="box-body">
              <table id="dataTable" class="table table-bordered table-striped">
             <?php
                   include '../config/conexion.php';
                   $sql = "SELECT
                        tiket.TI_CODIGO,
                        persona.PER_NOMBRES,
                        tiket.TI_FECHA,
                        tiket.TI_DETALLEPROBLEMA,
                        tiket.TI_DETALLESOLUCION,
                        tiket.TI_ESTADO,
                        asignar_tiket.TEC_CODIGO
                        FROM
                        tiket
                        INNER JOIN persona ON tiket.PER_CODIGO = persona.PER_CODIGO
                        INNER JOIN asignar_tiket ON asignar_tiket.TI_CODIGO = tiket.TI_CODIGO 
                        WHERE tiket.TI_ESTADO='ATENDIDO' AND TEC_CODIGO = $SETEC_CODIGO"
                        ; 
            ?>
              <thead>
                <tr>
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
                    $datostiket = $dt[0]."||".
                            $dt[1]."||".
                            $dt[2]."||".
                            $dt[3]."||".
                            $dt[4]."||".
                            $dt[5];
             ?>
                <tr>
                  
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
    