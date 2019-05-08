/*
Navicat MySQL Data Transfer

Source Server         : Bases-MySQL
Source Server Version : 50713
Source Host           : localhost:3306
Source Database       : bd_soporte

Target Server Type    : MYSQL
Target Server Version : 50713
File Encoding         : 65001

Date: 2017-11-10 15:00:01
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for asignar_tiket
-- ----------------------------
DROP TABLE IF EXISTS `asignar_tiket`;
CREATE TABLE `asignar_tiket` (
  `AT_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `TI_CODIGO` int(11) NOT NULL,
  `TEC_CODIGO` int(11) NOT NULL,
  `AT_FECHA` datetime DEFAULT NULL,
  `AT_DESCRIPCION` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`AT_CODIGO`),
  KEY `FK_TEC_AT` (`TEC_CODIGO`),
  KEY `FK_TI_AT` (`TI_CODIGO`),
  CONSTRAINT `FK_TEC_AT` FOREIGN KEY (`TEC_CODIGO`) REFERENCES `tecnico` (`TEC_CODIGO`),
  CONSTRAINT `FK_TI_AT` FOREIGN KEY (`TI_CODIGO`) REFERENCES `tiket` (`TI_CODIGO`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of asignar_tiket
-- ----------------------------
INSERT INTO `asignar_tiket` VALUES ('1', '1', '1', '2017-11-13 09:24:39', 'AYUDELE');
INSERT INTO `asignar_tiket` VALUES ('3', '2', '1', '2017-11-14 09:34:28', 'HAGALE ING');
INSERT INTO `asignar_tiket` VALUES ('5', '3', '1', '2017-11-15 10:09:29', 'VALLA ');
INSERT INTO `asignar_tiket` VALUES ('6', '4', '1', '2017-11-14 14:44:54', 'AYUDELE');
INSERT INTO `asignar_tiket` VALUES ('7', '5', '2', '2017-11-14 14:45:55', 'VALLA ING AUDEDURNH');

-- ----------------------------
-- Table structure for cpu
-- ----------------------------
DROP TABLE IF EXISTS `cpu`;
CREATE TABLE `cpu` (
  `C_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `EST_CODIGO` int(11) NOT NULL,
  `C_TIPO` varchar(50) DEFAULT NULL,
  `C_PROCESADOR` varchar(200) DEFAULT NULL,
  `C_NUMPROCESADOR` varchar(50) DEFAULT NULL,
  `C_RAM` varchar(50) DEFAULT NULL,
  `C_NUMMODULO` varchar(50) DEFAULT NULL,
  `C_DISCODURO` varchar(50) DEFAULT NULL,
  `C_NUMDISCO` varchar(50) DEFAULT NULL,
  `C_OBSERVACION` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`C_CODIGO`),
  KEY `FK_EST_CPU` (`EST_CODIGO`),
  CONSTRAINT `FK_EST_CPU` FOREIGN KEY (`EST_CODIGO`) REFERENCES `estados` (`EST_CODIGO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cpu
-- ----------------------------

-- ----------------------------
-- Table structure for departamento
-- ----------------------------
DROP TABLE IF EXISTS `departamento`;
CREATE TABLE `departamento` (
  `DEP_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `DEP_DETALLE` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`DEP_CODIGO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of departamento
-- ----------------------------

-- ----------------------------
-- Table structure for dispositivo_red
-- ----------------------------
DROP TABLE IF EXISTS `dispositivo_red`;
CREATE TABLE `dispositivo_red` (
  `DR_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `EST_CODIGO` int(11) NOT NULL,
  `DR_MARCA` varchar(100) DEFAULT NULL,
  `DR_MODELO` varchar(100) DEFAULT NULL,
  `DR_SERIE` varchar(100) DEFAULT NULL,
  `DR_TIPO` varchar(100) DEFAULT NULL,
  `DR_NUMPUERTOSLAN` varchar(100) DEFAULT NULL,
  `DR_NUMPUERTOSSFP` varchar(100) DEFAULT NULL,
  `DR_CONECTIVIDADWIFI` varchar(100) DEFAULT NULL,
  `DR_OBSERVACION` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`DR_CODIGO`),
  KEY `FK_EST_DIS` (`EST_CODIGO`),
  CONSTRAINT `FK_EST_DIS` FOREIGN KEY (`EST_CODIGO`) REFERENCES `estados` (`EST_CODIGO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dispositivo_red
-- ----------------------------

-- ----------------------------
-- Table structure for equipo
-- ----------------------------
DROP TABLE IF EXISTS `equipo`;
CREATE TABLE `equipo` (
  `EQU_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `KEY_CODIGO` int(11) NOT NULL,
  `DEP_CODIGO` int(11) NOT NULL,
  `IMP_CODIGO` int(11) NOT NULL,
  `C_CODIGO` int(11) NOT NULL,
  `U_CODIGO` int(11) NOT NULL,
  `MOU_CODIGO` int(11) NOT NULL,
  `PER_CODIGO` int(11) NOT NULL,
  `MON_CODIGO` int(11) NOT NULL,
  `DR_CODIGO` int(11) NOT NULL,
  `EQU_DETALLE` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`EQU_CODIGO`),
  KEY `FK_CPU_EQU` (`C_CODIGO`),
  KEY `FK_DEP_EQU` (`DEP_CODIGO`),
  KEY `FK_DIS_EQU` (`DR_CODIGO`),
  KEY `FK_IMP_EQU` (`IMP_CODIGO`),
  KEY `FK_KEY_EQU` (`KEY_CODIGO`),
  KEY `FK_MON_EQU` (`MON_CODIGO`),
  KEY `FK_MOU_EQU` (`MOU_CODIGO`),
  KEY `FK_PER_EQU` (`PER_CODIGO`),
  KEY `FK_UPS_EQU` (`U_CODIGO`),
  CONSTRAINT `FK_CPU_EQU` FOREIGN KEY (`C_CODIGO`) REFERENCES `cpu` (`C_CODIGO`),
  CONSTRAINT `FK_DEP_EQU` FOREIGN KEY (`DEP_CODIGO`) REFERENCES `departamento` (`DEP_CODIGO`),
  CONSTRAINT `FK_DIS_EQU` FOREIGN KEY (`DR_CODIGO`) REFERENCES `dispositivo_red` (`DR_CODIGO`),
  CONSTRAINT `FK_IMP_EQU` FOREIGN KEY (`IMP_CODIGO`) REFERENCES `impresora` (`IMP_CODIGO`),
  CONSTRAINT `FK_KEY_EQU` FOREIGN KEY (`KEY_CODIGO`) REFERENCES `keyboard` (`KEY_CODIGO`),
  CONSTRAINT `FK_MON_EQU` FOREIGN KEY (`MON_CODIGO`) REFERENCES `monitor` (`MON_CODIGO`),
  CONSTRAINT `FK_MOU_EQU` FOREIGN KEY (`MOU_CODIGO`) REFERENCES `mouse` (`MOU_CODIGO`),
  CONSTRAINT `FK_PER_EQU` FOREIGN KEY (`PER_CODIGO`) REFERENCES `persona` (`PER_CODIGO`),
  CONSTRAINT `FK_UPS_EQU` FOREIGN KEY (`U_CODIGO`) REFERENCES `ups` (`U_CODIGO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of equipo
-- ----------------------------

-- ----------------------------
-- Table structure for estados
-- ----------------------------
DROP TABLE IF EXISTS `estados`;
CREATE TABLE `estados` (
  `EST_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `EST_DETALLE` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`EST_CODIGO`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='DISPONIBLE\r\nACTIVO\r\nINACTIVO\r\nEN MANTENIMIENT';

-- ----------------------------
-- Records of estados
-- ----------------------------
INSERT INTO `estados` VALUES ('1', 'DISPONIBLE');
INSERT INTO `estados` VALUES ('2', 'ACTIVO');

-- ----------------------------
-- Table structure for impresora
-- ----------------------------
DROP TABLE IF EXISTS `impresora`;
CREATE TABLE `impresora` (
  `IMP_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `EST_CODIGO` int(11) NOT NULL,
  `IMP_MARCA` varchar(100) DEFAULT NULL,
  `IMP_MODELO` varchar(200) DEFAULT NULL,
  `IMP_SERIE` varchar(200) DEFAULT NULL,
  `IMP_CONSUMIBLES` varchar(200) DEFAULT NULL,
  `IMP_CONECTIVIDAD` varchar(2) DEFAULT NULL,
  `IMP_OBSERVACION` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`IMP_CODIGO`),
  KEY `FK_EST_IMP` (`EST_CODIGO`),
  CONSTRAINT `FK_EST_IMP` FOREIGN KEY (`EST_CODIGO`) REFERENCES `estados` (`EST_CODIGO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of impresora
-- ----------------------------

-- ----------------------------
-- Table structure for keyboard
-- ----------------------------
DROP TABLE IF EXISTS `keyboard`;
CREATE TABLE `keyboard` (
  `KEY_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `EST_CODIGO` int(11) NOT NULL,
  `KEY_MARCA` varchar(100) DEFAULT NULL,
  `KEY_MODELO` varchar(100) DEFAULT NULL,
  `KEY_SERIE` varchar(100) DEFAULT NULL,
  `KEY_OBSERVACION` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`KEY_CODIGO`),
  KEY `FK_EST_KEY` (`EST_CODIGO`),
  CONSTRAINT `FK_EST_KEY` FOREIGN KEY (`EST_CODIGO`) REFERENCES `estados` (`EST_CODIGO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of keyboard
-- ----------------------------

-- ----------------------------
-- Table structure for monitor
-- ----------------------------
DROP TABLE IF EXISTS `monitor`;
CREATE TABLE `monitor` (
  `MON_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `EST_CODIGO` int(11) NOT NULL,
  `MON_MARCA` varchar(100) DEFAULT NULL,
  `MON_MODELO` varchar(100) DEFAULT NULL,
  `MON_SERIE` varchar(100) DEFAULT NULL,
  `MON_OBSERVACION` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`MON_CODIGO`),
  KEY `FK_EST_MON` (`EST_CODIGO`),
  CONSTRAINT `FK_EST_MON` FOREIGN KEY (`EST_CODIGO`) REFERENCES `estados` (`EST_CODIGO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of monitor
-- ----------------------------

-- ----------------------------
-- Table structure for mouse
-- ----------------------------
DROP TABLE IF EXISTS `mouse`;
CREATE TABLE `mouse` (
  `MOU_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `EST_CODIGO` int(11) NOT NULL,
  `MOU_MARCA` varchar(100) DEFAULT NULL,
  `MOU_MODELO` varchar(100) DEFAULT NULL,
  `MOU_SERIE` varchar(100) DEFAULT NULL,
  `MOU_OBSERVACION` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`MOU_CODIGO`),
  KEY `FK_EST_MOU` (`EST_CODIGO`),
  CONSTRAINT `FK_EST_MOU` FOREIGN KEY (`EST_CODIGO`) REFERENCES `estados` (`EST_CODIGO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mouse
-- ----------------------------

-- ----------------------------
-- Table structure for persona
-- ----------------------------
DROP TABLE IF EXISTS `persona`;
CREATE TABLE `persona` (
  `PER_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `PER_NOMBRES` varchar(200) DEFAULT NULL,
  `PER_USUARIO` varchar(100) DEFAULT NULL,
  `PER_CORREO` varchar(100) DEFAULT NULL,
  `PER_CONTRASENA` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`PER_CODIGO`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of persona
-- ----------------------------
INSERT INTO `persona` VALUES ('1', 'JUANA DE LA CRUZ DOMINGUEZ OSTAIZA', 'jdominguez', 'sincorreo@hotmail.com ', 'jdominguez');

-- ----------------------------
-- Table structure for super_usuario
-- ----------------------------
DROP TABLE IF EXISTS `super_usuario`;
CREATE TABLE `super_usuario` (
  `SU_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `SU_NOMBRES` varchar(100) DEFAULT NULL,
  `SU_USUARIO` varchar(100) DEFAULT NULL,
  `SU_CONTRASENA` varchar(100) DEFAULT NULL,
  `SU_CORREO` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`SU_CODIGO`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of super_usuario
-- ----------------------------
INSERT INTO `super_usuario` VALUES ('1', 'Maximo Euclides Zambrano Vargas', 'mzambrano', 'mzambrano', 'mez@hotmail.com');

-- ----------------------------
-- Table structure for tecnico
-- ----------------------------
DROP TABLE IF EXISTS `tecnico`;
CREATE TABLE `tecnico` (
  `TEC_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `TEC_NOMBRES` varchar(100) DEFAULT NULL,
  `TEC_USUARIO` varchar(100) DEFAULT NULL,
  `TEC_CONTRASENA` varchar(100) DEFAULT NULL,
  `TEC_CARGO` varchar(100) DEFAULT NULL,
  `TEC_CORREO` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`TEC_CODIGO`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tecnico
-- ----------------------------
INSERT INTO `tecnico` VALUES ('1', 'WALTER DANIEL PARRAGA ANDRADE', 'wparraga', 'wparraga', 'PROGRAMADOS DE SISTEMAS BACKEND', 'walterdaniel15@hotmail.com');
INSERT INTO `tecnico` VALUES ('2', 'MARIO ALBERTO LOPEZ ZAMORA', 'mlopez', 'mlopez', 'PROGRAMADOS DE SISTEMAS FRONTEND', 'mallopez@hotmail.com');
INSERT INTO `tecnico` VALUES ('3', 'LUIS ALBERTO BRAVO ZAMBRANO', 'lbravo', 'lbravo', 'TECNICO DE HARDWARE', 'l_bravo83@hotmail.com');
INSERT INTO `tecnico` VALUES ('4', 'MARIA LOIRDSFJ', 'mlourdes', '12345', 'ASISTENTE', 'lo@gmail.com');

-- ----------------------------
-- Table structure for tiket
-- ----------------------------
DROP TABLE IF EXISTS `tiket`;
CREATE TABLE `tiket` (
  `TI_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `PER_CODIGO` int(11) NOT NULL,
  `SU_CODIGO` int(11) DEFAULT NULL,
  `TI_FECHA` datetime DEFAULT NULL,
  `TI_DETALLEPROBLEMA` varchar(500) DEFAULT NULL,
  `TI_DETALLESOLUCION` varchar(500) DEFAULT NULL,
  `TI_ESTADO` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`TI_CODIGO`),
  KEY `FK_PER_TIK` (`PER_CODIGO`),
  KEY `FK_SU_AT` (`SU_CODIGO`),
  CONSTRAINT `FK_PER_TIK` FOREIGN KEY (`PER_CODIGO`) REFERENCES `persona` (`PER_CODIGO`),
  CONSTRAINT `FK_SU_AT` FOREIGN KEY (`SU_CODIGO`) REFERENCES `super_usuario` (`SU_CODIGO`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='EMITIDO\r\nEN PROCESO\r\nATENDIDO';

-- ----------------------------
-- Records of tiket
-- ----------------------------
INSERT INTO `tiket` VALUES ('1', '1', '1', '2017-11-21 09:23:54', 'NO ME IMPRIME LA IMPRESORA', 'ESTABA DESCONECTADO EL CALBE DE RED', 'ATENDIDO');
INSERT INTO `tiket` VALUES ('2', '1', '1', '2017-11-21 09:33:15', 'NO PUEDO CONFIGURAR MARGENES', 'SE LE DIO CLASES DE OFIMATICA', 'ATENDIDO');
INSERT INTO `tiket` VALUES ('3', '1', '1', '2017-11-14 10:08:19', 'NO ENCIENDE MI UPS, ETA PITANDO', 'SE LE CAMBIO EL UPS CON OTRO', 'ATENDIDO');
INSERT INTO `tiket` VALUES ('4', '1', '1', '2017-11-10 11:28:05', 'NO HACE PING MI EQUIPO', null, 'EMITIDO');
INSERT INTO `tiket` VALUES ('5', '1', '1', '2017-11-10 14:43:28', 'NO ME ENCIENDE MI EQUIPO', 'tyrfthfghjhg', 'ATENDIDO');

-- ----------------------------
-- Table structure for ups
-- ----------------------------
DROP TABLE IF EXISTS `ups`;
CREATE TABLE `ups` (
  `U_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `EST_CODIGO` int(11) NOT NULL,
  `U_MARCA` varchar(100) DEFAULT NULL,
  `U_MODELO` varchar(100) DEFAULT NULL,
  `U_SERIE` varchar(100) DEFAULT NULL,
  `U_CAPACIDADCARGA` varchar(100) DEFAULT NULL,
  `U_NUMTOMAS` varchar(100) DEFAULT NULL,
  `U_OBSERVACION` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`U_CODIGO`),
  KEY `FK_EST_UPS` (`EST_CODIGO`),
  CONSTRAINT `FK_EST_UPS` FOREIGN KEY (`EST_CODIGO`) REFERENCES `estados` (`EST_CODIGO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ups
-- ----------------------------
