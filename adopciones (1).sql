-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2022 at 09:23 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adopciones`
--

-- --------------------------------------------------------

--
-- Table structure for table `adopciones`
--

CREATE TABLE `adopciones` (
  `idadopcion` int(11) NOT NULL,
  `nombre` varchar(120) NOT NULL,
  `texto` text NOT NULL,
  `imagen` varchar(120) NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adopciones`
--

INSERT INTO `adopciones` (`idadopcion`, `nombre`, `texto`, `imagen`, `activo`) VALUES
(1, 'Rio', 'RIO está luchando por su vida! no permitimos que este bebé volviera a pasar la noche en este estado en la calle. Así se la pasaba cruzando la Av. de lado a lado, ayer nos reportaron este caso y la escena nos rompió por completo el corazón… a pesar de que no teníamos la capacidad de solventar este caso… no pudimos negarnos en abrirle nuestros brazos.', 'rio.jpg', 1),
(2, 'Sparkie', 'Este bebe necesita mucha de nosotros, queremos borrar ese doloroso pasado que vivió buscando en ser auxiliado. Quienes se quieran sumar a cambiarle la vida a este bebe puede escribirnos.', '1668995350.jpg', 1),
(3, 'Luna', 'Pueden creer que esta pequeña vivía en la calle sin poder caminar se arrastraba por todo el barrio Villa Marbella y su cuerpito eran solo llagas con sangre. Marcas de la indiferencia... y del maltrato. Su condición y El Diagnostico no eran muy buenos y lo primero que nos dijeron fue EUTANASIA.... pero NO! Acá está la prueba de mucho amor, Terapias, cuidados y una familia.', '1668995432.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `galeria`
--

CREATE TABLE `galeria` (
  `idgaleria` int(11) NOT NULL,
  `texto` text NOT NULL,
  `imagen` varchar(120) NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `galeria`
--

INSERT INTO `galeria` (`idgaleria`, `texto`, `imagen`, `activo`) VALUES
(1, 'texto a definir', 'g1.jpg', 1),
(2, 'texto a definir', 'g2.jpg', 1),
(3, 'Prueba 3', '1668990686.jpg', 1),
(4, 'Prueba 4', '1668991634.jpg', 1),
(6, 'Prueba 5', '1668991761.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mensajes`
--

CREATE TABLE `mensajes` (
  `idmensaje` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `apellidos` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `mensaje` text NOT NULL,
  `idadopcion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mensajes`
--

INSERT INTO `mensajes` (`idmensaje`, `nombre`, `apellidos`, `email`, `telefono`, `mensaje`, `idadopcion`) VALUES
(1, 'Miguel', 'Chehade', 'mchehade2000@hotmail.com', '4151031642', 'quiero adoptar al perrito', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adopciones`
--
ALTER TABLE `adopciones`
  ADD PRIMARY KEY (`idadopcion`);

--
-- Indexes for table `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`idgaleria`);

--
-- Indexes for table `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`idmensaje`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adopciones`
--
ALTER TABLE `adopciones`
  MODIFY `idadopcion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `galeria`
--
ALTER TABLE `galeria`
  MODIFY `idgaleria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `idmensaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
