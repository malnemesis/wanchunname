<?php
include 'action/check-login.php';
include 'action/alerts.php';
?>

<!DOCTYPE html>
<html lang="es">

<?php include '../admin/head.php'; ?>

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
              <h2><?php echo $SETEC_NOMBRES?></h2>
            </div>
            <div class="icon">
              <i class="fa fa-ticket"></i>
            </div>
          </div>
        </div>

         
        <div class="col-md-12">
        
            <?php
            if ($tiket == true){
                print '
		      <div class="alert alert-danger">
		          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		              Existe '.$tikeyalert.' <a href=" ">Ticket Asignados.</a>
		      </div>';
							
            }else{
	           if ($tiket == false) {
				        print '
	           <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				        Hasta el Momento no existe ninguna solicitud de soporte Tecnico
				</div>';
		      }
            }
            ?>

        </div>
      

<!-- Modal para solución -->

   <div class="modal fade" id="modalEdicion">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Solución Ticket de Soporte Técnico</h4>
              </div>
              <div class="modal-body">

      <input type="text" hidden="" id="TI_CODIGO">
              
      <form>
          <div class="form-group">
            <label>Detalle Solución</label>
            <textarea class="form-control" rows="3" style='text-transform:uppercase' id="TI_DETALLESOLUCIONU"></textarea>
          </div> 
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="solucionticketasignado">Solución Ticket Asignado</button>
        </div>
        </form>

      </div>
    </div>
  </div>
</div>


<div id="tabla" class="table table-responsive table-sm"></div>

            </div>
         </div>
       
<?php include '../admin/footer.php'; ?>
    
  </section>

</body>

</html>

<script type="text/javascript">
$(document).ready(function() {
  $('#tabla').load('tabla_tickets_asignados.php');
});
</script>

<script>
$('#solucionticketasignado').click(function(){
  solucionticketasignado();
});
</script>





