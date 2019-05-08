function agregardatos(PER_NOMBRES, PER_USUARIO, PER_CORREO){

cadena = "PER_NOMBRES=" + PER_NOMBRES +
         "&PER_USUARIO=" + PER_USUARIO +
         "&PER_CORREO=" + PER_CORREO;

    $.ajax({
        type:"POST",
        url:"../admin/action/add_usuario.php",
        data:cadena,
        success:function(r){
            if(r!==1){
                $('#tabla').load('../componentes/tabla_usuarios.php');
                alertify.success("Agregado con exito :)");
                setTimeout('document.location.reload()', 500);
            }else{
                alertify.error("Datos incompletos :(");
            }
        }

    });
}

function agregaform(datos) {

    d = datos.split('||');

    $('#PER_CODIGO').val(d[0]);
    $('#PER_NOMBRESU').val(d[1]);
    $('#PER_USUARIOU').val(d[2]);
    $('#PER_CORREOU').val(d[3]);
    $('#PER_CONTRASENAU').val(d[4]);

}

function actualizadatos() {

    PER_CODIGO = $('#PER_CODIGO').val();
    PER_NOMBRES = $('#PER_NOMBRESU').val();
    PER_USUARIO = $('#PER_USUARIOU').val();
    PER_CORREO = $('#PER_CORREOU').val();
    PER_CONTRASENA = $('#PER_CONTRASENAU').val();


    cadena = "PER_CODIGO=" + PER_CODIGO +
        "&PER_NOMBRES=" + PER_NOMBRES +
        "&PER_USUARIO=" + PER_USUARIO +
        "&PER_CORREO=" + PER_CORREO +
        "&PER_CONTRASENA=" + PER_CONTRASENA;

    $.ajax({
        type: "POST",
        url: "../admin/action/up_usuario.php",
        data: cadena,
        success: function (r) {
            if (r!==1) {
                $('#tabla').load('../componentes/tabla_usuarios.php');
                alertify.success("Actualizado con exito :)");
                setTimeout('document.location.reload()', 500);
            } else {
                alertify.error("Datos incompletos :(");
            }
        }
    });
}

function preguntarSiNo(PER_CODIGO) {
    alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?',
        function () { eliminardatos(PER_CODIGO) },
        function () { alertify.error('Cancelado') });
}

function eliminardatos(PER_CODIGO) {

    cadena = "PER_CODIGO=" + PER_CODIGO;

    $.ajax({
        type: "POST",
        url: "../admin/action/del_usuario.php",
        data: cadena,
        success: function (r) {
            if (r !== 1) {
                $('#tabla').load('../componentes/tabla_usuarios.php');
                alertify.success("Eliminado con exito :)")
                setTimeout('document.location.reload()', 500);
            } else {
                alertify.error("Datos incompletos :(");
            }
        }
    });
}


function agregardatostecnico(TEC_NOMBRES, TEC_USUARIO, TEC_CARGO, TEC_CORREO){

    cadena = "TEC_NOMBRES=" + TEC_NOMBRES +
        "&TEC_USUARIO=" + TEC_USUARIO +
        "&TEC_CARGO=" + TEC_CARGO +
        "&TEC_CORREO=" + TEC_CORREO;

    $.ajax({
        type: "POST",
        url: "../admin/action/add_tecnico.php",
        data: cadena,
        success: function (r) {
            if (r!==1) {
                $('#tabla').load('../componentes/tabla_tecnicos.php');
                alertify.success("Agregado con exito :)");
                setTimeout('document.location.reload()', 500);
            } else {
                alertify.error("Datos incompletos :(");
            }
        }

    });
}

function agregaformtecnico(datostecnico) {

    dt = datostecnico.split('||');

    $('#TEC_CODIGO').val(dt[0]);
    $('#TEC_NOMBRESU').val(dt[1]);
    $('#TEC_USUARIOU').val(dt[2]);
    $('#TEC_CONTRASENAU').val(dt[3]);
    $('#TEC_CARGOU').val(dt[4]);
    $('#TEC_CORREOU').val(dt[5]);
    

}

function actualizadatostecnico() {

    TEC_CODIGO = $('#TEC_CODIGO').val();
    TEC_NOMBRES = $('#TEC_NOMBRESU').val();
    TEC_USUARIO = $('#TEC_USUARIOU').val();
    TEC_CONTRASENA = $('#TEC_CONTRASENAU').val();
    TEC_CARGO = $('#TEC_CARGOU').val();
    TEC_CORREO = $('#TEC_CORREOU').val();
    
    cadena = "TEC_CODIGO=" + TEC_CODIGO +
        "&TEC_NOMBRES=" + TEC_NOMBRES +
        "&TEC_USUARIO=" + TEC_USUARIO +
        "&TEC_CORREO=" + TEC_CORREO +
        "&TEC_CARGO=" + TEC_CARGO +
        "&TEC_CONTRASENA=" + TEC_CONTRASENA;
    $.ajax({
        type: "POST",
        url: "../admin/action/up_tecnico.php",
        data: cadena,
        success: function (r) {
            if (r!==1) {
                $('#tabla').load('../componentes/tabla_tecnicos.php');
                alertify.success("Actualizado con exito :)");
                setTimeout('document.location.reload()', 500);
            } else {
                alertify.error("Datos incompletos :(");
            }
        }
    });
}

function preguntarSiNotecnico(TEC_CODIGO) {
    alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?',
        function () { eliminardatostecnico(TEC_CODIGO) },
        function () { alertify.error('Cancelado') });
}

function eliminardatostecnico(TEC_CODIGO) {

    cadena = "TEC_CODIGO=" + TEC_CODIGO;

    $.ajax({
        type: "POST",
        url: "../admin/action/del_tecnico.php",
        data: cadena,
        success: function (r) {
            if (r !== 1) {
                $('#tabla').load('../componentes/tabla_tecnicos.php');
                alertify.success("Eliminado con exito :)")
                setTimeout('document.location.reload()', 500);
            } else {
                alertify.error("Datos incompletos :(");
            }
        }
    });
}

function agregardatosdepartamento(DEP_DETALLE) {

    cadena = "DEP_DETALLE=" + DEP_DETALLE;

    $.ajax({
        type: "POST",
        url: "../admin/action/add_departamento.php",
        data: cadena,
        success: function (r) {
            if (r !== 1) {
                $('#tabla').load('../componentes/tabla_departamentos.php');
                alertify.success("Agregado con exito :)");
                setTimeout('document.location.reload()', 500);
            } else {
                alertify.error("Datos incompletos :(");
            }
        }

    });
}

function agregaformdepartamento(datosdepartamento) {

    dp = datosdepartamento.split('||');

    $('#DEP_CODIGO').val(dp[0]);
    $('#DEP_DETALLEU').val(dp[1]);

}

function actualizadatosdepartamento() {

    DEP_CODIGO = $('#DEP_CODIGO').val();
    DEP_DETALLE = $('#DEP_DETALLEU').val();

    cadena = "DEP_CODIGO=" + DEP_CODIGO +
        "&DEP_DETALLE=" + DEP_DETALLE;

    $.ajax({
        type: "POST",
        url: "../admin/action/up_departamento.php",
        data: cadena,
        success: function (r) {
            if (r !== 1) {
                $('#tabla').load('../componentes/tabla_departamento.php');
                alertify.success("Actualizado con exito :)");
                setTimeout('document.location.reload()', 500);
            } else {
                alertify.error("Datos incompletos :(");
            }
        }
    });
}

function preguntarSiNodepartamento(DEP_CODIGO) {
    alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?',
        function () { eliminardatosdepartamento(DEP_CODIGO) },
        function () { alertify.error('Cancelado') });
}

function eliminardatosdepartamento(DEP_CODIGO) {

    cadena = "DEP_CODIGO=" + DEP_CODIGO;

    $.ajax({
        type: "POST",
        url: "../admin/action/del_departamento.php",
        data: cadena,
        success: function (r) {
            if (r !== 1) {
                $('#tabla').load('../componentes/tabla_departamentos.php');
                alertify.success("Eliminado con exito :)")
                setTimeout('document.location.reload()', 500);
            } else {
                alertify.error("Datos incompletos :(");
            }
        }
    });
}

function agregardatosticket(PER_CODIGO, TI_FECHA, TI_DETALLEPROBLEMA, TI_DETALLESOLUCION) {

    cadena = "PER_CODIGO=" + PER_CODIGO +
            "&TI_FECHA=" + TI_FECHA +
            "&TI_DETALLEPROBLEMA=" + TI_DETALLEPROBLEMA +
            "&TI_DETALLESOLUCION=" + TI_DETALLESOLUCION;

    $.ajax({
        type: "POST",
        url: "action/add_ticket.php",
        data: cadena,
        success: function (r) {
            if (r!==1) {
                $('#tabla').load('tabla_ticket.php');
                alertify.success("Agregado con exito :)");
                setTimeout('document.location.reload()', 500);
            } else {
                alertify.error("Datos incompletos :(");
            }
        }

    });
}

function agregaformticket(datosticket) {

    dt = datosticket.split('||');

    $('#TI_CODIGO').val(dt[0]);
    $('#PER_CODIGOU').val(dt[1]);
    $('#TI_FECHAU').val(dt[2]);
    $('#TI_DETALLEPROBLEMAU').val(dt[3]);
    $('#TI_DETALLESOLUCIONU').val(dt[4]);

}

function agregaformticket2(datosticket) {

  dt = datosticket.split("||");

  $("#TI_CODIGO").val(dt[0]);
  $("#TI_FECHAU").val(dt[1]);
  $("#TI_DETALLEPROBLEMAU").val(dt[2]);
}

function actualizaticket() {

  TI_CODIGO = $("#TI_CODIGO").val();
  TI_FECHA = $("#TI_FECHAU").val();
  TI_DETALLEPROBLEMA = $("#TI_DETALLEPROBLEMAU").val();

  cadena =  "TI_CODIGO=" + TI_CODIGO +
            "&TI_FECHA=" + TI_FECHA +
            "&TI_DETALLEPROBLEMA=" + TI_DETALLEPROBLEMA;

  $.ajax({
    type: "POST",
    url: "action/up_ticket.php",
    data: cadena,
    success: function (r) {
      if (r !== 1) {
        $("#tabla").load("tabla_ticket.php");
        alertify.success("Actualizado con exito :)");
        setTimeout("document.location.reload()", 500);
      } else {
        alertify.error("Datos incompletos :(");
      }
    }
  });
}

function preguntarSiNoticket(TI_CODIGO) {
    alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?',
        function () { eliminarticket(TI_CODIGO) },
        function () { alertify.error('Cancelado') });
}

function eliminarticket(TI_CODIGO) {

    cadena = "TI_CODIGO=" + TI_CODIGO;

    $.ajax({
        type: "POST",
        url: "action/del_ticket.php",
        data: cadena,
        success: function (r) {
            if (r !== 1) {
                $('#tabla').load('tabla_ticket.php');
                alertify.success("Eliminado con exito :)")
                setTimeout('document.location.reload()', 500);
            } else {
                alertify.error("Datos incompletos :(");
            }
        }
    });
}

function solucionticketasignado() {

    TI_CODIGO = $('#TI_CODIGO').val();
    PER_CODIGO = $('#PER_CODIGOU').val();
    TI_DETALLESOLUCION = $('#TI_DETALLESOLUCIONU').val();

    cadena = "TI_CODIGO=" + TI_CODIGO +
            "&PER_CODIGO=" + PER_CODIGO +
            "&TI_DETALLESOLUCION=" + TI_DETALLESOLUCION;

    $.ajax({
        type: "POST",
        url: "action/solucion_ticket.php",
        data: cadena,
        success: function (r) {
            if (r !== 1) {
                $('#tabla').load('tabla_tickets_asignados.php');
                alertify.success("Actualizado con exito :)");
                setTimeout('document.location.reload()', 500);
            } else {
                alertify.error("Datos incompletos :(");
            }
        }
    });
}

function asignarticket(TI_CODIGO, TEC_CODIGO, AT_FECHA, AT_DESCRIPCION) {

    cadena = "TI_CODIGO=" + TI_CODIGO +
        "&TEC_CODIGO=" + TEC_CODIGO +
        "&AT_FECHA=" + AT_FECHA +
        "&AT_DESCRIPCION=" + AT_DESCRIPCION;

    $.ajax({
        type: "POST",
        url: "../admin/action/asignar_ticket.php",
        data: cadena,
        success: function (r) {
            if (r!==1) {
                $('#tabla').load('tabla_ticket.php');
                alertify.success("Agregado con exito :)");
                setTimeout('document.location.reload()', 500);
            } else {
                alertify.error("Datos incompletos :(");
            }
        }

    });
}

function agregaform3(datosticket) {

    dta = datosticket.split("||");

    $("#AT_CODIGO").val(dta[0]);
    $("#TEC_CODIGOU").val(dta[1]);
    $("#AT_FECHAU").val(dta[2]);
    $("#AT_DESCRIPCIONU").val(dta[3]);

}

function actualizaticketasignado() {

    AT_CODIGO = $("#AT_CODIGO").val();
    TEC_CODIGO = $("#TEC_CODIGOU").val();
    AT_FECHA = $("#AT_FECHAU").val();
    AT_DESCRIPCION = $("#AT_DESCRIPCIONU").val();

    cadena = "AT_CODIGO=" + AT_CODIGO +
            "&TEC_CODIGO=" + TEC_CODIGO +
            "&AT_FECHA=" + AT_FECHA +
            "&AT_DESCRIPCION=" + AT_DESCRIPCION;

    $.ajax({
        type: "POST",
        url: "../admin/action/up_ticketasignado.php",
        data: cadena,
        success: function (r) {
            if (r !== 1) {
                $("#tabla").load("tabla_asignar_ticket.php");
                alertify.success("Actualizado con exito :)");
                setTimeout("document.location.reload()", 500);
            } else {
                alertify.error("Datos incompletos :(");
            }
        }
    });
}

function preguntarSiNoCPU(C_CODIGO,C_ESTADO) {
    alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?',
        function () { eliminarcpu(C_CODIGO,C_ESTADO) },
        function () { alertify.error('Cancelado') });
}

function eliminarcpu(C_CODIGO,C_ESTADO) {

    cadena = "C_CODIGO=" + C_CODIGO +
            "&C_ESTADO=" + C_ESTADO;

    $.ajax({
        type: "POST",
        url: "../admin/action/del_cpu.php",
        data: cadena,
        success: function (r) {
            if (r !== 1) {
                $('#tabla').load('../componentes/tabla_cpu.php');
                alertify.success("Eliminado con exito :)")
                setTimeout('document.location.reload()', 500);
            } else {
                alertify.error("No se puede eliminar porque ya esta en uso :(");
            }
        }
    });
}




