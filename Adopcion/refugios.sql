-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 29-10-2015 a las 13:41:56
-- Versión del servidor: 5.5.46-0ubuntu0.14.04.2
-- Versión de PHP: 5.5.9-1ubuntu4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `refugios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foro`
--

CREATE TABLE IF NOT EXISTS `foro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pregunta` varchar(150) NOT NULL,
  `respuesta` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `foro`
--

INSERT INTO `foro` (`id`, `pregunta`, `respuesta`) VALUES
(1, '¿La adopción tiene algún costo?', 'No, ya que es ayudar a los refugios cuidando y llevando un nuevo miembro de la familia'),
(2, '¿Cómo puedo saber si son confiables los refugios para llevar un perro?', 'Los refugios que mencionamos aquí son 100% confiables.'),
(3, '¿Hay algun limite de adopcion?', 'El único requisito es poder mantener a tu mascota en buenas condiciones'),
(4, '¿Que pasa si ya no puedo mantener a mi mascota?', 'Debes ponerte en contacto con su refugio origen para llegar a un acuerdo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perros`
--

CREATE TABLE IF NOT EXISTS `perros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `imagen` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `perros`
--

INSERT INTO `perros` (`id`, `nombre`, `descripcion`, `imagen`) VALUES
(1, 'Ruffus', 'Edad: 2 años\r\nTodas las vacunas', 'inicio1.jpeg'),
(2, 'Spacky', 'Un perro amoroso que solo quiere ser feliz.', 'inicio2.jpg'),
(3, 'Rocky', 'El solo quería jugar', 'inicio3.jpg'),
(4, 'Susy', 'Valiente y audaz.', 'inicio4.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `refugios`
--

CREATE TABLE IF NOT EXISTS `refugios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(1000) DEFAULT NULL,
  `imagen` varchar(30) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `link` (`link`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `refugios`
--

INSERT INTO `refugios` (`id`, `nombre`, `descripcion`, `imagen`, `link`) VALUES
(1, 'Quédate Conmigo-Narices Frías', 'Información: Rehabilitación y resguardo de perritos en situación extrema de sufrimiento para ser adoptados por un hogar. Atlixco, Pue.\nTeléfonos: 2441129163  y   2441024773', '1.png', 'https://www.facebook.com/Quedate-Conmigo-Narices-Frias-428290637289879/timeline/'),
(2, 'Quédate Conmigo-narices Frías Hogar Temporal', 'Información: Tenemos como objetivos promover el bienestar animal en diversos sentidos, desde la promoción y difusión de todo lo que sea dirigido hacia condiciones óptimas de nuestras mascotas (perros y gatos), un hogar temporal que alberga a cachorros que de alguna forma lo necesitan más, participamos en programas y eventos que son generadores de bienestar animal. Atlixco, Pue.', '2.jpg', 'https://www.facebook.com/quedateconmigonaricesf.naricesfrias?ref=br_rs'),
(3, 'Salvando Huellitas Puebla', 'Información: Salvando Huellitas Puebla, fundación protectora de animales encargada de ser la voz de los animales, No contamos con refugio ni oficinas. Somos una asociación Poblana dedicada a rescatar, rehabilitar, esterilizar y poner en adopción perros de la calle o que han sufrido de maltrato. Cuautlancingo, Pue.\nContacto: salvandohuellitaspuebla@hotmail.com', '3.png', 'https://www.facebook.com/HuellitasEnPuebla'),
(4, 'Fryda Puebla', 'Información: FRYDA (Fundación de Respeto y Defensa Animal) es una A.C. en Puebla que busca desarrollar una cultura de respeto y protección de la vida animal. Surge de la necesidad de proteger a animales domésticos en situación de maltrato o abandono.\nContacto:\nPUEBLA, Pue. Tel: (222) 445.0308\n Cel: (222) 445.0308\nEmail: info@fryda.org.mx\nWeb: http://fryda.org.mx  \nTwitter: @FRYDApuebla', '4.png', 'https://www.facebook.com/frydapuebla'),
(5, 'FUPA Puebla', 'Información: Conoce a tu media naranja y ADOPTA un perro.\nContacto:\nPara ADOPTAR: adopta@fupa.org.mx \nPara COLABORAR: colabora@fupa.org.mx \nMascotas PERDIDAS: perdidos@fupa.org.mx \nMascotas ENCONTRADAS: encontrados@fupa.org.mx \nCONTACTO general, dudas y orientación sobre denuncias: contacto@fupa.org.mx', '5.jpg', 'http://fupapuebla.blogspot.mx/p/contacto.html');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
