<?php
include 'action/check-login.php';
include 'action/alerts.php';
?>

<!DOCTYPE html>
<html lang="es">

<?php include '../admin/head.php';?>

<?php include 'header.php';?>

<?php include 'navigation.php';?>

  <div class="content-wrapper">

    <section class="content-header">
      <h1>
        Dashboard
        <small>Panel de Control</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Principal</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
      
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="small-box bg-blue">
            <div class="inner">
            <h2>Configuración Técnico</h2>
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

                <form id="atLeastOneForm" class="form-horizontal">
                  <div class="form-group">
                  <?php
                  include '../config/conexion.php';
                  $sql = "SELECT * FROM tecnico where TEC_CODIGO = '$SETEC_CODIGO'";
                  $result = $conn->query($sql);
                  if ($result->num_rows > 0) {
                      while ($tec = $result->fetch_assoc()) {
                          $TEC_NOMBRES = $tec['TEC_NOMBRES'];
                          $TEC_USUARIO = $tec['TEC_USUARIO'];
                          $TEC_CORREO = $tec['TEC_CORREO'];
                      }
                  }
                  $conn->close();
                  ?>

                  <input type="text" hidden="" id="TEC_CODIGO" value="<?php echo $SETEC_CODIGO ?>">

                    <label for="inputName" class="col-sm-2 control-label">Nombres</label>

                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="TEC_NOMBRES" style='text-transform:uppercase' value="<?php echo $TEC_NOMBRES ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Usuario</label>

                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="TEC_USUARIO" value="<?php echo $TEC_USUARIO ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Correo</label>

                    <div class="col-sm-6">
                      <input type="email" class="form-control" id="TEC_CORREO" style='text-transform:lowercase' value="<?php echo $TEC_CORREO ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="button" class="btn btn-primary" id="actualizatecnico">Actualizar</button>
                      <button type="reset" class="btn">Reset Formulario</button>
                    </div>
                  </div>
                </form>
              </div>

              <div class="tab-pane" id="pass">
                <form id="atLeastOneForm5" class="form-horizontal">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nueva Contraseña</label>

                    <div class="col-sm-6">
                      <input type="password" class="form-control" placeholder="Nueva Contraseña..." name="pass" id="TEC_CONTRASENA">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Confirmar Contraseña</label>

                    <div class="col-sm-6">
                      <input type="password" class="form-control" placeholder="Confirmar Contraseña..." name="confirpass">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="button" class="btn btn-primary" id="actualizapasswordtec">Actualizar</button>
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

 <?php include '../admin/footer.php';?>

  </section>

</body>

</html>

<script type="text/javascript">
$(document).ready(function(){
  $("#actualizatecnico").click(function () {
      TEC_NOMBRES=$('#TEC_NOMBRES').val();
      TEC_USUARIO=$('#TEC_USUARIO').val();
      TEC_CORREO=$('#TEC_CORREO').val();
      if (TEC_NOMBRES!='' && TEC_USUARIO!='' && TEC_CORREO!='' ) {
        actualizatecnico(TEC_NOMBRES, TEC_USUARIO, TEC_CORREO);
      }else{ 
        alertify.error("Fallo el servidor :(");
      }
      
    });
    $("#actualizapasswordtec").click(function () {
      TEC_CONTRASENA = $("#TEC_CONTRASENA").val();
      if (TEC_CONTRASENA !='') {
        actualizapasswordtec(TEC_CONTRASENA);
      }else{
        alertify.error("Fallo el servidor :(");
      }
      
    });
});

</script>

<script type="text/javascript" src="../js/bsvalidate/jquery.bsvalidate.js"></script>
<script type="text/javascript" src="../js/bsvalidate/main.js"></script>




                  
