-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 29, 2018 at 04:51 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_tea`
--

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(3) NOT NULL,
  `des_categoria` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `des_categoria`) VALUES
(1, 'Biologia'),
(2, 'Matematicas'),
(3, 'Medicina'),
(4, 'Estadistica'),
(5, 'Ciencia'),
(6, 'Psicologia '),
(7, 'Deportes'),
(8, 'Musica'),
(9, 'Arte');

-- --------------------------------------------------------

--
-- Table structure for table `ciudad`
--

CREATE TABLE `ciudad` (
  `id_ciudad` int(2) NOT NULL,
  `des_ciudad` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Dumping data for table `ciudad`
--

INSERT INTO `ciudad` (`id_ciudad`, `des_ciudad`) VALUES
(1, 'La Paz'),
(2, 'Oruro'),
(3, 'Potosi'),
(4, 'Cochabamba '),
(5, 'Chuquisaca'),
(6, 'Tarija'),
(7, 'Pando'),
(8, 'Beni'),
(9, 'Santa Cruz'),
(10, 'El Alto');

-- --------------------------------------------------------

--
-- Table structure for table `comentario`
--

CREATE TABLE `comentario` (
  `id_comentario` int(10) NOT NULL,
  `des_comentario` varchar(600) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fecha_hora_comentario` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `id_documento` int(5) NOT NULL,
  `id_usuario` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Dumping data for table `comentario`
--

INSERT INTO `comentario` (`id_comentario`, `des_comentario`, `fecha_hora_comentario`, `id_documento`, `id_usuario`) VALUES
(1, 'hola12', '2018/11/27 01:38:26am', 1, 2),
(2, 'hola22', '2018/11/27 01:44:08am', 1, 2),
(3, 'hola33', '2018/11/27 08:27:46am', 1, 2),
(4, 'jjghjg\r\n', '2018/11/27 09:54:19am', 3, 2),
(5, 'hkjh', '2018/11/27 10:09:22am', 2, 2),
(6, 'como estas', '2018/11/27 11:43:24am', 1, 2),
(7, 'hola2', '2018/11/27 12:03:36pm', 1, 2),
(8, 'gracias', '2018/11/27 12:25:53pm', 1, 2),
(9, 'buen documento\r\n', '2018/11/27 01:26:07pm', 1, 2),
(10, 'gracias!', '2018/11/27 01:26:22pm', 1, 2),
(11, 'dsdff', '2018/11/27 10:21:31pm', 1, 2),
(12, 'bla bla  bla ', '2018/11/27 10:21:31pm', 1, 1),
(13, 'DSDASD', '2018/11/27 11:09:28pm', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `cuenta`
--

CREATE TABLE `cuenta` (
  `id_cuenta` int(5) NOT NULL,
  `nombre_cuenta` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `pass_cuenta` varchar(250) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `cant_tea` int(2) NOT NULL,
  `num_usuarios` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Dumping data for table `cuenta`
--

INSERT INTO `cuenta` (`id_cuenta`, `nombre_cuenta`, `pass_cuenta`, `cant_tea`, `num_usuarios`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 0, 0),
(2, 'fam perez', 'b423225dc02e7ed20f98361ecdb81345', 1, 1),
(3, 'Losvidal', '322ead07143d689753b79454b3349580', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `documento`
--

CREATE TABLE `documento` (
  `id_documento` int(5) NOT NULL,
  `nombre_documento` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fecha_documento` date NOT NULL,
  `puntaje_didactico` int(3) DEFAULT NULL COMMENT '999 si el documento es academico ',
  `fuente` varchar(250) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `id_tipo_documento` int(2) NOT NULL,
  `me_gusta` int(100) NOT NULL,
  `no_me_gusta` int(100) NOT NULL,
  `id_categoria` int(3) NOT NULL,
  `id_usuario` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Dumping data for table `documento`
--

INSERT INTO `documento` (`id_documento`, `nombre_documento`, `fecha_documento`, `puntaje_didactico`, `fuente`, `id_tipo_documento`, `me_gusta`, `no_me_gusta`, `id_categoria`, `id_usuario`) VALUES
(1, 'Caso Clinico de fuga disociativa', '2018-07-10', NULL, 'assets/documentos/textos_academicos/APS001', 1, 3, 0, 6, 2),
(2, 'Optimizacion multiobjetivo', '2018-08-07', NULL, 'assets/documentos/textos_academicos/AME001', 1, 1, 0, 4, 1),
(3, 'Enfermedades del pecho', '2018-09-08', NULL, 'assets/documentos/textos_academicos/AMD003', 1, 0, 0, 3, 4),
(4, 'Adultos con malaria ', '2018-09-13', NULL, 'assets/documentos/textos_academicos/AMD002', 1, 0, 0, 3, 3),
(5, 'Infecciones pleurales controladas', '2018-10-03', NULL, 'assets/documentos/textos_academicos/AMD001', 1, 0, 0, 3, 2),
(6, 'Estudio en ratas ', '2018-09-13', NULL, 'assets/documentos/textos_academicos/ACI001', 1, 0, 0, 5, 1),
(7, 'Estudio en celulas embrionicas', '2018-09-11', NULL, 'assets/documentos/textos_academicos/ABM001', 1, 0, 0, 2, 3),
(8, 'Estudio para el diagnostico microbiologico', '2018-09-26', NULL, 'assets/documentos/textos_academicos/ABI001', 1, 0, 0, 1, 4),
(9, 'Evidencia postcraneal', '2018-09-21', NULL, 'assets/documentos/textos_academicos/ABI002', 1, 0, 0, 1, 2),
(10, 'Caso Clinico de fuga disociativa', '2018-10-17', NULL, 'assets/documentos/textos_academicos/APS001', 2, 0, 0, 6, 3);

-- --------------------------------------------------------

--
-- Table structure for table `favorito`
--

CREATE TABLE `favorito` (
  `id_favorito` int(10) NOT NULL,
  `id_usuario` int(5) NOT NULL,
  `id_comentario` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `persona`
--

CREATE TABLE `persona` (
  `id_persona` int(5) NOT NULL,
  `nombres` varchar(250) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `apellidos` varchar(250) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `correos` varchar(150) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `id_ciudad` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Dumping data for table `persona`
--

INSERT INTO `persona` (`id_persona`, `nombres`, `apellidos`, `correos`, `id_ciudad`) VALUES
(1, 'Stephany ', 'Herrera Vasquez', 'teffy@hotmail.com', 1),
(2, 'Branko', 'Pereira', 'branko@gmail.com', 1),
(3, 'Diego Armando', 'Tucupa Zegarra', 'diego@gmail.com', 8),
(4, 'Jose Luis', 'Peredo ', 'hola@hotmail.com', 3),
(5, 'jose', 'vidal', 'jose@vidal.com', 10),
(6, 'Maria', 'Fernandez Ferrera', 'maria@fer.bo', 7),
(7, 'Jose', 'Robles', 'jose@algo.com', 1),
(8, 'Maria', 'Robles', 'ma@fer.com', 2),
(9, 'Noah', 'Splger Shfriendzer', 'Nsplger@mail.com', 9),
(10, 'Jenette', 'Cardstone Flower', 'Jenny@mail.com', 4),
(11, 'Juani', 'fsda sfd', 'sad@mail.com', 3),
(12, 'pepito', 'venavidez garcia', 'pepi@hhh.com', 2),
(13, 'Carlos', 'Oliver Perez', 'carlos@hotmail.com', 9),
(14, 'Diego Gamarra', 'Vidal', 'diego@j.com', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tipo_documento`
--

CREATE TABLE `tipo_documento` (
  `id_tipo_documento` int(2) NOT NULL,
  `des_tipo_documento` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Dumping data for table `tipo_documento`
--

INSERT INTO `tipo_documento` (`id_tipo_documento`, `des_tipo_documento`) VALUES
(1, 'Academicos'),
(2, 'Didacticos');

-- --------------------------------------------------------

--
-- Table structure for table `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id_tipo_usuario` int(1) NOT NULL,
  `des_tipo_usuario` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Dumping data for table `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id_tipo_usuario`, `des_tipo_usuario`) VALUES
(1, 'Administrador'),
(2, 'Tutor'),
(3, 'Familiar');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(5) NOT NULL,
  `usuario` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `pin` varchar(4) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `img_usu` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `estado` int(1) NOT NULL,
  `id_tipo_usuario` int(5) NOT NULL,
  `id_cuenta` int(5) NOT NULL,
  `id_persona` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `usuario`, `pin`, `img_usu`, `estado`, `id_tipo_usuario`, `id_cuenta`, `id_persona`) VALUES
(1, 'teffy', '1234', '8', 1, 1, 1, 1),
(2, 'branco', '1234', '1', 1, 2, 1, 2),
(3, 'diego', '1234', '9', 1, 3, 1, 3),
(4, 'jose', '1234', '8', 1, 2, 2, 4),
(5, 'Juanv', '1111', '2', 1, 2, 2, 5),
(6, 'Mafer', '1111', '3', 1, 1, 2, 6),
(7, 'Jose234', '0000', '8', 1, 2, 2, 7),
(8, 'mafer', '0000', '9', 1, 3, 2, 8),
(9, 'RuzzBlue', '0000', '2', 1, 2, 2, 9),
(10, 'Jenne29', '0000', '7', 1, 2, 2, 10),
(11, 'juaniii', '1234', '8', 1, 3, 2, 11),
(12, 'pp99el', '1111', '9', 1, 3, 2, 12),
(13, 'carlos1', '1234', '1', 1, 2, 2, 13),
(14, '01Go', '1234', '4', 1, 2, 3, 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indexes for table `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`id_ciudad`);

--
-- Indexes for table `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_documento` (`id_documento`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indexes for table `cuenta`
--
ALTER TABLE `cuenta`
  ADD PRIMARY KEY (`id_cuenta`);

--
-- Indexes for table `documento`
--
ALTER TABLE `documento`
  ADD PRIMARY KEY (`id_documento`),
  ADD KEY `id_tipo_documento` (`id_tipo_documento`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indexes for table `favorito`
--
ALTER TABLE `favorito`
  ADD PRIMARY KEY (`id_favorito`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_comentario` (`id_comentario`);

--
-- Indexes for table `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id_persona`),
  ADD KEY `id_ciudad` (`id_ciudad`);

--
-- Indexes for table `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`id_tipo_documento`);

--
-- Indexes for table `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id_tipo_usuario`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_tipo_usuario` (`id_tipo_usuario`),
  ADD KEY `id_cuenta` (`id_cuenta`),
  ADD KEY `id_persona` (`id_persona`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `id_ciudad` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cuenta`
--
ALTER TABLE `cuenta`
  MODIFY `id_cuenta` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `documento`
--
ALTER TABLE `documento`
  MODIFY `id_documento` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `favorito`
--
ALTER TABLE `favorito`
  MODIFY `id_favorito` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `persona`
--
ALTER TABLE `persona`
  MODIFY `id_persona` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tipo_documento`
--
ALTER TABLE `tipo_documento`
  MODIFY `id_tipo_documento` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id_tipo_usuario` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comentario_ibfk_3` FOREIGN KEY (`id_documento`) REFERENCES `documento` (`id_documento`);

--
-- Constraints for table `documento`
--
ALTER TABLE `documento`
  ADD CONSTRAINT `documento_ibfk_2` FOREIGN KEY (`id_tipo_documento`) REFERENCES `tipo_documento` (`id_tipo_documento`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `documento_ibfk_3` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `documento_ibfk_4` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `favorito`
--
ALTER TABLE `favorito`
  ADD CONSTRAINT `favorito_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `favorito_ibfk_2` FOREIGN KEY (`id_comentario`) REFERENCES `comentario` (`id_comentario`);

--
-- Constraints for table `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `persona_ibfk_1` FOREIGN KEY (`id_ciudad`) REFERENCES `ciudad` (`id_ciudad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_tipo_usuario`) REFERENCES `tipo_usuario` (`id_tipo_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`id_cuenta`) REFERENCES `cuenta` (`id_cuenta`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_ibfk_3` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id_persona`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
