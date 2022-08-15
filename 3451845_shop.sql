-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: fdb25.awardspace.net
-- Tiempo de generación: 30-05-2020 a las 18:52:24
-- Versión del servidor: 5.7.20-log
-- Versión de PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `3451845_shop`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `CARDS`
--

CREATE TABLE `CARDS` (
  `idCard` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `cardNumber` varchar(16) DEFAULT NULL,
  `cardExp` varchar(5) DEFAULT NULL,
  `cardCVV` varchar(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `CART`
--

CREATE TABLE `CART` (
  `idUser` int(11) DEFAULT NULL,
  `idProduct` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PRODUCTS`
--

CREATE TABLE `PRODUCTS` (
  `idProduct` int(11) NOT NULL,
  `productDescription` varchar(200) DEFAULT NULL,
  `productPrice` double DEFAULT NULL,
  `productImageURL` varchar(200) DEFAULT NULL,
  `productStock` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `PRODUCTS`
--

INSERT INTO `PRODUCTS` (`idProduct`, `productDescription`, `productPrice`, `productImageURL`, `productStock`) VALUES
(1, 'Arteck 2.4G Wireless Keyboard', 891.82, 'https://images-na.ssl-images-amazon.com/images/I/71%2BNa%2BxO2OL._AC_SL1500_.jpg', 200),
(2, 'Redragon K551 Mechanical Gaming Keyboard', 981.03, 'https://images-na.ssl-images-amazon.com/images/I/71shmEy62NL._AC_SL1500_.jpg', 50),
(3, 'Corsair K68 RGB Mechanical Gaming Keyboard', 2229.9, 'https://images-na.ssl-images-amazon.com/images/I/71GkA2%2BCMcL._AC_SL1500_.jpg', 30),
(4, 'Razer DeathAdder v2 Gaming Mouse', 1560.86, 'https://images-na.ssl-images-amazon.com/images/I/81A11OxpgXL._AC_SL1500_.jpg', 40),
(5, 'Logitech G203 Prodigy RGB Wired Gaming Mouse', 683.53, 'https://images-na.ssl-images-amazon.com/images/I/71BmDZ6u22L._AC_SL1500_.jpg', 200),
(6, 'Acer SB230 Bbix IPS Ultra-Thin Zero Frame Monitor ', 3991.91, 'https://images-na.ssl-images-amazon.com/images/I/61-%2BnGbJOSL._AC_SL1500_.jpg', 5),
(7, 'Asus VP28UQG 28" Monitor', 6177.43, 'https://images-na.ssl-images-amazon.com/images/I/91ttSUjDUzL._AC_SL1500_.jpg', 15),
(8, 'VON RACER Massage Gaming Chair', 2921.46, 'https://images-na.ssl-images-amazon.com/images/I/71OSYF-9eqL._AC_SL1500_.jpg', 12),
(9, 'MSI Force USB AlÃ¡mbrico Controller Gamepad', 686, 'https://images-na.ssl-images-amazon.com/images/I/510%2BzmnQM-L._AC_SL1024_.jpg', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `USERS`
--

CREATE TABLE `USERS` (
  `idUser` int(11) NOT NULL,
  `userName` varchar(50) DEFAULT NULL,
  `userEmail` varchar(60) DEFAULT NULL,
  `userPassword` varchar(50) DEFAULT NULL,
  `userProfilePicture` varchar(300) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `USERS`
--

INSERT INTO `USERS` (`idUser`, `userName`, `userEmail`, `userPassword`, `userProfilePicture`) VALUES
(12, 'Mauricio Emmanuel Avitia Maturino', 'restlessdisaster@gmail.com', 'gangster12', 'https://scontent.ftrc1-1.fna.fbcdn.net/v/t1.0-9/94488078_2890816220987872_9222455928920473600_o.jpg?_nc_cat=105&_nc_sid=09cbfe&_nc_ohc=z0Ummbb0zAwAX_P5d3h&_nc_ht=scontent.ftrc1-1.fna&oh=65e5fa946556b8e09fd5848cdb9314c0&oe=5EF6845B'),
(15, 'root ', 'root@gmail.com', 'pass123', 'https://rootear.com/files/2014/01/Root-Android-640x480.jpg?width=1200&enable=upscale'),
(13, 'ola ola', 'ola@gmail.com', 'gangster12', 'https://vignette.wikia.nocookie.net/dark-souls/images/b/b4/Caballero_Artorias_-_Imagen_promocional_02.jpg/revision/latest?cb=20170517054338&path-prefix=es'),
(14, 'dagh0022@gmail.com GonzÃ¡lez HernÃ¡ndez ', 'dagh0022@gmail.com', 'megustachuparanos', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `CARDS`
--
ALTER TABLE `CARDS`
  ADD PRIMARY KEY (`idCard`);

--
-- Indices de la tabla `CART`
--
ALTER TABLE `CART`
  ADD KEY `fk_idProducts` (`idProduct`),
  ADD KEY `fk_idUser` (`idUser`);

--
-- Indices de la tabla `PRODUCTS`
--
ALTER TABLE `PRODUCTS`
  ADD PRIMARY KEY (`idProduct`);

--
-- Indices de la tabla `USERS`
--
ALTER TABLE `USERS`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `CARDS`
--
ALTER TABLE `CARDS`
  MODIFY `idCard` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `PRODUCTS`
--
ALTER TABLE `PRODUCTS`
  MODIFY `idProduct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `USERS`
--
ALTER TABLE `USERS`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
