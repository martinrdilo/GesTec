-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP DATABASE IF EXISTS `timerepair`;
CREATE DATABASE `timerepair` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `timerepair`;

DROP TABLE IF EXISTS `administradores`;
CREATE TABLE `administradores` (
  `idUsuario` int(10) unsigned NOT NULL,
  `plan` tinyint(4) unsigned NOT NULL,
  `idRubro` tinyint(4) unsigned NOT NULL,
  `nombre_em` varchar(45) NOT NULL,
  `email_em` varchar(45) NOT NULL,
  `tel_em` varchar(45) NOT NULL,
  `dir_em` varchar(45) NOT NULL,
  `ciudad_em` varchar(45) NOT NULL,
  `provincia_em` varchar(45) NOT NULL,
  `pais_em` varchar(45) NOT NULL,
  `coment_gral` varchar(400) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `plan` (`plan`),
  CONSTRAINT `administradores_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE,
  CONSTRAINT `administradores_ibfk_2` FOREIGN KEY (`plan`) REFERENCES `planes` (`idPlan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `administradores` (`idUsuario`, `plan`, `idRubro`, `nombre_em`, `email_em`, `tel_em`, `dir_em`, `ciudad_em`, `provincia_em`, `pais_em`, `coment_gral`) VALUES
(13,	3,	4,	'Automovil Repair',	'autorepair@gmail.com',	'789456',	'ogins 123',	'mdp',	'bs as',	'arg',	'soy un comentario adicional'),
(24,	1,	1,	'Pc Repair',	'pcrepair@gmail.com',	'123123',	'lamadrid 1250',	'bsas',	'bsas',	'arg',	'Reparacion de automoviles en gral'),
(88,	2,	0,	'electronica',	'electron//ica@electronica.com',	'123213213',	'electronica213',	'electronica',	'electronica',	'electronica',	''),
(232,	1,	3,	'Hermandad Pesquera',	'santy.mdp.85@gmail.com',	'2234858552',	'bermejo 4575',	'mar del plata',	'buenos aires',	'argentina',	''),
(233,	2,	4,	'Empresa sa',	'santi@gmail.com',	'2234898556',	'algun lugar 2020',	'mdp',	'bs as',	'arg',	'esaaa');

DROP TABLE IF EXISTS `admins_clientes`;
CREATE TABLE `admins_clientes` (
  `idCliente` int(10) unsigned NOT NULL,
  `idAdmin` int(10) unsigned NOT NULL,
  KEY `idAdmin` (`idAdmin`),
  KEY `idCliente` (`idCliente`),
  CONSTRAINT `admins_clientes_ibfk_3` FOREIGN KEY (`idAdmin`) REFERENCES `usuarios` (`idUsuario`),
  CONSTRAINT `admins_clientes_ibfk_4` FOREIGN KEY (`idCliente`) REFERENCES `usuarios` (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `admins_clientes` (`idCliente`, `idAdmin`) VALUES
(27,	13),
(91,	13),
(96,	13),
(230,	133),
(234,	24),
(235,	13),
(238,	24),
(239,	24),
(240,	24),
(241,	24),
(242,	24),
(243,	24),
(244,	24);

DROP TABLE IF EXISTS `admins_rubros`;
CREATE TABLE `admins_rubros` (
  `idRubro` tinyint(4) unsigned NOT NULL AUTO_INCREMENT,
  `nombreRubro` varchar(45) NOT NULL,
  PRIMARY KEY (`idRubro`),
  UNIQUE KEY `idRubro` (`idRubro`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

INSERT INTO `admins_rubros` (`idRubro`, `nombreRubro`) VALUES
(1,	'Informática'),
(2,	'Electricidad'),
(3,	'Electrónica'),
(4,	'Automóvil'),
(5,	'Carpintería'),
(6,	'Herrería'),
(7,	'Pintureria'),
(8,	'Diseñador grafico');

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE `clientes` (
  `idUsuario` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idUsuario`),
  CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `clientes` (`idUsuario`) VALUES
(25),
(27),
(72),
(77),
(78),
(79),
(91),
(134),
(135),
(136),
(230),
(234),
(235),
(238),
(239),
(240),
(241),
(242),
(243),
(244);

DROP TABLE IF EXISTS `consultas_clientes`;
CREATE TABLE `consultas_clientes` (
  `idConsulta` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idAdmin` int(10) NOT NULL,
  `idCliente` int(10) NOT NULL,
  `asunto` varchar(50) DEFAULT NULL,
  `consulta_text` mediumtext NOT NULL,
  PRIMARY KEY (`idConsulta`),
  UNIQUE KEY `idConsulta` (`idConsulta`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;

INSERT INTO `consultas_clientes` (`idConsulta`, `idAdmin`, `idCliente`, `asunto`, `consulta_text`) VALUES
(1,	13,	96,	'soy un asunto ',	'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam illum odio sint officia quod fugit, iste aliquam. Exercitationem, labore consectetur, nulla hic ipsum enim cum eligendi quia vel quibusdam praesentium.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam illum odio sint officia quod fugit, iste aliquam. Exercitationem, labore consectetur, nulla hic ipsum enim cum eligendi quia vel quibusdam praesentium.'),
(2,	13,	96,	'soy un asunto',	'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam illum odio sint officia quod fugit, iste aliquam. Exercitationem, labore consectetur, nulla hic ipsum enim cum eligendi quia vel quibusdam praesentium.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam illum odio sint officia quod fugit, iste aliquam. Exercitationem, labore consectetur, nulla hic ipsum enim cum eligendi quia vel quibusdam praesentium.'),
(3,	13,	96,	'soy un asunto',	'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos vitae eveniet, non ipsum saepe, eos perspiciatis sapiente. Pariatur voluptas, unde illo, quia consequatur sunt molestiae quos saepe, sequi eaque architecto! Asperiores inventore dolor rem, voluptatem! Libero aperiam, quae omnis sequi debitis quis earum facere mollitia delectus inventore, sunt ad veniam.\n'),
(45,	24,	96,	'soy un asunto',	'                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, quam facere sunt veniam repellat reprehenderit illo exercitationem inventore odit quos necessitatibus, vero quod itaque animi voluptas est hic assumenda nisi temporibus iure nam id pariatur asperiores. Beatae, reiciendis qui deleniti numquam accusantium saepe tenetur repudiandae, architecto voluptatum cumque, veniam est.\n'),
(46,	24,	96,	'soy un asunto',	'asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa asddsa '),
(47,	13,	96,	'soy un asunto',	'yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea yea '),
(48,	24,	96,	'soy un asunto',	'setTimeout function setTimeout function setTimeout function setTimeout function setTimeout function setTimeout function setTimeout function setTimeout function setTimeout function setTimeout function setTimeout function setTimeout function setTimeout function setTimeout function setTimeout function setTimeout function setTimeout function setTimeout function setTimeout function setTimeout function setTimeout function setTimeout function setTimeout function ');

DROP TABLE IF EXISTS `ordenes`;
CREATE TABLE `ordenes` (
  `idOrden` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idAdmin` int(10) unsigned NOT NULL,
  `idCliente` int(10) unsigned NOT NULL,
  `idEstado` tinyint(4) unsigned NOT NULL,
  `idTipo` tinyint(4) unsigned NOT NULL,
  `idProducto` int(10) unsigned NOT NULL,
  `fechaIngreso` date NOT NULL,
  `fechaUltimaMod` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `descripcion` mediumtext,
  `diagnostico` mediumtext,
  `solucion` mediumtext,
  `precio` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`idOrden`),
  UNIQUE KEY `idPresupuestos_UNIQUE` (`idOrden`),
  KEY `tipoPre` (`idTipo`),
  KEY `estado` (`idEstado`),
  KEY `idCliente` (`idCliente`),
  KEY `idAdmin` (`idAdmin`),
  CONSTRAINT `ordenes_ibfk_10` FOREIGN KEY (`idCliente`) REFERENCES `usuarios` (`idUsuario`),
  CONSTRAINT `ordenes_ibfk_11` FOREIGN KEY (`idAdmin`) REFERENCES `usuarios` (`idUsuario`),
  CONSTRAINT `ordenes_ibfk_8` FOREIGN KEY (`idTipo`) REFERENCES `ordenes_tipos` (`idTipo`),
  CONSTRAINT `ordenes_ibfk_9` FOREIGN KEY (`idEstado`) REFERENCES `ordenes_estados` (`idEstado`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8;

INSERT INTO `ordenes` (`idOrden`, `idAdmin`, `idCliente`, `idEstado`, `idTipo`, `idProducto`, `fechaIngreso`, `fechaUltimaMod`, `descripcion`, `diagnostico`, `solucion`, `precio`) VALUES
(44,	24,	135,	1,	1,	10,	'2017-11-11',	'2017-11-14 04:22:55',	'Notebook Toshiba, rayas a los costados y sin cable a corriente',	'Problemas de video',	'Testear y posible compra de una nueva Placa',	1800),
(58,	133,	230,	1,	1,	20,	'2017-11-12',	'2017-11-13 01:21:37',	'ggyfygh',	'',	'',	700),
(59,	13,	96,	5,	1,	21,	'2017-11-13',	'2017-11-13 03:01:47',	'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga id nobis laborum quibusdam recusandae assumenda earum praesentium necessitatibus, aliquid explicabo nemo consectetur fugiat amet cupiditate dolorem non officia expedita. Unde est fugiat sed! Eligendi numquam, quia illum unde mollitia reiciendis veritatis sed exercitationem ea provident, quasi, necessitatibus ipsa cupiditate velit.',	'    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga id nobis laborum quibusdam recusandae assumenda earum praesentium necessitatibus, aliquid explicabo nemo consectetur fugiat amet cupiditate dolorem non officia expedita. Unde est fugiat sed! Eligendi numquam, quia illum unde mollitia reiciendis veritatis sed exercitationem ea provident, quasi, necessitatibus ipsa cupiditate velit.\n',	'    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga id nobis laborum quibusdam recusandae assumenda earum praesentium necessitatibus, aliquid explicabo nemo consectetur fugiat amet cupiditate dolorem non officia expedita. Unde est fugiat sed! Eligendi numquam, quia illum unde mollitia reiciendis veritatis sed exercitationem ea provident, quasi, necessitatibus ipsa cupiditate velit.\n',	4294967295),
(63,	24,	234,	1,	3,	24,	'2017-11-13',	'2017-11-14 04:24:51',	'Pa Toshiba sin la tapa de costado y sin monitor',	'Problemas con la placa de sonido ',	'Campiar la pieza con problemas del mother',	500),
(65,	24,	243,	5,	1,	25,	'2017-11-14',	'2017-11-14 04:20:46',	'Computadora Hr Sin garantia, solo cpu falta conector a corriente',	'A veces prende y hace un ruido extraño en el Cooler',	'Limpieza total e implementación de nuevo Micro',	2400),
(68,	24,	241,	5,	1,	28,	'2017-11-14',	'2017-11-14 04:37:50',	'Netbook sin bateria',	'Problemas para arrancar',	'Formatear la netbook',	500);

DROP TABLE IF EXISTS `ordenes_estados`;
CREATE TABLE `ordenes_estados` (
  `idEstado` tinyint(4) unsigned NOT NULL AUTO_INCREMENT,
  `nombreEstadoOrd` varchar(45) NOT NULL,
  PRIMARY KEY (`idEstado`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

INSERT INTO `ordenes_estados` (`idEstado`, `nombreEstadoOrd`) VALUES
(1,	'En curso'),
(2,	'Finalizada'),
(3,	'Cerrada'),
(4,	'Cancelada'),
(5,	'En espera de aprobación'),
(6,	'Rechazada'),
(7,	'Ingresado por cliente');

DROP TABLE IF EXISTS `ordenes_tipos`;
CREATE TABLE `ordenes_tipos` (
  `idTipo` tinyint(4) unsigned NOT NULL AUTO_INCREMENT,
  `nombreTipoOrd` varchar(40) NOT NULL,
  PRIMARY KEY (`idTipo`),
  UNIQUE KEY `idTipo` (`idTipo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO `ordenes_tipos` (`idTipo`, `nombreTipoOrd`) VALUES
(1,	'Reparación'),
(2,	'Pedido'),
(3,	'Instalación'),
(4,	'Revisión');

DROP TABLE IF EXISTS `planes`;
CREATE TABLE `planes` (
  `idPlan` tinyint(4) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) NOT NULL,
  `usuarios_max` tinyint(4) unsigned NOT NULL,
  `ordenes_max` int(10) unsigned NOT NULL,
  `pago_mensual` int(10) unsigned NOT NULL,
  `pago_semestral` int(10) unsigned NOT NULL,
  `pago_anual` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idPlan`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO `planes` (`idPlan`, `nombre`, `usuarios_max`, `ordenes_max`, `pago_mensual`, `pago_semestral`, `pago_anual`) VALUES
(1,	'startup',	2,	300,	25,	21,	18),
(2,	'business',	7,	700,	37,	33,	30),
(3,	'corporate',	14,	1600,	62,	58,	55);

DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos` (
  `idProducto` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idRubro` tinyint(4) unsigned NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `marca` varchar(45) DEFAULT NULL,
  `modelo` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idProducto`),
  UNIQUE KEY `idProductos_UNIQUE` (`idProducto`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

INSERT INTO `productos` (`idProducto`, `idRubro`, `tipo`, `marca`, `modelo`, `descripcion`) VALUES
(1,	1,	'notebook',	'HP',	'G42-3058',	NULL),
(2,	1,	'PC escritorio',	'PC BOX',	'',	NULL),
(3,	1,	'Notebook',	'Acer',	'1234',	NULL),
(4,	4,	'camioneta',	'Ford',	'Ranger',	'2015'),
(5,	4,	'auto',	'Renault',	'Clio',	'2001'),
(6,	1,	'notebook',	'PC BOX',	'G42-3058',	NULL),
(7,	1,	'Tablet',	'Dell',	'galaxy s4',	NULL),
(8,	1,	'Tablet',	'PC BOX',	'G42-3058',	NULL),
(9,	1,	'asd',	'Acer',	'asd',	NULL),
(10,	1,	'notebook',	'Toshiba',	'a 32',	NULL),
(11,	1,	'Tablet',	'Toshiba',	'G42-3058',	NULL),
(12,	1,	'Tablet',	'Acer',	'a 32',	NULL),
(13,	1,	'PC escritorio',	'PC BOX',	'G42-3058',	NULL),
(14,	1,	'Telefono',	'Toshiba',	'a7',	NULL),
(15,	1,	'Telefono',	'Toshiba',	'galaxy s4',	NULL),
(16,	1,	'Tablet',	'PC BOX',	'1234',	NULL),
(17,	1,	'Telefono',	'a',	'd',	NULL),
(18,	1,	'qwe',	'qwe',	'qwe',	NULL),
(19,	1,	'asd',	'asd',	'asd',	NULL),
(20,	0,	'PC escritorio',	'Ford',	'G42-3058',	NULL),
(21,	4,	'camioneta',	'Ford',	'F-100',	NULL),
(22,	1,	'Telefono',	'HP',	'galaxy s4',	NULL),
(23,	1,	'Tablet',	'Toshiba',	'galaxy s4',	NULL),
(24,	1,	'PC escritorio',	'Toshiba',	'G42-3058',	NULL),
(25,	1,	'PC escritorio',	'HP',	'Serie 5',	NULL),
(26,	1,	'notebook',	'ASUS',	'I3 2120',	NULL),
(27,	1,	'Tablet',	'EUROCASE',	'Calliope',	NULL),
(28,	1,	'Netbook',	'EXO',	'G45-5080',	NULL);

DROP TABLE IF EXISTS `productos_clientes`;
CREATE TABLE `productos_clientes` (
  `idUsuario_cliente` int(10) unsigned NOT NULL,
  `idProducto` int(10) unsigned NOT NULL,
  KEY `idUsuario_cliente` (`idUsuario_cliente`),
  KEY `idProducto` (`idProducto`),
  CONSTRAINT `productos_clientes_ibfk_2` FOREIGN KEY (`idUsuario_cliente`) REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `productos_clientes_ibfk_3` FOREIGN KEY (`idProducto`) REFERENCES `productos` (`idProducto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `productos_clientes` (`idUsuario_cliente`, `idProducto`) VALUES
(25,	1),
(25,	2),
(25,	3);

DROP TABLE IF EXISTS `tipos_planes`;
CREATE TABLE `tipos_planes` (
  `idTipo_plan` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `tipo_plan` varchar(40) NOT NULL,
  PRIMARY KEY (`idTipo_plan`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO `tipos_planes` (`idTipo_plan`, `tipo_plan`) VALUES
(1,	'mensual'),
(2,	'semestral'),
(3,	'anual');

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `idUsuario` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idTipoUsuario` tinyint(4) unsigned NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `nombreUsuario` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `telefono` int(20) DEFAULT NULL,
  `fechaRegistro` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ultimoIngreso` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`idUsuario`),
  UNIQUE KEY `idUsuarios_UNIQUE` (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=246 DEFAULT CHARSET=utf8;

INSERT INTO `usuarios` (`idUsuario`, `idTipoUsuario`, `nombre`, `apellido`, `email`, `nombreUsuario`, `password`, `telefono`, `fechaRegistro`, `ultimoIngreso`) VALUES
(13,	2,	'tincho',	'dilo',	'asd@asd.com',	'tincho',	'dilo',	132456,	'0000-00-00 00:00:00',	'2017-11-13 18:21:51'),
(24,	2,	'Pipa',	'Benedetto',	'pipa@boca.com',	'pipa',	'123',	999,	'0000-00-00 00:00:00',	'2017-11-14 01:52:55'),
(25,	3,	'martin',	'dilorenzo',	'martin@gmail.com',	'tincho',	'123',	48010101,	'0000-00-00 00:00:00',	'2017-11-14 01:39:49'),
(27,	3,	'nacho',	'marcos',	'nacho@gmail.com',	'',	'asd',	23423432,	'0000-00-00 00:00:00',	'2017-11-12 20:57:03'),
(71,	3,	'Santiago',	'Monaco',	'asd@hotmail.com',	'',	'',	0,	'0000-00-00 00:00:00',	'2017-11-12 20:57:03'),
(72,	3,	'jose',	'antonio',	'santy.mdp.85@gmail.com',	'jose antonio',	'123',	0,	'0000-00-00 00:00:00',	'2017-11-12 20:57:03'),
(77,	3,	'asd',	'asd',	'asdqwe@asd.com',	'asd',	'asd',	0,	'0000-00-00 00:00:00',	'2017-11-12 20:57:03'),
(78,	3,	'asd',	'asdf',	'asdfq.@asd.com',	'asd',	'asd',	0,	'0000-00-00 00:00:00',	'2017-11-12 20:57:03'),
(79,	3,	'asd',	'asd',	'asd@asdasd.com',	'asd',	'asd',	0,	'0000-00-00 00:00:00',	'2017-11-12 20:57:03'),
(88,	2,	'electronica',	'electronica',	'electronica@electronica.com',	'elec¬¬°°||///tronica',	'123',	123213,	'0000-00-00 00:00:00',	'2017-11-12 20:57:03'),
(91,	3,	'juan',	'garg',	'el_mati_mdp@gmail.com',	'juangar',	'1232',	223478954,	'0000-00-00 00:00:00',	'2017-11-12 20:57:03'),
(96,	3,	'roberto',	'sanchez',	'roberto@jose.com',	'robert123',	'123',	2147483647,	'0000-00-00 00:00:00',	'2017-11-13 02:30:02'),
(126,	2,	'Dominic',	'Toretto',	'toretto@gmail.com',	'toretto789',	'123456',	2147483647,	'0000-00-00 00:00:00',	'2017-11-12 20:57:03'),
(127,	2,	'jose',	'perez',	'jose@hotmail.com',	'cocacola',	'12345',	2147483647,	'0000-00-00 00:00:00',	'2017-11-12 20:57:03'),
(131,	2,	'jose',	'carmona',	'carmona@gmail.com',	'carmona',	'123',	2147483647,	'0000-00-00 00:00:00',	'2017-11-12 20:57:03'),
(132,	2,	'Salvador',	'Monaco',	'salvador@gmail.com',	'Elviejo',	'123456',	2147483647,	'0000-00-00 00:00:00',	'2017-11-12 20:57:03'),
(133,	2,	'Pepe',	'Argento778',	'pepe@gmail.com',	'pepe123',	'1234',	2147483647,	'0000-00-00 00:00:00',	'2017-11-12 21:57:50'),
(134,	3,	'fdsfdf',	'fdsf',	'fdsf@g.com',	'fdsfds',	'123',	4545465,	'0000-00-00 00:00:00',	'2017-11-12 20:57:03'),
(135,	3,	'teresita',	'dilorenzo',	'teresitadilorenzo@gmail.com',	'tere',	'123',	5507283,	'0000-00-00 00:00:00',	'2017-11-12 20:57:03'),
(136,	3,	'juan',	'gargiulo',	'juan@gmail.com',	'juan',	'123',	22348798,	'0000-00-00 00:00:00',	'2017-11-12 20:57:03'),
(230,	3,	'hola',	'Toretto',	'juan@jose.com',	'santi',	'123',	2147483647,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(232,	2,	'jose',	'monaco',	'santy.mdp.85@gmail.com',	'hermandad',	'123',	2147483647,	'2017-11-13 14:20:10',	'0000-00-00 00:00:00'),
(233,	2,	'marcelo',	'agachate y conocelo',	'marcelo@gmail.com',	'hola',	'123',	2147483647,	'2017-11-13 17:28:54',	'0000-00-00 00:00:00'),
(234,	3,	'martin',	'nose',	'matin@gmail.com',	'martin',	'123',	2147483647,	'0000-00-00 00:00:00',	'2017-11-13 18:07:58'),
(235,	3,	'jose',	'perez',	'jose@gmail.com',	'jose',	'123',	223487857,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(238,	3,	'Marcia',	'Morales',	'marchu@hotmail.com',	'marcia',	'123',	2147483647,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(239,	3,	'Luciana',	'Gonzales',	'lucha@gmail.com',	'lucha',	'123',	2147483647,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(240,	3,	'maximiliano',	'herrera',	'maxi@gmail.com',	'maxi',	'123',	2147483647,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(241,	3,	'ivan',	'rodriguez',	'ivan_vandersex@gmail.com',	'ivan',	'123',	2147483647,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(242,	3,	'Matias',	'Gonzales',	'matias@hotmail.com',	'matias',	'123',	2147483647,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(243,	3,	'Eliana',	'Palla',	'Ely@gmail.com',	'ely',	'123',	2147483647,	'0000-00-00 00:00:00',	'2017-11-14 01:40:10'),
(244,	3,	'Santiago',	'Monaco',	'santiago@gmail.com',	'santi',	'123',	2147483647,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00');

DROP TABLE IF EXISTS `usuarios_tipos`;
CREATE TABLE `usuarios_tipos` (
  `idTipoUsuario` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nombreTipoUsuario` varchar(45) NOT NULL,
  PRIMARY KEY (`idTipoUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO `usuarios_tipos` (`idTipoUsuario`, `nombreTipoUsuario`) VALUES
(1,	'superadmin'),
(2,	'admin'),
(3,	'cliente');

-- 2017-11-14 16:03:35
