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
              <h3><?php echo number_format($numtecnico); ?></h3>

              <p> Técnicos Registrados</p>
            </div>
            <div class="icon">
              <i class="fa fa-user-o"></i>
            </div>
          </div>
        </div>

  <div class="row">
    <div class="col-md-12">
            <div class="box-body">
    
    	<!-- Modal para registros nuevos técnicos -->

   <div class="modal fade" id="modalNuevo">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Nuevo Técnico</h4>
              </div>
              <div class="modal-body">

        <form id="atLeastOneForm2">
          <div class="form-group">
            <label>Nombres</label>
            <input type="text" class="form-control" id="TEC_NOMBRES" name="field1">
          </div>
          <div class="form-group">
            <label>Usuario</label>
            <input type="text" class="form-control" id="TEC_USUARIO" name="field2">
            <div id="comprobar"></div>
          </div>
            <div class="form-group">
            <label>Cargo</label>
            <input type="text" class="form-control" id="TEC_CARGO" name="field3">
          </div>
          <div class="form-group">
            <label>Correo</label>
            <input type="email" class="form-control" id="TEC_CORREO" name="field4">
            <div id="comprobarcorreo"></div>
          </div>
      <div class="modal-footer">
      <input type="submit" class="btn btn-primary" id="guardarnuevotecnico" value="Agregar Técnico">
      </div>
        </form>
       </div>
    </div>
  </div>
</div>

<!-- Modal para edición técnicos-->

   <div class="modal fade" id="modalEdicion">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Editar Técnico</h4>
              </div>
              <div class="modal-body">
                    <div class="modal-body">

      <input type="text" hidden="" id="TEC_CODIGO" >
        <form>
          <div class="form-group">
            <label>Nombres</label>
            <input type="text" class="form-control" id="TEC_NOMBRESU">
          </div>
          <div class="form-group">
            <label>Usuario</label>
            <input type="text" class="form-control" id="TEC_USUARIOU">
          </div>
          <div class="form-group">
            <label>Contraseña</label>
            <input type="text" class="form-control" id="TEC_CONTRASENAU">
          </div>
            <div class="form-group">
            <label>Cargo</label>
            <input type="text" class="form-control" id="TEC_CARGOU">
          </div>
          <div class="form-group">
            <label>Correo</label>
            <input type="text" class="form-control" id="TEC_CORREOU">
          </div>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="actualizadatostecnico">Actualizar Técnico</button>
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
  $('#tabla').load('../componentes/tabla_tecnicos.php');
});
</script>


<script type="text/javascript">
$(document).ready(function() {
  $('#guardarnuevotecnico').click(function(){
    TEC_NOMBRES=$('#TEC_NOMBRES').val();
    TEC_USUARIO=$('#TEC_USUARIO').val();
    TEC_CARGO=$('#TEC_CARGO').val();
    TEC_CORREO=$('#TEC_CORREO').val();
    if(TEC_NOMBRES!='' && TEC_USUARIO!='' && TEC_CARGO!='' && TEC_CORREO){
      agregardatostecnico(TEC_NOMBRES, TEC_USUARIO, TEC_CARGO, TEC_CORREO);
    }else{
      alertify.error("Fallo el servidor :(");
    }
    
  });

$('#actualizadatostecnico').click(function(){
  actualizadatostecnico();
});

});

</script>

<script type="text/javascript">
$(document).ready(function(){             
      var consulta;
      $("#TEC_USUARIO").focus(); 
      $("#TEC_USUARIO").keyup(function(e){
             consulta = $("#TEC_USUARIO").val();         
                        $.ajax({
                              type: "POST",
                              url: "../admin/action/vtecnico.php",
                              data: "TEC_USUARIO="+consulta,
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
      $("#TEC_CORREO").focus();                                   
      $("#TEC_CORREO").keyup(function(e){
             correo = $("#TEC_CORREO").val();         
                        $.ajax({
                              type: "POST",
                              url: "../admin/action/vtecnico.php",
                              data: "TEC_CORREO="+correo,
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
