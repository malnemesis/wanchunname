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
        <small>CPUs</small></h1>
    
    <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Pincipal</a></li>
    </ol>  
    </section>  
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?php echo number_format($numcpu); ?></h3>

              <p> CPUs Registrados</p>
            </div>
            <div class="icon">
              <i class="fa fa-server"></i>
            </div>
          </div>
        </div>
      
    	<!-- Modal para registros nuevos cpu -->

   <div class="modal fade" id="modalNuevo">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Nuevo CPU</h4>
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
            <label>Tipo</label>
            <select class="form-control" id="C_TIPO">
            <option value="DESKTOP">DESKTOP</option>
            <option value="CLON">CLON</option>
            <option value="LAPTOP">LAPTOP</option>
            <option value="SERVER">SERVER</option>
            </select>
          </div>
          </div>
          <div class="row">
          <div class="form-group col-md-6">
            <label>Marca</label>
            <input type="text" class="form-control text-uppercase" id="C_MARCA"/>
          </div>
          <div class="form-group col-md-6">
            <label>Modelo</label>
            <input type="text" class="form-control text-uppercase" id="C_MODELO"/>
          </div>
          <div class="form-group col-md-6">
            <label>Serie</label>
            <input type="text" class="form-control text-uppercase" id="C_SERIE" />
            <div id="comprobar"></div>
          </div>   
          <div class="form-group col-md-6">
            <label>Tipo Procesador</label>
            <input type="text" class="form-control text-uppercase" id="C_PROCESADOR"/>
          </div>
          <div class="form-group col-md-6">
            <label>N° Procesadores</label>
            <select class="form-control" id="C_NUMPROCESADOR">
            <option value="1">1</option>
            <option value="2">2</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label>Tamaño RAM</label>
            <select class="form-control" id="C_RAM">
            <option value="2 GB">2 GB</option>
            <option value="4 GB">4 GB</option>
            <option value="8 GB">8 GB</option>
            <option value="16 GB">16 GB</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label>N° Módulos</label>
            <select class="form-control" id="C_NUMMODULO">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="4">4</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label>Tamaño Disco</label>
            <select class="form-control" id="C_DISCODURO">
            <option value="500 GB">500 GB</option>
            <option value="1 TB">1 TB</option>
            <option value="2 TB">2 TB</option>
            </select>
          </div>
          </div>
          <div class="row">
          <div class="form-group col-md-6">
            <label>N° Discos</label>
             <select class="form-control" id="C_NUMDISCO">
            <option value="1">1</option>
            <option value="2">2</option>
            </select>
          </div>
           <div class="form-group col-md-6">
            <label>Código de Activo Fijo</label>
            <input type="text" class="form-control text-uppercase" id="C_CODACTFIJ"/>
            <div id="comprobarcodaf"></div>            
          </div>
          </div>
          <div class="form-group">
            <label>Observación</label>
            <input type="text" class="form-control text-uppercase" id="C_OBSERVACION"/>
          </div>
      <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i> <strong>Cerrar</strong></button>
        <input type="submit" class="btn btn-primary" data-dismiss="modal" id="guardarcpu" value="Agregar CPU">
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
                <a href="cpuxls.php"><button class="btn btn-success" title="XLS"><i class="fa fa-file-excel-o" aria-hidden="true"></i></button></a>
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
  $('#tabla').load('../componentes_dig/tabla_cpu.php');
});
$('.select2').select2({    
  language: {

    noResults: function() {
      return "No se encontraron resultados";        
    },
    searching: function() {
      return "Buscando..";
    }
  }
});
</script>

<script type="text/javascript">
$(document).ready(function() {
  $('#guardarcpu').click(function(){
    EST_CODIGO=$('#EST_CODIGO').val();
    C_TIPO=$('#C_TIPO').val();
    C_MARCA=$('#C_MARCA').val();
    C_MODELO=$('#C_MODELO').val();
    C_SERIE=$('#C_SERIE').val();
    C_PROCESADOR=$('#C_PROCESADOR').val();
    C_NUMPROCESADOR=$('#C_NUMPROCESADOR').val();
    C_RAM=$('#C_RAM').val();
    C_NUMMODULO=$('#C_NUMMODULO').val();
    C_DISCODURO=$('#C_DISCODURO').val();
    C_NUMDISCO=$('#C_NUMDISCO').val();
    C_CODACTFIJ=$('#C_CODACTFIJ').val();
    C_OBSERVACION=$('#C_OBSERVACION').val();
    if (C_MARCA!='' && C_MODELO!='' && C_SERIE!='') {
       agregarcpu(EST_CODIGO, C_TIPO, C_MARCA, C_MODELO, C_SERIE, C_PROCESADOR, C_NUMPROCESADOR, C_RAM, C_NUMMODULO, C_DISCODURO, C_NUMDISCO, C_CODACTFIJ, C_OBSERVACION);
    }else{
      alertify.error("Datos incompletos :(");
    }
   
  });

$('#actualizacpu').click(function(){
  actualizacpu();
});

});

</script>

<script type="text/javascript">
$(document).ready(function(){
      var consulta;
      $("#C_SERIE").focus();
      $("#C_SERIE").keyup(function(e){
             consulta = $("#C_SERIE").val();
                        $.ajax({
                              type: "POST",
                              url: "../digitador/action/vserie.php",
                              data: "C_SERIE="+consulta,
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
      var C_CODACTFIJ;
      $("#C_CODACTFIJ").focus();
      $("#C_CODACTFIJ").keyup(function(e){
             C_CODACTFIJ = $("#C_CODACTFIJ").val();
                        $.ajax({
                              type: "POST",
                              url: "../digitador/action/vcodaf.php",
                              data: "C_CODACTFIJ="+C_CODACTFIJ,
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

<script type="text/javascript" src="../js/bsvalidate/jquery.bsvalidate.js"></script>
<script type="text/javascript" src="../js/bsvalidate/main.js"></script>

