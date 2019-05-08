<?php
include 'action/check-login.php';

$PER_CODIGO = $_SESSION['PER_CODIGO'];

?>
             <div class="box-body">
              <table id="dataTable" class="table table-bordered table-striped">
             <?php
                   include '../config/conexion.php';
                   $sql = "SELECT
                   tiket.TI_CODIGO,
                   tiket.TI_FECHA,
                   tiket.TI_DETALLEPROBLEMA,
                   tiket.TI_ESTADO
                   FROM
                   tiket 
                   INNER JOIN persona ON tiket.PER_CODIGO = persona.PER_CODIGO WHERE tiket.TI_ESTADO='EMITIDO'"; 
              ?>
              <thead>
                <tr>
                  <th>Editar</th>
                  <th>Eliminar</th>
                  <th>ID</th>
                  <th>Fecha</th>
                  <th>Detalle Problema</th>
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
                            $dt[3];
             ?>
                <tr>
                  <td><a class="btn btn-info" data-toggle="modal" data-target="#modalEdicion" onclick="agregaformticket2('<?php echo $datosticket ?>')" role="button"><i class="fa fa-fw fa-pencil" aria-hidden="true" title="EDITAR"></i></a></td>
                  <td><a class="btn btn-danger" role="button"><i class="fa fa-trash" aria-hidden="true" title="ELIMINAR" onclick="preguntarSiNoticket('<?php echo $dt[0] ?>')"></i></a></td>
                  <td><?php echo $dt[0]?></td>
                  <td><?php echo $dt[1]?></td>
                  <td><?php echo $dt[2]?></td>
                  <td><?php echo $dt[3]?></td>
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
    
