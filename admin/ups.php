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
              <h3><?php echo number_format($numups); ?></h3>

              <p> UPS's Registrados</p>
            </div>
            <div class="icon">
              <i class="fa fa-bolt"></i>
            </div>
          </div>
        </div>
         
  <div class="row">
    <div class="col-md-12">
            <div class="box-body">
      
    	<!-- Modal para registros nuevo UPS -->

   <div class="modal fade" id="modalNuevo">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Nuevo UPS</h4>
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
            <input type="text" class="form-control" id="U_MARCA">
          </div>
          </div>
          <div class="row">
          <div class="form-group col-md-6">
            <label>Modelo</label>
            <input type="text" class="form-control" id="U_MODELO">
          </div>
          <div class="form-group col-md-6">
            <label>Serie</label>
            <input type="text" class="form-control" id="U_SERIE">
            <div id="comprobar"></div>
          </div>
          </div>
          <div class="row">
          <div class="form-group col-md-6">
            <label>Capacidad de Carga</label>
            <input type="text" class="form-control" id="U_CAPACIDADCARGA">
          </div>
          <div class="form-group col-md-6">
            <label>N° Tomas</label>
            <input type="text" class="form-control" id="U_NUMTOMAS">
          </div>
          <div class="form-group col-md-6">
            <label>Código Activo Fijo</label>
            <input type="text" class="form-control" id="U_CODACTFIJ">
            <div id="comprobarcodaf"></div>
          </div>
          </div>
          <div class="form-group">
            <label>Observación</label>
            <input type="text" class="form-control" id="U_OBSERVACION">
      </div>
      <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i> <strong>Cerrar</strong></button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarups">Agregar UPS</button>
         </div>
        </form>

      </div>
    </div>
  </div>
</div>

<!-- Modal para edición ups-->

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

      <input type="text" hidden="" id="U_CODIGO" >

      <form>

      <div class="row">
        <div class="form-group col-md-6">
    <label>Estado</label>
  
            <?php
                   include '../config/conexion.php';
                   $sql = "SELECT * FROM estados WHERE EST_DETALLE NOT IN('DISPONIBLE')"; 
              ?>
            <select class="form-control" id="EST_CODIGOU">        
            <?php
                $result = $conn->query($sql);
                $result->num_rows > 0;
               while($d=mysqli_fetch_row($result)){ 
                    $datos = $d[0]."||".
                            $d[1];
             ?>
                    <option value="<?php echo $d[1];?>"><?php echo $d[1];?></option>
                      <?php
                          }
                      ?>
                  </select>

                  </div>
          <div class="form-group col-md-6">
            <label>Marca</label>
            <input type="text" class="form-control" id="U_MARCAU">
          </div>
          </div>
          <div class="row">
          <div class="form-group col-md-6">
            <label>Modelo</label>
            <input type="text" class="form-control" id="U_MODELOU">
          </div>
          <div class="form-group col-md-6">
            <label>Serie</label>
            <input type="text" class="form-control" id="U_SERIEU">
          </div>
          </div>
          <div class="row">
          <div class="form-group col-md-6">
            <label>Capacidad de Carga</label>
            <input type="text" class="form-control" id="U_CAPACIDADCARGAU">
          </div>
          <div class="form-group col-md-6">
            <label>N° Tomas</label>
            <input type="text" class="form-control" id="U_NUMTOMASU">
          </div>
          <div class="form-group col-md-6">
            <label>Código de Activo Fijo</label>
            <input type="text" class="form-control" id="U_CODACTFIJU">
          </div>
          </div>
          <div class="form-group">
            <label>Observación</label>
            <input type="text" class="form-control" id="U_OBSERVACIONU">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i> <strong>Cerrar</strong></button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="actualizaups">Actualizar UPS</button>
      </div>
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
                <a href="upsxls.php"><button class="btn btn-success" title="XLS">
				            
				          <i class="fa fa-file-excel-o" aria-hidden="true"></i>
	         		 </button></a>
                <a href="upspdf.php"><button class="btn btn-danger" title="PDF">
				            
				          <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
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
  $('#tabla').load('../componentes/tabla_ups.php');
});
</script>

<script type="text/javascript">
$(document).ready(function() {
  $('#guardarups').click(function(){
    EST_CODIGO=$('#EST_CODIGO').val();
    U_MARCA=$('#U_MARCA').val();
    U_MODELO=$('#U_MODELO').val();
    U_SERIE=$('#U_SERIE').val();
    U_CAPACIDADCARGA=$('#U_CAPACIDADCARGA').val();
    U_NUMTOMAS=$('#U_NUMTOMAS').val();
    U_CODACTFIJ=$('#U_CODACTFIJ').val();
    U_OBSERVACION=$('#U_OBSERVACION').val();
    if (U_MARCA!='' &&U_MODELO!='' &&U_SERIE!='' &&U_CAPACIDADCARGA!='' &&U_NUMTOMAS!='') {
      agregarups(EST_CODIGO, U_MARCA, U_MODELO, U_SERIE, U_CAPACIDADCARGA, U_NUMTOMAS, U_CODACTFIJ, U_OBSERVACION);
    }else{
      alertify.error("Fallo el servidor :(");
    }
    
  });

$('#actualizaups').click(function(){
  actualizaups();
});

});

</script>

<script type="text/javascript">
$(document).ready(function(){
      var consulta;
      $("#U_SERIE").focus();
      $("#U_SERIE").keyup(function(e){
             consulta = $("#U_SERIE").val();
                        $.ajax({
                              type: "POST",
                              url: "../admin/action/vserie.php",
                              data: "U_SERIE="+consulta,
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
      var consulta;
      $("#U_CODACTFIJ").focus();
      $("#U_CODACTFIJ").keyup(function(e){
             consulta = $("#U_CODACTFIJ").val();
                        $.ajax({
                              type: "POST",
                              url: "../admin/action/vcodaf.php",
                              data: "U_CODACTFIJ="+consulta,
                              dataType: "html",
                              error: function(){
                                    alert("error petición ajax");
                              },
                              success: function(data){
                                    $("#comprobarcodaf").html(data);
                                    n();
                              }
                  });
      });
});
</script>