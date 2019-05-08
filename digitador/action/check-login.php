<?php

error_reporting(0);

session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
	    $SESU_CODIGO = $_SESSION['PER_CODIGO'];
        $SESU_NOMBRES = $_SESSION['PER_NOMBRES'];	
		$SESU_USUARIO = $_SESSION['PER_USUARIO'];
        $SESU_CORREO = $_SESSION['PER_CORREO'];	
	    $SErole = $_SESSION['role'];
		
		if ($SErole == "digitador") {
			
		}else{
			header("location:../?err=Tiene que ser digitador");
		}
	
}else{
	header("location:../?err=Debe iniciar Sesión");
}

?>

