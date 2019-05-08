<?php

error_reporting(0);

session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        $SETEC_CODIGO = $_SESSION['TEC_CODIGO'];
        $SETEC_NOMBRES = $_SESSION['TEC_NOMBRES'];
        $SETEC_USUARIO = $_SESSION['TEC_USUARIO'];	
        $SETEC_CARGO = $_SESSION['TEC_CARGO'];	
		$SETEC_CORREO = $_SESSION['TEC_CORREO'];
		$SErole = $_SESSION['role'];
		if ($SErole == "tecnico") {
			
		}else{
			header("location:.././?err=Tiene que ser usuario del Sistema");
		}
}else{
	header("location:.././?err=Debes iniciar sesion");
}