<?php
include 'action/check-login.php';
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
          <div class="small-box bg-red">
            <div class="inner">
            <p>BIENVENIDO</p>
              <h2><?php echo $SEPER_NOMBRES?></h2>
            </div>
            <div class="icon">
              <i class="fa fa-ticket"></i>
            </div>
          </div>
        </div>
        
<!-- Modal para registros nuevo ticket -->

   <div class="modal fade" id="modalNuevo">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Solicitar Ticket de Soporte Técnico</h4>
              </div>
              <div class="modal-body">

      <input type="text" hidden="" id="PER_CODIGO" value="<?php echo $PER_CODIGO=$_SESSION['PER_CODIGO'];?>">

        <form id="atLeastOneForm4">
          <div class="form-group">
            <label>Fecha (día/mes/año - hora:minutos)</label>
            <?php date_default_timezone_set('America/Guayaquil');?>
            <input class="form-control" id="TI_FECHA" name=" " readonly value="<?php echo date("Y-m-d H:i:s"); ?>">
          </div>
          <div class="form-group">
            <label>Detalle Problema</label>
            <textarea class="form-control" rows="3" style='text-transform:uppercase' id="TI_DETALLEPROBLEMA" name="field1"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevoticket">Solicitar Ticket</button>
         </div> 
        </form>

              </div>
            </div>
          </div>
        </div>

        <!-- Modal para editar ticket -->

   <div class="modal fade" id="modalEdicion">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Editar Ticket de Soporte Técnico</h4>
              </div>
              <div class="modal-body">

      <input type="text" hidden="" id="TI_CODIGO">
  
        <form id=" ">
          <div class="form-group">
            <label>Fecha (día/mes/año - hora:minutos)</label>
            <input class="form-control" id="TI_FECHAU" readonly>
          </div>
          <div class="form-group">
            <label>Detalle Problema</label>
            <textarea class="form-control" rows="3" style='text-transform:uppercase' id="TI_DETALLEPROBLEMAU"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="actualizaticket">Editar Ticket</button>
         </div> 
        </form>

      </div>
    </div>
  </div>
</div>

   </div>
   
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
                   <div class="box-body">
              	<button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
				            Solicitar Ticket
				          <i class="fa fa-plus" aria-hidden="true"></i>
			          </button>
           </div>
        </div>

<div id="tabla" class="table table-responsive table-sm"></div>

            </div>
          </div>
        </div>
      </div>

<?php include '../admin/footer.php'; ?>
    
  </section>

</body>

</html>

<script type="text/javascript">
$(document).ready(function() {
  $('#tabla').load('tabla_ticket.php');
});
</script>

<script type="text/javascript">
$(document).ready(function() {
  $('#guardarnuevoticket').click(function(){
    PER_CODIGO=$('#PER_CODIGO').val();
    TI_FECHA=$('#TI_FECHA').val();
    TI_DETALLEPROBLEMA=$('#TI_DETALLEPROBLEMA').val();
    TI_DETALLESOLUCION=$('#TI_DETALLESOLUCION').val();
    if(TI_DETALLEPROBLEMA!=''){
    agregardatosticket(PER_CODIGO, TI_FECHA, TI_DETALLEPROBLEMA, TI_DETALLESOLUCION);
    }else{
      alertify.error("Fallo el servidor :(");
    }
    
  });

$('#actualizaticket').click(function(){
  actualizaticket();
});

});

</script>

<script type="text/javascript" src="../js/bsvalidate/jquery.bsvalidate.js"></script>
<script type="text/javascript" src="../js/bsvalidate/main.js"></script>