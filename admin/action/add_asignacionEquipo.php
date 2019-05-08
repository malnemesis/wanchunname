<?php
include 'check-login.php';
include '../../config/conexion.php';

$pe_codigo = $_POST['pe_codigo'];
$de_codigo = $_POST['de_codigo'];
$cp_codigo = $_POST['cp_codigo'];
$mon_codigo = $_POST['mon_codigo'];
$ke_codigo = $_POST['ke_codigo'];
$mo_codigo = $_POST['mo_codigo'];
$u_codigo = $_POST['u_codigo'];
$im_codigo = $_POST['im_codigo'];
$dr_codigo = $_POST['dr_codigo'];
$observacion = $_POST['observacion'];

if ($ke_codigo==1 or $ke_codigo==2) {
    $key_cod=0;}
  else{
    $key_cod=$ke_codigo;}
if ($im_codigo==1 or $im_codigo==2) {
    $imp_cod=0;}
  else{
    $imp_cod=$im_codigo;}
if ($cp_codigo==1 or $cp_codigo==2) {
    $cpu_cod=0;}
  else{
    $cpu_cod=$cp_codigo;}
if ($u_codigo==1 or $u_codigo==2) {
    $u_cod=0;}
  else{
    $u_cod=$u_codigo;}
if ($mo_codigo==1 or $mo_codigo==2) {
    $mou_cod=0;}
  else{
    $mou_cod=$mo_codigo;}
if ($mon_codigo==1 or $mon_codigo==2) {
    $mon_cod=0;}
  else{
    $mon_cod=$mon_codigo;}
if ($dr_codigo==1 or $dr_codigo==2) {
    $dr_cod=0;}
  else{
    $dr_cod=$dr_codigo;}
$sql  = "INSERT INTO equipo (KEY_CODIGO, DEP_CODIGO, IMP_CODIGO, C_CODIGO, U_CODIGO, MOU_CODIGO, PER_CODIGO, MON_CODIGO, DR_CODIGO, EQU_DETALLE) VALUES ('$ke_codigo','$de_codigo','$im_codigo','$cp_codigo','$u_codigo','$mo_codigo','$pe_codigo','$mon_codigo','$dr_codigo','$observacion')";
if ($conn->query($sql) === TRUE) {
            include '../../config/conexion.php';
            $sql1 = "UPDATE keyboard SET EST_CODIGO=3 WHERE KEY_CODIGO='$key_cod'";
            $sql2 = "UPDATE impresora SET EST_CODIGO=3 WHERE IMP_CODIGO='$imp_cod'";
            $sql3 = "UPDATE cpu SET EST_CODIGO=3 WHERE C_CODIGO='$cpu_cod'";
            $sql4 = "UPDATE ups SET EST_CODIGO=3 WHERE U_CODIGO='$u_cod'";
            $sql5 = "UPDATE mouse SET EST_CODIGO=3 WHERE MOU_CODIGO='$mou_cod'";
            $sql6 = "UPDATE monitor SET EST_CODIGO=3 WHERE MON_CODIGO='$mon_cod'";
            $sql7 = "UPDATE dispositivo_red SET EST_CODIGO=3 WHERE DR_CODIGO='$dr_cod'";
}
if ($conn->query($sql1) === TRUE and $conn->query($sql2) === TRUE and $conn->query($sql3) === TRUE and $conn->query($sql4) === TRUE and $conn->query($sql5) === TRUE and $conn->query($sql6) === TRUE and $conn->query($sql7) === TRUE){
            header("location:../asignacion_equipos.php");
}
$conn->close();
?>

