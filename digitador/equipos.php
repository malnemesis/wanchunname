<?php

include 'action/check-login.php';
include 'action/alerts.php';
include '../config/conexion.php';
?>
<!DOCTYPE html>
<html lang="es">
<?php include 'head.php';?>
<?php include 'header.php';?>
<?php include 'navigation.php';?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Tablero /
        <small>Equipos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Principal</a></li>
        <li class="active">Equipos</li>
      </ol>
    </section>

     <section class="content">
      <div class="row">
        <div class="col-lg-3 col-md-3">
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?php echo number_format($numcpu); ?></h3>

              <p> CPU Registrados</p>
            </div>
            <div class="icon">
              <i class="fa fa-server"></i>
            </div>
            <a href="cpu.php" class="small-box-footer">Ver Detalle <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
  
        <div class="col-lg-3 col-md-3">
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?php echo number_format($nummonitor); ?></h3>

              <p>Monitor Registrados</p>
            </div>
            <div class="icon">
              <i class="fa fa-television"></i>
            </div>
            <a href="monitor.php" class="small-box-footer">Ver Detalle <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
        <div class="col-lg-3 col-md-3">
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?php echo number_format($numteclado); ?></h3>

              <p>Teclado Registrados</p>
            </div>
            <div class="icon">
              <i class="fa fa-keyboard-o"></i>
            </div>
            <a href="keyboard.php" class="small-box-footer">Ver Detalle <i class="fa fa-arrow-circle-right"></i></a>
          </div>
          </div>


         <div class="col-lg-3 col-md-3">
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?php echo number_format($nummouse); ?></h3>

              <p>Mouse Registrados</p>
            </div>
            <div class="icon">
              <i class="fa fa-mouse-pointer"></i>
            </div>
            <a href="mouse.php" class="small-box-footer">Ver Detalle <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        </div>

<div class="row">
      
     <div class="col-lg-3 col-md-3">
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?php echo number_format($numups); ?></h3>

              <p>UPS Registrados</p>
            </div>
            <div class="icon">
              <i class="fa fa-bolt"></i>
            </div>
            <a href="ups.php" class="small-box-footer">Ver Detalle <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
           <div class="col-lg-3 col-md-3">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?php echo number_format($numimpresora); ?></h3>

              <p>Impresoras Registradas</p>
            </div>
            <div class="icon">
              <i class="fa fa-print"></i>
            </div>
            <a href="impresora.php" class="small-box-footer">Ver Detalle <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

            <div class="col-lg-3 col-md-3">
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?php echo number_format($numdispositivos); ?></h3>

              <p>Dispositivo de Red Registrados</p>
            </div>
            <div class="icon">
              <i class="fa fa-wifi"></i>
            </div>
            <a href="dispositivosred.php" class="small-box-footer">Ver Detalle <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

      </div>

<div class="row">
         
      </div>
       </div>

<?php include 'footer.php';?>

  </section>
  
</body>

</html>


 
     
      


       
        
       
        
  
