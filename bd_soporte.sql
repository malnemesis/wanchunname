/*
 Navicat Premium Data Transfer

 Source Server         : Bases-MySQL
 Source Server Type    : MySQL
 Source Server Version : 50715
 Source Host           : localhost:3306
 Source Schema         : bd_soporte

 Target Server Type    : MySQL
 Target Server Version : 50715
 File Encoding         : 65001

 Date: 03/04/2019 09:42:30
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for asignar_tiket
-- ----------------------------
DROP TABLE IF EXISTS `asignar_tiket`;
CREATE TABLE `asignar_tiket`  (
  `AT_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `TI_CODIGO` int(11) NOT NULL,
  `TEC_CODIGO` int(11) NOT NULL,
  `AT_FECHA` datetime(0) NULL DEFAULT NULL,
  `AT_DESCRIPCION` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`AT_CODIGO`) USING BTREE,
  INDEX `FK_TEC_AT`(`TEC_CODIGO`) USING BTREE,
  INDEX `FK_TI_AT`(`TI_CODIGO`) USING BTREE,
  CONSTRAINT `FK_TEC_AT` FOREIGN KEY (`TEC_CODIGO`) REFERENCES `tecnico` (`TEC_CODIGO`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `FK_TI_AT` FOREIGN KEY (`TI_CODIGO`) REFERENCES `tiket` (`TI_CODIGO`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of asignar_tiket
-- ----------------------------
INSERT INTO `asignar_tiket` VALUES (5, 2, 3, '2018-02-09 09:03:00', 'ING LUIS SOLUCIONELE X FAVOR');
INSERT INTO `asignar_tiket` VALUES (6, 3, 2, '2018-05-09 09:04:00', 'ING. AYUDELE POR FAVOR');
INSERT INTO `asignar_tiket` VALUES (7, 4, 1, '2018-02-19 10:42:00', 'VALLA POR FAVOR ');
INSERT INTO `asignar_tiket` VALUES (8, 5, 3, '2018-05-01 17:00:00', 'no joda ');
INSERT INTO `asignar_tiket` VALUES (9, 6, 1, '2018-03-05 10:16:00', 'ING WALTER EXISTE UN PROBLEMA EN RENTAS CON EL SISTEMA DEL AME, VALLA SOLUCIONAR');
INSERT INTO `asignar_tiket` VALUES (10, 7, 3, '2018-03-05 10:17:00', 'ING LUIS VALLA A ALCALDIA A SOLUCIONAR UN PROBLEMA DE LA IMPRESORA RICOH ME DICEN QUE APARENTEMENTE SE QUEMÓ PORQUE HUBO UN BAJON DE LUZ');
INSERT INTO `asignar_tiket` VALUES (11, 11, 2, '2018-03-20 08:00:00', 'prueba con heidy');
INSERT INTO `asignar_tiket` VALUES (12, 8, 1, '2018-03-20 15:38:00', 'problemas de sistema');
INSERT INTO `asignar_tiket` VALUES (13, 12, 2, '2018-03-22 10:15:00', 'revice la maquina del pasante ');
INSERT INTO `asignar_tiket` VALUES (14, 13, 1, '2019-04-02 15:00:00', 'ING AYUDELE AY PARA QUE LA USUARIA TRABAJE');

-- ----------------------------
-- Table structure for cpu
-- ----------------------------
DROP TABLE IF EXISTS `cpu`;
CREATE TABLE `cpu`  (
  `C_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `EST_CODIGO` int(11) NOT NULL,
  `C_TIPO` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `C_MARCA` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `C_MODELO` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `C_SERIE` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `C_PROCESADOR` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `C_NUMPROCESADOR` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `C_RAM` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `C_NUMMODULO` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `C_DISCODURO` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `C_NUMDISCO` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `C_CODACTFIJ` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `C_OBSERVACION` varchar(300) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`C_CODIGO`) USING BTREE,
  INDEX `FK_EST_CPU`(`EST_CODIGO`) USING BTREE,
  CONSTRAINT `FK_EST_CPU` FOREIGN KEY (`EST_CODIGO`) REFERENCES `estados` (`EST_CODIGO`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 36 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cpu
-- ----------------------------
INSERT INTO `cpu` VALUES (1, 1, ' ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `cpu` VALUES (2, 2, 'NINGUNO', ' ', ' ', ' ', NULL, NULL, NULL, NULL, NULL, NULL, ' ', NULL);
INSERT INTO `cpu` VALUES (4, 2, 'LAPTOP', 'HP', 'PRODESK 400 G2.5 FF', 'MXL5370W3Y', 'INTEL I5-4590S', '2', '16 GB', '4', '2 TB', '2', '007-01-05-0008', '');
INSERT INTO `cpu` VALUES (6, 2, 'DESKTOP', 'HP', 'PRODESK 400 G1', 'MXL5151Z3W', 'INTEL I5 4590', '1', '4 GB', '1', '500 GB', '1', '007-01-05-0006', '');
INSERT INTO `cpu` VALUES (7, 2, 'CLON', 'SUPER POWER', 'S/N', 'S/N', 'INTEL', '1', '2 GB', '1', '500 GB', '1', '007-01-10-0022', 'SOLO TIENE 1 GB TAMAÑO DE RAM /  TIENE 149 TAMAÑO DE DISCO');
INSERT INTO `cpu` VALUES (8, 3, 'CLON', 'S/N', 'INTEL DUAL CORE', 'S/N', 'G3020', '1', '2 GB', '1', '500 GB', '1', 'S/N', '');
INSERT INTO `cpu` VALUES (10, 2, 'CLON', 'VANTEC ', 'S/N', 'S/N', 'INTEL CELERON', '1', '2 GB', '1', '500 GB', '1', 'S/N', 'TIENE 292 EN TAMAÑO DE DISCO');
INSERT INTO `cpu` VALUES (19, 2, 'DESKTOP', 'HP', 'PRODESK 400 G1', 'MXL5151Z4S', 'INTEL I5-4590', '1', '4 GB', '1', '500 GB', '1', '007-01-05-0013', 'TAMAÑO DE MEMORIA 232');
INSERT INTO `cpu` VALUES (20, 2, 'DESKTOP', 'HP', 'PRODESK 400 G2.5 SFF', 'MXL5370W4L', 'CORE I5-4590S', '1', '4 GB', '1', '500 GB', '1', 'S/N', '');
INSERT INTO `cpu` VALUES (25, 2, 'DESKTOP', 'HP', 'PRODESK 400 G1 SFF', 'MXL5151Z4L', 'INTEL I5-4590', '1', '4 GB', '1', '500 GB', '1', '007-01-05-0007', '');
INSERT INTO `cpu` VALUES (29, 2, 'DESKTOP', 'HP', 'PRODESK 400 G2.5 SFF', 'MXL5370W4C', 'CORE I5-4590S', '1', '4 GB', '1', '500 GB', '1', '007-01-05-0011', '');
INSERT INTO `cpu` VALUES (30, 2, 'DESKTOP', 'HP', 'PRODESK 400 G2.5 SFF', 'MXL5370W3V', 'INTEL I5-4590S', '1', '4 GB', '1', '1 TB', '1', 'S/N', '');
INSERT INTO `cpu` VALUES (33, 2, 'LAPTO', 'LENONOS', 'LOPOP', '123321', 'CORE', '1', '2GB', '4', '1200 GB', '1', '100-90-90-0009', 'EQUIPO PARA VER PORNO');
INSERT INTO `cpu` VALUES (35, 3, 'DESKTOP', 'WASA', 'GT1234', '123212', 'INTEL PENTIUN IIII', '2', '16 GB', '4', '2 TB', '2', '122-12-14-2343', 'SFSFGFG');

-- ----------------------------
-- Table structure for departamento
-- ----------------------------
DROP TABLE IF EXISTS `departamento`;
CREATE TABLE `departamento`  (
  `DEP_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `DEP_DETALLE` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`DEP_CODIGO`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of departamento
-- ----------------------------
INSERT INTO `departamento` VALUES (1, '');
INSERT INTO `departamento` VALUES (2, 'CONTABILIDAD');
INSERT INTO `departamento` VALUES (3, 'INFORMÁTICA');
INSERT INTO `departamento` VALUES (4, 'RENTAS');
INSERT INTO `departamento` VALUES (5, 'TRANSITO');
INSERT INTO `departamento` VALUES (6, 'TALENTO HUMANO');
INSERT INTO `departamento` VALUES (8, 'FINANCIERO');
INSERT INTO `departamento` VALUES (9, 'PLANIFICACIÓN');
INSERT INTO `departamento` VALUES (10, 'ARCHIVO');
INSERT INTO `departamento` VALUES (11, 'TESORERIA');
INSERT INTO `departamento` VALUES (12, 'DESARROLLO PRODUCTIVO');
INSERT INTO `departamento` VALUES (13, 'COMUNICACION');

-- ----------------------------
-- Table structure for dispositivo_red
-- ----------------------------
DROP TABLE IF EXISTS `dispositivo_red`;
CREATE TABLE `dispositivo_red`  (
  `DR_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `EST_CODIGO` int(11) NOT NULL,
  `DR_MARCA` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `DR_MODELO` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `DR_SERIE` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `DR_TIPO` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `DR_NUMPUERTOSLAN` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `DR_NUMPUERTOSSFP` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `DR_CONECTIVIDADWIFI` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `DR_CODACTFIJ` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `DR_OBSERVACION` varchar(300) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`DR_CODIGO`) USING BTREE,
  INDEX `FK_EST_DIS`(`EST_CODIGO`) USING BTREE,
  CONSTRAINT `FK_EST_DIS` FOREIGN KEY (`EST_CODIGO`) REFERENCES `estados` (`EST_CODIGO`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of dispositivo_red
-- ----------------------------
INSERT INTO `dispositivo_red` VALUES (1, 1, ' ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `dispositivo_red` VALUES (2, 1, 'NINGUNO', ' ', ' ', ' ', NULL, NULL, NULL, ' ', NULL);

-- ----------------------------
-- Table structure for equipo
-- ----------------------------
DROP TABLE IF EXISTS `equipo`;
CREATE TABLE `equipo`  (
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
  `EQU_DETALLE` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`EQU_CODIGO`) USING BTREE,
  INDEX `FK_CPU_EQU`(`C_CODIGO`) USING BTREE,
  INDEX `FK_DEP_EQU`(`DEP_CODIGO`) USING BTREE,
  INDEX `FK_DIS_EQU`(`DR_CODIGO`) USING BTREE,
  INDEX `FK_IMP_EQU`(`IMP_CODIGO`) USING BTREE,
  INDEX `FK_KEY_EQU`(`KEY_CODIGO`) USING BTREE,
  INDEX `FK_MON_EQU`(`MON_CODIGO`) USING BTREE,
  INDEX `FK_MOU_EQU`(`MOU_CODIGO`) USING BTREE,
  INDEX `FK_PER_EQU`(`PER_CODIGO`) USING BTREE,
  INDEX `FK_UPS_EQU`(`U_CODIGO`) USING BTREE,
  CONSTRAINT `FK_CPU_EQU` FOREIGN KEY (`C_CODIGO`) REFERENCES `cpu` (`C_CODIGO`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `FK_DEP_EQU` FOREIGN KEY (`DEP_CODIGO`) REFERENCES `departamento` (`DEP_CODIGO`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `FK_DIS_EQU` FOREIGN KEY (`DR_CODIGO`) REFERENCES `dispositivo_red` (`DR_CODIGO`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `FK_IMP_EQU` FOREIGN KEY (`IMP_CODIGO`) REFERENCES `impresora` (`IMP_CODIGO`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `FK_KEY_EQU` FOREIGN KEY (`KEY_CODIGO`) REFERENCES `keyboard` (`KEY_CODIGO`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `FK_MON_EQU` FOREIGN KEY (`MON_CODIGO`) REFERENCES `monitor` (`MON_CODIGO`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `FK_MOU_EQU` FOREIGN KEY (`MOU_CODIGO`) REFERENCES `mouse` (`MOU_CODIGO`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `FK_PER_EQU` FOREIGN KEY (`PER_CODIGO`) REFERENCES `persona` (`PER_CODIGO`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `FK_UPS_EQU` FOREIGN KEY (`U_CODIGO`) REFERENCES `ups` (`U_CODIGO`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of equipo
-- ----------------------------
INSERT INTO `equipo` VALUES (1, 2, 4, 2, 8, 3, 2, 5, 2, 2, 'MAQUINA ');

-- ----------------------------
-- Table structure for estados
-- ----------------------------
DROP TABLE IF EXISTS `estados`;
CREATE TABLE `estados`  (
  `EST_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `EST_DETALLE` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`EST_CODIGO`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = 'DISPONIBLE\r\nACTIVO\r\nINACTIVO\r\nEN MANTENIMIENT' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of estados
-- ----------------------------
INSERT INTO `estados` VALUES (1, 'DISPONIBLE');
INSERT INTO `estados` VALUES (2, 'ACTIVO');
INSERT INTO `estados` VALUES (3, 'ASIGNADO');
INSERT INTO `estados` VALUES (4, 'DADO DE BAJA');

-- ----------------------------
-- Table structure for impresora
-- ----------------------------
DROP TABLE IF EXISTS `impresora`;
CREATE TABLE `impresora`  (
  `IMP_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `EST_CODIGO` int(11) NOT NULL,
  `IMP_MARCA` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `IMP_MODELO` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `IMP_SERIE` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `IMP_CONSUMIBLES` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `IMP_CONECTIVIDAD` varchar(2) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `IMP_CODACTFIJ` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `IMP_OBSERVACION` varchar(300) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`IMP_CODIGO`) USING BTREE,
  INDEX `FK_EST_IMP`(`EST_CODIGO`) USING BTREE,
  CONSTRAINT `FK_EST_IMP` FOREIGN KEY (`EST_CODIGO`) REFERENCES `estados` (`EST_CODIGO`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of impresora
-- ----------------------------
INSERT INTO `impresora` VALUES (1, 1, ' ', NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `impresora` VALUES (2, 1, 'NINGUNO', ' ', ' ', NULL, NULL, ' ', NULL);
INSERT INTO `impresora` VALUES (3, 2, 'HP', 'LASERJET PRO MFP M225DW', 'CMV8H2V97J', '83A', 'SI', 'S/N', '');
INSERT INTO `impresora` VALUES (4, 2, 'EPSON', 'P361A', 'NZBY107295', '23D', 'SI', '007-01-07-0006', '');
INSERT INTO `impresora` VALUES (5, 2, 'EPSON', 'P361A', 'NZBY107294', '23D', 'SI', '007-01-07-0007', '');
INSERT INTO `impresora` VALUES (6, 2, 'HP', 'LASERJET PRO MFP M225DW', 'CNB8H2V9TP', '83 A', 'SI', 'S/N', '');
INSERT INTO `impresora` VALUES (11, 2, 'EPSON', 'P170B', 'NUGI060683', '23D', 'SI', 'S/N', '');
INSERT INTO `impresora` VALUES (12, 2, 'HP', 'LASERJET PRO MFP M225DW', 'CNF8G6HCPN', '83 A', 'SI', 'S/N', '');
INSERT INTO `impresora` VALUES (13, 2, 'HP', 'LASERJET M1132 MFP', 'CNG9BDWB3B', '85A', 'SI', 'S/N', '');

-- ----------------------------
-- Table structure for keyboard
-- ----------------------------
DROP TABLE IF EXISTS `keyboard`;
CREATE TABLE `keyboard`  (
  `KEY_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `EST_CODIGO` int(11) NOT NULL,
  `KEY_MARCA` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `KEY_MODELO` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `KEY_SERIE` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `KEY_CODACTFIJ` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `KEY_OBSERVACION` varchar(300) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`KEY_CODIGO`) USING BTREE,
  INDEX `FK_EST_KEY`(`EST_CODIGO`) USING BTREE,
  CONSTRAINT `FK_EST_KEY` FOREIGN KEY (`EST_CODIGO`) REFERENCES `estados` (`EST_CODIGO`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 37 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of keyboard
-- ----------------------------
INSERT INTO `keyboard` VALUES (1, 1, ' ', NULL, NULL, NULL, NULL);
INSERT INTO `keyboard` VALUES (2, 1, 'NINGUNO', ' ', ' ', ' ', NULL);
INSERT INTO `keyboard` VALUES (3, 2, 'HP', 'SK-2025', 'BDMHE0CCP8TSB7', 'S/N', '');
INSERT INTO `keyboard` VALUES (4, 2, 'HP', 'KB57P', 'BDMEP0AHH8W0XB', 'S/N', '');
INSERT INTO `keyboard` VALUES (5, 2, 'HP', 'KB57211', 'BDMHE0CHH8A04A', 'S/N', '');
INSERT INTO `keyboard` VALUES (6, 2, 'GENIUS', 'K639', 'ZM8302041889', 'S/N', '');
INSERT INTO `keyboard` VALUES (8, 2, 'GENIUS', 'KB-0138', 'ZCE98B500976', 'S/N', '');
INSERT INTO `keyboard` VALUES (12, 2, 'HP', 'KB57211', 'BDMHE0CHH7WB3K', 'S/N', '');
INSERT INTO `keyboard` VALUES (21, 2, 'HP', 'KU-1156', 'BDMHE0C5Y8N2QI', 'S/N', '');
INSERT INTO `keyboard` VALUES (32, 2, 'HP', 'KB57211', 'BDMHE0CHH8A00T', 'S/N', '');
INSERT INTO `keyboard` VALUES (33, 2, 'HP', 'SK-2025', 'BDMHE0CCP8TNGM', 'S/N', '');
INSERT INTO `keyboard` VALUES (34, 2, 'HP', 'SK-2025', 'BDMHE0CCP8DMGB', 'S/N', '');
INSERT INTO `keyboard` VALUES (35, 2, 'HP', 'ku-0316', 'BAUHR0HVBZ30L3', 'S/N', '');
INSERT INTO `keyboard` VALUES (36, 2, 'HP', 'KU-0841', 'BBCFHLAVBZL2K9', 'S/N', '');

-- ----------------------------
-- Table structure for monitor
-- ----------------------------
DROP TABLE IF EXISTS `monitor`;
CREATE TABLE `monitor`  (
  `MON_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `EST_CODIGO` int(11) NOT NULL,
  `MON_MARCA` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `MON_MODELO` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `MON_SERIE` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `MON_CODACTFIJ` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `MON_OBSERVACION` varchar(300) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`MON_CODIGO`) USING BTREE,
  INDEX `FK_EST_MON`(`EST_CODIGO`) USING BTREE,
  CONSTRAINT `FK_EST_MON` FOREIGN KEY (`EST_CODIGO`) REFERENCES `estados` (`EST_CODIGO`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 25 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of monitor
-- ----------------------------
INSERT INTO `monitor` VALUES (1, 1, ' ', NULL, NULL, NULL, NULL);
INSERT INTO `monitor` VALUES (2, 1, 'NINGUNO', ' ', ' ', ' ', NULL);
INSERT INTO `monitor` VALUES (3, 2, 'DELL', 'HSPND-5041', '3CQ52927JD', '007-01-12-0008', 'SIIIIIIIIIIIIIIIIIIIIII');
INSERT INTO `monitor` VALUES (4, 2, 'HP', 'HSTND-5041-F', '3CQ5292TK1', 'S/N', '');
INSERT INTO `monitor` VALUES (5, 2, 'HP', 'HSTND-5041-F', '3CQ5292THL', '007-01-12-0006', '');
INSERT INTO `monitor` VALUES (6, 2, 'LG', '20M35ASA', '404NDGL8Q527', 'S/N', '');
INSERT INTO `monitor` VALUES (8, 2, 'SAMSUNG', 'S19C150F', 'ZYJ2H4LD810563L', 'S/N', '');
INSERT INTO `monitor` VALUES (10, 2, 'HP', 'HSTND-5041-F', '3CQ5292THB', '007-01-12-0013', '');
INSERT INTO `monitor` VALUES (12, 2, 'HP', 'HSTMD-5041-F', '3CQ5292THH', '007-01-12-0007', '');
INSERT INTO `monitor` VALUES (16, 2, 'HP', 'HSTMD-5041-F', '3CQ5292SZ6', '007-01-12-0011', '');
INSERT INTO `monitor` VALUES (17, 2, 'HP', 'HSTND-5041-F', '3CQ5292THP', 'S/N', '');
INSERT INTO `monitor` VALUES (18, 2, 'HP', 'HSTND-5041-F', '3CQ5292TJZ', 'S/N', '');
INSERT INTO `monitor` VALUES (19, 2, 'HP', 'S/N', 'EP1KHPNNE', 'S/N', '');
INSERT INTO `monitor` VALUES (20, 2, 'HP', '100-5010LA', '3CR0480C31', '007-01-10-0040', '');
INSERT INTO `monitor` VALUES (21, 2, 'DELL', 'TXR100', 'S/N', '100-01-10-0090', 'PRUEBA DE INGRESO MONITOR');
INSERT INTO `monitor` VALUES (22, 2, 'HP', 'W32', 'EP1KHPNNR', 'S/N', '');
INSERT INTO `monitor` VALUES (23, 2, 'GREAT WALL', 'S/N', 'S/N', 'S/N', 'CLON DE LOS CLONES');
INSERT INTO `monitor` VALUES (24, 4, 'WHATS UP', 'WTR23', 'S/N', '100-01-10-0091', 'CORREGIDO');

-- ----------------------------
-- Table structure for mouse
-- ----------------------------
DROP TABLE IF EXISTS `mouse`;
CREATE TABLE `mouse`  (
  `MOU_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `EST_CODIGO` int(11) NOT NULL,
  `MOU_MARCA` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `MOU_MODELO` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `MOU_SERIE` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `MOU_CODACTFIJ` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `MOU_OBSERVACION` varchar(300) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`MOU_CODIGO`) USING BTREE,
  INDEX `FK_EST_MOU`(`EST_CODIGO`) USING BTREE,
  CONSTRAINT `FK_EST_MOU` FOREIGN KEY (`EST_CODIGO`) REFERENCES `estados` (`EST_CODIGO`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 31 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mouse
-- ----------------------------
INSERT INTO `mouse` VALUES (1, 1, ' ', NULL, NULL, NULL, NULL);
INSERT INTO `mouse` VALUES (2, 1, 'NINGUNO', ' ', ' ', ' ', NULL);
INSERT INTO `mouse` VALUES (3, 2, 'HP', 'MOFYUO', 'FCMHH0AHD9AVO3', 'S/N', '');
INSERT INTO `mouse` VALUES (4, 2, 'HP', 'MOFYKO', 'FCMHF0AHD8L6UN', 'S/N', '');
INSERT INTO `mouse` VALUES (5, 2, 'HP', 'MOFYUO', 'CMHH0AKZ7BS', 'S/N', '');
INSERT INTO `mouse` VALUES (6, 2, 'GENIUS', 'GM-04011P', '123676201281', 'S/N', '');
INSERT INTO `mouse` VALUES (8, 2, 'GENIUS', 'IS-FM04', 'S/N', 'S/N', '');
INSERT INTO `mouse` VALUES (26, 2, 'HP', 'MOFYUO', 'CMHH0AHD8A2NG', 'S/N', '');
INSERT INTO `mouse` VALUES (27, 2, 'HP', 'MOFYUO', 'FCMHH0AHD9AVPF', 'S/N', '');
INSERT INTO `mouse` VALUES (28, 2, 'HP', 'MOFYUO', 'CMHH0AHD9AVPJ', 'S/N', '');
INSERT INTO `mouse` VALUES (29, 2, 'HP', 'MOFYUO', 'FCMHH0AHD9AVNC', 'S/N', '');
INSERT INTO `mouse` VALUES (30, 2, 'HP', 'MOAFKOA', 'FAISQ0C67Z1Y9X', 'S/N', '');

-- ----------------------------
-- Table structure for persona
-- ----------------------------
DROP TABLE IF EXISTS `persona`;
CREATE TABLE `persona`  (
  `PER_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `PER_NOMBRES` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `PER_USUARIO` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `PER_CORREO` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `PER_CONTRASENA` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `PER_TIPO` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`PER_CODIGO`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of persona
-- ----------------------------
INSERT INTO `persona` VALUES (1, '', '', '', '', 'usuario');
INSERT INTO `persona` VALUES (2, 'ZAMBRANO BARRE JESSENIA BIRMANIA', 'jzambrano', 'sincorreo@hotmail.com ', 'jzambrano', 'usuario');
INSERT INTO `persona` VALUES (3, 'PARRAGA ANDRADE WALTER DANIEL', 'wparraga', 'walterdaniel100@gmail.com', 'wparraga', 'usuario');
INSERT INTO `persona` VALUES (4, 'CEDEÑO ZAMBRANO GARY STALIN', 'gcedeño', 'garydos14@hotmail.com', 'gcedeño', 'usuario');
INSERT INTO `persona` VALUES (5, 'VERDUGA OREJUELA SAIDA MARISOL', 'sverduga', 'maryverdu.1969@hotmail.com ', 'sverduga', 'usuario');
INSERT INTO `persona` VALUES (6, 'ZAMBRANO VARGAS MAXIMO EUCLIDES', 'mzambranoo', 'mez@hotmail.com', 'mzambranoo', 'usuario');
INSERT INTO `persona` VALUES (8, 'DIGITADOR', 'digitador', 'walterdaniel100@gmail.com', 'd123', 'digitador');

-- ----------------------------
-- Table structure for super_usuario
-- ----------------------------
DROP TABLE IF EXISTS `super_usuario`;
CREATE TABLE `super_usuario`  (
  `SU_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `SU_NOMBRES` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `SU_USUARIO` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `SU_CONTRASENA` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `SU_CORREO` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`SU_CODIGO`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of super_usuario
-- ----------------------------
INSERT INTO `super_usuario` VALUES (1, 'Maximo Euclides Zambrano Vargas', 'admin', 'a1245', 'meza@hotmail.com');

-- ----------------------------
-- Table structure for tecnico
-- ----------------------------
DROP TABLE IF EXISTS `tecnico`;
CREATE TABLE `tecnico`  (
  `TEC_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `TEC_NOMBRES` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `TEC_USUARIO` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `TEC_CONTRASENA` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `TEC_CARGO` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `TEC_CORREO` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`TEC_CODIGO`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tecnico
-- ----------------------------
INSERT INTO `tecnico` VALUES (1, 'WALTER DANIEL PARRAGA ANDRADE', 'wparraga', 'wparraga', 'PROGRAMADOR DE SISTEMAS BACKEND', 'walterdaniel15@hotmail.com');
INSERT INTO `tecnico` VALUES (2, 'MARIO ALBERTO LOPEZ ZAMORA', 'mlopez', 'mlopez', 'PROGRAMADOR DE SISTEMAS FRONTEND', 'mallopez@hotmail.com');
INSERT INTO `tecnico` VALUES (3, 'LUIS ALBERTO BRAVO ZAMBRANO', 'lbravo', 'lbravo', 'TECNICO DE HARDWARE', 'l_bravo83@hotmail.com');

-- ----------------------------
-- Table structure for tiket
-- ----------------------------
DROP TABLE IF EXISTS `tiket`;
CREATE TABLE `tiket`  (
  `TI_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `PER_CODIGO` int(11) NOT NULL,
  `SU_CODIGO` int(11) NULL DEFAULT NULL,
  `TI_FECHA` datetime(0) NULL DEFAULT NULL,
  `TI_DETALLEPROBLEMA` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `TI_DETALLESOLUCION` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `TI_ESTADO` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`TI_CODIGO`) USING BTREE,
  INDEX `FK_PER_TIK`(`PER_CODIGO`) USING BTREE,
  INDEX `FK_SU_AT`(`SU_CODIGO`) USING BTREE,
  CONSTRAINT `FK_PER_TIK` FOREIGN KEY (`PER_CODIGO`) REFERENCES `persona` (`PER_CODIGO`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `FK_SU_AT` FOREIGN KEY (`SU_CODIGO`) REFERENCES `super_usuario` (`SU_CODIGO`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = 'EMITIDO\r\nEN PROCESO\r\nATENDIDO' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tiket
-- ----------------------------
INSERT INTO `tiket` VALUES (2, 2, 1, '2018-02-09 09:00:00', 'no puedo imprimir ', 'SE SOLUCIONO EL PROBLEMA DE IMPRESION REINICIO DE EQUIPO', 'ATENDIDO');
INSERT INTO `tiket` VALUES (3, 2, 1, '2018-02-09 09:01:00', 'LA COMPUTADORA NO ME RECONOCE EL SOND', 'solu ok', 'ATENDIDO');
INSERT INTO `tiket` VALUES (4, 3, 1, '2018-02-19 10:40:00', 'AYUDA ', 'SE SOLUCIONO EL PROBLEMA DE IMPRESION REINICIO DE EQUIPO CON INSTALACION DE SISTEMA OPERATIVO ', 'ATENDIDO');
INSERT INTO `tiket` VALUES (5, 2, 1, '2018-03-05 10:05:00', 'LA IMPRESORA NO ENCIENDE, Y NECESITAMOS IMPRIMIR LAS ESPECIES ,, ES URGENTE', '', 'ASIGNADO');
INSERT INTO `tiket` VALUES (6, 4, 1, '2018-03-05 10:10:00', 'EL SISTEMA DEL AME NO QUIERE INICIARSE Y NECESITAMOS HACER UNAS ACTUALIZACIONES DE PERSONAS', 'solucionado se restauro la base de datos con fecha eriugheriug', 'ATENDIDO');
INSERT INTO `tiket` VALUES (7, 5, 1, '2018-03-05 10:11:00', 'la impresora ricoh no quiere encender, hubo un BAJÓN de luz y desde hay no quiere prender aparentemente se quemó porque huele a quemado, y necesitamos imprimir los formularios de INSCRIPCIONES de las construcciones de las casas del miduvi', '', 'ASIGNADO');
INSERT INTO `tiket` VALUES (8, 2, 1, '2018-03-05 10:28:00', 'NECESITAMOS CALCULAR EL CEM PARA UNOS SECTORES DEL CANTÓN, AYUDENOS PARA FACILITAR EL TRABAJO ', '', 'ASIGNADO');
INSERT INTO `tiket` VALUES (11, 4, 1, '2018-03-19 14:01:37', 'PRUEBA CON HEIDY', 'SOLUCIÓN prueba con heidy', 'ATENDIDO');
INSERT INTO `tiket` VALUES (12, 3, 1, '2018-03-21 12:34:57', 'PRUEBA ING EUCLIDES', 'rsf yo ok esta q le falla ..tiene una fuga', 'ATENDIDO');
INSERT INTO `tiket` VALUES (13, 3, 1, '2018-03-21 12:38:48', 'no pt fsfs', '', 'ASIGNADO');

-- ----------------------------
-- Table structure for ups
-- ----------------------------
DROP TABLE IF EXISTS `ups`;
CREATE TABLE `ups`  (
  `U_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `EST_CODIGO` int(11) NOT NULL,
  `U_MARCA` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `U_MODELO` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `U_SERIE` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `U_CAPACIDADCARGA` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `U_NUMTOMAS` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `U_CODACTFIJ` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `U_OBSERVACION` varchar(300) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`U_CODIGO`) USING BTREE,
  INDEX `FK_EST_UPS`(`EST_CODIGO`) USING BTREE,
  CONSTRAINT `FK_EST_UPS` FOREIGN KEY (`EST_CODIGO`) REFERENCES `estados` (`EST_CODIGO`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 20 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ups
-- ----------------------------
INSERT INTO `ups` VALUES (1, 1, ' ', NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `ups` VALUES (2, 1, 'NINGUNO', ' ', ' ', NULL, NULL, ' ', NULL);
INSERT INTO `ups` VALUES (3, 3, 'APC', 'BE550G-LM', '4B1514B00010', '330W', '8', 'S/N', '');
INSERT INTO `ups` VALUES (4, 2, 'APC', 'BR1000G', '3B1513X24368', '300 W', '6', 'S/N', '');
INSERT INTO `ups` VALUES (5, 2, 'CDP', 'B-AVR1006', '130403-040004013', '500W', '6', 'S/N', '');
INSERT INTO `ups` VALUES (6, 2, 'FORZA', 'FVR3001', '14516826302', '1500 W', '4', 'S/N', '');
INSERT INTO `ups` VALUES (8, 2, 'APC', 'BE550G-LM', '4B1514P04777', '330 W', '8', 'S/N', '');
INSERT INTO `ups` VALUES (10, 2, 'APC', 'BE550G-LM', '4B1514P00015', '330 W', '8', 'S/N', '');
INSERT INTO `ups` VALUES (15, 2, 'THORABR', 'QRCKLTO1', '074070020900', '330 W', '6', 'S/N', '');
INSERT INTO `ups` VALUES (16, 2, 'APC', 'BE550G-LM', '4B1412P09444', '300W', '8', 'S/N', '');
INSERT INTO `ups` VALUES (17, 2, 'CDP', 'B-AVR1006', '130403-040004018', '500W', '6', 'S/N', '');
INSERT INTO `ups` VALUES (18, 2, 'CDP', 'B-AVR1006 120 VAC', '130403-040064382', '500W', '6', 'S/N', '');
INSERT INTO `ups` VALUES (19, 2, 'APC', 'BE550G-LM', '4B1514P05238', '330W', '8', 'S/N', '');

-- ----------------------------
-- View structure for vis_equiposasignados
-- ----------------------------
DROP VIEW IF EXISTS `vis_equiposasignados`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vis_equiposasignados` AS select `e`.`EQU_CODIGO` AS `ID`,`pe`.`PER_NOMBRES` AS `Usuario`,`de`.`DEP_DETALLE` AS `Departamento`,concat(`c`.`C_TIPO`,', ',`c`.`C_MARCA`,', ',`c`.`C_MODELO`,', ',`c`.`C_SERIE`,', ',`c`.`C_CODACTFIJ`) AS `Equipo`,concat(`mon`.`MON_MARCA`,', ',`mon`.`MON_MODELO`,', ',`mon`.`MON_SERIE`,', ',`mon`.`MON_CODACTFIJ`) AS `Monitor`,concat(`ke`.`KEY_MARCA`,', ',`ke`.`KEY_MODELO`,', ',`ke`.`KEY_SERIE`,', ',`ke`.`KEY_CODACTFIJ`) AS `Teclado`,concat(`mo`.`MOU_MARCA`,', ',`mo`.`MOU_MODELO`,', ',`mo`.`MOU_SERIE`,', ',`mo`.`MOU_CODACTFIJ`) AS `Mouse`,concat(`u`.`U_MARCA`,', ',`u`.`U_MODELO`,', ',`u`.`U_SERIE`,', ',`u`.`U_CODACTFIJ`) AS `UPS`,concat(`i`.`IMP_MARCA`,', ',`i`.`IMP_MODELO`,', ',`i`.`IMP_SERIE`,', ',`i`.`IMP_CODACTFIJ`) AS `Impresora`,concat(`dr`.`DR_TIPO`,', ',`dr`.`DR_MARCA`,', ',`dr`.`DR_MODELO`,', ',`dr`.`DR_SERIE`,', ',`dr`.`DR_CODACTFIJ`) AS `Dispositivo/Red`,`e`.`EQU_DETALLE` AS `Observacion` from (((((((((`departamento` `de` join `persona` `pe`) join `mouse` `mo`) join `keyboard` `ke`) join `monitor` `mon`) join `cpu` `c`) join `ups` `u`) join `impresora` `i`) join `dispositivo_red` `dr`) join (`equipo` `e` join `cpu` on((`e`.`C_CODIGO` = `cpu`.`C_CODIGO`)))) where ((`pe`.`PER_CODIGO` = `e`.`PER_CODIGO`) and (`de`.`DEP_CODIGO` = `e`.`DEP_CODIGO`) and (`c`.`C_CODIGO` = `e`.`C_CODIGO`) and (`mo`.`MOU_CODIGO` = `e`.`MOU_CODIGO`) and (`ke`.`KEY_CODIGO` = `e`.`KEY_CODIGO`) and (`mon`.`MON_CODIGO` = `e`.`MON_CODIGO`) and (`u`.`U_CODIGO` = `e`.`U_CODIGO`) and (`i`.`IMP_CODIGO` = `e`.`IMP_CODIGO`) and (`dr`.`DR_CODIGO` = `e`.`DR_CODIGO`));

-- ----------------------------
-- Procedure structure for CPU
-- ----------------------------
DROP PROCEDURE IF EXISTS `CPU`;
delimiter ;;
CREATE PROCEDURE `CPU`(codcpu int(11),codest int(11),tipo varchar(100),marca varchar(100),modelo varchar(100),serie varchar(100),procesador varchar(200),numpro varchar(50),ram varchar(50),nummod varchar(50),disdur varchar(50),numdis varchar(50),actfij varchar(100),obs varchar(300),estdetalle varchar(300),a varchar(1))
BEGIN
declare estcod int(11);
set estcod=(select EST_CODIGO from estados where EST_DETALLE=estdetalle);
IF a='n' THEN
  insert into cpu(EST_CODIGO,C_TIPO,C_MARCA,C_MODELO,C_SERIE,C_PROCESADOR,C_NUMPROCESADOR,C_RAM,C_NUMMODULO,C_DISCODURO,C_NUMDISCO,C_CODACTFIJ,C_OBSERVACION)
  values(codest,tipo,FUN_MAYUS(marca),FUN_MAYUS(modelo),FUN_MAYUS(serie),FUN_MAYUS(procesador),numpro,ram,nummod,disdur,numdis,FUN_MAYUS(actfij),FUN_MAYUS(obs));
END IF;
IF a='m' THEN
  update cpu 
  set EST_CODIGO=estcod,C_TIPO=tipo,C_MARCA=FUN_MAYUS(marca),C_MODELO=FUN_MAYUS(modelo),C_SERIE=FUN_MAYUS(serie),C_PROCESADOR=FUN_MAYUS(procesador),C_NUMPROCESADOR=numpro,C_RAM=ram,C_NUMMODULO=nummod,C_DISCODURO=disdur,C_NUMDISCO=numdis,C_CODACTFIJ=FUN_MAYUS(actfij),C_OBSERVACION=FUN_MAYUS(obs) 
  where C_CODIGO=codcpu;
END IF;
IF a='e' THEN
	delete from cpu 
  where C_CODIGO=codcpu;
END IF;
END
;;
delimiter ;

-- ----------------------------
-- Function structure for FUN_MAYUS
-- ----------------------------
DROP FUNCTION IF EXISTS `FUN_MAYUS`;
delimiter ;;
CREATE FUNCTION `FUN_MAYUS`(texto varchar(300))
 RETURNS varchar(300) CHARSET utf8
BEGIN
	declare t varchar(300);
	set t=UPPER(texto);
	RETURN t;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for MONITOR
-- ----------------------------
DROP PROCEDURE IF EXISTS `MONITOR`;
delimiter ;;
CREATE PROCEDURE `MONITOR`(codmon int(11),codest int(11),marca varchar(100),modelo varchar(100),serie varchar(100),actfij varchar(100),obs varchar(300),estdetalle varchar(300),a varchar(1))
BEGIN
declare estcod int(11);
set estcod=(select EST_CODIGO from estados where EST_DETALLE=estdetalle);
IF a='n' THEN
  insert into monitor(EST_CODIGO,MON_MARCA,MON_MODELO,MON_SERIE,MON_CODACTFIJ,MON_OBSERVACION)values(codest,FUN_MAYUS(marca),FUN_MAYUS(modelo),FUN_MAYUS(serie),FUN_MAYUS(actfij),FUN_MAYUS(obs));
END IF;
IF a='m' THEN
  update monitor set EST_CODIGO=estcod,MON_MARCA=FUN_MAYUS(marca),MON_MODELO=FUN_MAYUS(modelo),MON_SERIE=FUN_MAYUS(serie),MON_OBSERVACION=FUN_MAYUS(obs) where MON_CODIGO=codmon;
END IF;
IF a='e' THEN
	delete from monitor where MON_CODIGO=codmon;
END IF;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for PRO_UPASIGNAR
-- ----------------------------
DROP PROCEDURE IF EXISTS `PRO_UPASIGNAR`;
delimiter ;;
CREATE PROCEDURE `PRO_UPASIGNAR`(tecnombre varchar(100),fecha datetime,des varchar(500),cod int(11))
BEGIN
	DECLARE CODTEC int(11);
  SET CODTEC=(SELECT TEC_CODIGO FROM tecnico WHERE TEC_NOMBRES=tecnombre );
  UPDATE asignar_tiket SET
	TEC_CODIGO=CODTEC,AT_FECHA=fecha,AT_DESCRIPCION=des WHERE AT_CODIGO=cod;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for PRO_UPDR
-- ----------------------------
DROP PROCEDURE IF EXISTS `PRO_UPDR`;
delimiter ;;
CREATE PROCEDURE `PRO_UPDR`(estdetalle varchar(100),marca varchar(100),modelo varchar(100),serie varchar(100),tipo varchar(100),plan varchar(100),psfp varchar(100),connectividad varchar(100),obs  varchar(300),cod int(11),actfij varchar(200))
BEGIN
	declare estcod int(11);
	set estcod=(select EST_CODIGO from estados where EST_DETALLE=estdetalle);
  update dispositivo_red set EST_CODIGO=estcod,DR_MARCA=marca,DR_MODELO=modelo,DR_SERIE=serie,
  DR_TIPO=tipo,DR_NUMPUERTOSLAN=plan,DR_NUMPUERTOSSFP=psfp,DR_CONECTIVIDADWIFI=connectividad,DR_CODACTFIJ=actfij,DR_OBSERVACION=obs where DR_CODIGO=cod;


END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for PRO_UPIMPRESORA
-- ----------------------------
DROP PROCEDURE IF EXISTS `PRO_UPIMPRESORA`;
delimiter ;;
CREATE PROCEDURE `PRO_UPIMPRESORA`(estdetalle varchar(100),marca varchar(100),modelo varchar(100),serie varchar(100),consumible varchar(100),conectividad varchar(2),obs  varchar(300),cod int(11),actfij varchar(200))
BEGIN
	declare estcod int(11);
	set estcod=(select EST_CODIGO from estados where EST_DETALLE=estdetalle);
  update impresora set EST_CODIGO=estcod,IMP_MARCA=marca,IMP_MODELO=modelo,IMP_SERIE=serie,IMP_CONSUMIBLES=consumible,IMP_CONECTIVIDAD=conectividad,IMP_CODACTFIJ=actfij,IMP_OBSERVACION=obs where IMP_CODIGO=cod;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for PRO_UPKEYBOARD
-- ----------------------------
DROP PROCEDURE IF EXISTS `PRO_UPKEYBOARD`;
delimiter ;;
CREATE PROCEDURE `PRO_UPKEYBOARD`(estdetalle varchar(100),marca varchar(100),modelo varchar(100),serie varchar(100),obs  varchar(300),cod int(11),actfij varchar(200))
BEGIN
	declare estcod int(11);
	set estcod=(select EST_CODIGO from estados where EST_DETALLE=estdetalle);
  update keyboard set EST_CODIGO=estcod,KEY_MARCA=marca,KEY_MODELO=modelo,KEY_SERIE=serie,KEY_CODACTFIJ=actfij,KEY_OBSERVACION=obs where KEY_CODIGO=cod;


END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for PRO_UPMOUSE
-- ----------------------------
DROP PROCEDURE IF EXISTS `PRO_UPMOUSE`;
delimiter ;;
CREATE PROCEDURE `PRO_UPMOUSE`(estdetalle varchar(100),marca varchar(100),modelo varchar(100),serie varchar(100),obs  varchar(300),cod int(11),actfij varchar(200))
BEGIN
	declare estcod int(11);
	set estcod=(select EST_CODIGO from estados where EST_DETALLE=estdetalle);
  update mouse set EST_CODIGO=estcod,MOU_MARCA=marca,MOU_MODELO=modelo,MOU_SERIE=serie,MOU_CODACTFIJ=actfij,MOU_OBSERVACION=obs where MOU_CODIGO=cod;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for PRO_UPUPS
-- ----------------------------
DROP PROCEDURE IF EXISTS `PRO_UPUPS`;
delimiter ;;
CREATE PROCEDURE `PRO_UPUPS`(estdetalle varchar(100),marca varchar(100),modelo varchar(100),serie varchar(100),capacidad varchar(100),numtomas varchar(100),obs  varchar(300),cod int(11),actfij varchar(200))
BEGIN
	declare estcod int(11);
	set estcod=(select EST_CODIGO from estados where EST_DETALLE=estdetalle);
  update ups set EST_CODIGO=estcod,U_MARCA=marca,U_MODELO=modelo,U_SERIE=serie,U_CAPACIDADCARGA=capacidad,U_NUMTOMAS=numtomas,U_CODACTFIJ=actfij,U_OBSERVACION=obs where U_CODIGO=cod;

END
;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;
