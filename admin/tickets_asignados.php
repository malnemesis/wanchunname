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
              <h3><?php echo number_format($numtiketa); ?></h3>

              <p>Ticket Asignado</p>
            </div>
            <div class="icon">
              <i class="fa fa-user-o"></i>
            </div>
          </div>
        </div>

  <div class="row">
    <div class="col-md-12">
            <div class="box-body">
        
<!-- Modal para edición -->

   <div class="modal fade" id="modalEdicion">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Editar Ticket</h4>
              </div>
              <div class="modal-body">
                    <div class="modal-body">

      <input type="text" hidden="" id="AT_CODIGO" >

        <form>

            <div class="form-group">
            <label>Asignar Técnico</label>
            <?php
                   include '../config/conexion.php';
                   $sql = "SELECT TEC_CODIGO, TEC_NOMBRES FROM tecnico"; 
              ?>
              <select class="form-control" id="TEC_CODIGOU">       
            <?php
                $result = $conn->query($sql);
                $result->num_rows > 0;
               while($dt=mysqli_fetch_row($result)){ 
                    $datosticket = $dt[0]."||".
                            $dt[1];
             ?>
                    <option value="<?php echo $dt[1];?>"><?php echo $dt[1];?></option>
                      <?php
                          }
                      ?>
                  </select>
                  </div>
                  
          <div class="form-group">
            <label>Fecha Asignada</label>
            <input class="form-control" id="AT_FECHAU">
          </div>
          <div class="form-group">
            <label>Descripción</label>
            <textarea class="form-control" rows="3" style='text-transform:uppercase' id="AT_DESCRIPCIONU"></textarea>
          </div>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="actualizaticketasignado">Editar Ticket Asignado</button>
      </div>
    </div>
  </div>
</div>

        </div>
    
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
  $('#tabla').load('../componentes/tabla_asignar_ticket.php');
});
</script>


<script type="text/javascript">
$(document).ready(function() {

$('#actualizaticketasignado').click(function(){
  actualizaticketasignado();
});

});

</script>
