-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-06-2017 a las 05:04:49
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bitacoraaprendiz`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimiento_aprendiz_ficha`
--

CREATE TABLE `movimiento_aprendiz_ficha` (
  `documento_apren` varchar(15) NOT NULL,
  `numero_ficha` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimiento_bitacora_actividad`
--

CREATE TABLE `movimiento_bitacora_actividad` (
  `dificultades` longtext,
  `aprendizaje` longtext,
  `relacionadaConPrograma` tinyint(1) DEFAULT NULL,
  `id_bitacora` int(11) NOT NULL,
  `id_actividad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_act_bitacora`
--

CREATE TABLE `tbl_act_bitacora` (
  `id_actividad` int(11) NOT NULL,
  `actividad` longtext,
  `aprendizajes` text,
  `dificultades` text,
  `relacionadaConPrograma` tinyint(4) DEFAULT NULL,
  `id_bitacora` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_act_bitacora`
--

INSERT INTO `tbl_act_bitacora` (`id_actividad`, `actividad`, `aprendizajes`, `dificultades`, `relacionadaConPrograma`, `id_bitacora`) VALUES
(1, 'desarrollo web', 'aprendia usar una gran parte de las librerias que se manejan en la empresa actualmente', 'uso de algunas librerías con las que debía trabajar', 1, 3),
(2, 'acompañamiento al equipo de pruebas de software', 'forma correcta de documentar algunas incidencias', 'documentar correctamente algunas incidencias que se presentaron', 1, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_administrador`
--

CREATE TABLE `tbl_administrador` (
  `documento` int(11) NOT NULL,
  `Nombres` varchar(45) NOT NULL,
  `Apellidos` varchar(45) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `tbl_rol_id_rol` int(11) NOT NULL DEFAULT '5'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_alternativapractica`
--

CREATE TABLE `tbl_alternativapractica` (
  `id_Alternativa` int(11) NOT NULL,
  `alternativa` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_alternativapractica`
--

INSERT INTO `tbl_alternativapractica` (`id_Alternativa`, `alternativa`) VALUES
(1, 'Vinculo Laboral'),
(2, 'Pasantias'),
(3, 'Monitorias'),
(4, 'Proyecto Productivo'),
(5, 'Contrato de Aprendizaje');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_anexos`
--

CREATE TABLE `tbl_anexos` (
  `id_anexo` int(11) NOT NULL,
  `anexo` longtext,
  `id_bitacora` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_aprendiz`
--

CREATE TABLE `tbl_aprendiz` (
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `numero_ficha` int(15) NOT NULL,
  `documento` varchar(15) NOT NULL,
  `contrasena` varchar(100) NOT NULL DEFAULT 'aprendizSena',
  `id_rol` int(11) NOT NULL DEFAULT '1',
  `tbl_funcionario_documento` bigint(20) DEFAULT NULL,
  `id_estado` int(11) NOT NULL DEFAULT '1',
  `id_Alternativa` int(11) NOT NULL DEFAULT '1',
  `tbl_coformador_documento` bigint(20) NOT NULL,
  `id_cadena` int(11) NOT NULL,
  `id_programa` int(11) NOT NULL,
  `nit_empresa` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_aprendiz`
--

INSERT INTO `tbl_aprendiz` (`nombres`, `apellidos`, `correo`, `telefono`, `numero_ficha`, `documento`, `contrasena`, `id_rol`, `tbl_funcionario_documento`, `id_estado`, `id_Alternativa`, `tbl_coformador_documento`, `id_cadena`, `id_programa`, `nit_empresa`) VALUES
('Ana Maria', 'Gallego Correa', 'anagallego_03@hotmail.com', '3219731676', 1093394, '1007304393', 'aprendizSena', 1, 123465, 1, 5, 651651, 9, 2, '236594-26'),
('Jonathan', 'Alvarez', 'jalvarezg@hotmail.com', '26465165', 1093394, '1020304050', 'aprendizSena', 1, 123465, 5, 3, 96979899, 9, 2, '236594-26'),
('Andres Felipe', 'Restrepoxc', 'fandres150@gmail.com', '165164', 1093394, '1040326918', 'aprendizSena', 1, 123465, 2, 2, 96979899, 9, 2, '236594-26'),
('Jhoan ', 'Galeano', 'jgaleano@hotmail.com', '3216594', 1093394, '122638626', 'aprendizSena', 1, 123465, 123465, 1, 96979899, 9, 2, '236594-26'),
('Yerli', 'Lopera', 'YerliLopera@hotmail.com', '64651', 0, '2187854', 'aprendizSena', 1, 123465, 1, 1, 646165161, 0, 0, 'wweooefnboe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_bitacora`
--

CREATE TABLE `tbl_bitacora` (
  `id_bitacora` int(11) NOT NULL,
  `fecha_bitacora` date DEFAULT NULL,
  `alternativa_prac` varchar(200) DEFAULT NULL,
  `fecha_inicial` date DEFAULT NULL,
  `fecha_final` date DEFAULT NULL,
  `id_ciudad` int(11) NOT NULL,
  `nit_empresa` varchar(45) DEFAULT NULL,
  `documento_apren` varchar(15) DEFAULT NULL,
  `documento_cof` int(11) NOT NULL,
  `aprobada` tinyint(4) NOT NULL DEFAULT '0',
  `revisada` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_bitacora`
--

INSERT INTO `tbl_bitacora` (`id_bitacora`, `fecha_bitacora`, `alternativa_prac`, `fecha_inicial`, `fecha_final`, `id_ciudad`, `nit_empresa`, `documento_apren`, `documento_cof`, `aprobada`, `revisada`) VALUES
(3, '2017-06-20', '1', '2017-06-01', '2017-06-15', 70, '236594-26', '1007304393', 651651, 0, 0),
(12, '2017-06-01', '1', '2017-06-22', '2017-06-23', 14, '236594-26', '1007304393', 651651, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_cadena`
--

CREATE TABLE `tbl_cadena` (
  `id_cadena` int(11) NOT NULL,
  `cadena` varchar(100) DEFAULT NULL,
  `id_centro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_cadena`
--

INSERT INTO `tbl_cadena` (`id_cadena`, `cadena`, `id_centro`) VALUES
(9, 'tics', 9),
(10, 'Textiles', 9),
(11, 'Textiles', 9),
(999, '---', 999);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_centro`
--

CREATE TABLE `tbl_centro` (
  `id_centro` int(11) NOT NULL,
  `centro` varchar(200) CHARACTER SET utf8mb4 DEFAULT NULL,
  `id_regional` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_centro`
--

INSERT INTO `tbl_centro` (`id_centro`, `centro`, `id_regional`) VALUES
(9, 'CTMA', 5),
(16, 'CTGI', 5),
(17, 'CTGI', 5),
(18, 'abcd', 5),
(19, 'abcd', 5),
(999, '---', 999);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_coformador`
--

CREATE TABLE `tbl_coformador` (
  `documento` bigint(20) NOT NULL,
  `Nombres` varchar(30) NOT NULL,
  `Apellidos` varchar(30) NOT NULL,
  `telefono` int(11) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `nit_empresa` varchar(45) NOT NULL,
  `contrasena` varchar(100) DEFAULT 'coformador',
  `tbl_rol_id_rol` int(11) NOT NULL DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_coformador`
--

INSERT INTO `tbl_coformador` (`documento`, `Nombres`, `Apellidos`, `telefono`, `correo`, `nit_empresa`, `contrasena`, `tbl_rol_id_rol`) VALUES
(651651, 'Andres F', 'Isaza', 3129856, 'isazaandres89@gmail.com', '1234564', 'coformador', 3),
(6516163, 'Rafael', 'Escobar', 31265985, 'Escobar123@gmail.com', '1234564', 'coformador', 3),
(9845161, 'Juan Carlos', 'Garcia', 2147483647, 'juangarcia@outlook.es', '1234564', 'coformador', 3),
(96979899, 'Felipe', 'Perez', 313235699, 'felipe@kogimobile.com', '900 422 032-1', 'coformador', 3),
(646165161, 'Arturo', 'Gonzales', 3216594, 'garturo@hotmail.com', '1234564', 'coformador', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_departamento`
--

CREATE TABLE `tbl_departamento` (
  `id_departamento` int(11) NOT NULL,
  `departamento` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_departamento`
--

INSERT INTO `tbl_departamento` (`id_departamento`, `departamento`) VALUES
(2, 'Antioquia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_empresa`
--

CREATE TABLE `tbl_empresa` (
  `nit_empresa` varchar(45) NOT NULL,
  `empresa` varchar(200) CHARACTER SET utf8mb4 DEFAULT NULL,
  `direccion` varchar(70) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `contrasena` varchar(100) DEFAULT 'empresaSena',
  `correo` varchar(100) DEFAULT NULL,
  `tbl_rol_id_rol` int(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_empresa`
--

INSERT INTO `tbl_empresa` (`nit_empresa`, `empresa`, `direccion`, `telefono`, `contrasena`, `correo`, `tbl_rol_id_rol`) VALUES
('1234564', 'SenaCTMA', 'Barrio pedregal', '26598656', 'empresaSena', 'sena@hotmail.com', 2),
('2359852-203', 'A&G SOftware', 'calle 56 #20-20', '456598', 'empresaSena', 'software@hotmail.com', 2),
('236594-26', 'Emtelco', 'calle 45 #23 14', '655665', 'empresaSena', 'Emtelco@emtelco.com', 2),
('4141654', 'Exito', 'calle al exito', '165161', 'empresaSena', 'exito@exito.com', 2),
('7', 'Corona', 'sabaneta', '4569875', 'empresaSena', 'corona@corona.com', 2),
('900 422 032-1', 'Custom App Development', 'Carrera 40 10 44', '5810555', 'empresaSena', 'kogimobile@kogimobile.com', 2),
('939295695', 'Get Com', 'cra 50 #5 67', '569846', 'empresaSena', 'getcom@gmail.com', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_estadoaprendiz`
--

CREATE TABLE `tbl_estadoaprendiz` (
  `id_estado` int(11) NOT NULL,
  `estado` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_estadoaprendiz`
--

INSERT INTO `tbl_estadoaprendiz` (`id_estado`, `estado`) VALUES
(1, 'Disponoble'),
(2, 'Cancelado'),
(3, 'Aplazado'),
(4, 'Contratado'),
(5, 'Bajo Rendimiento Academico'),
(6, 'Inhabilitado Por Actualizacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ficha`
--

CREATE TABLE `tbl_ficha` (
  `numero_ficha` int(11) NOT NULL,
  `id_programa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_ficha`
--

INSERT INTO `tbl_ficha` (`numero_ficha`, `id_programa`) VALUES
(1093394, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_funcionario`
--

CREATE TABLE `tbl_funcionario` (
  `documento` bigint(20) NOT NULL,
  `nombres` varchar(30) DEFAULT NULL,
  `apellidos` varchar(30) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `id_centro` int(11) NOT NULL,
  `id_cadena` int(11) DEFAULT NULL,
  `contrasena` varchar(100) DEFAULT 'docenteSena',
  `tbl_rol_id_rol` int(11) NOT NULL DEFAULT '4'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_funcionario`
--

INSERT INTO `tbl_funcionario` (`documento`, `nombres`, `apellidos`, `telefono`, `correo`, `id_centro`, `id_cadena`, `contrasena`, `tbl_rol_id_rol`) VALUES
(123465, 'Yhoan', 'Galeano Urrea', 2147483647, 'yhoan@hotmail.com', 1, 11, 'docenteSena', 4),
(464561, 'Luz Mery', 'Carcamo', 31643213, 'luzme@hotmail.com', 1, 9, 'docenteSena', 4),
(631321, 'Oscar', 'Torres', 161316, 'sofnofno', 1, 9, 'docenteSena', 4),
(645646, 'Adalberto', 'Carcamo', 615416, 'adal@hotmail.com', 1, 9, 'docenteSena', 4),
(6598712, 'Paula', 'Valencia', 65974213, 'pvaelncia@hotmail.com', 1, 9, 'docenteSena', 4),
(9456116, 'Claudia', 'Barajas', 4456598, 'cbarajas@yahoo.es', 1, 10, 'docenteSena', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_municipio`
--

CREATE TABLE `tbl_municipio` (
  `id_municipio` int(11) NOT NULL,
  `id_departamento` int(11) DEFAULT NULL,
  `municipio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_municipio`
--

INSERT INTO `tbl_municipio` (`id_municipio`, `id_departamento`, `municipio`) VALUES
(3, 2, 'Abejorral'),
(4, 2, 'Abriaquí'),
(5, 2, 'Alejandria'),
(6, 2, 'Amagá'),
(7, 2, 'Amalfi'),
(8, 2, 'Andes'),
(9, 2, 'Angelópolis'),
(10, 2, 'Angostura'),
(11, 2, 'Anorí'),
(12, 2, 'Anzá'),
(13, 2, 'Apartadó'),
(14, 2, 'Arboletes'),
(15, 2, 'Argelia'),
(16, 2, 'Armenia'),
(17, 2, 'Barbosa'),
(18, 2, 'Bello'),
(19, 2, 'Belmira'),
(20, 2, 'Betania'),
(21, 2, 'Betulia'),
(22, 2, 'Bolívar'),
(23, 2, 'Briceño'),
(24, 2, 'Burítica'),
(25, 2, 'Caicedo'),
(26, 2, 'Caldas'),
(27, 2, 'Campamento'),
(28, 2, 'Caracolí'),
(29, 2, 'Caramanta'),
(30, 2, 'Carepa'),
(31, 2, 'Carmen de Viboral'),
(32, 2, 'Carolina'),
(33, 2, 'Caucasia'),
(34, 2, 'Cañasgordas'),
(35, 2, 'Chigorodó'),
(36, 2, 'Cisneros'),
(37, 2, 'Cocorná'),
(38, 2, 'Concepción'),
(39, 2, 'Concordia'),
(40, 2, 'Copacabana'),
(41, 2, 'Cáceres'),
(42, 2, 'Dabeiba'),
(43, 2, 'Don Matías'),
(44, 2, 'Ebéjico'),
(45, 2, 'El Bagre'),
(46, 2, 'Entrerríos'),
(47, 2, 'Envigado'),
(48, 2, 'Fredonia'),
(49, 2, 'Frontino'),
(50, 2, 'Giraldo'),
(51, 2, 'Girardota'),
(52, 2, 'Granada'),
(53, 2, 'Guadalupe'),
(54, 2, 'Guarne'),
(55, 2, 'Guatapé'),
(56, 2, 'Gómez Plata'),
(57, 2, 'Heliconia'),
(58, 2, 'Hispania'),
(59, 2, 'Itagüí'),
(60, 2, 'Ituango'),
(61, 2, 'Jardín'),
(62, 2, 'Jericó'),
(63, 2, 'La Ceja'),
(64, 2, 'La Estrella'),
(65, 2, 'La Pintada'),
(66, 2, 'La Unión'),
(67, 2, 'Liborina'),
(68, 2, 'Maceo'),
(69, 2, 'Marinilla'),
(70, 2, 'Medellín'),
(71, 2, 'Montebello'),
(72, 2, 'Murindó'),
(73, 2, 'Mutatá'),
(74, 2, 'Nariño'),
(75, 2, 'Nechí'),
(76, 2, 'Necoclí'),
(77, 2, 'Olaya'),
(78, 2, 'Peque'),
(79, 2, 'Peñol'),
(80, 2, 'Pueblorrico'),
(81, 2, 'Puerto Berrío'),
(82, 2, 'Puerto Nare'),
(83, 2, 'Puerto Triunfo'),
(84, 2, 'Remedios'),
(85, 2, 'Retiro'),
(86, 2, 'Ríonegro'),
(87, 2, 'Sabanalarga'),
(88, 2, 'Sabaneta'),
(89, 2, 'Salgar'),
(90, 2, 'San Andrés de Cuerquía'),
(91, 2, 'San Carlos'),
(92, 2, 'San Francisco'),
(93, 2, 'San Jerónimo'),
(94, 2, 'San José de Montaña'),
(95, 2, 'San Juan de Urabá'),
(96, 2, 'San Luís'),
(97, 2, 'San Pedro'),
(98, 2, 'San Pedro de Urabá'),
(99, 2, 'San Rafael'),
(100, 2, 'San Roque'),
(101, 2, 'San Vicente'),
(102, 2, 'Santa Bárbara'),
(103, 2, 'Santa Fé de Antioquia'),
(104, 2, 'Santa Rosa de Osos'),
(105, 2, 'Santo Domingo'),
(106, 2, 'Santuario'),
(107, 2, 'Segovia'),
(108, 2, 'Sonsón'),
(109, 2, 'Sopetrán'),
(110, 2, 'Tarazá'),
(111, 2, 'Tarso'),
(112, 2, 'Titiribí'),
(113, 2, 'Toledo'),
(114, 2, 'Turbo'),
(115, 2, 'Támesis'),
(116, 2, 'Uramita'),
(117, 2, 'Urrao'),
(118, 2, 'Valdivia'),
(119, 2, 'Valparaiso'),
(120, 2, 'Vegachí'),
(121, 2, 'Venecia'),
(122, 2, 'Vigía del Fuerte'),
(123, 2, 'Yalí'),
(124, 2, 'Yarumal'),
(125, 2, 'Yolombó'),
(126, 2, 'Yondó (Casabe)'),
(127, 2, 'Zaragoza');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_observaciones`
--

CREATE TABLE `tbl_observaciones` (
  `id_observacion` int(11) NOT NULL,
  `observacion` longtext NOT NULL,
  `id_bitacora` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_programa`
--

CREATE TABLE `tbl_programa` (
  `id_programa` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `id_cadena` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_programa`
--

INSERT INTO `tbl_programa` (`id_programa`, `nombre`, `id_cadena`) VALUES
(2, 'ADSI', 9),
(14, 'MEDYDICE', 9),
(15, 'SALUD OCUPACIONAL', 9),
(16, 'MEDYDICE', 9),
(17, 'SALUD OCUPACIONAL', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_regional`
--

CREATE TABLE `tbl_regional` (
  `id_regional` int(11) NOT NULL,
  `regional` varchar(30) NOT NULL,
  `id_zona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_regional`
--

INSERT INTO `tbl_regional` (`id_regional`, `regional`, `id_zona`) VALUES
(5, 'Antioquia', 6),
(999, '---', 999);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_rol`
--

CREATE TABLE `tbl_rol` (
  `id_rol` int(11) NOT NULL,
  `nombrerol` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_rol`
--

INSERT INTO `tbl_rol` (`id_rol`, `nombrerol`) VALUES
(1, 'Aprendiz'),
(2, 'Empresa'),
(3, 'Coformador'),
(4, 'Docente'),
(5, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_zona`
--

CREATE TABLE `tbl_zona` (
  `id_zona` int(11) NOT NULL,
  `zona` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_zona`
--

INSERT INTO `tbl_zona` (`id_zona`, `zona`) VALUES
(6, 'Centro'),
(7, '-----'),
(999, '-----');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `movimiento_aprendiz_ficha`
--
ALTER TABLE `movimiento_aprendiz_ficha`
  ADD PRIMARY KEY (`documento_apren`,`numero_ficha`),
  ADD KEY `FK__Movimient__numer__5070F446` (`numero_ficha`);

--
-- Indices de la tabla `movimiento_bitacora_actividad`
--
ALTER TABLE `movimiento_bitacora_actividad`
  ADD PRIMARY KEY (`id_bitacora`,`id_actividad`),
  ADD KEY `FK__Movimient__id_ac__4CA06362` (`id_actividad`);

--
-- Indices de la tabla `tbl_act_bitacora`
--
ALTER TABLE `tbl_act_bitacora`
  ADD PRIMARY KEY (`id_actividad`),
  ADD KEY `id_bitacora` (`id_bitacora`);

--
-- Indices de la tabla `tbl_administrador`
--
ALTER TABLE `tbl_administrador`
  ADD PRIMARY KEY (`documento`),
  ADD KEY `fk_tbl_Administrador_tbl_rol1_idx` (`tbl_rol_id_rol`);

--
-- Indices de la tabla `tbl_alternativapractica`
--
ALTER TABLE `tbl_alternativapractica`
  ADD PRIMARY KEY (`id_Alternativa`);

--
-- Indices de la tabla `tbl_anexos`
--
ALTER TABLE `tbl_anexos`
  ADD PRIMARY KEY (`id_anexo`),
  ADD KEY `FK__tbl_anexo__id_bi__46E78A0C` (`id_bitacora`);

--
-- Indices de la tabla `tbl_aprendiz`
--
ALTER TABLE `tbl_aprendiz`
  ADD PRIMARY KEY (`documento`);

--
-- Indices de la tabla `tbl_bitacora`
--
ALTER TABLE `tbl_bitacora`
  ADD PRIMARY KEY (`id_bitacora`),
  ADD KEY `FK__tbl_bitac__id_ci__4222D4EF` (`id_ciudad`),
  ADD KEY `FK__tbl_bitac__nit_e__4316F928` (`nit_empresa`),
  ADD KEY `FK__tbl_bitac__id_ap__440B1D61` (`documento_apren`),
  ADD KEY `documento_cof` (`documento_cof`);

--
-- Indices de la tabla `tbl_cadena`
--
ALTER TABLE `tbl_cadena`
  ADD PRIMARY KEY (`id_cadena`),
  ADD KEY `fk_tbl_cadena_tbl_centro1_idx` (`id_centro`);

--
-- Indices de la tabla `tbl_centro`
--
ALTER TABLE `tbl_centro`
  ADD PRIMARY KEY (`id_centro`),
  ADD KEY `fk_tbl_centro_tbl_regional1_idx` (`id_regional`);

--
-- Indices de la tabla `tbl_coformador`
--
ALTER TABLE `tbl_coformador`
  ADD PRIMARY KEY (`documento`),
  ADD KEY `FK__tbl_cofor__nit_e__3C69FB99` (`nit_empresa`),
  ADD KEY `fk_tbl_coformador_tbl_rol1_idx` (`tbl_rol_id_rol`);

--
-- Indices de la tabla `tbl_departamento`
--
ALTER TABLE `tbl_departamento`
  ADD PRIMARY KEY (`id_departamento`);

--
-- Indices de la tabla `tbl_empresa`
--
ALTER TABLE `tbl_empresa`
  ADD PRIMARY KEY (`nit_empresa`),
  ADD KEY `fk_tbl_empresa_tbl_rol1_idx` (`tbl_rol_id_rol`);

--
-- Indices de la tabla `tbl_estadoaprendiz`
--
ALTER TABLE `tbl_estadoaprendiz`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `tbl_ficha`
--
ALTER TABLE `tbl_ficha`
  ADD PRIMARY KEY (`numero_ficha`),
  ADD KEY `FK__tbl_ficha__id_pr__33D4B598` (`id_programa`);

--
-- Indices de la tabla `tbl_funcionario`
--
ALTER TABLE `tbl_funcionario`
  ADD PRIMARY KEY (`documento`),
  ADD KEY `FK__tbl_Funci__id_ca__37A5467C` (`id_cadena`),
  ADD KEY `fk_tbl_funcionario_tbl_rol1_idx` (`tbl_rol_id_rol`),
  ADD KEY `id_centro` (`id_centro`);

--
-- Indices de la tabla `tbl_municipio`
--
ALTER TABLE `tbl_municipio`
  ADD PRIMARY KEY (`id_municipio`),
  ADD KEY `FK__tbl_ciuda__id_de__25869641` (`id_departamento`);

--
-- Indices de la tabla `tbl_observaciones`
--
ALTER TABLE `tbl_observaciones`
  ADD PRIMARY KEY (`id_observacion`),
  ADD KEY `fk_tbl_Observaciones_tbl_bitacora1_idx` (`id_bitacora`);

--
-- Indices de la tabla `tbl_programa`
--
ALTER TABLE `tbl_programa`
  ADD PRIMARY KEY (`id_programa`),
  ADD KEY `FK__tbl_progr__id_ca__30F848ED` (`id_cadena`);

--
-- Indices de la tabla `tbl_regional`
--
ALTER TABLE `tbl_regional`
  ADD PRIMARY KEY (`id_regional`),
  ADD KEY `id_zona` (`id_zona`);

--
-- Indices de la tabla `tbl_rol`
--
ALTER TABLE `tbl_rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `tbl_zona`
--
ALTER TABLE `tbl_zona`
  ADD PRIMARY KEY (`id_zona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_act_bitacora`
--
ALTER TABLE `tbl_act_bitacora`
  MODIFY `id_actividad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tbl_anexos`
--
ALTER TABLE `tbl_anexos`
  MODIFY `id_anexo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_bitacora`
--
ALTER TABLE `tbl_bitacora`
  MODIFY `id_bitacora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `tbl_cadena`
--
ALTER TABLE `tbl_cadena`
  MODIFY `id_cadena` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000;
--
-- AUTO_INCREMENT de la tabla `tbl_centro`
--
ALTER TABLE `tbl_centro`
  MODIFY `id_centro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000;
--
-- AUTO_INCREMENT de la tabla `tbl_observaciones`
--
ALTER TABLE `tbl_observaciones`
  MODIFY `id_observacion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_programa`
--
ALTER TABLE `tbl_programa`
  MODIFY `id_programa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `tbl_regional`
--
ALTER TABLE `tbl_regional`
  MODIFY `id_regional` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000;
--
-- AUTO_INCREMENT de la tabla `tbl_rol`
--
ALTER TABLE `tbl_rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tbl_zona`
--
ALTER TABLE `tbl_zona`
  MODIFY `id_zona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `movimiento_aprendiz_ficha`
--
ALTER TABLE `movimiento_aprendiz_ficha`
  ADD CONSTRAINT `FK__Movimient__id_ap__4F7CD00D` FOREIGN KEY (`documento_apren`) REFERENCES `tbl_aprendiz` (`documento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK__Movimient__numer__5070F446` FOREIGN KEY (`numero_ficha`) REFERENCES `tbl_ficha` (`numero_ficha`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `movimiento_bitacora_actividad`
--
ALTER TABLE `movimiento_bitacora_actividad`
  ADD CONSTRAINT `FK__Movimient__id_ac__4BAC3F29` FOREIGN KEY (`id_bitacora`) REFERENCES `tbl_bitacora` (`id_bitacora`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_act_bitacora`
--
ALTER TABLE `tbl_act_bitacora`
  ADD CONSTRAINT `tbl_act_bitacora_ibfk_1` FOREIGN KEY (`id_bitacora`) REFERENCES `tbl_bitacora` (`id_bitacora`);

--
-- Filtros para la tabla `tbl_administrador`
--
ALTER TABLE `tbl_administrador`
  ADD CONSTRAINT `fk_tbl_Administrador_tbl_rol1` FOREIGN KEY (`tbl_rol_id_rol`) REFERENCES `tbl_rol` (`id_rol`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_anexos`
--
ALTER TABLE `tbl_anexos`
  ADD CONSTRAINT `FK__tbl_anexo__id_bi__46E78A0C` FOREIGN KEY (`id_bitacora`) REFERENCES `tbl_bitacora` (`id_bitacora`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_bitacora`
--
ALTER TABLE `tbl_bitacora`
  ADD CONSTRAINT `FK__tbl_bitac__id_ap__440B1D61` FOREIGN KEY (`documento_apren`) REFERENCES `tbl_aprendiz` (`documento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK__tbl_bitac__id_ci__4222D4EF` FOREIGN KEY (`id_ciudad`) REFERENCES `tbl_municipio` (`id_municipio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK__tbl_bitac__nit_e__4316F928` FOREIGN KEY (`nit_empresa`) REFERENCES `tbl_empresa` (`nit_empresa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_cadena`
--
ALTER TABLE `tbl_cadena`
  ADD CONSTRAINT `fk_tbl_cadena_tbl_centro1` FOREIGN KEY (`id_centro`) REFERENCES `tbl_centro` (`id_centro`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_centro`
--
ALTER TABLE `tbl_centro`
  ADD CONSTRAINT `fk_tbl_centro_tbl_regional1` FOREIGN KEY (`id_regional`) REFERENCES `tbl_regional` (`id_regional`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_coformador`
--
ALTER TABLE `tbl_coformador`
  ADD CONSTRAINT `FK__tbl_cofor__nit_e__3C69FB99` FOREIGN KEY (`nit_empresa`) REFERENCES `tbl_empresa` (`nit_empresa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_coformador_tbl_rol1` FOREIGN KEY (`tbl_rol_id_rol`) REFERENCES `tbl_rol` (`id_rol`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_empresa`
--
ALTER TABLE `tbl_empresa`
  ADD CONSTRAINT `fk_tbl_empresa_tbl_rol1` FOREIGN KEY (`tbl_rol_id_rol`) REFERENCES `tbl_rol` (`id_rol`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_ficha`
--
ALTER TABLE `tbl_ficha`
  ADD CONSTRAINT `FK__tbl_ficha__id_pr__33D4B598` FOREIGN KEY (`id_programa`) REFERENCES `tbl_programa` (`id_programa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_municipio`
--
ALTER TABLE `tbl_municipio`
  ADD CONSTRAINT `FK__tbl_ciuda__id_de__25869641` FOREIGN KEY (`id_departamento`) REFERENCES `tbl_departamento` (`id_departamento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_observaciones`
--
ALTER TABLE `tbl_observaciones`
  ADD CONSTRAINT `fk_tbl_Observaciones_tbl_bitacora1` FOREIGN KEY (`id_bitacora`) REFERENCES `tbl_bitacora` (`id_bitacora`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_programa`
--
ALTER TABLE `tbl_programa`
  ADD CONSTRAINT `FK__tbl_progr__id_ca__30F848ED` FOREIGN KEY (`id_cadena`) REFERENCES `tbl_cadena` (`id_cadena`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_regional`
--
ALTER TABLE `tbl_regional`
  ADD CONSTRAINT `tbl_regional_ibfk_1` FOREIGN KEY (`id_zona`) REFERENCES `tbl_zona` (`id_zona`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
