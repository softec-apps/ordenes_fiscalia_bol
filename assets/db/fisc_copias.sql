-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 16-03-2024 a las 13:06:00
-- Versión del servidor: 10.6.11-MariaDB-0ubuntu0.22.04.1
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fisc_copias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenes`
--

CREATE TABLE `ordenes` (
  `id` int(9) UNSIGNED ZEROFILL NOT NULL,
  `fecha_solicitud` varchar(20) NOT NULL,
  `fecha_entrega` varchar(20) DEFAULT NULL,
  `solicita_ci` int(10) UNSIGNED ZEROFILL NOT NULL,
  `solicita_nombres` varchar(200) NOT NULL,
  `autoriza` varchar(200) DEFAULT NULL,
  `entrega` varchar(200) DEFAULT NULL,
  `expediente` varchar(200) NOT NULL,
  `hojas` int(6) NOT NULL,
  `copias` int(6) NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Volcado de datos para la tabla `ordenes`
--

INSERT INTO `ordenes` (`id`, `fecha_solicitud`, `fecha_entrega`, `solicita_ci`, `solicita_nombres`, `autoriza`, `entrega`, `expediente`, `hojas`, `copias`, `estado`) VALUES
(000000017, '09-03-2023', '09-03-2023', 0201186632, 'GONZALO VINICIO URBANO URBANO', 'María Isabel Gutiérrez Vélez', 'María Camacho', 'ROLES DE PAGO ', 183, 183, 2),
(000000018, '13-03-2023', '13-03-2023', 0605404532, 'CRISTIAN PATRICIO LEON HERNANDEZ', 'María Isabel Gutiérrez Vélez', 'Claudio Borja', 'EXPEDIENTE TALENTO HUMANO', 40, 40, 2),
(000000020, '17-03-2023', '20-03-2023', 0605404532, 'CRISTIAN PATRICIO LEON HERNANDEZ', 'María Isabel Gutiérrez Vélez', 'Claudio Borja', 'ACCIONES DE PERSONAL', 39, 156, 2),
(000000021, '20-03-2023', '20-03-2023', 0201379963, 'Adrian  Mendoza ', 'María Isabel Gutiérrez Vélez', 'Claudio Borja', '02571-2017_00153', 46, 92, 2),
(000000022, '24-03-2023', '24-03-2023', 0201379963, 'Adrian  Mendoza ', 'María Isabel Gutiérrez Vélez', 'María Camacho', '020101822040085', 82, 82, 2),
(000000023, '28-03-2023', '29-03-2023', 0201379963, 'Adrian  Mendoza ', 'María Isabel Gutiérrez Vélez', 'María Camacho', '02010182240030', 55, 62, 2),
(000000024, '29-03-2023', '29-03-2023', 0605404532, 'CRISTIAN PATRICIO LEON HERNANDEZ', 'María Isabel Gutiérrez Vélez', 'María Camacho', 'archivos talento humano ', 58, 58, 2),
(000000025, '14-04-2023', '17-04-2023', 0201253838, 'VERONICA DEL ROCIO BONILLA MARTINEZ', 'María Isabel Gutiérrez Vélez', 'María Camacho', '020101822030002', 44, 57, 2),
(000000026, '05-05-2023', '05-05-2023', 0605404532, 'CRISTIAN PATRICIO LEON HERNANDEZ', 'María Isabel Gutiérrez Vélez', 'Claudio Borja', 'documentos de ingreso del Trabajador Social Diego Tigre ', 46, 46, 2),
(000000027, '08-05-2023', '08-05-2023', 0202006896, 'CHRISTIAN EDUARDO PEREZ ARTEAGA', 'María Isabel Gutiérrez Vélez', 'Claudio Borja', 'PROCESOS DE CONTRATACION SPAVT-B', 411, 6165, 2),
(000000028, '09-05-2023', '09-05-2023', 0201379963, 'Adrian  Mendoza ', 'María Isabel Gutiérrez Vélez', 'María Camacho', '020101820120061', 165, 186, 2),
(000000029, '10-05-2023', '12-05-2023', 0201076551, 'Marcela Alexandra Del Salto Viscarra', 'María Isabel Gutiérrez Vélez', 'María Camacho', '020101823010048', 208, 416, 2),
(000000030, '12-05-2023', '12-05-2023', 0201483351, 'SANDRA SANTANA', 'María Isabel Gutiérrez Vélez', 'María Camacho', '0201018220020100', 1400, 1686, 2),
(000000031, '15-05-2023', '06-06-2023', 0202006896, 'CHRISTIAN EDUARDO PEREZ ARTEAGA', 'María Isabel Gutiérrez Vélez', 'María Camacho', '006-2023-B COPIAS PARA RESPALDO DEL TRASLADO DE EXPEDIENTE A PICHINCHA SPAVT-PICHINCHA ACORDE AL REGLAMENTO SUSTITUTIVO AL SPAVT', 238, 330, 2),
(000000032, '23-05-2023', '05-06-2023', 0201186632, 'GONZALO VINICIO URBANO URBANO', 'María Isabel Gutiérrez Vélez', 'María Camacho', '02101-2022-00022', 180, 300, 2),
(000000033, '05-06-2023', '06-06-2023', 0201253838, 'VERONICA DEL ROCIO BONILLA MARTINEZ', 'María Isabel Gutiérrez Vélez', 'María Camacho', '020101822030080', 74, 142, 2),
(000000034, '05-06-2023', '05-06-2023', 0200990950, 'LORENA ALARCON ', 'María Isabel Gutiérrez Vélez', 'María Camacho', '020101822020097', 180, 240, 2),
(000000035, '05-06-2023', '05-06-2023', 0201644937, 'MARIA FERNANDA  BRITO', 'María Isabel Gutiérrez Vélez', 'María Camacho', '020101823050117', 73, 145, 2),
(000000036, '15-06-2023', '20-06-2023', 0201253838, 'VERONICA DEL ROCIO BONILLA MARTINEZ', 'María Isabel Gutiérrez Vélez', 'María Camacho', '020101822100104', 28, 40, 2),
(000000037, '21-06-2023', '21-06-2023', 0200990950, 'LORENA ALARCON ', 'María Isabel Gutiérrez Vélez', 'María Camacho', '020101820010149', 60, 70, 2),
(000000038, '27-06-2023', '28-06-2023', 0201253838, 'VERONICA DEL ROCIO BONILLA MARTINEZ', 'María Isabel Gutiérrez Vélez', 'María Camacho', '020101822080031', 32, 46, 2),
(000000039, '27-06-2023', '27-06-2023', 0605404532, 'CRISTIAN PATRICIO LEON HERNANDEZ', 'María Isabel Gutiérrez Vélez', 'María Camacho', 'copias de expediente Delia Paulina Samaniego Quiguiri ', 7, 7, 2),
(000000040, '03-07-2023', '05-07-2023', 0201379963, 'Adrian  Mendoza ', 'María Isabel Gutiérrez Vélez', 'María Camacho', '020101822120163', 210, 420, 2),
(000000041, '24-07-2023', '24-07-2023', 0201379963, 'Adrian  Mendoza ', 'María Isabel Gutiérrez Vélez', 'María Camacho', '020101822120051', 72, 105, 2),
(000000042, '27-07-2023', '27-07-2023', 0201253838, 'VERONICA DEL ROCIO BONILLA MARTINEZ', 'María Isabel Gutiérrez Vélez', 'María Camacho', '020101823070090', 70, 96, 2),
(000000043, '31-07-2023', '18-08-2023', 0201574464, 'Karla Mireya Galarza Ávila', 'María Isabel Gutiérrez Vélez', 'María Camacho', '020101823010021', 200, 200, 2),
(000000044, '31-07-2023', '01-08-2023', 0201574464, 'Karla Mireya Galarza Ávila', 'María Isabel Gutiérrez Vélez', 'María Camacho', '020101822120163', 500, 500, 2),
(000000045, '07-08-2023', '07-08-2023', 0201578309, 'Fanny Piedad Patin Pasto', 'María Isabel Gutiérrez Vélez', 'María Camacho', '020101823070116', 22, 25, 2),
(000000046, '10-08-2023', '10-08-2023', 0201483351, 'SANDRA SANTANA', 'María Isabel Gutiérrez Vélez', 'María Camacho', '020101819090044', 308, 410, 2),
(000000047, '14-08-2023', '15-08-2023', 0202006896, 'CHRISTIAN EDUARDO PEREZ ARTEAGA', 'María Isabel Gutiérrez Vélez', 'María Camacho', 'PROTOCOLO DE DESASTRES NATURALES PAERA PERSONAS PROTEGIDAS POR EL SPAVT', 15, 300, 2),
(000000048, '16-08-2023', '16-08-2023', 0200990950, 'LORENA ALARCON ', 'María Isabel Gutiérrez Vélez', 'María Camacho', '020101823070126', 39, 57, 2),
(000000049, '28-08-2023', '29-09-2023', 0201253838, 'VERONICA DEL ROCIO BONILLA MARTINEZ', 'María Isabel Gutiérrez Vélez', 'María Camacho', '1733-AA-ALL-24', 50, 63, 2),
(000000050, '31-08-2023', '31-08-2023', 0201578309, 'Fanny Piedad Patin Pasto', 'María Isabel Gutiérrez Vélez', 'María Camacho', '020101822080007', 33, 48, 2),
(000000053, '18-09-2023', '16-02-2024', 0200794188, 'LORENA  LEON ', 'María Isabel Gutiérrez Vélez', 'María Camacho', 'EXPEDIENTE DE SEPARACION ', 254, 254, 2),
(000000054, '18-09-2023', '18-09-2023', 0200990950, 'LORENA ALARCON ', 'María Isabel Gutiérrez Vélez', 'María Camacho', '020101821110140', 359, 472, 2),
(000000055, '20-09-2023', '20-09-2023', 0202006896, 'CHRISTIAN EDUARDO PEREZ ARTEAGA', 'María Isabel Gutiérrez Vélez', 'María Camacho', '027-2023-B COPIAS PARA RESPALDO DEL TRASLADO DE EXPEDIENTE A SANTA ELENA, ACORDE AL REGLAMENTO SUSTITUTIVO AL SPAVT', 253, 500, 2),
(000000056, '27-09-2023', '29-09-2023', 0201253838, 'VERONICA DEL ROCIO BONILLA MARTINEZ', 'María Isabel Gutiérrez Vélez', 'María Camacho', '020101822120050', 57, 70, 2),
(000000057, '10-10-2023', '10-10-2023', 0201379963, 'Adrian  Mendoza ', 'María Isabel Gutiérrez Vélez', 'María Camacho', '020101822040085', 68, 99, 2),
(000000058, '11-10-2023', '11-10-2023', 0200794188, 'LORENA  LEON ', 'María Isabel Gutiérrez Vélez', 'María Camacho', 'EXPEDIENTE SERCOP LAS NAVES', 200, 200, 2),
(000000059, '13-10-2023', '13-10-2023', 0605404532, 'CRISTIAN PATRICIO LEON HERNANDEZ', 'María Isabel Gutiérrez Vélez', 'María Camacho', 'Anillados ', 10, 10, 2),
(000000060, '25-10-2023', '25-10-2023', 0605404532, 'CRISTIAN PATRICIO LEON HERNANDEZ', 'María Isabel Gutiérrez Vélez', 'María Camacho', 'CODIGO DE ETICA ', 90, 90, 2),
(000000061, '06-11-2023', '06-11-2023', 0201379963, 'Adrian  Mendoza ', 'María Isabel Gutiérrez Vélez', 'María Camacho', '020101823060050', 19, 27, 2),
(000000062, '09-11-2023', '09-11-2023', 0200990950, 'LORENA ALARCON ', 'María Isabel Gutiérrez Vélez', 'María Camacho', '020101823110007', 141, 180, 2),
(000000063, '15-11-2023', '15-11-2023', 0201379963, 'Adrian  Mendoza ', 'María Isabel Gutiérrez Vélez', 'María Camacho', '020101823060024', 29, 45, 2),
(000000064, '17-11-2023', '17-11-2023', 0200990950, 'LORENA ALARCON ', 'María Isabel Gutiérrez Vélez', 'María Camacho', '020101823110007', 100, 119, 2),
(000000065, '24-11-2023', '24-11-2023', 0201483351, 'SANDRA SANTANA', 'María Isabel Gutiérrez Vélez', 'María Camacho', '020101819060062', 1032, 1600, 2),
(000000066, '27-11-2023', '28-11-2023', 0201666344, 'MARISOL CHELA', 'María Isabel Gutiérrez Vélez', 'María Camacho', 'expediente peculado', 1032, 1032, 2),
(000000067, '28-11-2023', '12-12-2023', 0201619426, 'JAIME GUANO', 'María Isabel Gutiérrez Vélez', 'María Camacho', 'DELEGACIÓN ACTO AADNINISTRATIVO', 30, 30, 2),
(000000068, '30-11-2023', '04-12-2023', 0200794188, 'LORENA  LEON ', 'María Isabel Gutiérrez Vélez', 'María Camacho', 'EXPEDIENTE', 226, 780, 2),
(000000069, '01-12-2023', '07-12-2023', 0201666344, 'MARISOL CHELA', 'María Isabel Gutiérrez Vélez', 'María Camacho', 'PERJURIO', 50, 50, 2),
(000000070, '05-12-2023', '05-12-2023', 1710490085, 'VERONICA REINO', 'María Isabel Gutiérrez Vélez', 'María Camacho', 'AUDICIENCIAS DE JUZGAMIENTO', 93, 93, 2),
(000000071, '08-12-2023', '08-12-2023', 0202006896, 'CHRISTIAN EDUARDO PEREZ ARTEAGA', 'María Isabel Gutiérrez Vélez', 'María Camacho', '045-2023-B COPIAS PARA RESPALDO DEL TRASLADO DE EXPEDIENTE A PICHINCHA SPAVT-PICHINCHA ACORDE AL REGLAMENTO SUSTITUTIVO AL SPAVT', 150, 200, 2),
(000000072, '08-12-2023', '12-12-2023', 0605404532, 'CRISTIAN PATRICIO LEON HERNANDEZ', 'María Isabel Gutiérrez Vélez', 'María Camacho', 'EXPEDIENTE DE FUNCIONARIO ', 250, 250, 2),
(000000073, '15-12-2023', '15-12-2023', 0201752508, 'PATRICIO  MELENDEZ', 'María Isabel Gutiérrez Vélez', 'María Camacho', '020401823110013', 27, 27, 2),
(000000074, '16-01-2024', '16-01-2024', 0201666344, 'MARISOL CHELA', 'María Isabel Gutiérrez Vélez', 'María Camacho', '020101824010064', 250, 250, 2),
(000000075, '17-01-2024', '17-01-2024', 0200794188, 'LORENA  LEON ', 'María Isabel Gutiérrez Vélez', 'María Camacho', 'accion de proteccion', 100, 100, 2),
(000000076, '18-01-2024', '18-01-2024', 0200794188, 'LORENA  LEON ', 'María Isabel Gutiérrez Vélez', 'María Camacho', 'CONFIRMACION DE DICTAMEN', 58, 58, 2),
(000000077, '23-01-2024', '23-01-2024', 0201849205, 'ROSA MAANOBANDA', 'María Isabel Gutiérrez Vélez', 'María Camacho', '020101820100141', 247, 316, 2),
(000000078, '25-01-2024', '25-01-2024', 0605404532, 'CRISTIAN PATRICIO LEON HERNANDEZ', 'María Isabel Gutiérrez Vélez', 'María Camacho', 'documentos de ingreso Director de Recursos Provincial ', 45, 45, 2),
(000000079, '30-01-2024', '16-02-2024', 0201253838, 'VERONICA DEL ROCIO BONILLA MARTINEZ', 'María Isabel Gutiérrez Vélez', 'María Camacho', '1717-AA-MN-24', 38, 48, 2),
(000000080, '31-01-2024', '14-02-2024', 1710490085, 'VERONICA REINO', 'María Isabel Gutiérrez Vélez', 'María Camacho', 'VIOLENCIA', 25, 25, 2),
(000000081, '08-02-2024', '16-02-2024', 0200794188, 'LORENA  LEON ', 'María Isabel Gutiérrez Vélez', 'María Camacho', 'COPIAS 07 DE FEBRERO DESPACHO PROVINCIAL', 100, 100, 2),
(000000082, '15-02-2024', '15-02-2024', 0200990950, 'LORENA ALARCON ', 'María Isabel Gutiérrez Vélez', 'María Camacho', '020101817050032', 78, 117, 2),
(000000083, '15-02-2024', '16-02-2024', 0202006896, 'CHRISTIAN EDUARDO PEREZ ARTEAGA', 'María Isabel Gutiérrez Vélez', 'María Camacho', 'Oficios de control de visitas', 100, 150, 2),
(000000084, '16-02-2024', '16-02-2024', 0603662628, 'MARY  HUILCAREMA', 'María Isabel Gutiérrez Vélez', 'María Camacho', '020101822090129', 400, 400, 2),
(000000085, '16-02-2024', '16-02-2024', 1710490085, 'VERONICA REINO', 'María Isabel Gutiérrez Vélez', 'María Camacho', '020101822100008', 468, 709, 2),
(000000086, '19-02-2024', '19-02-2024', 1710490085, 'VERONICA REINO', 'María Isabel Gutiérrez Vélez', 'María Camacho', '020101823080002 - 020101823110020 desglose de prueba', 346, 76, 2),
(000000087, '22-02-2024', '22-02-2024', 1710490085, 'VERONICA REINO', 'María Isabel Gutiérrez Vélez', 'María Camacho', '020101819030102', 80, 88, 2),
(000000088, '04-03-2024', '04-03-2024', 0201578309, 'Fanny Piedad Patin Pasto', 'María Isabel Gutiérrez Vélez', 'María Camacho', '020101822020001', 356, 356, 2),
(000000089, '04-03-2024', '04-03-2024', 0201578309, 'Fanny Piedad Patin Pasto', 'María Isabel Gutiérrez Vélez', 'María Camacho', '020101822080015', 14, 14, 2),
(000000090, '04-03-2024', '04-03-2024', 1710490085, 'VERONICA REINO', 'María Isabel Gutiérrez Vélez', 'María Camacho', '0201018232050073', 15, 23, 2),
(000000091, '04-03-2024', '04-03-2024', 0201837606, 'FABIAN  REA', 'María Isabel Gutiérrez Vélez', 'María Camacho', '020101821100003', 265, 380, 2),
(000000092, '06-03-2024', '15-03-2024', 0202006896, 'CHRISTIAN EDUARDO PEREZ ARTEAGA', 'María Isabel Gutiérrez Vélez', 'María Camacho', 'Oficios de control de visitas', 100, 150, 2),
(000000093, '14-03-2024', '14-03-2024', 0202006896, 'CHRISTIAN EDUARDO PEREZ ARTEAGA', 'María Isabel Gutiérrez Vélez', 'María Camacho', 'Oficios de control de visitas', 75, 150, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(3) NOT NULL,
  `cedula` int(10) UNSIGNED ZEROFILL NOT NULL,
  `clave` varchar(100) NOT NULL,
  `nombres` varchar(200) NOT NULL,
  `apellidos` varchar(200) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `nivel` int(1) NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `cedula`, `clave`, `nombres`, `apellidos`, `correo`, `nivel`, `estado`) VALUES
(1, 0201975844, '15036221', 'Claudio', 'Borja', 'claudio-borja@hotmail.com', 0, 1),
(2, 0202455150, '0202455150', 'María', 'Camacho', 'info@softecsa.com', 2, 1),
(9, 0201500931, '0201500931', 'María Isabel', 'Gutiérrez Vélez', 'gutierrezm@fiscalia.gob.ec', 0, 1),
(14, 0201186632, '0201186632', 'GONZALO VINICIO', 'URBANO URBANO', 'urbanog@fiscalia.gob.ec', 1, 1),
(15, 0605404532, '0605404532', 'CRISTIAN PATRICIO', 'LEON HERNANDEZ', 'leonc@fiscalia.gob.ec', 1, 1),
(16, 0201379963, 'Fiscaliag1', 'Adrian ', 'Mendoza ', 'mendozaac@fiscalia.gob.ec', 1, 1),
(17, 0201076551, '0201076551', 'Marcela Alexandra', 'Del Salto Viscarra', 'delsaltom@fiscalia.gob.ec', 1, 1),
(18, 0201253838, 'fiscalia', 'VERONICA DEL ROCIO', 'BONILLA MARTINEZ', 'bonillav@fiscalia.gob.ec', 1, 1),
(19, 0201240058, 'rqjw2016', 'JORGE WASHINGTON ', 'REA QUILUMBA ', 'reaj@fiscalia.gob.ec', 1, 1),
(20, 0202006896, 'Perezkey50', 'CHRISTIAN EDUARDO', 'PEREZ ARTEAGA', 'perezc@fiscalia.gob.ec', 1, 1),
(21, 0201483351, '0201483351', 'SANDRA', 'SANTANA', 'santanas@fiscalia.gob.ec', 1, 1),
(23, 0200990950, '0200990950', 'LORENA', 'ALARCON ', 'alorconm@ficalia.gob.ec', 1, 1),
(24, 0201849205, '0201849205', 'ROSA', 'MAANOBANDA', 'manobandar@fiscalia.gob.ec', 1, 1),
(25, 0201644937, '0201644937', 'MARIA FERNANDA ', 'BRITO', 'britomm@fiscalia.gob.ec', 1, 1),
(26, 0201573763, '0201573763', 'RICHARD', 'ORTIZ', 'ortizor@fiscalia.gob.ec', 0, 1),
(27, 0201574464, '0201574464', 'Karla Mireya', 'Galarza Ávila', 'galarzaak@fiscalia.gob.ec', 1, 1),
(28, 0201578309, '0201578309', 'Fanny Piedad', 'Patin Pasto', 'patinf@defensoria.gob.ec', 1, 1),
(29, 0200794188, '0200794188', 'LORENA ', 'LEON ', 'leonvl@fiscalia.gob.ec', 1, 1),
(30, 0201666344, '0201666344', 'MARISOL', 'CHELA', 'chelam@fiscalia.gob.ec', 1, 1),
(31, 0201619426, '0201619426', 'JAIME', 'GUANO', 'guanoj@fiscalia.gob.ec', 1, 1),
(32, 1710490085, '1710490085', 'VERONICA', 'REINO', 'reinov@fiscalia.gob.ec', 1, 1),
(33, 0201752508, '0201752508', 'PATRICIO ', 'MELENDEZ', 'melendezv@fiscalia.gob.ec', 1, 1),
(34, 0603662628, '0603662628', 'MARY ', 'HUILCAREMA', 'huilcaremam@fiscalia.gob.ec', 1, 1),
(35, 0201837606, '0201837606', 'FABIAN ', 'REA', 'reaf@fiscalia.gob.ec', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ordenes`
--
ALTER TABLE `ordenes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ordenes`
--
ALTER TABLE `ordenes`
  MODIFY `id` int(9) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
