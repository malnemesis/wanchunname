function actualizapersona(PER_NOMBRES, PER_USUARIO, PER_CORREO) {

    cadena = "PER_NOMBRES=" + PER_NOMBRES +
            "&PER_USUARIO=" + PER_USUARIO +
            "&PER_CORREO=" + PER_CORREO;

    $.ajax({
        type: "POST",
        url: "action/up_usuario.php",
        data: cadena,
        success: function () {
            alertify.success("Actualizado con exito :)");
            setTimeout("document.location.reload()", 500);
        }
    });

}

function actualizapasswordper(PER_CONTRASENA) {

    cadena = "PER_CONTRASENA=" + PER_CONTRASENA;

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