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
cpu.C_TIPO,
cpu.C_MARCA,
cpu.C_MODELO,
cpu.C_SERIE,
cpu.C_PROCESADOR,
cpu.C_NUMPROCESADOR,
cpu.C_RAM,
cpu.C_NUMMODULO,
cpu.C_DISCODURO,
cpu.C_NUMDISCO,
cpu.C_CODACTFIJ,
cpu.C_OBSERVACION
FROM
cpu
INNER JOIN estados ON cpu.EST_CODIGO = estados.EST_CODIGO WHERE C_TIPO NOT IN('NINGUNO',' ')";       
              ?>
              <thead>
                <tr>
                  <th>Estado</th>
                  <th>Tipo</th>
                  <th>Marca</th>
                  <th>Modelo</th>
                  <th>Serie</th>
                  <th>Tipo Pro.</th>
                  <th>Nro. Pro.</th>
                  <th>Tamaño RAM</th>
                  <th>Nro. Módulos</th>
                  <th>Tamaño Disco</th>
                  <th>Nro. Discos</th>
                  <th>Act. Fij.</th>
                  <th>Observación</th>
                </tr>
              </thead>
             
              <tbody>
              
             <?php
                $result = $conn->query($sql);
                $result->num_rows > 0;
               while($cpu=mysqli_fetch_row($result)){ 
                              $cpu[0]."||".
                              $cpu[1]."||".
                              $cpu[2]."||".
                              $cpu[3]."||".
                              $cpu[4]."||".
                              $cpu[5]."||".
                              $cpu[6]."||".
                              $cpu[7]."||".
                              $cpu[8]."||".
                              $cpu[9]."||".
                              $cpu[10]."||".
                              $cpu[11]."||".
                              $cpu[12];
             ?>
                <tr>
                  <td><?php echo $cpu[0]?></td>
                  <td><?php echo $cpu[1]?></td>
                  <td><?php echo $cpu[2]?></td>
                  <td><?php echo $cpu[3]?></td>
                  <td><?php echo $cpu[4]?></td>
                  <td><?php echo $cpu[5]?></td>
                  <td><?php echo $cpu[6]?></td>
                  <td><?php echo $cpu[7]?></td>
                  <td><?php echo $cpu[8]?></td>
                  <td><?php echo $cpu[9]?></td>
                  <td><?php echo $cpu[10]?></td>
                  <td><?php echo $cpu[11]?></td>
                  <td><?php echo $cpu[12]?></td>
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



   

  