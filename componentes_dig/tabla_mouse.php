<?php
include '../digitador/action/check-login.php';
include '../digitador/action/alerts.php';
?>
             <div class="box-body">
              <table id="dataTable" class="table table-bordered table-striped">
             <?php
                   include '../config/conexion.php';
                   $sql = "SELECT estados.EST_DETALLE,mouse.MOU_MARCA,mouse.MOU_MODELO,mouse.MOU_SERIE,mouse.MOU_CODACTFIJ,mouse.MOU_OBSERVACION FROM mouse INNER JOIN estados ON mouse.EST_CODIGO = estados.EST_CODIGO WHERE MOU_MARCA NOT IN('NINGUNO',' ')"; 
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
               while($m=mysqli_fetch_row($result)){ 
                            $m[0]."||".
                            $m[1]."||".
                            $m[2]."||".
                            $m[3]."||".
                            $m[4]."||".
                            $m[5];
             ?>
                <tr>
                  <td><?php echo $m[0]?></td>
                  <td><?php echo $m[1]?></td>
                  <td><?php echo $m[2]?></td>
                  <td><?php echo $m[3]?></td>
                  <td><?php echo $m[4]?></td>
                  <td><?php echo $m[5]?></td>
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