<?php
include '../admin/action/check-login.php';
include '../admin/action/alerts.php';
?>
             <div class="box-body">
              <table id="dataTable" class="table table-bordered table-striped">
             <?php
                   include '../config/conexion.php';
                   $sql = "SELECT 
                   i.IMP_CODIGO,
                   estados.EST_DETALLE,
                   i.IMP_MARCA,
                   i.IMP_MODELO,
                   i.IMP_SERIE,
                   i.IMP_CONSUMIBLES,
                   i.IMP_CONECTIVIDAD,
                   i.IMP_CODACTFIJ,
                   i.IMP_OBSERVACION 
                   FROM impresora i
                   INNER JOIN estados ON i.EST_CODIGO = estados.EST_CODIGO 
                   WHERE i.IMP_MARCA NOT IN('NINGUNO',' ')"; 
              ?>
              <thead>
                <tr>
                <th>Editar</th>
                  <th>ID</th>
                  <th>Estado</th>
                  <th>Marca</th>
                  <th>Modelo</th>
                  <th>Serie</th>
                  <th>Consumible</th>
                  <th>Conectividad</th>
                  <th>Act. Fij.</th>
                  <th>Observación</th>

                </tr>
              </thead>
             
              <tbody>
             <?php
                $result = $conn->query($sql);
                $result->num_rows > 0;
               while($imp=mysqli_fetch_row($result)){ 
                    $datosimp = $imp[0]."||".
                                $imp[1]."||".
                                $imp[2]."||".
                                $imp[3]."||".
                                $imp[4]."||".
                                $imp[5]."||".
                                $imp[6]."||".
                                $imp[7]."||".
                                $imp[8];
             ?>
                <tr>
                  <td><a class="btn btn-info" data-toggle="modal" data-target="#modalEdicion" onclick="agregaformimp('<?php echo $datosimp?>')" role="button"><i class="fa fa-fw fa-pencil" aria-hidden="true" title="EDITAR"></i></a></td>
                  <td><?php echo $imp[0]?></td>
                  <td><?php echo $imp[1]?></td>
                  <td><?php echo $imp[2]?></td>
                  <td><?php echo $imp[3]?></td>
                  <td><?php echo $imp[4]?></td>
                  <td><?php echo $imp[5]?></td>
                  <td><?php echo $imp[6]?></td>
                  <td><?php echo $imp[7]?></td>
                  <td><?php echo $imp[8]?></td>
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