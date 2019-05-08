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
        <small>Dispositivos de Red</small></h1>
    
    <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Pincipal</a></li>
    </ol>  
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?php echo number_format($numdispositivos); ?></h3>

              <p> Swicht/Router Registrados</p>
            </div>
            <div class="icon">
              <i class="fa fa-wifi"></i>
            </div>
          </div>
        </div>

  <div class="row">
    <div class="col-md-12">
            <div class="box-body">
        
    	<!-- Modal para registros nuevo dispositivored -->

   <div class="modal fade" id="modalNuevo">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Nuevo Swicht/Router</h4>
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
            <input type="text" class="form-control" id="DR_MARCA">
          </div>
          </div>
          <div class="row">
          <div class="form-group col-md-6">
            <label>Modelo</label>
            <input type="text" class="form-control" id="DR_MODELO">
          </div>
          <div class="form-group col-md-6">
            <label>Serie</label>
            <input type="text" class="form-control" id="DR_SERIE">
            <div id="comprobar"></div>
          </div>
          </div>
          <div class="row">
          <div class="form-group col-md-6">
            <label>Tipo</label>
            <input type="text" class="form-control" id="DR_TIPO">
          </div>
          <div class="form-group col-md-6">
            <label>N° puertos LAN</label>
            <input type="text" class="form-control" id="DR_NUMPUERTOSLAN">
          </div>
          </div>
          <div class="row">
          <div class="form-group col-md-6">
            <label>N° puertos SFP</label>
            <input type="text" class="form-control" id="DR_NUMPUERTOSSFP">
          </div>
          <div class="form-group col-md-6">
                <label>Conectividad</label>
                <select class="form-control" id="DR_CONECTIVIDADWIFI">
                  <option>SI</option>
                  <option>NO</option>
                </select>
          </div>
          <div class="form-group col-md-6">
            <label>Código de Activo Fijo</label>
            <input type="text" class="form-control" id="DR_CODACTFIJ">
          </div>

          </div>
          <div class="form-group">
            <label>Observación</label>
            <input type="text" class="form-control" id="DR_OBSERVACION">
          </div>
      <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i> <strong>Cerrar</strong></button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardardr">Agregar Swicht/Router</button>
      </div>
      </form>

      </div>
    </div>
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
				            Agregar
				          <i class="fa fa-plus" aria-hidden="true"></i>
                </button>
                <a href="dispositivosredxls.php"><button class="btn btn-success" title="XLS">
				            
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
  $('#tabla').load('../componentes_dig/tabla_dispositivosred.php');
});
</script>

<script type="text/javascript">
$(document).ready(function() {
  $('#guardardr').click(function(){
    EST_CODIGO=$('#EST_CODIGO').val();
    DR_MARCA=$('#DR_MARCA').val();
    DR_MODELO=$('#DR_MODELO').val();
    DR_SERIE=$('#DR_SERIE').val();
    DR_TIPO=$('#DR_TIPO').val();
    DR_NUMPUERTOSLAN=$('#DR_NUMPUERTOSLAN').val();
    DR_NUMPUERTOSSFP=$('#DR_NUMPUERTOSSFP').val();
    DR_CONECTIVIDADWIFI=$('#DR_CONECTIVIDADWIFI').val();
    DR_CODACTFIJ=$('#DR_CODACTFIJ').val();
    DR_OBSERVACION=$('#DR_OBSERVACION').val();
    if (DR_MARCA !='' && DR_MODELO !='' && DR_SERIE !='' && DR_TIPO !='' && DR_NUMPUERTOSLAN !='' && DR_NUMPUERTOSSFP !='') {
      agregardr(EST_CODIGO, DR_MARCA, DR_MODELO, DR_SERIE, DR_TIPO, DR_NUMPUERTOSLAN, DR_NUMPUERTOSSFP, DR_CONECTIVIDADWIFI, DR_CODACTFIJ, DR_OBSERVACION);
    }else{
      alertify.error("Datos incompletos :(");
    }
    
  });

$('#actualizardr').click(function(){
  actualizardr();
});

});

</script>

<script type="text/javascript">
$(document).ready(function(){
      var consulta;
      $("#DR_SERIE").focus();
      $("#DR_SERIE").keyup(function(e){
             consulta = $("#DR_SERIE").val();
                        $.ajax({
                              type: "POST",
                              url: "../digitador/action/vserie.php",
                              data: "DR_SERIE="+consulta,
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
