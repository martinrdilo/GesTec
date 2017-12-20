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
(232,	1,	3,	'Hermandad Pesquera',	'santy.mdp.85@gmail.com',	'2234858552',	'bermejo 4575',	'mar del plata',	'buenos aires',	'argentina',	''),
(233,	2,	4,	'Empresa sa',	'santi@gmail.com',	'2234898556',	'algun lugar 2020',	'mdp',	'bs as',	'arg',	'esaaa'),
(248,	3,	1,	'DimarTech',	'dimartechnologies@gmail.com',	'2236857847',	'O\'higgins 1802',	'Mar del Plata',	'Buenos Aires',	'Argentina',	'');

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
(91,	13),
(96,	13),
(230,	133),
(235,	13),
(238,	24),
(239,	24),
(240,	24),
(241,	24),
(242,	24),
(243,	24),
(244,	24),
(247,	24),
(249,	248),
(250,	248),
(251,	248),
(252,	248);

DROP TABLE IF EXISTS `admins_rubros`;
CREATE TABLE `admins_rubros` (
  `idRubro` tinyint(4) unsigned NOT NULL AUTO_INCREMENT,
  `nombreRubro` varchar(45) NOT NULL,
  PRIMARY KEY (`idRubro`),
  UNIQUE KEY `idRubro` (`idRubro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(72),
(91),
(134),
(135),
(136),
(230),
(235),
(238),
(239),
(240),
(241),
(242),
(243),
(244),
(247),
(249),
(250),
(251),
(252);

DROP TABLE IF EXISTS `consultas_clientes`;
CREATE TABLE `consultas_clientes` (
  `idConsulta` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idAdmin` int(10) NOT NULL,
  `idCliente` int(10) NOT NULL,
  `asunto` varchar(50) DEFAULT NULL,
  `consulta_text` mediumtext NOT NULL,
  PRIMARY KEY (`idConsulta`),
  UNIQUE KEY `idConsulta` (`idConsulta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `ordenes` (`idOrden`, `idAdmin`, `idCliente`, `idEstado`, `idTipo`, `idProducto`, `fechaIngreso`, `fechaUltimaMod`, `descripcion`, `diagnostico`, `solucion`, `precio`) VALUES
(58,	133,	230,	1,	1,	20,	'2017-11-12',	'2017-11-13 01:21:37',	'ggyfygh',	'',	'',	700),
(59,	13,	96,	5,	1,	21,	'2017-11-13',	'2017-11-13 03:01:47',	'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga id nobis laborum quibusdam recusandae assumenda earum praesentium necessitatibus, aliquid explicabo nemo consectetur fugiat amet cupiditate dolorem non officia expedita. Unde est fugiat sed! Eligendi numquam, quia illum unde mollitia reiciendis veritatis sed exercitationem ea provident, quasi, necessitatibus ipsa cupiditate velit.',	'    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga id nobis laborum quibusdam recusandae assumenda earum praesentium necessitatibus, aliquid explicabo nemo consectetur fugiat amet cupiditate dolorem non officia expedita. Unde est fugiat sed! Eligendi numquam, quia illum unde mollitia reiciendis veritatis sed exercitationem ea provident, quasi, necessitatibus ipsa cupiditate velit.\n',	'    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga id nobis laborum quibusdam recusandae assumenda earum praesentium necessitatibus, aliquid explicabo nemo consectetur fugiat amet cupiditate dolorem non officia expedita. Unde est fugiat sed! Eligendi numquam, quia illum unde mollitia reiciendis veritatis sed exercitationem ea provident, quasi, necessitatibus ipsa cupiditate velit.\n',	4294967295),
(65,	24,	243,	1,	1,	25,	'2017-11-14',	'2017-11-14 18:37:47',	'detalle de su descripción',	'detalle de su descripción',	'detalle de su descripción',	2400),
(68,	24,	241,	5,	1,	28,	'2017-11-14',	'2017-11-14 04:37:50',	'Netbook sin bateria',	'Problemas para arrancar',	'Formatear la netbook',	500),
(69,	24,	239,	1,	1,	29,	'2017-11-14',	'2017-11-14 17:28:32',	'detalle de su descripción',	'detalle de su diagnóstico',	'detalle de su solución',	1500),
(70,	24,	239,	2,	1,	30,	'2017-11-14',	'2017-11-14 17:49:38',	'detalle de su descripción',	'detalle de su diagnostico',	'detalle de su solucion',	1234),
(71,	24,	241,	1,	4,	31,	'2017-11-14',	'2017-11-14 17:37:27',	'detalle de su descripción',	'detalle de su diagnostico',	'detalle de su solucion',	5555),
(72,	24,	240,	1,	1,	32,	'2017-11-14',	'2017-11-14 17:39:53',	'detalle de su descripción',	'detalle de su diagnótico',	'detalle de su solución',	5000),
(73,	24,	244,	5,	1,	33,	'2017-11-14',	'2017-11-14 18:49:39',	'detalle de su descripción',	'detalle de su diagnostico',	'detalle de su solucion',	12345),
(74,	24,	238,	2,	1,	25,	'2017-11-14',	'2017-11-14 17:50:57',	'detalle de su descripción',	'detalle de su diagnostico',	'detalle de su solucion',	5555),
(77,	24,	247,	1,	1,	1,	'2017-11-14',	'2017-11-14 21:15:27',	'aca va algo',	'aca otra cosa',	'no se me oicurre nada',	700),
(78,	24,	247,	1,	2,	36,	'2017-11-14',	'2017-11-14 21:14:23',	'añfp',	'sdd',	'ptra cosa',	800),
(79,	248,	249,	2,	1,	37,	'2017-12-08',	'2017-12-09 16:17:35',	'Teclas sueltas. Boton izquierdo de touchpad no funciona.',	'circuito de touch pad en mal estado, cambio de botón. Cambio de teclado.',	'Cambio de teclado. Reparar circuito touchpad. Cambiar botón',	0),
(81,	248,	250,	1,	1,	39,	'2017-12-09',	'2017-12-09 15:48:17',	'Al encender hace mucho ruido. Luego de un tiempo de uso se apaga.',	'',	'',	0),
(82,	248,	251,	2,	3,	40,	'2017-12-09',	'2017-12-09 15:58:43',	'Wifi no llega con buena señal a todas las habitaciones de la casa. Configurar red para compartir archivos e impresoras.',	'Router con buena potencia en una ubicación estratégica que pueda dar buena señal a todos los dispositivos de la casa.',	'Instalación del router arriba del telesivor.',	0),
(83,	248,	252,	1,	1,	41,	'2017-12-09',	'2017-12-09 16:05:58',	'Se apaga luego de varias horas de uso. Hacer bakcup de fotos y luego restaurar sistema operativo a valores de fábrica.',	'',	'',	0),
(85,	248,	252,	1,	4,	43,	'2017-12-09',	'2017-12-09 16:08:58',	'PC nueva en caja. Poner a punto, configurar para el primer uso. Instalar algunos programas si es necesario.',	'',	'',	0);

DROP TABLE IF EXISTS `ordenes_estados`;
CREATE TABLE `ordenes_estados` (
  `idEstado` tinyint(4) unsigned NOT NULL AUTO_INCREMENT,
  `nombreEstadoOrd` varchar(45) NOT NULL,
  PRIMARY KEY (`idEstado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `productos` (`idProducto`, `idRubro`, `tipo`, `marca`, `modelo`, `descripcion`) VALUES
(1,	1,	'notebook',	'HP',	'G42-3058',	NULL),
(2,	1,	'PC escritorio',	'PC BOX',	'',	NULL),
(3,	1,	'Notebook',	'Acer',	'1234',	NULL),
(4,	4,	'camioneta',	'Ford',	'Ranger',	'2015'),
(5,	4,	'auto',	'Renault',	'Clio',	'2001'),
(6,	1,	'notebook',	'PC BOX',	'G42-3058',	NULL),
(7,	1,	'Tablet',	'Dell',	'galaxy s4',	NULL),
(8,	1,	'Tablet',	'PC BOX',	'G42-3058',	NULL),
(10,	1,	'notebook',	'Toshiba',	'a 32',	NULL),
(11,	1,	'Tablet',	'Toshiba',	'G42-3058',	NULL),
(12,	1,	'Tablet',	'Acer',	'a 32',	NULL),
(13,	1,	'PC escritorio',	'PC BOX',	'G42-3058',	NULL),
(14,	1,	'Telefono',	'Toshiba',	'a7',	NULL),
(15,	1,	'Telefono',	'Toshiba',	'galaxy s4',	NULL),
(20,	0,	'PC escritorio',	'Ford',	'G42-3058',	NULL),
(21,	4,	'camioneta',	'Ford',	'F-100',	NULL),
(22,	1,	'Telefono',	'HP',	'galaxy s4',	NULL),
(23,	1,	'Tablet',	'Toshiba',	'galaxy s4',	NULL),
(24,	1,	'PC escritorio',	'Toshiba',	'G42-3058',	NULL),
(25,	1,	'PC escritorio',	'HP',	'Serie 5',	NULL),
(26,	1,	'notebook',	'ASUS',	'I3 2120',	NULL),
(27,	1,	'Tablet',	'EUROCASE',	'Calliope',	NULL),
(28,	1,	'Netbook',	'EXO',	'G45-5080',	NULL),
(29,	1,	'Telefono',	'EUROCASE',	'galaxy s4',	NULL),
(30,	1,	'Netbook',	'Dell',	'galaxy s4',	NULL),
(31,	1,	'Telefono',	'Toshiba',	'I3 2120',	NULL),
(32,	1,	'Tablet',	'EUROCASE',	'Serie 5',	NULL),
(33,	1,	'Netbook',	'Dell',	'I3 2120',	NULL),
(34,	1,	'PC escritorio',	'PC BOX',	'Serie 5',	NULL),
(35,	1,	'notebook',	'Sony',	'Vaio',	NULL),
(36,	1,	'Telefono',	'Dell',	'Vaio',	NULL),
(37,	1,	'notebook',	'ASUS',	'N61J',	NULL),
(38,	1,	'',	'Euro',	'',	NULL),
(39,	1,	'PC escritorio',	'EUROCASE',	'EUK4-214',	NULL),
(40,	1,	'router',	'tp-link',	'tl-wr940n',	NULL),
(41,	1,	'notebook',	'EUROCASE',	'TW9',	NULL),
(42,	1,	'notebook',	'HP',	'',	NULL),
(43,	1,	'notebook',	'HP',	'1GR10LA',	NULL);

DROP TABLE IF EXISTS `productos_clientes`;
CREATE TABLE `productos_clientes` (
  `idUsuario_cliente` int(10) unsigned NOT NULL,
  `idProducto` int(10) unsigned NOT NULL,
  KEY `idUsuario_cliente` (`idUsuario_cliente`),
  KEY `idProducto` (`idProducto`),
  CONSTRAINT `productos_clientes_ibfk_2` FOREIGN KEY (`idUsuario_cliente`) REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `productos_clientes_ibfk_3` FOREIGN KEY (`idProducto`) REFERENCES `productos` (`idProducto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `tipos_planes`;
CREATE TABLE `tipos_planes` (
  `idTipo_plan` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `tipo_plan` varchar(40) NOT NULL,
  PRIMARY KEY (`idTipo_plan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `usuarios` (`idUsuario`, `idTipoUsuario`, `nombre`, `apellido`, `email`, `nombreUsuario`, `password`, `telefono`, `fechaRegistro`, `ultimoIngreso`) VALUES
(13,	2,	'tincho',	'dilo',	'asd@asd.com',	'tincho',	'dilo',	132456,	'0000-00-00 00:00:00',	'2017-11-13 18:21:51'),
(24,	2,	'Pipa',	'Benedetto',	'pipa@boca.com',	'empresa',	'123',	999,	'0000-00-00 00:00:00',	'2017-11-22 16:29:54'),
(72,	3,	'jose',	'antonio',	'santy.mdp.85@gmail.com',	'jose antonio',	'123',	0,	'0000-00-00 00:00:00',	'2017-11-12 20:57:03'),
(91,	3,	'juan',	'garg',	'el_mati_mdp@gmail.com',	'juangar',	'1232',	223478954,	'0000-00-00 00:00:00',	'2017-11-12 20:57:03'),
(96,	3,	'roberto',	'sanchez',	'roberto@jose.com',	'robert123',	'123',	2147483647,	'0000-00-00 00:00:00',	'2017-11-13 02:30:02'),
(126,	2,	'Dominic',	'Toretto',	'toretto@gmail.com',	'toretto789',	'123456',	2147483647,	'0000-00-00 00:00:00',	'2017-11-12 20:57:03'),
(127,	2,	'jose',	'perez',	'jose@hotmail.com',	'cocacola',	'12345',	2147483647,	'0000-00-00 00:00:00',	'2017-11-12 20:57:03'),
(131,	2,	'jose',	'carmona',	'carmona@gmail.com',	'carmona',	'123',	2147483647,	'0000-00-00 00:00:00',	'2017-11-12 20:57:03'),
(132,	2,	'Salvador',	'Monaco',	'salvador@gmail.com',	'Elviejo',	'123456',	2147483647,	'0000-00-00 00:00:00',	'2017-11-12 20:57:03'),
(133,	2,	'Pepe',	'Argento778',	'pepe@gmail.com',	'pepe123',	'1234',	2147483647,	'0000-00-00 00:00:00',	'2017-11-14 15:35:18'),
(134,	3,	'fdsfdf',	'fdsf',	'fdsf@g.com',	'fdsfds',	'123',	4545465,	'0000-00-00 00:00:00',	'2017-11-12 20:57:03'),
(135,	3,	'teresita',	'dilorenzo',	'teresitadilorenzo@gmail.com',	'tere',	'123',	5507283,	'0000-00-00 00:00:00',	'2017-11-12 20:57:03'),
(136,	3,	'juan',	'gargiulo',	'juan@gmail.com',	'juan',	'123',	22348798,	'0000-00-00 00:00:00',	'2017-11-12 20:57:03'),
(230,	3,	'hola',	'Toretto',	'juan@jose.com',	'santi',	'123',	2147483647,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(232,	2,	'jose',	'monaco',	'santy.mdp.85@gmail.com',	'hermandad',	'123',	2147483647,	'2017-11-13 14:20:10',	'0000-00-00 00:00:00'),
(233,	2,	'marcelo',	'agachate y conocelo',	'marcelo@gmail.com',	'hola',	'123',	2147483647,	'2017-11-13 17:28:54',	'0000-00-00 00:00:00'),
(235,	3,	'jose',	'perez',	'jose@gmail.com',	'jose',	'123',	223487857,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(238,	3,	'Marcia',	'Morales',	'marchu@hotmail.com',	'marcia',	'123',	2147483647,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(239,	3,	'Luciana',	'Gonzales',	'lucha@gmail.com',	'lucha',	'123',	2147483647,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(240,	3,	'maximiliano',	'herrera',	'maxi@gmail.com',	'maxi',	'123',	2147483647,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(241,	3,	'ivan',	'rodriguez',	'ivan_vandersex@gmail.com',	'ivan',	'123',	2147483647,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(242,	3,	'Matias',	'Gonzales',	'matias@hotmail.com',	'matias',	'123',	2147483647,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(243,	3,	'Eliana',	'Palla',	'Ely@gmail.com',	'ely',	'123',	2147483647,	'0000-00-00 00:00:00',	'2017-11-14 16:13:33'),
(244,	3,	'Santiago',	'Monaco',	'santiago@gmail.com',	'santi',	'123',	2147483647,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(247,	3,	'ignacio',	'apellido',	'nacho@gmail.com',	'nacho',	'123',	2147483647,	'0000-00-00 00:00:00',	'2017-11-22 13:34:01'),
(248,	2,	'Martin',	'Dilorenzo',	'martin.mdp92@gmail.com',	'dimartech',	'dimar,.12',	2147483647,	'2017-12-06 12:38:19',	'2017-12-09 12:43:51'),
(249,	3,	'Polo ',	'Granja',	'',	'pologranja',	'polo530',	2147483647,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(250,	3,	'Sergio',	'Asker',	'',	'sergioasker',	'asker4522',	2147483647,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(251,	3,	'Beto',	'Canti',	'',	'betocanti',	'canti1335',	2147483647,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(252,	3,	'Leo',	'Iñarrea',	'',	'leoiñarrea',	'leoayacucho',	2147483647,	'0000-00-00 00:00:00',	'0000-00-00 00:00:00');

DROP TABLE IF EXISTS `usuarios_tipos`;
CREATE TABLE `usuarios_tipos` (
  `idTipoUsuario` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nombreTipoUsuario` varchar(45) NOT NULL,
  PRIMARY KEY (`idTipoUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `usuarios_tipos` (`idTipoUsuario`, `nombreTipoUsuario`) VALUES
(1,	'superadmin'),
(2,	'admin'),
(3,	'cliente');

-- 2017-12-19 16:21:27
