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
              <h3><?php echo number_format($numteclado); ?></h3>

              <p> Teclados Registrados</p>
            </div>
            <div class="icon">
              <i class="fa fa-keyboard-o"></i>
            </div>
          </div>
        </div>
         
  <div class="row">
    <div class="col-md-12">
            <div class="box-body">
      
    	<!-- Modal para registros nuevo teclado -->

   <div class="modal fade" id="modalNuevo">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Nuevo Teclado</h4>
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
            <input type="text" class="form-control" id="KEY_MARCA"/>
          </div>
          </div>
          <div class="row">
          <div class="form-group col-md-6">
            <label>Modelo</label>
            <input type="text" class="form-control" id="KEY_MODELO"/>
          </div>
          <div class="form-group col-md-6">
            <label>Serie</label>
            <input type="text" class="form-control" id="KEY_SERIE"/>
            <div id="comprobar"></div>
          </div>
          <div class="form-group col-md-6">
            <label>Código de Activo Fijo</label>
            <input type="text" class="form-control" id="KEY_CODACTFIJ"/>
            <div id="comprobarcodaf"></div>
          </div>
          </div>
          <div class="form-group">
            <label>Observación</label>
            <input type="text" class="form-control" id="KEY_OBSERVACION"/>
          </div>
      <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i> <strong>Cerrar</strong></button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarteclado">Agregar Teclado</button>
      </div>
      </form>

      </div>                    
    </div>
  </div>
</div>

<!-- Modal para edición teclado-->

   <div class="modal fade" id="modalEdicion">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Editar Teclado</h4>
              </div>
              <div class="modal-body">
                    <div class="modal-body">
      
      <input type="text" hidden="" id="KEY_CODIGO" >

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
            <input type="text" class="form-control" id="KEY_MARCAU">
          </div>
          </div>
          <div class="row">
          <div class="form-group col-md-6">
            <label>Modelo</label>
            <input type="text" class="form-control" id="KEY_MODELOU"/>
          </div>
          <div class="form-group col-md-6">
            <label>Serie</label>
            <input type="text" class="form-control" id="KEY_SERIEU"/>
          </div>          
          <div class="form-group col-md-6">
            <label>Código de Activo Fijo</label>
            <input type="text" class="form-control" id="KEY_CODACTFIJU"/>
          </div>
          </div>
          <div class="form-group">
            <label>Observación</label>
            <input type="text" class="form-control" id="KEY_OBSERVACIONU"/>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i> <strong>Cerrar</strong></button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="actualizateclado">Actualizar Teclado</button>
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
                <a href="keyboardxls.php"><button class="btn btn-success" title="XLS">
				            
				          <i class="fa fa-file-excel-o" aria-hidden="true"></i>
	         		 </button></a>
                <a href="keyboardpdf.php"><button class="btn btn-danger" title="PDF">
				            
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
  $('#tabla').load('../componentes/tabla_keyboard.php');
});
</script>

<script type="text/javascript">
$(document).ready(function() {
  $('#guardarteclado').click(function(){
    EST_CODIGO=$('#EST_CODIGO').val();
    KEY_MARCA=$('#KEY_MARCA').val();
    KEY_MODELO=$('#KEY_MODELO').val();
    KEY_SERIE=$('#KEY_SERIE').val();
    KEY_CODACTFIJ=$('#KEY_CODACTFIJ').val();
    KEY_OBSERVACION=$('#KEY_OBSERVACION').val();
    if (KEY_MARCA!='' && KEY_MODELO!='' && KEY_SERIE!='') {
      agregarteclado(EST_CODIGO, KEY_MARCA, KEY_MODELO, KEY_SERIE, KEY_CODACTFIJ, KEY_OBSERVACION);
    }else{
      alertify.error("Datos incompletos :(");
    }
    
  });

$('#actualizateclado').click(function(){
  actualizateclado();
});

});

</script>

<script type="text/javascript">
$(document).ready(function(){
      var consulta;
      $("#KEY_SERIE").focus();
      $("#KEY_SERIE").keyup(function(e){
             consulta = $("#KEY_SERIE").val();
                        $.ajax({
                              type: "POST",
                              url: "../admin/action/vserie.php",
                              data: "KEY_SERIE="+consulta,
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
      $("#KEY_CODACTFIJ").focus();
      $("#KEY_CODACTFIJ").keyup(function(e){
             consulta = $("#KEY_CODACTFIJ").val();
                        $.ajax({
                              type: "POST",
                              url: "../admin/action/vcodaf.php",
                              data: "KEY_CODACTFIJ="+consulta,
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