<?php

$mypassword = $_POST['password'];
$myusername = $_POST['username'];
$role = $_POST['role'];
if ($role == "usuario") {
    include '../config/conexion.php';
    $sql = "SELECT * FROM persona WHERE PER_USUARIO = '$myusername' and PER_CONTRASENA = '$mypassword' and PER_TIPO='$role'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            setcookie(loggedin, date("F jS - g:i a"), $seconds);
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['PER_CODIGO'] = $row['PER_CODIGO'];
            $_SESSION['PER_NOMBRES'] = $row['PER_NOMBRES'];	
            $_SESSION['PER_USUARIO'] = $row['PER_USUARIO'];
            $_SESSION['PER_CORREO'] = $row['PER_CORREO'];	
            $_SESSION['PER_USUARIO'] = $myusername;
            $_SESSION['role'] = $role;
            header("location:../usuarios/");
          }
    }else{
        header("location:../?err=Usuario y/o Password no Registrados");
        }
    $conn->close();
}
if ($role == "tecnico") {
    include '../config/conexion.php';
    $sql = "SELECT * FROM tecnico WHERE TEC_USUARIO = '$myusername' and TEC_CONTRASENA = '$mypassword'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            setcookie(loggedin, date("F jS - g:i a"), $seconds);
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['TEC_CODIGO'] = $row['TEC_CODIGO'];
            $_SESSION['TEC_NOMBRES'] = $row['TEC_NOMBRES'];	
            $_SESSION['TEC_USUARIO'] = $row['TEC_USUARIO'];
            $_SESSION['TEC_CARGO'] = $row['TEC_CARGO'];
            $_SESSION['TEC_CORREO'] = $row['TEC_CORREO'];	
            $_SESSION['TEC_USUARIO'] = $myusername;
            $_SESSION['role'] = $role;
            header("location:../tecnicos/");
          }
    }else{
        header("location:../?err=Usuario y/o Password no Registrados");
        }
    $conn->close();
}
if ($role == "digitador"){
    include '../config/conexion.php';
    $sql = "SELECT * FROM persona WHERE PER_USUARIO = '$myusername' and PER_CONTRASENA = '$mypassword' and PER_TIPO='$role'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            setcookie(loggedin, date("F jS - g:i a"), $seconds);
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['SU_CODIGO'] = $row['SU_CODIGO'];
            $_SESSION['SU_NOMBRES'] = $row['SU_NOMBRES'];	
            $_SESSION['SU_USUARIO'] = $row['SU_USUARIO'];
            $_SESSION['SU_CORREO'] = $row['SU_CORREO'];	
            $_SESSION['SU_USUARIO'] = $myusername;
            $_SESSION['role'] = $role;
            header("location:../digitador/");
          }
    }else{
        header("location:../?err=Usuario y/o Password no Registrados");
        }
    $conn->close();
    
}
if ($role == "administrador"){
    include '../config/conexion.php';
    $sql = "SELECT * FROM super_usuario WHERE SU_USUARIO = '$myusername' and SU_CONTRASENA = '$mypassword'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            setcookie(loggedin, date("F jS - g:i a"), $seconds);
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['SU_CODIGO'] = $row['SU_CODIGO'];
            $_SESSION['SU_NOMBRES'] = $row['SU_NOMBRES'];	
            $_SESSION['SU_USUARIO'] = $row['SU_USUARIO'];
            $_SESSION['SU_CORREO'] = $row['SU_CORREO'];	
            $_SESSION['SU_USUARIO'] = $myusername;
            $_SESSION['role'] = $role;
            header("location:../admin/");
          }
    }else{
        header("location:../?err=Usuario y/o Password no Registrados");
        }
    $conn->close();
    
}

?>