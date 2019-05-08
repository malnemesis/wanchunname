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
                   dr.DR_MARCA,
                   dr.DR_MODELO,
                   dr.DR_SERIE,
                   dr.DR_TIPO,
                   dr.DR_NUMPUERTOSLAN,
                   dr.DR_NUMPUERTOSSFP,
                   dr.DR_CONECTIVIDADWIFI,
                   dr.DR_CODACTFIJ,
                   dr.DR_OBSERVACION 
                   FROM dispositivo_red dr 
                   INNER JOIN estados ON dr.EST_CODIGO = estados.EST_CODIGO 
                   WHERE dr.DR_MARCA NOT IN('NINGUNO',' ')"; 
              ?>
              <thead>
                <tr>
                  <th>Estado</th>
                  <th>Marca</th>
                  <th>Modelo</th>
                  <th>Serie</th>
                  <th>Tipo</th>
                  <th>N° de puertos LAN</th>
                  <th>N° de puertos SFP</th>
                  <th>Conectividad WIFI</th>
                  <th>Act. Fij.</th>
                  <th>Observación</th>

                </tr>
              </thead>
             
              <tbody>
             <?php
                $result = $conn->query($sql);
                $result->num_rows > 0;
               while($dr=mysqli_fetch_row($result)){ 
                            $dr[0]."||".
                            $dr[1]."||".
                            $dr[2]."||".
                            $dr[3]."||".
                            $dr[4]."||".
                            $dr[5]."||".
                            $dr[6]."||".
                            $dr[7]."||".
                            $dr[8]."||".
                            $dr[9];
             ?>
                <tr>
                  <td><?php echo $dr[0]?></td>
                  <td><?php echo $dr[1]?></td>
                  <td><?php echo $dr[2]?></td>
                  <td><?php echo $dr[3]?></td>
                  <td><?php echo $dr[4]?></td>
                  <td><?php echo $dr[5]?></td>
                  <td><?php echo $dr[6]?></td>
                  <td><?php echo $dr[7]?></td>
                  <td><?php echo $dr[8]?></td>
                  <td><?php echo $dr[9]?></td>
                </tr>
             <?php
                }
              ?> 
              </tbody>
            </table>
          </div>
        </div>
        
      </div>
    </div>
  
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