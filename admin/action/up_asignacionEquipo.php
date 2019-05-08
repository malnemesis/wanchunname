<?php
include 'check-login.php';
include '../../config/conexion.php';
$pe_codigo = $_POST['pe_codigou'];
$de_codigo = $_POST['de_codigou'];
$cp_codigo = $_POST['cp_codigou'];
$mon_codigo = $_POST['mon_codigou'];  
$ke_codigo = $_POST['ke_codigou'];
$mo_codigo = $_POST['mo_codigou'];
$u_codigo = $_POST['u_codigou'];
$im_codigo = $_POST['im_codigou'];
$dr_codigo = $_POST['dr_codigou'];
$EQU_CODIGO = $_POST['EQU_CODIGO'];
$persona = $_POST['persona'];
$departamento = $_POST['departamento'];
$cpu = $_POST['cpu']; 
$monitor = $_POST['monitor'];
$keyboard = $_POST['keyboard'];
$mouse = $_POST['mouse'];
$ups = $_POST['ups'];
$impresora = $_POST['impresora'];
$dispositivo_red = $_POST['dispositivo_red'];
$observacion = $_POST['observacion'];
if ($pe_codigo==1){$per_cod=0;}
    else{$per_cod=$pe_codigo;}
$sqlper = "UPDATE equipo SET PER_CODIGO='$per_cod' WHERE EQU_CODIGO='$EQU_CODIGO'";
$conn->query($sqlper);
if ($de_codigo==1){$dep_cod=0;}
    else{$dep_cod=$de_codigo;}
$sqldep = "UPDATE equipo SET DEP_CODIGO='$dep_cod' WHERE EQU_CODIGO='$EQU_CODIGO'";
$conn->query($sqldep);    
if ($cp_codigo==1){
        $cpu_cod=0;$cod_cpu=0;$cpu_det=0;}
    else{ 
        if ($cp_codigo==2){
            $cpu_cod=$cp_codigo;$cod_cpu=0;$cpu_det=$cpu;}
        else{
            $cpu_cod=$cp_codigo;$cod_cpu=$cp_codigo;$cpu_det=$cpu;}} 
$sqlcpu1 = "UPDATE cpu SET EST_CODIGO=2 WHERE CONCAT(C_TIPO,', ',C_MARCA,', ',C_MODELO,', ',C_SERIE)='$cpu_det'";
$sqlcpu2 = "UPDATE cpu SET EST_CODIGO=3 WHERE C_CODIGO='$cod_cpu'";
$sqlcpu3 = "UPDATE equipo SET C_CODIGO='$cpu_cod' WHERE EQU_CODIGO='$EQU_CODIGO'";
$conn->query($sqlcpu1);
$conn->query($sqlcpu2);
$conn->query($sqlcpu3);           
if ($mon_codigo==1){
        $mon_cod=0;$cod_mon=0;$mon_det=0;}
    else{
        if ($mon_codigo==2){
            $mon_cod=$mon_codigo;$cod_mon=0;$mon_det=$monitor;}
        else{
            $mon_cod=$mon_codigo;$cod_mon=$mon_codigo;$mon_det=$monitor;}}
$sqlmon1 = "UPDATE monitor SET EST_CODIGO=2 WHERE CONCAT(MON_MARCA,', ',MON_MODELO,', ',MON_SERIE)='$mon_det'";
$sqlmon2 = "UPDATE monitor SET EST_CODIGO=3 WHERE MON_CODIGO='$cod_mon'";
$sqlmon3 = "UPDATE equipo SET MON_CODIGO='$mon_cod' WHERE EQU_CODIGO='$EQU_CODIGO'";
$conn->query($sqlmon1);
$conn->query($sqlmon2);
$conn->query($sqlmon3);           
if ($ke_codigo==1){
        $key_cod=0;$cod_key=0;$key_det=0;}
    else{
        if ($ke_codigo==2){
            $key_cod=$ke_codigo;$cod_key=0;$key_det=$keyboard;}
        else{
            $key_cod=$ke_codigo;$cod_key=$ke_codigo;$key_det=$keyboard;}}
$sqlkey1 = "UPDATE keyboard SET EST_CODIGO=2 WHERE CONCAT(KEY_MARCA,', ',KEY_MODELO,', ',KEY_SERIE)='$key_det'";
$sqlkey2 = "UPDATE keyboard SET EST_CODIGO=3 WHERE KEY_CODIGO='$cod_key'";
$sqlkey3 = "UPDATE equipo SET KEY_CODIGO='$key_cod' WHERE EQU_CODIGO='$EQU_CODIGO'";
$conn->query($sqlkey1);
$conn->query($sqlkey2);
$conn->query($sqlkey3);          
if ($mo_codigo==1){
        $mou_cod=0;$cod_mou=0;$mou_det=0;}
    else{
        if ($mo_codigo==2){
            $mou_cod=$mo_codigo;$cod_mou=0;$mou_det=$mouse;}
        else{
            $mou_cod=$mo_codigo;$cod_mou=$mo_codigo;$mou_det=$mouse;}}
$sqlmou1 = "UPDATE mouse SET EST_CODIGO=2 WHERE CONCAT(MOU_MARCA,', ',MOU_MODELO,', ',MOU_SERIE)='$mou_det'";
$sqlmou2 = "UPDATE mouse SET EST_CODIGO=3 WHERE MOU_CODIGO='$cod_mou'";
$sqlmou3 = "UPDATE equipo SET MOU_CODIGO='$mou_cod' WHERE EQU_CODIGO='$EQU_CODIGO'";
$conn->query($sqlmou1);
$conn->query($sqlmou2);
$conn->query($sqlmou3);     
if ($u_codigo==1){
        $ups_cod=0;$cod_ups=0;$ups_det=0;}
    else{
        if ($u_codigo==2){
            $ups_cod=$u_codigo;$cod_ups=0;$ups_det=$ups;}
        else{
            $ups_cod=$u_codigo;$cod_ups=$u_codigo;$ups_det=$ups;}}
$sqlups1 = "UPDATE ups SET EST_CODIGO=2 WHERE CONCAT(U_MARCA,', ',U_MODELO,', ',U_SERIE)='$ups_det'";
$sqlups2 = "UPDATE ups SET EST_CODIGO=3 WHERE U_CODIGO='$cod_ups'";
$sqlups3 = "UPDATE equipo SET U_CODIGO='$ups_cod' WHERE EQU_CODIGO='$EQU_CODIGO'";
$conn->query($sqlups1);
$conn->query($sqlups2);
$conn->query($sqlups3);        
if ($im_codigo==1){
        $imp_cod=0;$cod_imp=0;$imp_det=0;}
    else{
        if ($im_codigo==2){
            $imp_cod=$im_codigo;$cod_imp=0;$imp_det=$impresora;}
        else{
            $imp_cod=$im_codigo;$cod_imp=$im_codigo;$imp_det=$impresora;}}
$sqlimp1 = "UPDATE impresora SET EST_CODIGO=2 WHERE CONCAT(IMP_MARCA,', ',IMP_MODELO,', ',IMP_SERIE)='$imp_det'";
$sqlimp2 = "UPDATE impresora SET EST_CODIGO=3 WHERE IMP_CODIGO='$cod_imp'";
$sqlimp3 = "UPDATE equipo SET IMP_CODIGO='$imp_cod' WHERE EQU_CODIGO='$EQU_CODIGO'";
$conn->query($sqlimp1);
$conn->query($sqlimp2);
$conn->query($sqlimp3);          
if ($dr_codigo==1){
        $dr_cod=0;$cod_dr=0;$dr_det=0;}
    else{
        if ($dr_codigo==2){
            $dr_cod=$dr_codigo;$cod_dr=0;$dr_det=$dispositivo_red;}
        else{
            $dr_cod=$dr_codigo;$cod_dr=$dr_codigo;$dr_det=$dispositivo_red;}}
$sqldr1 = "UPDATE dispositivo_red SET EST_CODIGO=2 WHERE CONCAT(DR_TIPO,', ',DR_MARCA,', ',DR_MODELO,', ',DR_SERIE)='$dr_det'";
$sqldr2 = "UPDATE dispositivo_red SET EST_CODIGO=3 WHERE DR_CODIGO='$cod_dr'";
$sqldr3 = "UPDATE equipo SET DR_CODIGO='$dr_cod' WHERE EQU_CODIGO='$EQU_CODIGO'";
$conn->query($sqldr1);
$conn->query($sqldr2);
$conn->query($sqldr3);
$sqlobs = "UPDATE equipo SET EQU_DETALLE='$observacion' WHERE EQU_CODIGO='$EQU_CODIGO'";
$conn->query($sqlobs);
header("location:../asignacion_equipos.php");
$conn->close();
?>
