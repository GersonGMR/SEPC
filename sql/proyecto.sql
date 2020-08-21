-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2019 at 06:57 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyecto`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `registrarAuditoria` (IN `nusuario` VARCHAR(30) CHARSET utf8, IN `accion` INT, IN `tabla` INT)  BEGIN
INSERT INTO auditoria(id_usuario, fecha, hora, id_accion, id_tabla) VALUES((SELECT Id_Usuarios FROM usuarios WHERE Usuario=nusuario), CURRENT_DATE(), CURRENT_TIME(), accion, tabla);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `acciones`
--

CREATE TABLE `acciones` (
  `id_accion` int(11) NOT NULL,
  `accion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acciones`
--

INSERT INTO `acciones` (`id_accion`, `accion`) VALUES
(1, 'Agregar'),
(2, 'Modificar'),
(3, 'Eliminar');

-- --------------------------------------------------------

--
-- Table structure for table `auditoria`
--

CREATE TABLE `auditoria` (
  `id_auditoria` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `id_accion` int(11) NOT NULL,
  `id_tabla` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auditoria`
--

INSERT INTO `auditoria` (`id_auditoria`, `id_usuario`, `fecha`, `hora`, `id_accion`, `id_tabla`) VALUES
(2, 5, '2019-09-10', '20:24:17', 2, 2),
(3, 5, '2019-09-10', '20:44:08', 2, 3),
(4, 5, '2019-09-11', '09:08:12', 2, 3),
(5, 5, '2019-09-11', '09:20:55', 1, 5),
(6, 5, '2019-09-11', '09:27:04', 1, 5),
(7, 5, '2019-09-11', '09:27:41', 1, 5),
(8, 5, '2019-09-11', '09:47:57', 1, 5),
(9, 5, '2019-09-11', '10:16:08', 3, 8),
(10, 5, '2019-09-11', '11:41:23', 1, 5),
(11, 5, '2019-09-11', '11:48:25', 3, 5),
(12, 5, '2019-09-11', '12:10:02', 3, 5),
(13, 5, '2019-09-11', '12:29:00', 1, 5),
(14, 5, '2019-09-11', '13:15:16', 1, 6),
(15, 5, '2019-09-11', '13:15:50', 3, 6),
(16, 5, '2019-09-11', '14:20:17', 1, 1),
(17, 5, '2019-09-11', '14:20:31', 3, 1),
(18, 5, '2019-09-11', '14:20:35', 3, 1),
(19, 5, '2019-09-11', '14:32:42', 1, 8),
(20, 5, '2019-09-11', '14:33:13', 3, 8),
(21, 5, '2019-09-11', '14:49:51', 1, 2),
(22, 5, '2019-09-11', '21:33:25', 2, 1),
(23, 5, '2019-09-11', '21:40:55', 2, 1),
(24, 5, '2019-09-11', '21:41:27', 3, 1),
(25, 5, '2019-09-11', '21:43:50', 1, 1),
(26, 5, '2019-09-11', '21:44:18', 2, 1),
(27, 5, '2019-09-11', '21:44:56', 3, 1),
(28, 5, '2019-09-11', '21:45:42', 3, 1),
(29, 5, '2019-09-11', '21:45:59', 3, 1),
(30, 5, '2019-09-11', '21:50:41', 1, 5),
(31, 5, '2019-09-11', '21:52:56', 2, 5),
(32, 5, '2019-09-11', '21:53:36', 2, 5),
(33, 5, '2019-09-11', '21:55:11', 3, 5),
(34, 5, '2019-09-11', '21:59:28', 1, 6),
(35, 5, '2019-09-11', '22:01:26', 2, 6),
(36, 5, '2019-09-11', '22:02:05', 3, 6),
(37, 5, '2019-09-11', '22:11:38', 1, 8),
(38, 5, '2019-09-11', '22:12:28', 2, 8),
(39, 5, '2019-09-11', '22:12:57', 3, 8),
(40, 5, '2019-09-11', '22:13:51', 1, 2),
(41, 5, '2019-09-11', '23:44:14', 2, 1),
(42, 5, '2019-09-11', '23:44:46', 2, 1),
(43, 5, '2019-09-11', '23:52:42', 2, 1),
(44, 5, '2019-09-12', '00:23:24', 3, 1),
(45, 5, '2019-09-12', '00:29:19', 3, 1),
(46, 5, '2019-09-12', '00:31:41', 3, 1),
(47, 5, '2019-09-12', '00:32:32', 3, 1),
(48, 5, '2019-09-12', '00:35:04', 2, 1),
(49, 5, '2019-09-12', '00:35:44', 2, 1),
(50, 5, '2019-09-12', '00:35:45', 2, 1),
(51, 5, '2019-09-12', '00:36:50', 2, 1),
(52, 5, '2019-09-12', '00:37:32', 3, 1),
(53, 5, '2019-09-12', '00:44:47', 3, 1),
(54, 5, '2019-09-12', '00:47:35', 3, 1),
(55, 5, '2019-09-12', '01:08:35', 1, 8),
(56, 5, '2019-09-12', '01:08:48', 1, 8),
(57, 5, '2019-09-12', '01:15:22', 1, 8),
(58, 5, '2019-09-12', '01:15:41', 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `carreras`
--

CREATE TABLE `carreras` (
  `id_carrera` int(11) NOT NULL,
  `id_facultad` int(11) NOT NULL,
  `nombre_carrera` varchar(1000) NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carreras`
--

INSERT INTO `carreras` (`id_carrera`, `id_facultad`, `nombre_carrera`, `estado`) VALUES
(5, 1, 'Sistemas compu', 0),
(6, 1, 'Tecnico en Redes', 1),
(7, 1, 'Sistemas ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
  `Id_Categoria` int(11) NOT NULL,
  `Nombre_Categoria` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`Id_Categoria`, `Nombre_Categoria`) VALUES
(1, 'Programacion'),
(2, 'Robotica y Electronica'),
(3, 'Multidisciplinaria'),
(4, 'Metodologia de la Investigacion'),
(5, 'Historia'),
(6, 'Prueba');

-- --------------------------------------------------------

--
-- Table structure for table `certamen`
--

CREATE TABLE `certamen` (
  `id_certamen` int(11) NOT NULL,
  `fecha_certamen` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `certamen`
--

INSERT INTO `certamen` (`id_certamen`, `fecha_certamen`) VALUES
(1, '2019-09-05'),
(2, '2019-09-10');

-- --------------------------------------------------------

--
-- Table structure for table `facultades`
--

CREATE TABLE `facultades` (
  `id_facultad` int(11) NOT NULL,
  `nombre_facultad` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facultades`
--

INSERT INTO `facultades` (`id_facultad`, `nombre_facultad`) VALUES
(1, 'Ingenieria'),
(2, 'Medicina'),
(3, 'Empresariales');

-- --------------------------------------------------------

--
-- Table structure for table `integrante`
--

CREATE TABLE `integrante` (
  `id_Integrante` int(11) NOT NULL,
  `nombre_integrante` varchar(100) NOT NULL,
  `CIF` int(11) NOT NULL,
  `id_Proyecto` int(11) NOT NULL,
  `id_carrera` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `integrante`
--

INSERT INTO `integrante` (`id_Integrante`, `nombre_integrante`, `CIF`, `id_Proyecto`, `id_carrera`, `estado`) VALUES
(1, 'Milton', 2017010295, 1, 5, 1),
(4, 'asdasdasd', 1231224, 1, 5, 0),
(5, 'Condor', 1231234, 1, 5, 1),
(6, 'asdasd', 1231241, 1, 5, 1),
(7, 'qweqweqwe', 1234353, 1, 5, 0),
(8, 'asdadw', 21234, 1, 5, 1),
(9, 'Edwin', 123124123, 1, 5, 0),
(14, 'steve', 12312423, 1, 5, 0),
(15, 'test', 2019010201, 1, 5, 0),
(16, 'test2', 2019010202, 1, 5, 1),
(17, 'test3', 2017010203, 1, 5, 1),
(18, 'test3', 2017010203, 1, 5, 1),
(19, 'e', 5, 1, 5, 1),
(20, 'TestMilton', 2017010295, 1, 5, 1),
(21, 'TESTMILTON2', 2017010204, 1, 5, 1),
(22, 'TESTMILTON3', 2017010205, 1, 5, 1),
(23, 'TESTMILTON4', 2017010206, 1, 5, 1),
(24, 'TESTNEW', 2019010210, 2, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `proyectos`
--

CREATE TABLE `proyectos` (
  `id_Proyecto` int(11) NOT NULL,
  `Id_Usuarios` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `nombre_Proyecto` varchar(100) NOT NULL,
  `id_carrera` int(11) NOT NULL,
  `id_certamen` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proyectos`
--

INSERT INTO `proyectos` (`id_Proyecto`, `Id_Usuarios`, `total`, `nombre_Proyecto`, `id_carrera`, `id_certamen`, `estado`) VALUES
(1, 5, 0, 'TEST', 5, 1, 1),
(2, 6, 0, 'TestProyecto', 5, 1, 0),
(3, 6, 0, 'TESTPRO2', 5, 1, 0),
(4, 6, 0, 'TESTPRO3', 5, 1, 1),
(5, 20, 0, 'Miltonnuevo', 6, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tablas`
--

CREATE TABLE `tablas` (
  `id_tabla` int(11) NOT NULL,
  `nombreTabla` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tablas`
--

INSERT INTO `tablas` (`id_tabla`, `nombreTabla`) VALUES
(1, 'Carreras'),
(2, 'categorias'),
(3, 'certamen'),
(4, 'facultades'),
(5, 'integrantes'),
(6, 'proyectos'),
(7, 'tipo de usuario'),
(8, 'usuarios');

-- --------------------------------------------------------

--
-- Table structure for table `tipos_usuarios`
--

CREATE TABLE `tipos_usuarios` (
  `Id_TipoUsu` int(11) NOT NULL,
  `Nombre_Tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipos_usuarios`
--

INSERT INTO `tipos_usuarios` (`Id_TipoUsu`, `Nombre_Tipo`) VALUES
(1, 'Administrador'),
(2, 'Jurado');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `Id_Usuarios` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Apellido` varchar(100) NOT NULL,
  `Usuario` varchar(100) NOT NULL,
  `Contra` varchar(150) NOT NULL,
  `Id_Categoria` int(11) DEFAULT NULL,
  `Id_TipoUsu` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`Id_Usuarios`, `Nombre`, `Apellido`, `Usuario`, `Contra`, `Id_Categoria`, `Id_TipoUsu`, `estado`) VALUES
(5, 'Steve', 'Mata', 'steve', '123', NULL, 1, 1),
(6, 'leo', 'trujillo', 'leo', '123', 1, 2, 0),
(7, 'ger', 'test1', 'Milton', '123', 2, 2, 1),
(8, 'test', 'test1', 'Milton', '123', 2, 2, 0),
(9, 'asdas', 'asdas', 'asdas', 'asdas', 3, 2, 0),
(10, 'asdas1', 'asdas1', 'asdas1', 'asdas1', 4, 2, 0),
(11, 'milton', 'mejia', 'milton', '456', 3, 2, 1),
(12, 'hola', 'sdvrerv', 'weecwcw', '456', 2, 2, 0),
(18, 'rgerger', 'gergergre', 'ergregre', '123', 1, 2, 0),
(19, 'asdasdas', 'asdasdasd', 'asdasdasd', '123123', 2, 2, 0),
(20, 'TESTMILTON5', 'Mejia', 'Diablo10', '123', 1, 2, 0),
(21, 'HHH', 'Mejia5', 'Diablo5', '123', 1, 2, 0),
(25, 'Fer', 'Nando', 'Fernando', '123', 5, 2, 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `viewauditorias`
-- (See below for the actual view)
--
CREATE TABLE `viewauditorias` (
`id_auditoria` int(11)
,`Usuario` varchar(100)
,`accion` varchar(45)
,`nombreTabla` varchar(30)
,`fecha` date
,`hora` time
);

-- --------------------------------------------------------

--
-- Structure for view `viewauditorias`
--
DROP TABLE IF EXISTS `viewauditorias`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewauditorias`  AS  select `auditoria`.`id_auditoria` AS `id_auditoria`,`usuarios`.`Usuario` AS `Usuario`,`acciones`.`accion` AS `accion`,`tablas`.`nombreTabla` AS `nombreTabla`,`auditoria`.`fecha` AS `fecha`,`auditoria`.`hora` AS `hora` from (((`auditoria` join `usuarios`) join `acciones`) join `tablas`) where ((`auditoria`.`id_usuario` = `usuarios`.`Id_Usuarios`) and (`auditoria`.`id_accion` = `acciones`.`id_accion`) and (`auditoria`.`id_tabla` = `tablas`.`id_tabla`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acciones`
--
ALTER TABLE `acciones`
  ADD PRIMARY KEY (`id_accion`);

--
-- Indexes for table `auditoria`
--
ALTER TABLE `auditoria`
  ADD PRIMARY KEY (`id_auditoria`),
  ADD KEY `id_accion` (`id_accion`),
  ADD KEY `auditoria_ibfk_2` (`id_tabla`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indexes for table `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`id_carrera`),
  ADD KEY `id_facultad` (`id_facultad`);

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`Id_Categoria`);

--
-- Indexes for table `certamen`
--
ALTER TABLE `certamen`
  ADD PRIMARY KEY (`id_certamen`);

--
-- Indexes for table `facultades`
--
ALTER TABLE `facultades`
  ADD PRIMARY KEY (`id_facultad`);

--
-- Indexes for table `integrante`
--
ALTER TABLE `integrante`
  ADD PRIMARY KEY (`id_Integrante`),
  ADD KEY `id_carrera` (`id_carrera`),
  ADD KEY `id_Proyecto` (`id_Proyecto`);

--
-- Indexes for table `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id_Proyecto`),
  ADD KEY `id_carrera` (`id_carrera`),
  ADD KEY `id_certamen` (`id_certamen`),
  ADD KEY `Id_Usuarios` (`Id_Usuarios`);

--
-- Indexes for table `tablas`
--
ALTER TABLE `tablas`
  ADD PRIMARY KEY (`id_tabla`);

--
-- Indexes for table `tipos_usuarios`
--
ALTER TABLE `tipos_usuarios`
  ADD PRIMARY KEY (`Id_TipoUsu`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id_Usuarios`),
  ADD KEY `Id_Tipo` (`Id_TipoUsu`),
  ADD KEY `Id_Categoria` (`Id_Categoria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acciones`
--
ALTER TABLE `acciones`
  MODIFY `id_accion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `auditoria`
--
ALTER TABLE `auditoria`
  MODIFY `id_auditoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `carreras`
--
ALTER TABLE `carreras`
  MODIFY `id_carrera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `Id_Categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `certamen`
--
ALTER TABLE `certamen`
  MODIFY `id_certamen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `facultades`
--
ALTER TABLE `facultades`
  MODIFY `id_facultad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `integrante`
--
ALTER TABLE `integrante`
  MODIFY `id_Integrante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id_Proyecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tablas`
--
ALTER TABLE `tablas`
  MODIFY `id_tabla` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tipos_usuarios`
--
ALTER TABLE `tipos_usuarios`
  MODIFY `Id_TipoUsu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id_Usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auditoria`
--
ALTER TABLE `auditoria`
  ADD CONSTRAINT `auditoria_ibfk_1` FOREIGN KEY (`id_accion`) REFERENCES `acciones` (`id_accion`) ON UPDATE CASCADE,
  ADD CONSTRAINT `auditoria_ibfk_2` FOREIGN KEY (`id_tabla`) REFERENCES `tablas` (`id_tabla`) ON UPDATE CASCADE,
  ADD CONSTRAINT `auditoria_ibfk_3` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`Id_Usuarios`);

--
-- Constraints for table `carreras`
--
ALTER TABLE `carreras`
  ADD CONSTRAINT `carreras_ibfk_1` FOREIGN KEY (`id_facultad`) REFERENCES `facultades` (`id_facultad`);

--
-- Constraints for table `integrante`
--
ALTER TABLE `integrante`
  ADD CONSTRAINT `integrante_ibfk_1` FOREIGN KEY (`id_carrera`) REFERENCES `carreras` (`id_carrera`),
  ADD CONSTRAINT `integrante_ibfk_2` FOREIGN KEY (`id_Proyecto`) REFERENCES `proyectos` (`id_Proyecto`);

--
-- Constraints for table `proyectos`
--
ALTER TABLE `proyectos`
  ADD CONSTRAINT `proyectos_ibfk_1` FOREIGN KEY (`id_carrera`) REFERENCES `carreras` (`id_carrera`),
  ADD CONSTRAINT `proyectos_ibfk_2` FOREIGN KEY (`id_certamen`) REFERENCES `certamen` (`id_certamen`),
  ADD CONSTRAINT `proyectos_ibfk_3` FOREIGN KEY (`Id_Usuarios`) REFERENCES `usuarios` (`Id_Usuarios`);

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`Id_TipoUsu`) REFERENCES `tipos_usuarios` (`Id_TipoUsu`),
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`Id_Categoria`) REFERENCES `categorias` (`Id_Categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
