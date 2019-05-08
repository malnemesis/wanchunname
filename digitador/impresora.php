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
        <small>Impresoras</small></h1>
    
    <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Pincipal</a></li>
    </ol>  
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?php echo number_format($numimpresora); ?></h3>

              <p> Impresoras Registradas</p>
            </div>
            <div class="icon">
              <i class="fa fa-print"></i>
            </div>
          </div>
           
    	<!-- Modal para registros nueva impresora -->

   <div class="modal fade" id="modalNuevo">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Nueva Impresora</h4>
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
            <input type="text" class="form-control" id="IMP_MARCA">
          </div>
          </div>
          
          <div class="row">
          <div class="form-group col-md-6">
            <label>Modelo</label>
            <input type="text" class="form-control" id="IMP_MODELO">
          </div>
          <div class="form-group col-md-6">
            <label>Serie</label>
            <input type="text" class="form-control" id="IMP_SERIE">
            <div id="comprobar"></div>
          </div>
          </div>
          
          <div class="row">
          <div class="form-group col-md-6">
            <label>Consumible</label>
            <input type="text" class="form-control" id="IMP_CONSUMIBLES">
          </div>
            <div class="form-group col-md-6">
                <label>Conectividad</label>
                <select class="form-control" id="IMP_CONECTIVIDAD">
                  <option>SI</option>
                  <option>NO</option>
                </select>
              </div>
                       <div class="form-group col-md-6">
            <label>Código de Activo Fijo</label>
            <input type="text" class="form-control" id="IMP_CODACTFIJ">
          </div>
          </div>

          <div class="form-group">
            <label>Observación</label>
            <input type="text" class="form-control" id="IMP_OBSERVACION">
      </div>
      <div class="modal-footer">
         <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i> <strong>Cerrar</strong></button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardaimp">Agregar Impresora</button>
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
				            Agregar
				          <i class="fa fa-plus" aria-hidden="true"></i>
                </button>
                <a href="impresoraxls.php"><button class="btn btn-success" title="XLS">
				            
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
  $('#tabla').load('../componentes_dig/tabla_impresora.php');
});
</script>

<script type="text/javascript">
$(document).ready(function() {
  $('#guardaimp').click(function(){
    EST_CODIGO=$('#EST_CODIGO').val();
    IMP_MARCA=$('#IMP_MARCA').val();
    IMP_MODELO=$('#IMP_MODELO').val();
    IMP_SERIE=$('#IMP_SERIE').val();
    IMP_CONSUMIBLES=$('#IMP_CONSUMIBLES').val();
    IMP_CONECTIVIDAD=$('#IMP_CONECTIVIDAD').val();
    IMP_CODACTFIJ=$('#IMP_CODACTFIJ').val();
    IMP_OBSERVACION=$('#IMP_OBSERVACION').val();
    if (IMP_MARCA!='' && IMP_MODELO!='' && IMP_SERIE!='' && IMP_CONSUMIBLES!='') {
      agregaimp(EST_CODIGO, IMP_MARCA, IMP_MODELO, IMP_SERIE, IMP_CONSUMIBLES, IMP_CONECTIVIDAD, IMP_CODACTFIJ, IMP_OBSERVACION);
    }else{
      alertify.error("Fallo el servidor :(");
    }

    
    
  });

$('#actualizaimp').click(function(){
  actualizaimp();
});

});

</script>

<script type="text/javascript">
$(document).ready(function(){
      var consulta;
      $("#IMP_SERIE").focus();
      $("#IMP_SERIE").keyup(function(e){
             consulta = $("#IMP_SERIE").val();
                        $.ajax({
                              type: "POST",
                              url: "../digitador/action/vserie.php",
                              data: "IMP_SERIE="+consulta,
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