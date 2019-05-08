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
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo number_format($numusuario); ?></h3>

              <p> Usuarios Registrados</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
          </div>
        </div>

  <div class="row">
    <div class="col-md-12">
            <div class="box-body">

    	<!-- Modal para registros nuevos usuarios -->

   <div class="modal fade" id="modalNuevo">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Nuevo Usuario</h4>
              </div>
              <div class="modal-body">

                    <form id="atLeastOneForm">
                <div class="form-group">
                    <label >Nombres</label>
                    <input type="text" class="form-control" id="PER_NOMBRES" name="field1">
                  </div>
                <div class="form-group">
                  <label>Usuario</label>
                  <input type="text" class="form-control" id="PER_USUARIO" name="field2">
                  <div id="comprobar"></div>
                </div>
                <div class="form-group">
                  <label>Correo</label>
                  <input type="email" class="form-control" id="PER_CORREO" name="field3">
                  <div id="comprobarcorreo"></div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
                  <input type="submit" class="btn btn-primary" id="guardarnuevo" value="Agregar Usuario">
                </div>
              </form>
              
              </div>
            </div>
          </div>
        </div>

<!-- Modal para edición usuarios-->

   <div class="modal fade" id="modalEdicion">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Editar Usuario</h4>
              </div>
              <div class="modal-body">
                    <div class="modal-body">
                    
      <input type="text" hidden="" id="PER_CODIGO">
        <form>
          <div class="form-group">
            <label>Nombres</label>
            <input type="text" class="form-control" id="PER_NOMBRESU">
          </div>
          <div class="form-group">
            <label>Usuario</label>
            <input type="text" class="form-control" id="PER_USUARIOU">
          </div>
          <div class="form-group">
            <label>Correo</label>
            <input type="text" class="form-control" id="PER_CORREOU">
          </div>
          <div class="form-group">
            <label>Contraseña</label>
            <input type="text" class="form-control" id="PER_CONTRASENAU">
          </div>
        </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="actualizadatos">Actualizar Usuario</button>
              </div>
            </div>
          </div>
        </div>
        
        </div>
      </div>
       </div>
       </div>

<?php include 'boton.php';?>     

<div id="tabla" class="table table-responsive table-sm"></div>

            </div>
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
$(document).ready(function() {
  $('#tabla').load('../componentes/tabla_usuarios.php');
});
</script>

<script type="text/javascript">
$(document).ready(function() {
  $('#guardarnuevo').click(function(){
    PER_NOMBRES=$('#PER_NOMBRES').val();
    PER_USUARIO=$('#PER_USUARIO').val();
    PER_CORREO=$('#PER_CORREO').val();
    if(PER_NOMBRES!='' && PER_USUARIO!='' && PER_CORREO!=''){
      agregardatos(PER_NOMBRES, PER_USUARIO, PER_CORREO);
    }else{
      alertify.error("Fallo el servidor :(");
    }

  });

$('#actualizadatos').click(function(){
  actualizadatos();
});

});

</script>

<script type="text/javascript">
$(document).ready(function(){
      var consulta;
      $("#PER_USUARIO").focus();
      $("#PER_USUARIO").keyup(function(e){
             consulta = $("#PER_USUARIO").val();
                        $.ajax({
                              type: "POST",
                              url: "../admin/action/vusuario.php",
                              data: "PER_USUARIO="+consulta,
                              dataType: "html",
                              error: function(){
                                    alert("error petición ajax");
                              },
                              success: function(data){
                                    $("#comprobar").html(data);
                                    n();
                              }
                  });
      });

});
</script>

<script type="text/javascript">
$(document).ready(function(){
      var correo;
      $("#PER_CORREO").focus();
      $("#PER_CORREO").keyup(function(e){
             correo = $("#PER_CORREO").val();
                        $.ajax({
                              type: "POST",
                              url: "../admin/action/vusuario.php",
                              data: "PER_CORREO="+correo,
                              dataType: "html",
                              error: function(){
                                    alert("error petición ajax");
                              },
                              success: function(data){
                                    $("#comprobarcorreo").html(data);
                                    n();
                              }
                  });



      });

});
</script>

<script type="text/javascript" src="../js/bsvalidate/jquery.bsvalidate.js"></script>
<script type="text/javascript" src="../js/bsvalidate/main.js"></script>
