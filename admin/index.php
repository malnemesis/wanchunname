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
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo number_format($numusuario); ?></h3>
              <p> Usuarios Registrados</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i> 
            </div>
            <a href="usuarios.php" class="small-box-footer">Ver Detalle <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?php echo number_format($numtecnico); ?></h3>
              <p>Técnicos Registrados</p>
            </div>
            <div class="icon">
              <i class="fa fa-user-o"></i>
            </div>
            <a href="tecnicos.php" class="small-box-footer">Ver Detalle <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo number_format($numdepartamento); ?></h3>

              <p>Departamentos Registrados</p>
            </div>
            <div class="icon">
              <i class="fa fa-building-o"></i>
            </div>
            <a href="departamentos.php" class="small-box-footer">Ver Detalle <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo number_format($numtiket); ?></h3>

              <p>Tickets Atendidos</p>
            </div>
            <div class="icon">
              <i class="fa fa-ticket"></i>
            </div>
            <a href="tickets_atendidos.php" class="small-box-footer">Ver Detalle <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
       
  <div class="row">
    <div class="col-md-12">
      <div class="box-header with-border"></div>
        <div class="box-body">

            <?php
            if ($tiket == true){
                print '
		      <div class="alert alert-danger">
		          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		              Existe '.$tikeyalert.' <a href="tickets.php">Ticket de Soporte Técnico.</a>
		      </div>';
							
            }else{
	           if ($tiket == false) {
				        print '
	           <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				        Hasta el momento no existe ningun Ticket de Soporte Técnico
				</div>';
		      }
            }
            ?>

        </div>
      </div>
    </div>
  </div>

<?php include 'footer.php';?>

  </section>
  
</body>

</html>
