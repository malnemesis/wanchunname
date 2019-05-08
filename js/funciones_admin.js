function actualizaadmin(SU_NOMBRES, SU_USUARIO, SU_CORREO) {
  
    cadena = "SU_NOMBRES=" + SU_NOMBRES +
            "&SU_USUARIO=" + SU_USUARIO +
            "&SU_CORREO=" + SU_CORREO;

    $.ajax({
      type: "POST",
      url: "../admin/action/up_suusuario.php",
      data: cadena,
      success: function() {
        alertify.success("Actualizado con exito :)");
        setTimeout("document.location.reload()", 500);
      }
    });

}

function actualizapassword(consulta) {
    
  cadena = "inputPassword=" + consulta;

  $.ajax({
    type: "POST",
    url: "../admin/action/new_password.php",
    data: cadena,
    success: function() {
      alertify.success("Actualizado con exito :)");
      setTimeout("document.location.reload()", 500);
    }
  });
}
