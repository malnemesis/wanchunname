<?php
include '../admin/action/check-login.php';
include '../admin/action/alerts.php';
?>
             <div class="box-body">
              <table id="dataTable" class="table table-bordered table-striped">
             <?php
                   include '../config/conexion.php';
                   $sql = "SELECT
                        asignar_tiket.AT_CODIGO,
                        tecnico.TEC_NOMBRES,
                        asignar_tiket.AT_FECHA,
                        asignar_tiket.AT_DESCRIPCION,
                        tiket.TI_ESTADO
                        FROM
                        asignar_tiket
                        INNER JOIN tiket ON asignar_tiket.TI_CODIGO = tiket.TI_CODIGO
                        INNER JOIN tecnico ON asignar_tiket.TEC_CODIGO = tecnico.TEC_CODIGO WHERE tiket.TI_ESTADO='ASIGNADO'"; 
              ?>
              <thead>
                <tr>
                  <th>Editar</th>
                  <th>ID</th>
                  <th>Técnico Asignado</th>
                  <th>Fecha Asignada</th>
                  <th>Descripción</th>
                  <th>Estado</th>
                
                </tr>
              </thead>
             
              <tbody>
             <?php
                $result = $conn->query($sql);
                $result->num_rows > 0;
               while($dta=mysqli_fetch_row($result)){ 
                    $datosticket = $dta[0]."||".
                            $dta[1]."||".
                            $dta[2]."||".
                            $dta[3]."||".
                            $dta[4]."||".
                            $dta[5];
             ?>
                <tr>
                <td><a class="btn btn-info" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform3('<?php echo $datosticket ?>')" role="button"><i class="fa fa-fw fa-pencil" aria-hidden="true" title="EDITAR"></i></a></td>
                  <td><?php echo $dta[0]?></td>
                  <td><?php echo $dta[1]?></td>
                  <td><?php echo $dta[2]?></td>
                  <td><?php echo $dta[3]?></td>
                  <td><?php echo $dta[4]?></td>
                  <td><?php echo $dta[5]?></td>
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

  