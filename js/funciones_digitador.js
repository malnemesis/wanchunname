
function agregarcpu(EST_CODIGO, C_TIPO, C_MARCA, C_MODELO, C_SERIE, C_PROCESADOR, C_NUMPROCESADOR, C_RAM, C_NUMMODULO, C_DISCODURO, C_NUMDISCO, C_CODACTFIJ, C_OBSERVACION) {

    cadena = "EST_CODIGO=" + EST_CODIGO +
            "&C_TIPO=" + C_TIPO +
            "&C_MARCA=" + C_MARCA +
            "&C_MODELO=" + C_MODELO +
            "&C_SERIE=" + C_SERIE +
            "&C_PROCESADOR=" + C_PROCESADOR +
            "&C_NUMPROCESADOR=" + C_NUMPROCESADOR +
            "&C_RAM=" + C_RAM +
            "&C_NUMMODULO=" + C_NUMMODULO +
            "&C_DISCODURO=" + C_DISCODURO +
            "&C_NUMDISCO=" + C_NUMDISCO +
            "&C_CODACTFIJ=" + C_CODACTFIJ +
            "&C_OBSERVACION=" + C_OBSERVACION;

    $.ajax({
        type: "POST",
        url: "../digitador/action/add_cpu.php",
        data: cadena,
        success: function (r) {
            if (r!==1) {
                $('#tabla').load('../componentes_dig/tabla_cpu.php');
                alertify.success("Agregado con exito :)");
                setTimeout('document.location.reload()', 500);
            } else {
                alertify.error("Datos incompletos :(");
            }
        }

    });
}


function agregarmonitor(EST_CODIGO, MON_MARCA, MON_MODELO, MON_SERIE, MON_CODACTFIJ, MON_OBSERVACION){

    cadena = "EST_CODIGO=" + EST_CODIGO +
        "&MON_MARCA=" + MON_MARCA +
        "&MON_MODELO=" + MON_MODELO +
        "&MON_SERIE=" + MON_SERIE +
        "&MON_CODACTFIJ=" + MON_CODACTFIJ +
        "&MON_OBSERVACION=" + MON_OBSERVACION;

    $.ajax({
        type: "POST",
        url: "../digitador/action/add_monitor.php",
        data: cadena,
        success: function (r) {
            if (r!==1) {
                $('#tabla').load('../componentes_dig/tabla_monitor.php');
                alertify.success("Agregado con exito :)");
                setTimeout('document.location.reload()', 500);
            } else {
                alertify.error("Datos incompletos :(");
            }
        }

    });
}

function agregarteclado(EST_CODIGO, KEY_MARCA, KEY_MODELO, KEY_SERIE, KEY_CODACTFIJ, KEY_OBSERVACION) {

    cadena = "EST_CODIGO=" + EST_CODIGO +
        "&KEY_MARCA=" + KEY_MARCA +
        "&KEY_MODELO=" + KEY_MODELO +
        "&KEY_SERIE=" + KEY_SERIE +
        "&KEY_CODACTFIJ=" + KEY_CODACTFIJ +
        "&KEY_OBSERVACION=" + KEY_OBSERVACION;

    $.ajax({
        type: "POST",
        url: "../digitador/action/add_keyboard.php",
        data: cadena,
        success: function (r) {
            if (r !== 1) {
                $('#tabla').load('../componentes_dig/tabla_keyboard.php');
                alertify.success("Agregado con exito :)");
                setTimeout('document.location.reload()', 500);
            } else {
                alertify.error("Datos incompletos :(");
            }
        }

    });
}


function agregarmouse(EST_CODIGO, MOU_MARCA, MOU_MODELO, MOU_SERIE, MOU_CODACTFIJ, MOU_OBSERVACION) {

    cadena = "EST_CODIGO=" + EST_CODIGO +
        "&MOU_MARCA=" + MOU_MARCA +
        "&MOU_MODELO=" + MOU_MODELO +
        "&MOU_SERIE=" + MOU_SERIE +
        "&MOU_CODACTFIJ=" + MOU_CODACTFIJ +
        "&MOU_OBSERVACION=" + MOU_OBSERVACION;

    $.ajax({
        type: "POST",
        url: "../digitador/action/add_mouse.php",
        data: cadena,
        success: function (r) {
            if (r !== 1) {
                $('#tabla').load('../componentes_dig/tabla_mouse.php');
                alertify.success("Agregado con exito :)");
                setTimeout('document.location.reload()', 500);
            } else {
                alertify.error("Datos incompletos :(");
            }
        }

    });
}


function agregarups(EST_CODIGO, U_MARCA, U_MODELO, U_SERIE, U_CAPACIDADCARGA, U_NUMTOMAS, U_CODACTFIJ, U_OBSERVACION) {

    cadena = "EST_CODIGO=" + EST_CODIGO +
        "&U_MARCA=" + U_MARCA +
        "&U_MODELO=" + U_MODELO +
        "&U_SERIE=" + U_SERIE +
        "&U_CAPACIDADCARGA=" + U_CAPACIDADCARGA +
        "&U_NUMTOMAS=" + U_NUMTOMAS +
        "&U_CODACTFIJ=" + U_CODACTFIJ +
        "&U_OBSERVACION=" + U_OBSERVACION;

    $.ajax({
        type: "POST",
        url: "../digitador/action/add_ups.php",
        data: cadena,
        success: function (r) {
            if (r!==1) {
                $('#tabla').load('../componentes_dig/tabla_ups.php');
                alertify.success("Agregado con exito :)");
                setTimeout('document.location.reload()', 500);
            } else {
                alertify.error("Datos incompletos :(");
            }
        }

    });
}


function agregaimp(EST_CODIGO, IMP_MARCA, IMP_MODELO, IMP_SERIE, IMP_CONSUMIBLES, IMP_CONECTIVIDAD, IMP_CODACTFIJ, IMP_OBSERVACION) {

    cadena = "EST_CODIGO=" + EST_CODIGO +
        "&IMP_MARCA=" + IMP_MARCA +
        "&IMP_MODELO=" + IMP_MODELO +
        "&IMP_SERIE=" + IMP_SERIE +
        "&IMP_CONSUMIBLES=" + IMP_CONSUMIBLES +
        "&IMP_CONECTIVIDAD=" + IMP_CONECTIVIDAD +
        "&IMP_CODACTFIJ=" + IMP_CODACTFIJ +
        "&IMP_OBSERVACION=" + IMP_OBSERVACION;

    $.ajax({
        type: "POST",
        url: "../digitador/action/add_impresora.php",
        data: cadena,
        success: function (r) {
            if (r!==1) {
                $('#tabla').load('../componentes_dig/tabla_impresora.php');
                alertify.success("Agregado con exito :)");
                setTimeout('document.location.reload()', 500);
            } else {
                alertify.error("Datos incompletos :(");
            }
        }

    });
}

function agregardr(EST_CODIGO, DR_MARCA, DR_MODELO, DR_SERIE, DR_TIPO, DR_NUMPUERTOSLAN, DR_NUMPUERTOSSFP, DR_CONECTIVIDADWIFI, DR_CODACTFIJ, DR_OBSERVACION){

    cadena = "EST_CODIGO=" + EST_CODIGO +
        "&DR_MARCA=" + DR_MARCA +
        "&DR_MODELO=" + DR_MODELO +
        "&DR_SERIE=" + DR_SERIE +
        "&DR_TIPO=" + DR_TIPO +
        "&DR_NUMPUERTOSLAN=" + DR_NUMPUERTOSLAN +
        "&DR_NUMPUERTOSSFP=" + DR_NUMPUERTOSSFP +
        "&DR_CONECTIVIDADWIFI=" + DR_CONECTIVIDADWIFI +
        "&DR_CODACTFIJ=" + DR_CODACTFIJ +
        "&DR_OBSERVACION=" + DR_OBSERVACION ;

    $.ajax({
        type: "POST",
        url: "../digitador/action/add_dispositivo.php",
        data: cadena,
        success: function (r) {
            if (r !== 1) {
                $('#tabla').load('../componentes_dig/tabla_dispositivosred.php');
                alertify.success("Agregado con exito :)");
                setTimeout('document.location.reload()', 500);
            } else {
                alertify.error("Datos incompletos :(");
            }
        }

    });
}