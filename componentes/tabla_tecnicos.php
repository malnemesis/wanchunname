<?php
include '../admin/action/check-login.php';
include '../admin/action/alerts.php';
?>
      <br>
      <div id="table" class="table table-responsive table-sm">
            <table class="table table-bordered text-center" cellspacing="0">
             <?php
                   include '../config/conexion.php';
                   $sql = "SELECT * FROM tecnico"; 
              ?>
              <thead>
                <tr>
                  <th>Editar</th>
                  <th>Eliminar</th>
                  <th>Nombres</th>
                  <th>Usuario</th>
                  <th>Contraseña</th>
                  <th>Cargo</th>
                  <th>Correo</th>
                  
                  
                </tr>
              </thead>
             
              <tbody>
             <?php
                $result = $conn->query($sql);
                $result->num_rows > 0;
               while($t=mysqli_fetch_row($result)){ 

                    $datostecnico = $t[0]."||".
                             $t[1]."||".
                             $t[2]."||".
                             $t[3]."||".
                             $t[4]."||".
                             $t[5];
             ?>
                <tr>
                  <td><a class="btn btn-info" data-toggle="modal" data-target="#modalEdicion" onclick="agregaformtecnico('<?php echo $datostecnico?>')" role="button"><i class="fa fa-fw fa-pencil" aria-hidden="true" title="EDITAR"></i></a></td>
                  <td><a class="btn btn-danger" role="button"><i class="fa fa-trash" aria-hidden="true" title="ELIMINAR" onclick="preguntarSiNotecnico('<?php echo $t[0] ?>')"></i></a></td>
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
          </div>
        </div>
        
      </div>
    </div>