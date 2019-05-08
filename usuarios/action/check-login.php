<?php

error_reporting(0);

session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        $SEPER_CODIGO = $_SESSION['PER_CODIGO'];
        $SEPER_NOMBRES = $_SESSION['PER_NOMBRES'];
        $SEPER_USUARIO = $_SESSION['PER_USUARIO'];		
		$SEPER_CORREO = $_SESSION['PER_CORREO'];
		$SErole = $_SESSION['role'];
		if ($SErole == "usuario") {
			
		}else{
			header("location:.././?err=Tiene que ser usuario del Sistema");
		}
}else{
	header("location:.././?err=Debes iniciar sesion");
}