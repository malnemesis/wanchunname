 <?php
include 'action/check-login.php';
?>
 
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

 <header class="main-header">
    <a href=" " class="logo">
      <span class="logo-mini">ST</span>
      <span class="logo-lg">Soporte Técnico</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
          </li>
           <li>
            <a href="configuracion_cuenta.php"><i class="fa fa-gears"></i></a>
          </li>
           <li>
            <a href="#" data-toggle="modal" data-target="#modal-default"><i class="fa fa-sign-out"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

          <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">¿Listo para Salir?</h4>
              </div>
              <div class="modal-body">
                <p>Seleccione <b>"Cerrar Sesión"</b> a continuación si está listo para finalizar su sesión actual.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
                <a class="btn btn-primary" href="../admin/action/logout.php">Cerrar Sesión</a>
              </div>
            </div>
          </div>
        </div>