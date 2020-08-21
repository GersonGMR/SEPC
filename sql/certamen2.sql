-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2019 at 05:30 AM
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
-- Database: `certamen2`
--

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
(4, 'Metodologia de la Investigacion');

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
  `Id_Usurios` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Apellido` varchar(100) NOT NULL,
  `Usuario` varchar(100) NOT NULL,
  `Contra` varchar(150) NOT NULL,
  `Id_Categoria` int(11) DEFAULT NULL,
  `Id_TipoUsu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`Id_Usurios`, `Nombre`, `Apellido`, `Usuario`, `Contra`, `Id_Categoria`, `Id_TipoUsu`) VALUES
(5, 'Steve', 'Mata', 'steve', '123', NULL, 1),
(6, 'Leo', 'Trujillo', 'leo', '123', 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`Id_Categoria`);

--
-- Indexes for table `tipos_usuarios`
--
ALTER TABLE `tipos_usuarios`
  ADD PRIMARY KEY (`Id_TipoUsu`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id_Usurios`),
  ADD KEY `Id_Tipo` (`Id_TipoUsu`),
  ADD KEY `Id_Categoria` (`Id_Categoria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `Id_Categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tipos_usuarios`
--
ALTER TABLE `tipos_usuarios`
  MODIFY `Id_TipoUsu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id_Usurios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

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
