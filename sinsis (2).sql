-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-08-2020 a las 21:19:05
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sinsis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diagnostico`
--

CREATE TABLE `diagnostico` (
  `id_diagnostico` int(11) NOT NULL,
  `proyecto` int(11) NOT NULL,
  `direccion` varchar(400) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diagnosticos_solucion`
--

CREATE TABLE `diagnosticos_solucion` (
  `id_diagnostico_solucion` int(11) NOT NULL,
  `id_diagnostico` int(11) NOT NULL,
  `id_solucion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrevista`
--

CREATE TABLE `entrevista` (
  `id_entrevista` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `nombre_entrevistado` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `telefono_entrevistado` varchar(99) COLLATE utf8mb4_bin NOT NULL,
  `correo_entrevistado` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `puesto` int(100) NOT NULL,
  `problema_1` varchar(999) COLLATE utf8mb4_bin NOT NULL,
  `problema_2` varchar(999) COLLATE utf8mb4_bin NOT NULL,
  `documentacion` tinyint(1) NOT NULL,
  `que_documentos` varchar(300) COLLATE utf8mb4_bin NOT NULL,
  `conocimiento_empleados` tinyint(1) NOT NULL,
  `acceso_empleados` tinyint(1) NOT NULL,
  `frecuencia_evaluar` varchar(300) COLLATE utf8mb4_bin NOT NULL,
  `frecuencia_capacitacion` varchar(300) COLLATE utf8mb4_bin NOT NULL,
  `conocimiento_de_reglamentos` tinyint(1) NOT NULL,
  `nombrar_reglamentos` varchar(500) COLLATE utf8mb4_bin NOT NULL,
  `criterio` varchar(500) COLLATE utf8mb4_bin NOT NULL,
  `estado_financiero_empresa` tinyint(1) NOT NULL,
  `actualizacion_estado_financiero` varchar(300) COLLATE utf8mb4_bin NOT NULL,
  `software_utilizado` varchar(500) COLLATE utf8mb4_bin NOT NULL,
  `porcentaje_licencia_vigente` int(11) NOT NULL,
  `anotaciones` varchar(999) COLLATE utf8mb4_bin NOT NULL,
  `proyecto` int(11) NOT NULL,
  `usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `entrevista`
--

INSERT INTO `entrevista` (`id_entrevista`, `fecha`, `nombre_entrevistado`, `telefono_entrevistado`, `correo_entrevistado`, `puesto`, `problema_1`, `problema_2`, `documentacion`, `que_documentos`, `conocimiento_empleados`, `acceso_empleados`, `frecuencia_evaluar`, `frecuencia_capacitacion`, `conocimiento_de_reglamentos`, `nombrar_reglamentos`, `criterio`, `estado_financiero_empresa`, `actualizacion_estado_financiero`, `software_utilizado`, `porcentaje_licencia_vigente`, `anotaciones`, `proyecto`, `usuario`) VALUES
(1, '2020-07-04', 'Franco Hernandez', '3221973912', 'franco@hotmail.com', 2, 'Problema 1', 'Segundo problema', 0, 'Acta de nacimiento', 1, 0, 'Diario', 'Semanal', 1, 'Varios reglamentos', 'Ser mas eficiente', 0, 'Diario', 'Excell', 25, 'Anotaciones', 2, 0),
(2, '2020-07-02', 'Victor Ochoa Flores', '321456789', 'vikingo@vikingo.com', 2, 'Problema 1', 'Problema 2', 1, 'Documentos varios', 1, 0, 'Semanal', 'Diario', 1, 'Nombrar reglamentos', 'Criterio', 1, 'Diario', 'Excell', 15, 'Anotaciones', 2, 0),
(3, '2020-08-15', 'Obama', '3216549874', 'obama@usa.com', 1, 'este es el mayor problema', 'este problema es menor', 1, 'Documentos que comprueban que conozco del tema', 1, 0, 'Mensual', 'Cada 15 dias', 1, 'Estos son los reglamentos de la empresa', 'Criterio de algo', 1, 'Anual', 'Paint y Power point, aveces el block de notas', 15, 'Estas son las anotaciones que tengo del entrevistado Obama, me parece muy sospechoso, lo mas seguro no lo aceptamos', 1, 0),
(4, '2020-08-05', 'nombre entrevistado', 'telefono', 'correo@correo.correo', 2, 'problema 1', 'problema 2', 1, 'Que documentos', 1, 1, '15', '30', 0, 'Nombrar reglamentos', 'Criterio de la empresa', 1, '15', 'Excel', 99, 'Antaciones', 1, 0),
(5, '2020-08-05', 'nombre entrevistado', 'telefono', 'correo@correo.correo', 2, 'problema 1', 'problema 2', 1, 'Que documentos', 1, 1, '15', '30', 0, 'Nombrar reglamentos', 'Criterio de la empresa', 1, '15', 'Excel', 99, 'Antaciones', 1, 2),
(7, '2020-08-05', 'nombre entrevistado', 'telefono', 'correo@correo.correo', 2, 'problema 1', 'problema 2', 1, 'Que documentos', 1, 1, '15', '30', 0, 'Nombrar reglamentos', 'Criterio de la empresa', 1, '15', 'Excel', 99, 'Antaciones', 1, 2),
(8, '2020-08-05', 'nombre entrevistado', 'telefono', 'correo@correo.correo', 2, 'problema 1', 'problema 2', 1, 'Que documentos', 1, 1, '15', '30', 0, 'Nombrar reglamentos', 'Criterio de la empresa', 1, '15', 'Excel', 99, 'Antaciones', 1, 2),
(9, '0000-00-00', 'qwrqwr', '4', 'qwrqw@dsgsd.sdgsd', 3, '5916', 'FDHGDF', 1, 'dsg', 1, 1, 'dsg', 'dsg', 1, 'dsg', 'dsg', 1, 'dsg', 'dsg', 3, 'fsdg', 4, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id_proyectos` int(11) NOT NULL,
  `nombre_proyecto` varchar(500) COLLATE utf8mb4_bin NOT NULL,
  `razon_social` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `direccion` varchar(500) COLLATE utf8mb4_bin NOT NULL,
  `cerrado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id_proyectos`, `nombre_proyecto`, `razon_social`, `direccion`, `cerrado`) VALUES
(1, 'Ruedas y Rodajas', 'Ruedas y Rodajas de la Bahia S.A. de C.V.', 'Vallarta', 0),
(2, 'Pachuco Productions', 'Producciones Rector', 'Mundial', 0),
(3, 'No asignado', '', '', 1),
(4, 'Nuevo', 'Proyecto Prueba', 'Direccion', 0),
(5, 'Empresa nueva', 'Razon social nueva', 'Direccion de empresa', 0),
(13, 'proyecto o empresa159', 'razon social312', 'Direccion de la empresa o razon social', 0),
(14, '///', '///', '///', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto_usuario`
--

CREATE TABLE `proyecto_usuario` (
  `id_proyecto_usuario` int(11) NOT NULL,
  `id_proyectos` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `proyecto_usuario`
--

INSERT INTO `proyecto_usuario` (`id_proyecto_usuario`, `id_proyectos`, `id_usuario`) VALUES
(3, 1, 2),
(5, 4, 13),
(6, 14, 13),
(9, 3, 7),
(19, 4, 2),
(20, 4, 7),
(21, 4, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solucion`
--

CREATE TABLE `solucion` (
  `id_solucion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `apellidos` varchar(500) COLLATE utf8mb4_bin NOT NULL,
  `correo` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `contrasena` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `gerente` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellidos`, `correo`, `contrasena`, `gerente`) VALUES
(1, '123', '123', '123@123.123', '123', 1),
(2, '456', '456', '456@456.456', '456', 0),
(4, '789', '789', '789@789.789', '789', 1),
(5, '159', '159', '159@159.159', '159', 0),
(6, 'New', 'User', 'newuser@mail.com', '123', 1),
(7, '987', '987', '987', '123', 0),
(9, '357', '987', '987', '123', 0),
(10, '654', '654', '654', '123', 0),
(11, 'el nuevo', 'nuevisimo', 'new@new.new', '123', 0),
(12, 'nombre usuario', 'apellidos de usuario', 'correo@correo.com', '123', 0),
(13, 'Garfio', 'Zanahoria', 'garfio@naranja.com', '123', 1),
(14, 'Kevin', 'Dos', 'kevin2@mail.com', '123', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `diagnostico`
--
ALTER TABLE `diagnostico`
  ADD PRIMARY KEY (`id_diagnostico`),
  ADD KEY `proyecto` (`proyecto`);

--
-- Indices de la tabla `diagnosticos_solucion`
--
ALTER TABLE `diagnosticos_solucion`
  ADD PRIMARY KEY (`id_diagnostico_solucion`),
  ADD KEY `id_diagnostico` (`id_diagnostico`),
  ADD KEY `id_solucion` (`id_solucion`);

--
-- Indices de la tabla `entrevista`
--
ALTER TABLE `entrevista`
  ADD PRIMARY KEY (`id_entrevista`),
  ADD KEY `proyecto` (`proyecto`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id_proyectos`);

--
-- Indices de la tabla `proyecto_usuario`
--
ALTER TABLE `proyecto_usuario`
  ADD PRIMARY KEY (`id_proyecto_usuario`),
  ADD KEY `id_proyectos` (`id_proyectos`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `solucion`
--
ALTER TABLE `solucion`
  ADD PRIMARY KEY (`id_solucion`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `diagnostico`
--
ALTER TABLE `diagnostico`
  MODIFY `id_diagnostico` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `diagnosticos_solucion`
--
ALTER TABLE `diagnosticos_solucion`
  MODIFY `id_diagnostico_solucion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `entrevista`
--
ALTER TABLE `entrevista`
  MODIFY `id_entrevista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id_proyectos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `proyecto_usuario`
--
ALTER TABLE `proyecto_usuario`
  MODIFY `id_proyecto_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `solucion`
--
ALTER TABLE `solucion`
  MODIFY `id_solucion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `diagnostico`
--
ALTER TABLE `diagnostico`
  ADD CONSTRAINT `diagnostico_ibfk_1` FOREIGN KEY (`proyecto`) REFERENCES `proyectos` (`id_proyectos`);

--
-- Filtros para la tabla `diagnosticos_solucion`
--
ALTER TABLE `diagnosticos_solucion`
  ADD CONSTRAINT `diagnosticos_solucion_ibfk_1` FOREIGN KEY (`id_diagnostico`) REFERENCES `diagnostico` (`id_diagnostico`),
  ADD CONSTRAINT `diagnosticos_solucion_ibfk_2` FOREIGN KEY (`id_solucion`) REFERENCES `solucion` (`id_solucion`);

--
-- Filtros para la tabla `entrevista`
--
ALTER TABLE `entrevista`
  ADD CONSTRAINT `entrevista_ibfk_1` FOREIGN KEY (`proyecto`) REFERENCES `proyectos` (`id_proyectos`);

--
-- Filtros para la tabla `proyecto_usuario`
--
ALTER TABLE `proyecto_usuario`
  ADD CONSTRAINT `proyecto_usuario_ibfk_1` FOREIGN KEY (`id_proyectos`) REFERENCES `proyectos` (`id_proyectos`),
  ADD CONSTRAINT `proyecto_usuario_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
