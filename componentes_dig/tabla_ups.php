<?php
include '../digitador/action/check-login.php';
include '../digitador/action/alerts.php';
?>
             <div class="box-body">
              <table id="dataTable" class="table table-bordered table-striped">
             <?php
                   include '../config/conexion.php';
                   $sql = "SELECT 
                   estados.EST_DETALLE,
                   ups.U_MARCA,
                   ups.U_MODELO,
                   ups.U_SERIE,
                   ups.U_CAPACIDADCARGA,
                   ups.U_NUMTOMAS,
                   ups.U_CODACTFIJ,
                   ups.U_OBSERVACION 
                   FROM ups 
                   INNER JOIN estados ON ups.EST_CODIGO = estados.EST_CODIGO 
                   WHERE U_MARCA NOT IN('NINGUNO',' ')"; 
              ?>
              <thead>
                <tr>
                  <th>Estado</th>
                  <th>Marca</th>
                  <th>Modelo</th>
                  <th>Serie</th>
                  <th>Capacidad de Carga</th>
                  <th>Nro. de Tomas</th>
                  <th>Act. Fij.</th>
                  <th>Observación</th>

                </tr>
              </thead>
             
              <tbody>
             <?php
                $result = $conn->query($sql);
                $result->num_rows > 0;
               while($ups=mysqli_fetch_row($result)){ 
                            $ups[0]."||".
                            $ups[1]."||".
                            $ups[2]."||".
                            $ups[3]."||".
                            $ups[4]."||".
                            $ups[5]."||".
                            $ups[6]."||".
                            $ups[7];
             ?>
                <tr>
                  <td><?php echo $ups[0]?></td>
                  <td><?php echo $ups[1]?></td>
                  <td><?php echo $ups[2]?></td>
                  <td><?php echo $ups[3]?></td>
                  <td><?php echo $ups[4]?></td>
                  <td><?php echo $ups[5]?></td>
                  <td><?php echo $ups[6]?></td>
                  <td><?php echo $ups[7]?></td>
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