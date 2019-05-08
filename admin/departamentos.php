
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
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo number_format($numdepartamento); ?></h3>

              <p> Departamentos Registrados</p>
            </div>
            <div class="icon">
              <i class="fa fa-building-o"></i>
            </div>
          </div>
        </div>

  <div class="row">
    <div class="col-md-12">
            <div class="box-body">

    	<!-- Modal para registros nuevos departamentos -->

   <div class="modal fade" id="modalNuevo">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Nuevo Departamento</h4>
              </div>
              <div class="modal-body">

                    <form id="atLeastOneForm3">
                <div class="form-group">
                  <label>Nombre</label>
                  <input type="text" class="form-control text-uppercase" id="DEP_DETALLE" name="field1">
                  <div id="comprobar"></div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
                  <input type="submit" class="btn btn-primary" id="guardarnuevodepartamento" value="Agregar Departamento">
                </div>
              </form>

              </div>
            </div>
          </div>
        </div>

<!-- Modal para edición departamento-->

   <div class="modal fade" id="modalEdicion">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Editar Departamento</h4>
              </div>
              <div class="modal-body">
                    <div class="modal-body">

        <input type="text" hidden="" id="DEP_CODIGO" >
        <form>
          <div class="form-group">
            <label>Nombre</label>
            <input type="text" class="form-control" id="DEP_DETALLEU">
          </div>
        </form>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="actualizadatosdepartamento">Actualizar Departamento</button>
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
  $('#tabla').load('../componentes/tabla_departamentos.php');
});
</script>

<script type="text/javascript">
$(document).ready(function() {
  $('#guardarnuevodepartamento').click(function(){
    DEP_DETALLE=$('#DEP_DETALLE').val();
    if (DEP_DETALLE!='') {
      agregardatosdepartamento(DEP_DETALLE);
    }else{
      alertify.error("Fallo el servidor :(");
    }
  });

$('#actualizadatosdepartamento').click(function(){
  actualizadatosdepartamento();
});

});

</script>

<script type="text/javascript">
$(document).ready(function(){
      var consulta;
      $("#DEP_DETALLE").focus();
      $("#DEP_DETALLE").keyup(function(e){
             consulta = $("#DEP_DETALLE").val();
                        $.ajax({
                              type: "POST",
                              url: "../admin/action/vdepartamento.php",
                              data: "DEP_DETALLE="+consulta,
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

<script type="text/javascript" src="../js/bsvalidate/jquery.bsvalidate.js"></script>
<script type="text/javascript" src="../js/bsvalidate/main.js"></script>



