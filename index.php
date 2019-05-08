<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <title>Soporte Técnico | Login</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"/>
  
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="lib/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="lib/AdminLTE/bower_components/font-awesome/css/font-awesome.min.css"/>
  <!-- Theme style -->
  <link rel="stylesheet" href="lib/AdminLTE/dist/css/login.css"/>
  <link rel="stylesheet" href="lib/AdminLTE/dist/css/AdminLTE.min.css"/>
  <!-- iCheck -->
  <link rel="stylesheet" href="lib/AdminLTE/plugins/iCheck/square/blue.css"/>

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body>

  <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <div class="container">
                  <img src="images/icon.png" width="40" /> 
                    SOPORTE TÉCNICO GAD FLAVIO ALFARO
			          </div>
            </div>
          </div>
</nav>

	<div style="background-image: url(images/home.jpg);">
    <div class="container" >
    <div class="row">
    
<div class="login-box" >
  <div class="login-logo">
    <p>SOPORTE TECNICO</p>
  </div>
  <div class="login-box-body">
    <p class="login-box-msg">Iniciar Sesión para comenzar</p>

                <?php
				if(isset($_GET['err'])) {
		          print '
				    <div class="alert alert-danger">
				        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        '.$_GET['err'].'
                    </div>';
				}else{
				    
				}
								
				if(isset($_GET['in'])) {
				    print '
				    <div class="alert alert-success">
				        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times; </button>
                        '.$_GET['in'].' 
                    </div>';
				}else{
						
				}
		      ?>

    <form action="action/login.php" method="POST">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Nombre de Usuario" name="username" required>
        <span class="fa fa-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Contraseña" name="password" required>
        <span class="fa fa-unlock-alt form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
          <select class="form-control" name="role">
            <option value="usuario">Usuario</option>
            <option value="tecnico">Técnico</option>
            <option value="digitador">Digitador</option>
            <option value="administrador">Administrator</option>
          </select>
      </div>
      <div class="row">
        <div class="col-xs-6">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Recuérdame
            </label>
          </div>
        </div>
        <div class="col-xs-6">
          <button type="submit" class="btn btn-primary btn-block btn-flat ">Iniciar Sesión</button>
        </div>
      </div>
    </form>

</div>

</div>
</div>
</div>
</div>

<?php include 'admin/footer.php';?>

<!-- jQuery 3 -->
<script src="lib/AdminLTE/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="lib/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="lib/AdminLTE/plugins/iCheck/icheck.min.js"></script>

<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>

</body>
</html>
