function asignaequipo(pe_codigo, de_codigo, cp_codigo, mon_codigo, ke_codigo, mo_codigo, u_codigo, im_codigo, dr_codigo, observacion) {
    cadena = "pe_codigo=" + pe_codigo +
             "&de_codigo=" + de_codigo +
             "&cp_codigo=" + cp_codigo +
             "&mon_codigo=" + mon_codigo +
             "&ke_codigo=" + ke_codigo +
             "&mo_codigo=" + mo_codigo +
             "&u_codigo=" + u_codigo +
             "&im_codigo=" + im_codigo +
             "&dr_codigo=" + dr_codigo +
             "&observacion=" + observacion;
    $.ajax({
        type: "POST",
        url: "../admin/action/add_asignacionEquipo.php",
        data: cadena,
        success: function (r) {
            if (r!==1) {
                $('#tabla').load('../componentes/tabla_equipos_asignados.php');
                alertify.success("Agregado con exito :)");
                setTimeout('document.location.reload()', 500);
            } else {
                alertify.error("Datos incompletos :(");
            }
        }
    });
}

function agregaformasignados(datosequipo) {
    dt = datosequipo.split('||');
    $('#EQU_CODIGO').val(dt[0]);
    $('#persona').val(dt[1]);
    $('#departamento').val(dt[2]);
    $('#cpu').val(dt[3]);
    $('#monitor').val(dt[4]);
    $('#keyboard').val(dt[5]);
    $('#mouse').val(dt[6]);
    $('#ups').val(dt[7]);
    $('#impresora').val(dt[8]);
    $('#dispositivo_red').val(dt[9]);
    $('#observacionu').val(dt[10]);
}
function acualizaasigtnacionequipos(pe_codigou,de_codigou,cp_codigou,mon_codigou,ke_codigou,mo_codigou,u_codigou,im_codigou,dr_codigou){     
        EQU_CODIGO=$('#EQU_CODIGO').val();
        persona=$('#persona').val();
        departamento=$('#departamento').val();
        cpu=$('#cpu').val();
        monitor=$('#monitor').val();
        keyboard=$('#keyboard').val();
        mouse=$('#mouse').val();
        ups=$('#ups').val();
        impresora=$('#impresora').val();
        dispositivo_red=$('#dispositivo_red').val();
        observacion=$('#observacionu').val();    
        
        cadena = 
            "&pe_codigou=" + pe_codigou +
            "&de_codigou=" + de_codigou +
            "&cp_codigou=" + cp_codigou +
            "&mon_codigou=" + mon_codigou +
            "&ke_codigou=" + ke_codigou +
            "&mo_codigou=" + mo_codigou + 
            "&u_codigou=" + u_codigou +
            "&im_codigou=" + im_codigou + 
            "&dr_codigou=" + dr_codigou +
            "&EQU_CODIGO=" + EQU_CODIGO +
            "&persona=" + persona +
            "&departamento=" + departamento +
            "&cpu=" + cpu +
            "&monitor=" + monitor +
            "&keyboard=" + keyboard +
            "&mouse=" + mouse + 
            "&ups=" + ups +
            "&impresora=" + impresora + 
            "&dispositivo_red=" + dispositivo_red +
            "&observacion=" + observacion;
    $.ajax({
        type: "POST",
        url: "../admin/action/up_asignacionEquipo.php",
        data: cadena,
        success: function (r) {
            if (r!==1) {
                $('#tabla').load('../componentes/tabla_equipos_asignados.php');
                alertify.success("Actualizacion realizada con exito :)");
                setTimeout('document.location.reload()', 500);
            } else {
                alertify.error("Datos incompletos :(");
            }
        }
    });
}


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
        url: "../admin/action/add_cpu.php",
        data: cadena,
        success: function (r) {
            if (r!==1) {
                $('#tabla').load('../componentes/tabla_cpu.php');
                alertify.success("Agregado con exito :)");
                setTimeout('document.location.reload()', 500);
            } else {
                alertify.error("Datos incompletos :(");
            }
        }

    });
}

function agregaformcpu(datos) {

    d = datos.split('||');

    $('#C_CODIGO').val(d[0]);
    $('#EST_CODIGOU').val(d[1]);
    $('#C_TIPOU').val(d[2]);
    $('#C_MARCAU').val(d[3]);
    $('#C_MODELOU').val(d[4]);
    $('#C_SERIEU').val(d[5]);
    $('#C_PROCESADORU').val(d[6]);
    $('#C_NUMPROCESADORU').val(d[7]);
    $('#C_RAMU').val(d[8]);
    $('#C_NUMMODULOU').val(d[9]);
    $('#C_DISCODUROU').val(d[10]);
    $('#C_NUMDISCOU').val(d[11]);
    $('#C_CODACTFIJU').val(d[12]);
    $('#C_OBSERVACIONU').val(d[13]);

}

function actualizacpu() {

    C_CODIGO = $('#C_CODIGO').val();
    EST_CODIGO = $('#EST_CODIGOU').val();
    C_TIPO = $('#C_TIPOU').val();
    C_MARCA = $('#C_MARCAU').val();
    C_MODELO = $('#C_MODELOU').val();
    C_SERIE = $('#C_SERIEU').val();
    C_PROCESADOR = $('#C_PROCESADORU').val();
    C_NUMPROCESADOR = $('#C_NUMPROCESADORU').val();
    C_RAM = $('#C_RAMU').val();
    C_NUMMODULO = $('#C_NUMMODULOU').val();
    C_DISCODURO = $('#C_DISCODUROU').val();
    C_NUMDISCO = $('#C_NUMDISCOU').val();
    C_CODACTFIJ = $('#C_CODACTFIJU').val();
    C_OBSERVACION = $('#C_OBSERVACIONU').val();

    cadena = "C_CODIGO=" + C_CODIGO + "&EST_CODIGO=" + EST_CODIGO + "&C_TIPO=" + C_TIPO +
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
        url: "../admin/action/up_cpu.php",
        data: cadena,
        success: function (r) {
            if (r!==1) {
                $('#tabla').load('../componentes/tabla_cpu.php');
                alertify.success("Actualizado con exito :)");
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
        url: "../admin/action/add_monitor.php",
        data: cadena,
        success: function (r) {
            if (r!==1) {
                $('#tabla').load('../componentes/tabla_monitor.php');
                alertify.success("Agregado con exito :)");
                setTimeout('document.location.reload()', 500);
            } else {
                alertify.error("Datos incompletos :(");
            }
        }

    });
}

function agregaformmonitor(datosm) {

    dm = datosm.split('||');

    $('#MON_CODIGO').val(dm[0]);
    $('#EST_CODIGOU').val(dm[1]);
    $('#MON_MARCAU').val(dm[2]);
    $('#MON_MODELOU').val(dm[3]);
    $('#MON_SERIEU').val(dm[4]);
    $('#MON_CODACTFIJU').val(dm[5]);
    $('#MON_OBSERVACIONU').val(dm[6]);

}

function actualizamonitor() {

    MON_CODIGO = $('#MON_CODIGO').val();
    EST_CODIGO = $('#EST_CODIGOU').val();
    MON_MARCA= $('#MON_MARCAU').val();
    MON_MODELO = $('#MON_MODELOU').val();
    MON_SERIE = $('#MON_SERIEU').val();
    MON_CODACTFIJ = $('#MON_CODACTFIJU').val();
    MON_OBSERVACION = $('#MON_OBSERVACIONU').val();

    cadena = "MON_CODIGO=" + MON_CODIGO +
        "&EST_CODIGO=" + EST_CODIGO +
        "&MON_MARCA=" + MON_MARCA +
        "&MON_MODELO=" + MON_MODELO +
        "&MON_SERIE=" + MON_SERIE +
        "&MON_CODACTFIJ=" + MON_CODACTFIJ +
        "&MON_OBSERVACION=" + MON_OBSERVACION;
    $.ajax({
        type: "POST",
        url: "../admin/action/up_monitor.php",
        data: cadena,
        success: function (r) {
            if (r!==1) {
                $('#tabla').load('../componentes/tabla_monitor.php');
                alertify.success("Actualizado con exito :)");
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
        url: "../admin/action/add_keyboard.php",
        data: cadena,
        success: function (r) {
            if (r !== 1) {
                $('#tabla').load('../componentes/tabla_keyboard.php');
                alertify.success("Agregado con exito :)");
                setTimeout('document.location.reload()', 500);
            } else {
                alertify.error("Datos incompletos :(");
            }
        }

    });
}

function agregaformteclado(datost) {

    dt = datost.split('||');

    $('#KEY_CODIGO').val(dt[0]);
    $('#EST_CODIGOU').val(dt[1]);
    $('#KEY_MARCAU').val(dt[2]);
    $('#KEY_MODELOU').val(dt[3]);
    $('#KEY_SERIEU').val(dt[4]);
    $('#KEY_CODACTFIJU').val(dt[5]);
    $('#KEY_OBSERVACIONU').val(dt[6]);

}

function actualizateclado() {

    KEY_CODIGO = $('#KEY_CODIGO').val();
    EST_CODIGO = $('#EST_CODIGOU').val();
    KEY_MARCA = $('#KEY_MARCAU').val();
    KEY_MODELO = $('#KEY_MODELOU').val();
    KEY_SERIE = $('#KEY_SERIEU').val();
    KEY_CODACTFIJ = $('#KEY_CODACTFIJU').val();
    KEY_OBSERVACION = $('#KEY_OBSERVACIONU').val();

    cadena = "KEY_CODIGO=" + KEY_CODIGO +
        "&EST_CODIGO=" + EST_CODIGO +
        "&KEY_MARCA=" + KEY_MARCA +
        "&KEY_MODELO=" + KEY_MODELO +
        "&KEY_SERIE=" + KEY_SERIE +
        "&KEY_CODACTFIJ=" + KEY_CODACTFIJ +
        "&KEY_OBSERVACION=" + KEY_OBSERVACION;
    $.ajax({
        type: "POST",
        url: "../admin/action/up_keyboard.php",
        data: cadena,
        success: function (r) {
            if (r !== 1) {
                $('#tabla').load('../componentes/tabla_keyboard.php');
                alertify.success("Actualizado con exito :)");
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
        url: "../admin/action/add_mouse.php",
        data: cadena,
        success: function (r) {
            if (r !== 1) {
                $('#tabla').load('../componentes/tabla_mouse.php');
                alertify.success("Agregado con exito :)");
                setTimeout('document.location.reload()', 500);
            } else {
                alertify.error("Datos incompletos :(");
            }
        }

    });
}

function agregaformmouse(datosm) {

    dm = datosm.split('||');

    $('#MOU_CODIGO').val(dm[0]);
    $('#EST_CODIGOU').val(dm[1]);
    $('#MOU_MARCAU').val(dm[2]);
    $('#MOU_MODELOU').val(dm[3]);
    $('#MOU_SERIEU').val(dm[4]);
    $('#MOU_CODACTFIJU').val(dm[5]);
    $('#MOU_OBSERVACIONU').val(dm[6]);

}

function actualizamouse() {

    MOU_CODIGO = $('#MOU_CODIGO').val();
    EST_CODIGO = $('#EST_CODIGOU').val();
    MOU_MARCA = $('#MOU_MARCAU').val();
    MOU_MODELO = $('#MOU_MODELOU').val();
    MOU_SERIE = $('#MOU_SERIEU').val();
    MOU_CODACTFIJ = $('#MOU_CODACTFIJU').val();
    MOU_OBSERVACION = $('#MOU_OBSERVACIONU').val();

    cadena = "MOU_CODIGO=" + MOU_CODIGO +
        "&EST_CODIGO=" + EST_CODIGO +
        "&MOU_MARCA=" + MOU_MARCA +
        "&MOU_MODELO=" + MOU_MODELO +
        "&MOU_SERIE=" + MOU_SERIE +
        "&MOU_CODACTFIJ=" + MOU_CODACTFIJ +
        "&MOU_OBSERVACION=" + MOU_OBSERVACION;
    $.ajax({
        type: "POST",
        url: "../admin/action/up_mouse.php",
        data: cadena,
        success: function (r) {
            if (r !== 1) {
                $('#tabla').load('../componentes/tabla_mouse.php');
                alertify.success("Actualizado con exito :)");
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
        url: "../admin/action/add_ups.php",
        data: cadena,
        success: function (r) {
            if (r!==1) {
                $('#tabla').load('../componentes/tabla_ups.php');
                alertify.success("Agregado con exito :)");
                setTimeout('document.location.reload()', 500);
            } else {
                alertify.error("Datos incompletos :(");
            }
        }

    });
}

function agregaformups(datosups) {

    dups = datosups.split('||');

    $('#U_CODIGO').val(dups[0]);
    $('#EST_CODIGOU').val(dups[1]);
    $('#U_MARCAU').val(dups[2]);
    $('#U_MODELOU').val(dups[3]);
    $('#U_SERIEU').val(dups[4]);
    $('#U_CAPACIDADCARGAU').val(dups[5]);
    $('#U_NUMTOMASU').val(dups[6]);
    $('#U_CODACTFIJU').val(dups[7]);
    $('#U_OBSERVACIONU').val(dups[8]);

}

function actualizaups() {

    U_CODIGO = $('#U_CODIGO').val();
    EST_CODIGO = $('#EST_CODIGOU').val();
    U_MARCA = $('#U_MARCAU').val();
    U_MODELO = $('#U_MODELOU').val();
    U_SERIE = $('#U_SERIEU').val();
    U_CAPACIDADCARGA = $('#U_CAPACIDADCARGAU').val();
    U_NUMTOMAS = $('#U_NUMTOMASU').val();
    U_CODACTFIJ = $('#U_CODACTFIJU').val();
    U_OBSERVACION = $('#U_OBSERVACIONU').val();

    cadena = "U_CODIGO=" + U_CODIGO +
        "&EST_CODIGO=" + EST_CODIGO +
        "&U_MARCA=" + U_MARCA +
        "&U_MODELO=" + U_MODELO +
        "&U_SERIE=" + U_SERIE +
        "&U_CAPACIDADCARGA=" + U_CAPACIDADCARGA +
        "&U_NUMTOMAS=" + U_NUMTOMAS +
        "&U_CODACTFIJ=" + U_CODACTFIJ +
        "&U_OBSERVACION=" + U_OBSERVACION;

    $.ajax({
        type: "POST",
        url: "../admin/action/up_ups.php",
        data: cadena,
        success: function (r) {
            if (r!==1) {
                $('#tabla').load('../componentes/tabla_ups.php');
                alertify.success("Actualizado con exito :)");
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
        url: "../admin/action/add_impresora.php",
        data: cadena,
        success: function (r) {
            if (r!==1) {
                $('#tabla').load('../componentes/tabla_impresora.php');
                alertify.success("Agregado con exito :)");
                setTimeout('document.location.reload()', 500);
            } else {
                alertify.error("Datos incompletos :(");
            }
        }

    });
}

function agregaformimp(datosimp) {

    dimp = datosimp.split('||');

    $('#IMP_CODIGO').val(dimp[0]);
    $('#EST_CODIGOU').val(dimp[1]);
    $('#IMP_MARCAU').val(dimp[2]);
    $('#IMP_MODELOU').val(dimp[3]);
    $('#IMP_SERIEU').val(dimp[4]);
    $('#IMP_CONSUMIBLESU').val(dimp[5]);
    $('#IMP_CONECTIVIDADU').val(dimp[6]);
    $('#IMP_CODACTFIJU').val(dimp[7]);
    $('#IMP_OBSERVACIONU').val(dimp[8]);

}

function actualizaimp() {

    IMP_CODIGO = $('#IMP_CODIGO').val();
    EST_CODIGO = $('#EST_CODIGOU').val();
    IMP_MARCA = $('#IMP_MARCAU').val();
    IMP_MODELO = $('#IMP_MODELOU').val();
    IMP_SERIE = $('#IMP_SERIEU').val();
    IMP_CONSUMIBLES = $('#IMP_CONSUMIBLESU').val();
    IMP_CONECTIVIDAD = $('#IMP_CONECTIVIDADU').val();
    IMP_CODACTFIJ = $('#IMP_CODACTFIJU').val();
    IMP_OBSERVACION = $('#IMP_OBSERVACIONU').val();

    cadena = "IMP_CODIGO=" + IMP_CODIGO +
        "&EST_CODIGO=" + EST_CODIGO +
        "&IMP_MARCA=" + IMP_MARCA +
        "&IMP_MODELO=" + IMP_MODELO +
        "&IMP_SERIE=" + IMP_SERIE +
        "&IMP_CONSUMIBLES=" + IMP_CONSUMIBLES +
        "&IMP_CONECTIVIDAD=" + IMP_CONECTIVIDAD +
        "&IMP_CODACTFIJ=" + IMP_CODACTFIJ +
        "&IMP_OBSERVACION=" + IMP_OBSERVACION;

    $.ajax({
        type: "POST",
        url: "../admin/action/up_impresora.php",
        data: cadena,
        success: function (r) {
            if (r!==1) {
                $('#tabla').load('../componentes/tabla_impresora.php');
                alertify.success("Actualizado con exito :)");
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
        url: "../admin/action/add_dispositivo.php",
        data: cadena,
        success: function (r) {
            if (r !== 1) {
                $('#tabla').load('../componentes/tabla_dispositivosred.php');
                alertify.success("Agregado con exito :)");
                setTimeout('document.location.reload()', 500);
            } else {
                alertify.error("Datos incompletos :(");
            }
        }

    });
}

function agregarformdr(datosdr) {

    ddr = datosdr.split('||');

    $('#DR_CODIGO').val(ddr[0]);
    $('#EST_CODIGOU').val(ddr[1]);
    $('#DR_MARCAU').val(ddr[2]);
    $('#DR_MODELOU').val(ddr[3]);
    $('#DR_SERIEU').val(ddr[4]);
    $('#DR_TIPOU').val(ddr[5]);
    $('#DR_NUMPUERTOSLANU').val(ddr[6]);
    $('#DR_NUMPUERTOSSFPU').val(ddr[7]);
    $('#DR_CONECTIVIDADWIFIU').val(ddr[8]);
    $('#DR_CODACTFIJU').val(ddr[9]);
    $('#DR_OBSERVACIONU').val(ddr[10]);
}

function actualizardr() {

    DR_CODIGO = $('#DR_CODIGO').val();
    EST_CODIGO = $('#EST_CODIGOU').val();
    DR_MARCA = $('#DR_MARCAU').val();
    DR_MODELO = $('#DR_MODELOU').val();
    DR_SERIE = $('#DR_SERIEU').val();
    DR_TIPO = $('#DR_TIPOU').val();
    DR_NUMPUERTOSLAN = $('#DR_NUMPUERTOSLANU').val();
    DR_NUMPUERTOSSFP = $('#DR_NUMPUERTOSSFPU').val();
    DR_CONECTIVIDADWIFI = $('#DR_CONECTIVIDADWIFIU').val();
    DR_CODACTFIJ = $('#DR_CODACTFIJU').val();
    DR_OBSERVACION = $('#DR_OBSERVACIONU').val();


    cadena = "DR_CODIGO=" + DR_CODIGO +
        "&EST_CODIGO=" + EST_CODIGO +
        "&DR_MARCA=" + DR_MARCA +
        "&DR_MODELO=" + DR_MODELO +
        "&DR_SERIE=" + DR_SERIE +
        "&DR_TIPO=" + DR_TIPO +
        "&DR_NUMPUERTOSLAN=" + DR_NUMPUERTOSLAN +
        "&DR_NUMPUERTOSSFP=" + DR_NUMPUERTOSSFP +
        "&DR_CONECTIVIDADWIFI=" + DR_CONECTIVIDADWIFI +
        "&DR_CODACTFIJ=" + DR_CODACTFIJ +
        "&DR_OBSERVACION=" + DR_OBSERVACION;

    $.ajax({
        type: "POST",
        url: "../admin/action/up_dispositivo.php",
        data: cadena,
        success: function (r) {
            if (r!==1) {
                $('#tabla').load('../componentes/tabla_dispositivosred.php');
                alertify.success("Actualizado con exito :)");
                setTimeout('document.location.reload()', 500);
            } else {
                alertify.error("Datos incompletos :(");
            }
        }
    });
}