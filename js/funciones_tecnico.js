function actualizatecnico(TEC_NOMBRES, TEC_USUARIO, TEC_CORREO) {

    cadena = "TEC_NOMBRES=" + TEC_NOMBRES +
             "&TEC_USUARIO=" + TEC_USUARIO +
             "&TEC_CORREO=" + TEC_CORREO;

    $.ajax({
        type: "POST",
        url: "action/up_tecnico.php",
        data: cadena,
        success: function () {
            alertify.success("Actualizado con exito :)");
            setTimeout("document.location.reload()", 500);
        }
    });

}

function actualizapasswordtec(TEC_CONTRASENA) {

    cadena = "TEC_CONTRASENA=" + TEC_CONTRASENA;

    $.ajax({
        type: "POST",
        url: "action/new_password.php",
        data: cadena,
        success: function () {
            alertify.success("Actualizado con exito :)");
            setTimeout("document.location.reload()", 500);
        }
    });
}