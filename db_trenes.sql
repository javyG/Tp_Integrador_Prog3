-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:33065
-- Tiempo de generación: 23-06-2023 a las 15:52:11
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_trenes`
--

DELIMITER $$
--
-- Procedimientos
--


CREATE DEFINER=`javier`@`localhost` PROCEDURE `Buscarkm` (IN `desde` VARCHAR(50), IN `hasta` VARCHAR(50))   SELECT km,ramal from distancia WHERE origen = desde and destino = hasta$$

CREATE DEFINER=`javier`@`localhost` PROCEDURE `BuscarOrigen` (IN `buscador` VARCHAR(50))   select * from origen where desde = buscador$$

CREATE DEFINER=`javier`@`localhost` PROCEDURE `BuscarReserva` (IN `buscador` VARCHAR(100))   select * from reservas
where id_reserva = buscador$$

CREATE DEFINER=`javier`@`localhost` PROCEDURE `EditarDistancia` (IN `id_dist` INT, IN `origen` VARCHAR(100), IN `destino` VARCHAR(100), IN `km` INT, IN `ramal` VARCHAR(100))   UPDATE distancia SET origen = origen, destino = destino, km= km, ramal = ramal
WHERE id_distancia = id_dist$$

CREATE DEFINER=`javier`@`localhost` PROCEDURE `EditarReserva` (IN `id_res` INT, IN `nombre` VARCHAR(100), IN `apellido` VARCHAR(100), IN `DNI` INT, IN `direccion` VARCHAR(50), IN `fecha` DATE, IN `formaDePago` VARCHAR(50), IN `localidad` VARCHAR(100), IN `mail` VARCHAR(100), IN `numero` INT, IN `numTramite` INT, IN `precioPorPersona` DECIMAL(16,2), IN `precioTotal` DECIMAL(16,2), IN `numAsiento` INT, IN `numComboy` INT, IN `telefono` VARCHAR(20), IN `tipoPasajero` VARCHAR(20), IN `tipoViaje` VARCHAR(20), IN `cantpasajeros` INT, IN `claseBoleto` VARCHAR(20), IN `origen` VARCHAR(100), IN `destino` VARCHAR(100))   UPDATE reservas SET nombre = nombre, apellido = apellido, numero= numero, localidad = localidad,mail = mail, numAsiento = numAsiento, precioPorPersona = precioPorPersona, precioTotal =precioTotal, telefono=telefono,tipoPasajero=tipoPasajero,tipoViaje=tipoViaje,numTramite=numTramite,numConvoy=numConvoy,formaDePago=formaDePago,DNI=DNI,claseBoleto=claseBoleto,cantpasajeros=cantpasajeros,fecha=fecha
WHERE id_reserva = id_res$$

CREATE DEFINER=`javier`@`localhost` PROCEDURE `EliminarDistancia` (IN `id_dist` INT)   delete from distancia WHERE id_distancia = id_dist$$

CREATE DEFINER=`javier`@`localhost` PROCEDURE `EliminarReserva` (IN `id_res` INT)   delete from reservas WHERE id_reserva = id_res$$

CREATE DEFINER=`javier`@`localhost` PROCEDURE `InsertarDistancia` (IN `origen` VARCHAR(100), IN `destino` VARCHAR(100), IN `km` INT, IN `ramal` VARCHAR(100))   insert into distancia(origen,destino,km,ramal) VALUES(origen,destino,km,ramal)$$

CREATE DEFINER=`javier`@`localhost` PROCEDURE `insertarReserva` (IN `id_Res` INT, IN `nombre` VARCHAR(50), IN `apellido` VARCHAR(50), IN `DNI` VARCHAR(50), IN `numTramite` INT, IN `tipoPasajero` VARCHAR(50), IN `mail` VARCHAR(100), IN `telefono` VARCHAR(20), IN `direccion` VARCHAR(20), IN `numero` INT, IN `localidad` VARCHAR(20), IN `fecha ` DATE, IN `origen` VARCHAR(100), IN `destino` VARCHAR(100), IN `tipoViaje ` VARCHAR(20), IN `numComvoy` INT, IN `formaDePago` VARCHAR(20), IN `claseBoleto ` VARCHAR(20), IN `numAsiento  ` TINYINT, IN `precioPorPersona    ` DECIMAL(16,2), IN `cantpasajero` INT, IN `precioTotal` DECIMAL(16,2))   insert into reservas(nombre,apellido,DNi,numTramite,tipoPasajero,mail,telefono,direccion,numero,
localidad,fecha,origen,destino,tipoViaje,numComvoy,formaDePago,claseBoleto,numAsiento,precioPorPersona,
cantpasajero,precioTotal) VALUES(nombre,apellido,DNi,numTramite,tipoPasajero,mail,telefono,direccion,numero,
localidad,fecha,origen,destino,tipoViaje,numComvoy,formaDePago,claseBoleto,numAsiento,precioPorPersona,
cantpasajero,precioTotal)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destinos`
--

CREATE TABLE `destinos` (
  `id_destinos` int(11) NOT NULL,
  `desde` varchar(40) NOT NULL,
  `ramal` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `destinos`
--

INSERT INTO `destinos` (`id_destinos`, `desde`, `ramal`) VALUES
(1, 'Constitucion', 'Buenos Aires - Mar del Plata'),
(2, 'Cnel. Brandsen', 'Buenos Aires - Mar del Plata'),
(3, 'Chascomús', 'Buenos Aires - Mar del Plata'),
(4, 'Lezama', 'Buenos Aires - Mar del Plata'),
(5, 'Dolores', 'Buenos Aires - Mar del Plata'),
(6, 'Sevigné', 'Buenos Aires - Mar del Plata'),
(7, 'Castelli', 'Buenos Aires - Mar del Plata'),
(8, 'Gral. Guido', 'Buenos Aires - Mar del Plata'),
(9, 'Maipú', 'Buenos Aires - Mar del Plata'),
(10, 'Las Armas', 'Buenos Aires - Mar del Plata'),
(11, 'Gral. Pirán', 'Buenos Aires - Mar del Plata'),
(12, 'Cnel. Vidal', 'Buenos Aires - Mar del Plata'),
(13, 'Vivoratá', 'Buenos Aires - Mar del Plata'),
(14, 'Mar del Plata', 'Buenos Aires - Mar del Plata'),
(15, 'Constitucion', 'Buenos Aires - Gral. Guido - Divisadero de Pinamar'),
(16, 'Dolores', 'Buenos Aires - Gral. Guido - Divisadero de Pinamar'),
(17, 'Gral. Guido', 'Buenos Aires - Gral. Guido - Divisadero de Pinamar'),
(18, 'Santo Domingo', 'Buenos Aires - Gral. Guido - Divisadero de Pinamar'),
(19, 'Gral. Madariaga', 'Buenos Aires - Gral. Guido - Divisadero de Pinamar'),
(20, 'Divisadero de Pinamar', 'Buenos Aires - Gral. Guido - Divisadero de Pinamar'),
(21, 'Once', 'Buenos Aires - Bragado / Pehuajó'),
(22, 'Haedo', 'Buenos Aires - Bragado / Pehuajó'),
(23, 'Luján', 'Buenos Aires - Bragado / Pehuajó'),
(24, 'Mercedes', 'Buenos Aires - Bragado / Pehuajó'),
(25, 'Suipacha', 'Buenos Aires - Bragado / Pehuajó'),
(26, 'Chivilcoy', 'Buenos Aires - Bragado / Pehuajó'),
(27, 'A. Vaccarezza', 'Buenos Aires - Bragado / Pehuajó'),
(28, 'Mechita', 'Buenos Aires - Bragado / Pehuajó'),
(29, 'Bragado', 'Buenos Aires - Bragado / Pehuajó'),
(30, '9 de Julio', 'Buenos Aires - Bragado / Pehuajó'),
(31, 'Carlos Casares', 'Buenos Aires - Bragado / Pehuajó'),
(32, 'Pehuajó', 'Buenos Aires - Bragado / Pehuajó'),
(33, 'Retiro', 'Buenos Aires - Junín'),
(34, 'José C. Paz', 'Buenos Aires - Junín'),
(35, 'Pilar', 'Buenos Aires - Junín'),
(36, 'Mercedes P', 'Buenos Aires - Junín'),
(37, 'Franklin', 'Buenos Aires - Junín'),
(38, 'Rivas', 'Buenos Aires - Junín'),
(39, 'Castilla', 'Buenos Aires - Junín'),
(40, 'Rawson', 'Buenos Aires - Junín'),
(41, 'Chacabuco', 'Buenos Aires - Junín'),
(42, 'O Higgins', 'Buenos Aires - Junín'),
(43, 'Junín', 'Buenos Aires - Junín'),
(44, 'Constitucion', 'Buenos Aires - Bahía Blanca'),
(45, 'Monte', 'Buenos Aires - Bahía Blanca'),
(46, 'Las Flores', 'Buenos Aires - Bahía Blanca'),
(47, 'Cacharí', 'Buenos Aires - Bahía Blanca'),
(48, 'Azul', 'Buenos Aires - Bahía Blanca'),
(49, 'Olavarría', 'Buenos Aires - Bahía Blanca'),
(50, 'Gral. La Madrid', 'Buenos Aires - Bahía Blanca'),
(51, 'Coronel Suárez', 'Buenos Aires - Bahía Blanca'),
(52, 'Pigüé', 'Buenos Aires - Bahía Blanca'),
(53, 'Saavedra', 'Buenos Aires - Bahía Blanca'),
(54, 'Tornquist', 'Buenos Aires - Bahía Blanca'),
(55, 'Bahía Blanca', 'Buenos Aires - Bahía Blanca'),
(56, 'Retiro', 'Buenos Aires - Rufino / Justo Daract'),
(57, 'José C. Paz', 'Buenos Aires - Rufino / Justo Daract'),
(58, 'Pilar', 'Buenos Aires - Rufino / Justo Daract'),
(59, 'Mercedes', 'Buenos Aires - Rufino / Justo Daract'),
(60, 'Franklin', 'Buenos Aires - Rufino / Justo Daract'),
(61, 'Rivas', 'Buenos Aires - Rufino / Justo Daract'),
(62, 'Castilla', 'Buenos Aires - Rufino / Justo Daract'),
(63, 'Rawson', 'Buenos Aires - Rufino / Justo Daract'),
(64, 'Chacabuco', 'Buenos Aires - Rufino / Justo Daract'),
(65, 'O Higgins', 'Buenos Aires - Rufino / Justo Daract'),
(66, 'Junín', 'Buenos Aires - Rufino / Justo Daract'),
(67, 'Alem', 'Buenos Aires - Rufino / Justo Daract'),
(68, 'Vedia', 'Buenos Aires - Rufino / Justo Daract'),
(69, 'Alberdi', 'Buenos Aires - Rufino / Justo Daract'),
(70, 'Iriarte', 'Buenos Aires - Rufino / Justo Daract'),
(71, 'Rufino', 'Buenos Aires - Rufino / Justo Daract'),
(72, 'Laboulaye', 'Buenos Aires - Rufino / Justo Daract'),
(73, 'Gral. Levalle', 'Buenos Aires - Rufino / Justo Daract'),
(74, 'Laboulaye', 'Buenos Aires - Rufino / Justo Daract'),
(75, 'Vicuña Mackenna', 'Buenos Aires - Rufino / Justo Daract'),
(76, 'Justo Daract', 'Buenos Aires - Rufino / Justo Daract'),
(77, 'Retiro', 'Buenos Aires - Rosario'),
(78, 'Campana', 'Buenos Aires - Rosario'),
(79, 'Zárate', 'Buenos Aires - Rosario'),
(80, 'Lima', 'Buenos Aires - Rosario'),
(81, 'Baradero', 'Buenos Aires - Rosario'),
(82, 'San Pedro', 'Buenos Aires - Rosario'),
(83, 'Ramallo', 'Buenos Aires - Rosario'),
(84, 'San Nicolás', 'Buenos Aires - Rosario'),
(85, 'Emp. Villa', 'Buenos Aires - Rosario'),
(86, 'Constitución', 'Buenos Aires - Rosario'),
(87, 'Arroyo Seco', 'Buenos Aires - Rosario'),
(88, 'Rosario Sur', 'Buenos Aires - Rosario'),
(89, 'Rosario Norte', 'Buenos Aires - Rosario'),
(90, 'Retiro', 'Buenos Aires - Córdoba'),
(91, 'Campana', 'Buenos Aires - Córdoba'),
(92, 'Zárate', 'Buenos Aires - Córdoba'),
(93, 'Baradero', 'Buenos Aires - Córdoba'),
(94, 'San Pedro', 'Buenos Aires - Córdoba'),
(95, 'San Nicolás', 'Buenos Aires - Córdoba'),
(96, 'Rosario Norte', 'Buenos Aires - Córdoba'),
(97, 'Rosario Sur', 'Buenos Aires - Córdoba'),
(98, 'Correa', 'Buenos Aires - Córdoba'),
(99, 'Leones', 'Buenos Aires - Córdoba'),
(100, 'Cañada de Gómez', 'Buenos Aires - Córdoba'),
(101, 'Marcos Juárez', 'Buenos Aires - Córdoba'),
(102, 'Bell Ville', 'Buenos Aires - Córdoba'),
(103, 'Villa María', 'Buenos Aires - Córdoba'),
(104, 'Córdoba', 'Buenos Aires - Córdoba'),
(105, 'Retiro', 'Buenos Aires - Tucumán'),
(106, 'Campana', 'Buenos Aires - Tucumán'),
(107, 'Zárate', 'Buenos Aires - Tucumán'),
(108, 'Baradero', 'Buenos Aires - Tucumán'),
(109, 'San Pedro', 'Buenos Aires - Tucumán'),
(110, 'San Nicolás', 'Buenos Aires - Tucumán'),
(111, 'Rosario Sur', 'Buenos Aires - Tucumán'),
(112, 'Rosario Norte', 'Buenos Aires - Tucumán'),
(113, 'San Lorenzo', 'Buenos Aires - Tucumán'),
(114, 'Serodino', 'Buenos Aires - Tucumán'),
(115, 'Gálvez', 'Buenos Aires - Tucumán'),
(116, 'Rafaela', 'Buenos Aires - Tucumán'),
(117, 'Sunchales', 'Buenos Aires - Tucumán'),
(118, 'Ceres', 'Buenos Aires - Tucumán'),
(119, 'Pinto', 'Buenos Aires - Tucumán'),
(120, 'Colonia Dora', 'Buenos Aires - Tucumán'),
(121, 'La Banda', 'Buenos Aires - Tucumán'),
(122, 'Cevil Pozo (Tucumán)', 'Buenos Aires - Tucumán'),
(123, 'La Banda', 'Santiago del Estero (La Banda - Fernández)'),
(124, 'Beltrán', 'Santiago del Estero (La Banda - Fernández)'),
(125, 'Forres', 'Santiago del Estero (La Banda - Fernández)'),
(126, 'Fernández', 'Santiago del Estero (La Banda - Fernández)'),
(127, 'Cañada de Gómez', 'Santa Fe (Rosario - Cañada de Gómez)'),
(128, 'Correa', 'Santa Fe (Rosario - Cañada de Gómez)'),
(129, 'Carcarañá', 'Santa Fe (Rosario - Cañada de Gómez)'),
(130, 'San Gerónimo', 'Santa Fe (Rosario - Cañada de Gómez)'),
(131, 'Roldán', 'Santa Fe (Rosario - Cañada de Gómez)'),
(132, 'Funes', 'Santa Fe (Rosario - Cañada de Gómez)'),
(133, 'Antártida Argentina', 'Santa Fe (Rosario - Cañada de Gómez)'),
(134, 'Rosario Norte', 'Santa Fe (Rosario - Cañada de Gómez)'),
(135, 'Resistencia', 'Chaco (Resistencia - Cacuí - Los Amores)'),
(136, 'San Martín', 'Chaco (Resistencia - Cacuí - Los Amores)'),
(137, 'Alberdi', 'Chaco (Resistencia - Cacuí - Los Amores)'),
(138, 'Belgrano', 'Chaco (Resistencia - Cacuí - Los Amores)'),
(139, 'Hernandarias', 'Chaco (Resistencia - Cacuí - Los Amores)'),
(140, 'Fotheringham', 'Chaco (Resistencia - Cacuí - Los Amores)'),
(141, 'Sierra de Córdoba', 'Chaco (Resistencia - Cacuí - Los Amores)'),
(142, 'Güemes', 'Chaco (Resistencia - Cacuí - Los Amores)'),
(143, 'Sarmiento', 'Chaco (Resistencia - Cacuí - Los Amores)'),
(144, 'Cacuí', 'Chaco (Resistencia - Cacuí - Los Amores)'),
(145, 'Gral. Donovan', 'Chaco (Resistencia - Cacuí - Los Amores)'),
(146, 'Dv. Km. 535', 'Chaco (Resistencia - Cacuí - Los Amores)'),
(147, 'Fortín Cardozo', 'Chaco (Resistencia - Cacuí - Los Amores)'),
(148, 'Dv. Km. 523', 'Chaco (Resistencia - Cacuí - Los Amores)'),
(149, 'Dv. Km. 519', 'Chaco (Resistencia - Cacuí - Los Amores)'),
(150, 'Gral. Obligado', 'Chaco (Resistencia - Cacuí - Los Amores)'),
(151, 'Ap. Km. 501', 'Chaco (Resistencia - Cacuí - Los Amores)'),
(152, 'Cote Lai', 'Chaco (Resistencia - Cacuí - Los Amores)'),
(153, 'Tapenaga', 'Chaco (Resistencia - Cacuí - Los Amores)'),
(154, 'Dv. Km. 474', 'Chaco (Resistencia - Cacuí - Los Amores)'),
(155, 'Charadai', 'Chaco (Resistencia - Cacuí - Los Amores)'),
(156, 'Dv. Km. 443', 'Chaco (Resistencia - Cacuí - Los Amores)'),
(157, 'La Sabana', 'Chaco (Resistencia - Cacuí - Los Amores)'),
(158, 'La Vicuña', 'Chaco (Resistencia - Cacuí - Los Amores)'),
(159, 'Los Amores', 'Chaco (Resistencia - Cacuí - Los Amores)'),
(160, 'Sáenz Peña', 'Chaco (Sáenz Peña - Chorotis)'),
(161, 'La Mascota', 'Chaco (Sáenz Peña - Chorotis)'),
(162, 'Napenay', 'Chaco (Sáenz Peña - Chorotis)'),
(163, 'Avia Terai', 'Chaco (Sáenz Peña - Chorotis)'),
(164, 'Campo Largo', 'Chaco (Sáenz Peña - Chorotis)'),
(165, 'Las Chuñas', 'Chaco (Sáenz Peña - Chorotis)'),
(166, 'Corzuela', 'Chaco (Sáenz Peña - Chorotis)'),
(167, 'Pozo del Indio', 'Chaco (Sáenz Peña - Chorotis)'),
(168, 'Las Breñas', 'Chaco (Sáenz Peña - Chorotis)'),
(169, 'Pampa del Cielo', 'Chaco (Sáenz Peña - Chorotis)'),
(170, 'Charata', 'Chaco (Sáenz Peña - Chorotis)'),
(171, 'Gral. Pinedo', 'Chaco (Sáenz Peña - Chorotis)'),
(172, 'Itin', 'Chaco (Sáenz Peña - Chorotis)'),
(173, 'Hermoso Campo', 'Chaco (Sáenz Peña - Chorotis)'),
(174, 'Zuberbuhler', 'Chaco (Sáenz Peña - Chorotis)'),
(175, 'Venados Grandes', 'Chaco (Sáenz Peña - Chorotis)'),
(176, 'Chorotis', 'Chaco (Sáenz Peña - Chorotis)'),
(177, 'Güemes', 'Salta (Güemes - Salta - Campo Quijano)'),
(178, 'Campo Santo (El Bordo)', 'Salta (Güemes - Salta - Campo Quijano)'),
(179, 'Betania', 'Salta (Güemes - Salta - Campo Quijano)'),
(180, 'Batalla de Salta', 'Salta (Güemes - Salta - Campo Quijano)'),
(181, 'Salta', 'Salta (Güemes - Salta - Campo Quijano)'),
(182, 'Pacto de los Cerrillos', 'Salta (Güemes - Salta - Campo Quijano)'),
(183, 'Combate de Rosario de Lerma', 'Salta (Güemes - Salta - Campo Quijano)'),
(184, 'Campo Quijano', 'Salta (Güemes - Salta - Campo Quijano)'),
(185, 'Cipolletti', 'Neuquén (Tren del Valle)'),
(186, 'Neuquén', 'Neuquén (Tren del Valle)'),
(187, 'Plottier', 'Neuquén (Tren del Valle)'),
(188, 'Córdoba', 'Córdoba (Tren de las Sierras)'),
(189, 'Alta Córdoba', 'Córdoba (Tren de las Sierras)'),
(190, 'Hospital Neonatal', 'Córdoba (Tren de las Sierras)'),
(191, 'Rodríguez del Busto', 'Córdoba (Tren de las Sierras)'),
(192, 'La Tablada', 'Córdoba (Tren de las Sierras)'),
(193, 'Argüello', 'Córdoba (Tren de las Sierras)'),
(194, 'T. Narvaja', 'Córdoba (Tren de las Sierras)'),
(195, 'Dumesnil', 'Córdoba (Tren de las Sierras)'),
(196, 'La Calera', 'Córdoba (Tren de las Sierras)'),
(197, 'Casa Bamba', 'Córdoba (Tren de las Sierras)'),
(198, 'Cassaffousth', 'Córdoba (Tren de las Sierras)'),
(199, 'San Roque', 'Córdoba (Tren de las Sierras)'),
(200, 'Bialet Massé', 'Córdoba (Tren de las Sierras)'),
(201, 'Santa María', 'Córdoba (Tren de las Sierras)'),
(202, 'Cosquín', 'Córdoba (Tren de las Sierras)'),
(203, 'Casa Grande', 'Córdoba (Tren de las Sierras)'),
(204, 'Valle Hermoso', 'Córdoba (Tren de las Sierras)'),
(205, 'Villa María', 'Córdoba (Villa María - Córdoba)'),
(206, 'Tío Pujio', 'Córdoba (Villa María - Córdoba)'),
(207, 'James Craik', 'Córdoba (Villa María - Córdoba)'),
(208, 'Oliva', 'Córdoba (Villa María - Córdoba)'),
(209, 'Oncativo', 'Córdoba (Villa María - Córdoba)'),
(210, 'Manfredi', 'Córdoba (Villa María - Córdoba)'),
(211, 'Laguna Larga', 'Córdoba (Villa María - Córdoba)'),
(212, 'Pilar', 'Córdoba (Villa María - Córdoba)'),
(213, 'Río Segundo', 'Córdoba (Villa María - Córdoba)'),
(214, 'Toledo', 'Córdoba (Villa María - Córdoba)'),
(215, 'Córdoba', 'Córdoba (Villa María - Córdoba)'),
(216, 'Paraná', 'Entre Ríos (Paraná - Colonia Avellaneda)'),
(217, 'Ap. Francisco Ramírez', 'Entre Ríos (Paraná - Colonia Avellaneda)'),
(218, 'Ap. División De Los Andes', 'Entre Ríos (Paraná - Colonia Avellaneda)'),
(219, 'Ap. Miguel David', 'Entre Ríos (Paraná - Colonia Avellaneda)'),
(220, 'Ap. Las Garzas', 'Entre Ríos (Paraná - Colonia Avellaneda)'),
(221, 'Ap. Gdor.Parera', 'Entre Ríos (Paraná - Colonia Avellaneda)'),
(222, 'Ap. Salvador Caputto', 'Entre Ríos (Paraná - Colonia Avellaneda)'),
(223, 'Ap. Gdor Maya', 'Entre Ríos (Paraná - Colonia Avellaneda)'),
(224, 'Ramón A. Parera', 'Entre Ríos (Paraná - Colonia Avellaneda)'),
(225, 'Ap. Colonia Avellaneda', 'Entre Ríos (Paraná - Colonia Avellaneda)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `distancia`
--

CREATE TABLE `distancia` (
  `id_distancia` int(11) NOT NULL,
  `origen` varchar(100) NOT NULL,
  `destino` varchar(100) NOT NULL,
  `km` int(11) NOT NULL,
  `ramal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `distancia`
--

INSERT INTO `distancia` (`id_distancia`, `origen`, `destino`, `km`, `ramal`) VALUES
(27, 'Constitucion', 'Cnel. Brandsen', 84, 'Mar del Plata'),
(29, 'Cnel. Brandsen', 'Chascomús', 63, 'Mar del Plata'),
(30, 'Chascomús', 'Lezama', 38, 'Mar del Plata'),
(31, 'Lezama', 'Dolores', 56, 'Mar del Plata'),
(32, 'Dolores', 'Sevigné', 16, 'Mar del Plata'),
(33, 'Sevigné', 'Castelli', 15, 'Mar del Plata'),
(34, 'Castelli', 'Gral. Guido', 68, 'Mar del Plata'),
(35, 'Gral. Guido', 'Maipú', 28, 'Mar del Plata'),
(36, 'Maipú', 'Las Armas', 27, 'Mar del Plata'),
(37, 'Las Armas', 'Gral. \r\nPirán\r\n', 23, 'Mar del Plata'),
(38, 'Gral. \r\nPirán\r\n', 'Cnel. Vidal', 21, 'Mar del Plata'),
(39, 'Cnel. Vidal', 'Vivoratá', 28, 'Mar del Plata'),
(40, 'Vivoratá', 'Mar del Plata', 42, 'Mar del Plata'),
(41, 'Constitucion', 'Mar del Plata', 509, 'Mar del Plata'),
(42, 'Las Armas', 'Gral. \r\nPirán\r\n', 23, 'Mar del Plata'),
(43, 'Gral. \r\nPirán\r\n', 'Cnel. Vidal', 21, 'Mar del Plata'),
(44, 'Cnel. Vidal', 'Vivoratá', 28, 'Mar del Plata'),
(45, 'Vivoratá', 'Mar del Plata', 42, 'Mar del Plata'),
(46, 'Constitucion', 'Mar del Plata', 509, 'Mar del Plata'),
(47, 'Constitucion', 'Dolores', 217, 'Devisadero de Pinamar'),
(50, 'Dolores', 'Gral.Guido', 22, 'Devisadero de Pinama'),
(51, 'Gral.Guido', 'Santo Domingo', 54, 'Devisadero de Pinama'),
(52, 'Santo Domingo', 'Gral.Maradiaga', 27, 'Devisadero de Pinama'),
(53, 'Gral.Maradiaga', 'Devisadero de Pinama', 361, 'Devisadero de Pinama'),
(54, 'Once', 'Haedo', 24, 'Bragado / Pehuajó'),
(55, 'Haedo', 'Luján', 51, 'Bragado / Pehuajó'),
(56, 'Luján', 'Mercedes', 35, 'Bragado / Pehuajó'),
(57, 'Mercedes', 'Suipacha', 31, 'Bragado / Pehuajó'),
(58, 'Suipacha', 'Chivilcoy', 39, 'Bragado / Pehuajó'),
(59, 'Chivilcoy', 'A. Vaccarezza', 38, 'Bragado / Pehuajó'),
(60, 'A. Vaccarezza', 'Mechita', 19, 'Bragado / Pehuajó'),
(61, 'Mechita', 'Bragado', 16, 'Bragado / Pehuajó'),
(62, 'Bragado', '9 de Julio', 61, 'Bragado / Pehuajó'),
(63, '9 de Julio', 'Carlos Casares', 55, 'Bragado / Pehuajó'),
(64, 'Bragado', 'Pehuajó', 165, 'Bragado / Pehuajó'),
(65, 'Retiro ', 'José C. Paz', 44, 'Buenos Aires / Junín'),
(66, 'José C. Paz', 'Pilar', 21, 'Buenos Aires / Junín'),
(67, 'Pilar', 'Mercedes P ', 57, 'Buenos Aires / Junín'),
(68, 'Mercedes P', 'Franklin', 22, 'Buenos Aires / Junín'),
(69, 'Franklin', 'Rivas', 12, 'Buenos Aires / Junín'),
(70, 'Rivas', 'Castilla', 14, 'Buenos Aires / Junín'),
(71, 'Castilla', 'Rawson', 16, 'Buenos Aires / Junín'),
(72, 'Rawson', 'Chacabuco', 54, 'Buenos Aires / Junín'),
(73, 'Chacabuco', 'O Higgins', 36, 'Buenos Aires / Junín'),
(74, 'O Higgins', 'Junín', 37, 'Buenos Aires / Junín'),
(75, 'Retiro', 'Junín', 274, 'Buenos Aires / Junín');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `origen`
--

CREATE TABLE `origen` (
  `id_origen` int(11) NOT NULL,
  `desde` varchar(40) NOT NULL,
  `ramal` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `origen`
--

INSERT INTO `origen` (`id_origen`, `desde`, `ramal`) VALUES
(1, 'Constitucion', 'Buenos Aires - Mar del Plata'),
(2, 'Cnel. Brandsen', 'Buenos Aires - Mar del Plata'),
(3, 'Chascomús', 'Buenos Aires - Mar del Plata'),
(4, 'Lezama', 'Buenos Aires - Mar del Plata'),
(5, 'Dolores', 'Buenos Aires - Mar del Plata'),
(6, 'Sevigné', 'Buenos Aires - Mar del Plata'),
(7, 'Castelli', 'Buenos Aires - Mar del Plata'),
(8, 'Gral. Guido', 'Buenos Aires - Mar del Plata'),
(9, 'Maipú', 'Buenos Aires - Mar del Plata'),
(10, 'Las Armas', 'Buenos Aires - Mar del Plata'),
(11, 'Gral. Pirán', 'Buenos Aires - Mar del Plata'),
(12, 'Cnel. Vidal', 'Buenos Aires - Mar del Plata'),
(13, 'Vivoratá', 'Buenos Aires - Mar del Plata'),
(14, 'Mar del Plata', 'Buenos Aires - Mar del Plata'),
(15, 'Constitucion', 'Buenos Aires - Gral. Guido - Divisadero de Pinamar'),
(16, 'Dolores', 'Buenos Aires - Gral. Guido - Divisadero de Pinamar'),
(17, 'Gral. Guido', 'Buenos Aires - Gral. Guido - Divisadero de Pinamar'),
(18, 'Santo Domingo', 'Buenos Aires - Gral. Guido - Divisadero de Pinamar'),
(19, 'Gral. Madariaga', 'Buenos Aires - Gral. Guido - Divisadero de Pinamar'),
(20, 'Divisadero de Pinamar', 'Buenos Aires - Gral. Guido - Divisadero de Pinamar'),
(21, 'Once', 'Buenos Aires - Bragado / Pehuajó'),
(22, 'Haedo', 'Buenos Aires - Bragado / Pehuajó'),
(23, 'Luján', 'Buenos Aires - Bragado / Pehuajó'),
(24, 'Mercedes', 'Buenos Aires - Bragado / Pehuajó'),
(25, 'Suipacha', 'Buenos Aires - Bragado / Pehuajó'),
(26, 'Chivilcoy', 'Buenos Aires - Bragado / Pehuajó'),
(27, 'A. Vaccarezza', 'Buenos Aires - Bragado / Pehuajó'),
(28, 'Mechita', 'Buenos Aires - Bragado / Pehuajó'),
(29, 'Bragado', 'Buenos Aires - Bragado / Pehuajó'),
(30, '9 de Julio', 'Buenos Aires - Bragado / Pehuajó'),
(31, 'Carlos Casares', 'Buenos Aires - Bragado / Pehuajó'),
(32, 'Pehuajó', 'Buenos Aires - Bragado / Pehuajó'),
(33, 'Retiro', 'Buenos Aires - Junín'),
(34, 'José C. Paz', 'Buenos Aires - Junín'),
(35, 'Pilar', 'Buenos Aires - Junín'),
(36, 'Mercedes P', 'Buenos Aires - Junín'),
(37, 'Franklin', 'Buenos Aires - Junín'),
(38, 'Rivas', 'Buenos Aires - Junín'),
(39, 'Castilla', 'Buenos Aires - Junín'),
(40, 'Rawson', 'Buenos Aires - Junín'),
(41, 'Chacabuco', 'Buenos Aires - Junín'),
(42, 'O Higgins', 'Buenos Aires - Junín'),
(43, 'Junín', 'Buenos Aires - Junín'),
(44, 'Constitucion', 'Buenos Aires - Bahía Blanca'),
(45, 'Monte', 'Buenos Aires - Bahía Blanca'),
(46, 'Las Flores', 'Buenos Aires - Bahía Blanca'),
(47, 'Cacharí', 'Buenos Aires - Bahía Blanca'),
(48, 'Azul', 'Buenos Aires - Bahía Blanca'),
(49, 'Olavarría', 'Buenos Aires - Bahía Blanca'),
(50, 'Gral. La Madrid', 'Buenos Aires - Bahía Blanca'),
(51, 'Coronel Suárez', 'Buenos Aires - Bahía Blanca'),
(52, 'Pigüé', 'Buenos Aires - Bahía Blanca'),
(53, 'Saavedra', 'Buenos Aires - Bahía Blanca'),
(54, 'Tornquist', 'Buenos Aires - Bahía Blanca'),
(55, 'Bahía Blanca', 'Buenos Aires - Bahía Blanca'),
(56, 'Retiro', 'Buenos Aires - Rufino / Justo Daract'),
(57, 'José C. Paz', 'Buenos Aires - Rufino / Justo Daract'),
(58, 'Pilar', 'Buenos Aires - Rufino / Justo Daract'),
(59, 'Mercedes', 'Buenos Aires - Rufino / Justo Daract'),
(60, 'Franklin', 'Buenos Aires - Rufino / Justo Daract'),
(61, 'Rivas', 'Buenos Aires - Rufino / Justo Daract'),
(62, 'Castilla', 'Buenos Aires - Rufino / Justo Daract'),
(63, 'Rawson', 'Buenos Aires - Rufino / Justo Daract'),
(64, 'Chacabuco', 'Buenos Aires - Rufino / Justo Daract'),
(65, 'O Higgins', 'Buenos Aires - Rufino / Justo Daract'),
(66, 'Junín', 'Buenos Aires - Rufino / Justo Daract'),
(67, 'Alem', 'Buenos Aires - Rufino / Justo Daract'),
(68, 'Vedia', 'Buenos Aires - Rufino / Justo Daract'),
(69, 'Alberdi', 'Buenos Aires - Rufino / Justo Daract'),
(70, 'Iriarte', 'Buenos Aires - Rufino / Justo Daract'),
(71, 'Rufino', 'Buenos Aires - Rufino / Justo Daract'),
(72, 'Laboulaye', 'Buenos Aires - Rufino / Justo Daract'),
(73, 'Gral. Levalle', 'Buenos Aires - Rufino / Justo Daract'),
(74, 'Laboulaye', 'Buenos Aires - Rufino / Justo Daract'),
(75, 'Vicuña Mackenna', 'Buenos Aires - Rufino / Justo Daract'),
(76, 'Justo Daract', 'Buenos Aires - Rufino / Justo Daract'),
(77, 'Retiro', 'Buenos Aires - Rosario'),
(78, 'Campana', 'Buenos Aires - Rosario'),
(79, 'Zárate', 'Buenos Aires - Rosario'),
(80, 'Lima', 'Buenos Aires - Rosario'),
(81, 'Baradero', 'Buenos Aires - Rosario'),
(82, 'San Pedro', 'Buenos Aires - Rosario'),
(83, 'Ramallo', 'Buenos Aires - Rosario'),
(84, 'San Nicolás', 'Buenos Aires - Rosario'),
(85, 'Emp. Villa', 'Buenos Aires - Rosario'),
(86, 'Constitución', 'Buenos Aires - Rosario'),
(87, 'Arroyo Seco', 'Buenos Aires - Rosario'),
(88, 'Rosario Sur', 'Buenos Aires - Rosario'),
(89, 'Rosario Norte', 'Buenos Aires - Rosario'),
(90, 'Retiro', 'Buenos Aires - Córdoba'),
(91, 'Campana', 'Buenos Aires - Córdoba'),
(92, 'Zárate', 'Buenos Aires - Córdoba'),
(93, 'Baradero', 'Buenos Aires - Córdoba'),
(94, 'San Pedro', 'Buenos Aires - Córdoba'),
(95, 'San Nicolás', 'Buenos Aires - Córdoba'),
(96, 'Rosario Norte', 'Buenos Aires - Córdoba'),
(97, 'Rosario Sur', 'Buenos Aires - Córdoba'),
(98, 'Correa', 'Buenos Aires - Córdoba'),
(99, 'Leones', 'Buenos Aires - Córdoba'),
(100, 'Cañada de Gómez', 'Buenos Aires - Córdoba'),
(101, 'Marcos Juárez', 'Buenos Aires - Córdoba'),
(102, 'Bell Ville', 'Buenos Aires - Córdoba'),
(103, 'Villa María', 'Buenos Aires - Córdoba'),
(104, 'Córdoba', 'Buenos Aires - Córdoba'),
(105, 'Retiro', 'Buenos Aires - Tucumán'),
(106, 'Campana', 'Buenos Aires - Tucumán'),
(107, 'Zárate', 'Buenos Aires - Tucumán'),
(108, 'Baradero', 'Buenos Aires - Tucumán'),
(109, 'San Pedro', 'Buenos Aires - Tucumán'),
(110, 'San Nicolás', 'Buenos Aires - Tucumán'),
(111, 'Rosario Sur', 'Buenos Aires - Tucumán'),
(112, 'Rosario Norte', 'Buenos Aires - Tucumán'),
(113, 'San Lorenzo', 'Buenos Aires - Tucumán'),
(114, 'Serodino', 'Buenos Aires - Tucumán'),
(115, 'Gálvez', 'Buenos Aires - Tucumán'),
(116, 'Rafaela', 'Buenos Aires - Tucumán'),
(117, 'Sunchales', 'Buenos Aires - Tucumán'),
(118, 'Ceres', 'Buenos Aires - Tucumán'),
(119, 'Pinto', 'Buenos Aires - Tucumán'),
(120, 'Colonia Dora', 'Buenos Aires - Tucumán'),
(121, 'La Banda', 'Buenos Aires - Tucumán'),
(122, 'Cevil Pozo (Tucumán)', 'Buenos Aires - Tucumán'),
(123, 'La Banda', 'Santiago del Estero (La Banda - Fernández)'),
(124, 'Beltrán', 'Santiago del Estero (La Banda - Fernández)'),
(125, 'Forres', 'Santiago del Estero (La Banda - Fernández)'),
(126, 'Fernández', 'Santiago del Estero (La Banda - Fernández)'),
(127, 'Cañada de Gómez', 'Santa Fe (Rosario - Cañada de Gómez)'),
(128, 'Correa', 'Santa Fe (Rosario - Cañada de Gómez)'),
(129, 'Carcarañá', 'Santa Fe (Rosario - Cañada de Gómez)'),
(130, 'San Gerónimo', 'Santa Fe (Rosario - Cañada de Gómez)'),
(131, 'Roldán', 'Santa Fe (Rosario - Cañada de Gómez)'),
(132, 'Funes', 'Santa Fe (Rosario - Cañada de Gómez)'),
(133, 'Antártida Argentina', 'Santa Fe (Rosario - Cañada de Gómez)'),
(134, 'Rosario Norte', 'Santa Fe (Rosario - Cañada de Gómez)'),
(135, 'Resistencia', 'Chaco (Resistencia - Cacuí - Los Amores)'),
(136, 'San Martín', 'Chaco (Resistencia - Cacuí - Los Amores)'),
(137, 'Alberdi', 'Chaco (Resistencia - Cacuí - Los Amores)'),
(138, 'Belgrano', 'Chaco (Resistencia - Cacuí - Los Amores)'),
(139, 'Hernandarias', 'Chaco (Resistencia - Cacuí - Los Amores)'),
(140, 'Fotheringham', 'Chaco (Resistencia - Cacuí - Los Amores)'),
(141, 'Sierra de Córdoba', 'Chaco (Resistencia - Cacuí - Los Amores)'),
(142, 'Güemes', 'Chaco (Resistencia - Cacuí - Los Amores)'),
(143, 'Sarmiento', 'Chaco (Resistencia - Cacuí - Los Amores)'),
(144, 'Cacuí', 'Chaco (Resistencia - Cacuí - Los Amores)'),
(145, 'Gral. Donovan', 'Chaco (Resistencia - Cacuí - Los Amores)'),
(146, 'Dv. Km. 535', 'Chaco (Resistencia - Cacuí - Los Amores)'),
(147, 'Fortín Cardozo', 'Chaco (Resistencia - Cacuí - Los Amores)'),
(148, 'Dv. Km. 523', 'Chaco (Resistencia - Cacuí - Los Amores)'),
(149, 'Dv. Km. 519', 'Chaco (Resistencia - Cacuí - Los Amores)'),
(150, 'Gral. Obligado', 'Chaco (Resistencia - Cacuí - Los Amores)'),
(151, 'Ap. Km. 501', 'Chaco (Resistencia - Cacuí - Los Amores)'),
(152, 'Cote Lai', 'Chaco (Resistencia - Cacuí - Los Amores)'),
(153, 'Tapenaga', 'Chaco (Resistencia - Cacuí - Los Amores)'),
(154, 'Dv. Km. 474', 'Chaco (Resistencia - Cacuí - Los Amores)'),
(155, 'Charadai', 'Chaco (Resistencia - Cacuí - Los Amores)'),
(156, 'Dv. Km. 443', 'Chaco (Resistencia - Cacuí - Los Amores)'),
(157, 'La Sabana', 'Chaco (Resistencia - Cacuí - Los Amores)'),
(158, 'La Vicuña', 'Chaco (Resistencia - Cacuí - Los Amores)'),
(159, 'Los Amores', 'Chaco (Resistencia - Cacuí - Los Amores)'),
(160, 'Sáenz Peña', 'Chaco (Sáenz Peña - Chorotis)'),
(161, 'La Mascota', 'Chaco (Sáenz Peña - Chorotis)'),
(162, 'Napenay', 'Chaco (Sáenz Peña - Chorotis)'),
(163, 'Avia Terai', 'Chaco (Sáenz Peña - Chorotis)'),
(164, 'Campo Largo', 'Chaco (Sáenz Peña - Chorotis)'),
(165, 'Las Chuñas', 'Chaco (Sáenz Peña - Chorotis)'),
(166, 'Corzuela', 'Chaco (Sáenz Peña - Chorotis)'),
(167, 'Pozo del Indio', 'Chaco (Sáenz Peña - Chorotis)'),
(168, 'Las Breñas', 'Chaco (Sáenz Peña - Chorotis)'),
(169, 'Pampa del Cielo', 'Chaco (Sáenz Peña - Chorotis)'),
(170, 'Charata', 'Chaco (Sáenz Peña - Chorotis)'),
(171, 'Gral. Pinedo', 'Chaco (Sáenz Peña - Chorotis)'),
(172, 'Itin', 'Chaco (Sáenz Peña - Chorotis)'),
(173, 'Hermoso Campo', 'Chaco (Sáenz Peña - Chorotis)'),
(174, 'Zuberbuhler', 'Chaco (Sáenz Peña - Chorotis)'),
(175, 'Venados Grandes', 'Chaco (Sáenz Peña - Chorotis)'),
(176, 'Chorotis', 'Chaco (Sáenz Peña - Chorotis)'),
(177, 'Güemes', 'Salta (Güemes - Salta - Campo Quijano)'),
(178, 'Campo Santo (El Bordo)', 'Salta (Güemes - Salta - Campo Quijano)'),
(179, 'Betania', 'Salta (Güemes - Salta - Campo Quijano)'),
(180, 'Batalla de Salta', 'Salta (Güemes - Salta - Campo Quijano)'),
(181, 'Salta', 'Salta (Güemes - Salta - Campo Quijano)'),
(182, 'Pacto de los Cerrillos', 'Salta (Güemes - Salta - Campo Quijano)'),
(183, 'Combate de Rosario de Lerma', 'Salta (Güemes - Salta - Campo Quijano)'),
(184, 'Campo Quijano', 'Salta (Güemes - Salta - Campo Quijano)'),
(185, 'Cipolletti', 'Neuquén (Tren del Valle)'),
(186, 'Neuquén', 'Neuquén (Tren del Valle)'),
(187, 'Plottier', 'Neuquén (Tren del Valle)'),
(188, 'Córdoba', 'Córdoba (Tren de las Sierras)'),
(189, 'Alta Córdoba', 'Córdoba (Tren de las Sierras)'),
(190, 'Hospital Neonatal', 'Córdoba (Tren de las Sierras)'),
(191, 'Rodríguez del Busto', 'Córdoba (Tren de las Sierras)'),
(192, 'La Tablada', 'Córdoba (Tren de las Sierras)'),
(193, 'Argüello', 'Córdoba (Tren de las Sierras)'),
(194, 'T. Narvaja', 'Córdoba (Tren de las Sierras)'),
(195, 'Dumesnil', 'Córdoba (Tren de las Sierras)'),
(196, 'La Calera', 'Córdoba (Tren de las Sierras)'),
(197, 'Casa Bamba', 'Córdoba (Tren de las Sierras)'),
(198, 'Cassaffousth', 'Córdoba (Tren de las Sierras)'),
(199, 'San Roque', 'Córdoba (Tren de las Sierras)'),
(200, 'Bialet Massé', 'Córdoba (Tren de las Sierras)'),
(201, 'Santa María', 'Córdoba (Tren de las Sierras)'),
(202, 'Cosquín', 'Córdoba (Tren de las Sierras)'),
(203, 'Casa Grande', 'Córdoba (Tren de las Sierras)'),
(204, 'Valle Hermoso', 'Córdoba (Tren de las Sierras)'),
(205, 'Villa María', 'Córdoba (Villa María - Córdoba)'),
(206, 'Tío Pujio', 'Córdoba (Villa María - Córdoba)'),
(207, 'James Craik', 'Córdoba (Villa María - Córdoba)'),
(208, 'Oliva', 'Córdoba (Villa María - Córdoba)'),
(209, 'Oncativo', 'Córdoba (Villa María - Córdoba)'),
(210, 'Manfredi', 'Córdoba (Villa María - Córdoba)'),
(211, 'Laguna Larga', 'Córdoba (Villa María - Córdoba)'),
(212, 'Pilar', 'Córdoba (Villa María - Córdoba)'),
(213, 'Río Segundo', 'Córdoba (Villa María - Córdoba)'),
(214, 'Toledo', 'Córdoba (Villa María - Córdoba)'),
(215, 'Córdoba', 'Córdoba (Villa María - Córdoba)'),
(216, 'Paraná', 'Entre Ríos (Paraná - Colonia Avellaneda)'),
(217, 'Ap. Francisco Ramírez', 'Entre Ríos (Paraná - Colonia Avellaneda)'),
(218, 'Ap. División De Los Andes', 'Entre Ríos (Paraná - Colonia Avellaneda)'),
(219, 'Ap. Miguel David', 'Entre Ríos (Paraná - Colonia Avellaneda)'),
(220, 'Ap. Las Garzas', 'Entre Ríos (Paraná - Colonia Avellaneda)'),
(221, 'Ap. Gdor.Parera', 'Entre Ríos (Paraná - Colonia Avellaneda)'),
(222, 'Ap. Salvador Caputto', 'Entre Ríos (Paraná - Colonia Avellaneda)'),
(223, 'Ap. Gdor Maya', 'Entre Ríos (Paraná - Colonia Avellaneda)'),
(224, 'Ramón A. Parera', 'Entre Ríos (Paraná - Colonia Avellaneda)'),
(225, 'Ap. Colonia Avellaneda', 'Entre Ríos (Paraná - Colonia Avellaneda)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id_reserva` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `DNI` int(11) DEFAULT NULL,
  `numTramite` int(11) DEFAULT NULL,
  `tipoPasajero` varchar(50) DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL,
  `telefono` varchar(100) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `localidad` varchar(100) DEFAULT NULL,
  `fecha` varchar(50) DEFAULT NULL,
  `origen` varchar(100) NOT NULL,
  `destino` varchar(100) NOT NULL,
  `tipoViaje` tinyint(4) DEFAULT NULL,
  `numComvoy` int(11) DEFAULT NULL,
  `formaDePago` varchar(20) DEFAULT NULL,
  `claseBoleto` varchar(50) DEFAULT NULL,
  `numAsiento` int(11) DEFAULT NULL,
  `precioPorPersona` decimal(16,2) DEFAULT NULL,
  `cantpasajeros` int(11) DEFAULT NULL,
  `precioTotal` decimal(16,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `destinos`
--
ALTER TABLE `destinos`
  ADD PRIMARY KEY (`id_destinos`);

--
-- Indices de la tabla `distancia`
--
ALTER TABLE `distancia`
  ADD KEY `id_distancia` (`id_distancia`);

--
-- Indices de la tabla `origen`
--
ALTER TABLE `origen`
  ADD PRIMARY KEY (`id_origen`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id_reserva`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `destinos`
--
ALTER TABLE `destinos`
  MODIFY `id_destinos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=226;

--
-- AUTO_INCREMENT de la tabla `distancia`
--
ALTER TABLE `distancia`
  MODIFY `id_distancia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT de la tabla `origen`
--
ALTER TABLE `origen`
  MODIFY `id_origen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=226;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
