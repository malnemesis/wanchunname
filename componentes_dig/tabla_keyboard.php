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
                   keyboard.KEY_MARCA,
                   keyboard.KEY_MODELO,
                   keyboard.KEY_SERIE,
                   keyboard.KEY_CODACTFIJ,
                   keyboard.KEY_OBSERVACION 
                   FROM keyboard 
                   INNER JOIN estados ON keyboard.EST_CODIGO = estados.EST_CODIGO WHERE KEY_MARCA NOT IN('NINGUNO',' ')"; 
              ?>
              <thead>
                <tr>
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
               while($t=mysqli_fetch_row($result)){ 
                    $datost = $t[0]."||".
                            $t[1]."||".
                            $t[2]."||".
                            $t[3]."||".
                            $t[4]."||".
                            $t[5];
             ?>
                <tr>
                  <td><?php echo $t[0]?></td>
                  <td><?php echo $t[1]?></td>
                  <td><?php echo $t[2]?></td>
                  <td><?php echo $t[3]?></td>
                  <td><?php echo $t[4]?></td>
                  <td><?php echo $t[5]?></td>
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