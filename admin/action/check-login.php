<?php

error_reporting(0);

session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
	    $SESU_CODIGO = $_SESSION['SU_CODIGO'];
        $SESU_NOMBRES = $_SESSION['SU_NOMBRES'];	
		$SESU_USUARIO = $_SESSION['SU_USUARIO'];
        $SESU_CORREO = $_SESSION['SU_CORREO'];	
	    $SErole = $_SESSION['role'];
		
		if ($SErole == "administrador") {
			
		}else{
			header("location:../?err=Tiene que ser administrador");
		}
	
}else{
	header("location:../?err=Debe iniciar Sesión");
}

?>

