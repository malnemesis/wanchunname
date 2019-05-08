<!DOCTYPE html>
<html lang="en">

<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Soporte Técnico GAD Flavio Alfaro</title>
        <link type="text/css" href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
        <link type="text/css" href="../bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet"/>
        <link type="text/css" href="../css/theme.css" rel="stylesheet"/>
        <link type="text/css" href="../images/icons/css/font-awesome.css" rel="stylesheet"/>
		<link rel="icon" href="../images/icon.png"/>
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'/>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a>
                        <a class="brand">
			  	      <img src="../images/icon.png" width="20" height="20"/>         Soporte Técnico GAD Flavio Alfaro
			  	</a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                                           
                        <ul class="nav pull-right">
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<?php
							if ($SEshoplogo == null) {
								print '<img src="../images/admin.png" class="nav-avatar" />';
							}
							?>
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="configuracion_cuenta.php">Configuración de la Cuenta</a></li>
                                    <li class="divider"></li>
                                    <li><a href="logout.php">Cerrar Sesión</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="./"><i class="menu-icon icon-dashboard"></i>Principal
                                </a></li>
                                <li><a href="tecnicos.php"><i class="menu-icon icon-shopping-cart"></i>T&eacute;cnicos </a></li>
                                <li><a href="usuarios.php"><i class="menu-icon icon-shopping-cart"></i>Usuarios</a></li>
                                <li><a href="departamentos.php"><i class="menu-icon icon-barcode"></i>Departamentos</a></li>
                                <li><a href="estados.php"><i class="menu-icon icon-barcode"></i>Estados</a></li>
                            </ul>
          
                            <ul class="widget widget-menu unstyled">
                                <li><a href="cpu.php"><i class="menu-icon icon-filter"></i> Ingreso CPU</a></li>
                                <li><a href="monitor.php"><i class="menu-icon icon-glass"></i> Ingreso Monitor</a></li>
                                <li><a href="teclado.php"><i class="menu-icon icon-glass"></i> Ingreso Teclado</a></li>
                                <li><a href="mouse.php"><i class="menu-icon icon-glass"></i> Ingreso Mouse</a></li>
                                <li><a href="ups.php"><i class="menu-icon icon-glass"></i> Ingreso UPS</a></li>
                                <li><a href="impresora.php"><i class="menu-icon icon-glass"></i> Ingreso Impresoras</a></li>
                                <li><a href="dispositivosred.php"><i class="menu-icon icon-glass"></i> Ingreso Switchs/Routers</a></li>
                            </ul>
                            
                            <ul class="widget widget-menu unstyled">
                                <li><a href="asignacion_equipos.php"><i class="menu-icon icon-user"></i> Asignacion de Equipos </a></li>
                            </ul>
							
							<ul class="widget widget-menu unstyled">
                                <li><a href="tiket_solicitados.php"><i class="menu-icon icon-money"></i> Tikets Solicitados</a></li>
                                <li><a href="asignar_tecnico.php"><i class="menu-icon icon-money"></i> Asignacion de T&eacute;cnicos </a></li>
								<li><a href="estados_solicitudes.php"><i class="menu-icon icon-bar-chart"></i>Estados de Solicitudes</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="span9">
                        <div class="content">
                            <div class="module">
                                <div class="module-head">
                                    <h3>
                                        Nuevo Teclado</h3>
                                </div>
								<div class="module-body">
								<?php
							
                                  
                          		if(isset($_GET['err'])) {
									print '
									<div class="alert alert-danger">
										<button type="button" class="close" data-dismiss="alert">×</button>
										'.$_GET['err'].' 
									</div>
									';
								}else{
									
								}
								  
								if(isset($_GET['in'])) {
									print '
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
										'.$_GET['in'].' 
									</div>
									';
								}else{
									
								}
								?>
                                 <form class="form-horizontal row-fluid" action="action/nuevo-teclado.php" method="POST">
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Estado: </label>
											<div class="controls">
												<select name="EST_CODIGO" id="EST_CODIGO">
                                                <?php
                                                include '../config/db_config.php';
                                                    $sql = "SELECT * FROM estados";
                                                    $result = $conn->query($sql);
                                                    $result->num_rows > 0;
                                                    while($estados = $result->fetch_assoc()){ 
                                                ?>
                                                    <option value="<?php echo $estados['EST_CODIGO'];?>"><?php echo $estados['EST_DETALLE'];?></option>
                                                <?php
                                                    }
                                                ?>
                                                </select>	
											</div>
										</div>
                                        
										<div class="control-group">
											<label class="control-label" for="basicinput">Marca: </label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="Marca..." name="KEY_MARCA" style='text-transform:uppercase' required class="span8">	
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Modelo: </label>
											<div class="controls">
												<input type="text" placeholder="Modelo.." name="KEY_MODELO" style='text-transform:uppercase' required class="span8">
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Serie: </label>
											<div class="controls">
												<input type="text" placeholder="Serie.." name="KEY_SERIE" style='text-transform:uppercase' required class="span8">
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput" >Observación: </label>
											<div class="controls">
												<textarea name="KEY_OBSERVACION" style='text-transform:uppercase' rows="4"></textarea>
											</div>
										</div>
										<div class="control-group">
											<div class="controls">
												<button type="submit" class="btn">Agregar Teclado</button>
												<button type="reset" class="btn">Reset Formulario</button>
											</div>
										</div>
									</form>
									</div>
                            </div>

                       
                        </div>
                 
                    </div>
    
                </div>
            </div>
   
        </div>

        <div class="footer">
            <div class="container">
              <b class="copyright">&copy; <?php echo date('Y') ?> </a> InfoWarriors </b> Todos los Derechos Reservados.
        </div>
        <script src="../scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="../scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="../scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="../scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="../scripts/common.js" type="text/javascript"></script>
      
    </body>
