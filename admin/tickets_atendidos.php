
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
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo number_format($numtiket); ?></h3>

              <p> Tickets Atendidos</p>
            </div>
            <div class="icon">
              <i class="fa fa-ticket"></i>
            </div>
          </div>
        </div>

      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
                   <div class="box-body">
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
  $('#tabla').load('../componentes/tabla_tikets.php');
});
</script>



