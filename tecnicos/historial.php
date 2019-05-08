<?php
include 'action/check-login.php';
?>

<!DOCTYPE html>
<html lang="es">

<?php include '../admin/head.php';?>

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
          <div class="small-box bg-green">
            <div class="inner">
            <p>HISTORIAL</p>
              <h2><?php echo $SETEC_NOMBRES?></h2>
            </div>
            <div class="icon">
              <i class="fa fa-user-o"></i>
            </div>
          </div>
        </div>
      </div>
    
<div id="tabla" class="table table-responsive table-sm"></div>

      </div>

 <?php include '../admin/footer.php';?>

  </section>

</body>

</html>

<script type="text/javascript">
$(document).ready(function() {
  $('#tabla').load('tabla_historial.php');
});
</script>