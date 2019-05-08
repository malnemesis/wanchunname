<?php
include '../config/conexion.php';
include 'check-login.php';

##saca el numero de tecnicos registrados
include '../config/conexion.php';
$sql = "SELECT * FROM tecnico";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 $numtecnico=mysqli_num_rows($result);
    while($row = $result->fetch_assoc()) {
    
    }
} else {
$numtecnico = "0";
}
$conn->close();

##saca el numero de usuarios registrados
include '../config/conexion.php';
$sql = "SELECT * FROM persona WHERE PER_NOMBRES NOT IN (' ')";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 $numusuario=mysqli_num_rows($result);
    while($row = $result->fetch_assoc()) {
    
    }
} else {
$numusuario = "0";
}
$conn->close();

##saca el numero de departamentos registrados
include '../config/conexion.php';
$sql = "SELECT * FROM departamento WHERE DEP_DETALLE NOT IN (' ')";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 $numdepartamento=mysqli_num_rows($result);
    while($row = $result->fetch_assoc()) {
    
    }
} else {
$numdepartamento = "0";
}
$conn->close();

##saca el numero de cpu registrados
include '../config/conexion.php';
$sql = "SELECT * FROM cpu WHERE C_TIPO NOT IN ('NINGUNO',' ')";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 $numcpu=mysqli_num_rows($result);
    while($row = $result->fetch_assoc()) {
    
    }
} else {
$numcpu = "0";
}
$conn->close();

##saca el numero de monitores registrados
include '../config/conexion.php';
$sql = "SELECT * FROM monitor WHERE MON_MARCA NOT IN ('NINGUNO',' ')";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 $nummonitor=mysqli_num_rows($result);
    while($row = $result->fetch_assoc()) {
    
    }
} else {
$nummonitor = "0";
}
$conn->close();

##saca el numero de teclados registrados
include '../config/conexion.php';
$sql = "SELECT * FROM keyboard WHERE KEY_MARCA NOT IN ('NINGUNO',' ')";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 $numteclado=mysqli_num_rows($result);
    while($row = $result->fetch_assoc()) {
    
    }
} else {
$numteclado = "0";
}
$conn->close();

##saca el numero de mouse registrados
include '../config/conexion.php';
$sql = "SELECT * FROM mouse WHERE MOU_MARCA NOT IN ('NINGUNO',' ')";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 $nummouse=mysqli_num_rows($result);
    while($row = $result->fetch_assoc()) {
    
    }
} else {
$nummouse = "0";
}
$conn->close();

##saca el numero de ups registrados
include '../config/conexion.php';
$sql = "SELECT * FROM ups WHERE U_MARCA NOT IN ('NINGUNO',' ')";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 $numups=mysqli_num_rows($result);
    while($row = $result->fetch_assoc()) {
    
    }
} else {
$numups = "0";
}
$conn->close();

##saca el numero de impresoras registradas
include '../config/conexion.php';
$sql = "SELECT * FROM impresora WHERE IMP_MARCA NOT IN ('NINGUNO',' ')";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 $numimpresora=mysqli_num_rows($result);
    while($row = $result->fetch_assoc()) {
    
    }
} else {
$numimpresora = "0";
}
$conn->close();


##saca el numero de dispositivo_red registrados
include '../config/conexion.php';
$sql = "SELECT * FROM dispositivo_red WHERE DR_MARCA NOT IN ('NINGUNO',' ')";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 $numdispositivos=mysqli_num_rows($result);
    while($row = $result->fetch_assoc()) {
    
    }
} else {
$numdispositivos = "0";
}
$conn->close();


##saca el numero de tiket atendidos
include '../config/conexion.php';
$sql = "SELECT * FROM tiket WHERE TI_ESTADO='ATENDIDO'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 $numtiket=mysqli_num_rows($result);
    while($row = $result->fetch_assoc()) {
    
    }
} else {
$numtiket = "0";
}
$conn->close();

##saca el numero de tiket asignado
include '../config/conexion.php';
$sql = "SELECT * FROM tiket WHERE TI_ESTADO='ASIGNADO'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 $numtiketa=mysqli_num_rows($result);
    while($row = $result->fetch_assoc()) {
    
    }
} else {
$numtiket = "0";
}
$conn->close();

##saca el numero de tiket emitidos
include '../config/conexion.php';
$sql = "SELECT * FROM tiket WHERE TI_ESTADO='EMITIDO'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 $tikeyalert=mysqli_num_rows($result);
 $tiket = true;
    while($row = $result->fetch_assoc()) {
    
    }
} else {
$tiket = false;
}
$conn->close();

##saca el numero de equipos asignados
include '../config/conexion.php';
$sql = "SELECT * FROM equipo";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 $equipoalert=mysqli_num_rows($result);
 $equipo = true;
    while($row = $result->fetch_assoc()) {
    
    }
} else {
$equipo = false;
}
$conn->close();
?>