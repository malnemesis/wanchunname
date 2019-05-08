<?php
include 'action/check-login.php';
include 'action/alerts.php';
?>

<!DOCTYPE html>
<html lang="es">
<?php include 'head.php';?>
<?php include 'header.php';?>
<?php include 'navigation.php';?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>Tablero / Equipos
        <small>Monitores</small></h1>
    
    <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Pincipal</a></li>
    </ol>  
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?php echo number_format($nummonitor); ?></h3>
              <p>Monitor Registrados</p>
            </div>
            <div class="icon">
              <i class="fa fa-television"></i>
            </div>
          </div>
        </div>
      
    	<!-- Modal para registros nuevo monitor -->

   <div class="modal fade" id="modalNuevo">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Nuevo Monitor</h4>
              </div>
              <div class="modal-body">

        <form>
      <div class="row">
      <div class="form-group col-md-6">
            <label>Estado</label>
            <?php
                   include '../config/conexion.php';
                   $sql = "SELECT * FROM estados WHERE EST_DETALLE NOT IN('DISPONIBLE')"; 
              ?>
            <select class="form-control" id="EST_CODIGO">        
            <?php
                $result = $conn->query($sql);
                $result->num_rows > 0;
               while($d=mysqli_fetch_row($result)){ 
                    $datos = $d[0]."||".
                            $d[1];
             ?>
                    <option value="<?php echo $d[0];?>"><?php echo $d[1];?></option>
                      <?php
                          }
                      ?>
                  </select>

          </div>
          <div class="form-group col-md-6">
            <label>Marca</label>
            <input type="text" class="form-control" id="MON_MARCA"/>
          </div>
          </div>
          <div class="row">
          <div class="form-group col-md-6">
            <label>Modelo</label>
            <input type="text" class="form-control" id="MON_MODELO"/>
          </div>
          <div class="form-group col-md-6">
            <label>Serie</label>
            <input type="text" class="form-control" id="MON_SERIE"/>
            <div id="comprobar"></div>
          </div>
          <div class="form-group col-md-6">
            <label>Código de Activo Fijo</label>
            <input type="text" class="form-control" id="MON_CODACTFIJ"/>
          </div>
          </div>
          <div class="form-group">
            <label>Observación</label>
            <input type="text" class="form-control" id="MON_OBSERVACION"/>
          </div>
      <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i> <strong>Cerrar</strong></button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarmonitor">Agregar Monitor</button>
        </div>
      </form>

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
				            Agregar
				          <i class="fa fa-plus" aria-hidden="true"></i>
                </button>
                <a href="monitorxls.php"><button class="btn btn-success" title="XLS">
				            
				          <i class="fa fa-file-excel-o" aria-hidden="true"></i>
	         		 </button></a>
           </div>
        </div>

<div id="tabla"></div>

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
  $('#tabla').load('../componentes_dig/tabla_monitor.php');
});
</script>

<script type="text/javascript">
$(document).ready(function() {
  $('#guardarmonitor').click(function(){
    EST_CODIGO=$('#EST_CODIGO').val();
    MON_MARCA=$('#MON_MARCA').val();
    MON_MODELO=$('#MON_MODELO').val();
    MON_SERIE=$('#MON_SERIE').val();
    MON_CODACTFIJ=$('#MON_CODACTFIJ').val();
    MON_OBSERVACION=$('#MON_OBSERVACION').val();
    if (MON_MARCA!='' && MON_MODELO!='' && MON_SERIE!='') {
      agregarmonitor(EST_CODIGO, MON_MARCA, MON_MODELO, MON_SERIE, MON_CODACTFIJ, MON_OBSERVACION);
    }else{
      alertify.error("Datos incompletos :(");
    }
  });
});

</script>

<script type="text/javascript">
$(document).ready(function(){
      var consulta;
      $("#MON_SERIE").focus();
      $("#MON_SERIE").keyup(function(e){
             consulta = $("#MON_SERIE").val();
                        $.ajax({
                              type: "POST",
                              url: "../digitador/action/vserie.php",
                              data: "MON_SERIE="+consulta,
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