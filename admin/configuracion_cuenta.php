<?php
include 'action/check-login.php';
include 'action/alerts.php';
?>

<!DOCTYPE html>
<html lang="es">

<?php include 'head.php';?>

<?php include 'header.php';?>

<?php include 'navigation.php';?>
    
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="small-box bg-blue">
            <div class="inner">
            <h2>Configuración Administrador</h2>
            </div>
          
          </div>
        </div>
<div class="col-md-3">
</div>
        <div class="col-md-6">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li><a href="#datos" data-toggle="tab">Datos</a></li>
              <li><a href="#pass" data-toggle="tab">Password</a></li>
            </ul>
            <div class="tab-content">      
              <div class="tab-pane" id="datos">

                <form class="form-horizontal">
                  <div class="form-group">
                  <?php
                  include '../config/conexion.php';
                  $sql = "SELECT * FROM super_usuario where SU_CODIGO = '$SESU_CODIGO'";
                  $result = $conn->query($sql);
                  if ($result->num_rows > 0) {
                      while ($sup = $result->fetch_assoc()) {
                          $SU_NOMBRES = $sup['SU_NOMBRES'];
                          $SU_USUARIO = $sup['SU_USUARIO'];
                          $SU_CORREO = $sup['SU_CORREO'];
                      }
                  }
                  $conn->close();
                  ?>

                    <label for="inputName" class="col-sm-2 control-label">Nombres</label>

                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="SU_NOMBRES" style='text-transform:uppercase' value="<?php echo $SU_NOMBRES ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Usuario</label>

                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="SU_USUARIO" value="<?php echo $SU_USUARIO ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Correo</label>

                    <div class="col-sm-6">
                      <input type="email" class="form-control" id="SU_CORREO" style='text-transform:lowercase' value="<?php echo $SU_CORREO ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="button" class="btn btn-primary" id="actualizaadmin">Actualizar</button>
                      <button type="reset" class="btn">Reset Formulario</button>
                    </div>
                  </div>
                </form>
              </div>

              <div class="tab-pane" id="pass">
                <form data-toggle="validator" class="form-horizontal">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nueva Contraseña</label>

                    <div class="col-sm-6">
                      <input type="password" data-minlength="6" class="form-control" placeholder="Nueva Contraseña..." id="inputPassword" name="inputPassword" required>
                      <div class="help-block">Mínimo 6 carácteres</div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Confirmar Contraseña</label>

                    <div class="col-sm-6">
                      <input type="password" class="form-control" placeholder="Confirmar Contraseña..." id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Las contraseñas no coinciden" required>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="button" class="btn btn-primary" id="actualizapassword">Actualizar</button>
                      <button type="reset" class="btn">Reset Formulario</button>

                    </div>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>

      <div class="row">
        <div class="col-md-12">
           
          </div>
        </div>
      </div>

  <div class="row">
    <div class="col-md-12">
      <div class="box-header with-border"></div>
      </div>
    </div>
  </div>

 <?php include 'footer.php';?>

  </section>

</body>

</html>

<script type="text/javascript">
$('#pass').validator()
</script>

<script type="text/javascript">
$(document).ready(function(){
  $("#actualizaadmin").click(function () {
    SU_NOMBRES = $('#SU_NOMBRES').val();
    SU_USUARIO = $('#SU_USUARIO').val();
    SU_CORREO = $('#SU_CORREO').val();
    if (SU_NOMBRES!='' && SU_USUARIO!='' && SU_CORREO!='') {
      actualizaadmin(SU_NOMBRES, SU_USUARIO, SU_CORREO);
    }else{
      alertify.error("Fallo el servidor :(");
    }
      
    });
    $("#actualizapassword").click(function () {
    consulta = $("#inputPassword").val();
    if(consulta !=''){
        actualizapassword(consulta);
    }else{
        alertify.error("Fallo el servidor :(");
    }
      
    });
});

</script>

<script type="text/javascript" src="../js/validator.min.js"></script>




                  
