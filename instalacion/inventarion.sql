-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-01-2015 a las 23:58:08
-- Versión del servidor: 5.6.14
-- Versión de PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `inventario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `idCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Categoria` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idCategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `Nombre_Categoria`) VALUES
(1, 'Cercos'),
(2, 'Television'),
(3, 'Computacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `idClientes` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Cliente` varchar(30) DEFAULT NULL,
  `Apellido_Cliente` varchar(30) DEFAULT NULL,
  `Fecha_Ingreso` date DEFAULT NULL,
  `Telefono_Cliente` varchar(20) DEFAULT NULL,
  `Direccion_Cliente` varchar(45) DEFAULT NULL,
  `Estados_idEstados` int(11) DEFAULT NULL,
  PRIMARY KEY (`idClientes`),
  KEY `fk_Clientes_Estados1_idx` (`Estados_idEstados`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE IF NOT EXISTS `compras` (
  `idCompras` int(11) NOT NULL AUTO_INCREMENT,
  `Fecha_Compra` date DEFAULT NULL,
  `Monto_Compra` decimal(10,2) DEFAULT NULL,
  `Proveedores_idProveedores` int(11) NOT NULL,
  PRIMARY KEY (`idCompras`),
  KEY `fk_Compras_Proveedores1_idx` (`Proveedores_idProveedores`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_compra`
--

CREATE TABLE IF NOT EXISTS `detalles_compra` (
  `Compras_idCompras` int(11) NOT NULL,
  `Productos_idProductos` int(11) NOT NULL,
  `Cantidad_Compra` int(11) DEFAULT NULL,
  `Monto_Compra` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`Compras_idCompras`,`Productos_idProductos`),
  KEY `fk_Compras_has_Productos_Productos1_idx` (`Productos_idProductos`),
  KEY `fk_Compras_has_Productos_Compras1_idx` (`Compras_idCompras`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_ventas`
--

CREATE TABLE IF NOT EXISTS `detalles_ventas` (
  `Productos_idProductos` int(11) NOT NULL,
  `Ventas_idVentas` int(11) NOT NULL,
  `Cantidad_Producto` int(11) DEFAULT NULL,
  `Monto` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`Productos_idProductos`,`Ventas_idVentas`),
  KEY `fk_Productos_has_Ventas_Ventas1_idx` (`Ventas_idVentas`),
  KEY `fk_Productos_has_Ventas_Productos1_idx` (`Productos_idProductos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `devolucion_compra`
--

CREATE TABLE IF NOT EXISTS `devolucion_compra` (
  `Motivo_Devol_Compra` varchar(45) DEFAULT NULL,
  `Fecha_Devol_Compra` date DEFAULT NULL,
  `Cantidad_Devol_Compra` int(11) DEFAULT NULL,
  `Detalles_Compra_Compras_idCompras` int(11) NOT NULL,
  `Detalles_Compra_Productos_idProductos` int(11) NOT NULL,
  KEY `fk_Devolucion_Compra_Detalles_Compra1_idx` (`Detalles_Compra_Compras_idCompras`,`Detalles_Compra_Productos_idProductos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `devolucion_venta`
--

CREATE TABLE IF NOT EXISTS `devolucion_venta` (
  `Motivo_Devol_Venta` varchar(45) DEFAULT NULL,
  `Fecha_Devol_Venta` varchar(45) DEFAULT NULL,
  `Cantidad_Devol_Venta` int(11) DEFAULT NULL,
  `Detalles_Ventas_Productos_idProductos` int(11) NOT NULL,
  `Detalles_Ventas_Ventas_idVentas` int(11) NOT NULL,
  KEY `fk_Devolucion_Venta_Detalles_Ventas1_idx` (`Detalles_Ventas_Productos_idProductos`,`Detalles_Ventas_Ventas_idVentas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE IF NOT EXISTS `estados` (
  `idEstados` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Estado` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idEstados`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`idEstados`, `Nombre_Estado`) VALUES
(1, 'Amazonas'),
(2, 'Anzoátegui'),
(3, 'Apure'),
(4, 'Aragua'),
(5, 'Barinas'),
(6, 'Bolívar'),
(7, 'Carabobo'),
(8, 'Cojedes'),
(9, 'Delta Amacuro'),
(10, 'Distrito Capital'),
(11, 'Falcón'),
(12, 'Guárico'),
(13, 'Lara'),
(14, 'Mérida'),
(15, 'Miranda'),
(16, 'Monagas'),
(17, 'Nueva Esparta'),
(18, 'Portuguesa'),
(19, 'Sucre'),
(20, 'Táchira'),
(21, 'Trujillo'),
(22, 'Vargas'),
(23, 'Yaracuy'),
(24, 'Zulia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura_compras`
--

CREATE TABLE IF NOT EXISTS `factura_compras` (
  `Numero_Factura_Compras` varchar(20) NOT NULL,
  `Fecha_Factura_Compra` varchar(45) DEFAULT NULL,
  `Compras_idCompras` int(11) NOT NULL,
  `Forma_Pago_idForma_Pago` int(11) NOT NULL,
  PRIMARY KEY (`Numero_Factura_Compras`),
  KEY `fk_Factura_Compras_Compras1_idx` (`Compras_idCompras`),
  KEY `fk_Factura_Compras_Forma_Pago1_idx` (`Forma_Pago_idForma_Pago`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura_ventas`
--

CREATE TABLE IF NOT EXISTS `factura_ventas` (
  `Numero_Factura_Venta` varchar(20) NOT NULL,
  `Fecha_Factura_Venta` date DEFAULT NULL,
  `Ventas_idVentas` int(11) NOT NULL,
  `Forma_Pago_idForma_Pago` int(11) NOT NULL,
  PRIMARY KEY (`Numero_Factura_Venta`),
  KEY `fk_Factura_Ventas_Ventas1_idx` (`Ventas_idVentas`),
  KEY `fk_Factura_Ventas_Forma_Pago1_idx` (`Forma_Pago_idForma_Pago`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `forma_pago`
--

CREATE TABLE IF NOT EXISTS `forma_pago` (
  `idForma_Pago` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Forma_Pago` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idForma_Pago`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel_usuario`
--

CREATE TABLE IF NOT EXISTS `nivel_usuario` (
  `idNivel_Usuario` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion_Nivel` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idNivel_Usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `nivel_usuario`
--

INSERT INTO `nivel_usuario` (`idNivel_Usuario`, `Descripcion_Nivel`) VALUES
(1, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `idProductos` int(11) NOT NULL AUTO_INCREMENT,
  `Imagen` varchar(80) DEFAULT NULL,
  `Codigo` varchar(12) DEFAULT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Descripcion_Productos` varchar(45) DEFAULT NULL,
  `Precio_Costo` float DEFAULT NULL,
  `Precio_Venta` float DEFAULT NULL,
  `Stock` int(11) DEFAULT NULL,
  `Fecha_Creado` date DEFAULT NULL,
  `Categoria_idCategoria` int(11) DEFAULT NULL,
  PRIMARY KEY (`idProductos`),
  KEY `fk_Productos_Categoria1_idx` (`Categoria_idCategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE IF NOT EXISTS `proveedores` (
  `idProveedores` int(11) NOT NULL AUTO_INCREMENT,
  `RIF` varchar(12) DEFAULT NULL,
  `Nombre_Contacto` varchar(30) DEFAULT NULL,
  `Apellido_Contacto` varchar(30) DEFAULT NULL,
  `Nombre_Comercial` varchar(45) DEFAULT NULL,
  `Direccion_Comercio` varchar(45) DEFAULT NULL,
  `Fecha_Ingreso` date DEFAULT NULL,
  `Telefono` varchar(20) DEFAULT NULL,
  `Celular_Contacto` varchar(45) DEFAULT NULL,
  `Estados_idEstados` int(11) DEFAULT NULL,
  PRIMARY KEY (`idProveedores`,`Estados_idEstados`),
  KEY `fk_Proveedores_Estados1_idx` (`Estados_idEstados`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `Cedula_Usuario` int(11) NOT NULL,
  `Nombre_Usuario` varchar(30) DEFAULT NULL,
  `Apellido_Usuario` varchar(30) DEFAULT NULL,
  `Login` varchar(12) DEFAULT NULL,
  `Clave` varchar(12) DEFAULT NULL,
  `Correo_Usuario` varchar(30) DEFAULT NULL,
  `Telefono_Usuario` varchar(20) DEFAULT NULL,
  `Celular_Usuario` varchar(20) DEFAULT NULL,
  `Fecha_Usuario` date DEFAULT NULL,
  `Direccion_Usuario` varchar(80) DEFAULT NULL,
  `Nivel_Usuario_idNivel_Usuario` int(11) NOT NULL,
  `Estados_idEstados` int(11) DEFAULT NULL,
  PRIMARY KEY (`Cedula_Usuario`),
  KEY `fk_Usuario_Nivel_Usuario1_idx` (`Nivel_Usuario_idNivel_Usuario`),
  KEY `fk_Usuario_Estados1_idx` (`Estados_idEstados`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Cedula_Usuario`, `Nombre_Usuario`, `Apellido_Usuario`, `Login`, `Clave`, `Correo_Usuario`, `Telefono_Usuario`, `Celular_Usuario`, `Fecha_Usuario`, `Direccion_Usuario`, `Nivel_Usuario_idNivel_Usuario`, `Estados_idEstados`) VALUES
(7996633, 'Jorge', 'Mayora', 'Jmayora', 'LaGuaira01', 'jorgemayora@hotmail.com', '02129559883', '04129785018', '2014-12-31', 'Vereda 12, Casa 1205, Catia la Mar', 1, 22);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE IF NOT EXISTS `ventas` (
  `idVentas` int(11) NOT NULL AUTO_INCREMENT,
  `Fecha_Venta` date DEFAULT NULL,
  `Monto_Venta` decimal(10,2) DEFAULT NULL,
  `Clientes_idClientes` int(11) NOT NULL,
  PRIMARY KEY (`idVentas`),
  KEY `fk_Ventas_Clientes_idx` (`Clientes_idClientes`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `fk_Clientes_Estados1` FOREIGN KEY (`Estados_idEstados`) REFERENCES `estados` (`idEstados`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `fk_Compras_Proveedores1` FOREIGN KEY (`Proveedores_idProveedores`) REFERENCES `proveedores` (`idProveedores`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detalles_compra`
--
ALTER TABLE `detalles_compra`
  ADD CONSTRAINT `fk_Compras_has_Productos_Compras1` FOREIGN KEY (`Compras_idCompras`) REFERENCES `compras` (`idCompras`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Compras_has_Productos_Productos1` FOREIGN KEY (`Productos_idProductos`) REFERENCES `productos` (`idProductos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detalles_ventas`
--
ALTER TABLE `detalles_ventas`
  ADD CONSTRAINT `fk_Productos_has_Ventas_Productos1` FOREIGN KEY (`Productos_idProductos`) REFERENCES `productos` (`idProductos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Productos_has_Ventas_Ventas1` FOREIGN KEY (`Ventas_idVentas`) REFERENCES `ventas` (`idVentas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `devolucion_compra`
--
ALTER TABLE `devolucion_compra`
  ADD CONSTRAINT `fk_Devolucion_Compra_Detalles_Compra1` FOREIGN KEY (`Detalles_Compra_Compras_idCompras`, `Detalles_Compra_Productos_idProductos`) REFERENCES `detalles_compra` (`Compras_idCompras`, `Productos_idProductos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `devolucion_venta`
--
ALTER TABLE `devolucion_venta`
  ADD CONSTRAINT `fk_Devolucion_Venta_Detalles_Ventas1` FOREIGN KEY (`Detalles_Ventas_Productos_idProductos`, `Detalles_Ventas_Ventas_idVentas`) REFERENCES `detalles_ventas` (`Productos_idProductos`, `Ventas_idVentas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `factura_compras`
--
ALTER TABLE `factura_compras`
  ADD CONSTRAINT `fk_Factura_Compras_Compras1` FOREIGN KEY (`Compras_idCompras`) REFERENCES `compras` (`idCompras`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Factura_Compras_Forma_Pago1` FOREIGN KEY (`Forma_Pago_idForma_Pago`) REFERENCES `forma_pago` (`idForma_Pago`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `factura_ventas`
--
ALTER TABLE `factura_ventas`
  ADD CONSTRAINT `fk_Factura_Ventas_Forma_Pago1` FOREIGN KEY (`Forma_Pago_idForma_Pago`) REFERENCES `forma_pago` (`idForma_Pago`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Factura_Ventas_Ventas1` FOREIGN KEY (`Ventas_idVentas`) REFERENCES `ventas` (`idVentas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_Productos_Categoria1` FOREIGN KEY (`Categoria_idCategoria`) REFERENCES `categoria` (`idCategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD CONSTRAINT `fk_Proveedores_Estados1` FOREIGN KEY (`Estados_idEstados`) REFERENCES `estados` (`idEstados`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_Usuario_Estados1` FOREIGN KEY (`Estados_idEstados`) REFERENCES `estados` (`idEstados`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Usuario_Nivel_Usuario1` FOREIGN KEY (`Nivel_Usuario_idNivel_Usuario`) REFERENCES `nivel_usuario` (`idNivel_Usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `fk_Ventas_Clientes` FOREIGN KEY (`Clientes_idClientes`) REFERENCES `clientes` (`idClientes`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
